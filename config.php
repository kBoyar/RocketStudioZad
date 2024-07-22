<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php
    $host= 'localhost';
    $dbUser= 'root';
    $dbPass= '';
    $dbName='cv_create';
    if(!$dbConn=mysqli_connect($host, $dbUser, $dbPass)) {
    die('Не може да се осъществи връзка със сървъра.');
    }
    if (!mysqli_select_db($dbConn, $dbName))
    {
    die('Не може да се селектира базата от данни.');
    }
    else
    echo "Базата данни е селектирана. <br>";
    ?>
</body>
</html>