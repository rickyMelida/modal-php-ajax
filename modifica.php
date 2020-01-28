<?php

    if($_POST['modificar']) {
        $con = new mysqli('localhost', 'root', '', 'personal');

        $sql = "SELECT * from datos where id='".$_POST['modificar']."'" ;

        $res = $con->query($sql);

        $a = $res->fetch_assoc();

        

        /*foreach($res as $key) {

            echo "
                <p>Nombre : ".$key['nombre']."</p>
                <p>Apellido : ".$key['apellido']."</p>
                <p>Edad : ".$key['edad']."</p>

            ";
        }*/

        echo json_encode($a);
    }else {
        echo "
            <p>No leyo nada</p>
        ";
    }

?>