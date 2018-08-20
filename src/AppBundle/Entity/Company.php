<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Hateoas\Configuration\Annotation as Hateoas;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 *
 * @Hateoas\Relation(
 *      "self",
 *      href = @Hateoas\Route(
 *          "my_company_detail",
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"user_detail", "company_detail"},
 *          excludeIf = "expr(not is_granted(['ROLE_ADMIN']))"
 *      )
 * )
 *
 * @Hateoas\Relation(
 *      "self",
 *      href = @Hateoas\Route(
 *          "company_detail",
 *          parameters = { "company" = "expr(object.getCompanyName())" },
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"user_detail", "company_detail"},
 *          excludeIf = "expr(not is_granted(['ROLE_SUPER_ADMIN']))"
 *      )
 * )
 *
 * @Hateoas\Relation(
 *      "user_list",
 *      href = @Hateoas\Route(
 *          "my_users_list",
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"user_detail", "company_detail"},
 *          excludeIf = "expr(not is_granted(['ROLE_ADMIN']))"
 *      )
 * )
 *
 * @Hateoas\Relation(
 *      "user_list",
 *      href = @Hateoas\Route(
 *          "company_user_list",
 *          parameters = { "company" = "expr(object.getCompanyName())" },
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"user_detail", "company_detail"},
 *          excludeIf = "expr(not is_granted(['ROLE_SUPER_ADMIN']))"
 *      )
 * )
 */
class Company
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true, nullable=false)
     *
     * @Serializer\Groups({"company_detail", "user_detail"})
     */
    private $companyName;

     /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="userCompany", cascade={"persist"})
     */
    private $CompanyUsers;

    /**
     * @ORM\Column(type="string", unique=true, nullable=false)
     *
     * @Serializer\Groups({"company_detail", "user_detail"})
     */
    private $adressePostale;

    /**
     * @ORM\Column(type="string", length=14, unique=true, nullable=false)
     *
     * @Serializer\Groups({"company_detail", "user_detail"})
     */
    private $siret;

    /**
     * @ORM\Column(type="string", unique=true, nullable=false)
     *
     * @Serializer\Groups({"company_detail", "user_detail"})
     */
    private $url;






    /**
     * Constructor
     */
    public function __construct()
    {
        $this->CompanyUsers = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set companyName
     *
     * @param string $companyName
     *
     * @return Company
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Add companyUser
     *
     * @param \AppBundle\Entity\User $companyUser
     *
     * @return Company
     */
    public function addCompanyUser(\AppBundle\Entity\User $companyUser)
    {
        $this->CompanyUsers[] = $companyUser;

        return $this;
    }

    /**
     * Remove companyUser
     *
     * @param \AppBundle\Entity\User $companyUser
     */
    public function removeCompanyUser(\AppBundle\Entity\User $companyUser)
    {
        $this->CompanyUsers->removeElement($companyUser);
    }

    /**
     * Get companyUsers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompanyUsers()
    {
        return $this->CompanyUsers;
    }
}
