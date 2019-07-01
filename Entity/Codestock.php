<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codestock
 *
 * @ORM\Table(name="CodeStock", uniqueConstraints={@ORM\UniqueConstraint(name="CodeStock", columns={"CodeStock"})})
 * @ORM\Entity
 */
class Codestock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdCodeStock", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcodestock;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeStock", type="string", length=255, nullable=true)
     */
    private $codestock;

    /**
     * @var string
     *
     * @ORM\Column(name="Createur", type="string", length=30, nullable=true)
     */
    private $createur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Creation", type="datetime", nullable=true)
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="Modifieur", type="string", length=30, nullable=true)
     */
    private $modifieur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Modification", type="datetime", nullable=true)
     */
    private $modification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}

