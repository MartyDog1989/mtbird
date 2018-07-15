@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $construction->city }}{{ $construction->address }}</h1>
    <form action="{{ action('ProgressController@update', $construction) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <input type="hidden" name="id" value="{{ $progress->id }}">
        @if ($construction->kobe_betterment_flg)
            @include('construction.kobe')
        @endif
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label>調査日</label>
                <input type="date" class="form-control" id="inquestDateInput" name="inquest_date" value="{{ $progress->inquest_date }}">
            </div>
        </div>
        <br/>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label>水道内部申請日</label>
                <input type="date" class="form-control" id="uRequestedDateInput" name="u_requested_date" value="{{ $progress->u_requested_date }}">
            </div>
            <div class="{{ config('const.form-width') }}">
                <label>水道道路占用申請日</label>
                <input type="date" class="form-control" id="uOccupancyDateInput" name="u_occupancy_date" value="{{ $progress->u_occupancy_date }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label>水道道路使用申請日</label>
                <input type="date" class="form-control" id="uPermissionDateInput" name="u_permission_date" value="{{ $progress->u_permission_date }}">
            </div>
            <div class="{{ config('const.form-width') }}">
                <label>水道道路工事日</label>
                <input type="date" class="form-control" id="uRoadworksDateInput" name="u_roadworks_date" value="{{ $progress->u_roadworks_date }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label>水道検査日</label>
                <input type="date" class="form-control" id="uInspectedDateInput" name="u_inspected_date" value="{{ $progress->u_inspected_date }}">
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="uPictureDateInput">水道写真提出日</label>
                <input type="date" class="form-control" id="dPictureDateInput" name="u_picture_date" value="{{ $progress->u_picture_date }}">
            </div>
        </div>
        <br/>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="dRequestedDateInput">下水内部申請日</label>
                <input type="date" class="form-control" id="dRequestedDateInput" name="d_requested_date" value="{{ $progress->d_requested_date }}">
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="dOccupancyDateInput">下水道路占用申請日</label>
                <input type="date" class="form-control" id="dOccupancyDateInput" name="d_occupancy_date" value="{{ $progress->d_occupancy_date }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="dPermissionDateInput">下水道路使用申請日</label>
                <input type="date" class="form-control" id="dPermissionDateInput" name="d_permission_date" value="{{ $progress->d_permission_date }}">
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="dRoadworksDateInput">下水道路工事日</label>
                <input type="date" class="form-control" id="dRoadworksDateInput" name="d_roadworks_date" value="{{ $progress->d_roadworks_date }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="dInspectedDateInput">下水検査日</label>
                <input type="date" class="form-control" id="dInspectedDateInput" name="d_inspected_date" value="{{ $progress->d_inspected_date }}">
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="dPictureDateInput">下水写真提出日</label>
                <input type="date" class="form-control" id="dPictureDateInput" name="d_picture_date" value="{{ $progress->d_picture_date }}">
            </div>
        </div>
        <div>請求</div>
        <div class="radio">
            <label>
                <input type="radio" id="demandFlgCheck" name="demand_flg" value="1" {{ $progress->demand == 1 ? 'checked' : null }}>請求済
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" id="demandFlgUnCheck" name="demand_flg" value="0" {{ $progress->demand == 0 ? 'checked' : null }}>未請求
            </label>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">一覧に戻る</a>
    </form>
</div>
@endsection