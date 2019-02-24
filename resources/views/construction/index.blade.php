@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>現場一覧</h1>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('constructions.create') }}" class="btn btn-primary">新規追加</a>
                <a href="{{ action('ConstructionController@launchList', '1') }}" class="btn btn-primary">受注現場</a>
                <a href="{{ action('ConstructionController@roadworksList', '1') }}" class="btn btn-primary">道路工事現場</a>
                <a href="{{ action('ConstructionController@outputExcel') }}" class="btn btn-primary">Excel</a>
            </div>
        </div>
        <div class="row" style="padding:10px 0 0 0">
            <div class="col-md-8">
                <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">全市町村</a>
                @foreach (config('const.main_cities') as $key => $city)
                    <a href="{{ action('ConstructionController@cityList', $key) }}"
                        class="btn btn-primary">{{ $city }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div style="padding:10px 0 0 0"></div>

    <div class="container">
        @foreach ($constructions as $construction)
        <div class="panel panel-default">
            <div class="panel-heading">
                現場住所：{{config('const.city_code')[$construction->city]}}{{$construction->address}}
            </div>
            <div class="panel-body">
            <dl class="dl-horizontal">
                <dt>元請</dt>
                <dd>{{$construction->personnel}}</dd>
                <dt>調査日</dt>
                <dd>{{$construction->inquest_date}}</dd>
                @if ($construction->city == array_keys(config('const.city_code'), '神戸市')[0])
                    <dt>改善工事<dt>
                    @if ($construction->kobe_betterment_flg == 1)
                        <dd class="text-primary">改善工事有り</dd>
                    @else
                        <dd class="text-muted">改善工事無し</dd>
                    @endif
                @endif
                <dt>水道申請日</dt>
                <dd>{{$construction->u_requested_date}}</dd>
                <dt>下水申請日</dt>
                <dd>{{$construction->d_requested_date}}</dd>
            </dl>
            </div>
            <div class="panel-footer">
                <a href="{{ route('constructions.edit', [$construction->id]) }}" class="btn btn-primary">基本情報更新</a>
                <a href="{{ route('progress.edit', [$construction->id]) }}" class="btn btn-primary">進捗情報更新</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container">
        <div class="center-block">
            {{ $constructions->links() }}
        </div>
    </div>
@endsection