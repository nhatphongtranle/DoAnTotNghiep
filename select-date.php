<?php
include('connectDB.php');
//filter.php  
if (isset($_POST["from_date"], $_POST["to_date"])) {
    $output = '';
    $query = "  
           SELECT * FROM users  
           WHERE user_date BETWEEN '" . $_POST["from_date"] . "' AND '" . $_POST["to_date"] . "'  
      ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '  
                     <tr>  
                          <td>' . $row["username"] . '</td>  
                          <td>' . $row["myclass"] . '</td>  
                          <td>' . $row["serialnumber"] . '</td>  
                          <td>' . $row["gender"] . '</td>  
                          <td>' . $row["fingerprint_id"] . '</td>  
                          <td>' . $row["user_date"] . '</td>  
                          <td>' . $row["time_in"] . '</td>  
                     </tr>  
                ';
        }
    } else {
        $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';
    }
    $output .= '</table>';
    echo $output;
}
