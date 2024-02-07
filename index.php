


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <h1>
    PHP BADWORDS
    </h1>
</header>

    <main>
        
        


        <form action="./secondaPagina.php" method="get">

            <div>
                <label for="paragrafo">
                    Paragrafo
                </label>
                <textarea name="paragrafo" id="paragrafo" cols="30" rows="10" placeholder="inserisci paragrafo"></textarea>
            </div>

            <div>
                <label for="badword">
                    censura
                </label>
                <input type="text" name="badword" id="badword" placeholder="inserisci parola">
            </div>

            <div>
                <button type="submit">
                    Invia
                </button>
            </div>
        </form>
    </main>

</body>
</html>