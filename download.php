 <?php
$url = $_POST[url];
$key = ""; // mail us on info@pinterestdownload.online
$url = "https://dl.mylikelo.com/wp-json/aio-dl/api/?key=$key&url=$url";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo '<h2>';
echo $json_data["title"];
echo '</h2>';
echo '<img src="'.$json_data["thumbnail"].'" alt='.$json_data["title"].'" style="width:40%;height:40%;" class="responsive">';
echo '<br>';
$events = $json_data['medias'];//events array


    echo '<table class="table table-hover">';
echo '<tr>';
echo '<th>Quality</th>';
echo '<th>Size</th>';
echo '<th>Format</th>';
echo '<th>Download</th>';
echo '</tr>';
foreach($events as $key=>$value)
{
     echo '<tr><td>' . $value['quality'] . '</td><td>' . $value['formattedSize'] . '</td><td>' . $value['extension'] . '</td><td><button type="button" class="btn btn-danger"><a href="' . $value['url'] . '">Download</a></button</td></tr>';
}
echo '</tr>';
echo '</table>';


  


?>