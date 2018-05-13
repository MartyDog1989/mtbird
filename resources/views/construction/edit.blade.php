@extends('layouts.app')

@section('content')
    <h1>{{ $construction->city }}{{ $construction->address }}</h1>
    <form action="{{ route('constructions.update', [$construction]) }}" method="post">
    {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $construction->id }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="cityInput">市町村</label>
            <input type="text" class="form-control" id="cityInput" name="city" value="{{ $construction->city }}">
        </div>
        <div class="form-group">
            <label for="addressInput">町名、番地</label>
            <input type="text" class="form-control" id="addressInput" name="address" value="{{ $construction->address }}">
        </div> 
        <div class="form-group">
            <label for="personnelInput">担当者</label>
            <input type="text" class="form-control" id="personnelInput" name="personnel" value="{{ $construction->personnel }}">
        </div>
        <div class="form-group">
            受注状況
            <input type="radio" class="form-control" id="launchCheck" name="launch" value="1" {{ $construction->launch == 1 ? 'checked' : null }}>受注
            <input type="radio" class="form-control" id="launchUnCheck" name="launch" value="0" {{ $construction->launch == 0 ? 'checked' : null }}>未受注
        </div>
        <div class="form-group">
            <p>道路工事の有無</p>
            <label for="roadworksflgCheck">有</label>
            <input type="radio" class="form-control" id="roadworksFlgCheck" name="roadworks_flg" value="1" {{ $construction->roadworks_flg == 1 ? 'checked' : null }}>
            <label for="roadworksflgUnCheck">無</label>
            <input type="radio" class="form-control" id="roadworksFlgUnCheck" name="roadworks_flg" value="0" {{ $construction->roadworks_flg == 0 ? 'checked' : null }}>
        </div>
        <div class="form-group">
            <label for="inpuestDateInput">調査日</label>
            <input type="date" class="form-control" id="inpuestDateInput" name="inpuest_date" value="{{ $construction->inpuest_date }}">
        </div>
        <div class="form-group">
            <label for="uRequestedDateInput">水道内部申請日</label>
            <input type="date" class="form-control" id="uRequestedDateInput" name="u_requested_date" value="{{ $construction->u_requested_date }}">
        </div>
        <div class="form-group">
            <label for="dRequestedDateInput">下水内部申請日</label>
            <input type="date" class="form-control" id="dRequestedDateInput" name="d_requested_date" value="{{ $construction->d_requested_date }}">
        </div>
        <div class="form-group">
            <label for="uOccupancyDateInput">水道道路占用申請日</label>
            <input type="date" class="form-control" id="uOccupancyDateInput" name="u_occupancy_date" value="{{ $construction->u_occupancy_date }}">
        </div>
        <div class="form-group">
            <label for="dOccupancyDateInput">下水道路占用申請日</label>
            <input type="date" class="form-control" id="dOccupancyDateInput" name="d_occupancy_date" value="{{ $construction->d_occupancy_date }}">
        </div>
        <div class="form-group">
            <label for="uPermissionDateInput">水道道路使用申請日</label>
            <input type="date" class="form-control" id="uPermissionDateInput" name="u_permission_date" value="{{ $construction->u_permission_date }}">
        </div>
        <div class="form-group">
            <label for="dPermissionDateInput">下水道路使用申請日</label>
            <input type="date" class="form-control" id="dPermissionDateInput" name="d_permission_date" value="{{ $construction->d_permission_date }}">
        </div>
        <div class="form-group">
            <label for="uRoadworksDateInput">水道道路工事日</label>
            <input type="date" class="form-control" id="uRoadworksDateInput" name="u_roadworks_date" value="{{ $construction->u_roadworks_date }}">
        </div>
        <div class="form-group">
            <label for="dRoadworksDateInput">下水道路工事日</label>
            <input type="date" class="form-control" id="dRoadworksDateInput" name="d_roadworks_date" value="{{ $construction->d_roadworks_date }}">
        </div>
         <div class="form-group">
            <label for="uInspectedDateInput">水道検査日</label>
            <input type="date" class="form-control" id="uInspectedDateInput" name="u_inspected_date" value="{{ $construction->u_inspected_date }}">
        </div>
        <div class="form-group">
            <label for="dInspectedDateInput">下水検査日</label>
            <input type="date" class="form-control" id="dInspectedDateInput" name="d_inspected_date" value="{{ $construction->d_inspected_date }}">
        </div>
        <div class="form-group">
            <label for="uPictureDateInput">水道写真提出日</label>
            <input type="date" class="form-control" id="dPictureDateInput" name="u_picture_date" value="{{ $construction->u_picture_date }}">
        </div>
        <div class="form-group">
            <label for="dPictureDateInput">下水写真提出日</label>
            <input type="date" class="form-control" id="dPictureDateInput" name="d_picture_date" value="{{ $construction->d_picture_date }}">
        </div>
        <div class="form-group">
            <div>請求</div>
            <label for="demandflgCheck">請求済</label>
            <input type="radio" class="form-control" id="demandFlgCheck" name="demand_flg" value="1" {{ $construction->demand == 1 ? 'checked' : null }}>
            <label for="demandflgUnCheck">未請求</label>
            <input type="radio" class="form-control" id="demandFlgUnCheck" name="demand_flg" value="0" {{ $construction->demand == 0 ? 'checked' : null }}>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        <a href="{{ action('ConstructionController@index') }}" class="btn btn-primary">一覧に戻る</a>
    </form>
@endsection