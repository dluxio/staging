
function me(usr) {
    User.hbd = { balance: usr.hive.sbd_balance }
    document.getElementById('dluxamountlab').innerHTML = `Amount (Balance <a href="#" onClick="insertBal()">${parseFloat(parseInt(usr.dlux.balance)/1000).toFixed(3)} DLUX</a>):`
    document.getElementById('dluxactions').firstElementChild.innerText = `${parseFloat(parseInt(usr.dlux.balance)/1000).toFixed(3)} DLUX`
    document.getElementById('dluxpactions').firstElementChild.innerText = `${parseFloat(parseInt(usr.dlux.poweredUp)/1000).toFixed(3)} DLUX`
    document.getElementById('hivepactions').firstElementChild.innerText = parseFloat((parseFloat(User.hstats.total_vesting_fund_steem) * parseFloat(User.hive.vesting_shares)) / parseFloat(User.hstats.total_vesting_shares)).toFixed(3) + ' HP'
    document.getElementById('hiveactions').firstElementChild.innerText = usr.hive.balance
    document.getElementById('hbdactions').firstElementChild.innerText = usr.hive.sbd_balance
    document.getElementById('savingsactions').firstElementChild.innerText = usr.hive.savings_sbd_balance
    document.getElementById('hiveval').firstElementChild.innerText = `$${parseFloat((parseFloat(( parseFloat(User.hstats.total_vesting_fund_steem) * parseFloat(User.hive.vesting_shares)) / parseFloat(User.hstats.total_vesting_shares)) + parseFloat(usr.hive.balance))*User.price).toFixed(2)}`
    document.getElementById('dluxval').firstElementChild.innerText = `$${parseFloat(((parseInt(usr.dlux.balance) + parseInt(usr.dlux.poweredUp))/1000)*parseFloat(usr.dex.markets.hive.tick)*parseFloat(usr.price)).toFixed(2)}`
    document.getElementById('buylink').addEventListener("click", function() {
      User.opts.type = 'buy'
      dexmodal("hive", "buy");
    })
    document.getElementById('buyDluxTitle').innerText = 'Buy With:'
    document.getElementById('selllink').addEventListener("click", function() {
      User.opts.type = 'sell'
      dexmodal("hive", "sell");
    })

    fetch("https://anyx.io", {
            body: "{\"jsonrpc\":\"2.0\", \"method\":\"condenser_api.get_account_history\", \"params\":[\"disregardfiat\", -1, 100], \"id\":1}",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            method: "POST"
        })
        .then(r => {
            console.log(r)
            r.json() 
        })
        .then(result => {
            console.log('hstory', result)
        })
        .catch(e=>{console.log(e)})
}

function dexmodal(pair, type) {
    User.pair = pair
    User.opts.type = type
    if (User.opts.type === 'buy') {
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
    for (a in User.dex.queue) {
        if (User.dex.queue[a] == user) {
            delete User.dex.queue[a]
            break
        }
    }
    if (!User.opts.to) {
        User.opts.to = User.dex.queue[0] ? User.dex.queue[0] : User.dex.queue[2]
    }
    if (!User.opts.agent) {
        User.opts.agent = User.dex.queue[1] ? User.dex.queue[1] : User.dex.queue[2]
    }
    document.getElementById('escrowAgent').innerText = User.opts.agent
    document.getElementById('custodialAgent').innerText = User.opts.to
    for (i in User.dex.queue) {
        if (User.opts.agent !== User.dex.queue[i]) {
            var node = document.createElement('li')
            node.innerHTML = `<a href="#">${User.dex.queue[i]} - Fee: .1DLUX - Trust: 9 - Liquid: 1000000000</a>`
            cAgentNode.appendChild(node)
        }
    }
    for (i in User.dex.queue) {
        if (User.opts.to !== User.dex.queue[i]) {
            var node = document.createElement('li')
            node.innerHTML = `<a href="#">${User.dex.queue[i]} - Fee: .1DLUX - Trust: 9 - Liquid: 1000000000</a>`
            eAgentNode.appendChild(node)
        }
    }
}
