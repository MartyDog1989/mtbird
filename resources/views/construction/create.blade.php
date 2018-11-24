@extends('layouts.app')

@section('content')
<div class="container">
    <h1>現場新規追加</h1>
    <form action="{{ route('constructions.store') }}" method="post">
    {{ csrf_field() }}
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="cityInput">市町村</label>
                    <select class="form-control" name="city" id="cityInput">
                        @foreach (config('const.main_cities') as $city)
                            <option value="{{ $loop->iteration }}">{{ $city }}</option>
                        @endforeach
                    </select>
                {{ $errors->first('city') }}
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="addressInput">住所</label>
                <input type="text" class="form-control" id="addressInput" name="address">
                {{ $errors->first('address') }}
            </div>
        </div> 
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="personnelInput">元請</label>
                <input type="text" class="form-control" id="personnelInput" name="personnel">
                {{ $errors->first('personnel') }}
            </div>
        </div>
        <div class="form-group">
            <p>受注状況</p>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="launchCheck" name="launch" value="1">受注
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="launchUnCheck" name="launch" value="0" checked="checked">未受注
                </label>
            </div>
        </div>
        <div class="form-group">
            <p>道路工事の有無</p>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="roadworksFlgCheck" name="roadworks_flg" value="1">有
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="roadworksFlgUnCheck" name="roadworks_flg" value="0" checked="checked">無
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">進捗情報登録へ</button>
            <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">一覧に戻る</a>
        </div>
    </form>
</div>
@endsection