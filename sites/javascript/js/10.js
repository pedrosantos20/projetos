function escrever(btn){
    var v1 = document.getElementById("v1").value;
    var p = ""
    var r = "";

    if(parseFloat(v1)<20){
        c = (parseFloat(v1) * 45) / 100;
        r = parseFloat(v1)+parseFloat(c);
    }
    if(parseFloat(v1)>=20){
        c = (parseFloat(v1) * 30) / 100;
        r = parseFloat(v1)+parseFloat(c);
    }
    document.getElementById('resultado').innerHTML = r;
   }