<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos de Pago</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-5">Métodos de Pago</h1>

    <form id="paymentForm">
        <!-- Metodo de Pago -->
        <div class="form-group">
            <label for="paymentMethod">Seleccione un método de pago:</label>
            <select class="form-control" id="paymentMethod" onchange="showPaymentFields()">
                <option value="">Seleccione...</option>
                <option value="creditCard">Tarjeta de Crédito</option>
                <option value="paypal">PayPal</option>
            </select>
        </div>

        <!-- Tarjeta de Credito -->
        <div id="creditCardFields" class="payment-fields d-none">
            <div class="form-group">
                <label for="cardNumber">Número de Tarjeta:</label>
                <input type="text" class="form-control" id="cardNumber" placeholder="Número de tarjeta" maxlength="16">
            </div>
            <div class="form-group">
                <label for="expiryDate">Fecha de Expiración:</label>
                <input type="text" class="form-control" id="expiryDate" placeholder="MM/AA">
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" class="form-control" id="cvv" placeholder="CVV" maxlength="3">
            </div>
        </div>

        <!--  PayPal -->
        <div id="paypalFields" class="payment-fields d-none">
            <div class="form-group">
                <label for="paypalEmail">Correo Electrónico de PayPal:</label>
                <input type="email" class="form-control" id="paypalEmail" placeholder="Correo electrónico">
            </div>
        </div>

      
        <div class="form-check mt-4">
            <input class="form-check-input" type="checkbox" id="acceptPolicies">
            <label class="form-check-label" for="acceptPolicies">
                Acepto las <a href="#" data-toggle="modal" data-target="#policiesModal">politicas y condiciones</a>
            </label>
        </div>

     
        <button type="button" class="btn btn-success btn-lg mt-4" onclick="processPayment()">Realizar Pago</button>
    </form>
</div>

<!-- Politicas -->
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
    function showPaymentFields() {
        // Oculta todos los campos especificos
        document.querySelectorAll('.payment-fields').forEach(field => field.classList.add('d-none'));
        
        // Muestra los campos especificos segun el metodo de pago seleccionado
        const selectedMethod = document.getElementById('paymentMethod').value;
        if (selectedMethod === 'creditCard') {
            document.getElementById('creditCardFields').classList.remove('d-none');
        } else if (selectedMethod === 'paypal') {
            document.getElementById('paypalFields').classList.remove('d-none');
        }
    }

    
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

