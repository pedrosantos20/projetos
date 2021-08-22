function escrever(btn){
    var v1 = document.getElementById("v1").value;
    var r = "";
    if(parseFloat(v1)>=18){
        r = "Adulto"
    }
    if(parseFloat(v1)>=14 && parseFloat(v1)<18){
        r = "Juvenil"
    }
    if(parseFloat(v1)>=9 && parseFloat(v1)<14){
        r = "Infantil"
    }
    if(parseFloat(v1)<9){
        r = "Mirim"
    }
    document.getElementById('resultado').innerHTML = r;
  
   }