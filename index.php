<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dlux</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
  <link href="css/dlux.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/0f693ffc58.js" crossorigin="anonymous"></script>
<script type="text/javascript">
function getCookie(c_name){
  if (document.cookie.length>0){
      c_start=document.cookie.indexOf(c_name + "=");
      if (c_start!=-1){
        c_start=c_start + c_name.length+1;
        c_end=document.cookie.indexOf(";",c_start);
        if (c_end==-1) c_end=document.cookie.length;
        return unescape(document.cookie.substring(c_start,c_end));
        }
     }
   return "";
}
let user
function checkCookie(){
	console.log('Checking for login...')
    user = sessionStorage.getItem('user');
	console.log('user='+user)
    if (user!=null){
	console.log(user + ' logged in successfully')
      document.getElementById('user-button').href.value = 'dashboard/index.html?e='+ user;
    }
}
</script>
</head>
  <body>
 <?php include 'modules/nav.php';?>
	  
<?php
print_r($_SESSION);
?>
    <div class="jumbotron jumbotron-fluid text-center text-white bg-win">
       <div class="container">
		<div class="row">
         <div class="col-xl-6"><h1 class="display-4">dlux</h1>
		   <h6>DECENTRALIZED LIMITLESS USER EXPERIENCES</h6>
		   <hr class="my-4">
       <p class="lead">The easiest wayt to build and distribute dApps on HIVE</p>
       
		<p></p>
       <p>Empower your  project with an open source token  and wallet backed by deterministic concensus on a distributed ledger</p>
       <p>Simple onboarding with magic link emails and HIVE wallet creation</p>
<p class="lead">
          <a class="btn btn-lg btn-outline-primary" href="/documentation/start.html" role="button">Get started</a>&nbsp; &nbsp;&nbsp;
	
	<a class="btn btn-lg btn-outline-secondary" href="https://github.com/dluxio/dluxio/archive/master.zip" role="button">Download</a>
       </p>

    </div>
         <div class="col-xl-6 order-first order-md-last"><img src="img/dlux-sdk.png" alt="dlux logo" class="img-fluid"></div>
</div>
    </div> 
    </div>
	  
    <div class="container-fluid text-white">
	  <div class="row">
		  <div class="col-xl-4">
			   <p class="lead">Smart</p>
			  <p><img src="img/smart-img.png" class="img-fluid rounded" alt="smart"></p>
	    	<p>Dlux is turing complete and can handle smart contracts, non fungible tokens, escrow, voting, and any other programming logic.</p>
			<p class="text-center"><a class="btn btn-lg btn-outline-primary" href="https://github.com/dluxio/dluxio" role="button">Contribute code</a></p>
	    </div>
		  
	    <div class="col-xl-4">
			<p class="lead">Secure</p>
	    	<p><img src="img/secure-img.png" class="img-fluid rounded" alt="secure"></p>
			<p>Dlux utilizes the STEEM proof-of-stake blockchain to maintain trustless concensus via node networks for peer-to-peer transactions in a deterministic way.</p>
			<p class="text-center"><a class="btn btn-lg btn-outline-primary" href="/docs/index.html" role="button">Run a node</a></p>
	    </div>
	    
	    <div class="col-xl-4">
			<p class="lead">Compatible</p>
	    	<p><img src="img/compatible-img.png" class="img-fluid rounded" alt="compatible"></p>
			<p>Dlux works with all HTML5 web technologies, including OpenGL, A-Frame, JavaScript, WebXR, React, Vue, Bootstrap, and others.</p>
			<p class="text-center"><a class="btn btn-lg btn-outline-primary" href="https://dlux-vr.glitch.me/build.html" target="_blank" role="button">Build VR</a></p></div>
	</div>
  </div>
	  <br>
<?php include 'modules/footer.php';?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>
    <script type="text/javascript">
	checkCookie()
    </script>
  </body>
</html>
