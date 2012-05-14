<?php

namespace SfUgBln\MeetUs\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfUgBln\MeetUs\IndexBundle\Entity\Meeting
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SfUgBln\MeetUs\IndexBundle\Entity\MeetingRepository")
 */
class Meeting
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime $dateStart
     *
     * @ORM\Column(name="dateStart", type="datetime")
     */
    private $dateStart;

    /**
     * @var datetime $dateEnd
     *
     * @ORM\Column(name="dateEnd", type="datetime")
     */
    private $dateEnd;

    /**
     * @var string $name
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var boolean $isReoccuring
     *
     * @ORM\Column(name="isReoccuring", type="boolean")
     */
    private $isReoccuring;


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
     * Set dateStart
     *
     * @param datetime $dateStart
     * @return Meeting
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * Get dateStart
     *
     * @return datetime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param datetime $dateEnd
     * @return Meeting
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return datetime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Meeting
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param text $description
     * @return Meeting
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set isReoccuring
     *
     * @param boolean $isReoccuring
     * @return Meeting
     */
    public function setIsReoccuring($isReoccuring)
    {
        $this->isReoccuring = $isReoccuring;
        return $this;
    }

    /**
     * Get isReoccuring
     *
     * @return boolean 
     */
    public function getIsReoccuring()
    {
        return $this->isReoccuring;
    }
}