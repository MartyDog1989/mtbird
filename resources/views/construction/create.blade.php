@extends('layouts.app')

@section('content')
    <h1>現場新規追加</h1>
    <form action="{{ route('constructions.store') }}" method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="cityInput">市町村</label>
            <input type="text" class="form-control" id="cityInput" name="city">
        </div>
        <div class="form-group">
            <label for="addressInput">住所</label>
            <input type="text" class="form-control" id="addressInput" name="address">
        </div> 
        <div class="form-group">
            <label for="personnelInput">元請</label>
            <input type="text" class="form-control" id="personnelInput" name="personnel">
        </div>
        <div class="form-group">
            受注状況
            <input type="radio" class="form-control" id="launchCheck" name="launch" value="1">受注
            <input type="radio" class="form-control" id="launchUnCheck" name="launch" value="0" checked="checked">未受注
        </div>
        <div class="form-group">
            <p>道路工事の有無</p>
            <label for="roadworksflgCheck">有</label>
            <input type="radio" class="form-control" id="roadworksFlgCheck" name="roadworks_flg" value="1">
            <label for="roadworksflgUnCheck">無</label>
            <input type="radio" class="form-control" id="roadworksFlgUnCheck" name="roadworks_flg" value="0" checked="checked">
        </div>
        <button type="submit" class="btn btn-primary">進捗情報登録へ</button>
        <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">一覧に戻る</a>
    </form>
@endsection