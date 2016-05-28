
function navBarFunc() {
    var x = document.getElementById("nav");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        document.getElementById("pre_primary_nav").style.display="none";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        document.getElementById("pre_primary_nav").style.display="block";
    }
    
}

function homeBtn(){
	document.getElementById('content').innerHTML='<object type="text/html" data="home.php" style="width:100%;height: 100%;"></object>';
}
function homeBtn1(){
    document.getElementById('content').innerHTML='<object type="text/html" data="home.php" style="width:100%;height: 100%;"></object>';
    var x = document.querySelector("#primary_nav > a > div > span").className="glyphicon glyphicon-home";
    document.getElementById("nav").className="w3-container w3-hide w3-hide-large w3-hide-medium"
    document.getElementById("pre_primary_nav").style.display="block";
}

function editBtn(){
	document.getElementById('content').innerHTML='<object type="text/html" data="edit.php" style="width:100%;height: 100%;"></object>';
}
function editBtn1(){
    document.getElementById('content').innerHTML='<object type="text/html" data="edit.php" style="width:100%;height: 100%;"></object>';
    var x = document.querySelector("#primary_nav > a > div > span").className="glyphicon glyphicon-edit";
    document.getElementById("nav").className="w3-container w3-hide w3-hide-large w3-hide-medium"
    document.getElementById("pre_primary_nav").style.display="block";
}

function mediaBtn(){
	document.getElementById('content').innerHTML='<object type="text/html" data="media.php" style="width:100%;height: 100%;"></object>';
}
function mediaBtn1(){
    document.getElementById('content').innerHTML='<object type="text/html" data="media.php" style="width:100%;height: 100%;"></object>';
    var x = document.querySelector("#primary_nav > a > div > span").className="glyphicon glyphicon-expand";
    document.getElementById("nav").className="w3-container w3-hide w3-hide-large w3-hide-medium"
    document.getElementById("pre_primary_nav").style.display="block";
}

function configBtn(){
	document.getElementById('content').innerHTML='<object type="text/html" data="settings.php" style="width:100%;height: 100%;"></object>';
}
function configBtn1(){
    document.getElementById('content').innerHTML='<object type="text/html" data="settings.php" style="width:100%;height: 100%;"></object>';
    var x = document.querySelector("#primary_nav > a > div > span").className="glyphicon glyphicon-cog";
    document.getElementById("nav").className="w3-container w3-hide w3-hide-large w3-hide-medium"
    document.getElementById("pre_primary_nav").style.display="block";
}

function writeBlog(){
    parent.document.getElementById('writeBlog').style.display='block';
}

function logIn(){
     document.getElementById("login").style.display="block";
    document.getElementById("signup").className="animated zoomOut";
}
