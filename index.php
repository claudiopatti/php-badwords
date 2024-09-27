<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <div>
            <form action="./result.php" method="GET">
                <div>
                    <label for="textarea">Scrivi un testo</label>
                    <textarea name="resultTextarea" id="textarea">
                    </textarea>                    
                </div>
                <div>
                    <label for="resultInput">Quale parola vuoi levare?</label>
                    <input name="resultInput" id="resultInput" type="text">
                </div>
                
                <button type="submit">
                    invia i dati
            
                </button>
            </form>
        </div>
    </body>
</html>