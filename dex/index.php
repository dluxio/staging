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
  <script src="../js/session.js"></script>
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
	    <li class="nav-item"> <a class="nav-link active" href="#hive" id="hivetab" role="tab" data-toggle="tab" aria-controls="hive" aria-expanded="true">HIVE</a></li>
	    <li class="nav-item"> <a class="nav-link" href="#hbd" role="tab" id="hbdtab" data-toggle="tab" aria-controls="hbd">HBD</a></li>
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
                    <p class="lead">dlux is an open-source, fully decentralized asset platform on the HIVE blockchain.</p>
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
	    <div role="tabpanel" class="tab-pane fade show active" id="hive" aria-labelledby="hivetab">
			<div class="container-fluid" style="padding:0">
	      <div class="row">
	    <div class="col-lg-8">
		<div class="price-info">
		<canvas id="historicpricehive" height="250" class="price-chart"></canvas>
		<div class="d-flex justify-content-center">
		  <div class="btn-group btn-group-toggle set-timescale" data-toggle="buttons">
  				<label class="btn btn-primary active">
    				<input type="radio" name="options" id="hourhive" autocomplete="off" checked> 1H
  				</label>
  				<label class="btn btn-primary">
    				<input type="radio" name="options" id="dayhive" autocomplete="off"> 1D
  				</label>
  				<label class="btn btn-primary">
    			<input type="radio" name="options" id="weekhive" autocomplete="off"> 1W
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="monthhive" autocomplete="off"> 1M
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="yearhive" autocomplete="off"> 1Y
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
			  <li class="nav-item"> <a class="nav-link active" href="#buyhive" id="buytabhive" role="tab" data-toggle="tab" aria-controls="buyhive" aria-expanded="true">Buy DLUX</a></li>
			  <li class="nav-item"> <a class="nav-link" href="#sellhive" role="tab" id="selltabhive" data-toggle="tab" aria-controls="sellhive">Sell DLUX</a></li>
			</ul>
			  <!-- Content Panel -->
		    <div id="orderformhive" class="tab-content">
			    <div role="tabpanel" class="tab-pane fade show active" id="buyhive" aria-labelledby="buytabhive">
			      <form>
	    	<div class="form-group" style="padding-top: 10px">
	    	  <label for="inputbuypricehive">Bid Price</label>
	    	  <input type="number" class="form-control" id="buypricehive" placeholder="Amount in Hive">
			<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Lowest Ask</button>
			</div>
        	</div>
		    <div class="form-group">
		      <label for="inputbuyqtyhive">Qty.</label>
		      <input type="number" class="form-control" id="buyqtyhive" placeholder="How many">
				<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Max</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/2</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/4</button>
				</div>
	        </div>
			<div class="form-group">
		      <label for="inputbuytotalhive">Total</label>
		      <input type="number" class="form-control" id="buytotalhive" placeholder="Order total">
			  <div class="text-center text-secondary" style="padding-top: 10px">HIVE BALANCE</div>
	        </div>
			<div class="text-center">
		    <button type="submit" class="btn btn-outline-success">Place Buy Order</button>
			</div>
	      </form>
		        </div>
			    <div role="tabpanel" class="tab-pane fade" id="sellhive" aria-labelledby="selltabhive">
			      <form>
	    <div class="form-group" style="padding-top: 10px">
	      <label for="inputsellpricehive">Ask Price</label>
	      <input type="number" class="form-control" id="sellpricehive" placeholder="Amount in hive">
			<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Highest Bid</button>
			</div>
        </div>
		    <div class="form-group">
		      <label for="inputsellqtyhive">Qty.</label>
		      <input type="number" class="form-control" id="sellqtyhive" placeholder="How many">
			  <div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Max</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/2</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/4</button>
				</div>
	        </div>
					  <div class="form-group">
		      <label for="inputselltotalhive">Total</label>
		      <input type="number" class="form-control" id="selltotalhive" placeholder="Order total">
			  <div class="text-center text-secondary" style="padding-top: 10px">HIVE BALANCE</div>
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
	<canvas id="marketordershive" height="125" class="orderbook-chart"></canvas>
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
	    <div role="tabpanel" class="tab-pane fade" id="hbd" aria-labelledby="hbdtab">
			<div class="container-fluid" style="padding:0">
	      <div class="row">
	    <div class="col-lg-8">
		<div class="price-info">
		<canvas id="historicpricehbd" class="price-chart" style="height:250px !important;"></canvas>
		<div class="d-flex justify-content-center">
		  <div class="btn-group btn-group-toggle set-timescale" data-toggle="buttons">
  				<label class="btn btn-primary active">
    				<input type="radio" name="options" id="hourhbd" autocomplete="off" checked> 1H
  				</label>
  				<label class="btn btn-primary">
    				<input type="radio" name="options" id="dayhbd" autocomplete="off"> 1D
  				</label>
  				<label class="btn btn-primary">
    			<input type="radio" name="options" id="weekhbd" autocomplete="off"> 1W
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="monthhbd" autocomplete="off"> 1M
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="yearhbd" autocomplete="off"> 1Y
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
			<ul id="orderwidgethbd" class="nav nav-pills justify-content-center" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" href="#buyhbd" id="buytabhbd" role="tab" data-toggle="tab" aria-controls="buy" aria-expanded="true">Buy DLUX</a></li>
			  <li class="nav-item"> <a class="nav-link" href="#sellhbd" role="tab" id="selltabhbd" data-toggle="tab" aria-controls="sell">Sell DLUX</a></li>
			</ul>
			  <!-- Content Panel -->
		    <div id="orderformhbd" class="tab-content">
			    <div role="tabpanel" class="tab-pane fade show active" id="buyhbd" aria-labelledby="buytabhbd">
			      <form>
	    	<div class="form-group" style="padding-top: 10px">
	    	  <label for="inputbuypricehbd">Bid Price</label>
	    	  <input type="number" class="form-control" id="buypricehbd" placeholder="Amount in hbd">
			<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Lowest Ask</button>
			</div>
        	</div>
		    <div class="form-group">
		      <label for="inputbuyqtyhbd">Qty.</label>
		      <input type="number" class="form-control" id="buyqtyhbd" placeholder="How many">
				<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Max</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/2</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/4</button>
				</div>
	        </div>
			<div class="form-group">
		      <label for="inputbuytotalhbd">Total</label>
		      <input type="number" class="form-control" id="buytotalhbd" placeholder="Order total">
			  <div class="text-center text-secondary" style="padding-top: 10px">hbd BALANCE</div>
	        </div>
			<div class="text-center">
		    <button type="submit" class="btn btn-outline-success">Place Buy Order</button>
			</div>
	      </form>
		        </div>
			    <div role="tabpanel" class="tab-pane fade" id="sellhbd" aria-labelledby="selltabhbd">
			      <form>
	    <div class="form-group" style="padding-top: 10px">
	      <label for="inputsellpricehbd">Ask Price</label>
	      <input type="number" class="form-control" id="sellpricehbd" placeholder="Amount in hbd">
			<div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Highest Bid</button>
			</div>
        </div>
		    <div class="form-group">
		      <label for="inputsellqtyhbd">Qty.</label>
		      <input type="number" class="form-control" id="sellqtyhbd" placeholder="How many">
			  <div class="text-center" style="padding-top: 10px">
				<button type="button" class="btn btn-outline-primary btn-sm">Max</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/2</button>
				<button type="button" class="btn btn-outline-primary btn-sm">1/4</button>
				</div>
	        </div>
			<div class="form-group">
		      <label for="inputselltotalhbd">Total</label>
		      <input type="number" class="form-control" id="selltotalhbd" placeholder="Order total">
			  <div class="text-center text-secondary" style="padding-top: 10px">hbd BALANCE</div>
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
	<canvas id="marketordershbd" height="125" class="orderbook-chart"></canvas>
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
      <td>bought 45.454 DLUX with 0.010 hive</td>
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
	<script>checkCookie()</script>
