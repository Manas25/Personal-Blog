<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="javascript/frontend.js"></script>
		<script type="text/javascript" src="javascript/ajax.js"></script>
		<style>
			body,input{
				background:#efefef;
			}
			@media only screen and (min-width: 601px){ 
				#form_header{
					font-size:40px;
					font-weight: 700;
				}
			}
			@media only screen and (max-width: 601px){ 
				#form_header{
					font-size:20px;
					font-weight: 400;
				}
			}
		</style>
	</head>
	<body>
		<div class="w3-row w3-container" style="margin-top:7%;">
			<div class="w3-col w3-container" style="width:25%"></div>
			<div class="w3-col w3-container" style="width:50%">
				<div class="w3-card-12 w3-border w3-border-grey w3-round animated zoomIn" style="width:100%;">
					<header class="w3-blue-grey w3-padding-8 w3-text-white w3-border-bottom w3-border-black"><i id="form_header" style=
						'padding-left:10px;'>INSTALLATION</i></header>
					<div id="installation_label" class="w3-container w3-pale-yellow w3-padding-4 w3-text-blue-grey" style="position:relative;top:10px;margin-bottom:10px;width:95%;left:2.5%;">
						<p>Create a database and provide its credentials below</p>
					</div>
					<form class="w3-form w3-padding padding-16" id="installation_form">
						<p>
						<label>Database</label>
						<input class="w3-input" type="text" required></p>

						<p>
						<label>Host</label>
						<input class="w3-input" type="text" required></p>

						<p>
						<label>Administrator</label>
						<input class="w3-input" type="text" required></p>

						<P>
						<label>Password</label>
						<input class="w3-input" type="password"></p>

						<p>
						<button type="button" class="w3-btn w3-blue-grey w3-round" onclick="install()">Proceed</button></p>

					</form>
				</div>
			</div>
			<div class="w3-col w3-container" style="width:25%"></div>
		</div>
	</body>
</html>