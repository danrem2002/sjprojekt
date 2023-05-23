<?php
    $invalidLog = false;
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $mysqli = require('inc/database.php');

        $sql = sprintf("SELECT * FROM user WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"]));

        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();

        if($user){
           if(password_verify($_POST["password"], $user["password_hash"])){
                session_start();

                $_SESSION["user_id"] = $user["id"];
                header("Location: index.php");
                exit;
            }

        }
        $invalidLog = true;
    }
    include('partials/nav.php');
    ?>
<main>  
  <section class="container">
    <div class="row">
    <div class="col-100">  
        <h1>Prihlásenie</h1>
        <?php if($invalidLog): ?>
            <p style = "color:red;">Nespravne udaje</p>
        <?php endif; ?>
        <form method="post">
          <input type="email" name="email" placeholder="Váš email"><br>
          <input type="password" name="password" placeholder="Vaše heslo"><br>
          <input type="submit" value="Prihlásiť sa" name="log_user">
        </form>
        <br>
        <p>Nemáte účet? <a href="reg.php">Registrujte sa</a></p>
      </div>
    </div>
  </section>
</main>



<?php
    include('partials/foot.php');
    ?>