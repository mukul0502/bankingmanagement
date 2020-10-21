<!DOCTYPE html>
<html lang="en">
<head>
	<!--meta tab-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<!-- Bootstrap CSS -->
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
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="costumer.php" ><span class="fa fa-info fa-lg"></span> Customers</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
				</ul>
				<br>
				<br>
				
                </div>           
        </div>
	</nav>


	
	<div class="row row-content">
		<div class="col">
			<br>
			<br>
			<h1 class="headb">Banking Management System</h1>
		<br>

		<div class="row row-content">
			<div class="col col-12 col-sm-6">
				<div class="cust">
					<button class="btn1 btn-primary btn-lg btn-block" type="button" data-toggle="collapse"
					><a id="c" href="costumer.php">Customers</a><span class="caret"></span>
					</button>
				</div>
			</div>

	
			<div class="col col-12 col-sm-6">
				<div class="trans">
					<button class="btn2 btn-primary btn-lg btn-block" type="button" data-toggle="collapse"
					><a id="c" href="transaction.php">Transactions</a><span class=" caret"></span>
					</button>
				</div>
			</div>
		</div>
	</div>
	
	<div id="transModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Transactions </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <footer class="footer fixed-bottom ">
    	<div class="container">
    		<div class="row-justify content-center">
				<div class="col-auto align-self-center">
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


<script>
    $(document).ready(function () {
      $('#transaction').click(function () {
        $('#transModal').modal('show')
      });
    });
  </script>

</html>
<?php


include 'connection.php';


?>