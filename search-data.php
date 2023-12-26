<?php
include("connectDB.php");
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $query = "SELECT * FROM users WHERE username LIKE '{$input}%' OR myclass LIKE '{$input}%' OR serialnumber LIKE '{$input}%' ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) { ?>
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $username = $row['username'];
                    $MyClass = $row['myclass'];
                    $serialnumber = $row['serialnumber'];
                    $Gender = $row['gender'];
                    $fingerprint_id = $row['fingerprint_id'];
                    $user_date = $row['user_date'];
                    $time_in = $row['time_in'];
                ?>
                    <TR>
                        <TD><?php echo $row['username']; ?></TD>
                        <TD><?php echo $row['myclass']; ?></TD>
                        <TD><?php echo $row['serialnumber']; ?></TD>
                        <TD><?php echo $row['gender']; ?></TD>
                        <TD><?php echo $row['fingerprint_id']; ?></TD>
                        <TD><?php echo $row['user_date']; ?></TD>
                        <TD><?php echo $row['time_in']; ?></TD>
                    </TR>
                <?php
                }
                ?>
            </tbody>
        </table>
<?php
    }
}
?>