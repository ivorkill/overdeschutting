<div id="pageimg">
    <div id="pagination">
    <li><a href='?page=home'>Juli |</a> </li>
    <?php
        for ($i=2; $i < 25; $i++) {
            if($i > date('d')) {
            echo "<li> ".$i." | </li>";
            }
            if ($i == date('d')){
                echo "<li class='selectedPagination'> <a href='?page=daily_songs&current_day=".$i."'>".$i."</a> |</li>";
            }
            if ($i < date('d')) {
                echo "<li style='background-color:grey;'>  <a href='?page=daily_songs&current_day=".$i."'> ".$i."</a> |</li>";
            }
        }
    ?>
    </div>
</div>