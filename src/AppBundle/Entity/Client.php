<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\OneToMany(targetEntity="User", mappedBy="client", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="client_id")
     */
    private $clientName;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientUsers", type="string", length=255)
     */
    private $clientUsers;


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
     * Set clientName
     *
     * @param string $clientName
     *
     * @return Client
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get clientName
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set clientUsers
     *
     * @param string $clientUsers
     *
     * @return Client
     */
    public function setClientUsers($clientUsers)
    {
        $this->clientUsers = $clientUsers;

        return $this;
    }

    /**
     * Get clientUsers
     *
     * @return string
     */
    public function getClientUsers()
    {
        return $this->clientUsers;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clientName = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add clientName
     *
     * @param \AppBundle\Entity\User $clientName
     *
     * @return Client
     */
    public function addClientName(\AppBundle\Entity\User $clientName)
    {
        $this->clientName[] = $clientName;

        return $this;
    }

    /**
     * Remove clientName
     *
     * @param \AppBundle\Entity\User $clientName
     */
    public function removeClientName(\AppBundle\Entity\User $clientName)
    {
        $this->clientName->removeElement($clientName);
    }
}
