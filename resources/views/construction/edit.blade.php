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
                    <input type="radio" id="launchCheck" name="launch"
                        value="1" {{ old('launch', $construction->launch) == 1 ? 'checked' : '' }}>受注
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="launchUnCheck" name="launch"
                        value="0" {{ old('launch', $construction->launch) == 0 ? 'checked' : '' }}>未受注
                </label>
            </div>
        </div>
        <div class="form-group">
            <p>道路工事の有無</p>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="roadworksFlgCheck" name="roadworks_flg" value="1"
                        {{ old('roadworks_flg', $construction->roadworks_flg) == 1 ? 'checked' : null }}>有
                </label>
            </div>
            <div class="radio-inline">
                <label>
                    <input type="radio" id="roadworksFlgUnCheck" name="roadworks_flg" value="0"
                        {{ old('roadworks_flg', $construction->roadworks_flg) == 0 ? 'checked' : null }}>無
                </label>
            </div>
        </div>

        @if ($construction->city == array_keys(config('const.city_code'), '神戸市')[0])
            <div class="form-group">
                <p>改善工事の有無</p>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="kobeBettermentFlgCheck" name="kobe_betterment_flg"
                            value="1" {{ $construction->kobe_betterment_flg == 1 ? 'checked' : null }}>有
                    </label>
                </div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="kobeBettermentFlgUnCheck" name="kobe_betterment_flg"
                            value="0" {{ $construction->kobe_betterment_flg == 0 ? 'checked' : null }}>無
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