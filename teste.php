<?php

$maxRows = 10;
$maxItems = 3 * $maxRows;

echo "<div class='row'>";
for ($i=0; $i<$numItems;$i++) {
echo "<div class='item'>".$items[$i]."</div>";
if (($i+1) % 3 == 0) {
//*** if divisible by 3, close row
echo "</div><div class='row'>";
}
if ($i == $numItems) {
//*** last item reached, close div
echo "</div>";
}
if ($i+1 >= $maxItems ) {
//*** max 10 row, add more button.
echo "</div><input type='submit' value='Add More'>";
return;
}
}

