<div class="modal fade" id="modal-jadwal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-aidelab">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Jadwal Praktikum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('praktikum.jadwal', session('slug_matakuliah')) }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id_praktikum" value="{{ $praktikum }}">
                    <div class="px-3">
                        <div class="row d-flex justify-content-between">
                            <div class="col-5 form-group">
                                <label for="hari">Hari</label>
                                <select class="form-control" id="hari" name="hari">
                                    <option disabled selected>Pilih hari</option>
                                    <option value="senin">Senin</option>
                                    <option value="selasa">Selasa</option>
                                    <option value="rabu">Rabu</option>
                                    <option value="kamis">Kamis</option>
                                    <option value="jumat">Jumat</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="ruang">Ruang</label>
                                <select class="form-control" id="ruang" name="ruang">
                                    <option disabled selected>Pilih ruang</option>
                                    <option>Lab. Networking</option>
                                    <option>Lab. Database</option>
                                    <option>Lab. TIK</option>
                                    <option>Lab. SIG</option>
                                </select>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-start">
                            <div class="col-4 form-group">
                                <label for="jam_mulai">Jam Mulai</label>
                                <select class="form-control" id="jam_mulai" name="jam_mulai">
                                    <option disabled selected>--:--</option>
                                    <option>08 : 15</option>
                                    <option>10 : 00</option>
                                    <option>12 : 00</option>
                                    <option>14 : 00</option>
                                    <option>16 : 30</option>
                                </select>
                            </div>
                            <div class="col-4 form-group">
                                <label for="hari">Jam Akhir</label>
                                <select class="form-control" id="jam_akhir" name="jam_akhir">
                                    <option disabled selected>--:--</option>
                                    <option>09 : 55</option>
                                    <option>11 : 40</option>
                                    <option>13 : 40</option>
                                    <option>15 : 40</option>
                                    <option>18 : 10</option>
                                </select>
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
