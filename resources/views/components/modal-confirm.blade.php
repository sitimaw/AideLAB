<div class="modal fade" id="modal-confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-aidelab p-3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $pesan }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                @if ($delete == true)
                    <form action="{{ route('matakuliah.materi.delete', ['matakuliah' => session('slug_matakuliah'), 'slug' => $slug]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                @else
                    <button type="button" class="btn btn-primary">Yes</button>
                @endif
            </div>
        </div>
    </div>
</div>