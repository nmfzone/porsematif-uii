<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Bukti Pembayaran</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="image" value="{{ old('image') }}">

        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
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
