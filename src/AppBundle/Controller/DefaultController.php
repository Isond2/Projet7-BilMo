<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Manufacturer;
use AppBundle\Entity\Phones;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
* @Route("/api")
*/
class DefaultController extends Controller
{

    /**
     * Phone detail
     *
     * @Rest\Get("/phones/{id}", name="phones_detail")
     *
     * @Security("has_role('ROLE_USER')")
     *
     * @View(
     *     statusCode = 200,
     *     serializerGroups = {"phone_detail"}
     * )
     */

    public function phoneAction(Phones $phone)
    {
        return $phone;
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
     */
    public function listAction()
    {
        $phones = $this->getDoctrine()->getRepository('AppBundle:Phones')->findAll();
        return $phones;
    }

    /**
     * Phones list of one manufacturer
     *
     * @Rest\Get("/phone_list/{manufacturer}", name="phone_list_manufacturer")
     *
     * @Security("has_role('ROLE_USER')")
     *
     * @View(statusCode = 200,
     * serializerGroups = {"manufacturer_list"}
     * )
     */
    public function phoneListAction($manufacturer)
    {
        $manufacturerName = $this->getDoctrine()->getRepository('AppBundle:Manufacturer')->findOneBy(['manufacturerName' => $manufacturer]);
        $manufacturerId = $manufacturerName->getId();
        $phones = $this->getDoctrine()->getRepository('AppBundle:Phones')->findBy(['phoneManufacturer' => $manufacturerId]);
        return $phones;
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
     */
    public function manufacturerAction($manufacturer)
    {
        $manufacturer = $this->getDoctrine()->getRepository('AppBundle:Manufacturer')->findOneBy(['manufacturerName' => $manufacturer]);;
        return $manufacturer;
    }


}
