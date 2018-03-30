<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var string
     *
     * @ORM\Column(name="phone_marque", type="string", length=255)
     */
    private $phoneMarque;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_name", type="string", length=255, unique=true)
     */
    private $phoneName;

    /**
     * @var int
     *
     * @ORM\Column(name="phone_price", type="integer")
     */
    private $phonePrice;


    /**
     * @var string
     *
     * @ORM\Column(name="phone_description", type="text")
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
     * Set phoneMarque
     *
     * @param string $phoneMarque
     *
     * @return Phones
     */
    public function setPhoneMarque($phoneMarque)
    {
        $this->phoneMarque = $phoneMarque;

        return $this;
    }

    /**
     * Get phoneMarque
     *
     * @return string
     */
    public function getPhoneMarque()
    {
        return $this->phoneMarque;
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
