<?php
function loadProfile() {


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    sleep(1);
}

$conn = mysqli_connect('localhost', 'root', '', 'db3') or die ('Không thể kết nối đến CSDL');
mysqli_set_charset($conn, 'utf8');

$page_profile = isset($_GET['page_profile']) ? (int)$_GET['page_profile'] : 1;

if ($page_profile < 1) {
    $page_profile = 1;
}

$limit_profile = 3;

$start_profile = ($limit_profile * $page_profile) - $limit_profile;

$sql = "select * from content_facebook limit $start_profile,".($limit_profile + 1);
 
$query = mysqli_query($conn, $sql) or die ('query error');

$result = array();
while ($row = mysqli_fetch_array($query))
{
    array_push($result, $row);
}
$total = count($result);
if ($total > $limit_profile){
    for ($i = 0; $i < $total - 1; $i++)
    {
        echo '<div class="item2z">';
            echo $result[$i]['id'].' - '.$result[$i]['content'];
        echo '</div>';
    }
}
else{
    for ($i = 0; $i < $total; $i++)
    {
        echo '
        <style>
            .balls {
                display: none !important;
            }
        </style>
        <div class="item2z">';
            echo $result[$i]['id'].' - '.$result[$i]['content'];
        echo '</div>';
    }
}
if ($total <= $limit_profile){
    echo '<script language="javascript">stopped_profile = true; </script>';
}
}
loadProfile()

?>