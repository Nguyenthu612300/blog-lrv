<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
         $strHML = '';
        foreach($lstPosts as $postItem){
            $strHML = $strHML . '<div>' .$postItem->title . '</div>';
        }
        echo $strHML;
    ?>
</body>
</html>