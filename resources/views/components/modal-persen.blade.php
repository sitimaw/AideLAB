<div class="modal fade" id="modal-persen" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-aidelab">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Persentase Nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('praktikum.persen', session('slug_matakuliah')) }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id_praktikum" value="{{ $praktikum }}">
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="absen">Kehadiran</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="absen" value="{{ $absen }}" name="absen"
                                    autocomplete="off">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" disabled>%</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 form-group">
                            <label for="uts">UTS</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="uts" value="{{ $uts }}" name="uts"
                                    autocomplete="off">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" disabled>%</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="tugas">Tugas</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="tugas" value="{{ $tugas }}" name="tugas"
                                    autocomplete="off">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" disabled>%</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 form-group">
                            <label for="uas">UAS</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="uas" value="{{ $uas }}" name="uas"
                                    autocomplete="off">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" disabled>%</button>
                                </div>
                            </div>
                        </div>
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
