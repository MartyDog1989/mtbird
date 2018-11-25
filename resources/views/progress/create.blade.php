@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ action('ProgressController@store') }}" method="post">
    {{ csrf_field() }}
        <input type="hidden" name="construction_id" value="{{ $construction->id }}" />
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="inpuestDateInput">調査日</label>
                <input type="date" class="form-control" id="inquestDateInput" name="inquest_date">
                {{ $errors->first('inquest_date') }}
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="uRequestedDateInput">水道内部申請日</label>
                <input type="date" class="form-control" id="uRequestedDateInput" name="u_requested_date">
                {{ $errors->first('u_requested_date') }}
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="dRequestedDateInput">下水内部申請日</label>
                <input type="date" class="form-control" id="dRequestedDateInput" name="d_requested_date">
                {{ $errors->first('d_requested_date') }}
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="uOccupancyDateInput">水道道路占用申請日</label>
                <input type="date" class="form-control" id="uOccupancyDateInput" name="u_occupancy_date">
                {{ $errors->first('u_occupancy_date') }}
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="dOccupancyDateInput">下水道路占用申請日</label>
                <input type="date" class="form-control" id="dOccupancyDateInput" name="d_occupancy_date">
                {{ $errors->first('d_occupancy_date') }}
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="uPermissionDateInput">水道道路使用申請日</label>
                <input type="date" class="form-control" id="uPermissionDateInput" name="u_permission_date">
                {{ $errors->first('u_permission_date') }}
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="dPermissionDateInput">下水道路使用申請日</label>
                <input type="date" class="form-control" id="dPermissionDateInput" name="d_permission_date">
                {{ $errors->first('d_permission_date') }}
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="uRoadworksDateInput">水道道路工事日</label>
                <input type="date" class="form-control" id="uRoadworksDateInput" name="u_roadworks_date">
                {{ $errors->first('u_roadworks_date') }}
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="dRoadworksDateInput">下水道路工事日</label>
                <input type="date" class="form-control" id="dRoadworksDateInput" name="d_roadworks_date">
                {{ $errors->first('d_roadworks_date') }}
            </div>
        </div>
         <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="uInspectedDateInput">水道検査日</label>
                <input type="date" class="form-control" id="uInspectedDateInput" name="u_inspected_date">
                {{ $errors->first('u_inspected_date') }}
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="dInspectedDateInput">下水検査日</label>
                <input type="date" class="form-control" id="dInspectedDateInput" name="d_inspected_date">
                {{ $errors->first('d_inspected_date') }}
            </div>
        </div>
        <div class="form-group row">
            <div class="{{ config('const.form-width') }}">
                <label for="uPictureDateInput">水道写真提出日</label>
                <input type="date" class="form-control" id="dPictureDateInput" name="u_picture_date">
                {{ $errors->first('u_picture_date') }}
            </div>
            <div class="{{ config('const.form-width') }}">
                <label for="dPictureDateInput">下水写真提出日</label>
                <input type="date" class="form-control" id="dPictureDateInput" name="d_picture_date">
                {{ $errors->first('d_picture_date') }}
            </div>
        </div>
        <div class="form-group row">
            <div>請求</div>
                <div class="radio-inline">
                    <label>
                        <input type="radio" id="demandFlgCheck" name="demand_flg" value="1">請求済
                    </label>
                </div>
            <div class="radio-inlen">
                <label>
                    <input type="radio" id="demandFlgUnCheck" name="demand_flg" value="0" checked="checked">未請求
                </label>
            </div>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary">更新</button>
        </div>
    </form>
</div>
@endsection