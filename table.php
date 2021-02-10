

<?php

require_once("dbcon.php");
if(isset($_GET[]delete)){
    $sql = "DELETE FROM cinema WHERE cinema_id = '($_GET['id'])'";
    

}
<table style="width:100%">
  <tr>
    <th>CinemaID</th>
    <th>CinemaName</th>
    <th>CinemaTime</th>
    <th>CinemaTime</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
?>