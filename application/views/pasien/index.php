<div class="container pasien">
    <div class="row ">
        <div class="col-12 col-sm-6 ">
            <h3>List of Pasien</h3>
            <form class="form-inline" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Ketikan Keyword..." aria-label="Search" size="50px">
                <input class="btn btn-warning my-2 my-sm-2" type="submit" style="">
            </form>
        </div>
     </div>
    <br>
    
    <div class="row">
        <div class="col-md">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">KTP</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                                <td>aku</td>
                                <td>2314151154</td>
                                <td>
                                    <a href="" class="badge badge-warning">detail</a>
                                    <a href="" class="badge badge-success">edit</a>
                                    <a href="" class="badge badge-danger">hapus</a>
                                </td>
                        </tr>
                        <tr>
                            <th>2</th>
                                <td>kamu</td>
                                <td>24115523424</td>
                                <td>
                                    <a href="" class="badge badge-warning">detail</a>
                                    <a href="" class="badge badge-success">edit</a>
                                    <a href="" class="badge badge-danger">hapus</a>
                                </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
        <div class="col-12 col-sm-6 col-md-8 vektor">
            <img src="<?php echo base_url().'assets/img/pasien.svg' ?>" alt="..." class="img-thumbnail">
        </div>
</div>