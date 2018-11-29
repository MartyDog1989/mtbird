@extends('layouts.app')

@section('content')
<div class="container">
    <h1>現場新規追加</h1>
    <form action="{{ route('constructions.store') }}" method="post">
    {{ csrf_field() }}
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="cityInput">市町村</label>
                {{ Form::select('city', config('const.city_code'), null,
                    ['class' => 'form-control', 'id' => 'cityInput', 'value' => old('city')]) }}
                {{ $errors->first('city') }}
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="addressInput">住所</label>
                <input type="text" class="form-control" id="addressInput" name="address" value="{{ old('address')}}">
                {{ $errors->first('address') }}
            </div>
        </div> 
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="personnelInput">元請</label>
                <input type="text" class="form-control" id="personnelInput" name="personnel"
                    value="{{ old('personnel') }}">
                {{ $errors->first('personnel') }}
            </div>
        </div>
        <div class="form-group">
            <p>受注状況</p>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="launchCheck" name="launch" value="1"
                        {{ old('launch') == '1' ? 'checked' : '' }}>受注
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="launchUnCheck" name="launch" value="0"
                        {{ old('launch', '0') == '0' ? 'checked' : '' }}>未受注
                </label>
            </div>
        </div>
        <div class="form-group">
            <p>道路工事の有無</p>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="roadworksFlgCheck" name="roadworks_flg"
                        value="1" {{ old('roadworks_flg') == '1' ? 'checked' : '' }}>有
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="roadworksFlgUnCheck" name="roadworks_flg"
                        value="0" {{ old('roadworks_flg', '0') == '0' ? 'checked' : '' }}>無
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