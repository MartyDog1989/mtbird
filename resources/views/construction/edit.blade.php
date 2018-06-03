@extends('layouts.app')

@section('content')
    <h1>{{ $construction->city }}{{ $construction->address }}</h1>
    <form action="{{ action('ConstructionController@update', $construction->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{ $construction->id }}">
        <div class="form-group">
            <label for="cityInput">市町村</label>
            <input type="text" class="form-control" id="cityInput" name="city" value="{{ $construction->city }}">
        </div>
        <div class="form-group">
            <label for="addressInput">町名、番地</label>
            <input type="text" class="form-control" id="addressInput" name="address" value="{{ $construction->address }}">
        </div> 
        <div class="form-group">
            <label for="personnelInput">元請</label>
            <input type="text" class="form-control" id="personnelInput" name="personnel" value="{{ $construction->personnel }}">
        </div>
        <p>受注状況</p>
        <div class="radio">
            <label>
                <input type="radio" id="launchCheck" name="launch" value="1" {{ $construction->launch == 1 ? 'checked' : null }}>受注
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" id="launchUnCheck" name="launch" value="0" {{ $construction->launch == 0 ? 'checked' : null }}>未受注
            </label>
        </div>
        <p>道路工事の有無</p>
        <div class="radio">
            <label>
                <input type="radio" id="roadworksFlgCheck" name="roadworks_flg" value="1" {{ $construction->roadworks_flg == 1 ? 'checked' : null }}>有
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" id="roadworksFlgUnCheck" name="roadworks_flg" value="0" {{ $construction->roadworks_flg == 0 ? 'checked' : null }}>無
            </label>
        </div>

        @if ($construction->city == '神戸市')
            <p>改善工事の有無</p>
            <div class="radio">
                <label>
                    <input type="radio" id="kobeBettermentFlgCheck" name="kobe_betterment_flg" value="1" {{ $construction->kobe_betterment_flg == 1 ? 'checked' : null }}>有
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" id="kobeBettermentFlgUnCheck" name="kobe_betterment_flg" value="0" {{ $construction->kobe_betterment_flg == 0 ? 'checked' : null }}>無
                </label>
            </div>
        @endif

        <button type="submit" class="btn btn-primary">更新</button>
        <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">一覧に戻る</a>
    </form>
@endsection