function me(usr){
  User.hbd = {balance: usr.hive.sbd_balance}				      
	document.getElementById('dluxamountlab').innerHTML = `Amount (Balance <a href="#" onClick="insertBal()">${parseFloat(parseInt(usr.dlux.balance)/1000).toFixed(3)} DLUX</a>):`
	document.getElementById('dluxactions').firstElementChild.innerText = `${parseFloat(parseInt(usr.dlux.balance)/1000).toFixed(3)} DLUX`
	document.getElementById('dluxpactions').firstElementChild.innerText = `${parseFloat(parseInt(usr.dlux.poweredUp)/1000).toFixed(3)} DLUX`
	document.getElementById('hivepactions').firstElementChild.innerText = parseFloat(( parseFloat(User.hstats.total_vesting_fund_steem) * parseFloat(User.hive.vesting_shares)) / parseFloat(User.hstats.total_vesting_shares)).toFixed(3) + ' HP'
	document.getElementById('hiveactions').firstElementChild.innerText = usr.hive.balance
	document.getElementById('hbdactions').firstElementChild.innerText = usr.hive.sbd_balance
	document.getElementById('savingsactions').firstElementChild.innerText = usr.hive.savings_sbd_balance
	document.getElementById('hiveval').firstElementChild.innerText = `$${parseFloat((parseFloat(( parseFloat(User.hstats.total_vesting_fund_steem) * parseFloat(User.hive.vesting_shares)) / parseFloat(User.hstats.total_vesting_shares)) + parseFloat(usr.hive.balance))*User.price).toFixed(2)}`
	document.getElementById('dluxval').firstElementChild.innerText = `$${parseFloat(((parseInt(usr.dlux.balance) + parseInt(usr.dlux.poweredUp))/1000)*parseFloat(usr.dex.markets.hive.tick)*parseFloat(usr.price)).toFixed(2)}`
	document.getElementById('buylink').addEventListener("click", function(){
							    
		document.getElementById('buyDluxTitle').innerText = 'Buy With:'
		dexmodal("hive", "buy")});
	document.getElementById('selllink').addEventListener("click", function(){document.getElementById('buyDluxTitle').innerText = 'Sell for:';dexmodal("hive", "sell")});

}
