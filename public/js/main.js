$(document).ready(function () {
    $('#inputQuantityOrder').on('input', function () {
        let value = this.value;
        $('#inputPriceOrder').val(value * $('#inputPriceEvent').val());
    });
});