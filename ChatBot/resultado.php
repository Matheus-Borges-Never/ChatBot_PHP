<?php
    session_start();
    $nome = $_SESSION['nome'];
    
    $num = $_SESSION['num'];
        $_SESSION['num'] = $num;

    $opc = $_POST['txtOpc'];

    echo '
    
<html>

<head>
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center">ChatBot</h1>
    <hr /><br />
        
    
    <div class="row md-12">
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
             '; echo $nome . '  
        </div>

        <!-- 2ª Parte -->

        <div class="col-md-6" style="margin-top: 3%;">
            <div class="row justify-content-between">
                <div class="col-6" style="margin-left: 8vh;">
                '; echo $nome . ', informe um
                número para calcular a tabuada
                </div>
            </div>
        </div>
        <br>
        <div class="col-4" style="margin-top: 3%; margin-left: 80vh;">
        '; echo $num . '
        </div>

        <!-- 3ª Parte -->

        <div class="col-md-6" style="margin-top: 3%;">
            <div class="row justify-content-between">
                <div class="col-6" style="margin-left: 8vh;">
                '; echo $nome . ', Qual opção você prefere? <br>
                1 - Mostrar apenas o resultado <br>
                2 - Mostrar a tabuada completa
                </div>
            </div>
        </div>

        <div class="col-4" style="margin-top: 3%; margin-left: 80vh;">
        '; echo $opc . '
        </div>

        <div class="col-md-6" style="margin-top: 3%; margin-left: 8vh;">
        '; if ($opc == 1){
         echo $num * 1 .'
    
        <br>'; echo $num * 2 . '
        
        <br>'; echo $num * 3 . '
        
        <br>'; echo $num * 4 . '
        
        <br>'; echo $num * 5 . '
        
        <br>'; echo $num * 6 . '
        
        <br>'; echo $num * 7 . '
        
        <br>'; echo $num * 8 . '
        
        <br>'; echo $num * 9 . '
        
        <br> '; echo $num * 10 . '

        ';} else if ($opc == 2) {

            echo "$num * 1 = " . $num * 1;
    
            echo "<br> $num * 2 = " . $num * 2;
            
            echo "<br> $num * 3 = " . $num * 3;
            
            echo "<br> $num * 4 = " . $num * 4;
            
            echo "<br> $num * 5 = " . $num * 5;
            
            echo "<br> $num * 6 = " . $num * 6;
            
            echo "<br> $num * 7 = " . $num * 7;
            
            echo "<br> $num * 8 = " . $num * 8;
            
            echo "<br> $num * 9 = " . $num * 9;
            
            echo "<br> $num * 10 = " . $num * 10;
        } else {
            echo "O Número Informado não é uma opção";
        }

        echo '
        </div>

    </div> 

    </body>

</html>

    ';


    ?>


