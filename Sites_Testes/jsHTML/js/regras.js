var popular = document.getElementById ("a");

popular.addEventListener('click', function() {
var i, termo, matriz1 = [ ];
var i, termo, matriz2 = [ ];
var i, termo, matriz3 = [ ];
var m1 = document.getElementById ("m1");
var m2 = document.getElementById ("m2");
var m3 = document.getElementById ("m3");

for (i = 0; i < 4; i++) {
termo = prompt ("Informe o Código do Produto: ");
matriz1.push(termo);
console.log(matriz1[i]);
m1.innerHTML += "<li>"+ matriz1[i] + "</li>";
termo = prompt ("Informe a Quantidade: ");
matriz2.push(termo);
console.log(matriz2[i]);
m2.innerHTML += "<li>" + matriz2[i] + "</li>";
termo = prompt ("Informe Preço Unitario: ");
matriz3.push(termo);
console.log(matriz3[i]);
m3.innerHTML += "<li>" + matriz3[i] + "</li>";
} 
var totalparcial = [ ];
for (i=0; i < 4; i++ ) {
	var res = parseFloat( matriz2[i] ) * parseFloat( matriz3[i] );
	totalparcial.push(res);
	console.log(totalparcial[i]);
	s.innerHTML +=  "<li>" +  totalparcial[i] + "</li>";
};
}, false)