@extends('layout')

@section('container') large @endsection

@section('content')

    <div class="text-left">
        <table class="table table-striped table-bordered table-urls">
            <tr>
                <th width="50%">
                    Short URL
                    @if($page = request('page'))
                        (Page #{{ $page }})
                    @endif
                </th>
                <th>Destination URL</th>
            </tr>
            @foreach($urls as $url)
                <tr>
                    <td>
                        <a href="{{ $url->short_url }}" target="_blank">
                            {{ $url->short_url}}
                        </a>
                        <div class="pull-right">
                            <a href="{{ $url->original_url }}" title="{{ $url->original_url }}" target="_blank">
                                <i class="fa fa-link fa-lg"></i>
                            </a>
                        </div>
                    </td>
                    <td>
                        {{ $url->destination_url }}
                        <a href="https://bitly.com/a/bitlinks" class="pull-right" title="See statistics" target="_blank">
                            <i class="fa fa-bar-chart fa-lg"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $urls->links() !!}
    </div>

    {{--@foreach($urls as $url)--}}
        {{--<div class="panel panel-default text-left">--}}
            {{--<div class="panel-heading">--}}
                {{--<a href="#">{{ $url->short_url }}</a>--}}
            {{--</div>--}}
            {{--<div class="panel-body no-wrap">--}}
                {{--{{ $url->original_url }}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}

@endsection