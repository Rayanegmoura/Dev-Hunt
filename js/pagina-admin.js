// Certifique-se de que o Chart.js está carregado corretamente
document.addEventListener('DOMContentLoaded', function () {
    // Gráfico de barras para 'Performance'
    const labels = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho'];
    const data = {
      labels: labels,
      datasets: [{
        label: 'Performance Mensal',
        data: [65, 59, 80, 81, 56, 55, 40],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)', 'rgba(255, 159, 64, 0.2)', 'rgba(255, 205, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(153, 102, 255, 0.2)',
          'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
          'rgb(255, 99, 132)', 'rgb(255, 159, 64)', 'rgb(255, 205, 86)',
          'rgb(75, 192, 192)', 'rgb(54, 162, 235)', 'rgb(153, 102, 255)', 'rgb(201, 203, 207)'
        ],
        borderWidth: 1
      }]
    };
  
    const config = {
      type: 'bar',
      data: data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };
  
    const chart1 = new Chart(
      document.getElementById('chart1'),
      config
    );
  
    // Gráfico de rosca para 'Interação'
    const data1 = {
      labels: ['Cinza Metálico', 'Azul Metálico', 'Roxo Metálico'],
      datasets: [{
        label: 'Porcentagem',
        data: [500, 500, 150],
        backgroundColor: ['rgb(169, 169, 169)', 'rgb(0, 122, 204)', 'rgb(75, 0, 130)'],
        borderColor: ['rgb(100, 100, 100)', 'rgb(0, 102, 174)', 'rgb(55, 0, 100)'],
        borderWidth: 2,
        hoverOffset: 4
      }]
    };
    
    const config1 = {
      type: 'doughnut',
      data: data1,
    };
    
    const chart2 = new Chart(
      document.getElementById('chart2'),
      config1
    );
});

document.getElementById('btn-exp').addEventListener('click', function () {
  const menu = document.getElementById('menuLateral');
  menu.classList.toggle('expandir');
});

const xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
const yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "#00d1ff",
      borderColor: "rgba(104, 38, 120, 0.75)",
      data: yValues
    }]
  },
  options: {
    legend: { display: false },
    scales: {
      yAxes: [{ ticks: { min: 6, max: 16 } }]
    }
  }
});

