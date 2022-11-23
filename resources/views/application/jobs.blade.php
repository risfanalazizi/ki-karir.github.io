@include('layout.partials.jobform')
@extends('layout.main')

@section('content')
    <div class="content">
        <div class="d-flex justify-content-between mx-5 mt-5">
            <div>
                <h5 class="fw-bold">
                    <i class="fas fa-arrow-left me-2"></i>
                    DAFTAR LOWONGAN PEKERJAAN
                </h5>
            </div>
            <div>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            Lowongan
                        </li>
                        <li class="breadcrumb-item active">
                            Daftar Lowongan
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="mx-5 mt-4">
            <p>Cari Pekerjaan yang Cocok dengan Anda</p>
        </div>
        <div class="d-flex mt-2 px-5">
            <div class="w-75 me-4">
                <div class="form-group mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Pekerjaan">
                        <span class="input-group-text">
                            <i class="fas fa-magnifying-glass"></i>
                        </span>
                    </div>
                </div>
                <x-jobcard>
                </x-jobcard>
                <x-jobcard>
                </x-jobcard>
                <x-jobcard>
                </x-jobcard>
                <x-jobcard>
                </x-jobcard>
                <div class="bg-light d-flex justify-content-around py-2" role="button">
                    Lihat Lowongan Lainnya
                </div>
            </div>
            <div>

                <button class="btn bg-primary rounded-pill px-5 text-white" style="width: 350px;" data-bs-toggle="modal"
                    data-bs-target="#formModal"><i class="fas fa-plus me-2">
                        Tambah Lowongan</i>
                </button>
                <div class="mt-5 p-4 bg-light rounded">
                    <h5 class="fw-bold">Filter</h5>
                    <form action="" class="mt-3">
                        <div class="mb-3">
                            <label for="relevansi" class="form-label">Urutkan Menurut</label>
                            <select name="" class="form-select" id="">
                                <option selected>Relevansi</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="typePekerjaan" class="form-label">
                                Tipe Pekerjaan
                            </label>
                            <select name="" class="form-select" id="">
                                <option selected>Purna Waktu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="area" class="form-label">Area</label>
                            <select name="" class="form-select mb-3" id="">
                                <option selected>Negara</option>
                                <option value="1">Paris</option>
                                <option value="2">Dubai</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                            </select>
                            <select name="" class="form-select mb-3" id="">
                                <option selected>Provinsi</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                            </select>
                            <select name="" class="form-select mb-3" id="">
                                <option selected>Semua Area</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="kategori" class="form-label">Kategori</label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="" value=""
                                    id="flexCheckChecked">
                                <label for="flexCheckChecked" class="form-check-label">Informasi Teknologi</label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="" value=""
                                    id="flexCheckChecked">
                                <label for="flexCheckChecked" class="form-check-label">Desain & Kreatif</label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="" value=""
                                    id="flexCheckChecked">
                                <label for="flexCheckChecked" class="form-check-label">Penjualan & Pemasaran</label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="" value=""
                                    id="flexCheckChecked">
                                <label for="flexCheckChecked" class="form-check-label">Akuntansi</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
