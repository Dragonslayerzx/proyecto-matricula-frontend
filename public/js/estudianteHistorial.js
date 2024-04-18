const likeBtn = document.getElementById('likeBtn')
const dislikeBtn = document.getElementById('dislikeBtn')

function calificarDocente(button) {
  const buttonId = button.id 

  btnSeleccionado(buttonId); 
}

function sentLikeToServer(btn) {
  isSent = true
  setSentLike(btn);
}

function setSentLike(btn) {
  btn.disabled = true
}


function btnSeleccionado(btnId) {
  const btn = btnId == 'likeBtn' ? likeBtn : dislikeBtn
  if (btn == likeBtn) {
    dislikeBtn.classList.remove('btn-danger')
    btn.classList.remove('btn-warning')
    btn.classList.add('btn-primary')
  }

  else {
    likeBtn.classList.remove('btn-primary')
    btn.classList.remove('btn-secondary')
    btn.classList.add('btn-danger')
  }
}

// graficos
// yvalues son las notas (indice)
const yvalues = [97, 93, 85, 82, 86]
// xvalues son los anios 
const xvalues = [2022, 2023, 2024, 2025, 2026]

new Chart("myChart", {
  type: "line",
  data: {
    labels: xvalues,
    datasets: [{
      backgroundColor:"rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yvalues
    }]
  },
  //options:{...}
});