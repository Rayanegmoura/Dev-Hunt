// BOTÃO DE ACESSIBILIDADE

const toggleBtn = document.getElementById('toggleAcessibilidade');
const acessibilidadeDiv = document.getElementById('acessibilidade');


toggleBtn.addEventListener('click', function() {
    acessibilidadeDiv.classList.toggle('ativo');
});

// ACESSIBILIDADE MODO CLARO

let trilho = document.getElementById('trilho')
let body = document.querySelector('body')
let imagem = document.getElementById('imagemAcessibilidade'); 

trilho.addEventListener('click', ()=>{
    trilho.classList.toggle('dark')
    body.classList.toggle('dark')

    if (body.classList.contains('dark')) {
        imagem.src = "/img/logo-2.png";
    } else {
        imagem.src = "/img/logo.png";
    }
});

// ACESSIBILIDADE AUMENTAR E DIMINUIR FONTE

var $btnAumentar = $("#btnAumentar");
var $btnDiminuir = $("#btnDiminuir");
var $elemento = $("body #content").find("*"); 
var fonts = [];

function obterTamanhoFonte() {
  for (var i = 0; i < $elemento.length; i++) {
    fonts.push(parseFloat($elemento.eq(i).css('font-size')));
  }
}
obterTamanhoFonte();
$btnAumentar.on('click', function() {
  for (var i = 0; i < $elemento.length; i++) {
    ++fonts[i];
    $elemento.eq(i).css('font-size', fonts[i]);
  }
});

$btnDiminuir.on('click', function() {
  for (var i = 0; i < $elemento.length; i++) {
    --fonts[i];
    $elemento.eq(i).css('font-size', fonts[i]);
  }
});


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
  
 