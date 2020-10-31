<?php include ("header.php");?><br><br><br>

    <!DOCTYPE html>
        <html lang="en">
            <head>
                <link rel="stylesheet" href="css/style.css">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>form</title>
            </head>
            <body>
            <?php
                $location = array ("Italy"=>"Rome", "Brazil" =>"Braiilia", "Luxembourg"=>"Luxembourg","Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
                        "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
                        "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
                        "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
                        "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw", "Albania" =>"Tirana" );
            ?>

            <form method = "post" action = "page3.php">

                Country: <input type="text" name= "Country"><br>
                    <input type="submit" value="submit"><br>

            <?php

                $value = @$_POST["Country"];
                
                if (array_key_exists($value, $location)) {
                
                echo $location [$value];}

            else {
               echo $valueErr = '<div class="error">
                    Country does not exist.
                </div>';} 

                ?> 
                <br>
            </form>

            </body>
        </html><br><br><br>
<?php include ("foot.php");?>