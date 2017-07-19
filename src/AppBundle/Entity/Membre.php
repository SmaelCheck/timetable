<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table(name="Membre", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="status", columns={"status"}), @ORM\Index(name="promo", columns={"promo"})})
 * @ORM\Entity
 */
abstract class Membre
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_fam", type="string", length=25, nullable=false)
     */
    private $nomFam;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=25, nullable=false)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naiss", type="date", nullable=false)
     */
    private $dateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="tele", type="string", length=11, nullable=false)
     */
    private $tele;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Status
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status", referencedColumnName="id")
     * })
     */
    private $status;

    /**
     * @var \AppBundle\Entity\Promotion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promo", referencedColumnName="id")
     * })
     */
    private $promo;

    /**
     * @return string
     */
    public function getNomFam()
    {
        return $this->nomFam;
    }

    /**
     * @param string $nomFam
     */
    public function setNomFam($nomFam)
    {
        $this->nomFam = $nomFam;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * @param \DateTime $dateNaiss
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;
    }

    /**
     * @return string
     */
    public function getTele()
    {
        return $this->tele;
    }

    /**
     * @param string $tele
     */
    public function setTele($tele)
    {
        $this->tele = $tele;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return Promotion
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * @param Promotion $promo
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    abstract function getInfo();



}

