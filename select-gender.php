<?php
include('connectDB.php');
$catname = $_POST['cat_name'];
if ($catname != 'All') {
    $cond = "'$catname'";
} else {
    $cond = 0;
}
$fetch_query = mysqli_query($conn, "SELECT * FROM users WHERE gender =$cond");
$row = mysqli_num_rows($fetch_query);
if ($row > 0) {
    while ($res = mysqli_fetch_array($fetch_query)) {
?>
        <TR>
            <TD><?php echo $res['username']; ?></TD>
            <TD><?php echo $res['myclass']; ?></TD>
            <TD><?php echo $res['serialnumber']; ?></TD>
            <TD><?php echo $res['gender']; ?></TD>
            <TD><?php echo $res['fingerprint_id']; ?></TD>
            <TD><?php echo $res['user_date']; ?></TD>
            <TD><?php echo $res['time_in']; ?></TD>
        </TR>
<?php
    }
}
?>