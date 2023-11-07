<?php

$mysqli = new mysqli("localhost", "root", "", "biblioteca");

$id_livro = $_POST["id_livro"];
$nome = mysqli_real_escape_string($mysqli, $_POST["nome"]);
$autor = mysqli_real_escape_string($mysqli, $_POST["autor"]);
$categoria = mysqli_real_escape_string($mysqli, $_POST["categoria"]);
$ano_publicacao = mysqli_real_escape_string($mysqli, $_POST["ano_publicacao"]);

$script = "
    UPDATE livros
    SET nome='$nome',
        autor='$autor',
        categoria='$categoria',
        ano_publicacao=$ano_publicacao
    WHERE id=$id_livro;
";

$query = $mysqli->query($script);

if ($query) {
    echo "Livro atualizado";
}
else {
    echo "Erro ao atualizar";
}


?>