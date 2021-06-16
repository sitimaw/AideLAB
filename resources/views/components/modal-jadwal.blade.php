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
            <form action="{{ route('kontrak.jadwal', session('slug_matakuliah')) }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id_praktikum" value="{{ $praktikum }}">
                    <div class="px-3">
                        <div class="row d-flex justify-content-between">
                            <div class="col-5 form-group">
                                <label for="hari">Hari</label>
                                <select class="form-control" id="hari" name="hari">
                                    <option disabled selected>Pilih hari</option>
                                    <option value="Senin" {{ $hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                                    <option value="Selasa" {{ $hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                                    <option value="Rabu" {{ $hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                                    <option value="Kamis" {{ $hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                                    <option value="Jumat" {{ $hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <label for="ruang">Ruang</label>
                                <select class="form-control" id="ruang" name="ruang">
                                    <option disabled selected>Pilih ruang</option>
                                    <option value="Lab. Networking" {{ $ruang == 'Lab. Networking' ? 'selected' : '' }}>
                                        Lab. Networking</option>
                                    <option value="Lab. Database" {{ $ruang == 'Lab. Database' ? 'selected' : '' }}>Lab.
                                        Database</option>
                                    <option value="Lab. TIK" {{ $ruang == 'Lab. TIK' ? 'selected' : '' }}>Lab. TIK
                                    </option>
                                    <option value="Lab. SIG" {{ $ruang == 'Lab. SIG' ? 'selected' : '' }}>Lab. SIG
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-start">
                            <div class="col-6 form-group">
                                <label for="jam">Jam</label>
                                <select class="form-control" id="jam" name="jam">
                                    <option disabled selected>--:-- s/d --:--</option>
                                    <option value="08:15:00|09:55:00" {{ $jamMulai == '08:15:00' ? 'selected' : '' }}>
                                        08 : 15 s/d 09 : 55</option>
                                    <option value="10:00:00|11:40:00" {{ $jamMulai == '10:00:00' ? 'selected' : '' }}>
                                        10 : 00 s/d 11 : 40</option>
                                    <option value="12:00:00|13:40:00" {{ $jamMulai == '12:00:00' ? 'selected' : '' }}>
                                        12 : 00 s/d 13 : 40</option>
                                    <option value="14:00:00|15:40:00" {{ $jamMulai == '14:00:00' ? 'selected' : '' }}>
                                        14 : 00 s/d 15 : 40</option>
                                    <option value="16:30:00|18:10:00" {{ $jamMulai == '16:30:00' ? 'selected' : '' }}>
                                        16 : 30 s/d 18 : 10</option>
                                </select>
                            </div>
                            {{-- <div class="col-4 form-group">
                                <label for="hari">Jam Akhir</label>
                                <select class="form-control" id="jam_akhir" name="jam_akhir">
                                    <option disabled selected>--:--</option>
                                    <option id="jam_akhir1">09 : 55</option>
                                    <option id="jam_akhir2">11 : 40</option>
                                    <option id="jam_akhir3">13 : 40</option>
                                    <option id="jam_akhir4">15 : 40</option>
                                    <option id="jam_akhir5">18 : 10</option>
                                </select>
                            </div> --}}
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
