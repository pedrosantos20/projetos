function escrever(btn){
    var v1 = document.getElementById("v1").value;
    var v2 = document.getElementById("v2").value;

    var r = parseFloat(v1)/parseFloat(v2);
    document.getElementById('resultado').innerHTML = r;
  
   }