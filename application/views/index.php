<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="page-title-box">
                <div class="row align-itmes-center">
                    <div class="col-sm-6">
                        <h4 class="page-tittle">Dashboard</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">SIP</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <h5>Status Kelengkapan Data</h5>
                            </div>
                            <div class="col-md-4">
                                <div class="dropdown d-flex justify-content-end">
                                    <a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                        Rincian
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fas fa-check-circle mr-2 text-success"></i>Biodata</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-minus-circle mr-2 text-danger"></i>Ekonomi</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-check-circle mr-2 text-success"></i>Berkas</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-minus-circle mr-2 text-danger"></i>Jurusan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB -->
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-toggle="tab" href="#biodata" role="tab">
                                <span class="d-none d-md-block">Biodata</span><span class="d-block d-md-none"><i class="mdi mdi-home-variant h5"></i></span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#keluarga" role="tab">
                                <span class="d-none d-md-block">Keluarga</span><span class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#ekonomi" role="tab">
                                <span class="d-none d-md-block">Ekonomi</span><span class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#rumah" role="tab">
                                <span class="d-none d-md-block">Rumah</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#aset" role="tab">
                                <span class="d-none d-md-block">Aset</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#prestasi" role="tab">
                                <span class="d-none d-md-block">Prestasi</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#berkas" role="tab">
                                <span class="d-none d-md-block">Berkas</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#rencana" role="tab">
                                <span class="d-none d-md-block">Rencana</span><span class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <img class="img-thumbnail mb-1" alt="200x200" style="width: 200px; height: 200px;" src="assets/images/small/img-3.jpg" data-holder-rendered="true">
                                    <p>
                                        <a class="btn btn-light btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Ubah Foto Profil
                                        </a>
                                    </p>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body p-0">
                                            <input type="file" class="form-control-file m-0 btn-sm">
                                            <button class="btn btn-sm btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                    <button class="btn-sm btn-success mt-3"><i class="fas fa-edit"></i> Ubah Data</button>
                                </div>
                                <div class="col-md-10">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Nomor Induk Siswa Nasional (NISN)</th>
                                                    <td>1177050026</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Nama Siswa</th>
                                                    <td>Dadan</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">NIK</th>
                                                    <td>3210012121000121</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Nomor Kartu Indonesia Sejahtera (KIS)</th>
                                                    <td>3210012121000121</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Nomor Kartu Indonesia Pintar (KIP)</th>
                                                    <td>1231-12121-12221-2222</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Asal Sekolah</th>
                                                    <td>SMK Auliya Teladan Mandiri</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Tahun lulus</th>
                                                    <td>2017</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Tempat Lahir</th>
                                                    <td>Majalengka</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Tanggal Lahir</th>
                                                    <td>05 February 1999</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Jenis Kelamin</th>
                                                    <td>Laki-laki</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Agama</th>
                                                    <td>Islam</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Alamat</th>
                                                    <td>Kp.Cijambe No.19 RT/RW 03/07 Desa Cinunuk Kec.Cileunyi Kab.Bandung Jawa Barat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">Kode Pos</th>
                                                    <td>40624</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">E-Mail</th>
                                                    <td>dadannazril@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" style="width : 40%">No. Telepon/WhatsApp</th>
                                                    <td>085862700701</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
</div>