


  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Formulir Upload Tiket Baru</h1>
              <p class="text-lead text-white">Mulailah Transaksi dengan mengunggah tiket anda !</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">

            <div class="card-body px-lg-5 py-lg-5">
            
            
            <?php foreach($toko as $val) { ?>
            <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo site_url('User/Proses_Upload_Tiket/'. $val['id_toko']); ?>">
            <input class="form-control" placeholder="ID Toko" type="hidden" name="id_toko" required>


            <small>ID Toko</small>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    
                    <input class="form-control"  placeholder="ID User" type="text" name="id_toko"                     
                      value="<?php echo $val['id_toko']; ?>">
                    <?php } ?>
                    </div>
                   </div>

            <small>Nama Tiket</small>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Isikan Dengan Judul Tiket" type="text" name="nama_tiket" required>
                  </div>
                </div>



            <small>Harga Tiket</small>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Harga Tiket" type="text" name="harga" required>
                  </div>
                </div>

            <small>Stok Tiket</small>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Stok Tiket" type="text" name="stok" required>
                  </div>
                </div>

            <small>Deskripsi Tiket</small>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Deskripsi Tiket" type="text" name="deskripsi_tiket" required>
                  </div>
                </div>

            <small>Gambar Tiket</small>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Gambar Tiket" type="file" name="gambar" required>
                  </div>
                </div>

               
                
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Upload Tiket</button><br>                
                  </div>     
                 

              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  