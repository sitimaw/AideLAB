<div class="modal fade" id="modal-auth" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content modal-aidelab p-3">
                <div class="d-flex justify-content-center py-5">
                    <a class="btn btn-lg btn-secondary" data-dismiss="modal">Lihat Profil</a>
                </div>
                <div class="separator"> Atau </div>
                <div class="d-flex justify-content-center py-5">
                    <a class="btn btn-lg btn-primary" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>