<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contato</title>
</head>
<body>
    <h1>Cadastro de Contatos</h1>
    <form id="form1" name="contato" method="post" action="grava-contato.php">
    <p>Nome:
    <label for="nomeContato"></label>
    <input type="text" name="nomeContato" id="nomeContato"/>
    </p>
    <p>Telefone:
    <label for="telefoneContato"></label>
    <input type="text" name="telefoneContato" id="telefoneContato"/>
    </p>
    <p>E-mail:
    <label for="emailContato"></label>
    <input type="text" name="emailContato" id="emailContato" />
    </p>
    <p>CPF:
    <label for="cpfContato"></label>
    <input type="text" name="cpfContato" id="cpfContato" />
    </p>
    <p>Idade:
    <label for="idadeContato"></label>
    <input type="text" name="idadeContato" id="idadeContato" />
    </p>
    <p>Aniversario:
    <label for="niverContato"></label>
    <input type="text" name="niverContato" id="niverContato" />
    </p>
    <input type="submit" name="gravar-contato" id="gravar-contato" value="Cadastrar"/>

</html>
