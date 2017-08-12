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
        
        $obj2 = new Celular("Galaxy S7", "Samsung", 5, 16, 8, 7500);
        echo $obj2 ->getNome();
        echo "<br />";
        echo $obj2 ->getMarca();
        echo "<br />";
        echo $obj2 ->getTam_tela();
        echo "<br />";
        echo $obj2 ->getMem_inter();
        echo "<br />";
        echo $obj2 ->getMem_ram();
        echo "<br />";
        echo $obj2 ->getPreco();
        
        $obj3 = new Celular("Moto X", "Motorolla", 5, 16, 8, 7500);
        echo $obj3 ->getNome();
        echo "<br />";
        echo $obj3 ->getMarca();
        echo "<br />";
        echo $obj3 ->getTam_tela();
        echo "<br />";
        echo $obj3 ->getMem_inter();
        echo "<br />";
        echo $obj3 ->getMem_ram();
        echo "<br />";
        echo $obj3 ->getPreco();
        
        
        
?>
