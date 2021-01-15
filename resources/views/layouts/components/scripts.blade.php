<script>
window.onload=function() {

// // var test = document.getElementById("mueve").innerHTML;
// // test.hide();
// $("#donde").css("display", "none");
// $("#mueve").css("display", "none");
// $("#aliados").css("display", "none");
var element = document.getElementById("eq-link");
    element.classList.add('active');

}

function showDonde(){
    var element = document.getElementById("do-link");
    element.classList.add('active');
    var elementr1 = document.getElementById('eq-link')
    var elementr2 = document.getElementById('mu-link')
    var elementr3 = document.getElementById('al-link')
    elementr1.classList.remove('active');
    elementr2.classList.remove('active');
    elementr3.classList.remove('active');
    $("#equipo").css("display", "none");
    $("#donde").css("display", "block");
    $("#mueve").css("display", "none");
    $("#aliados").css("display", "none");
}

function showMueve(){
    var element = document.getElementById("mu-link");
    element.classList.add('active');
    var elementr1 = document.getElementById('eq-link')
    var elementr2 = document.getElementById('do-link')
    var elementr3 = document.getElementById('al-link')
    elementr1.classList.remove('active');
    elementr2.classList.remove('active');
    elementr3.classList.remove('active');
    $("#equipo").css("display", "none");
    $("#donde").css("display", "none");
    $("#mueve").css("display", "block");
    $("#aliados").css("display", "none");
}

function showAliados(){
    var element = document.getElementById("al-link");
    element.classList.add('active');
    var elementr1 = document.getElementById('eq-link')
    var elementr2 = document.getElementById('do-link')
    var elementr3 = document.getElementById('mu-link')
    elementr1.classList.remove('active');
    elementr2.classList.remove('active');
    elementr3.classList.remove('active');
    $("#equipo").css("display", "none");
    $("#donde").css("display", "none");
    $("#mueve").css("display", "none");
    $("#aliados").css("display", "block");
}

function showEquipo(){
    var element = document.getElementById("eq-link");
    element.classList.add('active');
    var elementr1 = document.getElementById('al-link')
    var elementr2 = document.getElementById('do-link')
    var elementr3 = document.getElementById('mu-link')
    elementr1.classList.remove('active');
    elementr2.classList.remove('active');
    elementr3.classList.remove('active');
    $("#equipo").css("display", "block");
    $("#donde").css("display", "none");
    $("#mueve").css("display", "none");
    $("#aliados").css("display", "none");
}


function showUniversal(){
    var element = document.getElementById("un-link");
    element.classList.add('active');
    var elementr1 = document.getElementById('cl-link')
    var elementr2 = document.getElementById('pr-link')
    elementr1.classList.remove('active');
    elementr2.classList.remove('active');   
   
    $("#universal").css("display", "block");
    $("#clup").css("display", "none");
    $("#pro").css("display", "none");
    
}

function showClup() {
    var element = document.getElementById("cl-link");
    element.classList.add('active');
    var elementr1 = document.getElementById('un-link')
    var elementr2 = document.getElementById('pr-link')
    elementr1.classList.remove('active');
    elementr2.classList.remove('active');    
    $("#universal").css("display", "none");
    $("#clup").css("display", "block");
    $("#pro").css("display", "none");
    
}
function showPro() {
    var element = document.getElementById("pr-link");
    element.classList.add('active');
    var elementr1 = document.getElementById('un-link')
    var elementr2 = document.getElementById('cl-link')
    elementr1.classList.remove('active');
    elementr2.classList.remove('active');     
    $("#universal").css("display", "none");
    $("#clup").css("display", "none");
    $("#pro").css("display", "block");
    
}



</script>