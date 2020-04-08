<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
  <link href="../css/dex.css" rel="stylesheet" type="text/css">
  <link href="../css/dlux.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="https://kit.fontawesome.com/0f693ffc58.js" crossorigin="anonymous"></script>
  <title>dlux DEX</title>
</head>
<body id="top">
<div class="container" style="padding-top: 70px">
	
  <?php include '../modules/nav.php';?>
 
	<div class="alert alert-danger alert-dismissible text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <a href="#" class="alert-link">The dlux DEX is still under construction. Have a look around and let us know what you think!
</div>
	
 

  <div class="container-fluid" style="padding: 0">
	  <ul id="pagenav" class="nav nav-pills justify-content-center" role="tablist">
		  <li class="nav-item"> <a class="nav-link" href="#info" id="infotab" role="tab" data-toggle="tab" aria-controls="info" aria-expanded="true">INFO</a></li>
	    <li class="nav-item"> <a class="nav-link active" href="#steem" id="steemtab" role="tab" data-toggle="tab" aria-controls="steem" aria-expanded="true">STEEM</a></li>
	    <li class="nav-item"> <a class="nav-link" href="#sbd" role="tab" id="sbdtab" data-toggle="tab" aria-controls="sbd">SBD</a></li>
		  <li class="nav-item"> <a class="nav-link" href="#feed" role="tab" id="feedtab" data-toggle="tab" aria-controls="feed">FEED</a></li>
	  </ul>
	  <!-- Content Panel -->
	  <div id="pagecontent" class="tab-content">
		 <div role="tabpanel" class="tab-pane fade show" id="info" aria-labelledby="infotab">
		   <div class="container-fluid" style="padding:0"> 
				  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey; margin-bottom:20px;">
				    <ol class="carousel-indicators">
				      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
				      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
				      <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
			        </ol>
				    <div class="carousel-inner" role="listbox">
				      <div class="carousel-item active"> <img class="d-block mx-auto" src="images/token.jpg" alt="First slide">
				        <div class="carousel-caption">
				          <h5>DLUX ICO</h5>
				          <p>Buy DLUX token now!</p>
			            </div>
			          </div>
				      <div class="carousel-item"> <img class="d-block mx-auto" src="images/builder.jpg" alt="Second slide">
				        <div class="carousel-caption">
				          <h5>XR Builder Beta</h5>
				          <p>Build AR &amp; VR experiences with ZERO CODE!</p>
			            </div>
			          </div>
				      <div class="carousel-item"> <img class="d-block mx-auto" src="images/community.jpg" alt="Third slide">
				        <div class="carousel-caption">
				          <h5>Join our Community</h5>
				          <p>Chat on Discord, follow @dlux-io, &amp; watch tutorials</p>
			            </div>
			          </div>
			        </div>
				    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span></a></div>
                  
                  <div class="row">
                    <div class="col-xl-4">
                      <div class="card" style="margin-bottom:20px;"> <img class="card-img-top" src="images/metaverse.jpg" alt="Card image cap">
                        <div class="card-body" style="background:#1B1717">
                          <h5 class="card-title">New Internet</h5>
                          <p class="card-text">dlux decentralizes the spatial web to create the ultimate social app publishing platform</p>
                          <a href="https://dlux.io/vr" class="btn btn-primary" target="_blank">Explore the Metaverse</a></div>
                      </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="card" style="margin-bottom:20px;"> <img class="card-img-top" src="images/builder-2.jpg" alt="Card image cap">
                        <div class="card-body" style="background:#1B1717">
                          <h5 class="card-title">XR Builder</h5>
                          <p class="card-text">Build AR and VR apps right in your web browser, without downloading anything</p>
                          <a href="https://dlux-vr.glitch.me/build.html" class="btn btn-danger" target="_blank">Build the Metaverse</a></div>
                      </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="card" style="margin-bottom:20px;"> <img class="card-img-top" src="images/dlux-token.jpg" alt="Card image cap">
                        <div class="card-body" style="background:#1B1717">
                          <h5 class="card-title">DLUX Token</h5>
                          <p class="card-text">Peer-to-peer trading, in-game transactions, and smart contracts on the dlux DAO</p>
                          <a class="btn btn-warning" href="#top">Own the Metaverse</a></div>
                      </div>
                    </div>
                  </div>
                 <div class="jumbotron" style="background-color:#0F1F28; margin-bottom:20px;">
                    <h1 class="display-4">decentralized limitless user experiences</h1>
                    <p class="lead">dlux is an open-source, fully decentralized asset platform on the STEEM blockchain.</p>
                    <hr class="my-4" style="background-color:#fff">
                    <p>Make and monetize anything - dlux empowers the spatial web with tokenization and crypto rewards. Join us in the metaverse today!</p>
                    <div class="btn-toolbar" role="toolbar">
						<a class="btn btn-outline-light mr-2" href="https://docs.google.com/presentation/d/1L0ZhqUsetBB2jI8fcHqUIOt7ddDKFtn4VV_C2-Uogcw" role="button" target="_blank">Slide Deck</a>
						<a class="btn btn-outline-light mr-2" href="https://docs.google.com/document/d/1_jHIJsX0BRa5ujX0s-CQg3UoQC2CBW4wooP2lSSh3n0" role="button" target="_blank">White Paper</a>
                        <a class="btn btn-outline-light mr-2" href="https://discord.gg/Beeb38j" target="_blank">Discord Server</a>
                      </div>
                    </div>
