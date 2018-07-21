 <?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "riderspk");  
 $output = '';  
 if(isset($_POST["brand_id"]))  
 {  $model = $_POST['brand_id'];
      if($_POST["brand_id"] != '')  
      {  
           $sql = "SELECT model FROM carposts WHERE carposts.model in ('$model')";  
      }  
      else  
      {  
           $sql = "SELECT model FROM carposts";  
      }  
      $result = mysqli_query($connect, $sql)or die(mysqli_error($connect));  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["model"].'</div></div>';  
      }  
      echo $output;  
 }  
 ?>