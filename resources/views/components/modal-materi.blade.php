<div class="modal fade" id="modal-materi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-aidelab">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{ $header }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route($link, $param) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                        <input type="hidden" name="id_praktikum" value="{{ $praktikum }}">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" value="{{ $judul }}" name="judul" placeholder="Masukkan judul materi" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="file">Upload Materi</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">{{ $tombol }}</button>
                </div>
            </form>
        </div>
    </div>
</div>