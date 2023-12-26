<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <title>Users Logs</title>
  <link rel="stylesheet" type="text/css" href="css/userslog.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js">
  </script>
  <script src="js/jquery-2.2.3.min.js"></script>
  <script src="js/user_log.js"></script>
</head>

<body>
  <?php include 'header.php'; ?>
  <main>
    <section>
      <!--User table-->
      <h1 class="slideInDown animated">Attendance</h1>
      <div class="form-style-5 slideInDown animated">
        <form method="POST" action="Export_Excel.php">
          <input type="date" name="date_sel" id="date_sel">
          <button type="button" name="user_log" id="user_log">Select Date</button>
          <input type="submit" name="To_Excel" value="Export to Excel">
        </form>
      </div>
      <div class="tbl-header slideInRight animated">
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Studentcode</th>
              <th>Fingerprint ID</th>
              <th>Date</th>
              <th>Time In</th>
              <th>Time Out</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content slideInRight animated">
        <div id="userslog"></div>
      </div>
    </section>
  </main>
</body>

</html>