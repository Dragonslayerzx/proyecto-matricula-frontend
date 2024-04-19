const userLog = document.getElementById('btnUserLog')
const userStorage = window.localStorage

function fetchEstudianteLoginInfo() {
  const correo = document.getElementById('correo').value 
  const passw = document.getElementById('passw').value

  const obj = {
    correo: correo,
    passw: passw
  }

  fetch('http://localhost:8080/api/alumno/verificacion', {
    method: 'POST',
    headers: {
      'Content-type': 'application/json'
    },
    body: obj
  }).then(res => {
    saveLoginInfo(res)
  })

}

function saveLoginInfo(isLog) {
  if (!isLog) return
  if (userStorage.getItem('isLog') == null) {
    userStorage.setItem('isLog', 'true')
  } 
}

function logOut() {
  userStorage.removeItem('isLog')
}

// si esta logeado que lo lleve a home si entra a login, y si entra a otra url y no esta logeado
// lo debe llevar a inicio de sesion
function redirect() {
  const loginPath = 'http://localhost:8000/estudiante/login'
  if (null == userStorage.getItem('isLog') && location.pathname != '/estudiante/login') window.location.replace(loginPath)

  const homePage = 'http://localhost:8000/estudiante/home'
  if (userStorage.getItem('isLog') == 'true' && location.pathname == '/estudiante/login') window.location.replace(homePage)
}


redirect()