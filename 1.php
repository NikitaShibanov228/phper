<table border="2" cellspacing="0" width="350">
<thead>
<tr>
<th class="th-sm">Дата отзыва
</th>
<th class="th-sm">Оценка товара
</th>
<th class="th-sm">Должность
</th>
</tr>
</thead>
<tbody>
<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, "olimp");

$sql = "SELECT Date, Reiting, Imya FROM olimp order by Date, Reiting,Imya" ;
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
echo "<tr><td>" . $row["Date"]
. "</td><td>" . $row["Reiting"]
. "</td><td>" . $row["Imya"]
. "</td></tr>";
}
echo "</tbody>";
?>