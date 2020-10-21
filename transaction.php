<?php  
 $connect = mysqli_connect("localhost", "id15134030_mukul", "UuV[9eD=+m(Cbn_X", "id15134030_banking");   
 $query = "SELECT * FROM record order by tid desc";  
 $result = mysqli_query($connect, $query);  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--meta tab-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/styles.css">

<title>HELLO</title>
</head>
<body>
	<nav class="navbar navbar-dark navbar-expand-md fixed-top">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="costumer.php" ><span class="fa fa-info fa-lg"></span> Customers</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
				</ul>
				<br>
				<br>
				
                </div>           
        </div>
	</nav>
	<div class="container">
		<div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active">Transactions</li>
            </ol>
        </div>


		<div class="table-responsive">
				<table class="table table-striped">
					<thead class="thead-dark"> 
					<tr>
						<th scope="col">Sender</th>
						<th scope="col">Receiver</th>
						<th scope="col">Transaction Amount</th>
						<th scope="col">Transaction Time</th>
					</tr>
					</thead>
					<?php  
					while($row = mysqli_fetch_array($result))  
					{  
					?>  
					<tr>
						<td><?php echo $row["sender"]; ?></td>
						<td><?php echo $row["receiver"]; ?></td>
						<td><?php echo $row["amount"]; ?></td>
						<td><?php echo $row["timestamp"]; ?></td>
					</tr>  
					<?php  
					}  
					?>  
				</table>

		</div>
    </div>










 <footer class="footer sticky-footer">
    	<div class="container">
    		<div class="row-justify content-center">
				<div class="col-auto">
    				<div class="text-center"> 
						<a class="btn btn-social-icon btn-envelope" href="mailto:mukulshukla987@gmail.com"><i class="fa fa-envelope fa-lg"></i></a>
    					<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/mukul.shukla.566/"><i class="fa fa-facebook fa-lg"></i></a>
    					<a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/sce17cs048/"><i class="fa fa-linkedin fa-lg"></i></a>
    					<a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
						
						<p>(c)mukul</p>
					</div>
				</div>
    		</div>
    	</div>	
	</footer>
	
</body>



</html>