

            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-black" style = "text-shadow: 3px 2px 5px grey;" ><b>Menu Kelola Data Toko</b></h1></center>
             
        
            </div>



   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th scope="col" class="sort" >ID Toko</th>
        <th scope="col" class="sort" >ID Pengguna</th>
        <th scope="col" class="sort" >Nama Toko</th>
        <th scope="col" class="sort">Deskripsi Toko</th>

        <th scope="col">Aksi Hapus</th>
      <!--  <th scope="col">Aksi Hapus</th> -->
      </tr>
    </thead>

   
        
        <tbody class="thead-dark"> 
        <?php $no =1; foreach($toko as $val) { ?>
                                                      
            <tr>
                <td><?php echo $no++; ?></td>
                <td> <?php echo $val->id_toko; ?></td>
                <td> <?php echo $val->id_user; ?></td>
                <td> <?php echo $val->nama_toko; ?></td> 
                <td> <?php echo $val->deskripsi; ?></td>
                



                <td>
                    <a href="<?php echo site_url('Admin/Hapus_toko/'. $val->id_toko); ?>" class="btn btn-danger"> Hapus </a>
                </td>
                
               
            </tr>

            <?php } ?>

        </tbody>

        


  </table>
</div>

