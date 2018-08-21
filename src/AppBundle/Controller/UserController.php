<?php
/**
 * This file is part of the Bilmo API.
 *
 * GOMEZ José-Adrian j.gomez.17.j@gmail.com
 *
 */

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
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Nelmio\ApiDocBundle\Annotation as Doc;

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
     *
     * @Doc\ApiDoc(
     *     section="Users",
     *     resource=true,
     *     description="Get my user's detail"
     * )
     *
     * @return json
     */
    public function currentAction()
    {
        $user = $this->getUser();

        return $user;
    }


    /**
     * User detail (SUPER_ADMIN can have all users detail , but ROLE_ADMIN can only have the detail of the users from the company he is attached to.)
     *
     * @Rest\Get("/user/{id}", name="user_detail")
     *
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_SUPER_ADMIN')")
     *
     * @View(StatusCode = 200,
     * serializerGroups = {"user_detail", "company_detail"}
     * )
     *
     * @Doc\ApiDoc(
     *     section="Users",
     *     resource=true,
     *     description="Get the detail of one user",
     *     requirements={
     *         {
     *             "name"="user",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The user unique identifier."
     *         }
     *     }
     * )
     *
     * @param  User                          $user
     * @param  AuthorizationCheckerInterface $authChecker
     *
     * @return json
     */
    public function userAction(User $user, AuthorizationCheckerInterface $authChecker)
    {
        $admin = $this->getUser();
        if (true === $authChecker->isGranted('ROLE_SUPER_ADMIN')) {
            return $user;
        }

        $adminCompany = $admin->getUserCompany();
        $userCompany = $user->getUserCompany();

        if ($userCompany === $adminCompany) {
            return $user;
        }

        return $this->view(Response::HTTP_BAD_REQUEST);
    }


    /**
     * My company details (current logged user's company)
     *
     * @Rest\Get("/my_company/detail", name="my_company_detail")
     *
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_SUPER_ADMIN')")
     *
     * @View(StatusCode = 200,
     * serializerGroups = {"company_detail"}
     * )
     *
     * @Doc\ApiDoc(
     *     section="Users",
     *     resource=true,
     *     description="Get the detail of my company"
     * )
     *
     * @return json
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
     *
     * @Doc\ApiDoc(
     *     section="Users",
     *     resource=true,
     *     description="Get the detail of one company",
     *     requirements={
     *         {
     *             "name"="company",
     *             "dataType"="string",
     *             "requirements"="[A-Za-z- ]+",
     *             "description"="The company name."
     *         }
     *     }
     * )
     *
     * @param  company $company
     *
     * @return json
     */
    public function companyAction($company)
    {
        $company = $this->getDoctrine()->getRepository('AppBundle:Company')->findOneBy(['companyName' => $company]);
        ;

        return $company;
    }


     /**
     * Users of my company (list of users of the current logged user's company)
     *
     * @Rest\Get("/my_company/user_list", name="my_users_list")
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * @View(statusCode = 200,
     * serializerGroups = {"user_list"}
     * )
     *
     * @Doc\ApiDoc(
     *     section="Users",
     *     resource=true,
     *     description="Get the user's list of my company"
     * )
     *
     * @return json
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
     *
     * @Doc\ApiDoc(
     *     section="Users",
     *     resource=true,
     *     description="Get the user's list of one company",
     *     requirements={
     *         {
     *             "name"="company",
     *             "dataType"="string",
     *             "requirements"="[A-Za-z- ]+",
     *             "description"="The company name."
     *         }
     *     }
     * )
     *
     * @param  company $company
     *
     * @return json
     */
    public function userListAction($company)
    {
        $companyName = $this->getDoctrine()->getRepository('AppBundle:Company')->findOneBy(['companyName' => $company]);
        $companyId = $companyName->getId();
        $users = $this->getDoctrine()->getRepository('AppBundle:User')->findBy(['userCompany' => $companyId]);

        return $users;
    }
}
