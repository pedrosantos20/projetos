function escrever(btn){
    var v1 = document.getElementById("v1").value;
    var v2 = document.getElementById("v2").value;
    var v3 = document.getElementById("v3").value;

    var r = (parseInt(v1)+parseInt(v2)+parseInt(v3))/3;
    document.getElementById('resultado').innerHTML = r;
  
   }