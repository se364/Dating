<?php
/*
 * Member class
 * @author Shah Emran
 * @version 1.0
*/

class Member
{
    // Declare instance variables
    private $_fname;
    private $_lname;
    private $_age;
    private $_gender;
    private $_phone;
    private $_email;
    private $_state;
    private $_seeking;
    private $_bio;

    // Constructor
    public function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_phone = $phone;
    }

    /**
     * getter for first name
     * @return mixed
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * setter for first name
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    /**
     * getter for last name
     * @return mixed
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * setter for last name
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    /**
     * getter for age
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * setter for age
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * getter for gender
     * @return mixed
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * setter for gender
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * getter for phone
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * setter for phone
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * getter for email
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * setter for email
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * getter for state
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * setter for state
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * getter for seeking
     * @return mixed
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /**
     * setter for seeking
     * @param mixed $seeking
     */
    public function setSeeking($seeking)
    {
        $this->_seeking = $seeking;
    }

    /**
     * getter for bio
     * @return mixed
     */
    public function getBio()
    {
        return $this->_bio;
    }


    /**
     * setter for bio
     * @param mixed $bio
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

}