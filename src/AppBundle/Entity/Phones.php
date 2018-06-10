<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Hateoas\Configuration\Annotation as Hateoas;

/**
 * Phones
 *
 * @ORM\Table(name="phones")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhonesRepository")
 *
 * @Hateoas\Relation(
 *      "self",
 *      href = @Hateoas\Route(
 *          "phones_detail",
 *          parameters = { "id" = "expr(object.getId())" },
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"all_phone_list", "phone_detail", "manufacturer_list"}
 *      )
 * )
 *
 * @Hateoas\Relation(
 *      "all phone_list",
 *      href = @Hateoas\Route(
 *          "phones_list",
 *          absolute = true
 *      ),
 *      exclusion = @Hateoas\Exclusion(
 *          groups = {"phone_detail"}
 *      )
 * )
 *
 * @Hateoas\Relation(
 *     "manufacturer",
 *     embedded = @Hateoas\Embedded("expr(object.getPhoneManufacturer())"),
 *     exclusion = @Hateoas\Exclusion(
 *          groups = {"phone_detail"}
 *     )
 * )
 *
 */
class Phones
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
     * @ORM\Column(name="phone_name", type="string", length=255, unique=true)
     * @Serializer\Groups({"all_phone_list", "phone_detail", "manufacturer_list"})
     */
    private $phoneName;

    /**
     * @var int
     *
     * @ORM\Column(name="phone_price", type="integer")
     * @Serializer\Groups({"all_phone_list", "phone_detail", "manufacturer_list"})
     */
    private $phonePrice;


    /**
     * @var string
     *
     * @ORM\Column(name="phone_description", type="text")
     * @Serializer\Groups({"phone_detail"})
     */
    private $phoneDescription;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Manufacturer", cascade={"all"}, fetch="EAGER")
     */
    private $phoneManufacturer;

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
     * Set phoneName
     *
     * @param string $phoneName
     *
     * @return Phones
     */
    public function setPhoneName($phoneName)
    {
        $this->phoneName = $phoneName;

        return $this;
    }

    /**
     * Get phoneName
     *
     * @return string
     */
    public function getPhoneName()
    {
        return $this->phoneName;
    }

    /**
     * Set phonePrice
     *
     * @param string $phonePrice
     *
     * @return Phones
     */
    public function setPhonePrice($phonePrice)
    {
        $this->phonePrice = $phonePrice;

        return $this;
    }

    /**
     * Get phonePrice
     *
     * @return string
     */
    public function getPhonePrice()
    {
        return $this->phonePrice;
    }

    /**
     * Set phoneManufacturer
     *
     * @param string $phoneManufacturer
     *
     * @return Phones
     */
    public function setPhoneManufacturer($phoneManufacturer)
    {
        $this->phoneManufacturer = $phoneManufacturer;

        return $this;
    }

    /**
     * Get phoneManufacturer
     *
     * @return string
     */
    public function getPhoneManufacturer()
    {
        return $this->phoneManufacturer;
    }

    /**
     * Set phoneDescription
     *
     * @param string $phoneDescription
     *
     * @return Phones
     */
    public function setPhoneDescription($phoneDescription)
    {
        $this->phoneDescription = $phoneDescription;

        return $this;
    }

    /**
     * Get phoneDescription
     *
     * @return string
     */
    public function getPhoneDescription()
    {
        return $this->phoneDescription;
    }
}
