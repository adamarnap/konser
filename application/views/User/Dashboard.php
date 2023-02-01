    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 1000px; background-image: url(<?php echo base_url();?>/assets/img/theme/3.jpg); background-size: cover; background-position: center top;">

            <h1 class="display-1 text-orange"><b>Selamat Datang di Website</b></h1>
            <h1 class="display-2 text-orange"><b>Ticket KonShare Kito</b></h1>
            <h2 class="display-5 text-orange ">Harap Bekerja secara profesional, disiplin, jujur, tekun, amanah, dan bijaksana. Pelanggan Puas, Admin Senang</h2>
            </p>

    
    
    <!-- Mask -->
      <span class="mask bg-gradient-primary opacity-1"></span>
      <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
          <div class="">
          </div>
        </div>
    </div>

        <div class="header-body text-center mb-7">
        <div class="section-body">
        <div class="row justify-content-center">
            <div class=" col-lg-6 col-md-8 mt-5 px-5">
              <span id="event"><h1 class="text-black"><b>DAFTAR TIKET<b></h1></span>
              <h2 class="text-lead text-dark"><b>Segera miliki tiket konser kesayangan anda !</b></h2>
        </div>
        </div>
        </div>

    <div class="row">
                <?php foreach($tiket as $kegiatan) { ?>
                  <a href="<?php echo site_url('User/Beli_Tiket/'. $kegiatan->id_tiket);?>">
                <div class="col-12 col-md-4 col-lg-4">
                  <article class="article article-style-c">
                    <div class="card" style="width: 20rem;">
                      <img class="card-img-top" src="<?php echo base_url().'/gambartiket/'.$kegiatan->gambar ?>" width="100" alt="Card image cap">
                        <div class="card-body">
                        <b><?php echo $kegiatan->nama_tiket ?></b><br><br>
                          <p class="card-text" style="color:red;">
                         
                          <?php echo  "Harga Rp." ?><?php echo  $kegiatan->harga ?>

                          <?php echo  "(" ?>
                          <b><?php echo  "Stok " ?><?php echo  $kegiatan->stok ?></b>
                          <?php echo  ")" ?><br><br>                      
                        
                        </p>
                        
                        <small style="color:black;"><?php echo  $kegiatan->deskripsi_tiket ?></small>
                        </div>
                    </div>
                  </article>  
                </div>
                  </a>
                <?php } ?>
              </div>

