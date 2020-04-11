<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DLUX</title>
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
  <link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
  
  <!-- Bootstrap -->

  
  <script type="text/javascript" src="../dmxAppConnect/dmxAppConnect.js"></script>
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script> <script type="text/javascript" src="../dmxAppConnect/dmxMoment.js"></script>
  <script type="text/javascript" src="../dmxAppConnect/dmxFormatter.js"></script>
  <script type="text/javascript" src="https://kit.fontawesome.com/0f693ffc58.js" crossorigin="anonymous"></script>
  <script src="../js/session.js"></script>

</head>

<body id="index" is="dmx-app">
<?php include '../modules/nav.php';?>
<dmx-api-datasource id="dluxGetBlog" is="dmx-fetch" url="https://token.dlux.io/getwrap?" dmx-param:method="'condenser_api.get_blog'" dmx-param:params="'[%22robotolux%22,0,10]'"></dmx-api-datasource>
<div class="modal fade" id="detailModal" tabindex="11" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add a connection:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
      <div class="modal-body p-4" id="CMresult">
        <hr>
        <a href="#">
          <h4><strong>Steem Wallet</strong></h4>
          <p>Sign in with your Steem account for access to DLUX and STEEM</p>
        </a>
        <hr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">DONE</button>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid padme-t70">
  <div class="row mt-3">
    <div class="col-md-8 text-white text-center">
      <div class="display-4">Virtual Reality <i class="fas fa-vr-cardboard"></i></div>
      <p class="lead">Responsive WebVR across mobile, desktop, and headset.<br>
        <a href="https://dlux.io/vr" class="lead" target="_blank">Enter Metaverse (Beta) <i class="fas fa-external-link-alt"></i></a></p>
    </div>
    <div class="col-md-4 text-center m-auto"> <a class="btn btn-primary btn-lg m-1 btn-1" href="#" role="button">Learn<i class="fas fa-shapes ml-2"></i></a><a class="btn btn-primary btn-lg m-1 btn-1" href="../create/" role="button">Create<i class="fas fa-plus-circle ml-2"></i></a></div>
  </div>
  <div class="card-columns" id="blogResult" is="dmx-repeat" dmx-bind:repeat="dluxGetBlog.data.result">
    <div class="card text-white bg-dark mt-2 mb-3">
      <div class="card-header">
        <div class="d-inline-block">
          <div class="float-left" ><a dmx-bind:href="https://dlux.io/dlux/@{{comment.author}}"><img dmx-bind:src="https://token.dlux.io/getauthorpic/{{comment.author}}" alt="" class="rounded-circle bg-light img-fluid mr-2 cover author-img"></a></div>
          <div class="float-left">
            <p class="mt-0 mb-0 text-muted text-semibold"><a dmx-bind:href="https://dlux.io/dlux/@{{comment.author}}" class="a-1">{{comment.author}}<span class="ml-2 badge badge-pill badge-light">{{comment.author_reputation.toString().rep()}}</span></a></p>
            <small class="text-muted">{{comment.created.formatDate("MMM dd, yyyy")}}</small></div>
        </div>
        <div class="float-right"><span class="badge badge-secondary">{{comment.json_metadata.scat()}}</span></div>
      </div>
      <a href="#detailModal" data-toggle="modal" class="a-1">
        <h5 class="card-title mt-2 text-center text-capitalize">{{comment.title}}</h5>
        <img src="..."  alt="Card image cap" class="card-img-top" dmx-bind:src="{{comment.json_metadata.parseJSON().image}}" />
		   <div class="card-body">
        <p class="preview-text">{{comment.body.removeMD().trunc(100,true,"...")}}</p>
      </a></div>
      <center>
        <a dmx-bind:href="https://dlux.io{{comment.url}}" type="button" class="btn btn-outline-danger mb-4 btn-launch">Launch App</a>
      </center>
      <div class="card-footer">
        <div class="d-inline-block">
          <div class="float-left"><i class="fas fa-heart mr-1"></i>{{comment.active_votes.countUpVotes()}} <i class="fas fa-comment ml-2 mr-1"></i>{{comment.children}}<i class="fas fa-star ml-2 mr-1"></i>4.5</div>
        </div>
        <div class="float-right">{{comment.total_payout_value}} <img src="../img/hextacular.svg" alt="" width="17"/></div>
      </div>
    </div>
  </div>
</div>
<hr>
<?php include '../modules/footer.php';?>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-4.4.1.js"></script>
<script>checkCookie()</script>
</body>
</html>
