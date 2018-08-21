<?php
/**
 * This file is part of the Bilmo API.
 *
 * GOMEZ José-Adrian j.gomez.17.j@gmail.com
 *
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;
use Hateoas\Configuration\Annotation as Hateoas;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 *
 * @Hateoas\Relation(
 *      "self",
 *      href = @Hateoas\Route(
 *          "user_detail",
 *          parameters = { "id" = "expr(object.getId())" },
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"user_detail", "user_list"}
 *      )
 * )
 *
 * @Hateoas\Relation(
 *      "delete",
 *      href = @Hateoas\Route(
 *          "delete_user",
 *          parameters = { "id" = "expr(object.getId())" },
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"user_detail", "user_list"},
 *          excludeIf = "expr(not is_granted(['ROLE_ADMIN']))"
 *      )
 * )
 *
 * @Hateoas\Relation(
 *      "create",
 *      href = @Hateoas\Route(
 *          "user_registration",
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"user_detail"},
 *          excludeIf = "expr(not is_granted(['ROLE_ADMIN']))"
 *      )
 * )
 *
 * @Hateoas\Relation(
 *     "company",
 *     embedded = @Hateoas\Embedded("expr(object.getUserCompany())"),
 *     exclusion = @Hateoas\Exclusion(
 *          groups = {"user_detail"}
 *     )
 * )
 *
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=25, unique=true, nullable=false)
     *
     * @Serializer\Groups({"user_list", "user_detail"})
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64, nullable=false)
     */
    private $password;

    /**
     * @ORM\Column(type="string", unique=true, nullable=false)
     *
     * @Serializer\Groups({"user_detail"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=64, nullable=false)
     *
     * @Serializer\Groups({"user_detail"})
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=64, nullable=false)
     *
     * @Serializer\Groups({"user_detail"})
     */
    private $lastName;

    /**
     * @ORM\Column(name="role", type="json_array", nullable=false)
     *
     * @Serializer\Groups({"user_detail"})
     *
     * @Assert\Type("array")
     *
     */
    private $roles;

    /**
     * @ORM\ManyToOne(targetEntity="Company", cascade={"all"}, fetch="EAGER")
     */
    private $userCompany;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userName
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set userCompany
     *
     * @param \AppBundle\Entity\Company $userCompany
     *
     * @return User
     */
    public function setUserCompany(\AppBundle\Entity\Company $userCompany = null)
    {
        $this->userCompany = $userCompany;

        return $this;
    }

    /**
     * Get userCompany
     *
     * @return \AppBundle\Entity\Company
     */
    public function getUserCompany()
    {
        return $this->userCompany;
    }

    /**
     * Get Roles
     *
     * @return array
     */
    public function getRoles()
    {
        $roles = $this->roles;

        return array_unique($roles);
    }

    /**
     * Set Roles
     *
     * @param array $roles
     *
     * @return array
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get Salt
     *
     * @return null
     */
    public function getSalt()
    {
        return null;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
        ) = unserialize($serialized);
    }

    /** eraseCredentials */
    public function eraseCredentials()
    {
    }
}
