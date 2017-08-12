<?php include ("./Celular.php");
        $obj = new Celular("iPhone 6", "Apple", 5, 16, 8, 7500);
        echo $obj ->getNome();
        echo ' ';
        echo $obj ->getMarca();
        echo ' ';
        echo $obj ->getTam_tela();
        echo ' ';
        echo $obj ->getMem_inter();
        echo " \n";
        echo $obj ->getMem_ram();
        echo ' ';
        echo $obj ->getPreco();
?>
