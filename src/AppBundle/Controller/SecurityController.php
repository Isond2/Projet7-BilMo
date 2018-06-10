<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Company;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\ConstraintViolationList;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use FOS\RestBundle\Controller\Annotations\View;

/**
* @Route("/api")
*/
class SecurityController extends FOSRestController
{
    /**
     * Allows a ROLE_ADMIN to create a ROLE_USER
     *
     * @Rest\Post(
     *		path = "/register",
     *		name = "user_registration",
     * )
     * @Rest\View(StatusCode = 201)
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * @ParamConverter("user", converter="fos_rest.request_body")
     *
     * @Rest\RequestParam(
     *      name = "role",
     *      requirements = "ROLE_USER",
     *      default = "ROLE_USER",
     *      nullable = true,
     *      description = "Create User."
     * )
     *
     * @View(serializerGroups = {"user_detail"})
     *
     */
    public function registerAction(User $user, UserPasswordEncoderInterface $encoder, ConstraintViolationList $violations, $role)
    {
        if (count($violations)) {
            return $this->view($violations, Response::HTTP_BAD_REQUEST);
        }

        $em = $this->getDoctrine()->getManager();
        $admin = $this->getUser();
        $company = $admin->getUserCompany();
        $user->setUserCompany($company);
        $password = $user->getPassword();
        $user->setPassword($encoder->encodePassword($user, $password));
        $user->setRoles(array($role));
        $em->persist($user);
        $em->flush();

        return $this->view($user, Response::HTTP_CREATED, ['Location' => $this->generateUrl('user_detail', ['id' => $user->getId(), UrlGeneratorInterface::ABSOLUTE_URL])]);
    }

    /**
     * Allows a ROLE_SUPER_ADMIN to create a ROLE_ADMIN
     *
     * @Rest\Post(
     *      path = "/register_admin",
     *      name = "admin_registration",
     * )
     * @Rest\View(StatusCode = 201)
     *
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     *
     * @ParamConverter("user", converter="fos_rest.request_body")
     *
     * @Rest\RequestParam(
     *      name = "role",
     *      requirements = "ROLE_ADMIN",
     *      default = "ROLE_ADMIN",
     *      nullable = true,
     *      description = "Create Admin."
     * )
     * @Rest\RequestParam(
     *      name = "user_company",
     *      nullable = false,
     *      description = "Create Company."
     * )
     *
     * @View(serializerGroups = {"user_detail"})
     *
     */
    public function registerAdminAction(User $user, UserPasswordEncoderInterface $encoder, ConstraintViolationList $violations, $role)
    {
        if (count($violations)) {
            return $this->view($violations, Response::HTTP_BAD_REQUEST);
        }

        $em = $this->getDoctrine()->getManager();
        $password = $user->getPassword();
        $user->setPassword($encoder->encodePassword($user, $password));
        $user->setRoles(array($role));
        $em->persist($user);
        $em->flush();

        return $this->view($user, Response::HTTP_CREATED, ['Location' => $this->generateUrl('user_detail', ['id' => $user->getId(), UrlGeneratorInterface::ABSOLUTE_URL])]);
    }

    /**
     * Allows a ROLE_ADMIN to delete an user
     *
     * @Rest\Delete(
     *     path = "/delete_user/{id}",
     *     name = "delete_user",
     *     requirements = {"id"="\d+"}
     * )
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * @View(statusCode=204,
     *     serializerGroups = {"user_detail"}
     * )
     */
    public function delUserAction(User $user, $id)
    {
        $admin = $this->getUser();
        $adminCompany = $admin->getUserCompany();
        $userCompany = $user->getUserCompany();
        if($userCompany === $adminCompany) {
            $em = $this->getDoctrine()->getManager();
            $user->setUserCompany(null);
            $em->remove($user);
            $em->flush();
        } else {
            return $this->view($admin, Response::HTTP_BAD_REQUEST);
        }
    }

}





/**




     * @Rest\Post(
     *      path = "/company-registration",
     *      name = "company_registration",
     * )
     * @Rest\View(StatusCode = 201)
     * @ParamConverter("company", converter="fos_rest.request_body")

    public function registerCompanyAction(Company $company)
    {
        $em = $this->getDoctrine()->getManager();

        $em->persist($company);
        $em->flush();

        return $this->view($company, Response::HTTP_CREATED, ['Location' => $this->generateUrl('company_detail', ['id' => $company->getId(), UrlGeneratorInterface::ABSOLUTE_URL])]);
    }

* @Doc\ApiDoc(
     *     resource=true,
     *     description="Delete one user.",
     *     section="Users",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The id of the user to delete"
     *         }
     *     }
*/