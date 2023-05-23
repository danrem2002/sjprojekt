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
                        <img class = "img-thumbnail" style = "height: 200px; object-fit: contain;" src='.$bike['img'].' alt="Product Title">
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

function getBikesAdmin(){
    $sql = 'SELECT * FROM bikes';
    $result = $GLOBALS['mysqli']  -> query($sql);
    foreach ($result as $bike) {
        echo '
        <form action = "inc/crud.php" method = "post">
        <div class="col-md-3">
            <input type = "text" name = "id" value = '.$bike['id'].' hidden>
                <div class="product-item-1">
                    <div class="product-thumb">
                        <input type = "text" name = "img" value = "'.$bike['img'].'" placeholder = "img-src">
                    </div>
                    <div class="product-content">
                        <h5><input type = "text" name = "brand" value = "'.$bike['brand'].'"></h5>
                        <span class="tagline"><input type = "text" name = "model" value = "'.$bike['model'].'"></span>
                        <span class="price">€<input type = "text" name = "price" value = "'.$bike['price'].'"></span>
                        <span class ="price">ks<input type = "text" name = "count" value = "'.$bike['count'].'"></span>
                        <input type = "submit" name = "edit_bike" value = "Upravit">
                        <input type = "submit" name = "remove_bike" value = "Vymazat">
                    </div> 
                </div> 
            </div> 
            </form>';
    }
    echo '
        <form action = "inc/crud.php" method = "post">
        <div class="col-md-3">
                <div class="product-item-1">
                    <div class="product-thumb">
                        <input type = "text" name = "img"  placeholder = "img-src">
                    </div>
                    <div class="product-content">
                        <h5><input type = "text" name = "brand" placeholder = "brand"></h5>
                        <span class="tagline"><input type = "text" name = "model" placeholder = "model" ></span>
                        <span class="price">€<input type = "text" name = "price" placeholder = "price"></span>
                        <span class ="price">ks<input type = "text" name = "count" placeholder = "count"></span>
                        <input type = "submit" name = "add_bike" value = "Pridat">
                        
                    </div> 
                </div> 
            </div> 
            </form>';


};



