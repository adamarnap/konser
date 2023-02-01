<div class="header-body text-center mb-7">
        <div class="section-body">
        <div class="row justify-content-center">
            <div class=" col-lg-6 col-md-8 mt-5 px-5">
              <span id="event"><h1 class="text-black"><b>SELAMAT TIKET ANDA BERHASIL TERBELI<b></h1></span>
              <h2 class="text-lead text-dark"><b>Silahkan Cetak Tiket Anda!</b></h2>
              <div class="row justify-content-center">
              <?php foreach($tiket as $kegiatan) { ?>
                    <a href="<?php echo site_url('User/Cetak_Tiket/'.$kegiatan->id_tiket); ?>"><button type="button" class="btn btn-warning mt-4">CETAK TIKET</button></a>
             <?php } ?>
             
             </div>
        </div>
        </div>
        </div>
            
            <br><br>
            <div class="row">


                <?php foreach($tiket as $kegiatan) { ?>
                <div class="col-12 col-md-4 col-lg-4">
                  <article class="article article-style-c">
                    <div class="card" style="width: 60rem;">
                      <img class="card-img-top" src="<?php echo base_url().'/gambartiket/'.$kegiatan->gambar ?>" width="100" alt="Card image cap">
                        <div class="card-body">

                        <form role="form" method="POST" action="<?php echo site_url('User/Tambah_Data_Nota/'.$kegiatan->id_tiket); ?>">

                        <b><h1 style="color:brown"><?php echo $kegiatan->nama_tiket ?></h1></b><br>
                          <p class="card-text" style="color:red;">
                         
                          <?php echo  "Harga Rp." ?><?php echo  $kegiatan->harga ?>

                          <?php echo  "(" ?>
                          <b><?php echo  "Stok " ?><?php echo  $kegiatan->stok ?></b>
                          <?php echo  ")" ?><br><br>                      
                        
                        </p> 
                        <?php echo "Detail Tiket";?> <br>                     
                        <small style="color:black;"><?php echo  $kegiatan->deskripsi_tiket ?></small><br><br>

                        <?php echo "ID Tiket";?>
                        <input class="form-control" type="hiden" name="id_tiket" value="<?php echo $kegiatan->id_tiket; ?>" required>
                    
                    
                        <?php echo "Metode Pembayaran";?> 
                            <select name="metode" id="metode"  class="form-control" value="<?php echo $kegiatan->metode; ?>" required>
                                <option value="Saldo_Karcisku">Saldo Karcisku</option>
                                <option value="OVO">OVO/option>
                                <option value="Dana">Dana</option>
                                <option value="Bank">Transfer Bank</option>
                            </select><br>

                        <?php echo "ID User";?>
                        <?php foreach($user as $kegiatans) { ?>
                            <input class="form-control" type="hiden" name="id_user" value="<?php echo $kegiatans->id_user; ?>" required>
                        <?php } ?>
                        
                     
               
                    </form> 

                        </div>
                    </div>
                  </article>  
                </div>
                  </a>
                <?php } ?>


              </div>