<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Phones
 *
 * @ORM\Table(name="phones")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhonesRepository")
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
     *   
     * @ORM\ManyToOne(targetEntity="Fabricant", cascade={"all"}, fetch="EAGER")
     * @Serializer\Groups({"list_action"})
     */
    private $phoneFabricant;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_name", type="string", length=255, unique=true)
     * @Serializer\Groups({"list_action"})
     */
    private $phoneName;

    /**
     * @var int
     *
     * @ORM\Column(name="phone_price", type="integer")
     * @Serializer\Groups({"list_action"})
     */
    private $phonePrice;


    /**
     * @var string
     *
     * @ORM\Column(name="phone_description", type="text")
     * @Serializer\Groups({"list_action"})
     */
    private $phoneDescription;


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
     * Set phoneFabricant
     *
     * @param string $phoneFabricant
     *
     * @return Phones
     */
    public function setPhoneFabricant($phoneFabricant)
    {
        $this->phoneFabricant = $phoneFabricant;

        return $this;
    }

    /**
     * Get phoneFabricant
     *
     * @return string
     */
    public function getPhoneFabricant()
    {
        return $this->phoneFabricant;
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
