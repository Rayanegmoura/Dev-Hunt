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
  
  // Gráfico de barras para 'Performance'
  document.addEventListener('DOMContentLoaded', function () {
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
  });
  
  // Acessibilidade: Modo claro/escuro
  let trilho = document.getElementById('trilho');
  let body = document.querySelector('body');
  
  trilho.addEventListener('click', () => {
    trilho.classList.toggle('dark');
    body.classList.toggle('dark');
  });
  
  // Acessibilidade: Aumentar e diminuir fonte
  let btnAumentar = document.getElementById('btnAumentar');
  let btnDiminuir = document.getElementById('btnDiminuir');
  let elementos = document.querySelectorAll('body *');
  let fonts = [];
  
  elementos.forEach(el => {
    fonts.push(parseFloat(window.getComputedStyle(el).fontSize));
  });
  
  btnAumentar.addEventListener('click', () => {
    elementos.forEach((el, i) => {
      fonts[i]++;
      el.style.fontSize = fonts[i] + 'px';
    });
  });
  
  btnDiminuir.addEventListener('click', () => {
    elementos.forEach((el, i) => {
      fonts[i]--;
      el.style.fontSize = fonts[i] + 'px';
    });
  });
  
  // Gráfico de polar para 'Interação' no Tube
  const data2 = {
    labels: [
      'Red',
      'Green',
      'Yellow',
      'Grey',
      'Blue'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [11, 16, 7, 3, 14],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(75, 192, 192)',
        'rgb(255, 205, 86)',
        'rgb(201, 203, 207)',
        'rgb(54, 162, 235)'
      ]
    }]
  };
  
  const config3= {
    type: 'polarArea',
  data: data2,
  options: {}
};

  const chartTube = new Chart(
    document.getElementById('tubeChart'),
    config3
  );
  