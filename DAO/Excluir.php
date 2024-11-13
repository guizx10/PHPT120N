<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{

        function excluirPessoa(
                    Conexao $conexao,
                    int $codigo
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "delete from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Excluído com sucesso!";
                }else{
                    echo "<br><br>Não foi possível excluir!";
                }
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//fim do catch
        }
    }//fim da classe
?>