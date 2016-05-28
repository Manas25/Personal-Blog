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
	xhttp.open("GET",'initial_queries.php?db='+db+'&host='+host+'&admin='+admin+'&pass='+pass,true);
	xhttp.send();
}