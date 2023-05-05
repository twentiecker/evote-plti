<div class="container">
<div class="card" style="width: 28rem;">
  <div class="card-body">
    <h5 class="card-title">Pendaftaran Capil</h5>
    <?php if (validation_errors()): ?>
    <div class="alert alert-danger" role="alert">
    <?php echo validation_errors(); ?>
     </div>
     <?php endif; ?>
        <form action="" method="post">
           
            <?php
            $tpsid ='1';
            $ip='192.168.100.20';
            $port='3001';

            if(isset($_SESSION['tps'])){
                $tps = $_SESSION['tps'];

                $tpsid =$tps['ID'];
                $ip=$tps['Adress'];
                $port=$tps['Port'];
            }
        

            ?>
            <div class="row mb-3">
                <label for="nik" class="col-sm-5 col-form-label">TPS ID</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="tpsid" name="tpsid" value="<?= $tpsid;?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="nama" class="col-sm-5 col-form-label">IP BlockChain</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="tpsip"  name="tpsip" value="<?= $ip;?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="lahir" class="col-sm-5 col-form-label">PORT</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" id="port"  name="port" value="<?= $port;?>">
                </div>
            </div>

           
           
            <button type="submit" class="btn btn-primary float-left">Save</button>

        </form> 
  </div>
</div>
</div>


