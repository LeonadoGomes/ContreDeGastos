
function verificarStatus() {
    var statusSelect = document.getElementById('status');
    var mensagemAtrasado = document.getElementById('mensagemAtrasado');

    // Se a opção "Atrasado" estiver selecionada, exibe a mensagem, caso contrário, oculta a mensagem
    if (statusSelect.value === 'Atrasado') {
        mensagemAtrasado.style.display = 'block';
    } else {
        mensagemAtrasado.style.display = 'none';
    }
}
