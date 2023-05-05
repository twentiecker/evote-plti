<?php


if (isset($_POST['FingerID'])) {
	
	echo 'sukses';
	//$_SESSION['atemp']= $_SESSION['atemp']-1; <p>sisa percobaan : ".stripslashes(htmlspecialchars($_SESSION['atemp']))." </p>
	$fingerID = $_POST['FingerID'];
	//$fingerID = 2;
    $text = "";
	$text_message = "<div id='".$fingerID."' class='msgln'><img style='width:220px;height:220px;'src='img/default.png' ></div>";
	$text_message2 = "<div id='".$fingerID."' class='msgln'><img style='width:220px;height:220px;'src='img/detect.png' ><p>finger detected </p></span> <b class='user-name'> id :".$fingerID."</b></div>";
    file_put_contents("view.html", $text_message2);
	sleep(1);
	file_put_contents("view.html", $text_message);
	
}


/*else {
	$text_message = "<p>finger not detected detected </p><br>";
    file_put_contents("view.html", $text_message);
	
}*/
?>