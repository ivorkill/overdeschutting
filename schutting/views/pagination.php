<div id="pageimg">
    <div id="pagination">
    <li><a href='#'>Juli</a> | </li>
    <?php
        for ($i=2; $i < 25; $i++) { 
            echo "<li><a href='?page=daily_songs&current_day=".$i."'>".$i."</a> | </li>";
        }
    ?>
    </div>
</div>