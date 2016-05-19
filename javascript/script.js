
function navBarFunc() {
    var x = document.getElementById("nav");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function homeBtn(){
	var x = document.getElementById('content').innerHTML='<object type="text/html" data="home.php" ></object>';
}

function editBtn(){
	var x = document.getElementById('content').innerHTML='<object type="text/html" data="edit.php" ></object>';
}

function mediaBtn(){
	var x = document.getElementById('content').innerHTML='<object type="text/html" data="media.php" ></object>';
}

function configBtn(){
	var x = document.getElementById('content').innerHTML='<object type="text/html" data="settings.php" ></object>';
}