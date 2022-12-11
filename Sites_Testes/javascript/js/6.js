function escrever(btn){
    var v1 = document.getElementById("v1").value;
    var r = "";
    if(parseFloat(v1)>0){
        r = "Você digitou um número positivo."
        
    }
    if(parseFloat(v1)<0){
        r = "Você digitou um número negativo."
    }
    if(parseFloat(v1)==0){
        r = "Você digitou zero."
    }
    document.getElementById('resultado').innerHTML = r;
  
   }