<?php
        echo '<div align="center">';
        if ($currpage >= 2 && $currpage <= $total_pages-1 || $currpage == $total_pages)  {
            echo'<strong><a href="#">PREV</a><strong>   ';
        }

        $b = $currpage - 2;
        $c = $currpage + 2;

        if ($b <= 0)    {
            $c -= ($b - 1);
            $b = 1;
        }

        if ($c > $total_pages)   {
            $c = $total_pages;
            $b = $b - 1 ;
        }

        for ($a = $b + 1; $a <= $c; $a++)    {
            if ($a == $currpage)    {
                echo'<span style="background-color: blue; color: white">'.$a.'</span>   ';
            }
            else    {
                echo'<a href="index.php?page='.$a.'">'.$a.'</a>   ';
            }
        }

        if ($currpage >= 2 && $currpage <= $total_pages-1 || $currpage == 1 )  {
            echo'<strong><a href="#">NEXT</a></storng>   ';
        }
         echo '</div>';
        ?>