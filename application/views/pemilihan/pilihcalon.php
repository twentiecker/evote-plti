
<div class="container">
<h5>Pilih Calon : <?php //$nik;?> </h5>

<form id="calon_form" onSubmit="return confirmPilihan()" action="" method="post">
        <table style="width:100%">
        <tr>
        <tr>
            <td>Calon NO 1</td>
            <td>Calon NO 2</td>
            <td>Calon NO 3</td>
        </tr>

            <td> 

                <div class="form-check">
                <label>
                <img style="width:200px;height:200px;" src="<?= base_Url();?>calon/white.png" class="rounded mx-auto d-block" alt="...">
                <input class="form-check-input" type="radio" name="calon" id="calon1" value="1">
                </label>
                </div>

            </td>
            <td>
                
                <div class="form-check">
                 <label>
                    <img style="width:200px;height:200px;" src="<?= base_Url();?>calon/red.png" class="rounded mx-auto d-block" alt="...">
                    <input class="form-check-input" type="radio" name="calon" id="calon2" checked value="2">
                    </label>
                </div>
            </td>
            <td>
                
                <div class="form-check">
                <label>
                    <img style="width:200px;height:200px;" src="<?= base_Url();?>calon/black.png" class="rounded mx-auto d-block" alt="...">
                    <input class="form-check-input" type="radio" name="calon" id="calon3" checked value="3">
                </label>
                </div>

            </td>
        </tr>
        <tr>
            <td>White</td>
            <td>Red</td>
            <td>Black</td>
        </tr>

        <tr>

        <td>
        <p id="demo"></p>
        </td>
            <td>
            </br> </br> </br> </br>
            <button class="btn btn-primary" name="btncalon" type="submit" >Submit Pilihan</button>
        </td>

        </tr>
        </table>
</form>
</div>

<script language="JavaScript">
function confirmPilihan() {
  var txt = document.querySelector('input[name="calon"]:checked').value;
  if (confirm("apakah anda yakin memilih calon NO :"+txt)) {
    return true;
    //window.location.replace("http://www.w3schools.com");
   // window.open("https://www.w3schools.com","_top");
   
  } 
  else {
    return false;    
  }

}
</script>