<!DOCTYPE html>
<html lang="en">
<head>
	
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


    <script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Breach"){
				 var arr=["Sage","Rhyena","Viper","Chyper","Omen","Killjoy","Brimestone","Raze","Skye"];
				 }
				 else if(a==="Sage"){
					var arr=["Breach","Rhyena","Viper","Chyper","Omen","Killjoy","Brimestone","Raze","Skye"];
				}
				else if(a==="Rhyena"){
					var arr=["Breach","Sage","Viper","Chyper","Omen","Killjoy","Brimestone","Raze","Skye"];
				}
				else if(a==="Viper"){
					var arr=["Breach","Sage","Rhyena","Chyper","Omen","Killjoy","Brimestone","Raze","Skye"];
				 }
				 else if(a==="Chyper"){
					var arr=["Breach","Sage","Rhyena","Viper","Omen","Killjoy","Brimestone","Raze","Skye"];
				 }
				 else if(a==="Omen"){
					var arr=["Breach","Sage","Rhyena","Viper","Chyper","Killjoy","Brimestone","Raze","Skye"];
				 }
				 else if(a==="Killjoy"){
					var arr=["Breach","Sage","Rhyena","Viper","Chyper","Omen","Brimestone","Raze","Skye"];
				 }
				 else if(a==="Brimestone"){
					var arr=["Breach","Sage","Rhyena","Viper","Chyper","Omen","Killjoy","Raze","Skye"];
				 }
				 else if(a==="Raze"){
					var arr=["Breach","Sage","Rhyena","Viper","Chyper","Omen","Killjoy","Brimestone","Skye"];
				 }
				 else if(a==="Skye"){
				 var arr=["Breach","Sage","Rhyena","Viper","Chyper","Omen","Killjoy","Brimestone","Raze"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<div class="container">
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<td><h1 id="tc">Credits Transfer</h1></td>
			</tr>
		</table>
		<br><br>
		<div class="center">
			<div class="col-12 col-sm-4 offset-sm-4">
				<form class="tab" action="creditupdate.php" method="post">
					<label for="sender">Transfer From : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   </label>
							<select id="input" name="sender" onchange="random_function()">
								<option  selected>Select Name</option>
								<option value="Breach">Breach</option>
								<option value="Sage">Sage</option>
								<option value="Rhyena">Rhyena</option>
								<option value="Viper">Viper</option>
								<option value="Chyper">Chyper</option>
								<option value="Omen">Omen</option>
								<option value="Killjoy">Killjoy</option>
								<option value="Brimestone">Brimestone</option>
								<option value="Raze">Raze</option>
								<option value="Skye">Skye</option>
							</select><br><br>
						
					<label for="receiver">Transfer To :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
						<select id="output" name="receiver" onchange="random_function1()" >
							<option>Select Name</option>
						</select><br><br>
					<label for="sender_name">Credits :&nbsp</label>
						<input type="number" min=1 name="transfer"><br><br><br>
					<div class="button1 button-primary">
						<input class="button button-primary" type="submit" name="submit" value="Transfer">
					</div>
				</form> 						
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