 <?php
    require_once 'config/config.php';
    require_once 'config/dbconnect.php';
    include 'views/head.html';
    include 'views/header.html';
    echo "<div id='wrapper'>";

    include 'views/pagination.php';
    echo "<section>";
    $page = (empty($_GET['page'])) ? '' : $_GET['page'];
    $current_day = (empty($_GET['current_day'])) ? '' : $_GET['current_day'];
    $song_id = (empty($_GET['song_id'])) ? '' : $_GET['song_id'];
switch ($page) {
    case 'song_list':
        require_once 'model/select_songlist.php';
        include 'views/song_list.php';
        break; 
    case 'daily_songs':
        require_once 'model/daily_songs.php';
        include 'views/daily_songs.php';
        break;
     case 'song_detail_page':
        require_once 'model/song_detail.php';
        include 'model/comment_reader.php';
        include 'views/song_detail_page.php';
        break;
    case 'contest':
        include 'views/prijsvraag.php';
        break;
    case 'insert':
        include 'model/comment_system.php';
        header('location: index.php?page=song_detail_page&song_id=' . $song_id);
        break;
    default:
        require_once 'model/select_song.php';
        include 'views/songs.php';
        break;
}
    echo "</section>";
    include 'views/aside.php';
    echo "</div>";
    include 'views/footer.html';
?>