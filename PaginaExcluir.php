<?php   
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;

?>
<!Doctype HTML>
<head>
    <meta charset="UTF-8">
    <title>Página Excluir</title>
</head>
<body>
    <form method="POST">
    <label>Código: </label>
    <input type="number" name="codigo" id="codigo"/><br><br>

    <button type="submit"> Excluir 
        <?php
            $conexao = new Conexao();
            $codigo = $_POST['codigo'];
            $excluir = new Excluir();
            $excluir->excluirPessoa($conexao, $codigo);
        ?>
    </button>
    </form>
    <br><br>
    <a href="menu.php"><button>Voltar</button><a>
</body>
</html>