function escrever(btn){
    var v1 = document.getElementById("v1").value;
    
    
    
    var c = (parseFloat(v1) * 15) / 100;
    var r = parseFloat(v1)+parseFloat(c);
    document.getElementById('resultado').innerHTML = r;
  
   }