<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php print('BT Table'); ?></title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<!-- page content -->
<p id="test">TEST</p>

<!--<table-->
<!--        id="table"-->
<!--        data-toggle="table"-->
<!--        data-url="/req.php">-->
<!--    <thead>-->
<!--        <tr>-->
<!--            <th data-field="id">ID</th>-->
<!--            <th data-field="firstname">Name</th>-->
<!--            <th data-field="lastname">Family</th>-->
<!--            <th data-field="email">Email</th>-->
<!--            <th data-field="reg_date">Date</th>-->
<!---->
<!--        </tr>-->
<!--    </thead>-->
<!--</table>-->

</body>

<?php

echo '<h2>Значение аргумента по умолчанию</h2>';

function makeDrink($drinkName, $sugarFree = false){
    $resString = 'Сделать ' . $drinkName;
    if ($sugarFree) {
        $resString .= ' без сахара';
    } else {
        $resString  .= ' с сахаром';
    }
    $resString .='<br/>';
    return $resString;
}

echo makeDrink('чашечку чая');
echo makeDrink('чашечку кофе', true);

echo '<h2>Передача аргумента по значению и по ссылке</h2>';
function dintChangeArgument($val){
    $val = $val +1;
    return $val;
}
$value = 5;
$result = dintChangeArgument($value);
echo 'value = ' . $value . '; $result = ' . $result . '<br/>';


?>




<script>
    $(document).ready(function(){
        $("#test").text('WWWWWW')
    });
</script>
</html>