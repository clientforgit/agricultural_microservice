<!DOCTYPE html>
<html lang="uk">
<head>
    <style>
        table, tr, td, th {
            border: 1px solid black;
        }
        body {
            padding: 30px;
        }
        td, th {
            padding: 5px;
        }
    </style>
    <title>agricultural</title>
</head>
<body>
<?php
include_once 'FieldPropertyDao.php';
$dao = new FieldPropertyDao();
$picked_name = $_GET['field'];
?>
<form action="/index.php">
    <label>
        <select name="field">
            <option selected disabled>Оберіть поле</option>
            <?php
            foreach ($dao->get_names() as $name) {
                echo "<option name={$name}>$name</option>";
            }
            ?>
        </select>
    </label>
    <button type="submit">Отримати</button>
</form>


<?php

if ($picked_name) {
    $row = $dao->get_property_by_name($picked_name);
    ?>
    <table style="margin-top: 20px;">
        <tr>
            <th>Назва</th>
            <td><?=$row['name']?></td>
        </tr>
        <tr>
            <th>Площа</th>
            <td><?=$row['area']?></td>
        </tr>
        <tr>
            <th>Bal</th>
            <td><?=$row['bal']?></td>
        </tr>
        <tr>
            <th>pH</th>
            <td><?=$row['pH']?></td>
        </tr>
        <tr>
            <th>гумус</th>
            <td><?=$row['humus']?></td>
        </tr>
        <tr>
            <th>Азот</th>
            <td><?=$row['nitrogen']?></td>
        </tr>
        <tr>
            <th>Фосфор</th>
            <td><?=$row['phosphorus']?></td>
        </tr>
        <tr>
            <th> </th>
            <td><?=$row['zero']?></td>
        </tr>
        <tr>
            <th>1</th>
            <td><?=$row['one']?></td>
        </tr>
        <tr>
            <th>2</th>
            <td><?=$row['two']?></td>
        </tr>
        <tr>
            <th>3</th>
            <td><?=$row['three']?></td>
        </tr>
        <tr>
            <th>4</th>
            <td><?=$row['four']?></td>
        </tr>
        <tr>
            <th>5</th>
            <td><?=$row['five']?></td>
        </tr>
        <tr>
            <th>6</th>
            <td><?=$row['six']?></td>
        </tr>
        <tr>
            <th>7</th>
            <td><?=$row['seven']?></td>
        </tr>
    </table>
    <?php
}
?>

</body>
</html>