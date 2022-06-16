<html lang="en">
    
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table Contents</title>
</head>
<body bgcolor="Azure">  
<div>
        <h2>Display Data using PHP/HTML & MySQL - Raghu Wable (test)</h2>


        <style>
        <?php include 'styling.css'; ?>
        </style>



    <style><?php include 'C:/Code/phpApp/styling.css'; ?></style>

    </div>

<?php 


    $search = $_POST["search"];
    


    $host    = "localhost";
    $user    = "root";
    $pass    = "raghunandan";
    $db_name = "icd";
    
    
        //create connection
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection = mysqli_connect($host, $user, $pass, $db_name);


    $sql = "SELECT * FROM icd_10";


    $selection = $_POST['checkbox'];

    if ( $selection == "Gene" ) {
        
        $sql = "SELECT * FROM icd_10 WHERE Gene LIKE '%$search%'";

    } else if ( $selection == "disease") {

        $sql = "SELECT * FROM icd_10 WHERE Disease LIKE '%$search%'";

    }
     
    $result = mysqli_query($connection, $sql);


    $all_property = array();  //declare an array for saving property

    

    //showing property
    echo '<table class="data-table">
            <tr class="data-heading">';  //initialize table tag

           
    while ($property = mysqli_fetch_field($result)) {
        echo '<td>' . $property->name . '</td>';  //get field name for header
        $all_property[] = $property->name;  //save those to array
    }
    echo '</tr>'; //end tr tag

    //showing all data
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        foreach ($all_property as $item) {
            echo '<td>' . $row[$item] . '</td>'; //get items using property value
        }
        echo '</tr>';
    }

    echo "</table>";

?>

</body>
</html>
    