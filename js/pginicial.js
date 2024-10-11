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

// MENU MOBILE

let btnMenu = document.getElementById('btn-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})


// SCROLLREVEAL

window.revelar = ScrollReveal({reset:true})

// TOPO DO SITE

revelar.reveal('.efeito-txt-topo',
{
    duration: 2000,
    distance: '90px',
    delay: 1000
})

// TITULOS

revelar.reveal('.efeito-titulo',
{
    duration: 2000,
    distance: '90px'
})

// BOX

revelar.reveal('.efeito-box-1',
{
    duration: 2000,
    distance: '90px',
    delay: 500
})

revelar.reveal('.efeito-box-2',
{
    duration: 2000,
    distance: '90px',
    delay: 1000
})

revelar.reveal('.efeito-box-3',
{
    duration: 2000,
    distance: '90px',
    delay: 1500
})

revelar.reveal('.efeito-box-4',
{
    duration: 2000,
    distance: '90px',
    delay: 2000
})

// SERVIÇOS

revelar.reveal('.efeito-serv-1',
{
    duration: 2000,
    distance: '90px',
    delay: 2500
})

revelar.reveal('.efeito-serv-2',
{
    duration: 2000,
    distance: '90px',
    delay: 2800
})

// QUEM SOMOS

revelar.reveal('.efeito-quem-somos',
{
    duration: 2000,
    distance: '130px',
    delay: 700,
    origin: 'left'
})


// DEPOIMENTOS

revelar.reveal('.efeito-depoimentos-1',
{
    duration: 2000,
    distance: '130px',
    delay: 1500,
    origin: 'left'
})

revelar.reveal('.efeito-depoimentos-2',
{
    duration: 2000,
    distance: '130px',
    delay: 1600,
    origin: 'left'
})

revelar.reveal('.efeito-depoimentos-3',
{
    duration: 2000,
    distance: '130px',
    delay: 1700,
    origin: 'left'
})

revelar.reveal('.efeito-depoimentos-4',
{
    duration: 2000,
    distance: '130px',
    delay: 1800,
    origin: 'left'
})

revelar.reveal('.efeito-depoimentos-5',
{
    duration: 2000,
    distance: '130px',
    delay: 1900,
    origin: 'left'
})

// PLANOS

revelar.reveal('.efeito-planos',
{
    duration: 2000,
    distance: '90px',
    delay: 500
})

// AJUDA

revelar.reveal('.efeito-ajuda',
{
    duration: 2000,
    distance: '90px',
    delay: 500
})