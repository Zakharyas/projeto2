<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Pedido</title>
</head>
<body>
    <header>
        <h1 class="text-center">Resultado de processamento</h1>
    </header>
<br>
    <main class="container">
        <div class="alert alert-success text-center">
            <p>
                Pedido enviado com sucesso.
            </p>
        </div>
        <p class="text-center mx-5">
            <?php
            $n = $_POST["nome"];
            echo "Olá, <b>$n,</b> seu pedido estará em serviço logo. <br>";
            echo " Em um prazo de 15 minutos lhe retornamos o processo. ";
            ?>
        </p>
    </main>
    <footer class="text-center">
        <p>&copy;Zakharyas</p>
    </footer>
    
</body>
</html>