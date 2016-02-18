@extends('layout')

@section('title') | Last Shortened URLs @endsection

@section('container') large @endsection

@section('content')

    @if(count($urls))
        <div class="text-left">
            <table class="table table-striped table-bordered table-urls">
                <tr>
                    <th width="43%">
                        Short URL
                        @if($page = request('page'))
                            (Page #{{ $page }})
                        @endif
                    </th>
                    <th width="43%">Destination URL</th>
                    <th class="text-center">Clicks</th>
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
                                <a href="javascript:void(0)" title="Created {{ $url->created_at }}" target="_blank">
                                    <i class="fa fa-clock-o fa-lg"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            {{ $url->destination_url }}
                            <a href="https://bitly.com/a/bitlinks" class="pull-right" title="Go to Bitly" target="_blank">
                                <i class="fa fa-bar-chart fa-lg"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            {{ $url->clicks }}
                        </td>
                    </tr>
                @endforeach
            </table>

            <div class="text-left div-pagination">
                {!! $urls->links() !!}
            </div>
        </div>
    @else
        <div class="alert alert-info no-margin">
            No URLs were shortened yet!
        </div>
    @endif

@endsection