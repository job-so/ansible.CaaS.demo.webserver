<html>
  <body>
    <center>
      <img width=80px src="http://www.mbda-systems.com/wp-content/uploads/2015/06/logo.svg" /><br />
      <h1><?php echo "SERVER : ".$_SERVER["SERVER_ADDR"]."/".$_SERVER["REMOTE_PORT"]."</h1>";?>
      <form action="/msg">
        <input type="text" name="msg" />
        <input type="submit" />
      </form>
      <?php echo(file_get_contents("http://192.168.40.8:3000"));?>
    </center>
  </body>
</html>
