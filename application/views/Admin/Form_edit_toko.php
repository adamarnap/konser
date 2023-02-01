


  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Selamat Datang Di Form Edit Toko!</h1>
              <p class="text-lead text-white">Mohon isikan data yang sesuai</p>
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
            <form role="form" method="POST" action="<?php echo site_url('Admin/Proses_Edit_Toko'); ?>">
   
            
            <input class="form-control" placeholder="ID USER" type="hidden" name="id_toko" value="<?php echo $val->id_toko ?>" required>

            <input class="form-control" placeholder="id_user" type="hidden" name="id_user" value="<?php echo $val->id_user?>" required>

                

                <center><small>Nama Toko</small></center>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama Toko" type="text" name="nama_toko" value="<?php echo $val->nama_toko ?>" required>
                  </div>
                </div>

                <center><small>Deskripsi Toko</small></center>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Deskripsi Toko" type="text" name="deskripsi" value="<?php echo $val->deskripsi ?>" required>
                  </div>
                </div>

                

                <div class="text-center">
                  <button type="submit" class="btn btn-danger my-4">Ubah Data Toko</button>
                </div>
               


                
              </form>
              <?php } ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

