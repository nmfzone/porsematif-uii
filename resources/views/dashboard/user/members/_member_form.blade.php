<div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Nim</label>

    <div class="col-md-6">
        @yield('input_nim')

        @if ($errors->has('nim'))
            <span class="help-block">
                <strong>{{ $errors->first('nim') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Nama</label>

    <div class="col-md-6">
        @yield('input_name')

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">E-Mail</label>

    <div class="col-md-6">
        @yield('input_email')

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('generation') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Angkatan</label>

    <div class="col-md-6">
        @yield('input_generation')

        @if ($errors->has('generation'))
            <span class="help-block">
                <strong>{{ $errors->first('generation') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">No. Handphone</label>

    <div class="col-md-6">
        @yield('input_phone')

        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Posisi</label>

    <div class="col-md-6">
        <select class="form-control" name="position">
            @yield('input_position')
        </select>

        @if ($errors->has('position'))
            <span class="help-block">
                <strong>{{ $errors->first('position') }}</strong>
            </span>
        @endif
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
