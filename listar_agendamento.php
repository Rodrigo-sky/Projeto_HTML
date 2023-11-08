<?php

$conn = mysqli_connect("localhost", "root", "", "petlife", 3306);

$sql = "SELECT * FROM agendamentoexame";
if ($res = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo "<table border=1 width='100%' class='table table-striped' id='tabelalistage'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nome do Tutor</th>";
        echo "<th>email de Contato</th>";
        echo "<th>Data da consulta</th>";
        echo "<th>Exame</th>";
        echo "<th>Sintomas</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nomeTutor'] . "</td>";
            echo "<td>" . $row['emailContato'] . "</td>";
            echo "<td>" . $row['dataConsulta'] . "</td>";
            echo "<td>" . $row['nomeExame'] . "</td>";
            echo "<td>" . $row['descricaoSintomas'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
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