<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Fabricant
 *
 * @ORM\Table(name="fabricant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FabricantRepository")
 */
class Fabricant
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
     * @ORM\Column(name="FabricantName", type="string", length=255, unique=true)
     * @Serializer\Groups({"list_action"})
     */
    private $fabricantName;

     /**
     * @ORM\OneToMany(targetEntity="Phones", mappedBy="phoneFabricant", cascade={"persist"})
     */
    private $fabricantPhones;




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
     * Set fabricantName
     *
     * @param string $fabricantName
     *
     * @return Fabricant
     */
    public function setFabricantName($fabricantName)
    {
        $this->fabricantName = $fabricantName;

        return $this;
    }

    /**
     * Get fabricantName
     *
     * @return string
     */
    public function getFabricantName()
    {
        return $this->fabricantName;
    }

    /**
     * Set fabricantPhones
     *
     * @param string $fabricantPhones
     *
     * @return Fabricant
     */
    public function setFabricantPhones($fabricantPhones)
    {
        $this->fabricantPhones = $fabricantPhones;

        return $this;
    }

    /**
     * Get fabricantPhones
     *
     * @return string
     */
    public function getFabricantPhones()
    {
        return $this->fabricantPhones;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fabricantPhones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fabricantPhone
     *
     * @param \AppBundle\Entity\Phones $fabricantPhone
     *
     * @return Fabricant
     */
    public function addFabricantPhone(\AppBundle\Entity\Phones $fabricantPhone)
    {
        $this->fabricantPhones[] = $fabricantPhone;

        return $this;
    }

    /**
     * Remove fabricantPhone
     *
     * @param \AppBundle\Entity\Phones $fabricantPhone
     */
    public function removeFabricantPhone(\AppBundle\Entity\Phones $fabricantPhone)
    {
        $this->fabricantPhones->removeElement($fabricantPhone);
    }
}
