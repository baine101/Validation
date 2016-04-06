<?php

require_once 'base.php';
include 'DBenv.php';

if(isset($_POST['submit'])){
    loop($_POST);
}



/*
 * check_empty($_POST['firstname'],"firstname");
check_empty($_POST['lastname'],"lastname");
check_empty($_POST['phone'], "phone");
check_empty($_POST['email'],"email");
check_empty($_POST['postcode'],"postcode");



$phoneNumber = isset($_POST["phone"]);
check_phone($phoneNumber);
*/

?>

<Html>
<body>

<H1>validation</H1>

<form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post">

    <input id="firstname" type="text" placeholder="firstname" name="firstname">
    <input id="lastname" type="text" placeholder="lastname" name="lastname">
    <input id="phone" type="number" placeholder="Phone" name="phone">
    <input id="email" type="text" placeholder="Email" name="email">
    <input id="postcode" type="text" placeholder="Postcode" name="postcode">
    <input type="submit" name="submit" value="Submit">

</form>






</body>
</html>


