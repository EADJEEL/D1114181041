<?php

$row_count = $_GET['row_num'];
$col_count = $_GET['col_num'];
$gender = $_GET['gender'];
$dept = $_GET['dept'];
$messger = $_GET['messger'];

echo '表格大小' . $row_count . '列,' . $col_count . '行,';
echo '性別:' . $gender .'' ;
echo '科系:' . $dept .'' ;
echo '留言:' . $messger .'' ;

echo "table border=\"1\">";

for ($i = 0; $i < $row_count; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $col_count; $j++) 
    {
        echo '<td>行'. ($i+1) .'列'. ($i+1) .'</td>'
    }
    echo '</tr>';
}
echo '</table>';
?>