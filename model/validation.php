<?php
/*
 * Validation class
 * @author Shah Emran
 * @version 1.0
*/


/**
 * Class Validation
 */

class Validation
{

    /** Returns a value indicating if name is a parameter
     * Valid name are not empty and do not contain anything except letters
     * @param String $name
     * @return boolean
    */
    function validName($name)
    {
        $name = str_replace(' ', '', $name);
        return !empty($name) && ctype_alpha($name);
    }


    /** Returns a value indicating if age is a parameter
     * Valid age are not empty and do no contain anything except numbers
     * @param number $age
     *  @return boolean
    */

    function validAge($age)
    {

        return !empty($age) && ctype_digit($age);
    }

    /** Returns a value indicating if phone is a parameter
     * Valid phone are not empty and do no contain anything except numbers
     * @param number $phone
     * @return boolean
    */

    function validPhone($phone)
    {

        return !empty($phone) && ctype_digit($phone);

    }

    /** Returns a value indicating if name is a parameter
     * Valid email and do no contain anything except letters
     * @param String $email
     * @return boolean
    */


    function validEmail($email)
    {

        $email = str_replace(' ', '', $email);
        return !empty($email);
    }

    /** Returns a value indicating if outdoor is a parameter
     * Valid outdoor and do no contain anything except letters
     * @param String $outdoor
     * @return boolean
    */
    function validOutdoor($outdoor)
    {

        if (isset($outdoor)) {
            foreach ($outdoor as $keys) {
                if (!in_array($keys, getOutdoor())) {
                    return false;
                }
            }
            return true;
        }
        return false;

    }

    /** Returns a value indicating if indoor is a parameter
     * Valid indoor and do no contain anything except letters
     * @param String $indoor
     * @return boolean
    */
    function validIndoor($indoor)
    {

        if (isset($indoor)) {
            foreach ($indoor as $keys) {
                if (!in_array($keys, getIndoor())) {
                    return false;
                }
            }
            return true;
        }
        return false;

    }


}
