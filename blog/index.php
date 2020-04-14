<!doctype html>
<html lang="en" class="h-100"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>DLUX - Create</title>
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../dmxAppConnect/dmxAppConnect.js"></script>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/session.js"></script>
<script type="text/javascript" src="https://kit.fontawesome.com/0f693ffc58.js" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
<dmx-api-datasource id="dluxPost" is="dmx-fetch" url="https://token.dlux.io/getwrap?" dmx-param:method="'condenser_api.get_content'" dmx-param:params=`'[%22dlux-io%22,%221gr2rs1mgck2rrjf6awhrrq1rm4idrb4%22]'`></dmx-api-datasource>
<?php include '../modules/nav.php';?>
<main role="main" class="flex-shrink-0">
	<div>
  <div class="modal-content bg-dark text-white">
	<dmx-data-detail id="app_detail" dmx-bind:data="dluxGetBlog.data.result" key="entry_id">
		<div class="d-inline-block p-2">
	  <div class="float-left" ><a dmx-bind:href="/@{{comment.author}}"><img dmx-bind:src="https://token.dlux.io/getauthorpic/{{data.comment.author}}" alt="" class="rounded-circle bg-light img-fluid mr-2 cover author-img"></a></div>
        <div class="float-left">
          <p class="mt-0 mb-0 text-muted text-semibold"><a dmx-bind:href="/@{{comment.author}}" class="a-1">{{data.comment.author}}<span class="ml-2 badge badge-pill badge-light">{{data.comment.author_reputation.toString().rep()}}</span></a></p>
          <small class="text-muted">{{data.comment.created.formatDate("MMM dd, yyyy")}}</small></div>
		</div>
      <div class="float-right p-2"><span class="badge badge-secondary">{{data.comment.json_metadata.scat()}}</span><button type="button" class="close text-white ml-3" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button></div>
		<hr class="mt-0">
    <h4 class="text-center p-2">{{data.comment.title}}</h4>
    

	 <img src="..."  alt="Card image cap" class="card-img-top" dmx-bind:src="{{data.comment.json_metadata.parseJSON().image}}" />  
    <p class="p-2">{{data.comment.body.removeMD()}}</p>
		  <center>
      <a dmx-bind:href="{{data.comment.url}}" type="button" class="btn btn-outline-danger mb-4 btn-launch">Launch App</a>
    </center>
<hr class="mb-0">
		<div class="collapse" dmx-bind:id="vote{{entry_id}}">
		<form id="voteForm">
  		<div class="form-group">

    	<ul class="list-unstyled">
			<li class="float-left px-1"><button type="button" class="btn btn-primary" dmx-bind:id="voteBtn{{entry_id}}" dmx-bind:onclick="vote('{{comment.author}}','{{comment.permlink}}','slider{{entry_id}}')" style="width:70px">100%</button></li>
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
        <a data-toggle="collapse" dmx-bind:data-target="{{&quot;#&quot;}}vote{{entry_id}}"><i class="fas fa-heart mr-1"></i></a>{{data.comment.active_votes.countUpVotes()}} <i class="fas fa-comment ml-2 mr-1"></i>{{data.comment.children}}</div>
      </div>
      <div class="float-right p-2">{{data.comment.total_payout_value}} <img src="../img/hextacular.svg" alt="" width="17"/></div>

  </div>
</dmx-data-detail>
	 </div>
</main>
<?php include '../modules/footer.php';?>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-4.4.1.js"></script>
<script>checkCookie()</script>
</body></html>
