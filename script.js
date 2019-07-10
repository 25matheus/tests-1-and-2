function alertRow(key_id) {
  var url = "index.php";
  var data = {
    id: key_id
  };
  var success = function(data) {
    alert(
      "id = " +
        data.id +
        "\nName = " +
        data.first_name +
        " " +
        data.last_name +
        "\nEmail = " +
        data.email
    );
  };
  $.get(url, data, success);
}
