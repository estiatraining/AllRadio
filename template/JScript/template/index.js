/*
    Document   : index
    Created on : 02/03/2011, 20:48:10
    Author     : Cleison Ferreira
    Description:
        Purpose of the stylesheet follows.
*/
search = function(){
    document.forms[0].enviado.value = "yes";
    document.forms[0].submit();
}
player = function(link){
    document.getElementById("player").style.display = "block";
    document.getElementById("wmp2").autostart = '1';
    document.getElementById("autostart").value = '1';
}
