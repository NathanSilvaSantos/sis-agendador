<header>
    <h3>Excluir Contato</h3>
</header>

<?php
    $idContato = mysqli_escape_string($conexao, $_GET['idContato']);
    $sql = "DELETE FROM tbcontatos WHERE idContato = $idContato";

    $rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registr. ". mysqli_error($conexao));

    echo "Registro excluído com sucesso";