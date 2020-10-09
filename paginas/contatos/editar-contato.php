<?php
    $idContato = $_GET['idContato'];
    $sql = "SELECT * from tbcontatos WHERE idContato = $idContato";
    $rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados do registr. ". mysqli_error($conexao));

    $dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=atualiza-contato" method="post">
        <div>
        <label for="idContato">ID: </label>
        <input type="text" id="idContato" name="idContato" value="<?=$dados["idContato"]?>">
        </div>

        <div>
        <label for="nomeContato">Nome: </label>
        <input type="text" id="nomeContato" name="nomeContato" value="<?=$dados["nomeContato"]?>">
        </div>

        <div>
        <label for="emailContato">E-mail: </label>
        <input type="email" id="emailContato" name="emailContato" value="<?=$dados["emailContato"]?>">
        </div>

        <div>
        <label for="telefoneContato">Telefone: </label>
        <input type="text" id="telefoneContato" name="telefoneContato" value="<?=$dados["telefoneContato"]?>">
        </div>

        <div>
        <label for="enderecoContato">Endereço: </label>
        <input type="text" id="enderecoContato" name="enderecoContato" value="<?=$dados["enderecoContato"]?>">
        </div>
        
        <div>
        <label for="sexoContato">Sexo: </label>
        <input type="text" id="sexoContato" name="sexoContato" value="<?=$dados["sexoContato"]?>">
        </div>

        <div>
        <label for="dataNascContato">Data de Nasc: </label>
        <input type="date" id="dataNascContato" name="dataNascContato" value="<?=$dados["dataNascContato"]?>">
        </div>

        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>