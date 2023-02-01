


  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Selamat Datang Di Form Tambah Akun!</h1>
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
            
            

            <form role="form" method="POST" action="<?php echo site_url('Admin/Proses_Tambah'); ?>">

            <center><small>Username</small></center>
            <input class="form-control" placeholder="ID USER" type="hidden" name="id_user" required>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username" required>
                  </div>
                </div>

                <center><small>Nama</small></center>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama" type="text" name="nama_user" required>
                  </div>
                </div>

                <center><small>Nomor Telepon</small></center>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Nomor Ponsel" type="text" name="no_tlp" required>
                  </div>
                </div>

                <center><small>Alamat</small></center>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Alamat" type="text" name="alamat" required>
                  </div>
                </div>

                <center><small>Password</small></center>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i ></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password"name="password" required>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Tambah Data Akun</button>
                </div>
                <div class="col-10 ml-3 text-right">
                  <a href="<?php echo site_url('Login'); ?>" class="text-light" ><small>Sudah Punya Akun ? Masuk ke Halaman LOGIN ?</small></a>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

