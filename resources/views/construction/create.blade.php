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
                {{ Form::text('address', old('address'), [
                    'id' => 'addressInput',
                    'class' => 'form-control']) }}
                {{ $errors->first('address') }}
            </div>
        </div> 
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="personnelInput">元請</label>
                {{ Form::text('personnel', old('personnel'), [
                    'id' => 'personnel',
                    'class' => 'form-control']) }}
                {{ $errors->first('personnel') }}
            </div>
        </div>
        <div class="form-group">
            <p>受注状況</p>
            <div class="radio-inline">
                <label>
                    {{ Form::radio('launch', '1', old('launch') == '1' ? true : '', [
                        'id' => 'launchCheck']) }}受注
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    {{ Form::radio('launch', '0', old('launch', '0') == '0' ? true : '', [
                        'id' => 'launchUnCheck']) }}未受注
                </label>
            </div>
        </div>
        <div class="form-group">
            <p>道路工事の有無</p>
            <div class="radio-inline">
                <label>
                    {{ Form::radio('roadworks_flg', '1', old('roadworks_flg') == '1' ? true : '', [
                        'id' => 'roadworksFlgCheck']) }}有
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    {{ Form::radio('roadworks_flg', '0', old('roadworks_flg', '0') == '0' ? true : '', [
                        'id' => 'roadworksFlgUnCheck']) }}無
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