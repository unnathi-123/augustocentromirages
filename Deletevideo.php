
<?php
$id=$_POST['id'];  
echo $id;
 $connect = mysqli_connect("167.99.105.36", "uxn8087_wp1", "Utadatabase@123", "uxn8087_augusto") or die("database not connected");
 $query = "DELETE FROM videos WHERE id='$id'"; 
    
  print(mysqli_query($connect, $query));
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("video Deleted Successfully")</script>'; 
echo "<script>window.location = 'uvideos.php'</script>"; 
      }  
  
 ?>  