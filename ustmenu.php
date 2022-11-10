<?php

        $query = $db->query("SELECT * FROM omenu WHERE omenu_ust = '0'", PDO::FETCH_ASSOC);
        if ($query->rowCount()) {
          
            foreach ($query as $row) {
 $query2 = $db->query("SELECT * FROM omenu WHERE omenu_ust = '{$row["omenu_id"]}'", PDO::FETCH_ASSOC);
                if ($query2->rowCount()) {
                    echo '
                    <li><a href="' . $row["omenu_link"] . '">
                  ' . $row["omenu_ad"] . '<i class="ti-angle-down"></i></a><ul class="dropdown">';
                    foreach ($query2 as $row2) {
                        echo ' <li><a href="' . $row2["omenu_link"] . '">' . $row2["omenu_ad"] . '</a>';
                    }
                    echo '</li></ul>';
                } else {
                    echo ' <li><a href="' . $row["omenu_link"] . '">' . $row["omenu_ad"] . '</a></li>';
                }
            }
        }
?>  
