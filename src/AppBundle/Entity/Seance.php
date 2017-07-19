<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seance
 *
 * @ORM\Table(name="Seance", indexes={@ORM\Index(name="creneau", columns={"creneau"}), @ORM\Index(name="salle", columns={"salle"}), @ORM\Index(name="matiere", columns={"matiere"}), @ORM\Index(name="promo", columns={"promo"}), @ORM\Index(name="prof", columns={"prof"}), @ORM\Index(name="IDX_D8D1F8384B98C21", columns={"groupe"})})
 * @ORM\Entity
 */
class Seance
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_deb", type="time")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $heureDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="time")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $heureFin;

    /**
     * @var \AppBundle\Entity\Groupe
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupe", referencedColumnName="id")
     * })
     */
    private $groupe;

    /**
     * @var \AppBundle\Entity\Creneau
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Creneau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creneau", referencedColumnName="id")
     * })
     */
    private $creneau;

    /**
     * @var \AppBundle\Entity\Salle
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="salle", referencedColumnName="id")
     * })
     */
    private $salle;

    /**
     * @var \AppBundle\Entity\Matiere
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Matiere")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matiere", referencedColumnName="id")
     * })
     */
    private $matiere;

    /**
     * @var \AppBundle\Entity\Promotion
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Promotion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promo", referencedColumnName="id")
     * })
     */
    private $promo;

    /**
     * @var \AppBundle\Entity\Membre
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prof", referencedColumnName="id")
     * })
     */
    private $prof;


}

