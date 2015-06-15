<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\TestRepository")
 */
class Test
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tests")
     *
     */
    private $author;

    /**
     * @ORM\OneToOne(targetEntity="User")
     *
     */
    private $candidate;

    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="test")
     */
    private $questions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="star_date", type="datetime")
     */
    private $starDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set starDate
     *
     * @param \DateTime $starDate
     * @return Test
     */
    public function setStarDate($starDate)
    {
        $this->starDate = $starDate;

        return $this;
    }

    /**
     * Get starDate
     *
     * @return \DateTime 
     */
    public function getStarDate()
    {
        return $this->starDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Test
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set author
     *
     * @param \AppBundle\Entity\User $author
     * @return Test
     */
    public function setAuthor(\AppBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \AppBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set candidate
     *
     * @param \AppBundle\Entity\User $candidate
     * @return Test
     */
    public function setCandidate(\AppBundle\Entity\User $candidate = null)
    {
        $this->candidate = $candidate;

        return $this;
    }

    /**
     * Get candidate
     *
     * @return \AppBundle\Entity\User 
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * Add questions
     *
     * @param \AppBundle\Entity\Question $questions
     * @return Test
     */
    public function addQuestion(\AppBundle\Entity\Question $questions)
    {
        $this->questions[] = $questions;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \AppBundle\Entity\Question $questions
     */
    public function removeQuestion(\AppBundle\Entity\Question $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }
}
