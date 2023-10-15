
<?php
if (!isset($_POST["login"]) || ($_POST["login"] == ""))header("Location: index_admin.php?err=err");
if (!isset($_POST["password"]) || ($_POST["password"] == ""))header("Location: index_admin.php?err=err");
print_r($_POST);
?>
<script>
    function iframe_change(id) {
        document.getElementById("iframe").src="workspace_menu.php?id=".concat('', id);
        document.getElementById("iframe").style.display="block";
    }


</script>


<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="section_map" >
        <div>
            <h1>ТУТ ТИПА КАРТА</h1>
            <?php
                include("config_db.php");
                $arr_workspace = [];
                for ($i = 0; $i <= 26; $i++) {
                    for ($j = 0; $j <= 26; $j++) {
                        $arr_workspace[] = 0;
                    }
                }
                $qq_workspace_list=SQL_qq("SELECT * FROM `workspace_list`");
                foreach($qq_workspace_list as $r_workspace_list)
                if($r_workspace_list!="")
                if($r_workspace_list["id_workspace"]!=""){
                    $arr_workspace[$r_workspace_list["id_workspace"]] = $r_workspace_list["workspace_class"];
                }

                $arr_workspace_ind = [];
                for ($i = 0; $i <= 26; $i++) {
                    for ($j = 0; $j <= 26; $j++) {
                        $arr_workspace_ind[] = 0;
                    }
                }
                $qq_workspace_ind_list=SQL_qq("SELECT * FROM `workspace_ind`");
                foreach($qq_workspace_ind_list as $r_workspace_ind_list)
                if($r_workspace_ind_list!="")
                if($r_workspace_ind_list["id"]!=""){
                    $arr_workspace_ind[$r_workspace_ind_list["id_workspace"]] = $r_workspace_ind_list["status"];
                }

                $id_loc_now = 0;
                $sefes = 0;
                //print_r( $arr_workspace);
                echo "<table style = \"border: solid;\">";
                for ($i = 0; $i <= 25; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j <= 25; $j++) {
                        if ($arr_workspace[$id_loc_now] != 0) {
                            echo "<td onclick=\"iframe_change(".$id_loc_now.");\"class=\"td_case td_case".$arr_workspace[$id_loc_now]." td_case_status".$arr_workspace_ind[$id_loc_now]."\">".$id_loc_now."</td>";
                        }
                        else{
                        echo "<td  class=\"td_case\" style=\"color: white;\">".$id_loc_now."</td>";
                        }
                        $id_loc_now++;
                    }
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </div>
        <div>  
            <iframe id="iframe" style="display:none;" src="workspace_menu.php" width="600" height="300">
                Ваш браузер не поддерживает плавающие фреймы!
            </iframe>
        </div>
    </section>
    
    <section>
   
    </section>

    <section class="list">
        <div>
            <h1>Ближайщие записи</h1>
            <?php
                    $qq=SQL_qq("SELECT * FROM `workspace_ind` WHERE `status` < 3");
                    echo "<table><tr><td>Номер записи</td>
                        <td>Имя</td><td>Фамилия</td>
                        <td>Отчество</td><td>Номер телефона</td>
                        <td>Номер локации</td><td>Время старта</td>
                        <td>Время завершения</td></tr>";
                    foreach($qq as $r)
                    if($r!="")
                    if($r["id"]!=""){
                        $qq_ind=SQL_qq("SELECT * FROM `individ_list` WHERE `id` =".$r["id_individ"]);
                        foreach($qq_ind as $r_ind)
                            if($r_ind!="")
                            if($r_ind["id"]!=""){
                                $color = "white";
                                if($r["status"]==1) $color = "#1885FF;"; 
                                elseif ($r["status"]==2) $color = "#FF3118";                                    
                                echo "<tr style=\"background-color:".$color.";\"><td>".$r["id"]."</td><td>".$r_ind["name"]."</td>
                                    <td>".$r_ind["surname"]."</td><td>".$r_ind["patronymic"]."</td>
                                    <td>".$r_ind["tel"]."</td><td>".$r["id_workspace"]."</td>
                                    <td>".$r["date_start"]."</td><td>".$r["date_end"]."</td></tr>";
                    }
                }
                    echo "</table>";

                    
                    
            ?>
        </div>
    </section>
</body>
</html>
