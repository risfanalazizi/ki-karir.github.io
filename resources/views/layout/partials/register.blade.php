<div class="modal fade" id="registerModal">
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
                    <div class="row mb-4">
                        <div class="col">
                            <label class="" for="">Nama Depan</label>
                            <input type="text" class="form-control" id="firstName" placeholder="your firstName">
                        </div>
                        <div class="col mb-3">
                            <label class="" for="">Nama Belakang</label>
                            <input type="text" class="form-control" id="lastName" placeholder="your lastName">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="">Alamat Surel</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                    </div>
                    <div class="mb-3">
                        <select name="" id="gender" class="form-control">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="">Unggah CV/Resume anda</label>
                        <input type="file" class="form-control" id="cv">
                    </div>
                    <div class="mb-2">
                        <label for="">Ringkasan tentang diri anda</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Describe yorurself" id="floatingTextarea">
                        </textarea>
                    </div>
                    <hr class="my-3">
                    <div class="form-group mb-4">
                        <label class="mb-2" for="">Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Password">
                            <span class="input-group-text">
                                <i class="far fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="mb-2" for="">Konfirmasi Kata Sandi</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Password">
                            <span class="input-group-text">
                                <i class="far fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <button class="btn bg-primary rounded-pill w-100 py-2 text-white mb-4">
                    LANJUTKAN REGISTRASI
                </button>
            </div>
            <div class="modal-footer">
                <p class="text-center w-100">Sudah memiliki akun?
                    <span class="text-primary" role="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login disini
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>