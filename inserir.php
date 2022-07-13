<body>
    <input type="submit" value="Voltar à pagina principal" onclick="location.href='index.php'">
    <hr>
    <form method="POST" name="meuForm" action="cadastrado.php">
        <div class="box"><br>
            <center><h1>Formulário de Cadastro:</h1></center>

            <center><b>Produto</b><br>
            <input type="text" class="input_text" name="nome" placeholder="Nome do produto:" /></center>

            <center><b>Cor</b><br>
            <input type="text" class="input_text" name="cor" placeholder="Cor:" /></center>

            <center><b>Preço</b><br>
            <input type="text" class="input_text" name="preco" placeholder="Preço R$:" /></center>

            <br><br>
            <center><input type="submit" value="Salvar"></center>
        </div>
    </form>
</body>