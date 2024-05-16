<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <style>
        body {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('/images/background.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
    <title>Formulário</title>
</head>

<body>
    @if(session('success'))
    <span>{{session('success')}}</span>
    @endif
    @foreach($errors->all() as $message)
    <span>{{ $message }}</span>
    @endforeach
    <div class="container">
        <div class="form-image">
            <img src="{{ asset('images/logo.jpg') }}" alt="logo">
        </div>
        <div class="form">
      
            <form method="POST">
                @csrf
                <div class="form-header">
                    <div class="title">
                        <h1>Relatório animal</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Dr José</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome do PET</label>
                        <input id="firstname" type="text" name="pet_name" placeholder="Digite nome do pet" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Raça</label>
                        <input id="lastname" type="text" name="race" placeholder="Digite a raça" required>
                        </div>
                    <div class="input-box">
                        <label for="email">Nome do dono(a)</label>
                        <input id="email" type="text" name="tutor_name" placeholder="Digite o nome" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Idade</label>
                        <input id="number" type="tel" name="age" placeholder="2 anos e 5 mese" required>
                    </div>

                    <div class="input-box">
                        <label for="doenca">Doenças</label>
                        <input id="doenca" type="text" name="illnesses" placeholder=" cinomose, hepatite" required>
                    </div>


                    <div class="input-box">
                        <label for="cirurgias">Cirurgias</label>
                        <input id="cirurgias" type="text" name="surgeries" placeholder="duas cirurgias" required>
                    </div>

                    
                    <div class="input-box">
                        <label for="doenca">Peso</label>
                        <input id="doenca" type="text" name="weight" placeholder="Peso atual 12Kg" required>
                    </div>


                    <div class="input-box">
                        <label for="cirurgias">Observações</label>
                        <input id="cirurgias" type="text" name="comments" placeholder="Hoje o animal demonstrou sinais preocupantes" required>
                    </div>


                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Caracteristicas</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="checkbox" name="characteristics1">
                            <label for="female">Vacinado</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="checkbox" name="characteristics2">
                            <label for="male">Alergia</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="checkbox" name="characteristics3">
                            <label for="others">Medicamento</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="checkbox" name="characteristics4">
                            <label for="none">Canino</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="checkbox" name="characteristics5">
                            <label for="none">Felino</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Continuar </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
