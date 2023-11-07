<?php

$conn = mysqli_connect("localhost", "root", "", "petlife");

$id_livro = $_POST["id_livro"];

$sql = "SELECT * FROM livros WHERE id = $id_livro";

if ($res = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
            echo "Nome: <input type='text' id='nome2' value='". $row['nome'] ."' /> <br>";
            echo "Autor: <input type='text' id='autor2' value='". $row['autor'] ."' /> <br>";
            echo "Categoria: <input type='text' id='categoria2' value='". $row['categoria'] ."' /> <br>";
            echo "Ano de Publicação: <input type='text' id='ano_publicacao2' value='". $row['ano_publicacao'] ."' /> <br>";
            echo "<input hidden=hidden type='text' id='id_livro2' value='". $row['id'] ."' /> ";
        }
        mysqli_free_result($res);
    }
    else {
        echo "Nenhum registro encontrado";
    }
}
else {
    echo "Erro de conexão";
}


?>