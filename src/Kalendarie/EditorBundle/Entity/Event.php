<?php

namespace Kalendarie\EditorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class Event {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int 
     */   
    private $id;    
    
    
    /** 
     * @ORM\Column(name="rubrik", type="string")
     */
    protected $subjectSv;

    /** 
     * @ORM\Column(name="rubrik_en")
     * @var string
     */    
    protected $subjectEn;

    /** 
     * @ORM\Column(name="beskrivning")
     * @var string
     */    
    protected $descriptionSv;

    /** 
     * @ORM\Column(name="beskrivning_en")
     * @var string
     */    
    protected $descriptionEn;    

    /** 
     * @ORM\Column(name="sprak")
     * @var boolean
     */    
    protected $useEnglish;  
    
    /** 
     * @ORM\Column(name="datum_from", type="customdate")
     */ 
    protected $fromDate;

    /** 
     * @ORM\Column(name="datum_to", type="customdate")
     */    
    protected $toDate;
    
    /** 
     * @ORM\Column(name="tid_from", type="customtime")
     */ 
    protected $fromTime;

    /** 
     * @ORM\Column(name="tid_to", type="customtime")
     */    
    protected $toTime;

    /** 
     * @ORM\Column(name="lokal")
     * @var string
     */    
    protected $locationSv;

    /** 
     * @ORM\Column(name="lokal_en")
     * @var string
     */    
    protected $locationEn;

    /** 
     * @ORM\Column(name="fackhogskola")
     * @var int
     */    
    protected $schoolId;
    
    /** 
     * @ORM\Column(name="allmanhet")
     * @var boolean     
     */
    protected $targetPublic;
    protected $targetPublicNameSv = "Allmänhet";
    
    /** 
     * @ORM\Column(name="studenter")
     * @var boolean
     */
    protected $targetStudents;
    protected $targetStudentsNameSv = "Studenter";
    /** 
     * @ORM\Column(name="externpersonal")
     * @var boolean
     */    
    protected $targetExternalStaff;
    protected $targetExternalStaffNameSv = "Extern personal";

    /** 
     * @ORM\Column(name="internpersonal")
     * @var boolean
     */    
    protected $targetInternalStaff;
    protected $targetInternalStaffNameSv = "Intern personal";
    
    protected $schoolNameSv;
    protected $entityManager;
    
    
    public function __construct() {    

    }
    
    public function setEntityManager($EntityManager) {
        $this->entityManager = $EntityManager;
    }
    
    /**
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }
        
    /**
     * @return string 
     */
    public function getSubjectSv(){
        return $this->subjectSv;
    }
    
    /**
     *
     * @return string 
     */
    public function getSubjectEn() {
        return $this->subjectEn;
    } 
    
    /**
     *
     * @param string $value 
     */
    public function setSubjectSv($value) {
        $this->subjectSv = $value;
    }
    
    /**
     *
     * @param string $value 
     */
    public function setSubjectEn($value) {
        $this->subjectEn = $value;
    }
    
    /**
     *
     * @return string
     */
    public function getDescriptionSv() {
        return $this->descriptionSv;
    }
    
    /**
     *
     * @param string $value 
     */
    public function setDescriptionSv($value) {
        $this->descriptionSv = $value;
    }
    
    /**
     *
     * @return string 
     */
    public function getDescriptionEn() {
        return $this->descriptionEn;
    }
    
    /**
     *
     * @param string $value 
     */
    public function setDescriptionEn($value) {
        $this->descriptionEn = $value;
    }
    
    /**
     *
     * @return boolean 
     */
    public function getUseEnglish() {
        return $this->useEnglish;
    }
    
    /**
     *
     * @param boolean $value 
     */
    public function setUseEnglish($value) {
        $this->useEnglish = $value;
    }
    
    /**
     *
     * @return customdate
     */
    public function getFromDate() {
        return $this->fromDate;
    }
    
    /**
     *
     * @param customdate $value 
     */
    public function setFromDate($value) {
        $this->fromDate = $value;
    }
    
    /**
     *
     * @return customdate 
     */
    public function getToDate() {
        return $this->toDate;
    }
    
    /**
     *
     * @param customdate $value 
     */
    public function setToDate($value) {
        $this->toDate = $value;
    }    
    
    /**
     *
     * @return customtime 
     */
    public function getToTime() {  
        return $this->toTime;
    }
    
    /**
     *
     * @param customtime $value 
     */
    public function setToTime($value) {
        $this->toTime = $value;
    }
    
    /**
     *
     * @param customtime $value 
     */
    public function setFromTime($value) {
        $this->fromTime = $value;
    }
    
    /**
     *
     * @return customtime 
     */
    public function getFromTime() {
        return $this->fromTime;
    }
    
    /**
     *
     * @param string $value 
     */
    public function setLocationSv($value) {
        $this->locationSv = $value;
    }
    
    /**
     *
     * @return string 
     */
    public function getLocationSv() {
        return $this->locationSv;
    }    
    
    /**
     *
     * @param string $value 
     */
    public function setLocationEn($value) {
        $this->locationEn = $value;
    }
    
    /**
     *
     * @return string 
     */
    public function getLocationEn() {
        return $this->locationEn;
    }      
    
    /**
     *
     * @return int 
     */
    public function getSchoolId() {
        return $this->schoolId;
    }
    
    /**
     *
     * @param int $value 
     */
    public function setSchoolId($value) {
        $this->schoolId = $value;
    }    
    
    /**
     *
     * @return boolean
     */
    public function getTargetPublic() {
        return $this->targetPublic;
    }
    
    /**
     *
     * @param boolean $value 
     */
    public function setTargetPublic($value) {
        $this->targetPublic = $value;
    }    
    
    /**
     *
     * @return boolean 
     */
    public function getTargetStudents() {
        return $this->targetStudents;
    }
    
    /**
     *
     * @param boolean $value 
     */
    public function setTargetStudents($value) {
        $this->targetStudents = $value;
    }        
    
    /**
     *
     * @return boolean 
     */
    public function getTargetExternalStaff() {
        return $this->targetExternalStaff;
    }
    
    /**
     *
     * @param boolean $value 
     */
    public function setTargetExternalStaff($value) {
        $this->targetExternalStaff = $value;
    }     
    
    /**
     *
     * @return boolean 
     */
    public function getTargetInternalStaff() {
        return $this->targetInternalStaff;
    }
    
    /**
     *
     * @param boolean $value 
     */
    public function setTargetInternalStaff($value) {
        $this->targetInternalStaff = $value;
    }
    
    public function getTargetNamesSv() {
        $targetNames = array();
        
        if($this->targetPublic) {
            array_push($targetNames, $this->targetPublicNameSv);
        }
        
        if($this->targetStudents) {
            array_push($targetNames, $this->targetStudentsNameSv);
        }
        
        if($this->targetExternalStaff) {
            array_push($targetNames, $this->targetExternalStaffNameSv);
        }        
        
        if($this->targetInternalStaff) {
            array_push($targetNames, $this->targetExternalStaff);
        }
        
        return $targetNames;
    }
    
    public function getSchoolNameSv() {
        if(!$this->entityManager )
            return "Undefined entity manager!";
        
        $r = $this->entityManager->getRepository('Kalendarie\EditorBundle\Entity\School')->find($this->schoolId);
        
        return $r->getNameSv();
    }
}