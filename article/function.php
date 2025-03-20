<!-- @import jquery & sweet alert  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
// @Connection database
$connection = new mysqli('localhost','root','','cms-news-9-10',3305);
$BASE_URL = "http://localhost/myphp/cms-for-student/admin/assets/image/";




function getTrening() {
    global $connection;
    $select_query = "
        SELECT * FROM `news` ORDER BY `viewer` DESC LIMIT 1;
    ";
    $result = $connection->query($select_query);
    return mysqli_fetch_assoc($result);
}


function getSubTrending($id) {
    global $connection, $BASE_URL;
    $select_query = "
        SELECT * FROM `news` WHERE `id` <> $id  ORDER BY `viewer` DESC LIMIT 2;
    ";


    $result = $connection->query($select_query);

    while($row = mysqli_fetch_assoc($result)) {
        echo '
            <div class="col-12">
                <figure>
                    <a href="news-detail.php?id='.$row['id'].'">
                        <div class="thumbnail">
                            <img style="width: 350px; height: 160px; object-fit: cover;;" src="'.$BASE_URL.$row['thumbnail'].'" alt="">
                        <div class="title">
                            '.$row['title'].'
                        </div>
                        </div>
                    </a>
                </figure>
            </div>
        ';
    }
}


function increaseViwer($id) {
    global $connection;
    $connection->query("UPDATE `news` SET `viewer` = `viewer` + 1 WHERE `id` = '$id';");
}


function getDetail($id) {
    global $connection;
    increaseViwer($id);
    return mysqli_fetch_assoc( $connection->query("SELECT * FROM `news` WHERE `id` = $id;") );
}


