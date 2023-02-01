
            <div class="row">


                <center><?php foreach($tiket as $kegiatan) { ?>
                <div class="col-12 col-md-4 col-lg-4">
                  <article class="article article-style-c">
                    <div class="card" style="width: 60rem;">
                      <img class="card-img-top" src="<?php echo base_url().'/gambartiket/'.$kegiatan->gambar ?>" width="500" alt="Card image cap">
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
                    
                    <br>
                        <?php echo "Metode Pembayaran";?> 
                            <select name="metode" id="metode"  class="form-control" value="<?php echo $kegiatan->metode; ?>" required>
                                <option value="Saldo_Karcisku">Saldo Karcisku</option>
                                <option value="OVO">OVO/option>
                                <option value="Dana">Dana</option>
                                <option value="Bank">Transfer Bank</option>
                            </select><br>

                       
                        
                     
               
                    </form> 

                        </div>
                    </div>
                  </article>  
                </div>
                  </a>
                <?php } ?>
                    <script type="text/javascript">
                        window.print();
                    </script>


              </div>