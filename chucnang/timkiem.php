<?php
        $sele=$_POST['select'];
        if(isset($_POST['timkiem'])){
            if($sele=='Hublot'){
                header('location:link/Hublot/index.php');
            }
        }
        ?>