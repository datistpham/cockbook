<?php
    // include('a.php');
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        sleep(1);
    }
    $conn = mysqli_connect('localhost', 'root', '', 'db3') or die('Không thể kết nối đến CSDL');
    mysqli_set_charset($conn, 'utf8');
    $page = isset($_POST['page']) ? (int) $_POST['page'] : 1;
    if ($page < 1) {
        $page = 1;
    }
    $limit = 3;
    $start = ($limit * $page) - $limit;
    $sql = "SELECT * from content_facebook limit $start," . ($limit + 1);
    $query = mysqli_query($conn, $sql) or die('Lỗi câu truy vấn');

    $result = array();
    while ($row = mysqli_fetch_array($query)) {

        array_push($result, $row);
    }
    
    $total = count($result);
    if ($total > $limit) {
        for ($i = 0; $i < $total - 1; $i++) {
            echo "<div class='item fjkdlf' style='background-color:#242526'>";
            echo $result[$i]['id'] . '-' . $result[$i]['content'];
            echo '</div>';
        }
    } else {
        for ($i = 0; $i < $total; $i++) {
            echo "<div class='item fjkdlf' style='background-color:#242526'>";
            echo $result[$i]['id'] . '-' . $result[$i]['content'];

            echo '</div>';
        }
    }
    if ($total <= $limit) {
        echo '<script language="javascript">stopped = true</script>';
        echo '<div class="end-status" style="text-align:center;padding:10px 0 20px 0">Da het tin vui long load lai </div>';
    }

?>