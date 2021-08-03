<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
  <li><a href="uproject.php">Proyectos</a></li></ul>
             </nav>        
         <!-- content for the page -->
             
             <section class="eventoslogin">
             <div class="content">
  <h2>PROJECTS <a href="addproject.php" class="addbutton">Add Project<i class="fa fa-plus"></i></a></h2>       
      
  
   <table class="table table-bordered">  
                     
                <?php  
$connect = mysqli_connect("167.99.105.36", "uxn8087_wp1", "Utadatabase@123", "uxn8087_augusto") or die("database not connected");
                $query = "SELECT * FROM projects ORDER BY project_id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { 

                     echo '  
                          <tr> 
 
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['project_image'] ).'" height="200" width="200" class="img-thumnail" /> 

  </td> 
<td> Event Title :' .$row['project_title'].' <br/> Event Description :'.$row['project_description'].' </td>
<td>
	<form  method="post" action="editproject.php?id='.$row['project_id'].'" >
        <input type="submit" name="action" value="Edit"/>
        </form>
       </td>
<td>
<form  method="post" action="Deleteproject.php?id='.$row['project_id'].'" >
<input type="submit" name="action1" value="Delete"/></td>
      </form>
</form>

</span>
</body>
</html> </td>

                        </tr>
  
                     ';  

                }  
                ?>  
                </table>  
  
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
