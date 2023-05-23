
<?php 
    include('partials/nav.php');
    

    ?>
<div class="content-section">
    <div class="container">
        <div class="row">
        <?php getBikes(); ?>
            <div class="col-md-5">
                <div class="product-holder">
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/featured/1.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Kooler Shirt</a></h5>
                            <span class="tagline">Partner Name</span>
                            <span class="price">$30.00</span>
                            <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/featured/2.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Koolest Shirt</a></h5>
                            <span class="tagline">Partner Name</span>
                            <span class="price">$45.00</span>
                            <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="clearfix"></div>
                </div> <!-- /.product-holder -->
            </div> <!-- /.col-md-5 -->
            <div class="col-md-4">
                <div class="product-item-3">
                    <div class="product-thumb">
                        <img src="images/featured/6.jpg" alt="">
                    </div> <!-- /.product-thumb -->
                    <div class="product-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h5><a href="#">Name Of Shirt</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$20.00</span>
                            </div> <!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="full-row">
                                    <label for="cat">Gender:</label>
                                    <select name="cat" id="cat" class="postform">
                                        <option value="-1">- Select -</option>
                                        <option class="level-0" value="49">Female</option>
                                        <option class="level-0" value="56">Male</option>
                                    </select>
                                </div>
                                <div class="full-row">
                                    <label for="cat1">Size:</label>
                                    <select name="cat1" id="cat1" class="postform">
                                        <option value="-1">- Select -</option>
                                        <option class="level-0" value="49">Small</option>
                                        <option class="level-0" value="49">Medium</option>
                                        <option class="level-0" value="56">Large</option>
                                        <option class="level-0" value="56">X-Large</option>
                                    </select>
                                </div>
                                <div class="full-row">
                                    <label for="cat2">Color:</label>
                                    <select name="cat2" id="cat2" class="postform">
                                        <option value="-1">- Select -</option>
                                        <option class="level-0" value="2">Blue</option>
                                        <option class="level-0" value="3">Red</option>
                                        <option class="level-0" value="1">Pink</option>
                                        <option class="level-0" value="4">Black</option>
                                        <option class="level-0" value="4">Wlack</option>
                                    </select>
                                </div>
                            </div> <!-- /.col-md-6 -->
                            <div class="col-md-12 col-sm-12">
                                <div class="button-holder">
                                    <a href="#" class="red-btn"><i class="fa fa-angle-down"></i></a>
                                </div> <!-- /.button-holder -->
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.product-content -->
                </div> <!-- /.product-item-3 -->
            </div> <!-- /.col-md-4 -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product-item-4">
                    <div class="product-thumb">
                        <img src="images/featured/3.jpg" alt="Product Title">
                    </div> <!-- /.product-thumb -->
                    <div class="product-content overlay">
                        <h5><a href="#">Name Of Shirt</a></h5>
                        <span class="tagline">Partner Name</span>
                        <span class="price">$60.00</span>
                        <p>Doloremque quo possimus quas necessitatibus.</p>
                    </div> <!-- /.product-content -->
                </div> <!-- /.product-item-4 -->
            </div> <!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product-item-4">
                    <div class="product-thumb">
                        <img src="images/featured/4.jpg" alt="Product Title">
                    </div> <!-- /.product-thumb -->
                    <div class="product-content overlay">
                        <h5><a href="#">Name Of Shirt</a></h5>
                        <span class="tagline">Partner Name</span>
                        <span class="price">$30.00</span>
                        <p>Doloremque quo possimus quas necessitatibus.</p>
                    </div> <!-- /.product-content -->
                </div> <!-- /.product-item-4 -->
            </div> <!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="ads-placemenet">
                    <img src="images/featured/5.jpg" alt="">
                </div> <!-- /.ads-placement -->
            </div> <!-- /.col-md-4 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.content-section -->



