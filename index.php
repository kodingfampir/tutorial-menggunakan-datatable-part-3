<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="assets/dataTables.bootstrap.min.css">
  <script type="text/javascript" src="assets/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="assets/jquery.dataTables.min.js"></script>
</head>
<body>
  <div class="container"><br><br>
    <table class="table table-striped table-bordered data" id="tableku">
      <thead>
        <tr>      
          <th>Nama</th>
          <th>Alamat</th>
          <th>Pekerjaan</th>
          <th>Usia</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</body>
<script type="text/javascript">
   $(document).ready(function() {
    $('#tableku').DataTable( {
        "ajax": "data.php",
        "processing": "true",
        "serverSide": "true"
    });
  });
</script>
</html>