</div>
  </div>
	    <div role="tabpanel" class="tab-pane fade show active" id="steem" aria-labelledby="steemtab">
			<div class="container-fluid" style="padding:0">
	      <div class="row">
	    <div class="col-lg-8">
		<div class="price-info">
		<canvas id="historicpricesteem" height="250" class="price-chart"></canvas>
		<div class="d-flex justify-content-center">
		  <div class="btn-group btn-group-toggle set-timescale" data-toggle="buttons">
  				<label class="btn btn-primary active">
    				<input type="radio" name="options" id="hoursteem" autocomplete="off" checked> 1H
  				</label>
  				<label class="btn btn-primary">
    				<input type="radio" name="options" id="daysteem" autocomplete="off"> 1D
  				</label>
  				<label class="btn btn-primary">
    			<input type="radio" name="options" id="weeksteem" autocomplete="off"> 1W
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="monthsteem" autocomplete="off"> 1M
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="yearsteem" autocomplete="off"> 1Y
  				</label>
			</div>
			</div>
		<div class="d-flex justify-content-center">
			<div class="text-center market-info-item">
				<h3><span>$125.1K</span></h3>
				<div>
					<label>Market Cap</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>6M DLUX</span></h3>
				<div>
					<label>Supply</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>$1.3K</span></h3>
				<div>
					<label>Volume</label>
				</div>
			</div>
		  </div>
			<div class="balance"><h4>BAL: 62382 DLUX</h4></div>
		  </div>
			
	</div>
	  <div class="col-lg-4">
		  <div>
			  <div class="widget">
			<ul id="orderwidget" class="nav nav-pills justify-content-center" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" href="#buysteem" id="buytabsteem" role="tab" data-toggle="tab" aria-controls="buysteem" aria-expanded="true">Buy DLUX</a></li>
			  <li class="nav-item"> <a class="nav-link" href="#sellsteem" role="tab" id="selltabsteem" data-toggle="tab" aria-controls="sellsteem">Sell DLUX</a></li>
			</ul>
			  <!-- Content Panel -->
		    <div id="orderformsteem" class="tab-content">
			    <div role="tabpanel" class="tab-pane fade show active" id="buysteem" aria-labelledby="buytabsteem">
			      <form>
	    	<div class="form-group" style="padding-top: 10px">
	    	  <label for="inputbuypricesteem">Bid Price</label>
	    	  <input type="number" class="form-control" id="buypricesteem" placeholder="Amount in STEEM">
			<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Lowest Ask</button>
			</div>
        	</div>
		    <div class="form-group">
		      <label for="inputbuyqtysteem">Qty.</label>
		      <input type="number" class="form-control" id="buyqtysteem" placeholder="How many">
				<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Max</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/2</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/4</button>
				</div>
	        </div>
			<div class="form-group">
		      <label for="inputbuytotalsteem">Total</label>
		      <input type="number" class="form-control" id="buytotalsteem" placeholder="Order total">
			  <div class="text-center text-secondary" style="padding-top: 10px">STEEM BALANCE</div>
	        </div>
			<div class="text-center">
		    <button type="submit" class="btn btn-outline-success">Place Buy Order</button>
			</div>
	      </form>
		        </div>
			    <div role="tabpanel" class="tab-pane fade" id="sellsteem" aria-labelledby="selltabsteem">
			      <form>
	    <div class="form-group" style="padding-top: 10px">
	      <label for="inputsellpricesteem">Ask Price</label>
	      <input type="number" class="form-control" id="sellpricesteem" placeholder="Amount in STEEM">
			<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Highest Bid</button>
			</div>
        </div>
		    <div class="form-group">
		      <label for="inputsellqtysteem">Qty.</label>
		      <input type="number" class="form-control" id="sellqtysteem" placeholder="How many">
			  <div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Max</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/2</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/4</button>
				</div>
	        </div>
					  <div class="form-group">
		      <label for="inputselltotalsteem">Total</label>
		      <input type="number" class="form-control" id="selltotalsteem" placeholder="Order total">
			  <div class="text-center text-secondary" style="padding-top: 10px">STEEM BALANCE</div>
	        </div>
		    <div class="text-center">
		    <button type="submit" class="btn btn-outline-danger">Place Sell Order</button>
			</div>
	      </form>
		        </div>
			   
		    </div>
		  </div>
			
        </div>  
  </div>
	</div>
	<div class="row">
	<div class="col-lg-8">
	<canvas id="marketorderssteem" height="125" class="orderbook-chart"></canvas>
	<div class="container orderbook-table">
	  <div class="row text-center">
		  <div class="col-lg-6">
			  <h5 style="padding-top: 10px">BUY ORDERS</h5>
		  <table width="100%">
  <tbody>
    <tr>
      <th scope="col">TOTAL</th>
      <th scope="col">QTY</th>
      <th scope="col">BID</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <td>34513</td>
      <td>34513</td>
      <td>.22</td>
      <td><button class="btn btn-outline-danger btn-sm" type="submit">Sell</button></td>
    </tr>
    <tr>
      <td>6826</td>
      <td>6826</td>
      <td>.21</td>
      <td><button class="btn btn-outline-danger btn-sm" type="submit">Sell</button></td>
    </tr>
  </tbody>
