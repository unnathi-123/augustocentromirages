
<!DOCTYPE html>
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
  <li><a href="uevent.php">Eventos</a></li>
  <li><a href="uvideos.php">Videos</a></li>
  <li><a href="Equipment.php">Equipment</a></li>
  <li><a href="uproject.php">Proyectos</a></li></ul>
             </nav>        
             <section class="eventoslogin">
             <div class="content">
    <fieldset>
<?php $id=$_GET["id"]; ?>
     <form method="post" enctype="multipart/form-data">  
        <table id="addeventtable">
        <tr> <td><label for="Projectname">Project Name</label></td>
            <td><input type="text" id="Projectname" name="Projectname" placeholder="Project name"></td>
        </tr>
       
    <tr><td><label for="Projectdesc">Project Description</label></td>
        <td><input type="text-area" name="Projectdesc" placeholder="Project Description" height="20" width="30"></td>
    </tr>
   
     <tr>   <td><label for="ProjectImage">Project Image</label></td>
    
        <td><input type="file" name="image" id="image" />   </td>
    </tr>
	
    
    </table>
      <input type="submit" name="insert" id="insert" value="Update" class="btn btn-info" />    
  </form>
 
   </div>
</fieldset>
</div>
</section>
                      
                               <!-- footer for the page -->
                      
<footer class="footer">
             <p>_______________________________________________________________________________________________________________________________________________</p>
             <p> Copyright &COPY; 2020 All rights reserved | This template is made with <a class="highlight">&hearts;</a> by <a class="highlight">DiazApps</a>  <a href="#" class="fa fa-facebook"></a> <a href="#" class="fa fa-twitter"></a>  <a href="#" class="fa fa-dribbble"></a>&Beta;&egrave;
             </p>
</footer>
              
</div> 
    </body>
</html>


<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  



<?php  
 $connect = mysqli_connect("167.99.105.36", "uxn8087_wp1", "Utadatabase@123", "uxn8087_augusto") or die("database not connected");
 if(isset($_POST["insert"]))  
 {  
      $project_title=$_POST["Projectname"];
      $project_description=$_POST["Projectdesc"];
      
    

      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     

$query = "update projects set project_image='$file',project_title ='$project_title',project_description='$project_description' where project_id='$id'";  




  print(mysqli_query($connect, $query));
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Project Details Updated")</script>';  
      }  
 }  
 ?>  