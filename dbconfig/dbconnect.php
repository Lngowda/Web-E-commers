<?php
if(!$con=mysqli_connect("localhost","root","","e-vyavahaar"))
{
    echo'<script>alert("Please check database connections!");history.back</script>';
}
?>