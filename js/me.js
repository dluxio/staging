function me(usr) {
    User.hbd = { balance: User.hive.sbd_balance }
    document.getElementById('dluxamountlab').innerHTML = `Amount (Balance <a href="#" onClick="insertBal(parseFloat(parseInt(User.dlux.balance)/1000),'senddluxamount')">${parseFloat(parseInt(User.dlux.balance)/1000).toFixed(3)} DLUX</a>):`
    document.getElementById('powerdowndluxammount').innerHTML = `Amount (Balance <a href="#" onClick="insertBal(User.dlux.balance,'powerdowndluxamount')">${parseFloat(User.dlux.balance/1000).toFixed(3)} DLUX</a>):`
    document.getElementById('dluxactions').firstElementChild.innerText = `${parseFloat(parseInt(User.dlux.balance)/1000).toFixed(3)} DLUX`
    document.getElementById('dluxpactions').firstElementChild.innerText = `${parseFloat(parseInt(User.dlux.poweredUp)/1000).toFixed(3)} DLUX`
    document.getElementById('hivepactions').firstElementChild.innerText = parseFloat((parseFloat(User.hstats.total_vesting_fund_steem) * parseFloat(User.hive.vesting_shares)) / parseFloat(User.hstats.total_vesting_shares)).toFixed(3) + ' HP'
    document.getElementById('hiveactions').firstElementChild.innerText = User.hive.balance
    document.getElementById('hbdactions').firstElementChild.innerText = User.hive.sbd_balance
    document.getElementById('savingsactions').firstElementChild.innerText = Uesr.hive.savings_sbd_balance
    document.getElementById('hiveval').firstElementChild.innerText = `$${parseFloat((parseFloat(( parseFloat(User.hstats.total_vesting_fund_steem) * parseFloat(User.hive.vesting_shares)) / parseFloat(User.hstats.total_vesting_shares)) + parseFloat(User.hive.balance))*User.price).toFixed(2)}`
    document.getElementById('dluxval').firstElementChild.innerText = `$${parseFloat(((parseInt(User.dlux.balance) + parseInt(User.dlux.poweredUp))/1000)*parseFloat(User.dex.markets.hive.tick)*parseFloat(User.price)).toFixed(2)}`
    document.getElementById('buylink').addEventListener("click", function() {
        User.opts.type = 'buy'
        dexmodal("hive", "buy");
    })
    document.getElementById('buyDluxTitle').innerText = 'Buy With:'
    document.getElementById('selllink').addEventListener("click", function() {
        User.opts.type = 'sell'
        dexmodal("hive", "sell");
    })

    fetch('https://token.dlux.io/feed')
        .then(r => {
            return r.json()
        })
        .then(result => {
            console.log('hstory', result)
        })
        .catch(e => { console.log(e) })
}