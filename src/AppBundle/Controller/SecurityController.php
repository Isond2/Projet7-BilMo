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
use AppBundle\Exception\ResourceValidationException;
use Nelmio\ApiDocBundle\Annotation as Doc;

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
     * @Rest\View(StatusCode = 201,
     *     serializerGroups = {"user_detail"}
     * )
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * @ParamConverter("user", converter="fos_rest.request_body")
     *
     * @Rest\RequestParam(
     *      name = "username",
     *      nullable = false,
     *      description = "User's username."
     * )
     *
     * @Rest\RequestParam(
     *      name = "password",
     *      nullable = false,
     *      description = "User's password."
     * )
     *
     * @Rest\RequestParam(
     *      name = "email",
     *      requirements = "[A-Za-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}",
     *      nullable = false,
     *      description = "User's email."
     * )
     *
     * @Rest\RequestParam(
     *      name = "first_name",
     *      requirements = "[A-Za-z- ]+",
     *      nullable = false,
     *      description = "User's firstname."
     * )
     *
     * @Rest\RequestParam(
     *      name = "last_name",
     *      requirements = "[A-Za-z- ]+",
     *      nullable = false,
     *      description = "User's lastname."
     * )
     *
     * @Rest\RequestParam(
     *      name = "role",
     *      requirements = "ROLE_USER",
     *      default = "ROLE_USER",
     *      nullable = false,
     *      description = "User's Role (Must be ROLE_USER)."
     * )
     *
     * @Doc\ApiDoc(
     *     description="Create an User (Admins can only create users attach to their own company.",
     *     section="User's security"
     * )
     */
    public function registerAction(User $user, UserPasswordEncoderInterface $encoder, ConstraintViolationList $violations, $role)
    {

        if (count($violations)) {
            $message = 'The JSON sent contains invalid data. Here are the errors you need to correct: ';
            foreach ($violations as $violation) {
                $message .= sprintf("Field %s: %s ", $violation->getPropertyPath(), $violation->getMessage());
            }

            throw new ResourceValidationException($message);
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
     * @Rest\View(StatusCode = 201,
     *     serializerGroups = {"user_detail"}
     * )
     *
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     *
     * @ParamConverter("user", converter="fos_rest.request_body")
     *
     * @Rest\RequestParam(
     *      name = "username",
     *      nullable = false,
     *      description = "Admin's username."
     * )
     *
     * @Rest\RequestParam(
     *      name = "password",
     *      nullable = false,
     *      description = "Admin's password."
     * )
     *
     * @Rest\RequestParam(
     *      name = "email",
     *      requirements = "[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}",
     *      nullable = false,
     *      description = "Admin's email."
     * )
     *
     * @Rest\RequestParam(
     *      name = "first_name",
     *      requirements = "[A-Za-z- ]+",
     *      nullable = false,
     *      description = "Admin's firstname."
     * )
     *
     * @Rest\RequestParam(
     *      name = "last_name",
     *      requirements = "[A-Za-z- ]+",
     *      nullable = false,
     *      description = "Admin's lastname."
     * )
     * @Rest\RequestParam(
     *      name = "role",
     *      requirements = "ROLE_ADMIN",
     *      default = "ROLE_ADMIN",
     *      nullable = false,
     *      description = "Admin's Role (must be ROLE_ADMIN)."
     * )
     *
     * @Rest\RequestParam(
     *      name = "user_company",
     *      nullable = false,
     *      description = "Create the Company of the admin."
     * )
     *
     * @Doc\ApiDoc(
     *     resource=true,
     *     description="Create an Admin",
     *     section="User's security"
     * )
     *
     */
    public function registerAdminAction(User $user, UserPasswordEncoderInterface $encoder, ConstraintViolationList $violations, $role)
    {
        if (count($violations)) {

            $message = 'The JSON sent contains invalid data. Here are the errors you need to correct: ';

                foreach ($violations as $violation) {
                    $message .= sprintf("Field %s: %s ", $violation->getPropertyPath(), $violation->getMessage());
                }

            throw new ResourceValidationException($message);
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
     *
     * @Doc\ApiDoc(
     *     resource=true,
     *     description="Delete one user.",
     *     section="User's security",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The user unique identifier."
     *         }
     *     }
     * )
     */
    public function delUserAction(User $user)
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