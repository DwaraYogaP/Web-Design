<?php
    echo "<table style='border:1px solid black; padding:3px;'>";
?>

<?php
    for($i=1; $i <=50; $i++) {
        echo "<td style='border:1px solid black; padding:3px;'>$i</td>";
        if($i%5 == 0) {
            echo "<tr>";
        }
    }
?>

<?php
    echo "</table>";
?>