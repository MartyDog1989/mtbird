@extends('layouts.app')

@section('content')
    <form action="{{ action('ProgressController@store') }}" method="post">
    {{ csrf_field() }}
        <input type="text" name="construction_id" value="{{ $construction->id }}" />
        <div class="form-group">
            <label for="inpuestDateInput">調査日</label>
            <input type="date" class="form-control" id="inpuestDateInput" name="inpuest_date">
        </div>
        <div class="form-group">
            <label for="uRequestedDateInput">水道内部申請日</label>
            <input type="date" class="form-control" id="uRequestedDateInput" name="u_requested_date">
        </div>
        <div class="form-group">
            <label for="dRequestedDateInput">下水内部申請日</label>
            <input type="date" class="form-control" id="dRequestedDateInput" name="d_requested_date">
        </div>
        <div class="form-group">
            <label for="uOccupancyDateInput">水道道路占用申請日</label>
            <input type="date" class="form-control" id="uOccupancyDateInput" name="u_occupancy_date">
        </div>
        <div class="form-group">
            <label for="dOccupancyDateInput">下水道路占用申請日</label>
            <input type="date" class="form-control" id="dOccupancyDateInput" name="d_occupancy_date">
        </div>
        <div class="form-group">
            <label for="uPermissionDateInput">水道道路使用申請日</label>
            <input type="date" class="form-control" id="uPermissionDateInput" name="u_permission_date">
        </div>
        <div class="form-group">
            <label for="dPermissionDateInput">下水道路使用申請日</label>
            <input type="date" class="form-control" id="dPermissionDateInput" name="d_permission_date">
        </div>
        <div class="form-group">
            <label for="uRoadworksDateInput">水道道路工事日</label>
            <input type="date" class="form-control" id="uRoadworksDateInput" name="u_roadworks_date">
        </div>
        <div class="form-group">
            <label for="dRoadworksDateInput">下水道路工事日</label>
            <input type="date" class="form-control" id="dRoadworksDateInput" name="d_roadworks_date">
        </div>
         <div class="form-group">
            <label for="uInspectedDateInput">水道検査日</label>
            <input type="date" class="form-control" id="uInspectedDateInput" name="u_inspected_date">
        </div>
        <div class="form-group">
            <label for="dInspectedDateInput">下水検査日</label>
            <input type="date" class="form-control" id="dInspectedDateInput" name="d_inspected_date">
        </div>
        <div class="form-group">
            <label for="uPictureDateInput">水道写真提出日</label>
            <input type="date" class="form-control" id="dPictureDateInput" name="u_picture_date">
        </div>
        <div class="form-group">
            <label for="dPictureDateInput">下水写真提出日</label>
            <input type="date" class="form-control" id="dPictureDateInput" name="d_picture_date">
        </div>
        <div class="form-group">
            <div>請求</div>
            <label for="demandflgCheck">請求済</label>
            <input type="radio" class="form-control" id="demandFlgCheck" name="demand_flg" value="1">
            <label for="demandflgUnCheck">未請求</label>
            <input type="radio" class="form-control" id="demandFlgUnCheck" name="demand_flg" value="0" checked="checked">
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">一覧に戻る</a>
    </form>
@endsection