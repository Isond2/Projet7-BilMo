<?php
/**
 * This file is part of the Bilmo API.
 *
 * GOMEZ José-Adrian j.gomez.17.j@gmail.com
 *
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Manufacturer;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Phones;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Nelmio\ApiDocBundle\Annotation as Doc;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Cache\Simple\FilesystemCache;

/**
* @Route("/api")
*/
class DefaultController extends FOSRestController
{

    /**
     * Phone detail
     *
     * @Rest\Get("/phone/{id}", name="phones_detail")
     *
     * @Security("has_role('ROLE_USER')")
     *
     * @View(
     *     statusCode = 200,
     *     serializerGroups = {"phone_detail"}
     * )
     *
     * @Doc\ApiDoc(
     *     section="Phones",
     *     resource=true,
     *     description="Get phone detail",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The phone unique identifier."
     *         }
     *     }
     * )
     *
     * @param  Phones $phone
     *
     * @return json
     */
    public function phoneAction(Phones $phone)
    {

	$cache = new FilesystemCache();
	$phoneId = $phone->getId();
	if (!$cache->has('phone'.$phoneId.'')) {
    	$cache->set('phone'.$phoneId.'', $phone, 3600);
    	return $phone;
	}

	$phoneCache = $cache->get('phone'.$phoneId.'');
    return $phoneCache;

    }

    /**
     * List of all phones
     *
     * @Rest\Get("/phones", name="phones_list")
     *
     * @Security("has_role('ROLE_USER')")
     *
     * @View(
     *     statusCode = 200,
     *     serializerGroups = {"all_phone_list"}
     * )
     *
     * @Doc\ApiDoc(
     *     section="Phones",
     *     resource=true,
     *     description="Get the list of all phones"
     * )
     *
     * @return json
     */
    public function listAction()
    {
    $cache = new FilesystemCache();
	if (!$cache->has('phoneList.all')) {
		$phones = $this->getDoctrine()->getRepository('AppBundle:Phones')->findAll();
    	$cache->set('phoneList.all', $phones, 3600);
    	return $phones;
	}
	$listCache = $cache->get('phoneList.all');
    return $listCache;
    }

    /**
     * Phones list of one manufacturer
     *
     * @Rest\Get("/phones/{manufacturer}", name="phone_list_manufacturer")
     *
     * @Security("has_role('ROLE_USER')")
     *
     * @View(statusCode = 200,
     * serializerGroups = {"manufacturer_list"}
     * )
     *
     * @Doc\ApiDoc(
     *     section="Phones",
     *     resource=true,
     *     description="Get the list of the phones from one manufacturer",
     *     requirements={
     *         {
     *             "name"="manufacturer",
     *             "dataType"="string",
     *             "requirements"="[A-Za-z- ]+",
     *             "description"="The manufacturer name."
     *         }
     *     }
     * )
     *
     * @param manufacturer $manufacturer
     *
     * @return json
     */
    public function phoneListAction($manufacturer)
    {

   	$cache = new FilesystemCache();
   	$manufacturerName = $this->getDoctrine()->getRepository('AppBundle:Manufacturer')->findOneBy(['manufacturerName' => $manufacturer]);

   	if ($manufacturerName===null) {
        		return $this->view(Response::HTTP_NOT_FOUND)->setStatusCode('404');
        	}

    $manufacturerId = $manufacturerName->getId();

	if (!$cache->has('phoneList'.$manufacturerId.'')) {

        $phones = $this->getDoctrine()->getRepository('AppBundle:Phones')->findBy(['phoneManufacturer' => $manufacturerId]);
		$cache->set('phoneList'.$manufacturerId.'', $phones, 3600);
        return $phones;
	}

	$listCache = $cache->get('phoneList'.$manufacturerId.'');
    return $listCache;

    }

    /**
     * Any manufacturer details
     *
     * @Rest\Get("/manufacturer/{manufacturer}", name="manufacturer_detail")
     *
     * @Security("has_role('ROLE_USER')")
     *
     * @View(StatusCode = 200,
     * serializerGroups = {"manufacturer_detail"}
     * )
     *
     * @Doc\ApiDoc(
     *     section="Phones",
     *     resource=true,
     *     description="Get manufacturer detail",
     *     requirements={
     *         {
     *             "name"="manufacturer",
     *             "dataType"="string",
     *             "requirements"="[A-Za-z- ]+",
     *             "description"="The manufacturer name."
     *         }
     *     }
     * )
     *
     * @param manufacturer $manufacturer
     *
     * @return json
     */
    public function manufacturerAction($manufacturer)
    {
    $cache = new FilesystemCache();
    $manufacturerName = $this->getDoctrine()->getRepository('AppBundle:Manufacturer')->findOneBy(['manufacturerName' => $manufacturer]);
    if ($manufacturerName===null) {
    	return $this->view(Response::HTTP_NOT_FOUND)->setStatusCode('404');
    }

	if (!$cache->has('manufacturer'.$manufacturer.'')) {
        $manufacturerObject = $this->getDoctrine()->getRepository('AppBundle:Manufacturer')->findOneBy(['manufacturerName' => $manufacturer]);
    	$cache->set('manufacturer'.$manufacturer.'', $manufacturerObject, 3600);
    	return $manufacturerObject;
	}

	$manufacturerCache = $cache->get('manufacturer'.$manufacturer.'');
    return $manufacturerCache;
    }
}
