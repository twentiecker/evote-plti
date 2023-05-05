<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script > var base_url = '<?php echo base_Url();?>';</script>
  
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

<div class="container" style="width: 48rem;">
<div class="card text-center" >
  <div class="card-header">
  <h1> Registrasi </h1>
  </div>
  <div class="card-body">
          <div class="input-group mb-3">
          <input id="nik" name="keyword" type="text" class="form-control" placeholder="Masukan NIK" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-primary" onclick="getdata()" >LOGIN</button>
        </div>
     
  </div>
</div>
</div>


<form id="hiddenform" action="" method="post">

                <input type="hidden" class="form-control" id="NIK" name="NIK" value="81">
               
                <input type="hidden" class="form-control" id="idf"  name="idf">
                
                <input type="hidden" class="form-control" id="Nama"  name="Nama">
                
                <input type="hidden" class="form-control" id="Tempat_Lahir"  name="Tempat_Lahir">
               
                <input type="hidden" class="form-control" id="Alamat"  name="Alamat">
                
                <input type="hidden" class="form-control" id="RT/RW"  name="RT/RW">
                
                <input type="hidden" class="form-control" id="Kel/Desa"  name="Kel/Desa">
                
                <input type="hidden" class="form-control" id="Kecamatan"  name="Kecamatan">
                
                <input type="hidden" class="form-control" id="Agama"  name="Agama">
               
                <input type="hidden" class="form-control" id="Status"  name="Status">
                
                <input type="hidden" class="form-control" id="Pekerjaan"  name="Pekerjaan">
               
                <input type="hidden" class="form-control" id="JK"  name="JK" value="1">
                
            </div>

        </form>



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

	
	 
      <script type="text/javascript">
			function getdata(){
	
            var nik = document.getElementById('nik').value;
            var textdata = " ";
            const dbRef = firebase.database().ref();
                dbRef.child("users").child(nik).get().then((snapshot) => {
                  if (snapshot.exists()) {
                  const data = snapshot.val();
                  if(data['tps']!=0){
						alert("NIK :"+nik+" Telah Teregistrasi di TPS:"+data['tps']);
                    
                  }
                  else {
						document.getElementById('NIK').value = nik;	  
						document.getElementById('idf').value = data['idf'];
						document.getElementById('Nama').value= data['nama'];
						document.getElementById('Tempat_Lahir').value= data['lahir'];
						document.getElementById('Alamat').value= data['alamat'];
						document.getElementById('RT/RW').value= data['rt'];
						document.getElementById('Kel/Desa').value= data['kel'];
						document.getElementById('Kecamatan').value= data['kec'];
						document.getElementById('Agama').value= data['agama'];
						document.getElementById('Status').value= data['status'];
						document.getElementById('Pekerjaan').value= data['pekerjaan'];
						document.getElementById('JK').value= data['jk'];
							  
						document.getElementById("hiddenform").submit();
                  }
                  
                  } else {
                    
                  textdata = " data tidak ditemukan";
                  alert(textdata);
                  
                  }
                }).catch((error) => {
                  console.error(error);
                });
                
            
          }

        </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>