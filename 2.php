<form method="POST" action="" class="form">
<p>Показать товары с оценкой больше, чем:</p>
<input type="text" name="per">
<input type="submit" value="Показать">
</form>

<table border="2" cellspacing="0" width="450">
<thead>
<tr>
<th class="th-sm">Оценка товара
</th>
<th class="th-sm">Найменование товара
</th>
<th class="th-sm">Достоинства
</th>
<th class="th-sm">Недостатки
</th>

</tr>
</thead>
<tbody>

<?php
$per=$_POST['per'];
$conn = mysqli_connect('localhost','root','','olimp');

$sql = "SELECT Reiting, Tovar, Plys, Minys FROM olimp where Reiting >$per order by Reiting";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
echo "<tr><td>" . $row["Reiting"]
. "</td><td>" . $row["Tovar"]
. "</td><td>" . $row["Plys"]
. "</td><td>" . $row["Minys"]
. "</td></tr>";
}
echo "</tbody>";
?>