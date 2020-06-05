<?php

    //data-layer.php


    /* getGender()
     * Returns an array of gender
     * @return array
     */

    function getGender()
    {
        $genders = array("Male", "Female");
        return $genders;
    }



    /* getSeek()
     * Returns an array of indoor interest
     * @return array
     */
    function getSeek()
    {
        $seeks = array("Male", "Female");
        return $seeks;
    }

    /* getStates()
     * Returns an array of States
     * @return array
     */

    function getStates()
    {
        $states = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado',
            'Connecticut', 'Delaware', 'District of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois',
            'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan',
            'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey',
            'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
            'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia',
            'Washington', 'West Virginia', 'Wisconsin', 'Wyoming',);

        return $states;
    }




    /* getIndoor()
     * Returns an array of indoor interest
     * @return array
     */
    function getIndoor()
    {
        $indoor = array("tv", "puzzles", "movies","reading","cooking","playing cards", "board games","video games");
        return $indoor;
    }

    /* getOutdoor()
    * Returns an array of outdoor
    * @return array
    */
    function getOutdoor()
    {
        $outdoor = array("hiking", "walking", "biking", "climbing","swimming","collecting","gym","beach");
        return $outdoor;
    }