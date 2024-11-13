<?php
    namespace PHP\Modelo;
    require_once('DAO\Inserir.php');
    require_once('DAO\Conexao.php');
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Conexao;
?>

<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Página Principal</title>
    </head>
    <body>
        <form method="POST">
            <label>Código: </label>
            <input type="number" name="codigo" id="codigo"><br><br>

            <label>Nome: </label>
            <input type="text" name="nome" id="nome"><br><br>

            <label>Endereço: </label>
            <input type="text" name="endereco" id="endereco"><br><br>

            <label>Telefone: </label>
            <input type="text" name="telefone" id="telefone"><br><br>

            <button type="submit">Cadastrar
            <?php
                $conexao  = new Conexao();//Conectando o banco 

                //Pegar os dados do formulário
                $codigo   = $_POST['codigo'];
                $nome     = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                //Chamar a classe inserir
                $inserir = new Inserir();
                echo $inserir->cadastrarPessoa($conexao,$codigo,$nome,$endereco,$telefone);
            ?>
            </button>    
        </form><!-- Fim do formulário -->
        <br><br>
        <a href="menu.php"><button>Voltar</button><a>
    </body>
</html>