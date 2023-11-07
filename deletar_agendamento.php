<?php 

$mysqli = new mysqli("localhost", "root", "", "biblioteca");

$id_livro = $_POST["id_livro"];

$script = "
    DELETE FROM livros
    WHERE id = $id_livro;
";
$query = $mysqli->query($script);

if ($query) {
    echo "Livro deletado com sucesso";
}
else {
    echo "Erro ao deletar";
}

?>