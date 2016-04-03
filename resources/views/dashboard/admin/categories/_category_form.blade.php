<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Nama Kompetisi</label>

    <div class="col-md-6">
        @yield('input_name')

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Tipe Kompetisi</label>

    <div class="col-md-6">
        <select class="form-control" name="type">
            @yield('type')
        </select>
    </div>
</div>

{!! csrf_field() !!}

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i> @yield('submit_message')
        </button>
    </div>
</div>
