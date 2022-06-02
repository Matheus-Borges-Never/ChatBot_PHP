<?php
    $nome = $_POST['txtNome'];
    session_start();
        $_SESSION['nome'] = $nome;
?>
    
<html>

<head>
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center">ChatBot</h1>
    <hr /><br />

    <form action="prefere.php" method="POST" class="row md-12" style="margin-left: 0%;">
        <!-- 1ª Parte -->

        <div class="col-md-6" style="margin-top: 3%;">
            <div class="row justify-content-between">
                <div class="col-6" style="margin-left: 8vh;">
                    Olá, Qual o seu nome?
                </div>
            </div>
        </div>
        <br>
        <div class="col-4" style="margin-top: 3%; margin-left: 80vh;">
            <?php echo "$nome"?>
        </div>

        <!-- 2ª Parte -->

        <div class="col-md-6" style="margin-top: 3%;">
            <div class="row justify-content-between">
                <div class="col-6" style="margin-left: 8vh;">
                <?php echo "$nome"?>, informe um
                número para calcular a tabuada
                </div>
            </div>
        </div>
        <br>
        <div class="col-4" style="margin-top: 3%; margin-left: 80vh;">
            <input type="text" class="form-control" placeholder="..." name="txtNum">
        </div>


        <div class="col-12">
            <input type="submit" class="btn btn-primary" value="Enviar" style="margin-top: 3%; margin-left: 80vh;" />
        </div>

    </form>
</body>

</html>


