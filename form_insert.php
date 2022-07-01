<title>Processing...</title>
<?php
include'dbconfig/dbconnect.php';
if(isset($_POST['Submit']))
{
	$a=mysqli_real_escape_string($con,$_POST['fname']);
	$b=mysqli_real_escape_string($con,$_POST['email']);
    $cc=mysqli_real_escape_string($con,$_POST['mobile']);
	$c=mysqli_real_escape_string($con,$_POST['subject']);
	$d=mysqli_real_escape_string($con,$_POST['message']);	
	
	$rs=mysqli_query($con,"select * from contact_details where subject='$d'");
    if(!$rw=mysqli_fetch_array($rs))
	{
		if(!mysqli_query($con,"insert into contact_details values(null,'$a','$b','$cc','$c','$d')"))
		{
		  echo'<script>alert("Something Went Wrong..!");history.back();</script>';
		}
		else
		{
		  echo'<script>alert("Your Message Sent Successfully...");document.location="index.html";</script>';
		}
	}
	else
	{
	   echo'<script>alert("Subject Already Exists...Please Try Another");history.back();</script>';
	}
}
else
{
    header("Location:index.html");
}
?>