<div class="container dokter">
    <div class="row">
        <div class="col">
            <h3>List Dokter</h3>
            <a href="<?php echo base_url('index.php/C_dokter/tambah_dokter') ?>" class="btn btn-warning">Tambah Data Dokter</a>
        </div>
    </div>

    <div class="row">
        <div class="col mt-2">
            <form class="form-inline mb-3" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Ketikan Keyword..." aria-label="Search" size="50px">
                <input class="btn btn-warning my-2 my-sm-2" type="submit" style="">
            </form>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col mt-3">
            <div class="card-deck">
                <div class="card">
                    <img src="<?= base_url().'assets/img/1.jpeg'?>" alt="..." class="rounded-circle mt-4">
                    <div class="card-body">
                        <h5 class="card-title" href="" >Dr.Srikandi</h5>
                        <p class="card-text" href="" >Spesialis Jantung</p>
                        <a href="" class="badge badge-danger float-right ml-2">hapus</a>
                        <a href="" class="badge badge-warning float-right ml-2">ubah</a>
                        <a href="" class="badge badge-light float-right ml-2">detail</a>
                    </div>
                </div>
                <div class="card">
                    <img src="<?= base_url().'assets/img/2.jpeg'?>" alt="..." class="rounded-circle mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Joni</h5>
                        <p class="card-text">Spesialis Corona</p>
                        <a href="" class="badge badge-danger float-right ml-2">hapus</a>
                        <a href="" class="badge badge-warning float-right ml-2">ubah</a>
                        <a href="" class="badge badge-light float-right ml-2">detail</a>
                    </div>
                </div>
                <div class="card">
                    <img src="<?= base_url().'assets/img/3.jpeg'?>" alt="..." class="rounded-circle mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Irfan</h5>
                        <p class="card-text">Spesialis Kulit</p>
                        <a href="" class="badge badge-danger float-right ml-2">hapus</a>
                        <a href="" class="badge badge-warning float-right ml-2">ubah</a>
                        <a href="" class="badge badge-light float-right ml-2">detail</a>
                    </div>
                </div>
            </div>
            <nav aria-label="...">
                <ul class="pagination mt-4 justify-content-center">
                    <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active " aria-current="page">
                    <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                    </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>