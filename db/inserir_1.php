<?php
    require_once "conexao.php";

$sql = "INSERT INTO cadastro 
    (nome, nascimento, email, site, filhos, salatiro)
    VALUES(
        'Andre Miranda',
        '1999-09-01',
        'miranda_andre@yahoo.com',
        'http://mirandaandre.io',
        0,
        19980.12
    )
";

$conexao = novaConexao();
$resultado = $conexao->query($sql);
if($resultado){
    echo "Sucesso!";
}else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();
?>