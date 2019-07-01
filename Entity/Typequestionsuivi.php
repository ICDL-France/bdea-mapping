<?php

namespace EA\BdeaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typequestionsuivi
 *
 * @ORM\Table(name="TypeQuestionSuivi", uniqueConstraints={@ORM\UniqueConstraint(name="TypeQuestionSuivi", columns={"TypeQuestionSuivi"})})
 * @ORM\Entity
 */
class Typequestionsuivi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdTypeQuestionSuivi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypequestionsuivi;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeQuestionSuivi", type="string", length=255, nullable=true)
     */
    private $typequestionsuivi;

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

