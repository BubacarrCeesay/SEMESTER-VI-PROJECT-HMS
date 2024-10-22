

<?php
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$pn=$_POST['pnumber'];
$msg=$_POST['message'];

$con=mysqli_connect("sql309.infinityfree.com","if0_37557679","kOBYP0CCNGKv","if0_37557679_hms");

if(!$con)
{
    die("Connection Failed");
}

$query="Insert into contact values('$name','$email','$pn','$msg')";

$ret_val=mysqli_query($con,$query);

if($ret_val==true)
{
    echo"<script type='text/javascript'> alert('Message Submitted! <br/> Thank You🤝!');</script>";
}

else
    echo"<script type='text/javascript'> alert('Oops😑, Something Went Wrong!');</script>";


mysqli_close($con);

    header("Location: contact.php");
    exit();
   
}

?>