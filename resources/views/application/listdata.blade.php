        @extends('layout.main')
        @section('content')
            <div class="content">
                <div class="d-flex justify-content-between mx-5 mt-5">

                    <div class="w-100 me-4">
                        <h5 class="fw-bold">
                            <i class="fas fa-arrow-left me-2"></i>
                            DAFTAR INVENTARIS
                        </h5>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fas fa-magnifying-glass"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Cari inventoris"
                                            class="form-control">

                                    </div>
                                </div>

                            </div>
                            <div class="col-6">
                                <a class="btn btn-light"><i class="fas fa-filter"></i>Filter</a>
                                <a class="btn btn-light"><i class="fas fa-trash"></i></a>

                            </div>

                            <div class="col-2 justify-content-end">
                                <a class="btn btn-dark"><i class="fas fa-add"></i>Tambah Aset</a>
                            </div>

                        </div>

                        {{-- form pemcarian --}}
                        {{-- <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari inventoris" class="form-control">
                            <span class="input-group-text">
                                <i class="fas fa-magnifying-glass"></i>
                            </span>
                        </div>
                    </div> --}}


                        <table class="table table-striped table-hover">

                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Aset</th>
                                    <th scope="col">List Aset</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><input class="form-check-input mt-0" type="checkbox"></th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>5000</td>
                                    <td> <span class="btn btn-sm btn-outline-success">aktif</span></td>
                                    <td>
                                        <a class="btn btn-dark"><i class="fas fa-pencil"></i></a>|
                                        <a class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><input class="form-check-input mt-0" type="checkbox"></th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>5000</td>
                                    <td> <span class="btn btn-sm btn-outline-success">aktif</span></td>
                                    <td>
                                        <a class="btn btn-dark"><i class="fas fa-pencil"></i></a>|
                                        <a class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><input class="form-check-input mt-0" type="checkbox"></th>
                                    <td colspan="2">Larry the Bird</td>

                                    <td>5000</td>
                                    <td> <span class="btn btn-sm btn-outline-success">aktif</span></td>
                                    <td>
                                        <a class="btn btn-dark"><i class="fas fa-pencil"></i></a>|
                                        <a class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            </div>
        @endsection
