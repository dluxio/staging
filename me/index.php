<!doctype html>
<html lang="en" class="h-100">
<head>
<title>DLUX - Username</title>
<?php include '../mod/header.php';?>
<!--dmxAppConnect-->
<script type="text/javascript" src="../dmxAppConnect/dmxAppConnect.js"></script>
<script type="text/javascript" src="../dmxAppConnect/dmxMoment.js"></script>
<script type="text/javascript" src="../dmxAppConnect/dmxFormatter.js"></script>
<script type="text/javascript" src="../dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js"></script>
</head>

<body class="d-flex flex-column h-100" id="apps" is="dmx-app">
<dmx-api-datasource id="dluxGetBlog" is="dmx-fetch" url="https://token.dlux.io/getwrap?" dmx-param:method="'condenser_api.get_blog'" dmx-param:params="'[%22markegiles%22,0,20]'"></dmx-api-datasource>
<?php include '../mod/nav.php';?>
<main role="main" class="flex-shrink-0 text-white">
  <div class="container-fluid px-0 ">
	  <div class="container-fluid bg-darker border-bottom">
	  <div class="container">
		<div class="row mt-3  padme-t70">
      <div class="col-md-8 text-white">
		  
		  <div class="d-inline-block">
        <div class="float-left"><img dmx-bind:src="https://token.dlux.io/getauthorpic/{{dluxGetBlog.data.result[0].blog}}" alt="" class="rounded-circle bg-light img-fluid mr-4 cover profile-img"></div>
			  <div class="float-left"><p class="display-4 mb-0">{{dluxGetBlog.data.result[0].blog}}</p>
        <small class="lead p-2">description needs an api or helper</small>
			  </div></div></div>
      <div class="col-md-4 text-center m-auto"> <a class="btn btn-outline-primary btn-lg m-1" role="button" dmx-bind:href="../@{{dluxGetBlog.data.result[0].blog}}" target="_blank">VR Page<i class="fas fa-vr-cardboard mx-2 fa-lg"></i></a>
		  <a class="btn btn-outline-primary btn-lg m-1 " href="../new/" role="button">Actions<i class="fas fa-ellipsis-h ml-2"></i></i></a></div>
    </div>
  <ul class="nav nav-tabs bg-darker mx-0 px-0 mt-5 border-bottom-0" role="tablist">
	    <li class="nav-item">
			<a class="nav-link active" href="#blog" id="blogtab" role="tab" data-toggle="tab" aria-controls="blog" aria-expanded="true">Blog</a> </li>
	    <li class="nav-item"> 
			<a class="nav-link" id="wallettab" role="tab" data-toggle="tab" aria-controls="wallet" aria-expanded="true" href="#wallet">Wallet</a> </li>
	    <li class="nav-item"> 
			<a class="nav-link" id="settingstab" role="tab" data-toggle="tab" aria-controls="settings" aria-expanded="true" href="#settings">Settings</a> </li>
    </ul>
	</div></div>
	 <div id="pagecontent" class="tab-content">
       <div role="tabpanel" class="tab-pane fade show active" id="blog" aria-labelledby="blogtab">
 <div class="card-columns p-3" id="blogResult" is="dmx-repeat" dmx-bind:repeat="dluxGetBlog.data.result">
  <div class="card text-white bg-dark mt-2 mb-3">
    <div class="card-header">
      <div class="d-inline-block">
        <div class="float-left" ><a dmx-bind:href="/@{{comment.author}}"><img dmx-bind:src="https://token.dlux.io/getauthorpic/{{comment.author}}" alt="" class="rounded-circle bg-light img-fluid mr-2 cover author-img"></a></div>
        <div class="float-left">
          <p class="mt-0 mb-0 text-muted text-semibold"><a dmx-bind:href="/@{{comment.author}}" class="a-1">{{comment.author}}<span class="ml-2 badge badge-pill badge-light">{{comment.author_reputation.toString().rep()}}</span></a></p>
          <small class="text-muted">{{comment.created.formatDate("MMM dd, yyyy")}}</small></div>
      </div>
      <div class="float-right"><span class="badge badge-secondary">{{comment.json_metadata.scat()}}</span></div>
    </div>
    <a href="#detailModal" class="a-1" data-toggle="modal" dmx-on:click="app_detail.select(entry_id)" dmx-bind:onclick="window.history.pushState('{{comment.url}}','{{comment.title}}', '/blog/@{{comment.author}}/{{comment.permlink}}');">
      <h5 class="card-title mt-2 text-center text-capitalize">{{comment.title}}</h5>
      <img src="..."  alt="Card image cap" class="card-img-top" dmx-bind:src="{{comment.json_metadata.parseJSON().image}}" /></a>
    <div class="card-body"><a href="#detailModal" data-toggle="modal" class="a-1">
      <p class="preview-text">{{comment.body.removeMD().trunc(100,true,"...")}}</p>
    </a></div>
    <center>
      <a dmx-bind:href="{{comment.url}}" type="button" class="btn btn-outline-danger mb-4 btn-launch">Launch App</a>
    </center>
    <div class="card-footer">
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
      <div class="d-inline-block">
        <div class="float-left"><a data-toggle="collapse" dmx-bind:data-target="{{&quot;#&quot;}}vote{{entry_id}}"><i class="fas fa-heart mr-1"></i></a>{{comment.active_votes.countUpVotes()}} <i class="fas fa-comment ml-2 mr-1"></i>{{comment.children}}</div>
      </div>
      <div class="float-right">{{comment.total_payout_value}} <img src="../img/hextacular.svg" alt="" width="17"/></div>
    </div>
  </div>
