<?php

/*
 * Premium class
 * @author Shah Emran
 * @version 1.0
 */

class PremiumMember extends Member
{
    // Declaring instance variables
    private $_indoorInterests;
    private $_outdoorInterests;



    // constructor
    /** Default constructor
     * @param $indoorInterests
     * @param $outdoorInterests
     */
    public function __construct($fname, $lname, $age, $gender, $phone, $indoorInterests = array(), $outdoorInterests = array())
    {
        parent::__construct($fname, $lname, $age, $gender, $phone);

        $this->_indoorInterests = $indoorInterests;
        $this->_outdoorInterests = $outdoorInterests;
    }

    /**
     * getter for indoor interests
     * @return array
     */
    public function getIndoorInterests()
    {
        return $this->_indoorInterests;
    }

    /**
     * setter for indoor interests
     * @param array $indoorInterests
     */
    public function setIndoorInterests($indoorInterests)
    {
        $this->_indoorInterests = $indoorInterests;
    }

    /**
     * getter for outdoor interests
     * @return array
     */
    public function getOutdoorInterests()
    {
        return $this->_outdoorInterests;
    }

    /**
     * setter for outdoor interests
     * @param array $outdoorInterests
     */
    public function setOutdoorInterests($outdoorInterests)
    {
        $this->_outdoorInterests = $outdoorInterests;
    }



}