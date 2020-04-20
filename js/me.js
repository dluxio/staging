function me(usr) {
    usr.hbd = { balance: usr.hive.sbd_balance }
    console.log('here?')
    User.hbd = { balance: usr.hive.sbd_balance }
    console.log('or here')
    document.getElementById('hiveactions').firstElementChild.innerText = usr.hive.balance
    document.getElementById('hbdactions').firstElementChild.innerText = usr.hive.sbd_balance
    document.getElementById('savingsactions').firstElementChild.innerText = Uesr.hive.savings_sbd_balance
    console.log('what')
    document.getElementById('powerdluxamountlab').innerHTML = `Amount (Balance <a href="#" onClick="insertBal(parseFloat(parseInt(User.dlux.balance)/1000),'powerupdluxamount')">${parseFloat(parseInt(usr.dlux.balance)/1000).toFixed(3)} DLUX</a>):`
    document.getElementById('powerdowndluxammount').innerHTML = `Amount (Balance <a href="#" onClick="insertBal(User.dlux.poweredUp,'powerupdluxamount')">${parseFloat(usr.dlux.poweredUp/1000).toFixed(3)} DLUX</a>):`
    document.getElementById('senddluxammount').innerHTML = `Amount (Balance <a href="#" onClick="insertBal(User.dlux.balance,'senddluxamount')">${parseFloat(usr.dlux.balanace/1000).toFixed(3)} DLUX</a>):`
    document.getElementById('dluxactions').firstElementChild.innerText = `${parseFloat(parseInt(usr.dlux.balance)/1000).toFixed(3)} DLUX`
    document.getElementById('dluxpactions').firstElementChild.innerText = `${parseFloat(parseInt(usr.dlux.poweredUp)/1000).toFixed(3)} DLUX`
    document.getElementById('hivepactions').firstElementChild.innerText = parseFloat((parseFloat(usr.hstats.total_vesting_fund_steem) * parseFloat(usr.hive.vesting_shares)) / parseFloat(usr.hstats.total_vesting_shares)).toFixed(3) + ' HP'
    document.getElementById('hiveval').firstElementChild.innerText = `$${parseFloat((parseFloat(( parseFloat(usr.hstats.total_vesting_fund_steem) * parseFloat(usr.hive.vesting_shares)) / parseFloat(usr.hstats.total_vesting_shares)) + parseFloat(usr.hive.balance))*usr.price).toFixed(2)}`
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
    console.log('what?')
    fetch('https://token.dlux.io/feed')
        .then(r => {
            return r.json()
        })
        .then(result => {
            console.log('hstory', result)
        })
        .catch(e => { console.log(e) })
}