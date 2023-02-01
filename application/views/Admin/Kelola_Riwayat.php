
<!-- Light table -->

            <!-- Card header -->

            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-black" style = "text-shadow: 3px 2px 5px grey;" ><b>Laporan Riwayat Penjualan Tiket</b></h1></center>

              


   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-dark">
      <tr>
      <th>No</th>
        <th scope="col" class="sort" >ID Detail</th>
        <th scope="col" class="sort" >ID Tiket</th>
        <th scope="col" class="sort" >Metode Pembayaran</th>
        <th scope="col" class="sort" >ID User</th>

      <!--  <th scope="col">Aksi Hapus</th> -->
      </tr>
    </thead>

   
        
        <tbody class="thead-dark"> 
        <?php $no =1; foreach($detail_order as $val) { ?>
                                                      
            <tr>
                <td><?php echo $no++; ?></td>
                <td> <?php echo $val->id_detail; ?></td>
                <td> <?php echo $val->id_tiket; ?></td>
                <td> <?php echo $val->metode; ?></td> 
                <td> <?php echo $val->id_user; ?></td>

             <!--
               <td>
               </td>
              -->
                
               
            </tr>

            <?php } ?>

        </tbody>

        


  </table>
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
