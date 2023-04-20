<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="contenedor">

        <form id="formulario" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="formControl">
                <label for="usuario">Nombre de usuario</label>
                <input id="usuario" type="text" name="name" name="name" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            </div>

            <div class="formControl">
                <label for="email">E-mail</label>
                <input id="email"  type="email" name="email" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="formControl">
                <label>Contraseña</label>
                <input id="pass"  name="password" type="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="formControl">
                <label for="passConfirma">Confirmar Password</label>
                <input id="passConfirma" name="password_confirmation" required autocomplete="new-password" type="password">

            </div>

            <button type="submit" id="button">Registrar</button>
        </form>
    </div>
</body>
</html>
