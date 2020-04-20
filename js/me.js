function me(usr) {
    usr.hbd = { balance: usr.hive.sbd_balance }
    User.hbd = { balance: usr.hive.sbd_balance }
    document.getElementById('hiveactions').firstElementChild.innerText = usr.hive.balance
    document.getElementById('hbdactions').firstElementChild.innerText = usr.hive.sbd_balance
    document.getElementById('savingsactions').firstElementChild.innerText = User.hive.savings_sbd_balance

    document.getElementById('powerdluxamountlab').innerHTML = `Amount (Balance <a href="#" onClick="insertBal(parseFloat(parseInt(User.dlux.balance)/1000),'powerupdluxamount')">${parseFloat(parseInt(usr.dlux.balance)/1000).toFixed(3)} DLUX</a>):`
    document.getElementById('dluxactions').firstElementChild.innerText = `${parseFloat(parseInt(usr.dlux.balance)/1000).toFixed(3)} DLUX`
    console.log('here?4')
    document.getElementById('dluxpactions').firstElementChild.innerText = `${parseFloat(parseInt(usr.dlux.poweredUp)/1000).toFixed(3)} DLUX`
    console.log('here?5')
    document.getElementById('hivepactions').firstElementChild.innerText = parseFloat((parseFloat(usr.hstats.total_vesting_fund_steem) * parseFloat(usr.hive.vesting_shares)) / parseFloat(usr.hstats.total_vesting_shares)).toFixed(3) + ' HP'
    console.log('here?6')
    document.getElementById('hiveval').firstElementChild.innerText = `$${parseFloat((parseFloat(( parseFloat(usr.hstats.total_vesting_fund_steem) * parseFloat(usr.hive.vesting_shares)) / parseFloat(usr.hstats.total_vesting_shares)) + parseFloat(usr.hive.balance))*usr.price).toFixed(2)}`
    console.log('here?7')
    document.getElementById('dluxval').firstElementChild.innerText = `$${parseFloat(((parseInt(usr.dlux.balance) + parseInt(usr.dlux.poweredUp))/1000)*parseFloat(usr.dex.markets.hive.tick)*parseFloat(usr.price)).toFixed(2)}`
    console.log('here?8')
    document.getElementById('buylink').addEventListener("click", function() {
        User.opts.type = 'buy'
        dexmodal("hive", "buy");
    })
    document.getElementById('buyDluxTitle').innerText = 'Buy With:'
    document.getElementById('selllink').addEventListener("click", function() {
        User.opts.type = 'sell'
        dexmodal("hive", "sell");
    })
    document.getElementById('dluxpowerdownModalButton').addEventListener("click", function() {
        document.getElementById('powerdowndluxammount').innerHTML = `Amount (Balance <a href="#" onClick="insertBal(parseFloat(User.dlux.poweredUp/1000),'powerupdluxamount')">${parseFloat(parseInt(User.dlux.poweredUp)/1000).toFixed(3)} DLUX</a>):`
    })
    document.getElementById('senddluxmodalbutton').addEventListener("click", function() {
        document.getElementById('senddluxammount').innerHTML = `Amount (Balance <a href="#" onClick="insertBal(parseFloat(User.dlux.balance/1000),'senddluxamount')">${parseFloat(parseInt(User.dlux.balanace)/1000).toFixed(3)} DLUX</a>):`
    })

    fetch('https://token.dlux.io/feed')
        .then(r => {
            return r.json()
        })
        .then(result => {
            console.log('hstory', result)
            let node = document.createElement('h4')
            node.innerText = 'Transactions:'
            node.class = "mb-3"
            document.getElementById('dluxtxs').appendChild(node)
            for (i in result.feed) {
                if (result.feed[i].match(user)) {
                    let txnode = document.createElement('div')
                    txnode.innerHTML = `
					   <p class="my-2">${i}<br>${result.feed[i]}</p>
					   <hr class="my-3 bg-light">`
                    document.getElementById('dluxtxs').appendChild(txnode)
                }
            }
        })
        .catch(e => { console.log(e) })
}