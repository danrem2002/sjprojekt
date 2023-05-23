<?php
    include('partials/nav.php');
    ?>
<main>
  
  <section class="container">
    <div class="row">
    <div class="col-100">  
        <h1>Registrácia</h1>
        <form action ="inc/register/insert.php" method="post">
          <input type="text" name="name" id = "name" placeholder="Vaše meno"><br>
          <input type="email" name="email" id = "email" placeholder="Váš email"><br>
          <input type="password" name="password" id = "password" placeholder="Vaše heslo"><br>
          <input type="password" name="password_confirm" id = "password_confirm" placeholder = "Heslo znova"><br>
          <input type="submit" value="Zaregistrovať sa" name="add_user">
        </form>
        <br>
        <p>Máte účet? <a href="login.php">Prihláste sa</a></p>
      </div>
    </div>
  </section>
</main>



<?php
    include('partials/foot.php');
    ?>