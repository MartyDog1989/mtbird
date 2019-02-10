@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ config('const.city_code')[$construction->city] }}{{ $construction->address }}</h1>
    <form action="{{ action('ConstructionController@update', $construction->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{ $construction->id }}">
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="cityInput">市町村</label>
                {{ Form::select('city', config('const.city_code'), $construction->city,
                    ['class' => 'form-control',
                     'id' => 'cityInput',
                     'value' => old('city')]
                ) }}
                {{ $errors->first('city') }}
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="addressInput">町名、番地</label>
                <input type="text" class="form-control" id="addressInput"
                    name="address" value="{{ old('address', $construction->address) }}">
                {{ $errors->first('address') }}
            </div>
        </div> 
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="personnelInput">元請</label>
                <input type="text" class="form-control" id="personnelInput"
                    name="personnel" value="{{ old('personnel', $construction->personnel) }}">
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

        @if ($construction->city == array_keys(config('const.city_code'), '神戸市')[0])
            <div class="form-group">
                <p>改善工事の有無</p>
                <div class="radio-inline">
                    <label>
                        {{ Form::radio('kobe_betterment_flg', '1', old('kobe_betterment_flg') == '1' ? true : '', [
                            'id' => 'kobeBettermentFlgCheck']) }}有
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        {{ Form::radio('kobe_betterment_flg', '0', old('kobe_betterment_flg', '0') == '0' ? true : '', [
                            'id' => 'kobeBettermentFlgUnCheck']) }}
                    </label>
                </div>
            </div>
        @endif

        <div class="form-group">
            <button type="submit" class="btn btn-primary">更新</button>
            <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">一覧に戻る</a>
        </div>
    </form>
</div>
@endsection