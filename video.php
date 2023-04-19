<html>
<head>
    <meta charset="UTF-8">
    <title>Video On Demand</title>
   <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <?php
        $con = new mysqli("localhost", "root", "", "dane3");
        if(isset($_POST["nr"]) && !empty($_POST["nr"])){
        $sql = "DELETE FROM `produkty` WHERE `id` = '".$_POST["nr"]."';";
        mysqli_query($con, $sql);
        }
        echo "<div class='lista'> 
        <h3>Polecamy</h3>";
        $sql="SELECT `id`, `nazwa`, `ilosc`, `opis`, `zdjecie` FROM `produkty` WHERE `id`=18 or `id`=22 or `id`=23 or `id`=25;";
        $res = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($res)){
        echo "<div class='film'>
        <h4>".$row["id"].". ".$row["nazwa"]."</h4>
        <img src='".$row["zdjecie"]."' alt='film'>
        <p>".$row["opis"]."</p>
            </div>            
            ";
        }
    
