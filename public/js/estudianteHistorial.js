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