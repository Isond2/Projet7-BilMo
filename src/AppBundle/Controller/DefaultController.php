<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Fabricant;
use AppBundle\Entity\Phones;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;


class DefaultController extends Controller
{

    /**
     * @Rest\Get("/phones", name="app_phones_list")
     * @View(
     *     statusCode = 200,
     *     serializerGroups = {"list_action"}
     * )
     */
    public function listAction()
    {
        $phones = $this->getDoctrine()->getRepository('AppBundle:Phones')->findAll();
        return $phones;
    }

    /**
     * @Rest\Get("/phones/{id}", name="app_phones_detail")
     * @View(
     *     statusCode = 200,
     *     serializerGroups = {"list_action"}
     * )
     */
    public function phoneAction(Phones $phone)
    {
        return $phone;
    }
}
