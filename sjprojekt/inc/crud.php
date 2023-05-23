<?php
include('database.php');
function getBikes(){
    $sql = 'SELECT * FROM bikes';
    $result = $GLOBALS['mysqli']  -> query($sql);
    foreach ($result as $bike) {
        echo '
        <div class="col-md-3">
                <div class="product-item-1">
                    <div class="product-thumb">
                        <img src='.$bike['img'].' alt="Product Title">
                    </div>
                    <div class="product-content">
                        <h5><a href="#">'.$bike['brand'].'</a></h5>
                        <span class="tagline">'.$bike['model'].'</span>
                        <span class="price">€'.$bike['price'].'</span>
                        <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt asperiores tenetur deleniti labore!</p>
                    </div> 
                </div> 
            </div> ';
    }
};