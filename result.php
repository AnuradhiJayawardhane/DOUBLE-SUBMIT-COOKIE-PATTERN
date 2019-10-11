<?php
session_start();
require_once 'token.php';

//cecking the login
if ( empty( $_SESSION['token']) ) {
  header("Location:index.php");
}
else{
  
}

$val = $_POST["token"];
?>
<!DOCTYPE html>
<html>
<head>
  <title>DOUBLE SUBMIT COOKIE PATTERN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="style.css" rel="stylesheet">
</head>

<body class="obody">
<?php
	if(isset($_POST['updatepost'])){

    //check the csrf token
		if(token::checkToken($val,$_COOKIE['csrfTokenCookie'])) { ?>
			<h1 class="login" > SERVER REQUEST ACCEPTED</h1> 
			<div class="container">
    			<div class="row">

            <!--Display the token and the message-->
      				<div class="token_column">
      					<p class="result"><?php echo "USER'S REQUEST : " .$_POST['updatepost'].""; ?> </p>
						  <p class="show_result"> <?php echo "CSRF TOKEN IS MATCHED:(cookie == hidden field) 
      					 ((".$val.")----(".$_COOKIE['csrfTokenCookie']."))"; ?> 
      					</p>
      				</div>
    			</div>
			</div>		
		<?php }
		else {

      //if csrf token invalid
	   		echo "SERVER REQUEST IS FAILED! , UNAUTHORIZED REQUEST!".$_COOKIE['csrfTokenCookie'];
		}
	}
?>
</body>
</html>