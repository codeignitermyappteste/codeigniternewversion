<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?= form_open('/submit') ?>

        <div>
            <input type="text" name="usuario">
            <input type="password" name="senha">
            <button type="submit">ENTRAR</button>
        </div>

    <?= form_close() ?>

</body>
</html>