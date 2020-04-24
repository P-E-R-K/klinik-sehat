<div class="container-fluid pasienTambah">
    <div class="row">
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienRegis.svg' ?>" alt="..." class="img-thumbnail">
        </div>

        <div class="col daftar">
            <h3>Tambah Data Obat</h3>
            <form action="">
                <div class="form-group">
                    <label for="nama">Nama Obat</label>
                    <input type="text" name="nama"class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah" >
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea type="text"class="form-control" id="text" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control-file" id="Foto">
                </div>
                <div class="tombol">
                    <button type="button" class="btn btn-warning float-right " style="width: 150px">Tambahkan</button>
                    <a href="" class="btn btn-outline-warning float-right mr-2">Kembali</a>
                </div>
            </form>
        </div>

    </div>
</div>