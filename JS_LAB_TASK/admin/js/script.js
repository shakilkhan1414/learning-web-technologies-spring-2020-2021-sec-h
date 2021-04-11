const content = document.getElementById("main-content");
const xhttp	= new XMLHttpRequest();

function homeContent(){
    xhttp.open('POST', '../view/homeContent.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function addMember(){
    location.href="../view/addMember.php";
    // xhttp.open('POST', '../view/addMember.php', true);
	// xhttp.send();
    // xhttp.onreadystatechange = function(){
	// 	if(this.readyState == 4 && this.status == 200){
	// 		content.innerHTML = this.responseText;
	// 	}
    // }
}
function addAdmin(){
    location.href="../view/addAdmin.php";
}

function addProduct(){
    location.href="../view/addProduct.php";
}

function addNotice(){
    location.href="../view/addNotice.php";
}

function logout(){
    xhttp.open('POST', '../checking/logout.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            location.href="../view/index.php";
		}
    }
}




