<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <a href="index.php">Назад</a><br>
    <?php
    $dbConn = new mysqli('localhost', 'root', '');
    $sql = 'CREATE Database cv_create';
    if ($dbConn->query($sql) === TRUE)
    { echo 'Базата данни е създадена. <br>';}

    include "config.php";

    $sql ="CREATE TABLE university (
        uni_id INT(5) NOT NULL AUTO_INCREMENT,
        uni VARCHAR(30) DEFAULT NULL,
        PRIMARY KEY (uni_id)
        ) ENGINE=INNODB DEFAULT CHARSET=utf8";
        $result = mysqli_query($dbConn,$sql);
        if(!$result)
        die('Грешка при създаване на таблицата. 4');
        echo "Таблицата е създадена!";


    $sql ="CREATE TABLE skill (
        skill_id INT(5) NOT NULL AUTO_INCREMENT,
        skill VARCHAR(30) DEFAULT NULL,
        PRIMARY KEY (skill_id)
        ) ENGINE=INNODB DEFAULT CHARSET=utf8";
        $result = mysqli_query($dbConn,$sql);
        if(!$result)
        die('Грешка при създаване на таблицата. 3');
        echo "Таблицата е създадена!";


    $sql ="CREATE TABLE person (
        person_id INT(5) NOT NULL AUTO_INCREMENT,
        p_name VARCHAR(30) DEFAULT NULL,
        p_second VARCHAR(30) DEFAULT NULL,
        p_family VARCHAR(30) DEFAULT NULL,
        uni_id INT(5) NOT NULL,
        date_born DATE NOT NULL,
        PRIMARY KEY (person_id),
        FOREIGN KEY (uni_id) REFERENCES university(uni_id)
        ) ENGINE=INNODB DEFAULT CHARSET=utf8";
        $result = mysqli_query($dbConn,$sql);
        if(!$result)
        die('Грешка при създаване на таблицата. 1');
        echo "Таблицата е създадена!";


    $sql ="CREATE TABLE person_skill (
        ps_id INT(5) NOT NULL AUTO_INCREMENT,
        person_id INT(5) NOT NULL,
        skill_id INT(5) NOT NULL,
        PRIMARY KEY (ps_id),
        FOREIGN KEY (person_id) REFERENCES person(person_id),
        FOREIGN KEY (skill_id) REFERENCES skill(skill_id)
        ) ENGINE=INNODB DEFAULT CHARSET=utf8";
        $result = mysqli_query($dbConn,$sql);
        if(!$result)
        die('Грешка при създаване на таблицата. 2');
        echo "Таблицата е създадена!";

    $sql = "INSERT INTO university (uni) VALUES ('ТУ-Варна')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO university (uni) VALUES ('МУ-Варна')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO university (uni) VALUES ('ТУ-София')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO university (uni) VALUES ('МУ-София')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO university (uni) VALUES ('МУ-Пловдив')";
    $result = mysqli_query($dbConn,$sql);

    $sql = "INSERT INTO skill (skill) VALUES ('PHP')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO skill (skill) VALUES ('Java')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO skill (skill) VALUES ('Python')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO skill (skill) VALUES ('JS')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO skill (skill) VALUES ('C++')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO skill (skill) VALUES ('RUBY')";
    $result = mysqli_query($dbConn,$sql);

    $sql = "INSERT INTO person (p_name,p_second,p_family,uni_id,date_born) VALUES ('Кристиян','Юлиянов','Бояров',1,'2002-10-01')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person (p_name,p_second,p_family,uni_id,date_born) VALUES ('Иван','Иванов','Иванов',2,'1999-09-01')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person (p_name,p_second,p_family,uni_id,date_born) VALUES ('Драган','Драганов','Драганов',5,'2005-8-23')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person (p_name,p_second,p_family,uni_id,date_born) VALUES ('Петър','Петров','Петров',4,'1983-12-23')";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person (p_name,p_second,p_family,uni_id,date_born) VALUES ('Злато','Злат','Петров',3,'1998-04-04')";
    $result = mysqli_query($dbConn,$sql);

    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (1,1)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (1,2)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (1,3)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (1,4)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (2,3)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (2,4)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (2,6)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (3,1)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (3,2)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (3,3)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (3,6)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (4,4)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (4,1)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (4,2)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (5,1)";
    $result = mysqli_query($dbConn,$sql);
    $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES (5,5)";
    $result = mysqli_query($dbConn,$sql);

    echo "Добавени са записи!";
    ?>
</body>
</html>