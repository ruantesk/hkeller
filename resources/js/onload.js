import 'jquery-mask-plugin';
$(function() {
    // Confirms
    $('.button-delete').on('click', function() {
        if (!confirm('Tem certeza que deseja excluir este item?')) {
            return false;
        }
    });

    // Mascaras
    $(".telefone").mask("(99) 99999-9999");

    $('form').on('submit', function() {
        $('input.telefone').each(function() {
            var unmaskedValue = $(this).unmask().val();
            $(this).val(unmaskedValue);
        });
    });
});
