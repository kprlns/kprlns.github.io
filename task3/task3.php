<?php
    $n = $_GET['n'];
    $res = []
    for($i = 0; $i < $n; $i++) {
        $res[$i] = array_fill(0, $n, 1);
    }

    for($k = 2; $k < $n; $k++) {
        $i = $k - 1;
        $j = 1;
        for(; $j <= $k - 1; $j++, $i--) {
            $res[$i][$j] =  $res[$i - 1][$j] + $res[$i][$j - 1]
        }
    }

    echo "<div align=\"center\">\n";

        for($k = 0; $k < $n; $k++) {
            echo "<div>\n";
            $i = $k;
            $j = 0;
            for (; $j <= $k; ++$j, --$i) {
                echo $res[$i][$j]." ";
                if ($j !== $k - 1) {
                    echo " ";
                }
            }
            echo "\n</div>\n";
        }

    echo "</div>"

?>