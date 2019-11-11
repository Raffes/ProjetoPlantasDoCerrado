<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <tr class='size-option'>
                                                                        <td class='form-group' id='select6'>
                                                                            <select class='input search-categories' id='formulario' name='nomeCientificoCarpoteca'>
                                                                                <option>Selecione</option>
                                                                                <?php echo $options; ?>
                                                                                <option onclick='extraFormulario6()'>Outro</option>
                                                                            </select></td>

                                                                        <td class='form-group'>
                                                                            <input class='input search-input' id='formulario' name='nomePopularCarpoteca' type='text' placeholder='Nome Popular'>
                                                                        </td>                                                                                 

                                                                    </tr>
                                                                    <tr>
                                                                        <td id='f6'></td>
                                                                    </tr>


                                                                    <tr class='size-option'>
                                                                        <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Divisão:</label></td>
                                                                        <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Classe:</label></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class='form-group' id='select7'>
                                                                            <select class='input search-categories' id='formulario' name='divisaoFormulario'>
                                                                                <option>Selecione</option>
                                                                                <?php echo $options1; ?>
                                                                                <option onclick='extraFormulario7()'>Outro</option>
                                                                            </select></td>
                                                                        <td class='form-group' id='select8'>
                                                                            <select class='input search-categories' id='formulario' name='classeFormulario'>
                                                                                <option>Selecione</option>
                                                                                <?php echo $options2; ?>
                                                                                <option onclick='extraFormulario8()'>Outro</option>
                                                                            </select></td>
                                                                    </tr>


                                                                    <tr class='size-option'>
                                                                        <td class='form-group' id='f7'></td>
                                                                        <td class='form-group' id='f8'></td>
                                                                    </tr>


                                                                    <tr class='size-option'>
                                                                        <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Ordem:</label></td>
                                                                        <td class='form-group'><label class='text-uppercase' id='formularioLabel'>Família:</label></td>
                                                                    </tr>
                                                                    <tr class='size-option'>
                                                                        <td class='form-group' id='select9'>
                                                                            <select class='input search-categories' id='formulario' name='ordemFormulario'>
                                                                                <?php echo $options3; ?>
                                                                                <option onclick='extraFormulario9()'>Outro</option>
                                                                            </select></td>

                                                                        <td class='form-group' id='select10'>
                                                                            <select class='input search-categories' id='formulario' name='familiaFormulario'>
                                                                                <option>Selecione</option>
                                                                                <?php echo $options4; ?>
                                                                                <option onclick='extraFormulario10()'>Outro</option>
                                                                            </select></td>

                                                                    </tr>

                                                                    <tr class='size-option'>
                                                                        <td class='form-group' id='f9'></td>
                                                                        <td class='form-group' id='f10'></td>
                                                                    </tr>
    </body>
</html>
