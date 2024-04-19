const selectFormCarreras = document.getElementById('carreras')
const selectFormClases = document.getElementById('clases')
const cardContainer = document.getElementById('card-container')

const objectResponse = [
  
  {
    clase: "POO",
    carrera: {
      "nombre": "Ing.Sistemas",
      "clases": ["Algoritmos", "Lenguajes", "Programacion II", "Ingenieria del software", "redes I", "POO"]
    },
    secciones: [
      { "docente": "harold coello" , "codigo": "IS-401", "seccion": "1700", "uv": "4" },
      { "docente": "jose inestroza" , "codigo": "IS-401", "seccion": "1100", "uv": "4" },
      { "docente": "Miguel Sauceda" ,"codigo": "IS-401", "seccion": "1700", "uv": "5"}
    ]
  },
  {
    clase: "Sentimientos I",
    carrera: {
      "nombre": "Psicologia",
      "clases": ["clase1", "clase2", "clase3", "clase4", "clase5", "clase6", "Sentimientos I"]
    },
    secciones: [
      { "docente": "lilian" , "codigo": "PS-401", "seccion": "0900", "uv": "5" },
      { "docente": "marta" , "codigo": "PS-401", "seccion": "1100", "uv": "4" },
    ]
  }
]

selectFormCarreras.addEventListener('change', () => {
  const carreraValue = selectFormCarreras.value
  selectFormClases.innerHTML = ''
  
  const objetoCarrera = objectResponse.find(res => res.carrera.nombre == carreraValue)
  const clasesCarrera = objetoCarrera.carrera.clases

  clasesCarrera.forEach(clase => {
    selectFormClases.innerHTML += `
    <option value="${clase}">${clase}</option>
    `
  })
})

selectFormClases.addEventListener('change', () => {
  cardContainer.innerHTML = ''
  const valueSelected = selectFormClases.value

  const classObjectSelected = objectResponse.find(res => res.clase == valueSelected)

  const secciones = classObjectSelected.secciones

  secciones.forEach(item => {
    cardContainer.innerHTML += `
    <div class="col col-lg-4">
      <div class="card mb-5 rounded"> 
        <div class="d-flex justify-content-center mt-2">
          <img src="../img/clases.png" class="card-img-top w-50" alt="clases logo">
        </div>
        <div class="card-body d-flex flex-column align-items-center">
          <h3 class="card-title fw-light">${item.docente}</h3>
          <h6>Código: <span class="fw-bold">${item.codigo}</span></h6>
          <h6>Sección: <span class="fw-bold">${item.seccion}</span></h6>
          <h6>UV: <span class="fw-bold">${item.uv}</span></h6>
          <button class="btn btn-primary"><a class="text-white" href="#" class="btn btn-primary">Matricular</a></button>
        </div>
      </div>
    </div>
    `
  })
  
})