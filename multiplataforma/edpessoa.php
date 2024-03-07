<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cidade = $_POST['cidade'];
    $sql = "UPDATE pessoa SET nome='$nome',idade='$idade',cidade='$cidade' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script language= 'javascript' type='text/javascript'>
                window.location.href='index.php';
                </script>";
    }
    mysqli_close($conn);
?>