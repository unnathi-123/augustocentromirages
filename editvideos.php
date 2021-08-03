<!doctype html>
<html>
  <head><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="mijares.css">
    </head>
    <body>
        
        <!-- wrapper class for the page -->
         <div id="wrapper">
               <header class="header">    
         <img src="logo.png" alt="logo">
         
         
         <!-- header for the page -->
             
    <a href="Inicio.html"> Inicio</a>
    <a href="Semblanza.html"> Semblanza</a>
    <a href="CentroAugustoMijares.html"> Centro Augusto Mijraes</a>
    <a href="Proyectos.html"> Proyectos</a>
    <a href="Eventos.html"> Eventos</a>
     <a href="http://cxk5454.uta.cloud/"> Blog</a>
    <a href="Videos.html"> Videos</a>
    <a href="Equipment.php"> Equipo</a>
    <a href="IniciodeSession.html"> Inicio de Session</a>
    <a href="Registro.html"> Registro</a>
        
            
        </header>
             <nav class="navbar">
             <ul>
  <li><a href="uevent.php">Eventos</a></li>
  <li><a href="uvideos.php">Videos</a></li>
  <li><a href="Equipment.php">Equipment</a></li>
  <li><a href="uproject.php">Proyectos</a></li>
  
</ul>
             </nav>        

<section class="eventoslogin">
             <div class="content">
  <h2>VIDEOS </h2>       
      
  
   <table class="table table-bordered"> 
    <?php
    include("connection.php");
 
    if(isset($_POST['but_upload'])){
       $maxsize = 5242880; // 5MB
 
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
$desc=$_POST["Videodesc"];
              // Update record
$id=$_POST["id"];
echo $id;

$query = "update videos set name='$name',location ='$target_file',videos_desc='$desc' where id='$id'";  

              
              mysqli_query($conn,$query);
              echo '<script>alert("Image Inserted into Database")</script>';
echo "<script>window.location = 'uvideos.php'</script>"; 
            }
          }

       }else{
          echo "Invalid file extension.";
       }
 
     } 
     ?>
  </head>
  <body>
    <form method="post" action="" enctype='multipart/form-data'>
      
<label for="Videodesc">Video Description  </label>
        <input type="text-area" name="Videodesc" placeholder="Video Description" height="20" width="30">
   <br><br> <input type='file' name='file' />
      <br><br><input type='submit' value='Upload' name='but_upload'>

    </form>

  </body>
</html>