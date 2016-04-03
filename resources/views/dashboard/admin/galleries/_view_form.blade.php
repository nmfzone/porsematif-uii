<div class="row">
<h3>List Foto</h3>
@if (!$galleries->isEmpty())
{{--*/ $i = 0 /*--}}
{{--*/ $show_dv = false /*--}}
@foreach($galleries as $gallery)
    @if ($i == 0)
        {{--*/ $show_dv = true /*--}}
        <div class="col-md-12 col-sm-12 col-xs-12">
    @endif
        <div class="col-md-3 col-sm-3 col-xs-3 col-centered list-images">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <a href="#" class="showImage"><img data-note="{{ $gallery->note }}" data-created="{{ $gallery->created_at }}"  data-width="{{ $gallery->wMoreH }}" id="imageresource" src="{{ asset($gallery->url) }}" width="100%" /></a>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center the-tables">
                <a href="{{ url('/dashboard/protected/galleries/' . $gallery->id) }}" class="btn btn-danger delete-this">Hapus</a>
            </div>
        </div>
    @if ($i == 3)
        {{--*/ $show_dv = false /*--}}
        </div>
    @endif

    {{--*/ $i++ /*--}}

    @if ($i == 4)
        {{--*/ $i = 0 /*--}}
    @endif
@endforeach
@if ($show_dv)
</div>
@endif
@else
    Belum ada gambar gallery yang ditambahkan
@endif
</div>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="imagesModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="imagesModal">Image Preview</h4>
      </div>
      <div class="modal-body text-center">
        <img src="" id="imagepreview" width="" data-width=""><br>
        <small id="imagenote"></small><br>
        <small id="imagecreated"></small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
