<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table(name="Membre", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="status", columns={"status"}), @ORM\Index(name="promo", columns={"promo"})})
 * @ORM\Entity
 */
class Membre
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


}

