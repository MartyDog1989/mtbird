@extends('layouts.app')

@section('content')
    <h1>現場一覧</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('constructions.create') }}" class="btn btn-primary">新規追加</a>
                <a href="{{ action('ConstructionController@launchList', '1') }}" class="btn btn-primary">受注現場</a>
            </div>
        </div>
        <div class="row" style="padding:10px 0 0 0">
            <div class="col-md-8">
                <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">全市町村</a>
                @foreach (config('const.main_cities') as $city)
                    <a href="{{ action('ConstructionController@cityList', $city) }}" class="btn btn-primary">{{ $city }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div style="padding:10px 0 0 0"></div>

    <div class="container">
        @foreach ($constructions as $construction)
        <div class="panel panel-default">
            <div class="panel-heading">
                現場住所：{{$construction->city}}{{$construction->address}}
            </div>
            <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>元請</th>
                        <th>調査日</th>
                        <th>水道申請日</th>
                        <th>下水申請日</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$construction->personnel}}</td>
                        <td>{{$construction->inquest_date}}</td>
                        <td>{{$construction->u_requested_date}}</td>
                        <td>{{$construction->d_requested_date}}</td>
                    </tr>
                </tbody>
            </table>
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