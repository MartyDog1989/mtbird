@extends('layouts.app')

@section('content')
    <h1>現場一覧</h1>
    <div>
        <a href="{{ route('constructions.create') }}" class="btn btn-primary">新規追加</a>
        <a href="{{ action('ConstructionController@launchList', '1') }}" class="btn btn-primary">受注現場</a>
    </div>
    <div>
        <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">全市町村</a>
        @foreach (config('const.main_cities') as $city)
            <a href="{{ action('ConstructionController@cityList', $city) }}" class="btn btn-primary">{{ $city }}</a>
        @endforeach
    </div>
    @foreach ($constructions as $construction)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">現場住所：{{$construction->city}}{{$construction->address}}</h4>
                <h6 class="card-title">元請：{{$construction->personnel}}</h6>
                <h6 class="card-title">申請日：{{$construction->u_requested_date}}</h6>
                <a href="{{ route('constructions.edit', [$construction->id]) }}" class="card-link">更新</a>
                <a href="{{ route('constructions.show', [$construction->id]) }}" class="card-link">参照または削除</a>
            </div>
        </div>
    @endforeach
    {{ $constructions->links() }}
@endsection