<?php
    require_once('config/config.php');
    require_once('config/dbconnect.php');
    include('views/head.html');
    include('views/header.html');
?>
   <div id="wrapper">
       <div id="pageimg">
           <div id="pagination">
                <li><a href='#'>Juli</a> | </li>
                <li><a href='#'>2</a> | </li>
                <li><a href='#'>3</a> | </li>
                <li><a href='#'>4</a> | </li>
                <li><a href='#'>5</a> | </li>
                <li><a href='#'>6</a> | </li>
                <li><a href='#'>7</a> | </li>
                <li><a href='#'>8</a> | </li>
                <li><a href='#'>9</a> | </li>
                <li><a href='#'>10</a> | </li>
                <li><a href='#'>11</a> | </li>
                <li><a href='#'>12</a> | </li>
                <li><a href='#'>13</a> | </li>
                <li><a href='#'>14</a> | </li>
                <li><a href='#'>15</a> | </li>
                <li><a href='#'>16</a> | </li>
                <li><a href='#'>17</a> | </li>
                <li><a href='#'>18</a> | </li>
                <li><a href='#'>19</a> | </li>
                <li><a href='#'>20</a> | </li>
                <li><a href='#'>21</a> | </li>
                <li><a href='#'>22</a> | </li>
                <li><a href='#'>23</a> | </li>
                <li><a href='#'>24</a> | </li>
            </div>
        </div>
        <section>
            <div id="articles"> 
                <?php
                require_once("model/select_article.php");
                include("views/songs.php");
                ?>
            </div>
        </section>
        <?php
        include 'views/aside.html';
        ?>
    </div>
<?php
include 'views/footer.html';
?>