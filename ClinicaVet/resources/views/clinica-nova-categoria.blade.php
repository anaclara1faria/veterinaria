<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu amigo animal</title>
    @vite(['resources/css/nova-categoria.css'])
    <style>
        body {
    font-family: 'Inria Sans', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('/images/background.jpg'); 
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover;
    height: 100vh; 
    z-index: 1;
    display: flex;
    justify-content: flex-end;
    background-attachment: fixed; 
}
    </style>
</head>

<body>
    
    <div class="conteudo">
        <div class="formulari">
            <div class="animal-box">
                <div class="pesquisar">
                    <h3>Raças registradas</h3>
                    <div class="pesquisa">

                        <input type="text" placeholder="Pesquisar..." name="pesquisa" class="barra">

                    </div>

                </div>

                <div class="animal-info">
                    <div class="infs">
                        @if(session('success'))
    <span>{{session('success')}}</span>
    @endif
                        <form method="POST">
                            @csrf
                            <div>
                                
                                <input type="text" id="info1" name="race" required placeholder="Escreva o nome da RAÇA:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info2" name="origin" required placeholder="Escreva a raça de ORIGEM:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info3" name="appearance" required placeholder="Descreva a APÂRENCIA:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info4" name="colors" required placeholder="Descreva as CORES:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info5" name="personality" required placeholder="Descreva a PERSONALIDADE:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info6" name="skills" required placeholder="Descrava as HABILIDADES:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info7" name="health" required placeholder="Descreva sobre SUÁDE:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info8" name="life_expectancy" required placeholder="Descreva sobre a EXPECTATIVA DE VIDA:" class="caixa">
                            </div>
                            

                    </div>
                    <div class="buttons">
                        <h5>Numero de registro: A ser gerado</h5>
                        <button type="submit">Salvar alterações</button>
                    </form>
                        <button type="button" onclick="limparCampos()">Descartar alterações</button>
                    </div>


                </div>

                
            </div>

        </div>

    </div>
    <div class="content">
        <img src="{{ asset('images/logo.jpg') }}" alt="logo" width="250px" height="250px">



    </div>

    </div>
    <script>
        function limparCampos() {
            var inputs = document.getElementsByClassName('caixa');
            
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].value = '';
            }
        }

        function exibirMensagem() {
            alert('Informações foram salvas com sucesso!');
            return;
        }
    </script>


</body>

</html>