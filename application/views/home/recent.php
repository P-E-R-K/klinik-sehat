<div class="container recent">
<form action="">
    <div class="row">
        <div class="col-3" >
            <h3>Tambah Data</h3>
            <h5 class="mt-2"> List Pasien</h5>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username">
                <div class="input-group-append">
                    <input class="btn btn-outline-primary" type="submit" name="submit"> 
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-5">
            <div class="card" style="width: 600px;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio
                    <button type="button" class="btn btn-dark float-right">Tambahkan</button>
                    </li>
                    <li class="list-group-item">Dapibus ac facilisis in
                    <button type="button" class="btn btn-dark float-right">Tambahkan</button>
                    </li>
                    <li class="list-group-item">Vestibulum at eros
                    <button type="button" class="btn btn-dark float-right">Tambahkan</button>
                    </li>
                </ul>
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

    <div class="row mt-5">
        <div class="col-3" >
            <h5 class="mt-2"> List Dokter</h5>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username">
                <div class="input-group-append">
                    <input class="btn btn-outline-primary" type="submit" name="submit"> 
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 600px;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio
                    <button type="button" class="btn btn-dark float-right">Tambahkan</button>
                    </li>
                    <li class="list-group-item">Dapibus ac facilisis in
                    <button type="button" class="btn btn-dark float-right">Tambahkan</button>
                    </li>
                    <li class="list-group-item">Vestibulum at eros
                    <button type="button" class="btn btn-dark float-right">Tambahkan</button>
                    </li>
                </ul>
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
        <div class="col-5">
            <img src="<?php echo base_url().'assets/img/pasienBerobat.svg' ?>" alt="..." class="img-thumbnail">
        </div>
    </div> 

    <div class="row mt-5">
        <div class="col">
                <h5 for="">Tanggal</h5>
                <input type="text" id="datepicker" class="form-control" placeholder="Tanggal" style="width:400px"><br>
                <button class="btn btn-warning float-right mr-5" type="submit">Simpan</button>
        </div>
        <div class="col-5">
            
        </div>
    </div> 
</form>
</div>