<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>

    <style>
        table {
            border-collapse: collapse;
            width: 80%;
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

$Student = [
    "CA226" => [
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],

    "CA223" => [
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],

    "CA221" => [
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]
];

?>

<table>

    <tr>
        <th></th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
    </tr>

    <?php foreach($Student as $row => $columns){ ?>

        <tr>
            <td><?php echo $row; ?></td>

            <?php foreach($columns as $column => $value){ ?>

                <td><?php echo $value; ?></td>

            <?php } ?>
        </tr>

    <?php } ?>

</table>

</body>
</html>