// Selectdata for search date
$(document).ready(function () {
  $.datepicker.setDefaults({
    dateFormat: "yy-mm-dd",
  });
  $(function () {
    $("#from_date").datepicker();
    $("#to_date").datepicker();
  });
  $("#Search").click(function () {
    var from_date = $("#from_date").val();
    var to_date = $("#to_date").val();
    if (from_date != "" && to_date != "") {
      $.ajax({
        url: "select-date.php",
        method: "POST",
        data: { from_date: from_date, to_date: to_date },
        success: function (data) {
          $("#myTable").html(data);
        },
      });
    } else {
      alert("Please Select Date");
    }
  });
});
// Selectdata for search data
function selectdata(cat) {
  $.ajax({
    url: "select-gender.php",
    method: "POST",
    data: "cat_name=" + cat,
    success: function (result) {
      $("#myTable").html(result);
    },
  });
}
// Search data
$(document).ready(function () {
  $("#search").keyup(function () {
    var input = $(this).val();
    //alert(input);
    if (input != "") {
      $.ajax({
        url: "search-data.php",
        method: "POST",
        data: { input: input },
        success: function (data) {
          $("#myTable").html(data);
        },
      });
    }
  });
});
