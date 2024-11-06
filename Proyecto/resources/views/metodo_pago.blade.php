@extends('layouts.Plantilla')
@section('Titulo','Interfaz de Búsqueda de Hoteles')
@section('Contenido')

<div class="container my-5">
    <h1 class="text-center mb-5">Métodos de Pago</h1>

    <!-- Selección del método de pago -->
    <div class="form-group">
        <label for="paymentMethod">Seleccione un método de pago:</label>
        <select class="form-control" id="paymentMethod" onchange="showPaymentForm()">
            <option value="">Seleccione...</option>
            <option value="creditCard">Tarjeta de Crédito</option>
            <option value="paypal">PayPal</option>
        </select>
    </div>

    <!-- Formulario para Tarjeta de Crédito -->
    <form id="creditCardForm" class="payment-form d-none" action="/metodo/Tarjeta" method="POST">
        @csrf
        <h4 class="my-3">Pago con Tarjeta de Crédito</h4>
        <div class="form-group">
            <label for="cardNumber">Número de Tarjeta:</label>
            <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Número de tarjeta" maxlength="16" required>
            <small class="form-text text-danger"><strong>{{$errors->first('cardNumber')}}</strong></small>

        </div>
        <div class="form-group">
            <label for="expiryDate">Fecha de Expiración:</label>
            <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/AA" required>
            <small class="form-text text-danger"><strong>{{$errors->first('expiryDate')}}</strong></small>

        </div>
        <div class="form-group">
            <label for="cvv">CVV:</label>
            <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" maxlength="3" required>
            <small class="form-text text-danger"><strong>{{$errors->first('cvv')}}</strong></small>

        </div>
        <div class="form-check mt-4">
            <input class="form-check-input" type="checkbox" id="acceptPoliciesCreditCard" name="check" required>
            <label class="form-check-label" for="acceptPoliciesCreditCard">
                Acepto las <a href="#" data-toggle="modal" data-target="#policiesModal">políticas y condiciones</a>
            </label>
            <small class="form-text text-danger"><strong>{{$errors->first('check')}}</strong></small>
        </div>
        <button type="submit" class="btn btn-success btn-lg mt-4">Pagar con Tarjeta</button>
    </form>

    <!-- Formulario para PayPal -->
    <form id="paypalForm" class="payment-form d-none" action="/metodo/Paypal" method="POST">
        @csrf
        <h4 class="my-3">Pago con PayPal</h4>
        <div class="form-group">
            <label for="paypalEmail">Correo Electrónico de PayPal:</label>
            <input type="email" class="form-control" id="paypalEmail" name="paypalEmail" placeholder="Correo electrónico" required>
            <small class="form-text text-danger"><strong>{{$errors->first('paypalEmail')}}</strong></small>

        </div>
        <div class="form-check mt-4">
            <input class="form-check-input" type="checkbox" id="acceptPoliciesPaypal" name="check" required>
            <label class="form-check-label" for="acceptPoliciesPaypal">
                Acepto las <a href="#" data-toggle="modal" data-target="#policiesModal">políticas y condiciones</a>
                </label>
            <small class="form-text text-danger"><strong>{{$errors->first('check')}}</strong></small>

        </div>
        <button type="submit" class="btn btn-success btn-lg mt-4">Pagar con PayPal</button>
    </form>
</div>

<!-- Políticas -->
<div class="modal fade" id="policiesModal" tabindex="-1" role="dialog" aria-labelledby="policiesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="policiesModalLabel">Políticas y Condiciones</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Aquí se mostrarán las políticas y condiciones de uso...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showPaymentForm() {
        // Ocultar todos los formularios de pago
        document.querySelectorAll('.payment-form').forEach(form => form.classList.add('d-none'));
        
        // Mostrar el formulario correspondiente al método de pago seleccionado
        const selectedMethod = document.getElementById('paymentMethod').value;
        if (selectedMethod === 'creditCard') {
            document.getElementById('creditCardForm').classList.remove('d-none');
        } else if (selectedMethod === 'paypal') {
            document.getElementById('paypalForm').classList.remove('d-none');
        }
    }
</script>

@endsection
