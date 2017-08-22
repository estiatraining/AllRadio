/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function showRollTip(msg, e) {
    if ( typeof RollTip == "undefined" || !RollTip.ready )
        return;
    RollTip.reveal(msg, e);
}

function hideRollTip() {
    if ( typeof RollTip == "undefined" || !RollTip.ready )
        return;
    RollTip.conceal();
}
onload = function(){
    RollTip.init();
    Utils.load(document.forms[0]);
}
function Utils(){}
Utils.load = function(objForm){
    for(var i = 0; i < objForm.length; i++){
        var objCampo = objForm.elements[i];
        if(objCampo.tagName == "INPUT" && objCampo.type == "text")
            objCampo.focus();
    }
}
Utils.validaForm = function(objForm){
    var auxInputRC = "";
    var auxCheckRC = "";
    var auxContCheck = false;
    var cont = 0;
    var auxDesc = "";
    var auxInputName = "";
    for(var i = 0; i < objForm.length; i++){
        var objCampo = objForm.elements[i];
        var vetAux = objCampo.className.split(" ");
        if(vetAux.length > 0){
            var aux = false;           
            for(var j = 0; j < vetAux.length; j++){                
                if( Utils.findString(vetAux[j], /Validar\[true\]/i) ){
                    aux = true;
                }
                if( Utils.findString(vetAux[j], /Descricao/i) ){
                    if(aux){
                        var auxQuebra = vetAux[j].split("[");
                        auxQuebra = auxQuebra[1].split("]");
                        if((objCampo.tagName == "INPUT" || objCampo.tagName == "TEXTAREA") && ( objCampo.value == "" || objCampo.value == " " )){
                            if(objCampo.type == "text" || objCampo.type == "password" || (objCampo.tagName == "TEXTAREA")){
                                alert("Digite o campo " + auxQuebra[0] + "!");
                                objCampo.focus();
                                return false;
                            }
                        }
                        if(objCampo.tagName == "SELECT" && ( objCampo.value == "" )){
                            alert("Selecione uma opção em " + auxQuebra[0] + "!");
                            objCampo.focus();
                            return false;
                        }
                        if(objCampo.tagName == "INPUT" && (objCampo.type == "checkbox")){
                            if(!objCampo.checked){
                                alert("Marque o campo " + auxQuebra[0] + "!");
                                objCampo.focus();
                                return false;
                            }
                        }
                        if(objCampo.tagName == "INPUT" && (objCampo.type == "radio")){
                            if(!(auxInputName != objCampo.name && (auxInputName != ""))){
                                auxInputRC += objCampo.name + ";";
                                auxCheckRC += objCampo.checked + ";";
                                auxDesc += auxQuebra[0] + ";";
                                auxContCheck = true;
                                cont++;
                            }
                        }else if(auxContCheck){
                            var vetInputRC = auxInputRC.split(";"), vetCheckRC = auxCheckRC.split(";"), auxDesc = auxDesc.split(";");
                            var auxInputRCName = "", auxInputRCCheck = "", validaCheck = false;
                            for(var k = 0; k < vetInputRC.length; k++){
                                if(vetCheckRC[k] == 'true'){
                                    validaCheck = true;
                                }                              
                                auxInputRCName = vetInputRC[k];
                                auxInputRCCheck = vetCheckRC[k];
                            }
                            if(!validaCheck){
                                alert("Marque o campo " + auxDesc[0] + "!");
                                objForm.elements[i - cont].focus();
                                return false;
                            }
                            auxContCheck = false;
                            cont = 0;
                            auxInputName = "";
                            auxInputRC = "";
                            auxCheckRC = "";  
                        }
                        auxInputName = objCampo.name;                    
                    }
                    aux = false;
                }
            }
        }
    }
    return true;
}
Utils.findString = function(string, padrao){
    if(string.search(padrao) != -1)
        return true;
    else
        return false;
}

