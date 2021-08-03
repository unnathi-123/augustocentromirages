<?php
include('connection.php');
  $EmailErr = $PasswordErr =  "";
 $Email = $Password =  "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

  if (empty($_POST["userid"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["userid"]);
  }

  if (empty($_POST["passid"])) {
    $PasswordErr = "";
  } else {
    $Password = test_input($_POST["passid"]);
  }

 
}


if (isset($_POST['submit']))
{
  $email=$_POST['email'];
   $Password=$_POST['password'];
   $value=$_POST['value'];
   $result=mysqli_query($conn,"select * from users where User_email='$email' and password='$Password'") or die(mysqli_error($conn));
  if($value==0)
  {
     $count=mysqli_num_rows($result);
     $row=mysqli_fetch_array($result);

       if($count > 0){
 session_start();
 $_SESSION['id']=$row['User_id'];
 header('location:uevent.php');
 
}
else
{
echo "<script>alert('Your UserName or Password is Wrong Please Retype UserName and Password Again!')</script>";

echo "<script>window.location = 'IniciodeSession.html'</script>"; 
}

}
else
{
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if($count > 0){
 session_start();
 $_SESSION['id']=$row['User_id'];
 header('location:viewevent.php');
 
}
else
{
echo "<script>alert('Your UserName or Password is Wrong Please Retype UserName and Password Again!')</script>";

echo "<script>window.location = 'IniciodeSession.html'</script>"; 
}
}
}
?>