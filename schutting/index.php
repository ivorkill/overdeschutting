 <?php
    require_once 'config/config.php';
    require_once 'config/dbconnect.php';
    include 'views/head.html';
    include 'views/header.html';
    include 'views/pagination.php';
    echo "<div id='wrapper'>";
    $page = (empty($_GET['page'])) ? '' : $_GET['page'];
    $current_day = (empty($_GET['current_day'])) ? '' : $_GET['current_day'];
    switch ($page) {
    case 'song_list':
        require_once 'model/select_songlist.php';
        include 'views/song_list.php';
        break; 
    case 'daily_songs':
        require_once 'model/daily_songs.php';
        include 'views/daily_songs.php';
        break;
    default:
        require_once 'model/select_song.php';
        include 'views/songs.php';
        break;
    }
    include 'views/aside.php';
    echo "</div>";
    include 'views/footer.html';
?>