</div>
<div class="modal fade" id="detailModal" tabindex="11" role="dialog" aria-hidden="true">
 <div class="modal-dialog modal-full modal-dialog-centered" role="document">
   <div class="modal-content bg-dark text-white">
	<dmx-data-detail id="app_detail" dmx-bind:data="dluxGetBlog.data.result" key="entry_id">
		<div class="d-inline-block p-2">
	  <div class="float-left" ><a dmx-bind:href="/@{{comment.author}}"><img dmx-bind:src="https://token.dlux.io/getauthorpic/{{data.comment.author}}" alt="" class="rounded-circle bg-light img-fluid mr-2 cover author-img"></a></div>
        <div class="float-left">
          <p class="mt-0 mb-0 text-muted text-semibold"><a dmx-bind:href="/@{{comment.author}}" class="a-1">{{data.comment.author}}<span class="ml-2 badge badge-pill badge-light">{{data.comment.author_reputation.toString().rep()}}</span></a></p>
          <small class="text-muted">{{data.comment.created.formatDate("MMM dd, yyyy")}}</small></div>
		</div>
      <div class="float-right p-2"><span class="badge badge-secondary">{{data.comment.json_metadata.scat()}}</span><button type="button" class="close text-white ml-3" data-dismiss="modal" aria-label="Close" onclick="window.history.back();"><span aria-hidden="true">×</span></button></div>
		<hr class="mt-0">
    <a dmx-bind:href="/blog/@{{data.comment.author}}/{{data.comment.permlink}}"><h4 class="text-center p-2">{{data.comment.title}}</h4></a>
    

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
      
      <div class="float-right p-2">{{data.comment.total_payout_value}} <img src="../img/hextacular.svg" alt="" width="17"/></div>
	 

