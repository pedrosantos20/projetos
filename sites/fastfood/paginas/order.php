<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Big Burguer Confirmação</title>
    </head>
    <body>
        <header class="header">
            <br>
            <h1>BIG BURGUER</h1>
            <br>
        </header>
        <main class="main">
            <section class="content">
            <h1 style="text-align:center"><b><i>Big Burguer Confirmação</i></b></h1>
            <?php
        $pedido = $_GET['pedido'];
        $preco = 0;
        if($pedido == "c"){
            echo "<h4> Tipo de pedido: Combo <br>";
            $carne = $_GET['c1'];
            $bacon = $_GET['c2'];
            if ($carne>0){
                echo "$carne X Combo Big Carne <br>";
                $preco += ($carne * 27);
            }
            if ($bacon>0){
                echo "$bacon X Combo Big Bacon <br>";
                $preco += ($bacon * 33);
            }
        }
        if($pedido == "p"){
            echo "<h4> Tipo de pedido: Pesonalizado <br>";
            $hcarne = $_GET['h1'];
            $frango = $_GET['h2'];
            $hbacon = $_GET['h3'];
            $batatap = $_GET['a1'];
            $batatam = $_GET['a2'];
            $batatag = $_GET['a3'];
            $coca = $_GET['b1'];
            $pepsi = $_GET['b2'];
            $brahma = $_GET['b3'];
            $heiniken = $_GET['b4'];
            if ($hcarne>0){
                echo "$hcarne X Hambúrgueres de Carne <br>";
                $preco += ($hcarne * 16);
            }
            if ($frango>0){
                echo "$frango X Hambúrgueres de Frango <br>";
                $preco += ($frango * 15);
            }
            if ($hbacon>0){
                echo "$hbacon X Hambúrgueres de Bacon <br>";
                $preco += ($hbacon * 20);
            }
            if ($batatap>0){
                echo "$batatap X Porções de Batata <br>";
                $preco += ($batatap * 6);
            }
            if ($batatam>0){
                echo "$batatam X Porções de Batata <br>";
                $preco += ($batatam * 9);
            }
            if ($batatag>0){
                echo "$batatag X Porções de Batata <br>";
                $preco += ($batatag * 12);
            }
            if ($coca>0){
                echo "$coca X Coca <br>";
                $preco += ($coca * 5);
            }
            if ($pepsi>0){
                echo "$pepsi X pepsi <br>";
                $preco += ($pepsi * 5);
            }
            if ($brahma>0){
                echo "$brahma X brahma <br>";
                $preco += ($brahma * 7.5);
            }
            if ($heiniken>0){
                echo "$heiniken X heiniken <br>";
                $preco += ($heiniken * 8.5);
            }
        }
        echo "Total a pagar: R$ $preco</h4>";
    ?>
    </section>
        </main>
        <footer class="footer">

        </footer>
    </body>
</html>

