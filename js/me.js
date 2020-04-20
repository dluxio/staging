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

function dexmodal(pair,type){
	User.pair = pair
	
	if(type == 'buy'){
		document.getElementById('buyDluxTitle').innerText = 'Buy With:'
		document.getElementById('menutitle').innerText = 'New Buy Order'
	} else {
		document.getElementById('buyDluxTitle').innerText = 'Sell for:'
		document.getElementById('menutitle').innerText = 'New Sell Order'
	}
		document.getElementById('menupairlab').innerHTML = `Order Total (<a href="#" onClick="insertBal()">Balance: ${User[pair].balance}</a>):`
		document.getElementById('menupair').max = parseFloat(User[pair].balance)
		document.getElementById('menupricelab').innerHTML = `Desired Price Each (<a href="#" onClick="insertBal()">Market Price: ${parseFloat(User.dex.markets[pair].tick).toFixed(4)} ${pair.toUpperCase()}</a>):`														    
		let eAgentNode = document.getElementById('escrowAgentUl'),
		    cAgentNode = document.getElementById('custodialAgentUl')
		    lis = eAgentNode.getElementsByTagName('li')
		    lic = cAgentNode.getElementsByTagName('li')
		while (eAgentNode.getElementsByTagName('li')[0]) {
			eAgentNode.removeChild(eAgentNode.getElementsByTagName('li')[0]);
		}
		while (cAgentNode.getElementsByTagName('li')[0]) {
			cAgentNode.removeChild(cAgentNode.getElementsByTagName('li')[0]);
		}
		for(i in User.dex.queue){
			if(User.opts.to !== User.dex.queue[i]){
				if(document.getElementById('escrowAgent').innerText == 'Escrow Agent'){document.getElementById('escrowAgent').innerText == User.dex.queue[i]}
				var node = document.createElement('li')
				node.innerHTML = `<a href="#">${User.dex.queue[i]} - Fee: .1DLUX - Trust: 9 - Liquid: 1000000000</a>`
				eAgentNode.appendChild(node) 
			}
		}
		for(i in User.dex.queue){
			if(User.opts.agent !== User.dex.queue[i]){
				if(document.getElementById('custodialAgent').innerText == 'Custodial Agent' && document.getElementById('escrowAgent').innerText != User.dex.queue[i]){document.getElementById('custodialAgent').innerText == User.dex.queue[i]}
				var node = document.createElement('li')
				node.innerHTML = `<a href="#">${User.dex.queue[i]} - Fee: .1DLUX - Trust: 9 - Liquid: 1000000000</a>`
				cAgentNode.appendChild(node) 
			}
		}
}
