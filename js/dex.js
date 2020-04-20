function cancel(txid) {
            var params = {
                "required_auths": [user],
                "required_posting_auths": 0,
                "id": "dlux_dex_clear",
                "json": JSON.stringify({
                    txid
                })
            }
            console.log(params)
            reqsign(['custom_json', params], ['active', user])
        }

function reqsign(op, req) { //requests keychain to sign and broadcast
            return new Promise ((resolve, reject) => {
	    	Dluxsession.hive_sign([req[1],[op], req[0]], [reject, resolve])
	    })
        }	

function dexsend(type,pair){
	if(type == 'Buy' && pair == 'hbd'){placeHbdBuy()}
	else if(type == 'Buy' && pair == 'hive'){placeHiveBuy()}
	else if(type == 'Sell' && pair == 'hive'){placeHiveAsk()}
	else if(type == 'Sell' && pair == 'hbd'){placeHibdAsk()}
	
}

        function placeHiveAsk() {
            var dlux = parseInt(parseFloat(document.getElementById('menudlux').value) * 1000),
                amount = parseInt(parseFloat(document.getElementById('menupair').value) * 1000),
                params = {
                    "required_auths": [user],
                    "required_posting_auths": 0,
                    "id": "dlux_dex_hive_sell",
                    "json": JSON.stringify({
                        dlux,
                        hive: amount,
			hours: opts.expire_time
                    })
                }
            console.log(params)
            reqsign(['custom_json', params], ['active', user])
        }
        function placeHbdAsk() {
            var dlux = parseInt(parseFloat(document.getElementById('menudlux').value) * 1000),
                amount = parseInt(parseFloat(document.getElementById('menupair').value) * 1000),
                params = {
                    "required_auths": [user],
                    "required_posting_auths": 0,
                    "id": "dlux_dex_hbd_sell",
                    "json": JSON.stringify({
                        dlux,
                        hbd: amount,
			hours: opts.expire_time
                    })
                }
            console.log(params)
            reqsign(['custom_json', params], ['active', user])
        }

        function placeHiveBuy() {
            var dlux = parseInt(parseFloat(document.getElementById('menudlux').value) * 1000),
                amount = parseInt(parseFloat(document.getElementById('menupair').value) * 1000),
                hiveAmount = (amount / 1000).toFixed(3) + ' STEEM', hbdAmount = '0.000 SBD'
            fetch('https://token.dlux.io/dex')
                .then(function (response) {
                    return response.json();
                })
                .then(function (myJson) {
                    //var updex = myJson.markets
                    //var queue = myJson.queue
                    if (dlux > 0 && typeof dlux == 'number' && amount > 0 && typeof amount == 'number') {
                        var escrowTimer = {}
                        //var agents = []
                        //var i = 0
                        let now = new Date();
                        escrowTimer.ratifyIn = now.setHours(now.getHours() + 72);
                        escrowTimer.ratifyUTC = new Date(escrowTimer.ratifyIn);
                        escrowTimer.ratifyString = escrowTimer.ratifyUTC.toISOString().slice(0, -5);
                        escrowTimer.expiryIn = now.setHours(now.getHours() + User.opts.expire_time);
                        escrowTimer.expiryUTC = new Date(escrowTimer.expiryIn);
                        escrowTimer.expiryString = escrowTimer.expiryUTC.toISOString().slice(0, -5);
                        var formatter = amount / 1000
                        formatter = formatter.toFixed(3)
                        var eidi = Math.floor(Math.random() * 4294967296)
                        let params = {
                            from: user,
                            to: User.opts.to,
                            sbd_amount: hbdAmount,
                            steem_amount: hiveAmount,
                            escrow_id: eidi,
                            agent: User.opts.agent,
                            fee: User.opts.fee,
                            ratification_deadline: escrowTimer.ratifyString,
                            escrow_expiration: escrowTimer.expiryString,
                            json_meta: JSON.stringify({
                                dextx: {
                                    dlux,
                                    fee
                                }
                            })
                        }
                        console.log(params)
                        reqsign(['escrow_transfer', params], ['active', iam])
                    }
                })


        }

        function placeHbdBuy() {
            var dlux = parseInt(parseFloat(document.getElementById('menudlux').value) * 1000),
                amount = parseInt(parseFloat(document.getElementById('menupair').value) * 1000),
                hiveAmount = '0.000 STEEM', hbdAmount = (amount / 1000).toFixed(3) + ' SBD'
            fetch('https://token.dlux.io/dex')
                .then(function (response) {
                    return response.json();
                })
                .then(function (myJson) {
                    var updex = myJson.markets
                    var queue = myJson.queue
                    if (dlux > 0 && typeof dlux == 'number' && amount > 0 && typeof amount == 'number') {
                        var escrowTimer = {}
                        var agents = []
                        var i = 0
                        let now = new Date();
                        escrowTimer.ratifyIn = now.setHours(now.getHours() + 1);
                        escrowTimer.ratifyUTC = new Date(escrowTimer.ratifyIn);
                        escrowTimer.ratifyString = escrowTimer.ratifyUTC.toISOString().slice(0, -5);
                        escrowTimer.expiryIn = now.setHours(now.getHours() + User.opts.expire_time);
                        escrowTimer.expiryUTC = new Date(escrowTimer.expiryIn);
                        escrowTimer.expiryString = escrowTimer.expiryUTC.toISOString().slice(0, -5);
                        var formatter = amount / 1000
                        formatter = formatter.toFixed(3)
                        var eid = Math.floor(Math.random() * 4294967296)
                        let params = {
                            from: iam,
                            to: opts.to,
                            sbd_amount: hbdAmount,
                            steem_amount: hiveAmount,
                            escrow_id: eid,
                            agent: opts.agent,
                            fee: opts.fee,
                            ratification_deadline: escrowTimer.ratifyString,
                            escrow_expiration: escrowTimer.expiryString,
                            json_meta: JSON.stringify({
                                dextx: {
                                    dlux
                                }
                            })
                        }
                        console.log(params)
                        reqsign(['escrow_transfer', params], ['active', iam])
                    }
                })
        }

        function getItID(txid) {
            fetch('https://token.dlux.io/dex')
                .then(function (response) {
                    return response.json();
                })
                .then(function (myJson) {
                    var updex = myJson.markets
                    var queue = myJson.queue
                    var addr = '', receiver = '', amount, type
		    try {
			    if (updex.hive.sellOrders[txid]) {
				console.log(updex.hive.sellOrders[txid].txid)
				addr = updex.hive.sellOrders[txid]
				reciever = updex.hive.sellOrders[txid].from
				type = ' STEEM'
			    }
		    } catch (e){}
                    if (!addr) {
                        type = ' SBD'
                        if (updex.hbd.sellOrders[txid]) {
                            console.log(updex.hbd.sellOrders[txid].txid)
                            addr = updex.hbd.sellOrders[txid]
                            reciever = updex.hbd.sellOrders[txid].from
                        }
                    }
                    if (addr) {
                        var escrowTimer = {}
                        var agents = []
                        console.log(addr, iam)
                        for (var agent in queue) {
                            if (queue[agent] !== addr.from && queue[agent] !== iam) {
                                agents.push(queue[agent])
                            }
                        }
                        let now = new Date();
                        escrowTimer.ratifyIn = now.setHours(now.getHours() + 1);
                        escrowTimer.ratifyUTC = new Date(escrowTimer.ratifyIn);
                        escrowTimer.ratifyString = escrowTimer.ratifyUTC.toISOString().slice(0, -5);
                        escrowTimer.expiryIn = now.setHours(now.getHours() + 2);
                        escrowTimer.expiryUTC = new Date(escrowTimer.expiryIn);
                        escrowTimer.expiryString = escrowTimer.expiryUTC.toISOString().slice(0, -5);
                        var eidi = Math.floor(Math.random() * 4294967296)
                        if (type === ' STEEM') {
                            hiveAmount = `${parseFloat(addr.hive / 1000).toFixed(3)} STEEM`
                            hbdAmount = '0.000 SBD'
                        } else if (type === ' SBD') {
                            hbdAmount = `${parseFloat(addr.hbd / 1000).toFixed(3)} SBD`
                            hiveAmount = '0.000 STEEM'
                        }
                        let eid = parseInt(Math.random() * 1000000000) //escrow_id from DLUXQmxxxx<this
                        let params = {
                            from: iam,
                            to: User.opts.to,
                            sbd_amount: hbdAmount,
                            steem_amount: hiveAmount,
                            escrow_id: eid,
                            agent: User.opts.agent,
                            fee: User.opts.fee,
                            ratification_deadline: escrowTimer.ratifyString,
                            escrow_expiration: escrowTimer.expiryString,
                            json_meta: JSON.stringify({
                                contract: txid,
                                for: addr.from
                            })
                        }
                        reqsign(['escrow_transfer', params], ['active', iam]);
                    }
                });
        }
        function getSellID(txid) {
            fetch('https://token.dlux.io/dex')
                .then(function (response) {
                    return response.json();
                })
                .then(function (myJson) {
                    var updex = myJson.markets, u
                    var addr = '', receiver = '', amount, type
                    var type = '', addr = '', reciever = ''
                    console.log(`Buying ${txid}`, updex)
                    for (var i in updex.hive.buyOrders) {
                        if (updex.hive.buyOrders[i].txid == txid.split(':')[1]) {
                            console.log(updex.hive.buyOrders[i].txid)
                            addr = updex.hive.buyOrders[i]
                            receiver = updex.hive.buyOrders[i].from
                            type = ' STEEM'
			    u = `${parseFloat(updex.hive.buyOrders[i].amount / 1000).toFixed(3)} DLUX`
                        }
                    }
                    console.log({ addr, receiver })
                    if (!type) {
                        for (var i in updex.hbd.buyOrders) {
                            if (updex.hbd.buyOrders[i].txid == txid.split(':')[1]) {
                                console.log(updex.hbd.buyOrders[i].txid)
                                addr = updex.hbd.buyOrders[i]
                                receiver = updex.hbd.buyOrders[i].from
                                type = ' SBD'
				u = `${parseFloat(updex.hbd.buyOrders[i].amount / 1000).toFixed(3)} DLUX`
                            }
                        }
                    }
		    console.log({ addr, receiver })
                    if (type) {
                        var params = {
                            "required_auths": [iam],
                            "required_posting_auths": [],
                            "id": "dlux_dex_buy",
                            "json": JSON.stringify({
                                contract: txid,
                                for: receiver,
                                dlux: u
                            })
                        }
                        console.log(params)
                        reqsign(['custom_json', params], ['active', iam]);
                    }
                });
        }