</dmx-data-detail>
		   </div>
		   </div>
	 </div>
	</div>
       <div role="tabpanel" class="tab-pane fade show" id="wallet" aria-labelledby="wallettab">
	<div class="p-3">
		   <ul class="nav nav-pills justify-content-center" role="tablist">
	    <li class="nav-item">
			<a class="nav-link active" href="#dlux" id="dluxtab" role="tab" data-toggle="tab" aria-controls="dlux" aria-expanded="true">DLUX</a> </li>
	    <li class="nav-item"> 
			<a class="nav-link" id="hivetab" role="tab" data-toggle="tab" aria-controls="hive" aria-expanded="true" href="#hive">HIVE</a> </li>
    </ul>
		   </div>
		   <div id="walletcontent" class="tab-content">
       <div role="tabpanel" class="tab-pane fade show active" id="dlux" aria-labelledby="dluxtab">
		   <div class="container">
			  <div class="jumbotron pt-4 bg-darker">
				  <h1 class="display-5">Introducing DLUX OpenToken</h1>
                  <p class="lead ">The smartest, most decentralized token powering games, apps, and the multiverse</p>
                  <hr class="my-4 bg-light">
				  <div class="clearfix">
				  	<div class="float-left">
			  		  <h4>DLUX Token</h4>
				  		<p class="text-white-50">The utility token for content distribution and smart contracts, also called a smart media token (SMT)</p>
				  	</div>
				  	<div class="float-right text-right">
						<h5>846.068 DLUX</h5>
						<div class="btn-group" role="group" aria-label="DLUX Actions">
  							<button type="button" class="btn btn-info mr-half"><i class="fas fa-paper-plane mr-2"></i>Send</button>
  							<div class="btn-group" role="group">
    						<button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    						<div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="btnGroupDrop1">
      							<a class="dropdown-item" href="#"><i class="fas fa-angle-double-up fa-fw mr-2"></i>Power Up</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../dex/"><i class="fas fa-store fa-fw mr-2"></i>Trade</a>
    						</div>
  							</div>
						</div>
				  	</div>
				  </div>
				  <hr class="my-4 bg-light">
				  <div class="clearfix">
				  	<div class="float-left">
			  		  <h4>DLUX Power</h4>
				  		<p class="text-white-50">Staked tokens (Powered Up) allowing for inflationary rewards on new content</p>
						<p class="text-white-50">Benefits of DLUX Power:</p>
						<ul class="text-white-50">
						<li>Increased voting power on content</li>
						<li>Increased rewards from content</li>
						<li>Increased resource credits</li>
						</ul>
				  	</div>
				  	<div class="float-right text-right">
						<h5>468.848 DLUX</h5>
						<div class="btn-group" role="group" aria-label="DLUX Actions">
  							<button type="button" class="btn btn-info mr-half"><i class="fas fa-user-friends mr-2"></i>Delegate</button>
  							<div class="btn-group" role="group">
    						<button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    						<div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="btnGroupDrop1">
      							<a class="dropdown-item" href="#"><i class="fas fa-angle-double-down fa-fw mr-2"></i>Power Down</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../dex/">Claim Account Creation Token</a>
    						</div>
  							</div>
						</div>
				  	</div>
				  </div>
				  <hr class="my-4 bg-light">
				  <div class="clearfix">
				  	<div class="float-left">
			  		  <h4>Estimated Account Value</h4>
				  		<p class="text-white-50">The approximate US Dollar value for all DLUX in your account</p>
				  	</div>
				  	<div class="float-right text-right">
						<h5>$187.50</h5>
				  	</div>
				  </div>
			   </div>
			   <div class="jumbotron pt-3 bg-darker text-white">
				   <h4 class="mb-3">Transactions</h4>
				   <div>
					   <p class="my-2">put a transaction here!<br>second line wow</p>
					   <hr class="my-3 bg-light">
				   </div>
				   <div>
					   <p class="my-2">put a transaction here!<br>second line wow</p>
					   <hr class="my-3 bg-light">
				   </div>
			   </div>
		   </div>
			   </div>
			  <div role="tabpanel" class="tab-pane fade show" id="hive" aria-labelledby="hivetab">
				  <div class="container">
			  <div class="jumbotron pt-4 bg-darker">
				  <h1 class="display-5">Hive is the new Steem</h1>
                  <p class="lead ">A proof-of-stake blockchain built for censorship resistant content and apps</p>
                  <hr class="my-4 bg-light">
				  <div class="clearfix">
				  	<div class="float-left">
			  		  <h4>HIVE Token</h4>
				  		<p class="text-white-50">The main token of the chain, often rewarded for content.</p>
				  	</div>
				  	<div class="float-right text-right">
						<h5>768.186 HIVE</h5>
						<div class="btn-group" role="group" aria-label="DLUX Actions">
  							<button type="button" class="btn btn-info mr-half"><i class="fas fa-paper-plane mr-2"></i>Send</button>
  							<div class="btn-group" role="group">
    						<button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    						<div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="btnGroupDrop1">
      							<a class="dropdown-item" href="#"><i class="fas fa-angle-double-up fa-fw mr-2"></i>Power Up</a>
								<a class="dropdown-item" href="#"><i class="fas fa-piggy-bank fa-fw mr-2"></i>Transfer to Savings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../dex/"><i class="fas fa-store fa-fw mr-2"></i>Trade</a>
    						</div>
  							</div>
						</div>
				  	</div>
				  </div>
				  <hr class="my-4 bg-light">
				  <div class="clearfix">
				  	<div class="float-left">
			  		  <h4>HIVE Power</h4>
				  		<p class="text-white-50">Staked tokens (Powered Up) allowing for inflationary rewards on new content</p>
						<p class="text-white-50">Benefits of HIVE Power:</p>
						<ul class="text-white-50">
						<li>Increased voting power on content</li>
						<li>Increased rewards from content</li>
						<li>Increased resource credits</li>
						</ul>
				  	</div>
				  	<div class="float-right text-right">
						<h5>352.153 HP</h5>
						<div class="btn-group" role="group" aria-label="DLUX Actions">
  							<button type="button" class="btn btn-info mr-half"><i class="fas fa-user-friends mr-2"></i>Delegate</button>
  							<div class="btn-group" role="group">
    						<button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    						<div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="btnGroupDrop1">
      							<a class="dropdown-item" href="#"><i class="fas fa-angle-double-down fa-fw mr-2"></i>Power Down</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../dex/">Claim Account Creation Token</a>
    						</div>
  							</div>
						</div>
				  	</div>
				  </div>
				  <hr class="my-4 bg-light">
				  <div class="clearfix">
				  	<div class="float-left">
			  		  <h4>HIVE Backed Dollar</h4>
				  		<p class="text-white-50">Also a reward for content, this token is pegged to the US Dollar</p>
				  	</div>
				  	<div class="float-right text-right">
						<h5>63.189 HBD</h5>
						<div class="btn-group" role="group" aria-label="DLUX Actions">
  							<button type="button" class="btn btn-info mr-half"><i class="fas fa-paper-plane mr-2"></i>Send</button>
  							<div class="btn-group" role="group">
    						<button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    						<div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="btnGroupDrop1">
      							<a class="dropdown-item" href="#"><i class="fas fa-random fa-fw mr-2"></i>Convert to HIVE</a>
								<a class="dropdown-item" href="#"><i class="fas fa-piggy-bank fa-fw mr-2"></i>Transfer to Savings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../dex/"><i class="fas fa-store fa-fw mr-2"></i>Trade</a>
    						</div>
  							</div>
						</div>
				  	</div>
				  </div>
				  <hr class="my-4 bg-light">
				  <div class="clearfix">
				  	<div class="float-left">
			  		  <h4>HIVE Savings</h4>
				  		<p class="text-white-50 mb-0">A 3 day waiting period is imposed on withdrawl</p>
				  	</div>
				  	<div class="float-right text-right">
						<h5>86.363 HIVE</h5>
						<h5>69.841 HBD</h5>
				  	</div>
				  </div>
				  <hr class="my-4 bg-light">
				  <div class="clearfix">
				  	<div class="float-left">
			  		  <h4>Estimated Account Value</h4>
				  		<p class="text-white-50">The approximate US Dollar value for all HIVE in your account</p>
				  	</div>
				  	<div class="float-right text-right">
						<h5>$126.35</h5>
				  	</div>
				  </div>
			   </div>
			   <div class="jumbotron pt-3 bg-darker text-white">
				   <h4 class="mb-3">Transactions</h4>
				   <div>
					   <p class="my-2">put a transaction here!<br>second line wow</p>
					   <hr class="my-3 bg-light">
				   </div>
				   <div>
					   <p class="my-2">put a transaction here!<br>second line wow</p>
					   <hr class="my-3 bg-light">
				   </div>
			   </div>
		   </div>
		   </div>
			   
		   </div>
		</div>
		 

       <div role="tabpanel" class="tab-pane fade show" id="settings" aria-labelledby="settingstab">
		    <p>settings</p>
			 </div>
	</div>
	</div></div>
</main>
<?php include '../mod/footer.php';?>
<script>
	function updateVoteSubmit(id,val) {
          document.getElementById(id).innerHTML = document.getElementById(val).value + '%'; 
        }</script>
<script>checkCookie()</script>
</body></html>
