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
    $result1 =mysqli_query($dbConn, "SELECT * FROM university");
    $x=0;
    while($row1 = mysqli_fetch_assoc($result1)){
        $a[$x]=$row1['uni'];
        $b[$x]=$row1['uni_id'];
        $x++;
    }
    $result2 =mysqli_query($dbConn, "SELECT * FROM skill");
    $z=0;
    while($row2 = mysqli_fetch_assoc($result2)){
        $a2[$z]=$row2['skill'];
        $b2[$z]=$row2['skill_id'];
        $z++;
    }
    ?>
    <div class="center">
        <div>
        <form name="form" method="post" action="#" id="form">
            <table>
                <tr>
                    <th colspan="2">
                        <h1 style="color:red">Създаване на CV</h2>
                    </th>
                </tr>
                <tr>
                    <td>
                        Име
                    </td>
                    <td>
                        <input type="text" name="name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Презиме
                    </td>
                    <td>
                        <input type="text" name="s_name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Фамилия
                    </td>
                    <td>
                        <input type="text" name="f_name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Дата на раждане
                    </td>
                    <td>
                        <input type="date" name="date_born" />
                    </td>
                <tr>
                <tr>
                    <td>
                        Избери университет
                    </td>
                    <td>
                        <?php
                            echo "<select name='university'>
                            ";
                            $y=0;
                            for ($y = 0; $y < count($a); $y++) {
                                echo "<option value='{$b[$y]}'>{$a[$y]}</option>";
                            }
                            echo "</select>";
                        ?>
                        
                        <a href="#" id="popupLink">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5.5%" height="5.5%" style="margin-top:1%" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                        <a>
                        <div class="popup-container">
                            <div id="popupMenu" class="popup-menu">
                                <input class="box-input" style="color:grey" type="text" placeholder="Име на университет" style="font-color:grey" name="add_uni"><br>
                                <button type="submit" name="submit_uni" class="box-button" style="margin-top:3%">Запази</button>
                            </div>
                        </div>
                    </td>
                <tr>
                <tr>
                    <td>
                        Умения
                        <text style="color:grey;font-size:15px">(multiple choice = ctrl+mL)</text>
                    </td>
                    <td>
                    <?php
                            echo "<select name='skill[]' multiple style='width: 30%; height: 100px;'>
                            ";
                            $y=0;
                            for ($y = 0; $y < count($a2); $y++) {
                                echo "<option value='{$b2[$y]}'>{$a2[$y]}</option>";
                            }
                            echo "</select>";
                        ?>
                        <a href="#" id="popupLink2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5.5%" height="5.5%" style="margin-top:1%" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                        <a>
                        <div class="popup-container">
                            <div id="popupMenu2" class="popup-menu">
                                <input class="box-input" style="color:grey" type="text" placeholder="Умение" style="font-color:grey" name="add_skill"><br>
                                <button class="box-button" name ="submit_skill" style="margin-top:3%">Запази</button>
                            </div>
                        </div>
                    </td>
            </table>
            <input style="margin-top:10%;margin-left:40%;font-size:170%" type="submit" name="submit" value="Запази" />
        </form>
        <?php

        /*$mysqli = new mysqli($host, $dbUser, $dbPass, $dbName);
        if (isset($_POST['add_uni'])) {
            $uni = $_POST["add_uni"];
            $stmt = $mysqli->prepare("SELECT uni_id FROM university WHERE uni=?");
            $stmt->bind_param("s",$u);
            $stmt->execute();
            $result = $stmt->get_result();  
            if($result->num_rows > 0 ) {
                $stmt->close();
            }
            else {
                $stmt->close();
                $stmt = $mysqli->prepare("INSERT INTO university (uni) VALUES (?)");
                $stmt->bind_param('s', $uni);
                $stmt->execute();
                $stmt->fetch();
                $stmt->close();
            }
        }
        */                    
        
        if (isset($_POST['submit'])){
        $mysqli = new mysqli($host, $dbUser, $dbPass, $dbName);
        $n = trim($_POST['name']);
        $fn = trim($_POST["f_name"]);
        $sn = trim($_POST["s_name"]);
        $born = $_POST["date_born"];
        $u = $_POST["university"];

        if (preg_match('/[a-zA-Z]/', $n)) {
            echo 'Имената не са валидни!';
        }
        else {
            $sql = "SELECT CURDATE() as ct";  
            $result  = mysqli_query($dbConn, $sql);
            $row = mysqli_fetch_assoc($result);
            $ct=$row['ct'];

            if ($born > $ct || $born < 1900) {
                echo "Невалидна дата!";
            }
            else{
                $stmt = $mysqli->prepare("SELECT person_id FROM person 
                                                WHERE p_name= ? and p_second=? and p_family=?
                                                and date_born=? and uni_id=?");
                $stmt->bind_param("ssssi",$n,$sn,$fn,$born,$u);
                $stmt->execute();
                $result = $stmt->get_result();  
                if($result->num_rows > 0 ) {
                    while ($row = mysqli_fetch_array($result)){
                        $res = $row['person_id'];
                    }
                }
                else if (!empty($n)&&!empty($sn)&&!empty($fn)&&!empty($born)&&!empty($u)){
                    $sql=" INSERT INTO person (p_name,p_second,p_family,uni_id,date_born) VALUES ('$n','$sn','$fn','$u','$born')";
                    $result = mysqli_query($dbConn,$sql);
                    if (!$result)
                {
                    die('Грешка!!!');
                }
                echo "Добавихте един запис!";
                
                $stmt = $mysqli->prepare("SELECT person_id FROM person 
                                                WHERE p_name= ? and p_second=? and p_family=?
                                                and date_born=? and uni_id=?");
                    $stmt->bind_param("ssssi",$n,$sn,$fn,$born,$u);
                    $stmt->execute();
                    $result = $stmt->get_result();  
                    if($result->num_rows > 0 ) {
                        while ($row = mysqli_fetch_array($result)){
                            $res = $row['person_id'];
                        }
                    }
                }
                if (isset($_POST['skill'])){
                    $s = $_POST["skill"];
                    for ($y = 0; $y < count($s); $y++) {
                        $stmt = $mysqli->prepare("SELECT * FROM person_skill
                                                WHERE person_id = ? and skill_id=?");
                        $stmt->bind_param("ii",$res,$s[$y]);
                        $stmt->execute();
                        $result = $stmt->get_result();  
                        if($result->num_rows > 0 ) {
                            continue;
                        }
                        $sql = "INSERT INTO person_skill (person_id,skill_id) VALUES ('$res','$s[$y]')";
                        $result = mysqli_query($dbConn,$sql);
                    }
                    echo "Уменията са добавени!";
                }
            }
            }
        }
        ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
