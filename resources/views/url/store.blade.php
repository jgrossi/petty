$('.form-group-url').removeClass('has-error')
    .find('.alert')
    .fadeOut();
$('#input-original-url').val('');
$('#input-url').val('{{ $shortUrl }}').select();

{{--$('#btn-copy-url').focus();--}}
{{--$('#input-original-url').val('').focus();--}}