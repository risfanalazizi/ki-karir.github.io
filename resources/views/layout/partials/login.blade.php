<div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header p-2 align-item-start">
                <div class="d-flex flex-column justify-content-center w-100 align-items-center">
                    <img src="{{ url('assets/img/logo.png') }}" width="50px" alt=""/>
                    <h6>Pondok Pesantren Al-Ittihad</h6>
                    <p class="text-secondary">Karangtengah Cianjur</p>
                    <h6>MASUK UNTUK MELANJUTKAN</h6>
                </div>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-4">
                        <label class="mb-2" for="">Alamat Surel</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                    </div>
                    <div class="form-group mb-4">
                        <label class="mb-2" for="">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Password">
                            <span class="input-group-text">
                                <i class="far fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <button class="btn bg-primary rounded-pill w-100 py-2 text-white mb-4">
                    Masuk Sekarang
                </button>
            </div>
            <div class="modal-forter">
                <p class="text-center w-100">Belum memiliki akun?
                    <span class="text-primary" role="button" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Daftar disini
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>