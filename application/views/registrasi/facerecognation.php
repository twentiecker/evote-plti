
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="#">VOTE APP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
    </div>
  </div>
  </div>
</nav>
<h5>Rekam Wajah dari NIK : <?= $nik;?> </h5>

<table style="width:70%; margin:auto;">

  <tr>
    <td><div style="margin: auto;" id="my_camera"></div></td></td>
  </tr>
  <tr>
    <td>
      <table style="width:100%">
              <tr>
                <th>Gambar 1</th>
                <th>Gambar 2</th>
                <th>Gambar 3</th>
              </tr>
              <tr>
                <td><div class="foto" id="results" >
                    </div>
                    <div  id="tumbwebcam" >
                    </div>

                  </td>
                <td> <div class="foto" id="results2" >
                    </div>
                    <div  id="tumbwebcam2" >
                    </div>
                </td>
                <td><div class="foto" id="results3" >
                    </div>
                    <div  id="tumbwebcam3" >
                    </div>
                </td>
              </tr>
              <tr>
                <td>
                    <button type ="button" name ="button" onClick="take_snapshot('webcam','results')">Capture Image 1</button></td>
                <td>
                    <button type ="button" name ="button" onClick="take_snapshot('webcam2','results2')">Capture Image 2</button></td>
                <td>  
                    <button type ="button" name ="button" onClick="take_snapshot('webcam3','results3')">Capture Image 3</button>
                  </td></td>
              </tr>
            </table></td>
  </tr>

  <tr>
      <td>

      <form id="calon_form" onSubmit="return save_snapshot()" action="" method="post">
      <input  type="hidden" name="image1" id="image1" value="1">
      <input  type="hidden" name="image2" id="image2" value="1">
      <input  type="hidden" name="image3" id="image3" value="1">
      <button type ="submit" name ="button">Upload All Image</button>
      </form>
      </td>
      
    </tr>
</table>


<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>
		
		
		
		<script type="text/javascript" >
		
			const firebaseConfig = {
				  apiKey: "AIzaSyCwd_NMChqTSSX5yJwbjqyXmRxcIGF2jrM",
				  authDomain: "capil-01.firebaseapp.com",
				  databaseURL: "https://capil-01-default-rtdb.asia-southeast1.firebasedatabase.app",
				  projectId: "capil-01",
				  storageBucket: "capil-01.appspot.com",
				  messagingSenderId: "751424047436",
				  appId: "1:751424047436:web:85a45f85bb3eee92d3e7e9"
				};


			const app= firebase.initializeApp(firebaseConfig);
		</script>
<!-- Webcam.min.js -->
<script type="text/javascript" src="<?= base_Url();?>assets/webcam.min.js"></script>

<!-- Configure a few settings and attach camera -->
<script type="text/javascript" language="JavaScript">
 Webcam.set({
     width: 420,
     height: 340,
     image_format: 'jpeg',
     jpeg_quality: 90
 });
 Webcam.attach( '#my_camera' );

<!-- Code to handle taking the snapshot and displaying it locally -->
function take_snapshot(id,result) {
 
   // take snapshot and get image data
   Webcam.snap( function(data_uri) {
       // display results in page
       document.getElementById(result).innerHTML = '<img style =" display:none;"  id ="'+id+'" src="'+data_uri+'"/>';
       document.getElementById('tumb'+id).innerHTML ='<img style =" width: 180px; height: 140px;" id ="tumb2'+id+'" src="'+data_uri+'"/>';
    } );
}

function updatedata(){
			var nik2 = '83';
			var tps3 = '2';
			  var updates = {};
				updates['users/' + nik2 + '/tps'] = tps3;
				return firebase.database().ref().update(updates); 
			
}


function save_snapshot() {

  var image1 = document.getElementById("webcam").src;
  var image2 = document.getElementById("webcam2").src;
  var image3 = document.getElementById("webcam3").src;
  document.getElementById("image1").value = image1;
  document.getElementById("image2").value = image2;
  document.getElementById("image3").value = image3;

  if (confirm("apakah anda yakin akan mensubmit foto ?")) {

    //updatedata();
    return true;
    //window.location.replace("http://www.w3schools.com");
   // window.open("https://www.w3schools.com","_top");
   
  } 
  else {
    return false;    
  }


 /* 
  Webcam.upload((document.getElementById("webcam").src),'<?= base_Url();?>registrasi/uploadImage/<?=$nik;?>/1',function(code,text){

  });

  Webcam.upload((document.getElementById("webcam2").src),'<?= base_Url();?>registrasi/uploadImage/<?=$nik;?>/2',function(code,text){

});

Webcam.upload((document.getElementById("webcam3").src),'<?= base_Url();?>registrasi/uploadImage/<?=$nik;?>/3',function(code,text){

});
  
alert('save sukses');
//document.location.href = "image.php";
*/
//window.location ='<?= base_Url(); ?>registrasi/uploadImage/<?=$nik;?>/'+image1+'/'+image2+'/'+image3;

}
</script>
   
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>