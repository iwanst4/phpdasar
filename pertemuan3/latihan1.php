<!-- 
// Pengulangan
// for
// for( $i = 0; $i < 5; $i++) {
//     echo "Nasih Assidqi <br>";
// };

// // while
// $i = 0;
// while ( $i < 5 ) {
//     echo "Halwa Suara Assidqi <br>";
//     $i++;
// };

// // do . . while
// $i=0;
// do {
//     echo "Anak sholih sholihah <br>";
//     $i++;
// } while( $i < 5 );

// foreach : pengulangan khusus array -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: lightblue ;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10">
    <?php
        for ( $i=1; $i <=7; $i++ ) { ?>
        <?php if ($i % 2 == 1) { ?>
        <tr class="warna-baris">
        <?php } else { ?>
        <tr> <?php }?>
            <?php
            for ( $j=1; $j <=5; $j++ ) { ?>
            <td>
                <?php echo "$i,$j"; ?>
            </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<table border="1" cellpadding="10">
    <?php 
        $i=1;
        while ($i <= 3) { ?>
            <tr>
                <?php 
                $j=1;
                while ($j <=5) {?>
                <td>
                    <?php echo "$i,$j"; ?>
                </td>
                <?php $j++; }?>
            </tr>
        <?php $i++; } ?>
</table>
<table border="1" cellpadding="10">
    <?php 
        $i=1;
        do { ?>
            <tr>
                <?php 
                $j=1;
                do { ?> 
                    <td>
                        <?php echo "$i,$j"; ?>
                    </td>
                <?php $j++; }
                while ($j <= 5); ?>
            </tr>
        <?php $i++; }
        while ($i <= 3); ?>
</table>

</body>
</html>
