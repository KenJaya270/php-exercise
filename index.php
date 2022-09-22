<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        .warna{

            background-color: silver;

        }

        .warna2{

            background-color: red;
        }
    </style>

<body>
    <table border= "1" cellpadding = "5" cellspacing = "2">

        <?php for ($i = 1; $i <= 5; $i++) : ?>
            
            <?php if($i % 2 == 1): ?>
                
                <tr class ="warna">
                    
            <?php endif;?>
                    
                <?php for($j = 1; $j <= 5; $j++) :?>
                    <td
                    <?php if($i===3 && $j===3):?>

                        class="warna2"
                        
                    <?php endif;?>    

                    ><?= "$i, $j";?>

                    </td>

                <?php endfor;?>

            </tr>

        <?php endfor;?>
    </table>
</body>
</html>