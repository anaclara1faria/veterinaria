import './bootstrap';

const botoesExibir = document.querySelectorAll('.botaoEdMenos');

botoesExibir.forEach(botao => {
    let expandido = false; // Mova a variável expandido para fora do evento de clique

    botao.addEventListener('click', function() {
        const informacoes = this.closest('.animal-info').querySelectorAll('.infs p:not(:first-child)');

        if (!expandido) { 
            informacoes.forEach(info => {
                info.style.display = 'block';
            });
            this.textContent = 'Exibir Menos';
        } else {
            informacoes.forEach(info => {
                info.style.display = 'none';
            });
            this.closest('.animal-info').querySelector('.infs p:first-child').style.display = 'block';
            this.textContent = 'Exibir Mais';
        }

        expandido = !expandido; 
    });
});
