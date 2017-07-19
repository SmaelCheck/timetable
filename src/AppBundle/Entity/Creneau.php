<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creneau
 *
 * @ORM\Table(name="Creneau", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Creneau
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_cren", type="date", nullable=false)
     */
    private $dateCren;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

