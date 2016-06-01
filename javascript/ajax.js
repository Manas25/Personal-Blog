/***    FIRST-TIME INSTALLATION ***/
function install() {
    var xhttp;

    var db = document.getElementById('installation_form').elements[0].value;
    var host = document.getElementById('installation_form').elements[1].value;
    var admin = document.getElementById('installation_form').elements[2].value;
    var pass = document.getElementById('installation_form').elements[3].value;

    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
        	document.getElementById("installation_label").innerHTML = xhttp.responseText;
        	window.location = 'index.php';
        }      
    };
	xhttp.open("GET",'controllers/initial_queries.php?db='+db+'&host='+host+'&admin='+admin+'&pass='+pass,true);
	xhttp.send();
}

/*** SIGN UP FORM (UPLOAD IMAGE< INSERT USER INTO DATABASE) ***/
var image;
var propic;

function img_change(){

    $("#file_select").click();
}

function readURL(input) {
        if (input.files && input.files[0]) {
            image = event.target.files;
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#pro_pic')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }


function prepareUpload(){
        //image = event.target.files; 
        console.log(image[0]);
        var data = new FormData();
        data.append('image',image[0]);

        var xhttp;
        xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("pro_pic").src=xhttp.responseText;
            }      
        };
        xhttp.open("POST",'controllers/change_profile_pic.php',true);
        //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(data);    
}


function signup(){
    var username = document.getElementById('signup_form').elements[0].value;
    var email = document.getElementById('signup_form').elements[1].value;
    var password = document.getElementById('signup_form').elements[2].value;

    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
            logIn();
        }      
    };
    xhttp.open("POST",'controllers/signup_user.php',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username="+username+"&email="+email+"&password="+password);

    //prepareUpload();
}
