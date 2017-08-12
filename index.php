<?php include ("./Celular.php");
        $obj = new Celular("iPhone 6", "Apple", 5, 16, 8, 7500);
        echo $obj ->getNome();
        echo "<br />";
        echo $obj ->getMarca();
        echo "<br />";
        echo $obj ->getTam_tela();
        echo "<br />";
        echo $obj ->getMem_inter();
        echo "<br />";
        echo $obj ->getMem_ram();
        echo "<br />";
        echo $obj ->getPreco();
?>
