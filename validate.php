
<?PHP



class Validate
{
    public function emptybox($x)
    {

        if ($_POST['firstname'] == null )
        {
            echo "Please fill in first name";
        }elseif ($_POST['lastname'] == null )
        {
            echo "please fill in last name";
        }elseif ($_POST['phone'] == null )
        {
            echo "please fill in phone";
        }elseif ($_POST['email'] == null )
        {
            echo "please fill in email";
        }elseif ($_POST['postcode'] == null )
        {
            echo "please fill in postcode";
        }

    //close empty function
    }

    public function checklength($xx)
    {

        if ($_POST['firstname'] <= '1' )
        {
            echo "Please enter a valid name";
        }elseif ($_POST['lastname'] <= '1' )
        {
            echo "please enter a valid name";
        }elseif ($_POST['phone'] <= '1' )
        {
            echo "please enter a valid phone number";
        }elseif ($_POST['email'] <= '1' )
        {
            echo "please enter a valid email";
        }elseif ($_POST['postcode'] <= '1' )
        {
            echo "please enter a valid postcode";
        }

    }




// close class
}


?>