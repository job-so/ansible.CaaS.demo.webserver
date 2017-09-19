<html>
  <body>
    <center>
      <img width=240px src="http://www.mbda-systems.com/wp-content/uploads/2015/06/logo.svg" /><br />
      <h1><?php echo "SERVER : ".$_SERVER["SERVER_ADDR"]."/".$_SERVER["REMOTE_PORT"]."</h1>";?>
        <hr />
      <?php echo(file_get_contents("http://192.168.40.10:3000"));?>
        <hr />
      <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/2/22/Dimension_Data_logo.jpg/260px-Dimension_Data_logo.jpg" />
    </center>
  </body>
</html>
