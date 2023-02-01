


  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Formulir Toko  Baru</h1>
              <p class="text-lead text-white">Buatlah toko, dan lakukan aktivitas penjualan tiket !</p>
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
            
            

            <form role="form" method="POST" action="<?php echo site_url('User/Proses_Buat_Toko'); ?>">
            <input class="form-control" placeholder="ID Toko" type="hidden" name="id_toko" required>


            <small>ID User</small>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control"  placeholder="ID User" type="text" name="id_user" 
                    value="<?php if($this->session->userdata('id_user')) : ?>
                            <?php echo $this->session->userdata('id_user') ?>
                            <?php endif; ?>" required>
                    </div>
                   </div>

            <small>Nama Toko</small>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama Toko" type="text" name="nama_toko" required>
                  </div>
                </div>



                   <small>Deskripsi Toko</small>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Deskripsi Toko" type="text" name="deskripsi" required>
                  </div>
                </div>

               
                
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Buat Toko</button><br>
                    <?php foreach($toko as $val) { ?>
                      <a href="<?php echo site_url('User/Toko/'. $val['id_toko']); ?>" class="text-light" ><small>Sudah Punya Toko ? Masuk ke Halaman Toko ?</small></a>
                    <?php } ?>          
                 
                  </div>     
                 

              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  