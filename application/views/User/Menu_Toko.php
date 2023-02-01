
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-light py-7 py-lg-10 pt-lg-9">


    
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-light border-0">

            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4 text-primary">
                <h2 style="text-shadow: 3px 2px 5px grey;"><b>SELAMAT DATANG DI MENU TOKO "<?php echo $nama_toko -> nama_toko; ?>"</b></h2>
              </div>


              <div class="row justify-content-center">
                    <?php foreach($toko as $val) { ?>
                    <a href="<?php echo site_url('User/Tiket/'. $val['id_toko']); ?>"> <button type="button" class="btn btn-dark mt-4">TIKET KONSER</button></a><br><br>
                    <?php } ?>      
                </div>
              <div class="row justify-content-center">
                    <a href="<?php echo site_url('User/Riwayat_Pesanan_Toko/'. $val['id_toko']); ?>"><button type="button" class="btn btn-dark mt-4">PENJUALAN TIKET</button></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>