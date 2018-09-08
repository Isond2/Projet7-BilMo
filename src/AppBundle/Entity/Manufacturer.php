<?php
/**
 * This file is part of the Bilmo API.
 *
 * GOMEZ José-Adrian j.gomez.17.j@gmail.com
 *
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Hateoas\Configuration\Annotation as Hateoas;

/**
 * Manufacturer
 *
 * @ORM\Table(name="manufacturer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ManufacturerRepository")
 *
 * @Hateoas\Relation(
 *      "self",
 *      href = @Hateoas\Route(
 *          "manufacturer_detail",
 *          parameters = { "manufacturer" = "expr(object.getManufacturerName())" },
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"all_phone_list", "phone_detail", "manufacturer_list", "manufacturer_detail"}
 *      )
 * )
 *
 * @Hateoas\Relation(
 *      "phone_list",
 *      href = @Hateoas\Route(
 *          "phone_list_manufacturer",
 *          parameters = { "manufacturer" = "expr(object.getManufacturerName())" },
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"phone_detail", "manufacturer_list", "manufacturer_detail"}
 *      )
 * )
 *
 * @Hateoas\Relation(
 *      "all_phone_list",
 *      href = @Hateoas\Route(
 *          "phones_list",
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"manufacturer_detail"}
 *      )
 * )
 *
 */
class Manufacturer
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
     * @var string
     *
     * @ORM\Column(name="ManufacturerName", type="string", length=255, unique=true)
     *
     * @Serializer\Groups({"phone_detail", "manufacturer_detail"})
     */
    private $manufacturerName;

     /**
     * @ORM\OneToMany(targetEntity="Phones", mappedBy="phoneManufacturer", cascade={"persist"})
     */
    private $manufacturerPhones;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->manufacturerPhones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set manufacturerName
     *
     * @param string $manufacturerName
     *
     * @return Manufacturer
     */
    public function setManufacturerName($manufacturerName)
    {
        $this->manufacturerName = $manufacturerName;

        return $this;
    }

    /**
     * Get manufacturerName
     *
     * @return string
     */
    public function getManufacturerName()
    {
        return $this->manufacturerName;
    }

    /**
     * Set manufacturerPhones
     *
     * @param string $manufacturerPhones
     *
     * @return Manufacturer
     */
    public function setManufacturerPhones($manufacturerPhones)
    {
        $this->manufacturerPhones = $manufacturerPhones;

        return $this;
    }

    /**
     * Get manufacturerPhones
     *
     * @return string
     */
    public function getManufacturerPhones()
    {
        return $this->manufacturerPhones;
    }

    /**
     * Add manufacturerPhone
     *
     * @param \AppBundle\Entity\Phones $manufacturerPhone
     *
     * @return Manufacturer
     */
    public function addManufacturerPhone(\AppBundle\Entity\Phones $manufacturerPhone)
    {
        $this->manufacturerPhones[] = $manufacturerPhone;

        return $this;
    }

    /**
     * Remove manufacturerPhone
     *
     * @param \AppBundle\Entity\Phones $manufacturerPhone
     */
    public function removeManufacturerPhone(\AppBundle\Entity\Phones $manufacturerPhone)
    {
        $this->manufacturerPhones->removeElement($manufacturerPhone);
    }
}
