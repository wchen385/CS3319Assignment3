window.onload = function() { prepareListener(); }
function prepareListener() {
 var elemetChoice;
 elemetChoice = document.getElementById("submitOrderChoice");
 elemetChoice.addEventListener("change",getArt);
}
function getArt() {
 this.this.form.submit();
function goHome () { 
   window.location.href = "@Url.Action("Index", "ControllerName")"
};