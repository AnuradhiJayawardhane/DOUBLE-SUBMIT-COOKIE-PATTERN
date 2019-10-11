<?php
 session_start();

//check login credentials
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      $uname = $_POST['username'];
      $pwd = $_POST['password'];
      if($uname == 'admin' && $pwd == 'admin'){
	      
       //create session id and csrf cookies
        $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
        $session_id = session_id();
       
        setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/');
        setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/');

      //directed to send.php
        header("Location:send.php");
      }
       else{
        //redirect to login page
				header("Location:index.php");
			}
    }
}
else{
	header("Location:index.php");
	}
  ?>
