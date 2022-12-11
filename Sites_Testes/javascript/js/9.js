function escrever(btn){
    var v1 = document.getElementById("v1").value;
    var v2 = document.getElementById("v2").value;
    var r = parseFloat(v1)+parseFloat(v2);

    if(parseFloat(r)>20){
        r = parseFloat(r)+8;
    }
    if(parseFloat(r)<=20){
        r = parseFloat(r)-5;
    }

    document.getElementById('resultado').innerHTML = r;
  
   }