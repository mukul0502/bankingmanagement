<?php

 $username='id15134030_mukul';
 $password='UuV[9eD=+m(Cbn_X';
 $server='localhost';
 $db='id15134030_banking';


 $con=mysqli_connect($server,$username,$password,$db);
 if($con){
     ?><script>
        alert('Connection Successful');
        </script>
    <?php
    }else{
        ?><script>
        alert('no Connection');
        </script>
    <?php
    }
?>