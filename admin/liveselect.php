<?php   
 //load_data_select.php  
 include"inc/head.php";  
 function fill_brand($con)  
 {  
      $output = '';  
      $sql = "SELECT car FROM cars";  
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["car"].'">'.$row["car"].'</option>';  
      }  
      return $output;  
 }  
 function fill_product($con)  
 {  
       
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <script src="../js/jquery.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <p>  
                     <select name="model" id="model">  
                          <option value="">SELECT MODEL</option>  
                          <?php echo fill_brand($con); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="show_product">  
                          <?php echo fill_product($con);?>  
                     </div>  
                </p>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#model').change(function(){  
           var brand_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{brand_id:brand_id},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 });  
 </script>  