</table>
		  </div>
		  <div class="col-lg-6">
			  <h5 style="padding-top: 10px">SELL ORDERS</h5>
		    <table width="100%">
  <tbody>
    <tr>
      <th scope="col">TOTAL</th>
      <th scope="col">QTY</th>
      <th scope="col">ASK</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <td>7657</td>
      <td>7657 </td>
      <td>.23</td>
      <td><button class="btn btn-outline-success btn-sm" type="submit">Buy</button></td>
    </tr>
    <tr>
      <td>5632</td>
      <td>5632 </td>
      <td>.24</td>
      <td><button class="btn btn-outline-success btn-sm" type="submit">Buy</button></td>
    </tr>
  </tbody>
</table>
		  </div>
		</div>
		  </div>
	    </div>
		  <div class="col-lg-4 text-center">
			  <h5 style="padding-top: 40px">TRADE HISTORY</h5>
			  <div class="history">
			  
		    <table width="100%" class="history-table">
  <tbody>
    <tr>
      <th scope="col">DATE</th>
      <th scope="col">PRICE</th>
      <th scope="col">QTY</th>
      <th scope="col">TOTAL</th>
    </tr>
    <tr>
      <td>1 Hour Ago</td>
      <td>.225</td>
      <td>332</td>
      <td>332</td>
    </tr>
    <tr>
      <td>2 Hours Ago</td>
      <td>.224</td>
      <td>998</td>
      <td>998</td>
    </tr>
  </tbody>
</table>
	</div>
	</div>
	  </div>
