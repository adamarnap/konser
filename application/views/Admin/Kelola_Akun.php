

            <div class="card-header border-3">
              <center> <h1 class="mb-0 text-black" style = "text-shadow: 3px 2px 5px grey;" ><b>Menu Kelola Data Akun</b></h1></center>
              <a href="<?php echo site_url('Admin/Tambah_Akun/');?>" class="btn btn-success" >
                  
            <!--      <span class="">Tambah Data Akun</span></a>  -->
        
            </div>



   <!-- tabel --> 
<div class="table-responsive">
  <table class="table align-items-center table-flush">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th scope="col" class="sort" >ID User</th>
        <th scope="col" class="sort" >Username</th>
        <th scope="col" class="sort" >Nama Pengguna</th>
        <th scope="col" class="sort" >Password</th>
        <th scope="col" class="sort">Nomor Telepon</th>
        <th scope="col">Alamat Pengguna</th>
        <th scope="col">Level</th>
        <th scope="col">Status Akun</th>
       <!-- <th scope="col">Aksi Edit</th>-->
        <th scope="col">Aksi Hapus</th>
      <!--  <th scope="col">Aksi Hapus</th> -->
      </tr>
    </thead>

   
        
        <tbody class="thead-dark"> 
        <?php $no =1; foreach($user as $val) { ?>
                                                      
            <tr>
                <td><?php echo $no++; ?></td>
                <td> <?php echo $val->id_user; ?></td>
                <td> <?php echo $val->username; ?></td>
                <td> <?php echo $val->nama_user; ?></td> 
                <td> <?php echo $val->password; ?></td>
                <td> <?php echo $val->no_tlp; ?></td>
                <td> <?php echo $val->alamat; ?></td>
                <td><?php echo $val->level; ?></td>
                <td><?php echo $val->status_akun; ?></td>


             <!--  <td>
                    <a href="<?php echo site_url('Admin/Getid_User/'. $val->id_user);  ?>" class="btn btn-warning"> Edit </a>
                </td>  -->

                <td>
                    <a href="<?php echo site_url('Admin/Hapus_User/'. $val->id_user); ?>" class="btn btn-danger"> Hapus </a>
                </td>
                
               
            </tr>

            <?php } ?>

        </tbody>

        


  </table>
</div>

