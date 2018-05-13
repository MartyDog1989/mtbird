@extends('layouts.app')

@section('content')
    <h1>現場更新完了</h1>
    <div class="alert alert-primary" role="alert">
        更新完了しました。
        <a href="{{ route('constructions.index') }}" class="btn btn-primary">一覧に戻る</a>
    </div>
@endsection