</div>
		  </div>
	    <div role="tabpanel" class="tab-pane fade" id="sbd" aria-labelledby="sbdtab">
			<div class="container-fluid" style="padding:0">
	      <div class="row">
	    <div class="col-lg-8">
		<div class="price-info">
		<canvas id="historicpricesbd" class="price-chart" style="height:250px !important;"></canvas>
		<div class="d-flex justify-content-center">
		  <div class="btn-group btn-group-toggle set-timescale" data-toggle="buttons">
  				<label class="btn btn-primary active">
    				<input type="radio" name="options" id="hoursbd" autocomplete="off" checked> 1H
  				</label>
  				<label class="btn btn-primary">
    				<input type="radio" name="options" id="daysbd" autocomplete="off"> 1D
  				</label>
  				<label class="btn btn-primary">
    			<input type="radio" name="options" id="weeksbd" autocomplete="off"> 1W
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="monthsbd" autocomplete="off"> 1M
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="yearsbd" autocomplete="off"> 1Y
  				</label>
			</div>
			</div>
		<div class="d-flex justify-content-center">
			<div class="text-center market-info-item">
				<h3><span>$125.1K</span></h3>
				<div>
					<label>Market Cap</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>6M DLUX</span></h3>
				<div>
					<label>Supply</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>$1.3K</span></h3>
				<div>
					<label>Volume</label>
				</div>
			</div>
		  </div>
		  <div class="balance">
		    <h4>DLUX BALANCE</h4>
		  </div>
		  </div>
			
	</div>
	  <div class="col-lg-4">
		  <div>
			  <div class="widget">
			<ul id="orderwidgetsbd" class="nav nav-pills justify-content-center" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" href="#buysbd" id="buytabsbd" role="tab" data-toggle="tab" aria-controls="buy" aria-expanded="true">Buy DLUX</a></li>
			  <li class="nav-item"> <a class="nav-link" href="#sellsbd" role="tab" id="selltabsbd" data-toggle="tab" aria-controls="sell">Sell DLUX</a></li>
			</ul>
			  <!-- Content Panel -->
		    <div id="orderformsbd" class="tab-content">
			    <div role="tabpanel" class="tab-pane fade show active" id="buysbd" aria-labelledby="buytabsbd">
			      <form>
	    	<div class="form-group" style="padding-top: 10px">
	    	  <label for="inputbuypricesbd">Bid Price</label>
	    	  <input type="number" class="form-control" id="buypricesbd" placeholder="Amount in SBD">
			<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Lowest Ask</button>
			</div>
        	</div>
		    <div class="form-group">
		      <label for="inputbuyqtysbd">Qty.</label>
		      <input type="number" class="form-control" id="buyqtysbd" placeholder="How many">
				<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Max</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/2</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/4</button>
				</div>
	        </div>
			<div class="form-group">
		      <label for="inputbuytotalsbd">Total</label>
		      <input type="number" class="form-control" id="buytotalsbd" placeholder="Order total">
			  <div class="text-center text-secondary" style="padding-top: 10px">SBD BALANCE</div>
	        </div>
			<div class="text-center">
		    <button type="submit" class="btn btn-outline-success">Place Buy Order</button>
			</div>
	      </form>
		        </div>
			    <div role="tabpanel" class="tab-pane fade" id="sellsbd" aria-labelledby="selltabsbd">
			      <form>
	    <div class="form-group" style="padding-top: 10px">
	      <label for="inputsellpricesbd">Ask Price</label>
	      <input type="number" class="form-control" id="sellpricesbd" placeholder="Amount in SBD">
			<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Highest Bid</button>
			</div>
        </div>
		    <div class="form-group">
		      <label for="inputsellqtysbd">Qty.</label>
		      <input type="number" class="form-control" id="sellqtysbd" placeholder="How many">
			  <div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Max</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/2</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/4</button>
				</div>
	        </div>
			<div class="form-group">
		      <label for="inputselltotalsbd">Total</label>
		      <input type="number" class="form-control" id="selltotalsbd" placeholder="Order total">
			  <div class="text-center text-secondary" style="padding-top: 10px">SBD BALANCE</div>
	        </div>
		    <div class="text-center">
		    <button type="submit" class="btn btn-outline-danger">Place Sell Order</button>
			</div>
	      </form>
		        </div>
			   
		    </div>
			</div>
        </div>  
  </div>
	</div>
	<div class="row">
	<div class="col-lg-8">
	<canvas id="marketorderssbd" height="125" class="orderbook-chart"></canvas>
	<div class="container orderbook-table">
	  <div class="row text-center">
		  <div class="col-lg-6">
			  <h5 style="padding-top: 10px">BUY ORDERS</h5>
		  <table width="100%">
  <tbody>
    <tr>
      <th scope="col">TOTAL</th>
      <th scope="col">QTY</th>
      <th scope="col">BID</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <td>34513</td>
      <td>34513</td>
      <td>.22</td>
      <td><button class="btn btn-outline-danger btn-sm" type="submit">Sell</button></td>
    </tr>
    <tr>
      <td>6826</td>
      <td>6826</td>
      <td>.21</td>
      <td><button class="btn btn-outline-danger btn-sm" type="submit">Sell</button></td>
    </tr>
  </tbody>
