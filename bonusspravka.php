<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <a href="index.php">Назад</a><br>
    <?php
        include "config.php";
        $sql = "SELECT YEAR(CURDATE()) as ct";   
        $result  = mysqli_query($dbConn, $sql);
        $row = mysqli_fetch_assoc($result);
        $ct=$row['ct'];
        
        $sql = "SELECT CONCAT(FLOOR(TIMESTAMPDIFF(YEAR, date_born, CURDATE()) DIV 10)*10 ,' - ',
                    FLOOR(TIMESTAMPDIFF(YEAR, date_born, CURDATE()) DIV 10)*10+9) as Age, 
                    GROUP_CONCAT(DISTINCT skill.skill SEPARATOR ', ') as skills,
                    GROUP_CONCAT(DISTINCT CONCAT('(', p_name, ' ', p_family,')') SEPARATOR ', ') as name from person
                    JOIN person_skill on person.person_id=person_skill.person_id
                    JOIN skill on person_skill.skill_id=skill.skill_id
                    GROUP BY AGE";
        $result  = mysqli_query($dbConn, $sql);
        echo "<table style='margin-top:5%;margin-left:10%;' border='1'>";
                    echo "<tr>";
                    echo "<th>Възрастова Група</th>";
                    echo "<th>Имена</th>";
                    echo "<th>Умения</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td align='center'>".$row['Age']."</td>";
                        echo "<td align='center'>"."(".$row['name'].")</td>";
                        echo "<td align='center'>" . $row['skills'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
    ?>
</body>
</html>