<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title">
                <h2>Vote For Future Products</h2>
            </div> <!-- /.section -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-item-vote">
                    <div class="product-thumb">
                        <img src="images/products/1.jpg" alt="">
                    </div> <!-- /.product-thum -->
                    <div class="product-content">
                        <h5><a href="#">Name of Shirt</a></h5>
                        <span class="tagline">By: Catherine</span>
                        <ul class="progess-bars">
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                    <span>4<i class="fa fa-heart"></i></span>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    <span class="comments">6<i class="fa fa-heart"></i></span>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.product-content -->
                </div> <!-- /.product-item-vote -->
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-item-vote">
                    <div class="product-thumb">
                        <img src="images/products/2.jpg" alt="">
                    </div> <!-- /.product-thum -->
                    <div class="product-content">
                        <h5><a href="#">Name of Shirt</a></h5>
                        <span class="tagline">By: Rebecca</span>
                        <ul class="progess-bars">
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                    <span>4<i class="fa fa-heart"></i></span>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    <span class="comments">6<i class="fa fa-heart"></i></span>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.product-content -->
                </div> <!-- /.product-item-vote -->
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-item-vote">
                    <div class="product-thumb">
                        <img src="images/products/3.jpg" alt="">
                    </div> <!-- /.product-thum -->
                    <div class="product-content">
                        <h5><a href="#">Name of Shirt</a></h5>
                        <span class="tagline">By: Catherine</span>
                        <ul class="progess-bars">
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                    <span>4<i class="fa fa-heart"></i></span>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    <span class="comments">6<i class="fa fa-heart"></i></span>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.product-content -->
                </div> <!-- /.product-item-vote -->
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="product-item-vote">
                    <div class="product-thumb">
                        <img src="images/products/4.jpg" alt="">
                    </div> <!-- /.product-thum -->
                    <div class="product-content">
                        <h5><a href="#">Name of Shirt</a></h5>
                        <span class="tagline">By: Rebecca</span>
                        <ul class="progess-bars">
                            <li>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                    <span>4<i class="fa fa-heart"></i></span>
                                </div>
                            </li>
                            <li>
                                <div class="progress">
                                    <div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    <span class="comments">6<i class="fa fa-heart"></i></span>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.product-content -->
                </div> <!-- /.product-item-vote -->
            </div> <!-- /.col-md-3 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.content-section -->

<div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="product-image">
                        <img src="images/featured/7.jpg" alt="">
                    </div> <!-- /.product-image -->
                    <div class="product-information">
                        <h2>Product Title Goes Here</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, esse, excepturi, sint ut et numquam reiciendis nulla in deserunt quaerat provident obcaecati reprehenderit iusto ab neque corporis id temporibus architecto quia adipisci? Officia, aliquam, eveniet, molestias, voluptate porro assumenda error soluta ab blanditiis voluptatum nisi voluptates debitis doloribus. Asperiores, provident fuga quibusdam id tenetur!<br><br>Nostrum quis quo earum enim suscipit molestiae cupiditate reprehenderit? Atque, numquam nostrum adipisci suscipit exercitationem sed ullam. Odio, laborum, obcaecati harum nostrum pariatur ipsam itaque minima atque expedita at amet dignissimos odit quisquam laboriosam eius officiis ratione alias sint rerum distinctio. Quidem, veritatis consequuntur voluptas sunt quo deleniti reprehenderit deserunt atque minus non.</p>
                        <p class="product-infos">
                            <span>Bundle Price: $450</span>
                            <span>Discount: 30%</span>
                        </p>
                        <ul class="product-buttons">
                            <li>
                                <a href="#" class="main-btn">Buy Now</a>
                            </li>
                            <li>
                                <a href="#" class="main-btn">Add to Cart</a>
                            </li>
                        </ul>
                    </div> <!-- /.product-information -->
                </div> <!-- /.col-md-8 -->


                <div class="col-md-4 col-sm-8">
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/featured/1.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Name Of Shirt</a></h5>
                            <span class="tagline">Partner Name</span>
                            <span class="price">$30.00</span>
                            <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/featured/2.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Name Of Shirt</a></h5>
                            <span class="tagline">Partner Name</span>
                            <span class="price">$40.00</span>
                            <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <img src="images/featured/8.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Name Of Shirt</a></h5>
                            <span class="tagline">Partner Name</span>
                            <span class="price">$50.00</span>
                            <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->