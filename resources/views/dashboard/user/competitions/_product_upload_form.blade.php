@if ($product != null)
    <div class="alert alert-danger text-center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        Setiap upload baru akan me-replace file sebelumnya pada kompetisi yang sama.
    </div>
@endif
<div class="form-group{{ $errors->has('competition_id') ? ' has-error' : '' }}">
    <label class="col-md-4 col-sm-4 col-xs-4 control-label">Pilih Kompetisi</label>

    <div class="col-md-6">
        <select class="form-control" name="competition_id">
            @foreach($competitions as $competition)
                <option value="{{ $competition->id }}">{{ $competition->name }}</option>
            @endforeach
        </select>

        @if ($errors->has('competition_id'))
            <span class="help-block">
                <strong>{{ $errors->first('competition_id') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('karya') ? ' has-error' : '' }}">
    <label class="col-md-4 col-sm-4 col-xs-4 control-label">Karya</label>

    <div class="col-md-6 col-sm-6 col-xs-6 karya_area">
        <div class="col-sm-9 col-md-9 col-xs-9" id="karya_left">
            <input id="karya" style="display:none;" name="karya" type="file" />
            <input type="text" readonly class="form-control karya_file_name">
        </div>
        <div class="col-sm-3 col-md-3 col-xs-3" id="karya_right">
            <a class="btn btn-info" onclick="$('#karya').click();">Browse</a>
        </div>

        @if ($errors->has('karya'))
            <span class="help-block">
                <strong>{{ $errors->first('karya') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('karya_note') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Catatan</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="karya_note" value="{{ old('karya_note') }}">

        @if ($errors->has('karya_note'))
            <span class="help-block">
                <strong>{{ $errors->first('karya_note') }}</strong>
            </span>
        @endif
    </div>
</div>

{!! csrf_field() !!}

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i> Upload
        </button>
    </div>
</div>
