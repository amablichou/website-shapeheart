var myform = document.getElementById("form_calcul");
var input = document.getElementsByTagName("Input");
var inputlength = input.length;

myform.addEventListener('submit', function(e) {
    e.preventDefault();
    calcul();
});