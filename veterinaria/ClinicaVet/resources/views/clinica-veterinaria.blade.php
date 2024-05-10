<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu amigo animal</title>
    @vite(['resources/css/estilo-clinica-vet.css'])
    <style>
        body {
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
    font-family: Arial, sans-serif;
    background-attachment: fixed; 
}
    </style>
</head>

<body>

    <div class="conteudo">
        <div class="formulari">
            <div class="animal-box">
                <div class="pesquisar">
                    <h2>Raças registradas</h2>
                <div class="pesquisa">
                    <input type="text" placeholder="Pesquisar..." name="pesquisa">
                    <label for="pesquisa"><img src="Pesq-removebg-preview.png" alt="pesq"></label>
                </div>

                </div>

                <div class="animal-info">
                    <div class="infs">
                        <p class="textBox">Numero de registro: 19952</p>
                        <p class="textBox">Nome da raça: Border</p>
                        <p class="textBox">Raça: Border Collie</p>
                        <p class="textBox">Nome do dono(a): Marcia</p>
                        <p class="textBox">Idade do PET: 7</p>
                        <p class="textBox">Doenças: N/A</p>
                        <p class="textBox">Cirurgias: N/A</p>
                        <p class="textBox">Peso: 17 Kg</p>
                        <p class="textBox">Informações: O animal possui comportamento agressivo.</p>
                    </div>
                    <div class="buttons">
                        <a href="/edit/1">Editar</a>
                        <a href="">Excluir</a>

                        <button type="button" class="botaoEdMenos botaoExibir">Exibir menos</button>
                    </div>

                </div>
                <div class="animal-info">
                    <div class="infs">
                        <p class="textBox">Numero de registro: 19952</p>
                        <p class="textBox">Nome da raça: Border</p>
                        <p class="textBox">Raça: Border Collie</p>
                        <p class="textBox">Nome do dono(a): Marcia</p>
                        <p class="textBox">Idade do PET: 7</p>
                        <p class="textBox">Doenças: N/A</p>
                        <p class="textBox">Cirurgias: N/A</p>
                        <p class="textBox">Peso: 17 Kg</p>
                        <p class="textBox">Informações: O animal possui comportamento agressivo.</p>
                    </div>
                    <div class="buttons">
                        <a href="/edit/1">Editar</a>
                        <a href>Excluir</a>

                        <button type="button" class="botaoEdMenos botaoExibir">Exibir menos</button>
                    </div>

                </div>
                
            </div>
        </div>
        <div class="content">
            <img src="{{ asset('images/logo.jpg') }}" alt="logo" width="250px" height="250px">



        </div>

    </div>
    
    @vite(['resources/js/app.js'])
</body>

</html>