<?php

include("db/config.php");

$query = "SELECT * FROM destination ORDER BY Id ASC";

$res=mysqli_query($conn, $query);

$output="";

$output .="
    <table class='table table-border table-striped'>
        <tr>
            <th>Travel Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Country</th>
        </tr>
        

    </table>

";

if(mysqli_num_rows($res)< 1){
    $output .="

        <tr>
            <td colspan='2'>No Data</td>
        </tr>    
    
    ";   
}

echo $output;

?>