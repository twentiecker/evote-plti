
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script > var base_url = '<?php base_Url();?>';</script>
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php echo $judul; ?></title>
  </head>
  <body>
    <div class="container">

    <?php 
    $datafinger = $_SESSION['dataktp'];
    
    ?>
  <h1> nik : <?= $datafinger['NIK']; ?>  id : <?= $datafinger['idf']; 
  
  $atemp = 3;
  ?> </h1>
        <div id="wrapper">
            <div id="menu">
                <p >Please put our finger in Fingerprint : </p>
                <p >Maximal Atemp : <?=$atemp;?> </p>

                
			
            </div>
            <div id="chatbox" style="border:1px">
                    <?php
                file_put_contents("view2.html", "");        
            ?>
            <img style='width:220px;height:220px;'src='<?php echo base_Url();?>imgfin/default.png' >
             </div>

             <div></br></br><p id="percobaan" >Sisa Percobaan : <?=$atemp;?> </p></div>
			</div>
			
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document 

            var atemp2 = <?=($atemp*2);?>;
            $(document).ready(function () { 
            setInterval(loadLog,500)
            
            });

            function loadLog() {


                $.ajax({
                url: '<?= base_Url('pemilihan/fingerprint2') ?>',
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('#chatbox').html(data.html)
                }});
					
                 var key = '<?= $datafinger['idf'];?>';
                if($("#"+key).length)
                {
                    //window.location = "index.php?logout=true";
                    window.location ='<?= base_Url('registrasi/facerecognation/'.$datafinger['NIK']) ?>';
                }

                if($("#coba1").length)
                {
                   atemp2 = atemp2 - 1;
                   document.getElementById("percobaan").innerHTML = "Sisa Percobaan :"+Math.floor(atemp2/2);
                }

                if(atemp2==0)
                {
                    window.location ='<?= base_Url('pemilihan/tidakcocok') ?>';
                    
                }
   
				/* if($("#6").length)
                {
                    //window.location = "index.php?logout=true";
                    window.location ='<?= base_Url('pemilihan/facerecognation/81') ?>';
                }


                if($("#3").length)
                {
                    //window.location = "index.php?logout=true";
                    window.location ='<?= base_Url('pemilihan/facerecognation/81') ?>';
                }
                */
            }
        </script>
    </div>
</body>
</html>