<script>
	
    var historicPricehive = document.getElementById('historicpricehive').getContext('2d');
	
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Helvetica';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#FFF';

    var priceCharthive = new Chart(historicPricehive, {
		
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
          text:'DLUX: 0.22 HIVE',
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

    var marketOrdershive = document.getElementById('marketordershive').getContext('2d');
	var gradientGrnhive = marketOrdershive.createLinearGradient(0, 0, 0, 400);
	gradientGrnhive.addColorStop(0, 'rgba(90, 216, 154, 1)');   
	gradientGrnhive.addColorStop(1, 'rgba(90, 216, 154, 0)');
	
	var gradientRedhive = marketOrdershive.createLinearGradient(0, 0, 0, 400);
	gradientRedhive.addColorStop(0, 'rgba(226, 94, 94, 1)');   
	gradientRedhive.addColorStop(1, 'rgba(226, 94, 94, 0)');
	
    var buySellCharthive = new Chart(marketOrdershive, {
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
          backgroundColor:[gradientGrnhive, gradientGrnhive, gradientGrnhive, gradientRedhive, gradientRedhive, gradientRedhive],
		  hoverBackgroundColor:[gradientGrnhive, gradientGrnhive, gradientGrnhive, gradientRedhive, gradientRedhive, gradientRedhive],
          hoverBorderWidth:2,
          hoverBorderColor:'#FFCE00'
        }]
      },
      options:{	
		responsive: true,
        title:{
          display:true,
          text:'DLUX-HIVE ORDER BOOK',
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
	var historicPricehbd = document.getElementById('historicpricehbd').getContext('2d');
    
	var priceCharthbd = new Chart(historicPricehbd, {
		
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
          text:'DLUX: 0.11 HBD',
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

    var marketOrdershbd = document.getElementById('marketordershbd').getContext('2d');
	
	var gradientGrnhbd = marketOrdershbd.createLinearGradient(0, 0, 0, 400);
	gradientGrnhbd.addColorStop(0, 'rgba(90, 216, 154, 1)');   
	gradientGrnhbd.addColorStop(1, 'rgba(90, 216, 154, 0)');
	
	var gradientRedhbd = marketOrdershbd.createLinearGradient(0, 0, 0, 400);
	gradientRedhbd.addColorStop(0, 'rgba(226, 94, 94, 1)');   
	gradientRedhbd.addColorStop(1, 'rgba(226, 94, 94, 0)');
    var buySellCharthbd = new Chart(marketOrdershbd, {
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
          backgroundColor:[gradientGrnhbd, gradientGrnhbd, gradientGrnhbd, gradientRedhbd, gradientRedhbd, gradientRedhbd],
		  hoverBackgroundColor:[gradientGrnhbd, gradientGrnhbd, gradientGrnhbd, gradientRedhbd, gradientRedhbd, gradientRedhbd],
          hoverBorderWidth:2,
          hoverBorderColor:'#FFCE00'
        }]
      },
      options:{
		responsive: true,
        title:{
          display:true,
          text:'DLUX-HBD ORDER BOOK',
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
