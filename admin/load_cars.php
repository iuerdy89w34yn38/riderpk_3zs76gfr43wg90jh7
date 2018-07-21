 <?php  
 //load_data.php  
 
  include"inc/head.php";
  
 $output = '';  
 if(isset($_POST["brand_id"]))  
 {  $model = $_POST['brand_id'];
      if($_POST["brand_id"] != '')  
      {  
           $sql = "SELECT model,year,post_id FROM carposts WHERE carposts.model in ('$model')";  
        
        
      $result = mysqli_query($con, $sql)or die(mysqli_error($con));  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class=""><div>'.$row["model"].'&nbsp'.$row["year"].'&nbsp ID ('.$row["post_id"].')</div></div>';  
      }  
      echo $output;  
 } } 
 ?>