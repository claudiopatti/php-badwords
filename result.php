<?php 
    $wordRemoveTextare = $_GET['resultInput'];
    $withoutSpaceTextarea = trim($_GET['resultTextarea']);
    $withoutWordTextarea = str_replace($wordRemoveTextare, '***', $withoutSpaceTextarea);
    $lenghtTextareaWithoutWord =  strlen($withoutWordTextarea);
    $lenghtTextarea =  strlen($withoutSpaceTextarea);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Result</title>
    </head>
    <body>
        <div>
            <a href="./index.php">Ritorna alla prima pagina</a>

        </div>

        <div>
            <p>
                Il testo è: <?php echo $withoutSpaceTextarea ?> 
            </p>

            <p>
                La lunghezza del testo è: <?php echo $lenghtTextarea ?> 
            </p>

            <p>
                Il testo senza la parola scritta nell'input è: <?php echo $withoutWordTextarea ?> 
            </p>

            <p>
                La lunghezza del testo è: <?php echo $lenghtTextareaWithoutWord ?> 
            </p>
        </div>
    </body>
</html>