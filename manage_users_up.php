<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php
    //Connect to database
    require 'connectDB.php';
    $sql = "SELECT * FROM users WHERE del_fingerid=0 ORDER BY id DESC";
    $result = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($result, $sql)) {
      echo '<p class="error">SQL Error</p>';
    } else {
      mysqli_stmt_execute($result);
      $resultl = mysqli_stmt_get_result($result);
      if (mysqli_num_rows($resultl) > 0) {
        while ($row = mysqli_fetch_assoc($resultl)) {
    ?>
          <TR>
            <TD>
              <?php
              if ($row['fingerprint_select'] == 1) {
                echo "<img src='icons/ok_check.png' title='The selected UID'>";
                //echo "<input type='radio' value='select_btn' title='The selected UID'>";
              }
              $fingerid = $row['fingerprint_id'];
              ?>
              <form>
                <input type="radio" value="select_btn" title="The selected UID">
                <button type="button" class="select_btn" id="<?php echo $fingerid; ?>" title="select this UID"><?php echo $fingerid; ?></button>
              </form>
            </TD>
            <TD><?php echo $row['username']; ?></TD>
            <TD><?php echo $row['gender']; ?></TD>
            <TD><?php echo $row['myclass']; ?></TD>
            <TD><?php echo $row['serialnumber']; ?></TD>
            <TD><?php echo $row['user_date']; ?></TD>
            <TD><?php echo $row['time_in']; ?></TD>
          </TR>
    <?php
        }
      }
    }
    ?>
  </tbody>
</table>