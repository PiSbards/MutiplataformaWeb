<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MULTIPLATAFORMA - WEB</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <style>
            body{
                background-color: #D3D3D3;
            }
        </style>
    </head>
    <body>
        <center><h1><b>MULTIPLATAFORMA - WEB</b></h1></center>
        <hr/>
        <br/>
        <br/>
        <main>
            <div class="container">
                <div class="row row-cols-2 row-cols-md-4 mb-4 text-center">
                    <div class="col-md-12">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#191970" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg>&nbsp;&nbsp;<b>EDIÇÃO DA PESSOA</b></h4>
                            </div>
                            <div class="card-body text-start">
                                <?php
                                    include 'conecta.php';
                                    $id = $_GET['id'];
                                    $sql = "SELECT * FROM pessoa WHERE id=$id";
                                    $query = $conn->query($sql);
                                    while ($dados = $query->fetch_array()) {
                                        $nome = $dados['nome'];
                                        $idade = $dados['idade'];
                                        $cidade = $dados['cidade'];
                                    }
                                ?>
                                <div class="modal-body">

                                    <form action="edpessoa.php?id=<?php echo $id ?>" method="post">
                                        <label>NOME</label>
                                        <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required/>
                                        <label>IDADE</label>
                                        <input type="number" class="form-control" name="idade" value="<?php echo $idade; ?>" required/>
                                        <label>CIDADE</label>
                                        <input type="text" class="form-control" name="cidade" value="<?php echo $cidade; ?>" required>                            
                                        </br>
                                        <button type="submit" class="btn btn-outline-success"><b>ATUALIZAR</b></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>