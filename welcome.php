<script>
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
document.write(today);
</script>
<html>
<body>

Welcome, <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
  Todays date is: <script> document.write(today); </script>
</body>
</html>


