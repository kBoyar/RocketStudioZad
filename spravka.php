<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <a href="index.php">Назад</a><br>
    <div style="justify-content: center;align-items: center; margin-top: 5%;">
        <h1 style="color:red;margin-left:26%">Справка за издадени CV-та</h2>
        <div style="margin-left:38%">
            <form name="form" method="post" action="#">
                <table style="width: 40%;margin-top: 7%;">
                    <tr >
                        <td style="text-align: center; vertical-align: middle;gap=">От </td>
                        <td style="text-align: center; vertical-align: middle;"><input type="date" name="from" /></td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle;">До </td>
                        <td style="text-align: center; vertical-align: middle;"><input type="date" name="to" /></td>
                    </tr>
                </table>
                <input style="margin-top:10%;font-size:170%" type="submit" name="submit" value="Изведи" />
            </form>
            
        </div>
    <div>
    <?php
            include "config.php";
            if (isset($_POST['submit'])){
                $o = $_POST['from'];
                $d = $_POST['to'];
                if ( !empty($o) && !empty($d)){
                    $sql = "SELECT person.person_id,p_name,p_second,p_family,university.uni,date_born,
                    GROUP_CONCAT(skill.skill SEPARATOR ', ') AS skills
                    FROM person 
                    JOIN person_skill on person.person_id=person_skill.person_id
                    JOIN skill on person_skill.skill_id=skill.skill_id
                    JOIN university on person.uni_id=university.uni_id
                    WHERE date_born >='$o' and date_born <='$d'
                    GROUP BY person.person_id";
                    $result = mysqli_query($dbConn,$sql);
                
                    echo "<table style='margin-top:5%;margin-left:10%;' border='1'>";
                    echo "<tr>";
                    echo "<th>Ид</th>";
                    echo "<th>Имена</th>";
                    echo "<th>Университет</th>";
                    echo "<th>Дата на раждане</th>";
                    echo "<th>Умения</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td align='center'>".$row['person_id']."</td>";
                        echo "<td align='center'>".$row['p_name']." ".$row['p_second']." ".$row['p_family']."</td>";
                        echo "<td align='center'>".$row['uni']."</td>";
                        echo "<td align='center'>".$row['date_born']."</td>";
                        echo "<td align='center> ";
                        echo "<td align='center'>" . $row['skills'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
            ?>
</body>
</html>