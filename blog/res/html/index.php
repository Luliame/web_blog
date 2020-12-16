<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <center>
    <h1>LE BLOG</h1>
    <form action="UserController.php" method="post">
        <p>Pseudo : <input type="text" name="pseudo" /></p>
        <p>Comment : <input type="text" name="comment" /></p>
        <p><input type="submit" value="OK"></p>
    </form>

    <?php
    require_once '../../src/gateways/NewsGateway.php';
    $newsGw = new NewsGateway();
    echo '<p> FIRST NEW </p><br>';
    echo 'Title : ' . $newsGw->findById(1)['Title'] . '<br>';

    ?>
    </center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>