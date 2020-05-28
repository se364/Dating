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

    return !empty($name) && ctype_alnum($age);
}

/* Returns a value indicating if name is a parameter
   Valid nam are not empty and do no contain anything except numbers
   @param number $phone
   @return boolean
*/

function validPhone($phone){

    return !empty($name) && ctype_alnum($phone);

}

/* Returns a value indicating if name is a parameter
   Valid nam are not empty and do no contain anything except letters
   @param String $email
   @return boolean
*/


function validEmail($email){

    $name= str_replace(' ', '', $email);
    return !empty($name) && ctype_alpha($name);
}


function validOutdoor($outdoor){


}

function validIndoor($indoor){


}



