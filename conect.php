<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <style>
        /* Estilos CSS como antes */
    </style>
</head>
<body>
    <div id="header">
        <a href="index.html">Página Principal</a>
        <a href="tabela_de_precos.html">Tabela de Preços</a>
        <a href="#">Carrinho</a>
    </div>
    <div class="container">
        <h1>Carrinho</h1>
        <table>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
            </tr>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["produto"]) && isset($_POST["preco"])) {
                    $produto = $_POST["produto"];
                    $preco = $_POST["preco"];
                    echo "<tr><td>$produto</td><td>$preco</td></tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
