<?php  
 if(isset($_POST["userid"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "id15134030_mukul", "UuV[9eD=+m(Cbn_X", "id15134030_banking");  
      $query = "SELECT * FROM bankingman WHERE id = '".$_POST["userid"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["Name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Account Number</label></td>  
                     <td width="70%">'.$row["Accountno"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Amount</label></td>  
                     <td width="70%">'.$row["amount"].'</td>  
                </tr> 
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>