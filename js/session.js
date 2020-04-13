 function validateResponse(response) {
  if (!response.ok) {
    throw Error(response.statusText);
  }
  return response;
}

function readResponseAsBlob(response) {
  return response.blob();
}
let user
function checkCookie(){
	console.log('Checking for login')
    user = sessionStorage.getItem('user');
	console.log('user='+user)
    if (user != null){
	document.getElementById('no-session').style.display = 'none';
	document.getElementById('active-session').style.display = 'block';
	document.getElementById('userImage').src = 'https://token.dlux.io/getauthorpic/' + user
	document.getElementById('userName').innerText = '@' + user;
    } else {
    	document.getElementById('active-session').style.display = 'none';
    }
}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function logout () {
	sessionStorage.clear()
	document.getElementById('active-session').style.display = 'none';
    	document.getElementById('no-session').style.display = 'block';
}

function showProfileImage(responseAsBlob) {
  try{
    var container = document.getElementById('user-name');
    container.removeChild(container.childNodes[0])
    var imgElem = document.createElement('img');
    imgElem.width="24"
    imgElem.height="25"
    imgElem.class="img-fluid bg-light rounded-circle"
    container.appendChild(imgElem);
    var imgUrl = URL.createObjectURL(responseAsBlob);
    imgElem.src = imgUrl;
  } catch(e){console.log(e)}
}

function setdata(account){
  try{
    document.getElementById('user-name').innerHTML = document.getElementById('user-name').innerHTML + ' @' + account

  } catch(e){console.log(e)}
}

class Dluxsession {
  constructor(steemClient, ip) {
    const opts = ip || {}
    this.email = opts.email || ''
    this.keychain = {
      installed: !!window.hive_keychain,
      active: false,
      posting: false,
      memo: false
    }
    this.steemidip = ip.steemidip
    this.steem = steemClient
    this.account = opts.account
    this.steemid = opts.steemid || ''
    this.jwt = opts.jwt || ''
  }
  
  set account (obj) {
    return new Promise ((r,e) => {
      if(obj){
        console.log(obj)
        setdata(obj.name)
        this.metadata = JSON.parse(obj.json_metadata)
        fetch(`https://ipfs.dlux.io/api/proxy?url=${this.metadata.profile.profile_image}`)
        .then(validateResponse)
        .then(readResponseAsBlob)
        .then(showProfileImage)
        .catch(err => {
          console.log(err);
          e(err)
        });
      }
    });
  }
  
  set steemidip (id) {
    var account = {}, itr = {}
    return new Promise((resolve, reject) =>{
    if (window.location.pathname.substr(0,6) === '/login'){
      console.log('why')
    let idPromises =  [Dluxsession.handshake(id)]
    Promise.all(idPromises)
      .then(r => {
        account = r[0].account
      console.log(account)
        let challengePromises = [Dluxsession.decode(id, r[0].challenges[0])]
        Promise.all(challengePromises)
          .then(ret => {
            let itr = {}
            itr.jwt = ret[0]
            itr.user = id
            itr.challenges = r[0].challenges
            itr.steemid = id
            let storables = ['email', 'steemid', 'jwt', 'account']
              for ( var i = 0; i < storables.length; i++){
                console.log(itr[storables[i]])
                window.sessionStorage.setItem(storables[i], JSON.stringify(itr[storables[i]]))
              }
		setCookie('user', itr.steemid, 5)
            if (window.location.pathname.substr(0,6) === '/login'){
		// url param for return to url
              window.location = 'https://' + window.location.host 
            }
          resolve(this.jwt)
        })
      })
    } else {
      resolve(this.jwt)
    }
    });
  }
  
  static handshake(id){
    return new Promise ((resolve, reject) => {
      fetch(`https://ipfs.dlux.io/api/account/${id}`)
      .then((response) => {
        return response.json();
      })
      .then((myJson) => {
        resolve(myJson) 
      })
      .catch((error) => {
        reject(error)
      })
    });
  }
  
  static iam (id) {
    return new Promise ((resolve, reject) => {
      this.steem.api.getAccounts([id], function(err, response){
				if (err) {
					reject(err)
				} else {
					resolve(response)
				}
			});
    });
  }
  
  static challengeMe (id) {
    return new Promise ((resolve, reject) => {
      this.steem.api.getAccounts([id], function(err, response){
				if (err) {
					reject(err)
				} else {
					resolve(response)
				}
			});
    });
  }
  
  static decode (self, encoded) {
    return new Promise ((resolve, reject) => {
      var jwt = ''
      if (window.hive_keychain){
        try {
        window.hive_keychain.requestVerifyKey(self, encoded[0], encoded[1], function(response) {
          console.log(response);
          jwt = response.result.substring(1, response.result.length -1)
          resolve(jwt)
        });
        } catch (e) {
          reject('plant')
        }
      } else {
        let key = prompt(`Enter @${this.name}'s memo private key`, '5blahlblah')
        try {
        jwt = this.steem.memo.decode(key, encoded[0])
        resolve(jwt)
        } catch (e) {
          reject('food')
        }
      }  
    })
  }
  
  static encode (msg, to) {
    return new Promise ((resolve, reject) => {
          let encoded = this.steem.memo.encode(this.account.memoKey, encoded);
        })
  }
  
}
