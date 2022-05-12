<?php include('config/constants.php');?>
<link rel="stylesheet" href="css/style.css">

    
    <section class="food-search text-center">
        <div class="container">
            <?php
                $text = mysqli_real_escape_string($conn, $_POST['text']);
            ?>
            
            <h2>Food/Beverage You Search <a href="#" class="text-white">"<?php echo $text; ?>"</a></h2>

        </div>
    </section>
    <section class="food-menu">
        <div class="container">
            <h4 class="text-center">Food - Beverage - Add-ons</h4>
            <?php
                $text = $_POST['text'];
                $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$text%' OR description LIKE '%$text%'";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $image_name = $row['image_name'];
                        ?>
                               <div class="food-menu-box">
                                    <div class="food-menu-img">
                                        <?php
                                            if($image_name=="")
                                            {
                                                echo "<div class='error'>Image not Available</div>";
                                            }
                                            else
                                            {
                                                ?>
                                                <img src="<?php echo SITEURL;?>images/food/<?php echo $image_name;?>" alt="Fries" class="img-responsive img-curve">
                                                <?php
                                            }
                                        ?>
                                    
                                    </div>

                                <div class="food-menu-desc">
                                <h4><?php echo $title;?></h4>
                                <p class="food-price">₱<?php echo $price;?></p>
                                <p class="food-detail">
                                    <?php echo $description;?>
                                </p>
                       
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>
                        <?php
                    }
                }
                else
                {
                    echo "<div class='error'>Not Available</div>";
                }

            ?>

    
    
            <div class="clearfix"></div>
        
        </div>

    </section>
    

<?php include('front-partials/footer.php');?>