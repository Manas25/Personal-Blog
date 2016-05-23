<!DOCTYPE html>

<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/style.css">

		<script type="text/javascript" src="javascript/script.js"></script>
	</head>

	<body>
		<div class="w3-container animated fadeIn" id="container" style="height:100%;width:100%;position:fixed;top:0px;left:0px;margin:0px;padding:0px;overflow:auto;">
				
				<div class="w3-container w3-center">
					<img src="images/header_panel/img1.jpg" class="w3-round" style="width:100%;max-height:200px;">
					<div class="w3-row">
						<div class="w3-col w3-container" style="width:5%;"> </div>

						<div class="w3-rest w3-container w3-black w3-rightbar w3-border-red w3-hide-small" style="padding:5px;">
							<label class="w3-text-white w3-large" style="font-family:tahoma;"> Ground Up To Sky High </label>
						</div> 
					</div>
				</div>

				<!-- FOR LARGE SCREENS !-->
				<div class="w3-container w3-hide-small w3-hide-medium" style="margin-top:-180px">
					<img src="images/header_panel/img2.jpg" class="w3-border w3-round" style="width:22%;min-height:100px;">
				</div>

				<!-- FOR MEDIUM SCREENS !-->
				<div class="w3-container w3-hide-large w3-hide-small" style="margin-top:-90px">
					<img src="images/header_panel/img2.jpg" class="w3-border w3-round" style="width:22%;min-height:100px;">
				</div>

				<!-- FOR SMALL SCREENS !-->
				<div class="w3-container w3-hide-large w3-hide-medium" style="margin-top:-50px">
					<img src="images/header_panel/img2.jpg" class="w3-border w3-round" style="width:22%;min-height:100px;">
				</div>

				<!--- RESPONSIVE NAVIGATION BAR !-->
				<div class="w3-row w3-container w3-center" style="margin-top:10px;">
					<div>
						<a href="#" onclick="homeBtn()">
							<div class="w3-quarter tablink w3-bottombar w3-border-red w3-padding w3-hover-light-grey" id="home_tab">
									<span class="glyphicon glyphicon-home"></span>
							</div>
						</a>
						<a href="#" onclick="navBarFunc()" class="w3-hide-large w3-hide-medium"style="float:right;margin-top:-40px;">
							<div class="w3-large w3-hover-text-red">☰</div>
						</a>
					</div>
					<a href="#" class="w3-hide-small" onclick="editBtn()">
						<div class="w3-quarter tablink w3-bottombar w3-border-red w3-padding w3-hover-light-grey" style="border-right:1px solid">
								<span class="glyphicon glyphicon-edit"></span>
						</div>
					</a>
					<a href="#" class="w3-hide-small" onclick="mediaBtn()">
						<div class="w3-quarter tablink w3-bottombar w3-border-red w3-padding w3-hover-light-grey" style="border-right:1px solid">
								<span class="glyphicon glyphicon-expand"></span>
						</div>
					</a>
					<a href="#" class="w3-hide-small" onclick="configBtn()">
						<div class="w3-quarter tablink w3-bottombar w3-border-red w3-padding w3-hover-light-grey">
								<span class="glyphicon glyphicon-cog"></span>
						</div>
					</a>
				</div>

				<div id="nav" class="w3-container w3-hide w3-hide-large w3-hide-medium">
					<ul class="w3-navbar w3-center-align w3-light-grey w3-border-red">
					    <li><a href="#" onclick="editBtn()"><span class="glyphicon glyphicon-edit"></span></a></li>
					    <li><a href="#" onclick="mediaBtn()"><span class="glyphicon glyphicon-expand"></span></a></li>
					    <li><a href="#" onclick="configBtn()"><span class="glyphicon glyphicon-cog"></span></a></li>
					  </ul>
				</div>

				<!--                 RESPONSIVE NAVIGATION BAR              !-->


				<!-- CONTENT BOX !-->

				<div class="w3-row w3-container">
					<div id="content" class="w3-col w3-border w3-border-red w3-padding-8 w3-round" style="width:100%;padding-left:8px;">
						<!-- CONTENT GOES HERE !-->
							<script>
								var x = document.getElementById('content').innerHTML='<object type="text/html" data="home.php" style="width:100%;height:100%;overflow:auto;"></object>';
							</script>
					</div>
				<div>

				<div id="writeBlog" class="w3-modal">
					<span onclick="document.getElementById('writeBlog').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright">&times;</span>
					<div class="w3-modal-content w3-card-8 w3-animate-zoom w3-padding-8" style="max-width:800px;margin-bottom:20px;padding-bottom:0px;">
					  	<div class="w3-container w3-center">
					  		<img style="height:50px;margin-right:10px;" src="images/blog.png"><span class="w3-xlarge w3-text-black">Write a Blog</span>
					  	</div>

					    <div class="w3-container">
					      <div class="w3-section">
					        <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" placeholder="Enter Title">
					        <textarea placeholder="Pen down .... " cols="10" rows="20" ></textarea>

					        <button class="w3-btn w3-btn-block w3-green w3-right" style="margin-top:8px;margin-bottom:8px;">Save</button>
					      </div>
					    </div>

					    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
					      <button onclick="document.getElementById('writeBlog').style.class='none'" type="button" class="w3-btn w3-red">Cancel</button>
					      <span class="w3-right w3-padding w3-text-blue w3-hide-small"><a href="#">View Blogs</a></span>
					    </div>
					</div>
				</div>
		</div>
	</body>
</html>