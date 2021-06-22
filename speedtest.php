<!-- 
This program's author is MCyiqiehuanying @ HeteroCraft
Studio's Website: https://www.heterocraft.com/
If you like this program, please star it!
Github URL: https://github.com/HeteroCraft/speedtest/

You can edit all words but you have to 
follow CC-by-nc-sa 4.0 LICENSE (https://creativecommons.org/licenses/by-nc-sa/4.0/)
and do not remove the info of this program!
-->

<-- You can edit from here! -->

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="Author" content="MCyiqiehuanying@HeteroCraft">
		<style>
            .main{
                text-align: center;
            }
            .main h1{
                color: grey;
            }
            .main p{
                color: silver;
            }
            .ping{
                text-align: center;
                
            }
            .ping .connectedcircle{
                width: 10px;
                height: 10px;
                background-color: #00FA9A;
                border-radius: 50%;
                text-align: center;
                line-height: 50px;
                color: #FFFFFF;
                display: inline-block;
                vertical-align: middle;
            }
            .ping .connectingcircle{
                width: 10px;
                height: 10px;
                background-color: gold;
                border-radius: 50%;
                text-align: center;
                line-height: 50px;
                color: #FFFFFF;
                display: inline-block;
                vertical-align: middle;
            }
            .ping .connecting{
                color: gold;
            }
            .ping .connected{
                color: #00FA9A;
            }
            footer{
                color: silver;
                width: 100%;
                position: fixed;
                bottom: 0px;
                left: 0px;
                text-align: center;
            }
            a{
                color: #aaaaaa;
                text-decoration: dotted;
            }
            a:hover{
                color: grey;
                text-decoration: dotted;
            }
		</style>
		<div id="titlechange"><title>Connecting... _ Speedtest _ HeteroCraft</title></div>
		<!-- Change Title of the Page -->
	</head>
 
	<body>
        <div class="main">
            <h1>Speedtest System by HeteroCraft</h1>
            <p>A text that you can edit it.</p>
            <hr>
        </div>
        <br><br>
        <div class="ping">
            <h3>STATUS:&nbsp;&nbsp;&nbsp;<span id="status"><span class="connecting"><div class="connectingcircle"></div>Connecting...</span></span></h3>
        </div>
		<div class="ping" id="htmlspeed"><br>Connecting... Please wait...<br></div>
		<footer>&copy; <a href="//www.heterocraft.com">HeteroCraft Studio</a> 2020-<?php echo date(Y)?></footer>
		<!-- You can edit this line but do not remove the top words of this page! -->
	</body>
	
	<script>
		setInterval("getSpeed()", 1000);
		
		function getSpeed(){
			var startTime = new Date().getTime();
			var img = new Image();
			img.src = "https://git.heterocraft.com/speedtest/test.png?time=" + startTime;
			img.onload = function(){
				// The size of image (Edit it by your heart)
				var size = 119 * 121;
				var endTime = new Date().getTime();
				var speed = parseInt(size / (endTime - startTime));
				var unit = "KB/S";
				if(speed >= 1024){
					speed = (speed / 1024).toFixed(2);
					unit = "MB/S";
				}
				document.getElementById("htmlspeed").innerHTML = "Downloading speed: "+ speed + unit + "<br/>Require time: " + (endTime - startTime) + "ms";
				document.getElementById("titlechange").innerHTML = "<title>"+ speed + unit + " | " + (endTime - startTime) + "ms _ Speedtest _ HeteroCraft</title>";
				document.getElementById("status").innerHTML = "<span class=\"connected\"><div class=\"connectedcircle\"></div>Connected!</span>";
			};
		}

	</script>
</html>
