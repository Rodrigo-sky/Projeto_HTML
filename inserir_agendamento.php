<?php

$mysqli = new mysqli("localhost", "root", "", "petlife");

$nomeTutor = mysqli_real_escape_string($mysqli, $_POST["nomeTutor"]);
$emailContato = mysqli_real_escape_string($mysqli, $_POST["emailContato"]);
$dataConsulta = mysqli_real_escape_string($mysqli, $_POST["dataConsulta"]);
$nomeExame = mysqli_real_escape_string($mysqli, $_POST["nomeExame"]);
$descricaoSintomas = mysqli_real_escape_string($mysqli, $_POST["descricaoSintomas"]);

if ($nomeTutor != '' && $emailContato != '') {
    $sql = "
        INSERT INTO agendamentoexame (nomeTutor, emailContato, dataConsulta, nomeExame, descricaoSintomas) 
        VALUES ('$nomeTutor', '$emailContato', '$dataConsulta', '$nomeExame', '$descricaoSintomas');
    ";
    $query = $mysqli->query($sql);

    if ($query) {
        echo "Exame agendado.";
    } else {
        echo "Erro ao Agendar!";
    }
}
else {
    echo "Por favor, Insira o nome do Tutor e o email de contato";
}

?>