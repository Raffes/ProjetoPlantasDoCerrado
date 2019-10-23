<table id="fichamento1">

    <tr class="size-option">
        <td class="form-group"><label class="text-uppercase" id="formularioLabel">Nome Científico:</label></td>
        <td class="form-group"><label class="text-uppercase" id="formularioLabel">Nome Popular:</label></td>
    </tr>

    <tr class="size-option">



        <?php
        $nomeCientificoPlanta = "SELECT nomeCientifico FROM plantas";

        $resultNomeCientificoPlanta = $conecta->query(($nomeCientificoPlanta));
        if ($resultNomeCientificoPlanta->num_rows > 0) {
            while ($linhaNomeCientificoPlanta = $resultNomeCientificoPlanta->fetch_assoc()) {
                echo "<td class='form-group' id='select1'>
                                                                                <select class='input search-categories' id='formulario' name='nomeCientificoPlanta'>
                                                                                <option>" . $linhaNomeCientificoPlanta["nomeCientifico"] . "</option>
                                                                                <option onclick='extraFormulario1()'>Outro</option>
                                                                                </select></td>";
            }
        } else {
            echo "<td class='form-group'>"
            . "<input class='input search-input' id='formulario' name='nomeCientificoPlanta' type='text' placeholder='Nome Científico da Planta'></td>";
        }
        ?>

        <td class="form-group">
            <input class="input search-input" id="formulario" name="nomePopular" type="text" placeholder="Nome Popular">
        </td> 
    </tr>

    <tr>
        <td id="f1"></td>
    </tr>

    <tr class="size-option">
        <td class="form-group"><label class="text-uppercase" id="formularioLabel">Divisão:</label></td>
        <td class="form-group"><label class="text-uppercase" id="formularioLabel">Classe:</label></td>
    </tr>

    <tr>
        <?php
        $divisaoForm = "SELECT divisao FROM plantas";

        $resultDivisaoForm = $conecta->query(($divisaoForm));
        if ($resultDivisaoForm->num_rows > 0) {
            while ($linhaDivisaoForm = $resultDivisaoForm->fetch_assoc()) {
                echo "<td class='form-group' id='select2'>
                                                                                <select class='input search-categories' id='formulario' name='divisaoFormulario'>
                                                                                <option>" . $linhaDivisaoForm["divisao"] . "</option>
                                                                                <option onclick='extraFormulario2()'>Outro</option>
                                                                                </select></td>";
            }
        } else {
            echo "<td class='form-group'>"
            . "<input class='input search-input' id='formulario' name='divisaoFormulario' type='text' placeholder='Divisão'></td>";
        }


        $classeForm = "SELECT classe FROM plantas";

        $resultClasseForm = $conecta->query(($classeForm));
        if ($resultClasseForm->num_rows > 0) {
            while ($linhaClasseFiltro = $resultClasseForm->fetch_assoc()) {
                echo "<td class='form-group' id='select3'>
                                                                                <select class='input search-categories' id='formulario' name='classeFormulario'>
                                                                                <option>" . $linhaClasseFiltro["classe"] . "</option>
                                                                                </select></td>";
            }
        } else {
            echo "<td class='form-group'>"
            . "<input class='input search-input' id='formulario' name='classeFormulario' type='text' placeholder='Classe'></td>";
        }
        ?>
    </tr>


    <tr class="size-option">
        <td class="form-group" id="f2"></td>
        <td class="form-group" id="f3"></td>
    </tr>


    <tr class="size-option">
        <td class="form-group"><label class="text-uppercase" id="formularioLabel">Ordem:</label></td>
        <td class="form-group"><label class="text-uppercase" id="formularioLabel">Família:</label></td>
    </tr>
    <tr class="size-option">
        <?php
        $ordemForm = "SELECT ordem FROM plantas";

        $resultOrdemForm = $conecta->query(($ordemForm));
        if ($resultOrdemForm->num_rows > 0) {
            while ($linhaOrdemForm = $resultOrdemForm->fetch_assoc()) {
                echo "<td class='form-group' id='select4'>
                                                                                <select class='input search-categories' id='formulario' name='ordemFormulario'>
                                                                                <option>" . $linhaOrdemForm["ordem"] . "</option>
                                                                                <option onclick='extraFormulario2()'>Outro</option>
                                                                                </select></td>";
            }
        } else {
            echo "<td class='form-group'>"
            . "<input class='input search-input' id='formulario' name='ordemFormulario' type='text' placeholder='Ordem'></td>";
        }


        $familiaForm = "SELECT familia FROM plantas";

        $resultFamiliaForm = $conecta->query(($familiaForm));
        if ($resultFamiliaForm->num_rows > 0) {
            while ($linhaFamiliaForm = $resultFamiliaForm->fetch_assoc()) {
                echo "<td class='form-group' id='select5'>
                                                                                <select class='input search-categories' id='formulario' name='familiaFormulario'>
                                                                                <option>" . $linhaFamiliaForm["familia"] . "</option>
                                                                                </select></td>";
            }
        } else {
            echo "<td class='form-group'>"
            . "<input class='input search-input' id='formulario' name='familiaFormulario' type='text' placeholder='Família'></td>";
        }
        ?>
    </tr>

    <tr class="size-option">
        <td class="form-group" id="f4"></td>
        <td class="form-group" id="f5"></td>
    </tr>

    <tr class="size-option">
        <td colspan="2" class="form-group"><label class="text-uppercase">Imagem:</label></td>
    </tr>
    <tr class="size-option">
        <td class="form-group">
            <input type="file" id="formulario" name="fotoPlanta1" size="25">
        </td>
        <td class="form-group">
            <input type="file" id="formulario" name="fotoPlanta2" size="25">
        </td>
    </tr>
    <tr class="size-option">
        <td class="form-group">
            <input type="file" id="formulario" name="fotoPlanta3" size="25">
        </td>
        <td class="form-group">
            <input type="file" id="formulario" name="fotoPlanta4" size="25">
        </td>
    </tr>





</table>         

