<div class="modal fade" id="modal-profil" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-aidelab text-aidelab p-2">
            <div class="modal-header">
                <h2 class="modal-title" id="staticBackdropLabel">My Profil</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>Nama : {{ $auth->nama }}</div>
                <div>{{ $status }} : {{ $auth->nip ?? $auth->npm }}</div>
                <div>Email : {{ $auth->email }}</div>
                <div>No. HP : {{ $auth->no_hp }}</div>
            </div>
        </div>
    </div>
</div>