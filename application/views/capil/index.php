<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Database Capil</title>
        <meta name="description" content="Tuts+ Chat Application" />
        
	
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		#menu{
		 width:70%;	
		}
		</style>

   </head>
 

    <body>
	<div class="container">
    <div id="menu">
       
       <p >INput Data Ke CAPIL: </p>
	    <div class="row mb-3">
                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nik" name="nik">
                </div>
            </div>
			
			 <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">ID Fingerprint</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="idf"  name="idf">
                </div>
            </div>
			
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama"  name="nama">
                </div>
            </div>

            <div class="row mb-3">
                <label for="lahir" class="col-sm-2 col-form-label">tempat lahir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="lahir"  name="lahir">
                </div>
            </div>

            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat"  name="alamat">
                </div>
            </div>

            <div class="row mb-3">
                <label for="rt" class="col-sm-2 col-form-label">RT/RW</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="rt"  name="rt">
                </div>
            </div>

            <div class="row mb-3">
                <label for="kel" class="col-sm-2 col-form-label">Kel/Desa</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kel"  name="kel">
                </div>
            </div>

            <div class="row mb-3">
                <label for="kec" class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="kec"  name="kec">
                </div>
            </div>

            <div class="row mb-3">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="agama"  name="agama">
                </div>
            </div>

            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="status"  name="status">
                </div>
            </div>

            <div class="row mb-3">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="pekerjaan"  name="pekerjaan">
                </div>
            </div>

			<div class="row mb-3">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="jk"  name="jk">
                </div>
            </div>
            
           
            <button  class="btn btn-primary float-right" onclick="writeUserData()">Save</button>
	   
	   

           
   </div>
  
   
   </div>
      
	  
	  
	  
	  
	  
	  
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
			function writeUserData(){
				
				var nik = document.getElementById('nik').value;
				firebase.database().ref('users/'+nik).set({
				idf: document.getElementById('idf').value,
				nama: document.getElementById('nama').value,
				lahir:document.getElementById('lahir').value,
				alamat:document.getElementById('alamat').value,
				rt:document.getElementById('rt').value,
				kel:document.getElementById('kel').value,
				kec:document.getElementById('kec').value,
				agama:document.getElementById('agama').value,
				status:document.getElementById('status').value,
				pekerjaan:document.getElementById('pekerjaan').value,
				jk:document.getElementById('jk').value,
				tps:'0',
			  });

              alert (" simpan Data berhasil");
			}

        </script>
    </body>
</html>




