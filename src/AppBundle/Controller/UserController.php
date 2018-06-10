<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Company;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;

/**
* @Route("/api")
*/
class UserController extends FOSRestController
{


    /**
     * Current user detail
     *
     * @Rest\Get("/current", name="current_user_detail")
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * @View(StatusCode = 200,
     * serializerGroups = {"user_detail"}
     * )
     */
    public function currentAction()
    {
        $user = $this->getUser();
        return $user;
    }


	/**
     * TODO : ADMIN ONLY CAN SEE USERS OF HIS COMPANY AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
     *
     * User detail
     *
     * @Rest\Get("/user/{id}", name="user_detail")
     *
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_SUPER_ADMIN')")
     *
     * @View(StatusCode = 200,
     * serializerGroups = {"user_detail", "company_detail"}
     * )
     */
    public function userAction(User $user)
    {
        $admin = $this->getUser();
        $adminCompany = $admin->getUserCompany();
        $userCompany = $user->getUserCompany();
        if($userCompany === $adminCompany) {
            return $user;
        } else {
            return $this->view($admin, Response::HTTP_BAD_REQUEST);
        }

    }


    /**
     * My company details
     *
     * @Rest\Get("/my_company/detail", name="my_company_detail")
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * @View(StatusCode = 200,
     * serializerGroups = {"company_detail"}
     * )
     */
    public function myCompanyAction()
    {
        $user = $this->getUser();
        $company = $user->getUserCompany();
        return $company;
    }

    /**
     * Any company details (Super admin only)
     *
     * @Rest\Get("/company/{company}", name="company_detail")
     *
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     *
     * @View(StatusCode = 200,
     * serializerGroups = {"company_detail"}
     * )
     */
    public function companyAction($company)
    {
        $company = $this->getDoctrine()->getRepository('AppBundle:Company')->findOneBy(['companyName' => $company]);;
        return $company;
    }


     /**
     * Users of my company
     *
     * @Rest\Get("/my_company/user_list", name="my_users_list")
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * @View(statusCode = 200,
     * serializerGroups = {"user_list"}
     * )
     */
    public function myUserListAction()
    {
        $user = $this->getUser();
        $company = $user->getUserCompany();
        $companyId = $company->getId();
        $users = $this->getDoctrine()->getRepository('AppBundle:User')->findBy(['userCompany' => $companyId]);
        return $users;
    }


    /**
     * Users of one company (Super admin only)
     *
     * @Rest\Get("/{company}/user_list", name="company_user_list")
     *
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     *
     * @View(statusCode = 200,
     * serializerGroups = {"user_list"}
     * )
     */
    public function userListAction($company)
    {
    	$companyName = $this->getDoctrine()->getRepository('AppBundle:Company')->findOneBy(['companyName' => $company]);
    	$companyId = $companyName->getId();
        $users = $this->getDoctrine()->getRepository('AppBundle:User')->findBy(['userCompany' => $companyId]);
        return $users;
    }

}