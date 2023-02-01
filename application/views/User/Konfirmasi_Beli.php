
<!-- Light table -->

            <!-- Card header -->
            <?php foreach($tiket as $val) { ?>
            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-black" style = "text-shadow: 3px 2px 5px grey;" ><b>DETAIL TIKET</b></h1></center>
              
        
            </div>
            <?php } ?>     


   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th scope="col" class="sort" >ID Tiket</th>
        <th scope="col" class="sort" >ID Toko</th>
        <th scope="col" class="sort" >Nama Tiket</th>
        <th scope="col" class="sort" >Harga Tiket</th>
        <th scope="col" class="sort">Stok Tiket</th>
        <th scope="col">Deskripsi Tiket</th>
        <th scope="col">Gambar Konser</th>
        
      <!--  <th scope="col">Aksi Hapus</th> -->
      </tr>
    </thead>

   
        
        <tbody class="thead-dark"> 
        <?php $no =1; foreach($tiket as $val) { ?>
                                                      
            <tr>
                <td><?php echo $no++; ?></td>
                <td> <?php echo $val->id_tiket; ?></td>
                <td> <?php echo $val->id_toko; ?></td>
                <td> <?php echo $val->nama_tiket; ?></td> 
                <td> <?php echo $val->harga; ?></td>
                <td> <?php echo $val->stok; ?></td>
                <td> <?php echo $val->deskripsi_tiket; ?></td>
                <td><img  style="width: 80px;height: 80px" src="<?php echo base_url('');?>/gambartiket/<?php esc($val->gambar); ?>"> </img></td>

 
                
               
            </tr>

            <?php } ?>

        </tbody>

       


  </table>
  <center><a href="<?php echo site_url('User/Checkout_Tiket/'.$val->id_tiket);?>" class="btn btn-neutral btn-icon" >
                  
                  <span class=""><h2><b>CHECKOUT TIKET</b></h2></span></a></center>
</div>


<!-- Card footer -->
<div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