</table>
		  </div>
		  <div class="col-lg-6">
			  <h5 style="padding-top: 10px">SELL ORDERS</h5>
		    <table width="100%">
  <tbody>
    <tr>
      <th scope="col">TOTAL</th>
      <th scope="col">QTY</th>
      <th scope="col">ASK</th>
      <th scope="col">&nbsp;</th>
    </tr>
    <tr>
      <td>7657</td>
      <td>7657 </td>
      <td>.23</td>
      <td><button class="btn btn-outline-success btn-sm" type="submit">Buy</button></td>
    </tr>
    <tr>
      <td>5632</td>
      <td>5632 </td>
      <td>.24</td>
      <td><button class="btn btn-outline-success btn-sm" type="submit">Buy</button></td>
    </tr>
  </tbody>
</table>
		  </div>
		</div>
		  </div>
	    </div>
		  <div class="col-lg-4 text-center">
			  <h5 style="padding-top: 40px">TRADE HISTORY</h5>
			  <div class="history">
			  
		    <table width="100%" class="history-table">
  <tbody>
    <tr>
      <th scope="col">DATE</th>
      <th scope="col">PRICE</th>
      <th scope="col">QTY</th>
      <th scope="col">TOTAL</th>
    </tr>
    <tr>
      <td>1 Hour Ago</td>
      <td>.225</td>
      <td>332</td>
      <td>332</td>
    </tr>
    <tr>
      <td>2 Hours Ago</td>
      <td>.224</td>
      <td>998</td>
      <td>998</td>
    </tr>
  </tbody>
</table>
	</div>
	</div>
	  </div>
        </div>
	    
    </div>
		   <div role="tabpanel" class="tab-pane fade" id="feed" aria-labelledby="feed">
			<div class="container-fluid" style="padding:0">
		  <div class="col-lg-12 text-center" style="padding: 0">
			  <h5 style="padding-top: 40px">DLUX TRANSACTION FEED</h5>
			  <div class="feed">
			  
		    <table width="100%" class="feed-table">
  <tbody>
    <tr>
      <th scope="col">HASH</th>
      <th scope="col">BLOCK</th>
      <th scope="col">USER</th>
      <th scope="col">ACTION</th>
    </tr>
    <tr>
      <td>f4ef62eaa6dd5498e3b593497fd1eb76b2773d19</td>
      <td>32100072</td>
      <td>@disregardfiat</td>
      <td>report has been processed</td>
    </tr>
    <tr>
      <td>370534d95d25a223eee8080c12487fc32c7dc502</td>
      <td>32086802</td>
      <td>@chrismgiles</td>
      <td>bought 45.454 DLUX with 0.010 STEEM</td>
    </tr>
  </tbody>
</table>
	</div>
	</div>
			   </div>
			   </div>
	  </div>
