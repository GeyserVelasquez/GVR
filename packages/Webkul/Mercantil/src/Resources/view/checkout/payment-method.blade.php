<!-- Campo personalizado (ej: número de documento) -->
<div class="payment-method-form">
    <label for="customer_document">Número de documento *</label>
    <input
        type="text"
        name="customer_document"
        id="customer_document"
        class="form-control"
        required
        placeholder="Ej: 12345678"
    >
    @error('customer_document')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<!-- Campos ocultos necesarios (token CSRF, método de pago, etc.) -->
@csrf
<input type="hidden" name="payment_method" value="mercantil">
