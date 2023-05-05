<?php


?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Tuts+ Chat Application</title>
        <meta name="description" content="Tuts+ Chat Application" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>

        <div id="wrapper">
            <div id="menu">
                <p >Please put our finger in Fingerprint : </p>
			
            </div>
            <div id="chatbox">
            <?php
				file_put_contents("view.html", "");        
            ?>
			
			</div>
        <script type="text/javascript" src="http://localhost/smessage/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document 
            $(document).ready(function () {
                function loadLog() {
                   // var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request 
                    $.ajax({
                        url: "view.html",
                        cache: false,
                        success: function (html) {
                            $("#chatbox").html(html); //Insert chat log into the #chatbox div 
                            //Auto-scroll 
                          //  var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request 
                           // if(newscrollHeight > oldscrollHeight){
                           //     $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div 
                           // }	
                        }
                    });
					
					
					if($("#45").length)
						{
							//window.location = "index.php?logout=true";
							window.location = "index.php";
						}
                }
                setInterval (loadLog, 500);
            });
        </script>
    </body>
</html>
