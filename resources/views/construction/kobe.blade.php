<div class="form-group row">
    <div class="{{ config('const.form-width') }}">
        <label for="kobeInquestReqDate">調査依頼提出日</label>
        <input type="date" class="form-control" id="kobeInquestReqDate" name="kobe_inquest_req_date" value="{{ $construction->kobe_inquest_req_date }}">
    </div>
</div>
<div class="form-group row">
    <div class="{{ config('const.form-width') }}">
        <label for="bonus">補助金額</label>
        <input type="text" class="form-control" id="kobeBonus" name="kobe_bonus" value="{{ $construction->kobe_bonus }}">
    </div>
    <div class="{{ config('const.form-width') }}">
        <label for="kobeInquestReqDate">改善工事申請提出日</label>
        <input type="date" class="form-control" id="kobeBetterReqDate" name="kobe_better_req_date" value="{{ $construction->kobe_better_req_date }}">
    </div>
</div>
<div class="form-group row">
    <div class="{{ config('const.form-width') }}">
        <label for="kobePicDate">改善工事完了届提出日</label>
        <input type="date" class="form-control" id="kobePicDate" name="kobe_pic_date" value="{{ $construction->kobe_pic_date }}">
    </div>
    <div class="{{ config('const.form-width') }}">
        <label for="kobeDemandDate">改善工事請求書提出日</label>
        <input type="date" class="form-control" id="kobeDemandDate" name="kobe_demand_date" value="{{ $construction->kobe_demand_date }}">
    </div>
</div>
<br/>