</div>
	</div>
	 <?php include '../modules/footer.php';?>
	
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-4.4.1.js"></script>
<script>
	
    var historicPriceSteem = document.getElementById('historicpricesteem').getContext('2d');
	
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Helvetica';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#FFF';

    var priceChartSteem = new Chart(historicPriceSteem, {
		
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
        datasets:[{
          label:'Price',
          data:[
            117594,
            181045,
            153060,
            106519,
            105162,
            95072
          ],
		  pointRadius: 0,
          borderWidth:3,
          borderColor:'rgba(75, 0, 255, .5',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
		responsive: true,
        title:{
          display:true,
          text:'DLUX: 0.22 STEEM',
          fontSize:40,
		  fontColor:'#000',
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:-10,
            right:0,
            bottom:-10,
            top:0
          }
        },
        tooltips:{
          enabled:true
        },
		scales: {
			xAxes: [{
				ticks: {
                    display: false //removes the label
                },
				gridLines: {
					display: false
				}
			}],
			yAxes: [{
				ticks: {
                    display: false //removes the label
                },
				gridLines: {
					display: false
				}
			}]
		}
      }
    });

    var marketOrdersSteem = document.getElementById('marketorderssteem').getContext('2d');
	var gradientGrnSteem = marketOrdersSteem.createLinearGradient(0, 0, 0, 400);
	gradientGrnSteem.addColorStop(0, 'rgba(90, 216, 154, 1)');   
	gradientGrnSteem.addColorStop(1, 'rgba(90, 216, 154, 0)');
	
	var gradientRedSteem = marketOrdersSteem.createLinearGradient(0, 0, 0, 400);
	gradientRedSteem.addColorStop(0, 'rgba(226, 94, 94, 1)');   
	gradientRedSteem.addColorStop(1, 'rgba(226, 94, 94, 0)');
	
    var buySellChartSteem = new Chart(marketOrdersSteem, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
        datasets:[{
          label:'Price',
          data:[
            22.34,
            22.33,
            22.32,
            22.33,
            22.35,
            22.36
          ],
          backgroundColor:[gradientGrnSteem, gradientGrnSteem, gradientGrnSteem, gradientRedSteem, gradientRedSteem, gradientRedSteem],
		  hoverBackgroundColor:[gradientGrnSteem, gradientGrnSteem, gradientGrnSteem, gradientRedSteem, gradientRedSteem, gradientRedSteem],
          hoverBorderWidth:2,
          hoverBorderColor:'#FFCE00'
        }]
      },
      options:{	
		responsive: true,
        title:{
          display:true,
          text:'DLUX-STEEM ORDER BOOK',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
          fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        },
		scales: {
			xAxes: [{
				ticks: {
                    display: false //removes the label
                },
				gridLines: {
					display: false
				}
			}],
			yAxes: [{
				ticks: {
                    display: false, //removes the label
					beginAtZero:false
                },
				gridLines: {
					display: false
				}
			}]
		}
      
      }
    });
	var historicPriceSbd = document.getElementById('historicpricesbd').getContext('2d');
    
	var priceChartSbd = new Chart(historicPriceSbd, {
		
      type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
        datasets:[{
          label:'Price',
          data:[
            117594,
            181045,
            153060,
            106519,
            105162,
            95072
          ],
		  pointRadius: 0,
          borderWidth:3,
          borderColor:'rgba(75, 0, 255, .5',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
		responsive: true,
        title:{
          display:true,
          text:'DLUX: 0.11 SBD',
          fontSize:40,
		  fontColor:'#000',
        },
        legend:{
          display:false,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:-10,
            right:0,
            bottom:-10,
            top:0
          }
        },
        tooltips:{
          enabled:true
        },
		scales: {
			xAxes: [{
				ticks: {
                    display: false //removes the label
                },
				gridLines: {
					display: false
				}
			}],
			yAxes: [{
				ticks: {
                    display: false //removes the label
                },
				gridLines: {
					display: false
				}
			}]
		}
      }
    });

    var marketOrdersSbd = document.getElementById('marketorderssbd').getContext('2d');
	
	var gradientGrnSbd = marketOrdersSbd.createLinearGradient(0, 0, 0, 400);
	gradientGrnSbd.addColorStop(0, 'rgba(90, 216, 154, 1)');   
	gradientGrnSbd.addColorStop(1, 'rgba(90, 216, 154, 0)');
	
	var gradientRedSbd = marketOrdersSbd.createLinearGradient(0, 0, 0, 400);
	gradientRedSbd.addColorStop(0, 'rgba(226, 94, 94, 1)');   
	gradientRedSbd.addColorStop(1, 'rgba(226, 94, 94, 0)');
    var buySellChartSbd = new Chart(marketOrdersSbd, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
        datasets:[{
          label:'Price',
          data:[
            22.34,
            22.33,
            22.32,
            22.33,
            22.35,
            22.36
          ],
          backgroundColor:[gradientGrnSbd, gradientGrnSbd, gradientGrnSbd, gradientRedSbd, gradientRedSbd, gradientRedSbd],
		  hoverBackgroundColor:[gradientGrnSbd, gradientGrnSbd, gradientGrnSbd, gradientRedSbd, gradientRedSbd, gradientRedSbd],
          hoverBorderWidth:2,
          hoverBorderColor:'#FFCE00'
        }]
      },
      options:{
		responsive: true,
        title:{
          display:true,
          text:'DLUX-SBD ORDER BOOK',
          fontSize:25
        },
        legend:{
          display:false,
          position:'right',
          labels:{
          fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        },
		scales: {
			xAxes: [{
				ticks: {
                    display: false //removes the label
                },
				gridLines: {
					display: false
				}
			}],
			yAxes: [{
				ticks: {
                    display: false, //removes the label
					beginAtZero:false
                },
				gridLines: {
					display: false
				}
			}]
		}
      
      }
    });
  </script>
</body>
</html>
