<div class="container-fluid pasienTambah">
    <div class="row">
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienRegis.svg' ?>" alt="..." class="img-thumbnail" style="width: 250px; height: 250px;" >
        </div>

        <div class="col daftar">
            <h3>Tambah Data Dokter</h3>
            <form action="<?php base_url(); ?>C_dokter/add_dokter?>" method="post">
            <div class="form-group">
                <label for="DokterBaru">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" >
            </div>
            <div class="form-group">
                <label for="DokterBaru">Spesialis</label>
                <input type="text" name="spesialis"class="form-control" id="spesialis">
            </div>
            <div class="form-group">
                <label for="DokterBaru">KTP</label>
                <input type="text" name="ktp"class="form-control" id="ktp">
            </div>
            <div class="form-group">
                <label for="DokterBaru">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" >
            </div>
            <div class="form-group">
                <label for="DokterBaru">TTL</label>
                <input type="text" name="lahir" class="form-control" id="lahir" >
            </div>
            <div class="form-group">
                <label for="DokterBaru">No Hp</label>
                <input type="text" name="nohp" class="form-control" id="nohp" >
            </div>
            <div class="form-group">
                    <label for="DokterBaru">Foto</label>
                    <input type="file" class="form-control-file" id="Foto" name="profile_pic">
            </div>
            <div class="tombol">
                <button type="submit" class="btn btn-warning float-right" style="width: 150px">Tambahkan</button>
                <a href="<?php echo base_url(); ?>" class="btn btn-outline-warning float-right mr-2">Kembali</a>
            </div>
            </form>
        </div>

    </div>
</div>