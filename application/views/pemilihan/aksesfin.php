<?php


if (isset($_POST['FingerID'])) {
	
	echo 'sukses';
	//$_SESSION['atemp']= $_SESSION['atemp']-1; <p>sisa percobaan : ".stripslashes(htmlspecialchars($_SESSION['atemp']))." </p>
	$fingerID = $_POST['FingerID'];
	//$fingerID = 2;
    $text = "";
    $base_url = base_Url();
	$text_message = "<div id='".$fingerID."' class='msgln'><img style='width:220px;height:220px;'src='".$base_url."imgfin/default.png' ></div>";
	$text_message2 = "<div id='".$fingerID."' class='msgln'><img style='width:220px;height:220px;'src='".$base_url."imgfin/detect.png' >
						<b><h3>finger DETECTED </h3></b>
						<p id='coba1'></p>
						</div>";
    file_put_contents("view2.html", $text_message2);
	sleep(1);
	file_put_contents("view2.html", $text_message);
	
}
else if (isset($_POST['notmatch'])) {
	
	echo 'sukses';
	//$_SESSION['atemp']= $_SESSION['atemp']-1; <p>sisa percobaan : ".stripslashes(htmlspecialchars($_SESSION['atemp']))." </p>
	$fingerID = $_POST['FingerID'];
	//$fingerID = 2;
    $text = "";
    $base_url = base_Url();
	$text_message = "<div id='".$fingerID."' class='msgln'><img style='width:220px;height:220px;'src='".$base_url."imgfin/default.png' ></div>";
	$text_message2 = "<div id='".$fingerID."' class='msgln'><img style='width:220px;height:220px;'src='".$base_url."imgfin/detect.png' >
					<b><h3>finger not MATCH </h3></b>
					<p id='coba1'></p>
					</div>";
    file_put_contents("view2.html", $text_message2);
	sleep(1);
	file_put_contents("view2.html", $text_message);
	
}


/*else {
	$text_message = "<p>finger not detected detected </p><br>";
    file_put_contents("view.html", $text_message);
	
}*/
?>