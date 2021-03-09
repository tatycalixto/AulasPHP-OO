<?php
require "mamifero.php";
require "peixe.php";
//feito pelo aluno Nicolas e modificado por mim
class TestarAnimais
{


    public function Main()
    {

        $objmamifero = new Mamifero("Camelo", "150 cm", "4", "Amarelo", "Terra", "2.0 m/s", "plantas espinhosas, arbustos e grama seca");
        $objmamifero->dadosMamifero();

        echo "<hr/>";
        echo "<br/>";

        $objpeixe = new Peixe("Tubarão", "300", "0", "cinza", "mar", "1.5 m/s", "cartilaginoso");
        $objpeixe->dadosPeixe();
    }
}
$objTestar = new TestarAnimais();
$objTestar->Main();
