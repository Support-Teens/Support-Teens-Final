var dataAtual = new Date();

var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
var dataFormatada = dataAtual.toLocaleDateString('pt-BR', options);

document.getElementById('dataHoje').innerHTML = dataFormatada;

var dataAtual = new Date();

var hora = dataAtual.getHours();
var minuto = dataAtual.getMinutes();

var horaFormatada = hora < 10 ? '0' + hora : hora;
var minutoFormatado = minuto < 10 ? '0' + minuto : minuto;

document.getElementById('horaAtual').innerHTML = horaFormatada + ':' + minutoFormatado;

var tamanhoFonte = 16;

function aumentarFonte() {
    tamanhoFonte += 2;
    atualizarTamanhoFonte();
}

function diminuirFonte() {
    tamanhoFonte -= 2;
    atualizarTamanhoFonte();
}

function atualizarTamanhoFonte() {
    document.getElementById('editor').style.fontSize = tamanhoFonte + 'px';
}

function mudarFonte() {
    var editor = document.getElementById('editor');
    var novaFonte = document.getElementById('fontSelect').value;
    editor.style.fontFamily = novaFonte;
}

function mudarFonte() {
    var editor = document.getElementById('editor');
    var novaFonte = document.getElementById('fontSelect').value;
    editor.style.fontFamily = novaFonte;
}

function mudarCorFonte() {
    var editor = document.getElementById('editor');
    var novaCor = document.getElementById('corFonte').value;
    editor.style.color = novaCor;
}

function salvarPDF() {
    window.print();
}