
<?php 
    include('partials/nav.php');
    include('inc/getBikes.php');
    

    ?>
<div class="content-section">
    <div class="container">
        <div class="row">
            <?php getBikes(); ?>

        </div>            
    </div>
</div>

<?php include('partials/foot.php');