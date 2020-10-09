<header>
    <h3>Cadastro de Contato</h3>
</header>

<div>
    <form action="index.php?menuop=inserir-contato" method="post">
        <div>
        <label for="nomeContato">Nome: </label>
        <input type="text" id="nomeContato" name="nomeContato">
        </div>

        <div>
        <label for="emailContato">E-mail: </label>
        <input type="email" id="emailContato" name="emailContato">
        </div>

        <div>
        <label for="telefoneContato">Telefone: </label>
        <input type="text" id="telefoneContato" name="telefoneContato">
        </div>

        <div>
        <label for="enderecoContato">Endereço: </label>
        <input type="text" id="enderecoContato" name="enderecoContato">
        </div>
        
        <div>
        <label for="sexoContato">Sexo: </label>
        <input type="text" id="sexoContato" name="sexoContato">
        </div>

        <div>
        <label for="dataNascContato">Data de Nasc: </label>
        <input type="date" id="dataNascContato" name="dataNascContato">
        </div>

        <div>
            <input type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>