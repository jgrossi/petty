@extends('layout')

@section('content')

    {{ Form::open([
        'route' => 'url.store',
        'method' => 'POST',
        'data-remote' => true,
        'data-type' => 'script',
    ]) }}
        <div class="form-group form-group-url">
            <div class="alert alert-danger" style="display: none;"></div>
            {{ Form::text('original_url', null, ['class' => 'form-control', 'placeholder' => 'http://example.com', 'id' => 'input-original-url']) }}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info btn-block btn-lg" data-disable-with="<i class='fa fa-spinner fa-spin'></i> Wait...">
                Short it!
            </button>
        </div>
    {{ Form::close() }}
    <div class="well well-sm well-url">
        <div class="input-group input-group-lg">
            <input type="text" class="form-control" id="input-url" placeholder="Short link...">
            <span class="input-group-btn">
                <button class="btn btn-warning" type="button" id="btn-copy-url">Copy!</button>
            </span>
        </div>
    </div>

@endsection