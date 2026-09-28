<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors Table</title>

    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ddd;
        }

        td:first-child {
            background-color: #ddd;
        }
    </style>
</head>

<body>

<?php

$Colors = [
    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],

    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],

    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]
];

?>

<table>

    <tr>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
    </tr>

    <?php foreach ($Colors as $row => $columns) { ?>

        <tr>
            <td><?php echo $row; ?></td>

            <?php foreach ($columns as $column => $value) { ?>

                <td><?php echo $value; ?></td>

            <?php } ?>

        </tr>

    <?php } ?>

</table>

</body>
</html>