<table border="2" cellspacing="0" width="250">
<thead>
<tr>
<th class="th-sm">Оценка товара
</th>
<th class="th-sm">Количество отзывов
</th>
</tr>
</thead>
<tbody>
<?php
$conn = mysqli_connect('localhost','root','','olimp');
$sql = "SELECT Reiting, count(Tovar) as col FROM olimp
WHERE Tovar = 'Тент-шатер Greenell Приват XL' GROUP BY Reiting ORDER by col";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
echo "<tr><td>" . $row["Reiting"]
. "</td><td>" . $row['col']
. "</td></tr>";}
echo "</tbody>";
?>