<?php
// define variables and set to empty values
$UserNameErr = $EmailErr = $PasswordErr = $addressErr=$valueerr = "";
$UserName = $Email = $Password = $address = $value = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["username"]);
  }

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

  if (empty($_POST["address"])) {
    $addressErr = "";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["value"])) {
    $valueerr = "Gender is required";
  } else {
    $value = test_input($_POST["value"]);
  }
}
?>
<?php
include('connection.php');
if (isset($_POST['submit']))
{
 $UserName=$_POST['username'];
 $Email=$_POST['userid']; 
 $Password=$_POST['passid'];
 $address=$_POST['address'];
 $value=$_POST['value'];

 mysqli_query($conn,"insert into users(User_name,password,User_email,User_address,value) values    ('$UserName','$Password','$Email','$address','$value')");
 if($value==0)
 {
  $result=mysqli_query($conn,"select * from users where User_email='$Email' and password='$Password'") or die      (mysqli_error($conn));
  $count=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
  if($count > 0)
  {
   session_start();
   $_SESSION['id']=$row['user_id'];
   header('location:uevent.php');
  }
  else
  {
        echo "<script>alert('Unable to signup now.Please try after sometime!')</script>";
        echo "<script>window.location = 'validation.html'</script>"; 
  }
 }
 else
 {
  $result=mysqli_query($conn,"select * from users where User_email='$Email' and password='$Password'") or die (mysqli_error($conn));
  $count=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result); 
  if($count > 0)
  {
   session_start();
   $_SESSION['id']=$row['user_id'];
   header('location:viewevent.php');
  }
  else
  {
   echo "<script>alert('Unable to signup now.Please try after sometime!')</script>";
   echo "<script>window.location = 'validation.html'</script>"; 
  }
 }
}

$to_email = "$Email";
$subject = "Successful Registration for Augusto centro ";
$body = "Hi $UserName,
You have successfully registered for Augusto Centro ";
$headers = "From: Augusto Centro";
mail($to_email, $subject, $body, $headers);


?>
