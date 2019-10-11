<?php
 session_start();
require_once 'token.php';

//checking the login 
if ( empty( $_SESSION['token']) ) {
	header("Location:index.php");
}
else{

}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>DOUBLE SUBMIT COOKIE PATTERN</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   	 	<link href="style.css" rel="stylesheet">
    	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	

		<script>
		//ajax call	
		$(document).ready(function(){
	
		var cookie_value = "";
    	var decodedCookie = decodeURIComponent(document.cookie);//get csrf token from cookie
    	var ca = decodedCookie.split(';');
		var csrf = decodedCookie.split(';')[2]
		if(csrf.split('=')[0] = "csrfTokenCookie" ){
		cookie_value = csrf.split('csrfTokenCookie=')[1];
		document.getElementById("tokenIn_hidden_field").setAttribute('value', cookie_value) ;//add csrf token to hidden fields
		}
		});

		</script>

  	</head>

	<body class="obody">
		<h1 class="login">SUCCESSFULLY LOGGED IN</h1>
		<div class="s_container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">


                	<!--form for sending both request and csrf token-->
                      <form class="form" action="result.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-white"><h5>SEND A REQUEST</h5></label><br>
                                <input type="text" name="updatepost" class="inpt">
                            </div>
                            <div id="div1">
					              <input type="hidden" name="token" value="" id="tokenIn_hidden_field"/>
					        </div>
                            <div class="form-group">
                                <input type="submit"  class="btn" value="UPDATE POST">
                            </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	</body> 
</html>
