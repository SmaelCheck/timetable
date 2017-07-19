<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="Promotion", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="dep", columns={"dep"})})
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=40, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Departement
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dep", referencedColumnName="id")
     * })
     */
    private $dep;


}

