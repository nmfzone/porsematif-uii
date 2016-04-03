<div class="form-group{{ $errors->has('pembayaran') ? ' has-error' : '' }}">
    <label class="col-md-4 col-sm-4 col-xs-4 control-label">Bukti Pembayaran</label>

    <div class="col-md-6 col-sm-6 col-xs-6 pem_area">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="" class="pem_file_prev" />
        </div>
        <div class="col-sm-9 col-md-9 col-xs-9" id="pem_left">
            <input id="pembayaran" style="display:none;" name="pembayaran" type="file" />
            <input type="text" readonly class="form-control pem_file_name">
        </div>
        <div class="col-sm-3 col-md-3 col-xs-3" id="pem_right">
            <a class="btn btn-info" onclick="$('#pembayaran').click();">Browse</a>
        </div>

        @if ($errors->has('pembayaran'))
            <span class="help-block">
                <strong>{{ $errors->first('pembayaran') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('pem_note') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Catatan</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="pem_note" value="{{ old('pem_note') }}">

        @if ($errors->has('pem_note'))
            <span class="help-block">
                <strong>{{ $errors->first('pem_note') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('surat_pernyataan') ? ' has-error' : '' }}">
    <label class="col-md-4 col-sm-4 col-xs-4 control-label">Surat Pernyataan</label>

    <div class="col-md-6 col-sm-6 col-xs-6 surper_area">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="" class="surper_file_prev" />
        </div>
        <div class="col-sm-9 col-md-9 col-xs-9" id="surper_left">
            <input id="surat_pernyataan" style="display:none;" name="surat_pernyataan" type="file" />
            <input type="text" readonly class="form-control surper_file_name">
        </div>
        <div class="col-sm-3 col-md-3 col-xs-3" id="surper_right">
            <a class="btn btn-info" onclick="$('#surat_pernyataan').click();">Browse</a>
        </div>

        @if ($errors->has('surat_pernyataan'))
            <span class="help-block">
                <strong>{{ $errors->first('surat_pernyataan') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('surper_note') ? ' has-error' : '' }}">
    <label class="col-md-4 control-label">Catatan</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="surper_note" value="{{ old('surper_note') }}">

        @if ($errors->has('surper_note'))
            <span class="help-block">
                <strong>{{ $errors->first('surper_note') }}</strong>
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
