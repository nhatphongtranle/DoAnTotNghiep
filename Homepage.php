<!DOCTYPE html>
<html>

<head>
  <title>Users</title>
  <link rel="stylesheet" type="text/css" href="css/Homepage.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <main>
    <section>
      <!--User table-->
      <h1 class="slideInDown animated">Dashboard</h1>
      <div class="search">
        <form action="" method="GET">
          <div class="row">
            <div class="col-2 md-3">
              <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
            </div>
            <div class="col-2 md-3">
              <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
            </div>
            <div class="col-md-5">
              <input type="button" name="Search" id="Search" value="Search" class="btn btn-info" />
            </div>
            <br />
          </div>
          <div class="row">
            <div class="col-2 md-3">
              <input type="text" name="keyword" class="form-control" id="search" autocomplete="off" placeholder="Nhập từ khóa tìm kiếm">
            </div>
            <div class="col-1 md-4">
              <select name="status" id="status" class="form-control" onchange="selectdata(this.options[this.selectedIndex].value)">
                <option value="All">All</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
              </select>
            </div>
          </div>
      </div>
      <div class="tbl-header slideInRight animated">
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Class</th>
              <th>Studen code</th>
              <th>Gender</th>
              <th>Finger ID</th>
              <th>Date</th>
              <th>Time In</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content slideInRight animated">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody id="myTable">
            <?php
            require 'connectDB.php';
            $num_per_page = 04;
            if (isset($_GET["page"])) {
              $page = $_GET["page"];
            } else {
              $page = 1;
            }
            $start_from = ($page - 1) * 04;
            $sql = "SELECT * FROM users WHERE NOT username='' ORDER BY id DESC LIMIT $start_from,$num_per_page";
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
              }
            }
            ?>
          </tbody>
        </table>
        <?php
        $sql = "SELECT * FROM users";
        $rs_result = mysqli_query($conn, $sql);
        $total_record = mysqli_num_rows($rs_result);
        $total_page = ceil($total_record / $num_per_page);
        if ($page > 1) {
          echo "<a href='Homepage.php?page=" . ($page - 1) . "' class='btn btn-danger'><<</a>";
        }
        for ($i = 1; $i < $total_page; $i++) {
          echo "<a href='Homepage.php?page=" . $i . "' class='btn btn-primary'>$i</a>";
        }
        if ($i > $page) {
          echo "<a href='Homepage.php?page=" . ($page + 1) . "' class='btn btn-danger'>>></a>";
        }
        ?>
      </div>
    </section>
  </main>
  <script src="js/Homepage.js"></script>
</body>

</html>