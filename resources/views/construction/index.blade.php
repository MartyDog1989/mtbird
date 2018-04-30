@extends('layouts.app')

@section('content')
    <h1>現場一覧</h1>
    <p><a href="{{ route('constructions.create') }}" class="btn btn-primary">新規追加</a></p>
    @foreach ($constructions as $construction)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">現場住所：{{$construction->city}}{{$construction->address}}</h4>
                <h6 class="card-title">担当者：{{$construction->personnel}}</h6>
                <h6 class="card-title">申請日：{{$construction->u_requested_date}}</h6>
            </div>
        </div>
    @endforeach
@endsection