<div class="modal fade" id="modal-aturan" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-aidelab">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Aturan Praktikum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('praktikum.aturan', session('slug_matakuliah')) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id_praktikum" value="{{ $praktikum }}">
                    <div class="form-group">
                        <label for="aturan">Aturan:</label>
                        <textarea class="form-control" id="aturan" name="aturan" rows="7"
                            placeholder="Masukkan aturan praktikum" style="resize:none">{{ $aturan }}</textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
