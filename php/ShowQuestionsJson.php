<!DOCTYPE html>

<html lang="en">

<head>
    <?php include '../html/Head.html' ?>
</head>

<body>
    <?php include '../php/Menus.php' ?>
    <style>
        <?php include '../styles/tableStyles.css' ?>
    </style>
    <section>


        <?php
        $user = $_GET['user'];
        echo $user;
        $data = file_get_contents("../json/Questions.json");
        $array = json_decode($data);
        echo '<h3><center>CONTENIDO DEL FICHERO JSON </h3><p><p>';
        echo '<body>';
        echo '<p><center><table ><tr><th>Tema</th><th>Autor</th><th>Enunciado</th><th>Respuesta Correcta</th><th>Respuesta incorrecta 1</th><th>Respuesta Incorrecta 2</th><th>Respuesta Incorrecta 3</th></tr>';
        foreach ($array->assessmentItems as $question) {
            $confirmUser = $question->author;
            if ($confirmUser == $user) {
                $author =  $question->author;
                $itemBody = $question->itemBody->p;
                $correctResponse = $question->correctResponse->value;
                /* $incorrectResponses = $question->incorrectResponses->value[0];
            $incorrectResponse1 = $question->incorrectResponses->value[1];
            $incorrectResponse2 = $question->incorrectResponses->value[2];*/
                echo '<tr>

    <td>' . $author . '</td>
    <td>' . $itemBody . '</td>
    <td>' . $correctResponse . '</td>
    </tr>';
            }
        }
        echo '</table><center>';
        echo '</body>'; ?>


    </section>
    <?php include '../html/Footer.html' ?>
</body>

</html>