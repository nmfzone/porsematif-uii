<div class="form-group{{ $errors->has('competition') ? ' has-error' : '' }}">
    <div class="col-md-8 col-centered">
        <div class="col-md-6">
            <h4>Kompetisi Eksternal</h4>
            @foreach($exsternal_competitions as $competition)
                @if(in_array($competition->id, $user_registered_competitions))
                    <div class="checkbox">
                        <label><input type="checkbox" name="competition[]" checked value="{{ $competition->id }}">{{ $competition->name }}</label>
                    </div>
                @else
                    <div class="checkbox">
                        <label><input type="checkbox" name="competition[]" value="{{ $competition->id }}">{{ $competition->name }}</label>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="col-md-6">
            <h4>Kompetisi Internal</h4>
            @foreach($internal_competitions as $competition)
                @if(in_array($competition->id, $user_registered_competitions))
                    <div class="checkbox">
                        <label><input type="checkbox" name="competition[]" checked value="{{ $competition->id }}">{{ $competition->name }}</label>
                    </div>
                @else
                    <div class="checkbox">
                        <label><input type="checkbox" name="competition[]" value="{{ $competition->id }}">{{ $competition->name }}</label>
                    </div>
                @endif
            @endforeach
        </div>

        @if ($errors->has('competition'))
            <span class="help-block">
                <strong>{{ $errors->first('competition') }}</strong>
            </span>
        @endif
    </div>
</div>

{!! csrf_field() !!}

<div class="form-group">
    <div class="col-md-8 submit-now col-centered">
        <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i> Register
        </button>
    </div>
</div>
