<!doctype html>
<html lang="en" class="h-100"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>DLUX</title>
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../dmxAppConnect/dmxAppConnect.js"></script>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../dmxAppConnect/dmxFormatter.js"></script> <script type="text/javascript" src="../js/session.js"></script>
<script type="text/javascript" src="https://kit.fontawesome.com/0f693ffc58.js" crossorigin="anonymous"></script>
<meta charset="UTF-8">
</head>

<body id="test" is="dmx-app" class="text-white">
	<dmx-api-datasource id="dluxPost" is="dmx-fetch" url="https://token.dlux.io/getwrap?" dmx-param:method="'condenser_api.get_content'" dmx-param:params="'[%22dlux-io%22,%22testing-dlux-vr%22]'"></dmx-api-datasource>
	<?php include '../modules/nav.php';?>
	<main role="main" class="flex-shrink-0">
	<div>
  <div class="bg-dark text-white">
	
		<div class="d-inline-block p-2">
	  <div class="float-left" ><a dmx-bind:href="/@{{dluxPost.data.result.author}}"><img dmx-bind:src="https://token.dlux.io/getauthorpic/{{dluxPost.data.result.author}}" alt="" class="rounded-circle bg-light img-fluid mr-2 cover author-img"></a></div>
        <div class="float-left">
          <p class="mt-0 mb-0 text-muted text-semibold"><a dmx-bind:href="/@{{dluxPost.data.result.author}}" class="a-1">{{dluxPost.data.result.author}}<span class="ml-2 badge badge-pill badge-light">{{dluxPost.data.result.author_reputation.toString().rep()}}</span></a></p>
          <small class="text-muted">{{dluxPost.data.result.created.formatDate("MMM dd, yyyy")}}</small></div>
		</div>
      <div class="float-right p-2"><span class="badge badge-secondary">{{dluxPost.data.result.json_metadata.scat()}}</span><button type="button" class="close text-white ml-3" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button></div>
		<hr class="mt-0">
    <h4 class="text-center p-2">{{dluxPost.data.result.title}}</h4>
    

	 <img src="..."  alt="Card image cap" class="card-img-top" dmx-bind:src="{{dluxPost.data.result.json_metadata.parseJSON().image}}" />  
    <p class="p-2">{{dluxPost.data.result.body.removeMD()}}</p>
		  <center>
      <a dmx-bind:href="{{dluxPost.data.result.url}}" type="button" class="btn btn-outline-danger mb-4 btn-launch">Launch App</a>
    </center>
<hr class="mb-0">
		<div class="collapse" id="vote">
		<form id="voteForm">
  		<div class="form-group">

    	<ul class="list-unstyled">
			<li class="float-left px-1"><button type="button" class="btn btn-primary" dmx-bind:id="voteBtn{{entry_id}}" dmx-bind:onclick="vote('{{dluxPost.data.result.author}}','{{dluxPost.data.result.permlink}}','slider{{entry_id}}')" style="width:70px">100%</button></li>
			<li class="float-left px-1"><button type="button" class="btn btn-secondary" data-toggle="collapse" dmx-bind:data-target="{{&quot;#&quot;}}vote{{entry_id}}"><span class="close text-white">×</span></button></li>
		</ul>
		<ul class="float-right list-unstyled">
			<li>###.###  <img src="../img/hextacular.svg" alt="" width="17"/></li>
		</ul>
			<div class="">
    	<div style="display: flex; flex-grow: 1" class="px-3"><input type="range" class="form-control-range" value="100" dmx-bind:id="slider{{entry_id}}" dmx-bind:onchange="updateVoteSubmit('voteBtn{{entry_id}}','slider{{entry_id}}');"></div>
  </div>
			</div>
</form>
			</div>
		<div class="d-inline-block p-2">
        <a data-toggle="collapse" data-target="#vote"><i class="fas fa-heart mr-1"></i></a>{{dluxPost.data.result.active_votes.countUpVotes()}} <i class="fas fa-comment ml-2 mr-1"></i>{{dluxPost.data.result.children}}</div>
      </div>
      <div class="float-right p-2">{{dluxPost.data.result.total_payout_value}} <img src="../img/hextacular.svg" alt="" width="17"/></div>

  </div>

	 </div>
</main>
<?php include '../modules/footer.php';?>
<script>checkCookie()</script>
	</body>
</html>