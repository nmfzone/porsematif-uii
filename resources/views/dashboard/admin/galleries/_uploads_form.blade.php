<div class="form-group{{ $errors->has('years') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Tahun</label>

    <div class="col-md-6 col-sm-6 col-xs-6 col-centered">
        <input type="text" class="form-control" name="years" value="{{ old('years') }}">

        @if ($errors->has('years'))
            <span class="help-block">
                <strong>{{ $errors->first('years') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Catatan</label>

    <div class="col-md-6 col-sm-6 col-xs-6 col-centered">
        <input type="text" class="form-control" name="note" value="{{ old('note') }}">

        @if ($errors->has('note'))
            <span class="help-block">
                <strong>{{ $errors->first('note') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('galleries') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Foto</label>

    <div class="col-md-6 col-sm-6 col-xs-6 galleries_area col-centered">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="" class="galleries_prev" />
        </div>
        <div class="col-sm-9 col-md-9 col-xs-9" id="gal_left">
            <input id="galleries" style="display:none;" name="galleries" type="file" />
            <input type="text" readonly class="form-control galleries_name">
        </div>
        <div class="col-sm-3 col-md-3 col-xs-3" id="gal_right">
            <a class="btn btn-info" onclick="$('#galleries').click();">Browse</a>
        </div>

        @if ($errors->has('galleries'))
            <span class="help-block">
                <strong>{{ $errors->first('galleries') }}</strong>
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
