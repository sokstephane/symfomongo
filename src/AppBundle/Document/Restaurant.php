<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(db="SymfoMongo", collection="SymfoMongo")
 */
class Restaurant
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $serial_number;

    /**
     * @MongoDB\Field(type="date")
     */
    protected $activityDate;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facilityName;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $score;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $grade;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $serviceCode;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $serviceDescription;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $employeeId;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facilityId;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facilityAddress;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facilityCity;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facilityState;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $facilityZip;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $ownerId;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $ownerName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $peDescription;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $programElementPe;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $programName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $programStatus;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $recordId;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set serialNumber
     *
     * @param string $serialNumber
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serial_number = $serialNumber;
        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string $serialNumber
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
    }

    /**
     * Set activityDate
     *
     * @param date $activityDate
     * @return $this
     */
    public function setActivityDate($activityDate)
    {
        $this->activityDate = $activityDate;
        return $this;
    }

    /**
     * Get activityDate
     *
     * @return date $activityDate
     */
    public function getActivityDate()
    {
        return $this->activityDate;
    }

    /**
     * Set facilityName
     *
     * @param string $facilityName
     * @return $this
     */
    public function setFacilityName($facilityName)
    {
        $this->facilityName = $facilityName;
        return $this;
    }

    /**
     * Get facilityName
     *
     * @return string $facilityName
     */
    public function getFacilityName()
    {
        return $this->facilityName;
    }

    /**
     * Set score
     *
     * @param int $score
     * @return $this
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Get score
     *
     * @return int $score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return $this
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
        return $this;
    }

    /**
     * Get grade
     *
     * @return string $grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set serviceCode
     *
     * @param int $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * Get serviceCode
     *
     * @return int $serviceCode
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * Set serviceDescription
     *
     * @param string $serviceDescription
     * @return $this
     */
    public function setServiceDescription($serviceDescription)
    {
        $this->serviceDescription = $serviceDescription;
        return $this;
    }

    /**
     * Get serviceDescription
     *
     * @return string $serviceDescription
     */
    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }

    /**
     * Set employeeId
     *
     * @param string $employeeId
     * @return $this
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;
        return $this;
    }

    /**
     * Get employeeId
     *
     * @return string $employeeId
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set facilityId
     *
     * @param string $facilityId
     * @return $this
     */
    public function setFacilityId($facilityId)
    {
        $this->facilityId = $facilityId;
        return $this;
    }

    /**
     * Get facilityId
     *
     * @return string $facilityId
     */
    public function getFacilityId()
    {
        return $this->facilityId;
    }

    /**
     * Set facilityAddress
     *
     * @param string $facilityAddress
     * @return $this
     */
    public function setFacilityAddress($facilityAddress)
    {
        $this->facilityAddress = $facilityAddress;
        return $this;
    }

    /**
     * Get facilityAddress
     *
     * @return string $facilityAddress
     */
    public function getFacilityAddress()
    {
        return $this->facilityAddress;
    }

    /**
     * Set facilityCity
     *
     * @param string $facilityCity
     * @return $this
     */
    public function setFacilityCity($facilityCity)
    {
        $this->facilityCity = $facilityCity;
        return $this;
    }

    /**
     * Get facilityCity
     *
     * @return string $facilityCity
     */
    public function getFacilityCity()
    {
        return $this->facilityCity;
    }

    /**
     * Set facilityState
     *
     * @param string $facilityState
     * @return $this
     */
    public function setFacilityState($facilityState)
    {
        $this->facilityState = $facilityState;
        return $this;
    }

    /**
     * Get facilityState
     *
     * @return string $facilityState
     */
    public function getFacilityState()
    {
        return $this->facilityState;
    }

    /**
     * Set facilityZip
     *
     * @param int $facilityZip
     * @return $this
     */
    public function setFacilityZip($facilityZip)
    {
        $this->facilityZip = $facilityZip;
        return $this;
    }

    /**
     * Get facilityZip
     *
     * @return int $facilityZip
     */
    public function getFacilityZip()
    {
        return $this->facilityZip;
    }

    /**
     * Set ownerId
     *
     * @param string $ownerId
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * Get ownerId
     *
     * @return string $ownerId
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set ownerName
     *
     * @param string $ownerName
     * @return $this
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
        return $this;
    }

    /**
     * Get ownerName
     *
     * @return string $ownerName
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * Set peDescription
     *
     * @param string $peDescription
     * @return $this
     */
    public function setPeDescription($peDescription)
    {
        $this->peDescription = $peDescription;
        return $this;
    }

    /**
     * Get peDescription
     *
     * @return string $peDescription
     */
    public function getPeDescription()
    {
        return $this->peDescription;
    }

    /**
     * Set programElementPe
     *
     * @param int $programElementPe
     * @return $this
     */
    public function setProgramElementPe($programElementPe)
    {
        $this->programElementPe = $programElementPe;
        return $this;
    }

    /**
     * Get programElementPe
     *
     * @return int $programElementPe
     */
    public function getProgramElementPe()
    {
        return $this->programElementPe;
    }

    /**
     * Set programName
     *
     * @param string $programName
     * @return $this
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;
        return $this;
    }

    /**
     * Get programName
     *
     * @return string $programName
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Set programStatus
     *
     * @param string $programStatus
     * @return $this
     */
    public function setProgramStatus($programStatus)
    {
        $this->programStatus = $programStatus;
        return $this;
    }

    /**
     * Get programStatus
     *
     * @return string $programStatus
     */
    public function getProgramStatus()
    {
        return $this->programStatus;
    }

    /**
     * Set recordId
     *
     * @param string $recordId
     * @return $this
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
        return $this;
    }

    /**
     * Get recordId
     *
     * @return string $recordId
     */
    public function getRecordId()
    {
        return $this->recordId;
    }
}
