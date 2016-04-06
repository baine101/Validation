<?php


function loop($base)
{
    //set array with field names
    $field = array('firstname' , 'lastname' , 'phone', 'email','postcode' );
    //$fCount = count($f);

    global $conn;

    // for loop stepping thrugh the field names
    foreach ($field as $fieldname){

        //run check empty function
        check_empty($base[$fieldname],$fieldname);

        if($fieldname == 'phone'){
            check_phone($base['phone']);
        }

        if($fieldname == 'email'){
            check_email($base['email']);
        }
        if($fieldname == 'postcode'){
            check_postcode($base['postcode']);
        }

        $sql = "INSERT INTO users (firstname, lastname, phone, email, postcode) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['postcode']."')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    //close for loop
    }
//close function loop
}
function check_empty($value,$fieldName){
    //checks if the data value is empty
    if(empty($value)){

        Echo "please fill in $fieldName";
        return true;
    }

//close function check_empty
}



function check_phone($base){


    if(!is_numeric($_POST['phone'])){

        echo "please enter valid phone number";
        return false;
    }
    if(strlen($_POST['phone']) > 11)
    {
    echo "phone number is to long ";

    }
    if(strlen($_POST['phone']) < 11){
        echo "phone number is too short";
    }

    //return true;
}

function check_email($base){

    $match=$_POST['email'];

    $regex = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$^";
    if (preg_match($regex , $match)) {
        // Indeed, the expression "[a-zA-Z]+ \d+" matches the date string
        echo "Email Accepted";
    } else {
        // If preg_match() returns false, then the regex does not
        // match the string
        echo "The regex pattern does not match. :(";
    }


}

function check_postcode($base){
    $match=$_POST['postcode'];

    $regex = "^([A-PR-UWYZ0-9][A-HK-Y0-9][AEHMNPRTVXY0-9]?[ABEHMNPRVWXY0-9]? {1,2}[0-9][ABD-HJLN-UW-Z]{2}|GIR 0AA)$^";
    if (preg_match($regex , $match)) {
        // Indeed, the expression "[a-zA-Z]+ \d+" matches the date string
        echo "Postcode Accepted";
    } else {
        // If preg_match() returns false, then the regex does not
        // match the string
        echo "The postcode is invalid";
    }
}

?>