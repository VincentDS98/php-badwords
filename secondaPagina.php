<?php
var_dump($_GET);

var_dump($_GET['paragrafo']);
?>


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
        <div>
            <h2>
                Paragrafo inviato:
            </h2>
            <p>
                <?php 
                
                    echo $_GET['paragrafo'];
                
                ?>
            </p> 

            <h5>
                Lunghezza paragrafo:  <?php echo strlen($_GET['paragrafo']) ?>
            </h5>
        </div>

        <div>
            <h3>
                Censura: <?php echo $_GET['badword'];?>
            </h3>
        </div>

        <div>
            <h2>
                Paragrafo censurato:
            </h2>
            <p>
                 
                
                <?php echo str_replace($_GET['badword'], '***',$_GET['paragrafo']); ?>
                
                
            </p> 

            <h5>
                Lunghezza paragrafo: <?php echo strlen(str_replace($_GET['badword'], '***',$_GET['paragrafo'])); ?>
            </h5>
        </div>

        <div>
            <h3>
                Censura: <?php echo $_GET['badword'];?>
            </h3>
        </div>
        

    </main>

</body>
</html>