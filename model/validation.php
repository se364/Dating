<?php

/* Returns a value indicating if name is a parameter
   Valid nam are not empty and do no contain anything except letters
   @param String $name
   @return boolean
*/

function validName($name)
{
    $name= str_replace(' ', '', $name);
    return !empty($name) && ctype_alpha($name);
}

//echo validName("french fries") ? "yes<br>" : "no<br>";
//echo validName("pizza") ? "yes<br>" : "no<br>";
//echo validName("7-layer dip") ? "yes<br>" : "no<br>";
//echo validName("") ? "yes<br>" : "no<br>";


/* Returns a value indicating if name is a parameter
   Valid nam are not empty and do no contain anything except numbers
   @param number $age
   @return boolean
*/

function validAge($age){



    return !empty($age) && ctype_digit($age);
}

/* Returns a value indicating if name is a parameter
   Valid nam are not empty and do no contain anything except numbers
   @param number $phone
   @return boolean
*/

function validPhone($phone){

    return !empty($phone) && ctype_digit($phone);

}

/* Returns a value indicating if name is a parameter
   Valid nam are not empty and do no contain anything except letters
   @param String $email
   @return boolean
*/


function validEmail($email){

    $email= str_replace(' ', '', $email);
    return !empty($email);
}


function validOutdoor($outdoor){

    $outdoors = getOutdoor();
    return in_array($outdoor, $outdoors);

}

function validIndoor($indoor){

    $indoors = getOutdoor();
    return in_array($indoor, $indoors);

}



