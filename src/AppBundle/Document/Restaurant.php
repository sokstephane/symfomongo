<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(
 *     db="SymfoMongo", collection="SymfoMongo",
 *     repositoryClass="AppBundle\Repository\RestaurantRepository"
 * )
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
    protected $activity_date;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facility_name;

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
    protected $service_code;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $service_description;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $employee_id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facility_id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facility_address;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facility_city;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $facility_state;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $facility_zip;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $owner_id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $owner_name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $pe_description;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $program_element_pe;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $program_name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $program_status;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $record_id;



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
        $this->activity_date = $activityDate;
        return $this;
    }

    /**
     * Get activityDate
     *
     * @return date $activityDate
     */
    public function getActivityDate()
    {
        return $this->activity_date;
    }

    /**
     * Set facilityName
     *
     * @param string $facilityName
     * @return $this
     */
    public function setFacilityName($facilityName)
    {
        $this->facility_name = $facilityName;
        return $this;
    }

    /**
     * Get facilityName
     *
     * @return string $facilityName
     */
    public function getFacilityName()
    {
        return $this->facility_name;
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
        $this->service_code = $serviceCode;
        return $this;
    }

    /**
     * Get serviceCode
     *
     * @return int $serviceCode
     */
    public function getServiceCode()
    {
        return $this->service_code;
    }

    /**
     * Set serviceDescription
     *
     * @param string $serviceDescription
     * @return $this
     */
    public function setServiceDescription($serviceDescription)
    {
        $this->service_description = $serviceDescription;
        return $this;
    }

    /**
     * Get serviceDescription
     *
     * @return string $serviceDescription
     */
    public function getServiceDescription()
    {
        return $this->service_description;
    }

    /**
     * Set employeeId
     *
     * @param string $employeeId
     * @return $this
     */
    public function setEmployeeId($employeeId)
    {
        $this->employee_id = $employeeId;
        return $this;
    }

    /**
     * Get employeeId
     *
     * @return string $employeeId
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }

    /**
     * Set facilityId
     *
     * @param string $facilityId
     * @return $this
     */
    public function setFacilityId($facilityId)
    {
        $this->facility_id = $facilityId;
        return $this;
    }

    /**
     * Get facilityId
     *
     * @return string $facilityId
     */
    public function getFacilityId()
    {
        return $this->facility_id;
    }

    /**
     * Set facilityAddress
     *
     * @param string $facilityAddress
     * @return $this
     */
    public function setFacilityAddress($facilityAddress)
    {
        $this->facility_address = $facilityAddress;
        return $this;
    }

    /**
     * Get facilityAddress
     *
     * @return string $facilityAddress
     */
    public function getFacilityAddress()
    {
        return $this->facility_address;
    }

    /**
     * Set facilityCity
     *
     * @param string $facilityCity
     * @return $this
     */
    public function setFacilityCity($facilityCity)
    {
        $this->facility_city = $facilityCity;
        return $this;
    }

    /**
     * Get facilityCity
     *
     * @return string $facilityCity
     */
    public function getFacilityCity()
    {
        return $this->facility_city;
    }

    /**
     * Set facilityState
     *
     * @param string $facilityState
     * @return $this
     */
    public function setFacilityState($facilityState)
    {
        $this->facility_state = $facilityState;
        return $this;
    }

    /**
     * Get facilityState
     *
     * @return string $facilityState
     */
    public function getFacilityState()
    {
        return $this->facility_state;
    }

    /**
     * Set facilityZip
     *
     * @param int $facilityZip
     * @return $this
     */
    public function setFacilityZip($facilityZip)
    {
        $this->facility_zip = $facilityZip;
        return $this;
    }

    /**
     * Get facilityZip
     *
     * @return int $facilityZip
     */
    public function getFacilityZip()
    {
        return $this->facility_zip;
    }

    /**
     * Set ownerId
     *
     * @param string $ownerId
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->owner_id = $ownerId;
        return $this;
    }

    /**
     * Get ownerId
     *
     * @return string $ownerId
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Set ownerName
     *
     * @param string $ownerName
     * @return $this
     */
    public function setOwnerName($ownerName)
    {
        $this->owner_name = $ownerName;
        return $this;
    }

    /**
     * Get ownerName
     *
     * @return string $ownerName
     */
    public function getOwnerName()
    {
        return $this->owner_name;
    }

    /**
     * Set peDescription
     *
     * @param string $peDescription
     * @return $this
     */
    public function setPeDescription($peDescription)
    {
        $this->pe_description = $peDescription;
        return $this;
    }

    /**
     * Get peDescription
     *
     * @return string $peDescription
     */
    public function getPeDescription()
    {
        return $this->pe_description;
    }

    /**
     * Set programElementPe
     *
     * @param int $programElementPe
     * @return $this
     */
    public function setProgramElementPe($programElementPe)
    {
        $this->program_element_pe = $programElementPe;
        return $this;
    }

    /**
     * Get programElementPe
     *
     * @return int $programElementPe
     */
    public function getProgramElementPe()
    {
        return $this->program_element_pe;
    }

    /**
     * Set programName
     *
     * @param string $programName
     * @return $this
     */
    public function setProgramName($programName)
    {
        $this->program_name = $programName;
        return $this;
    }

    /**
     * Get programName
     *
     * @return string $programName
     */
    public function getProgramName()
    {
        return $this->program_name;
    }

    /**
     * Set programStatus
     *
     * @param string $programStatus
     * @return $this
     */
    public function setProgramStatus($programStatus)
    {
        $this->program_status = $programStatus;
        return $this;
    }

    /**
     * Get programStatus
     *
     * @return string $programStatus
     */
    public function getProgramStatus()
    {
        return $this->program_status;
    }

    /**
     * Set recordId
     *
     * @param string $recordId
     * @return $this
     */
    public function setRecordId($recordId)
    {
        $this->record_id = $recordId;
        return $this;
    }

    /**
     * Get recordId
     *
     * @return string $recordId
     */
    public function getRecordId()
    {
        return $this->record_id;
    }
}
