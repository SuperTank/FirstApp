<?php

namespace Kalendarie\EditorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations;

/**
 * @ORM\Entity
 * @ORM\Table(name="school")
 */
class School {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int 
     */   
    private $id; 
    
    /** 
     * @ORM\Column(name="Name_sv")
     * @var string
     */
    protected $NameSv;    
    
    /** 
     * @ORM\Column(name="Name_en")
     * @var string
     */
    protected $NameEn;       
    
    /** 
     * @ORM\Column(name="Description")     
     * @var string
     */
    protected $Description;       
    
    /** 
     * @ORM\Column(name="Created")     
     * @var datetime
     */
    protected $Created;     
    
    /** 
     * @ORM\Column(name="Modified")     
     * @var datetime
     */
    protected $Modified;       
    
    public function __construct() {    
    }
    
    /**
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }    
    
    /**
     *
     * @return string
     */
    public function getNameSv() {
        return $this->NameSv;
    }
    
    /**
     *
     * @param string $value 
     */
    public function setNameSv($value) {
        $this->NameSv = $value;
    }
    
    /**
     *
     * @return string 
     */
    public function getNameEn() {
        return $this->NameEn;
    }
    
    /**
     *
     * @param string $value 
     */
    public function setNameEn($value) {
        $this->NameEn = $value;
    }
    
    /**
     *
     * @return string 
     */
    public function getDescription() {
        return $this->Description;
    }
    
    /**
     *
     * @param string $value 
     */
    public function setDescription($value) {
        $this->Description = $value;
    }
    
    /**
     *
     * @return datetime 
     */
    public function getCreated(){
        return $this->Created;
    }
    
    /**
     *
     * @return datetime 
     */
    public function getModified() {
        return $this->Modified;
    }
    
    /**
     *
     * @param datetime $value 
     */
    public function setModified($value) {
        $this->Modified = $value;
    }
}

