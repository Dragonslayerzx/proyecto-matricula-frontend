const userLog = document.getElementById('btnUserLog')
const userStorage = window.localStorage

function fetchEstudianteLoginInfo() {
  const correo = document.getElementById('correo').value 
  const passw = document.getElementById('passw').value

  const obj = {
    "numeroCuenta": `${correo}`,
    "contrasena": `${passw}`
  }

  fetch('http://localhost:8080/api/alumno/verificacion', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(obj)
  }).then(res => {
    console.log('res: ', res)
    saveLoginInfo(res.status == '200', correo, passw)
  })

}


function saveLoginInfo(isLog, correo, passw) {
  if (!isLog) return
  if (userStorage.getItem('isLog') == null) {
    userStorage.setItem('isLog', 'true')
    userStorage.setItem('numeroCuenta', correo)
    userStorage.setItem('contrasena', passw)
  } 
}

function logOut() {
  userStorage.clear()
}

// si esta logeado que lo lleve a home si entra a login, y si entra a otra url y no esta logeado
// lo debe llevar a inicio de sesion
function redirect() {
  const loginPath = 'http://localhost:8000/estudiante/login'
  if (null == userStorage.getItem('isLog') && location.pathname != '/estudiante/login') window.location.replace(loginPath)

 /*  const homePage = 'http://localhost:8000/estudiante/login/validar'
  if (userStorage.getItem('isLog') == 'true' && location.pathname == '/estudiante/login') {
    const numeroCuenta = userStorage.getItem('numeroCuenta')
    const passw = userStorage.getItem('contrasena')

    const obj = {
      'numeroCuenta': numeroCuenta,
      'contrasena': passw
    }

    const fetchData = fetch(homePage, {
      method: 'POST',
      headers: {
        'Content-type': 'application/json'
      },
      body: JSON.stringify(obj)
    })
  } */ //window.location.replace(homePage)
}


//redirect()