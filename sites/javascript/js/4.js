function escrever(btn){
    var v1 = document.getElementById("v1").value;
    var v2 = document.getElementById("v2").value;

    var c = (parseFloat(v1) * parseFloat(v2)) / 100;
    var r = parseFloat(v1)+parseFloat(c);
    document.getElementById('resultado').innerHTML = "Salário de: R$"+r;
    document.getElementById('resultado2').innerHTML = "Ajuste de: R$"+c;
   }