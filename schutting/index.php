 <?php
    require_once 'config/config.php';
    require_once 'config/dbconnect.php';
    include 'views/head.html';
    include 'views/header.html';
<<<<<<< HEAD
    echo "<div id='wrapper'>";

    include 'views/pagination.php';
    echo "<section>";
    $page = (empty($_GET['page'])) ? '' : $_GET['page'];
    $current_day = (empty($_GET['current_day'])) ? '' : $_GET['current_day'];
=======
    include 'views/pagination.php';
    include 'views/aside.php';
    echo "<div id='wrapper'>";
    $page = (empty($_GET['page'])) ? '' : $_GET['page'];
    $current_day = (empty($_GET['current_day'])) ? '' : $_GET['current_day'];
    $song_id = (empty($_GET['song_id'])) ? '' : $_GET['song_id'];
>>>>>>> master
    switch ($page) {
    case 'song_list':
        require_once 'model/select_songlist.php';
        include 'views/song_list.php';
        break; 
    case 'daily_songs':
        require_once 'model/daily_songs.php';
        include 'views/daily_songs.php';
        break;
<<<<<<< HEAD
=======
    case 'song_detail_page':
        require_once 'model/song_detail.php';
        include 'views/song_detail_page.php';
        break;
    case 'contest':
        include 'views/prijsvraag.php';
        break;
>>>>>>> master
    default:
        require_once 'model/select_song.php';
        include 'views/songs.php';
        break;
    }
<<<<<<< HEAD
    echo "</section>";
    include 'views/aside.php';

    echo "</div>";
    
=======
    echo "</div>";
>>>>>>> master
    include 'views/footer.html';
?>