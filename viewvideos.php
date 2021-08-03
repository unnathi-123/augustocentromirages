

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="mijares.css">
    </head>
    <body>
        
                 <!-- wrapper for the page -->
        
         <div id="wrapper">
             
             
                      <!-- header for the page -->
             
               <header class="header">    
         <img src="logo.png" alt="logo">
         
             
    <a href="Inicio.html"> Inicio</a>
    <a href="Semblanza.html"> Semblanza</a>
    <a href="CentroAugustoMijares.html"> Centro Augusto Mijraes</a>
    <a href="Proyectos.html"> Proyectos</a>
    <a href="Eventos.html"> Eventos</a>
     <a href="http://cxk5454.uta.cloud/"> Blog</a>
    <a href="Videos.html"> Videos</a>
    <a href="Equipo.html"> Equipo</a>
    <a href="IniciodeSession.html"> Inicio de Session</a>
    <a href="Registro.html"> Registro</a>
        
            
        </header>
             <nav class="navbar">
             <ul>
  <li><a href="viewevent.php">Eventos</a></li>
  <li><a href="viewvideos.php">Videos</a></li>
  <li><a href="viewequipment.php">Equipment</a></li>
  <li><a href="viewproject.php">Proyectos</a></li>
</ul>
             </nav>        
<section class="eventoslogin">
             
<div class="content">
  <h2>VIDEOS </h2>   
    
 
     <?php
	 $conn=mysqli_connect("167.99.105.36", "uxn8087_wp1", "Utadatabase@123", "uxn8087_augusto") or die("database not connected");
     $fetchVideos = mysqli_query($conn, "SELECT * FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
       $description=$row['videos_desc'];
       $id=$row['id'];
       echo "<div >";
       echo "<video src='".$location."' controls width='320px' height='200px' >";
       echo "</div><br>";
       echo "$description";
       echo "$id";
?>

<?php
     }
 ?>
    </div>

  </body>
</html>