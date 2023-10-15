<?php
print_r($_GET);
include("config_db.php");
$free_loc = 1;
$qq_list=SQL_qq("SELECT * FROM `workspace_ind` WHERE `id_workspace` = ".$_GET["id"]);
foreach($qq_list as $r_list)
if($r_list!="")
if($r_list["id"]!=""){
    if ($r_list["status"]!=3) {
        $qq_ind_list=SQL_qq("SELECT * FROM `individ_list` WHERE `id` = ".$r_list["id_individ"]);
        //print_r($qq_ind_list);
        foreach($qq_ind_list as $r_ind_list)
        if($r_ind_list!="")
        if($r_ind_list["id"]!=""){
            echo "id - ".$r_ind_list["id"]."<br> Имя - ".$r_ind_list["name"]."<br> Фамилия - ".$r_ind_list["surname"]."
            <br> Отчество - ".$r_ind_list["patronymic"]."<br> Телефон - ".$r_ind_list["tel"]."<br>";
        }
        echo $r_list["status"];
        $free_loc = 0;

    }
}
if ($free_loc == 1) {
    echo "Место свободно";
}
?>