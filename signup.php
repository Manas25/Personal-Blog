<body>
	<!-- MAKE 1 DIV COVER WHOLE WINDOW NOT JUST VIEWPORT : 
		style="height:100%;width:100%;position:fixed;top:0px;left:0px;" !-->
	<div class="w3-row" style="height:100%;width:100%;background-color:rgba(0,0,0,0.7);position:fixed;top:0px;left:0px;overflow:auto;">
		<div class="w3-third w3-container"> </div>				
		<div class="w3-third w3-container w3-center" style="margin-top:3%;margin-bottom:2%" >
			<div id="signup" class="w3-card-12 w3-white w3-padding-12 w3-round w3-animate-zoom">

				<img src="images/signup/img1.jpg" id="pro_pic" class="w3-border w3-padding w3-hover-opacity" style="max-width:95%">
				<!-- IMAGE CHANGE -->
				<div onclick="img_change()"><a class="w3-btn-floating w3-red w3-hover-green">
					<i class="glyphicon glyphicon-camera"></i>
				</a></div>

				<form id="pic_form">
				<input id="file_select" type="file" style="display:none;" onchange="readURL(this);"></input>
				</form>


				<form id="signup_form" class="w3-container w3-padding-16">
					<p>
					<input class="w3-input w3-text-green w3-large" type="text">
					<label class="w3-left w3-xlarge w3-text-red">Username</label></p>

					<p>
					<input class="w3-input w3-text-green w3-large" type="email">
					<label class="w3-left w3-xlarge w3-text-red">Email</label></p>

					<p><input class="w3-input w3-text-green w3-large" type="password">
					<label class="w3-left w3-xlarge w3-text-red">Password</label></p>	

					<p><br /><br /><button type="button" class="w3-btn w3-ripple w3-red w3-hover-green w3-right w3-border-green w3-round-large" onclick="signup();">
						<sapn class="w3-large">Sign Up!!</span></button>
					</p>		
				</form>
				
				<div class="w3-container w3-text-grey"><hr style="border-top: 1px solid #8c8b8b" />Already have an account? <a href="#" onclick='logIn()'>Login</a></div>
			</div>

			<div id="login" class="w3-card-12 w3-white w3-padding-12 w3-round animated fadeInRight" style="position:absolute;top:30%;left:25%;display:none;min-width:50%;">
				<img src="images/signup/img3.png" height="100px" width="100px" class="w3-circle w3-center w3-border">
				<form class="w3-container w3-padding-16">
					<p>
					<input class="w3-input w3-text-green w3-large" type="text">
					<label class="w3-left w3-xlarge w3-text-red">Username</label></p>


					<p><input class="w3-input w3-text-green w3-large" type="password">
					<label class="w3-left w3-xlarge w3-text-red">Password</label></p>	

					<p><button class="w3-btn w3-ripple w3-red w3-hover-green w3-right w3-border-green w3-round-large">
						<sapn class="w3-large">Log In!!</span></button>
					</p>		
				</form>
			</div>

		</div>
		<div class="w3-third w3-container"> </div>
	</div>
</body>