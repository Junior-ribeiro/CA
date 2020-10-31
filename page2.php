<?php include ("header.php");?><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
 
<body>
    <table class="table" border ="1" width = "900" align="center"> 
 
<tr>
    <th class="table1">Country</th>
    <th class="table1">Capital</th>
</tr>
 
<?php      
    $location = array ("Italy"=>"Rome", "Luxembourg"=>"Luxembourg","Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
    "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw" ,"Albania" =>"Tirana");

    foreach($location as $x => $value) {

        echo "<tr><td>".$x ."</td>
                 <td>".$value ."</td>
              </tr>";
    }        
?>
    </table>

</body>
</html>




<?php include ("foot.php");?>