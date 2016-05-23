	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="javascript/script.js"></script>
	
	<script>
		$(document).ready(function() {

			/* CREATE A draggableX DIV EACH TIME AND SET IT draggable() AFTER CREATION. 
			USE REGEX CSS SELECTOR  $("div:regex(id, draggable.*)") TO SET ATTRIBUTE TO NEWLY CREATED DIV */
				var x = 1;

                $("span:regex(id, [1-9])").draggable();
                $('#addNote').click(function(){
		        var htmlData='<span  class="w3-card w3-pale-yellow w3-border w3-border-pale-yellow w3-hover-pale-blue w3-text-large w3-text-grey" id="draggable'+(x++)+'" style="width:200px;height:100px;position:absolute;left:100px;padding:8px;"><textarea maxlength="150">Drag me around !!!</textarea></span>';
		        $('#demo').append(htmlData);

		        $("span:regex(id, [1-9])").draggable();

		        });
             });
	</script>

	<div class="w3-row w3-container w3-center" id="contentHome">
		<div class="w3-col" style="width:5%">
			<a class="w3-btn-floating w3-teal w3-ripple" style="margin:5px" id="addNote">+</a>
			<a class="w3-btn-floating w3-teal w3-ripple" style="margin:5px;font-size:20px;" onclick="writeBlog()"><i class="glyphicon glyphicon-edit w3-padding-8"></i></a>
			<a class="w3-btn-floating w3-teal w3-ripple" style="margin:5px;font-size:20px;" id="upload"><i class="glyphicon glyphicon-expand w3-padding-8"></i></a>
		</div>

		<div class="w3-col" id="demo" style="width:95%;"></div>
	</div>

	
