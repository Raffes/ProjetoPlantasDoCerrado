<?php
include 'conexao.php';
$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg = filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);

$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

$feed = "SELECT * FROM VwFeed LIMIT $inicio, $qnt_result_pg";

$resultado = mysqli_query($conecta, $feed);

if (($resultado) AND $resultado->num_rows != 0) {
while ($linha = mysqli_fetch_assoc($resultado)) {
?>
<table id='feed1'>
    <tr>
        <td colspan='4'><img src='<?php echo $linha["imgPlanta1"]; ?>' alt='imagem'></td>
    </tr>
    <tr>
        <td class='text-uppercase'> <h6 class='title'>Nome Científico: </h6></td>
        <td><?php echo $linha["nomeCientifico"]; ?></td>
        <td class='text-uppercase'><h6 class='title'>Nome Popular: </h6></td>
        <td><?php echo $linha["nomePopular"]; ?></td>
    </tr>
    <tr>
        <td class='text-uppercase'> <h6 class='title'>Divisão: </h6></td>
        <td><?php echo $linha["divisao"]; ?></td>
        <td class='text-uppercase'><h6 class='title'>Classe: </h6></td>
        <td><?php echo $linha["classe"]; ?></td>
    </tr>
    <tr>
        <td class='text-uppercase'> <h6 class='title'>Ordem: </h6></td>
        <td><?php echo $linha["ordem"]; ?></td>"
        <td class='text-uppercase'><h6 class='title'>Familia: </h6></td>
        <td><?php echo $linha["familia"]; ?></td>
    </tr>
    <tr>
        <td class='text-uppercase'><h6 class='title'>Carpoteca: </h6></td>
        <!--/* ."<td colspan='3'>".$linha["carpoteca"]. "</td>" */-->
    </tr>
</table>
<table id='feed2'>
    <tr>
        <th colspan='4'  class='section-title'> <h6 class='title'>Descrição: </h6></th>
    </tr>
    <tr id='desc'>
        <td colspan='4' id='des' style='text-align: justify;'><?php echo $linha["descricao"]; ?></td>
    </tr>
    <tr>
        <td colspan='4' class='product-btns'>
            <button class='main-btn icon-btn'><i class='fa fa-heart'></i></button></td>
    </tr>
</table>
<!--/* . "<button class='main-btn quick-view' oneclick='abrirIframe()'><i class='fa fa-search-plus'></i> Vê Descrição Completa</button>" */-->

<?php
}

}else {
echo "0 results";
}

$result_pg = "SELECT COUNT(id_plantas) AS num_result FROM plantas";
$resultado_pg = mysqli_query($conecta, $result_pg);
$row_pg = mysqli_fetch_assoc($resultado_pg);

$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

$max_links = 2;
?>

<dev class='pull-right'>
<ul class='store-pages'>
  <li><span class='text-uppercase'>Páginas:</span></li>
  <?php
  
  echo "<li><a href src='#' onclick='feed(1, $qnt_result_pg)'><i class='fa fa-caret-left'></i></a></li>";
  
  for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1;$pag_ant++){
        if($pag_ant >= 1){
        echo "<li class='active'><a href src='#' onclick='feed($pag_ant, $qnt_result_pg)'>$pag_ant</a></li>";
        
        }
  }
  echo "<a href='#'> $pagina </a>";
  
  for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
      if($pag_dep <= $quantidade_pg){
      echo "<li class='active'><a href src='#' onclick='feed($pag_dep, $qnt_result_pg)'>$pag_dep</a></li>";
  }}
  
  echo "<li><a href='#' onclick='feed($quantidade_pg, $qnt_result_pg)'><i class='fa fa-caret-right'></i></a></li>";
          ?>
  
</ul>
</dev>




<!--/* for ($j = 0; $j < $linha = $resultado->fetch_assoc(); $j++) {
  echo "<div class='pull-right'>

  <ul class='store-pages'>
  <li><span class='text-uppercase'>Paginas:</span></li>
  <li class='active'>$j</li>
  <li><a href='index.php'><i class='fa fa-caret-right'></i></a></li>
  </ul>
  </div>";
  } */-->
