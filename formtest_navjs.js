$(document).ready(function() {
    $('#sidebar_btn').click(function() {
        $('#sidemenu').toggleClass('visible');
    });
});

function regi() {
    var x = document.getElementById("create");
    var y = document.getElementById("Login");
    if (x.style.visibility === "hidden") {
        if (y.style.visibility === "visible") {
            y.style.visibility = "hidden";
        }
        $(".whole").addClass("blur");
        x.style.visibility = "visible";
    } else {
        x.style.visibility = "hidden";
        $(".whole").removeClass("blur");
    }
}

function logi() {
    var x = document.getElementById("Login");
    var y = document.getElementById("create");
    if (x.style.visibility === "hidden") {
        if (y.style.visibility === "visible") {
            y.style.visibility = "hidden";
        }
        $(".whole").addClass("blur");
        x.style.visibility = "visible";
    } else {
        x.style.visibility = "hidden";
        $(".whole").removeClass("blur");
    }
}

function meter() {

}

function payinf() {}

function dispadmn() {
    var x = document.getElementById("Login");
    if (x.style.visibility === "hidden") {
        x.style.visibility = "visible";
    } else {
        x.style.visibility = "hidden";
    }
}
/*var x = document.querySelector("#sidebar_btn");
x.addEventListener('onclick', function() {
    alert("Hi there");
});
function slideimg(){
	var i;
	var x=document.getElementByClassName("mySlides");
	for(i=0;i<x.length;i++){
		x[i].style.display="none";
	}
     myIndex++;
     if(myIndex>x.length){
     	myIndex=1;
     }
     x[myIndex-1].style.display="block";
     setTimeout(slideimg,9000);
 }
function formopen(){
	document.getElementById("create").style.visibility="visible";
}*/