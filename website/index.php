<html>
    <head>
        <title> My Megashop !!! </title>
    </head>

    <body>
        <h1> Welcome to my Mega shop </h1>
        <ul>
             <?php
                 $json = file_get_contents('http://product-service');
                 $obj = json_decode($json);

                 $products = $obj->food;
                 foreach ($products as $product) {
                     echo "<li> $product </li>";
                 }
             ?>
        </ul>
     </body>
</html>
