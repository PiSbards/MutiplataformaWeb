<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cidade = $_POST['cidade'];
    
    $query = $conn->query("SELECT * FROM pessoa WHERE nome='$nome' AND idade='$idade' AND cidade='$cidade'");
    if(mysqli_num_rows($query)>0){
        echo "<script language='javascript' type='text/javascript'>
            alert('Pessoa já existe em nossa base de dados!');
            window.location.href='index.php';
            </script>";
        exit();
    }
    else {
        $sql = "INSERT INTO pessoa(nome,idade,cidade) VALUES('$nome','$idade','$cidade')";
        if (mysqli_query($conn,$sql)) {
            echo "<script language= 'javascript' type='text/javascript'>
                window.location.href='index.php';
                </script>";
        }
    }
    mysqli_close($conn);
?>