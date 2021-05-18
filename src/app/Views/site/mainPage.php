<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/Images/logos/iconDarkRed.png" type="image/x-icon">
        <!-- CSS Files -->
        <link rel="stylesheet" href="/css/style.css" type="text/css" />
        <link rel="stylesheet" href="/css/create.css" type="text/css" />
        <link rel="stylesheet" href="/css/header.css" type="text/css">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <!-- Jquery File -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <!-- Js File -->
        <script src="/js/index.js"></script>
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/62026585de.js" crossorigin="anonymous"></script>
        <!-- Sweetalert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>MyVizion</title>
    </head>
    <body>
        <!-- header -->
        <?= $this->renderSection('header') ?>
        
        <!-- content -->
        <?= $this->renderSection('content') ?>
        
        <!-- footer -->
        <?= $this->renderSection('footer') //voor als we footer hebben ?>
    </body>
</html>