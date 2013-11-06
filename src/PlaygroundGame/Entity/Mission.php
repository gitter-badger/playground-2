<?php
namespace PlaygroundGame\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Mapping\PreUpdate;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;

/**
 * @ORM\Entity @HasLifecycleCallbacks
 * @ORM\Table(name="game_mission")
 */
class Mission
{

    protected $inputFilter;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * titre
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * image
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    protected $image;

    /**
     * description
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    protected $description;

    /**
     * hidden
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    protected $hidden;

    /**
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * Constructor
     */
    public function __construct() {
    }

    /** @PrePersist */
    public function createChrono()
    {
        $this->createdAt = new \DateTime("now");
        $this->updatedAt = new \DateTime("now");
    }

    /** @PreUpdate */
    public function updateChrono()
    {
        $this->updatedAt = new \DateTime("now");
    }

    /**
     * @param $id
     * @return Block|mixed
     */
    public function setId($id)
    {
        $this->id = (int) $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Getter for title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Setter for title
     *
     * @param mixed $title Value to set
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

     /**
     * Getter for image
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Setter for image
     *
     * @param mixed $image Value to set
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    

     /**
     * Getter for description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Setter for description
     *
     * @param mixed $description Value to set
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for hidden
     *
     * @return mixed
     */
    public function getHidden()
    {
        return $this->hidden;
    }
    
    /**
     * Setter for hidden
     *
     * @param mixed $hidden Value to set
     * @return self
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
        return $this;
    }

    /**
     *
     * @return the $createdAt
     */
    public function getCreatedAt ()
    {
        return $this->createdAt;
    }

    /**
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt ($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     *
     * @return the $updatedAt
     */
    public function getUpdatedAt ()
    {
        return $this->updatedAt;
    }

    /**
     *
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt ($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Convert the object to an array.
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }


    /**
     * Populate from an array.
     *
     * @param array $data
     */
    public function populate($data = array())
    {
        if (isset($data['title']) && $data['title'] != null) {
            $this->title = $data['title'];
        }

        if (isset($data['description']) && $data['description'] != null) {
            $this->description = $data['description'];
        }

        if (isset($data['hidden']) && $data['hidden'] != null) {
            $this->hidden = $data['hidden'];
        }

        if (isset($data['image']) && $data['image'] != null) {
            $this->image = $data['image'];
        }
    }

    public function getInputFilter ()
    {
        if (! $this->inputFilter) {
            $inputFilter = new InputFilter();
            $factory = new InputFactory();
            $this->inputFilter = $inputFilter;
        }
    
        return $this->inputFilter;
    }
}
