<div class="container-fluid pasienTambah">
    <div class="row">
        <div class="col vektor">
            <img src="<?php echo base_url().'assets/img/pasienRegis.svg' ?>" alt="..." class="img-thumbnail">
        </div>

        <div class="col daftar">
            <h3>Ubah Data Pasien</h3>
            <form action="">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" >
            </div>
            <div class="form-group">
                <label for="ktp">No KTP/KK</label>
                <input type="text" name="ktp"class="form-control" id="ktp">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" >
            </div>
            <div class="form-group">
                <label for="lahir">Tempat,Tanggal Lahir</label>
                <input type="text" name="lahir" class="form-control" id="lahir" >
            </div>
            <div class="form-group">
                <label for="nohp">No Hp</label>
                <input type="text" name="nohp" class="form-control" id="nohp" >
            </div>
            <div class="form-group">
                <label for="sosmed">Social Media</label>
                <input type="text" name="sosmed"class="form-control" id="sosmed" >
            </div>
            <div class="form-group">
                <label for="tinggi">Tinggi Badan</label>
                <input type="tinggi" name="tinggi"class="form-control" id="tinggi" >
            </div>
            <div class="form-group">
                <label for="berat">Berat Badan</label>
                <input type="berat" class="form-control" id="berat" >
            </div>
            <div class="tombol">
                <button type="button" class="btn btn-warning float-right " style="width: 150px">Tambahkan</button>
                <a href="" class="btn btn-outline-warning float-right mr-2">Kembali</a>
            </div>
            </form>
        </div>

    </div>
</div>