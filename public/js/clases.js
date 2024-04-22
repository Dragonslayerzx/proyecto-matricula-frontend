const selectFormCarreras = document.getElementById('carreras')
const selectFormClases = document.getElementById('clases')
const cardContainer = document.getElementById('card-container')

async function fetchCarreras() {
  const data = fetch('http://localhost:8080/api/matricula/carreras/obtener', {
    method: 'GET',
    headers: {
      'Content-Type': 'application/json'
    } 
  })

  const carreras = (await data).json()
  return carreras
}

async function fetchClasesPorCarrera(idCarrera) {
  try {
    const data = await fetch(`http://localhost:8080/api/matricula/carreras/${idCarrera}/clases`, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json'
      } 
    });
    const clases = await data.json();
    return clases;
  } catch (error) {
    console.error(error);
    throw error;
  }
}
selectFormCarreras.addEventListener('change', async () => {
  const carreraValue = selectFormCarreras.value;
  selectFormClases.innerHTML = '';
  
  try {
    const carreras = await fetchCarreras();
    const objetoCarrera = carreras.find(res => res.idCarrera == carreraValue);
    
    // Aquí esperamos a que se resuelva la promesa de fetchClasesPorCarrera
    const clases = await fetchClasesPorCarrera(objetoCarrera.idCarrera);

    clases.forEach(clase => {
      selectFormClases.innerHTML += `
        <option value="${clase.idClase}">${clase.nombre}</option>
      `;
    });
  } catch (error) {
    console.error('Error al procesar el cambio de selección de carrera:', error);
    // Aquí puedes manejar el error de manera apropiada, como mostrar un mensaje al usuario.
  }
});

// --------------------------------
/* async function fetchClasesPorCarrera(idCarrera) {
  try {
    const data = fetch(`http://localhost:8080/api/matricula/carreras/${idCarrera}/clases`, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json'
      } 
    })
    const clases = (await data).json()
    return clases
  } catch(e) {
    console.log(e)
  }
}

async function fetchCarreras() {
  const data = fetch('http://localhost:8080/api/matricula/carreras/obtener', {
    method: 'GET',
    headers: {
      'Content-Type': 'application/json'
    } 
  })

  const carreras = (await data).json()
  return carreras
}

selectFormCarreras.addEventListener('change', async () => {
  const carreraValue = selectFormCarreras.value
  selectFormClases.innerHTML = ''
  
  const carreras = await fetchCarreras()
  const objetoCarrera = carreras.find(res => res.idCarrera == carreraValue)
  const clases = await fetchClasesPorCarrera(objetoCarrera.idCarrera)
  console.log(clases)
  alert(JSON.stringify(clases))
  const arr = JSON.stringify(clases).

  clases.forEach(clase => {
    selectFormClases.innerHTML += `
    <option value="${clase.idClase}">${clase.nombre}</option>
    `
  })
}) */
/* const objectResponse = [
  
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
          <img style="border-radius: 50%;" src="../img/clases.png" class="card-img-top w-50" alt="clases logo">
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
  
}) */