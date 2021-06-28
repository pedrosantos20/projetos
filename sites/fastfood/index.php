<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Big Burguer</title>
		<link rel="stylesheet" href="http://localhost/fastfood/style/style.css">
    </head>
    <body>
        <header class="header">
            <br>
            <h1>BIG BURGUER</h1>
            <br>
        </header>
        <main class="main">
            <section class="content">
            <h1 style="text-align:center"><b><i>Big Burguer</i></b></h1>
            <h2 style="text-align:center"><b><i>Cardápio</i></b></h2>

<table class= "table" border="0">
<tr><th colspan="2">Hambúrgueres</th></tr>
<tr>
<td>Burguer de Carne</td>
<td></td>
<td>R$ 16,00</td>
</tr>
<tr>
<td>Burguer de Frango</td>
<td></td>
<td>R$ 15,00</td>
</tr>
<tr>
<td>Burguer de Bacon</td>
<td></td>
<td>R$ 20,00</td>
</tr>
<tr><th colspan="2">Acompanhamentos</th></tr>
<tr>
<td>Batata Frita P.</td>
<td></td>
<td>R$ 6,00</td>
</tr>
<tr>
<td>Batata Frita M.</td>
<td></td>
<td>R$ 9,00</td>
</tr>
<tr>
<td>Batata Frita G.</td>
<td></td>
<td>R$ 12,00</td>
</tr>
<tr><th colspan="2">Bebidas</th></tr>
<tr>
<td>Coca Lata</td>
<td></td>
<td>R$ 5,00</td>
</tr>
<tr>
<td>Pepsi Lata</td>
<td></td>
<td>R$ 5,00</td>
</tr>
<tr>
<td>Brahma</td>
<td></td>
<td>R$ 7,50</td>
</tr>
<tr>
<td>Heineken</td>
<td></td>
<td>R$ 8,50</td>
</tr>
</table>

<br><br>
<h2 style="text-align:center"><b><i>Combos</i></b></h2>
<table class= "table" border="0">
<tr><th colspan="2">Combo Big Carne</th></tr>
<tr>
<td>Burguer de Carne + Batata M. + Coca Lata</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>R$ 27,00</td>
</tr>
<tr><th colspan="2">Combo Big Bacon</th></tr>
<tr>
<td>Burguer de Bacon + Batata G. + Coca Lata</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>R$ 33,00</td>
</tr>
</table>

<br><br>
<h2 style="text-align:center"><b><i>Fazer Pedido</i></b></h2>
<form action="http://localhost/fastfood/paginas/order.php" method="GET">
<table class= "table" border="0">
<tr><th colspan="2">Pedir Combo ou Pedido Personalizado?</th></tr>
<tr>
<td><input type = "radio" name="pedido" value="p" required>&nbsp Personalizado</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td><input type = "radio" name="pedido" value="c">&nbsp Combo</td>
</tr>
</table>

<br>
<table class= "table" border="0">
<tr><th>Pedir um Combo</th></tr>
<tr>
<td><input type = "number" name="c1" value="0">&nbsp Combo Big Carne</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td><input type = "number" name="c2" value="0">&nbsp Combo Big Bacon</td>
</tr>
</table>

<br>
<h4>Customizado</h4>
<table class= "table" border="0">
<tr><th>Hamburguer</th></tr>
<tr>
<td><input type = "number" name="h1" value="0">&nbsp Carne</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td><input type = "number" name="h2" value="0">&nbsp Frango</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td><input type = "number" name="h3" value="0">&nbsp Bacon</td>
</tr>
</table>

<table class= "table" border="0">
<tr><th>Acompanhamentos</th></tr>
<tr>
<td><input type = "number" name="a1" value="0">&nbsp Batata P.</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td><input type = "number" name="a2" value="0">&nbsp Batata M.</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td><input type = "number" name="a3" value="0">&nbsp Batata G.</td>
</tr>
<tr>

<td></td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
</table>
<table class= "table" border="0">
<tr><th>Bebidas</th></tr>
<tr>
<td><input type = "number" name="b1" value="0">&nbsp Coca Lata</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td><input type = "number" name="b2" value="0">&nbsp Pepsi Lata</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td><input type = "number" name="b3" value="0">&nbsp Brahma</td>
</tr>
<tr>
<td><input type = "number" name="b4" value="0">&nbsp Heineken.</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td></td>
</tr>
</table>
<p text align="center">
        <input type="submit">
    </p>
    <br>
</form>
    </section>
        </main>
        <footer class="footer">

        </footer>
    </body>
</html>

