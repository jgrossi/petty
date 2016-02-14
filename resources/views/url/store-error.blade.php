@if(isset($errors['original_url']) and count($errors['original_url']))
    $('.form-group-url')
        .addClass('has-error')
        .find('.alert')
        .html('{{ $errors['original_url'][0] }}')
        .show();
    $('#input-original-url').focus();
@endif