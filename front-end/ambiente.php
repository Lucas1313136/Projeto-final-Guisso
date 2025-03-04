<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambiente</title>
</head>

<body>
    <header>
        <?php
            include "../inc/cabecalho.php";
            include "../inc/validacao.php";
        ?>
    </header>

    <main>
        <?php
        if (isset($_GET["date"])) {
            $data = $_GET["date"];
        ?>
            <form action="sumario.php" method="get">
                <label for="data">Data:</label>
                <input id="data" type="text" name="data" value="<?php echo $data; ?>" readonly><br><br>
                <label for="ambiente">Ambiente:</label>
                <select name="ambiente" id="ambiente">
                    <option value="labinfoa">Laboratório de Informática A</option>
                    <option value="labinfob">Laboratório de Informática B</option>
                    <option value="auditorio">Auditório</option>
                    <option value="quadra">Quadra Poliesportiva</option>
                    <option value="e estac">Estacionamento</option>
                </select><br><br>
                <input type="submit" value="Enviar">
            </form>
            
        <?php
        } else {
            header('Location: ../front-end/calendario.php');
            exit;
        }
        ?>


        
    </main>

    <footer>
    <?php
        include "../inc/rodape.php"

    ?>
    </footer>
</body>

</html>