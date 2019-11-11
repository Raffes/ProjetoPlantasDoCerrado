<?php

include 'conexao.php';

$Menu = "SELECT * FROM VwFiltro";

$resultadoMenu = mysqli_query($conecta, $Menu);
$optionsD = "";
$optionsC = "";
$optionsO = "";
$optionsF = "";
$optionsCap = "";


if ($resultadoMenu->num_rows > 0) {


    for ($D = 0; $D < $linhaDivisao = $resultadoMenu->fetch_assoc(); $D++) {
        $optionsD = $optionsD . "<li><a href='divisoes.php'>" . $linhaDivisao["divisao"] . "</a></li>";
        if (($D + 1) % 6 == 0) {
            echo "</ul>"
                    . "</div>"
                    . "<ul class='list-links'>"
                    . "<li><h3 class='list-links-title'>Categorias</h3></li>"
            ;
        }

        if ($D == $linhaDivisao = $resultadoMenu->fetch_assoc()) {
            echo "</ul>"
                    . "<hr class='hidden-md hidden-lg'>"
                    . "</div>";
        }

        if ($D + 1 >= 20) {
           echo "</div><bottom>Add</bottom>";
            return;
        }
    }
}
//////////////////////////////////////////////////////////////////////////////////

    
   else if ($resultadoMenu->num_rows > 0) {
    for ($C = 0; $C < $linhaClasse = $resultadoMenu->fetch_assoc(); $C++) {
        $optionsC = $optionsC . "<li><a href='classes.php'>" . $linhaClasse["classe"] . "</a></li>";
        if (($C + 1) % 6 == 0) {
            $optionsC = $optionsC . "</ul>"
                    . "</div>"
                    . "<ul class='list-links'>"
                    . "<li><h3 class='list-links-title'>Categorias</h3></li>"
            ;
        }

        if ($C == $linhaClasse = $resultadoMenu->fetch_assoc()) {
            $optionsC = $optionsC . "</ul>"
                    . "<hr class='hidden-md hidden-lg'>"
                    . "</div>";
        }

        if ($C + 1 >= 20) {
            $optionsC = $optionsC . "</div><bottom>Add</bottom>";
            return;
        }
    }
    }

    //////////////////////////////////////////////////////////////////////////////////
else if ($resultadoMenu->num_rows > 0) {
    for ($O = 0; $O < $linhaOrdem = $resultadoMenu->fetch_assoc(); $O++) {
        $optionsO = $optionsO . "<li><a href='ordens.php'>" . $linhaOrdem["ordem"] . "</a></li>";
        if (($O + 1) % 6 == 0) {
            $optionsO = $optionsO . "</ul>"
                    . "</div>"
                    . "<ul class='list-links'>"
                    . "<li><h3 class='list-links-title'>Categorias</h3></li>"
            ;
        }

        if ($O == $linhaOrdem = $resultadoMenu->fetch_assoc()) {
            $optionsO = $optionsO . "</ul>"
                    . "<hr class='hidden-md hidden-lg'>"
                    . "</div>";
        }

        if ($O + 1 >= 20) {
            $optionsO = $optionsO . "</div><bottom>Add</bottom>";
            return;
        }
    }
}
    //////////////////////////////////////////////////////////////////////////////////

else if ($resultadoMenu->num_rows > 0) {
    for ($F = 0; $F < $linhaFamilia = $resultadoMenu->fetch_assoc(); $F++) {
        $optionsF = $optionsF . "<li><a href='familias.php'>" . $linhaFamilia["familia"] . "</a></li>";
        if (($F + 1) % 6 == 0) {
            $optionsF = $optionsF . "</ul>"
                    . "</div>"
                    . "<ul class='list-links'>"
                    . "<li><h3 class='list-links-title'>Categorias</h3></li>"
            ;
        }

        if ($F == $linhaFamilia = $resultadoMenu->fetch_assoc()) {
            $optionsF = $optionsF . "</ul>"
                    . "<hr class='hidden-md hidden-lg'>"
                    . "</div>";
        }

        if ($F + 1 >= 20) {
            $optionsF = $optionsF . "</div><bottom>Add</bottom>";
            return;
        }
    }
}
    //////////////////////////////////////////////////////////////////////////////////

else if ($resultadoMenu->num_rows > 0) {
    for ($Cap = 0; $Cap < $linhaCarpoteca = $resultadoMenu->fetch_assoc(); $Cap++) {
        $optionsCap = $optionsCap ."<li><a href='carpotecas.php'>" . $linhaCarpoteca["nomeCientificoCarpoteca"] . "</a></li>";
        if (($Cap + 1) % 6 == 0) {
            $optionsCap = $optionsCap ."</ul>"
            . "</div>"
            . "<ul class='list-links'>"
            . "<li><h3 class='list-links-title'>Categorias</h3></li>"
            ;
        }

        if ($Cap == $linhaCarpoteca = $resultadoMenu->fetch_assoc()) {
            $optionsCap = $optionsCap ."</ul>"
            . "<hr class='hidden-md hidden-lg'>"
            . "</div>";
        }

        if ($Cap + 1 >= 20) {
           $optionsCap = $optionsCap ."</div><bottom>Add</bottom>";
            return;
        }
    }
} else {
    echo "0 resultados";
}

////////////////////////////////////////////////////////////////////////////////


                                                    
                                                    



