@extends('layouts.Plantilla')
@section('titulo','Recuperacion de contraseña')
@section('Contenido')

    <div class="container mt-5">
        <h2 class="text-center">Recuperar Contraseña</h2>
        <form id="resetPasswordForm">
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="text" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" name="txtcorreo">
                <div class="invalid-feedback">Por favor, ingresa un correo electrónico válido.</div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar Enlace de Recuperación</button>
        </form>
        <div id="confirmationMessage" class="alert alert-success mt-3 d-none" role="alert">
            Se ha enviado un correo con instrucciones para restablecer la contraseña.
        </div>

        <hr>

        <form id="codeVerificationForm" class="mt-4 d-none">
            <div class="form-group">
                <label for="code">Código de Autenticación:</label>
                <input type="text" class="form-control" id="code" placeholder="Ingresa el código de autenticación" required minlength="6" maxlength="6">
                <div class="invalid-feedback">El código debe tener 6 caracteres.</div>
            </div>
            <button type="submit" class="btn btn-success btn-block">Verificar Código</button>
            <button type="button" class="btn btn-link" id="resendCodeButton">Reenviar Código</button>
        </form>
        <div id="errorMessage" class="alert alert-danger mt-3 d-none" role="alert">
            El código es incorrecto o ha expirado. Por favor, intenta nuevamente.
        </div>

        <hr>

        <form id="passwordResetForm" class="mt-4 d-none">
            <div class="form-group">
                <label for="newPassword">Nueva Contraseña:</label>
                <input type="password" class="form-control" id="newPassword" placeholder="Ingresa tu nueva contraseña" required>
                <div class="invalid-feedback">Por favor, ingresa una contraseña.</div>
            </div>
            <p id="emailDisplay" class="text-muted"></p>
            <button type="submit" class="btn btn-primary btn-block">Guardar Nueva Contraseña</button>
            <button type="button" class="btn btn-secondary btn-block" id="redirectToHomeButton">Volver al Inicio</button>
        </form>
    </div>

    <script>
        let userEmail = '';

        document.getElementById('resetPasswordForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const emailInput = document.getElementById('email');
            if (!emailInput.checkValidity()) {
                emailInput.classList.add('is-invalid');
                return;
            }
            emailInput.classList.remove('is-invalid');

            userEmail = emailInput.value; 
            document.getElementById('confirmationMessage').classList.remove('d-none');
            document.getElementById('resetPasswordForm').classList.add('d-none');
            document.getElementById('codeVerificationForm').classList.remove('d-none');
            emailInput.value = ''; 
        });

        document.getElementById('codeVerificationForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const codeInput = document.getElementById('code');
            if (codeInput.value.length !== 6) {
                codeInput.classList.add('is-invalid');
                return;
            }
            codeInput.classList.remove('is-invalid');

            
            const validCode = "123456"; 
            if (codeInput.value !== validCode) {
                document.getElementById('errorMessage').classList.remove('d-none');
                return;
            }
            document.getElementById('errorMessage').classList.add('d-none');

           
            document.getElementById('codeVerificationForm').classList.add('d-none');
            document.getElementById('passwordResetForm').classList.remove('d-none');
            document.getElementById('emailDisplay').innerText = `Correo Electrónico: ${userEmail}`;
        });

        document.getElementById('passwordResetForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const newPasswordInput = document.getElementById('newPassword');
            if (!newPasswordInput.checkValidity()) {
                newPasswordInput.classList.add('is-invalid');
                return;
            }
            newPasswordInput.classList.remove('is-invalid');

            
            alert('Nueva contraseña guardada exitosamente.');
        });

        document.getElementById('resendCodeButton').addEventListener('click', function () {
            
            alert('Código reenviado a tu correo electrónico.');
        });

        document.getElementById('redirectToHomeButton').addEventListener('click', function () {
            
            window.location.href = 'index.html'; 
        });
    </script>

@endsection