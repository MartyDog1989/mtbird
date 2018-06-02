@extends('layouts.app')

@section('content')
    <h1>現場新規追加完了</h1>
    <div class="alert alert-primary" role="alert">
        新規追加しました。
        <a href="{{ route('constructions.index') }}" class="btn btn-primary">一覧に戻る</a>
    </div>
@endsection