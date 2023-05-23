<?php
    include('partials/nav.php');
    ?>
<main>  
  <section class="container">
    <div class="row">
    <div class="col-100">  
        <h1>Prihlásenie</h1>
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