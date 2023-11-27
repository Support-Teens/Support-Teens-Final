
// Função para realizar a pesquisa
function realizarPesquisa() {
    // Obtém o valor do campo de pesquisa
    var termoPesquisa = document.querySelector('.search-input').value;

    // Faz uma requisição AJAX para buscar as notas correspondentes
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Atualiza o conteúdo da seção de notas com as notas correspondentes
            document.querySelector('.all-notes').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "home_diario_busca.php?termo=" + termoPesquisa, true);
    xhttp.send();
}

// Adiciona um ouvinte de eventos para acionar a pesquisa ao digitar no campo de pesquisa
document.querySelector('.search-input').addEventListener('input', function () {
    realizarPesquisa();
});


// Função para realizar a filtragem por data
function filtrarPorData() {
    // Obtém o valor do campo de data
    var dataSelecionada = document.getElementById('data').value;

    // Faz uma requisição AJAX para buscar as notas correspondentes à data selecionada
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Atualiza o conteúdo da seção de notas com as notas correspondentes
            document.querySelector('.all-notes').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "home_diario_filtro_data.php?data=" + dataSelecionada, true);
    xhttp.send();
}

// Adiciona um ouvinte de eventos para acionar a filtragem ao alterar a data
document.getElementById('data').addEventListener('change', function () {
    filtrarPorData();
});


