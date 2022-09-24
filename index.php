<?php
echo '<table border = 1 cellpadding = 10 cellspacing = 3 align=center>';
echo '<tr bgcolor="green" style="color: white;">';
echo '<th style="background:white;"> </th>';
for($i = 0; $i <= 10; $i++)
{
echo '<th>'.$i.'</th>';
}
echo '</tr>';
for($i = 0; $i <= 10; $i++)
{
echo '<tr>';
echo '<th bgcolor=orange style="color: black;">'.$i.'</th>';
for($t = 0; $t <= 10; $t++)
{
  if($i==$t){
    $hasil = $i * $t;
    echo '<td align = center style="background:red;">'.$hasil.'</td>';
  }else{
$hasil = $i * $t;
echo '<td align = center>'.$hasil.'</td>';
}
}
echo '<tr>';
}
echo '</table>';
?>