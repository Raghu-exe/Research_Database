


<html lang="en">
    
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table Contents</title>
</head>
<body bgcolor="Azure">  
    <div id="form" class=" col-lg-6 offset-lg-3 ">
    
        <form NAME ="database_search" ACTION="backend.php" METHOD="post">
        <h3>  Please enter you query in the search field:  </h3>
            <input name ="search" type="text" class="input" placeholder="Search...."/>

            <input type="submit" name="search_button" Value="Submit Query"> </button>
            <button id="clear" class="clear-results">Clear</button> 



        <h4> please Select the type of Query </h4>


        <input type="checkbox" name="checkbox" id="columns_gene" value="gene" checked="checked" />
        <label for="column_gene">Gene</label>

        <input type="checkbox" name="checkbox" id="column_disease" value="disease" />
        <label for="column_disease">Disease</label>


        </form>
    </div>
        
    <?php 
    error_reporting(E_ERROR | E_PARSE);
    require('./backend.php'); 

    ?>


</body>
</html>