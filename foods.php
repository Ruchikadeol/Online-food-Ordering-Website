<?php 
include("partials-front/menu.php");

?>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
                <div class="food-menu-box">
                <div class="food-menu-img">
                   <img src="images/pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Pizza</h4>
                    <p class="food-price">250.00</p>
                    <p class="food-detail">
                       cheeze burst pizza
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

              <div class="food-menu-box">
                <div class="food-menu-img">
                   <img src="images/burger.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Burger</h4>
                    <p class="food-price">150.00</p>
                    <p class="food-detail">
                       tasty burger
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
             <div class="food-menu-box">
                <div class="food-menu-img">
                   <img src="images/momo.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Momo</h4>
                    <p class="food-price">150.00</p>
                    <p class="food-detail">
                       delicious momo
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
 <div class="clearfix"></div>
</div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php 
include("partials-front/footer.php");

?>