function escrever(btn){
    var v1 = document.getElementById("v1").value;
    var v2 = document.getElementById("v2").value;
    var v3 = document.getElementById("v3").value;

    var m = (parseFloat(v1)+parseFloat(v2)+parseFloat(v3))/3;
    var r = "";
    if(parseFloat(m)>=7){
        r = "ALUNO APROVADO";
    }
    if(parseFloat(m)<5){
        r = "ALUNO REPROVADO";
    }
    if((parseFloat(m)<7) && (parseFloat(m)>=5)){
        r = "ALUNO EM RECUPERAÇÃO";
    }
    document.getElementById('resultado').innerHTML = r;
  
   }