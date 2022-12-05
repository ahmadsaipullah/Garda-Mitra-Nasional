<x-app-layout title="Halaman Gaji">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-0 d-flex align-items-center mt-5 py-5">
                    <div class="card-content">
                        <div class="card-body bawah">
                            <h1 class="welcome mb-4 mt-5">Upload Gaji</h1>
                            <p>Halaman ini untuk upload slip gaji karyawan. Data file yang diupload harus file Excel (.csv)</p>
                            <button type="button" class="btn btn-danger border-0 btn-md ml-auto mt-3"
                                data-bs-toggle="modal" data-bs-target="#uploadFile">Upload File <i
                                    class="fa fa-cloud-upload"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 d-grid align-items-center mt-5 py-4 ms-5">
                    <div class="card-content atas">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/bg-gaji.png') }}" height="416" width="343" alt="H" class="lebar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.gaji.create')

    @include('sweetalert::alert')

</x-app-layout>
