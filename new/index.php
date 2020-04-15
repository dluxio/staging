<!doctype html>
<html lang="en" class="h-100"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
<title>DLUX - Create</title>
<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/session.js"></script>
<script type="text/javascript" src="https://kit.fontawesome.com/0f693ffc58.js" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
<?php include '../mod/nav.php';?>
<main role="main" class="flex-shrink-0">
<div class="padme-t70"></div>
  <div class="container">
	<div class="card w-100 border-danger bg-none my-5">
      <div class="card-body text-center text-white">
    	<h5 class="card-title">DLUX VR BUILDER</h5>
    	<p class="card-text">Remix our boilerplate on Glitch and upload your own images and 3D models</p>
		<hr class="bg-light">
		<center>
		<ul class="text-left">
		<li>App Type: VR</li>
		<li>Builder: 2D drag-and-drop asset upload, code panel, and publishing form; 3D A-Frame inspector</li>
		<li>Difficulty: Intermediate</li>
		</ul>
		</center>
    	<a href="https://dlux-vr.glitch.me/build.html" target="_blank" class="btn btn-danger">Get Started</a>
  	  </div>
	</div>
	<div class="card w-100 border-danger bg-none my-5">
      <div class="card-body text-center text-white">
    	<h5 class="card-title">SUPERCRAFT</h5>
    	<p class="card-text">Use a VR headset to build scenes with your hands, then publish to DLUX</p>
		<hr class="bg-light">
		<center>
		<ul class="text-left">
		<li>App Type: VR</li>
		<li>Builder: VR with Touch Controls, 2D publishing form</li>
		<li>Difficulty: Easy</li>
		</ul>
		</center>
    	<a href="../create/supercraft.php" class="btn btn-danger">Get Started</a>
  	  </div>
	</div>
		
	</div>
	</main>
<?php include '../mod/footer.php';?>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-4.4.1.js"></script>
<script>checkCookie()</script>
</body></html>