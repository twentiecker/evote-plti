
<?php //var_dump($ktp);



?>

<div class="tengah" style="width:60%;margin:auto">
            <div class="card text-center"  style="float:left;">
                <div class="card-header">
                    Data KTP
                </div>
                <div class="card-body">
                    <img style =" width: 320px; height: 300px;" id ="tumb2" src="<?= $image['image1'];?>"/>
                    </br>
                    <h5 class="card-title"><?php echo $ktp['Nama'];?></h5>
                    
                </div>
                </br>
                <div class="card text-center" style="width:100%;" >
                <p class="card-text">Apabila Data Sudah benar, silahkan lanjutkan ke Pengecekan Fingerprint</p>
                <a href="<?= base_url().$tujuan;?>/<?= $ktp['NIK'];?>" class="btn btn-primary">Pengecekan Fingerprint</a>
                 </div>
            </div>


       
            <div class="card text-center" style="float:left;">
            <div class="card-body">

                <table class="table" style="text-align:left;width:500px;">
   
                    <tbody>
                        <tr>
                        <th scope="row">NIK</th>
                        <td><?php echo $ktp['NIK'];?></td>
                        </tr>
                        <tr>
                        <th scope="row">Jenis Kelamin</th>
                        <td><?php 
                        if($ktp['JK']=='1'){echo "Laki-laki";} 
                        else if($ktp['JK']=='2'){echo "Perempuan";} 
                        else{ echo "-";}
                        ?></td>
                        </tr>
                        <tr>
                        <th scope="row">Tempat Lahir</th>
                        <td><?php echo $ktp['Tempat_Lahir'];?></td>
                        </tr>

                        <tr>
                        <th scope="row">Alamat</th>
                        <td><?php echo $ktp['Alamat'];?></td>
                        </tr>

                        <tr>
                        <th scope="row">RT/RW</th>
                        <td><?php echo $ktp['RT/RW'];?></td>
                        </tr>

                        <tr>
                        <th scope="row">Kel/Desa</th>
                        <td><?php echo $ktp['Kel/Desa'];?></td>
                        </tr>

                        <tr>
                        <th scope="row">Kecamatan</th>
                        <td><?php echo $ktp['Kecamatan'];?></td>
                        </tr>

                        <tr>
                        <th scope="row">Agama</th>
                        <td><?php echo $ktp['Agama'];?></td>
                        </tr>

                        <tr>
                        <th scope="row">Status</th>
                        <td><?php echo $ktp['Status'];?></td>
                        </tr>

                        <tr>
                        <th scope="row">Pekerjaan</th>
                        <td><?php echo $ktp['Pekerjaan'];?></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            </div>
         
            </div>
           