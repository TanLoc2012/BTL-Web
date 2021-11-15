<<<<<<< HEAD
<div id="wrapper">

    <h3 style="margin-left:20px">Vsmart</h3>
    <hr/>
    <div class="showproduct">
    <?php
        for($i=0;$i<4;$i++){
            echo    '<div class="card">';
            echo        '<a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productVsmart"][$i]["id"].'">
                            <img class="card-img-top mt-2"
                                src="'.$data["productVsmart"][$i]["thumbnail"].'"
                                alt="Card image cap">
                        </a>';
            echo        '<div class="card-body">';
            echo            '<a id="taga" href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productVsmart"][$i]["id"].'"><h5 class="card-title">'.$data["productVsmart"][$i]["title"].'</h5></a>
                            <hr />';
            echo            '<span class="card-text">'.number_format($data["productVsmart"][$i]["price"]).'đ</span>';
            echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">'; if($data["productVsmart"][$i]["discount"] != 0) echo number_format($data["productVsmart"][$i]["discount"]).'đ'; echo '</span>';
            echo        '</div>';
            echo        '<button type="button" class="btnOrder btn btn-danger" onclick="addToCard('.$data["productVsmart"][$i]["id"].')">Đặt hàng</button>';
            echo    '</div>';
        }
        ?>
    </div>

    <h3 style="margin-left:20px">Iphone</h3>
    <hr/>
    <div class="showproduct">
    <?php
        for($i=0;$i<4;$i++){
            echo    '<div class="card">';
            echo        '<a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productIphone"][$i]["id"].'">
                            <img class="card-img-top mt-2"
                                src="'.$data["productIphone"][$i]["thumbnail"].'"
                                alt="Card image cap">
                        </a>';
            echo        '<div class="card-body">';
            echo            '<a id="taga" href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productIphone"][$i]["id"].'"><h5 class="card-title">'.$data["productIphone"][$i]["title"].'</h5></a>
                            <hr />';
            echo            '<span class="card-text">'.number_format($data["productIphone"][$i]["price"]).'đ</span>';
            echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">'; if($data["productIphone"][$i]["discount"] != 0) echo number_format($data["productIphone"][$i]["discount"]).'đ'; echo '</span>';
            echo        '</div>';
            echo        '<button type="button" class="btnOrder btn btn-danger">Đặt hàng</button>';
            echo    '</div>';
        }
        ?>
    </div>

    <h3 style="margin-left:20px">Samsung</h3>
    <hr/>
    <div class="showproduct">
    <?php
        for($i=0;$i<4;$i++){
            echo    '<div class="card">';
            echo        '<a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productSamsung"][$i]["id"].'">
                            <img class="card-img-top mt-2"
                                src="'.$data["productSamsung"][$i]["thumbnail"].'"
                                alt="Card image cap">
                        </a>';
            echo        '<div class="card-body">';
            echo            '<a id="taga" href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productSamsung"][$i]["id"].'"><h5 class="card-title">'.$data["productSamsung"][$i]["title"].'</h5></a>
                            <hr />';
            echo            '<span class="card-text">'.number_format($data["productSamsung"][$i]["price"]).'đ</span>';
            echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">'; if($data["productSamsung"][$i]["discount"] != 0) echo number_format($data["productSamsung"][$i]["discount"]).'đ'; echo '</span>';
            echo        '</div>';
            echo        '<button type="button" class="btnOrder btn btn-danger">Đặt hàng</button>';
            echo    '</div>';
        }
        ?>
    </div>

    <h3 style="margin-left:20px">Xiaomi</h3>
    <hr/>
    <div class="showproduct">
    <?php
        for($i=0;$i<4;$i++){
            echo    '<div class="card">';
            echo        '<a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productXiaomi"][$i]["id"].'">
                            <img class="card-img-top mt-2"
                                src="'.$data["productXiaomi"][$i]["thumbnail"].'"
                                alt="Card image cap">
                        </a>';
            echo        '<div class="card-body">';
            echo            '<a id="taga" href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productXiaomi"][$i]["id"].'"><h5 class="card-title">'.$data["productXiaomi"][$i]["title"].'</h5></a>
                            <hr />';
            echo            '<span class="card-text">'.number_format($data["productXiaomi"][$i]["price"]).'đ</span>';
            echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">'; if($data["productXiaomi"][$i]["discount"] != 0) echo number_format($data["productXiaomi"][$i]["discount"]).'đ'; echo '</span>';
            echo        '</div>';
            echo        '<button type="button" class="btnOrder btn btn-danger">Đặt hàng</button>';
            echo    '</div>';
        }
        ?>
    </div>

    <h3 style="margin-left:20px">Oppo</h3>
    <hr/>
    <div class="showproduct">
    <?php
        for($i=0;$i<4;$i++){
            echo    '<div class="card">';
            echo        '<a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productOppo"][$i]["id"].'">
                            <img class="card-img-top mt-2"
                                src="'.$data["productOppo"][$i]["thumbnail"].'"
                                alt="Card image cap">
                        </a>';
            echo        '<div class="card-body">';
            echo            '<a id="taga" href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["productOppo"][$i]["id"].'"><h5 class="card-title">'.$data["productOppo"][$i]["title"].'</h5></a>
                            <hr />';
            echo            '<span class="card-text">'.number_format($data["productOppo"][$i]["price"]).'đ</span>';
            echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">'; if($data["productOppo"][$i]["discount"] != 0) echo number_format($data["productOppo"][$i]["discount"]).'đ'; echo '</span>';
            echo        '</div>';
            echo        '<button type="button" class="btnOrder btn btn-danger" onclick="addToCard('.$data["productOppo"][$i]["id"].')">Đặt hàng</button>';
            echo    '</div>';
        }
        ?>
    </div>
</div>

<script type="text/javascript">
    function addToCard(productId) {
=======
<section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                    <?php 
                        $countCategory = count($data["allCategory"]);
                        for($i=0;$i<$countCategory;$i++) {
                            echo '<div class="col-lg-12">
                                <div class="li-section-title">
                                    <h2>
                                        <a href="http://localhost/Laptrinhweb/Home/productList/'.$data["allCategory"][$i]["id"].'"><span>'.$data["allCategory"][$i]["name"].'</span></a>
                                    </h2>
                                </div>
                                <div class="row">
                                    <div class="product-active owl-carousel">';
                            for($j=0;$j<$data["countProduct"];$j++){
                                if($data["allProduct"][$j]["category_id"] == $data["allCategory"][$i]["id"]){
                                echo    '
                                                <div style="margin-bottom:50px" class="col-lg-12">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["allProduct"][$j]["id"].'">
                                                                <img src="'.$data["allProduct"][$j]["thumbnail"].'" alt="Lis Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <h4><a class="product_name" href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["allProduct"][$j]["id"].'">'.$data["allProduct"][$j]["title"].'</a></h4>
                                                                <div style="margin-top:10px" class="price-box">
                                                                    <span  class="new-price">'.number_format($data["allProduct"][$j]["price"]).' VNĐ</span>
                                                                </div>
                                                                <div  class="price-box">
                                                                    <span class="old-price">'.number_format($data["allProduct"][$j]["discount"]).' VNĐ</span>
                                                                </div>
                                                                </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">
                                                                    <li onclick="addToCard('.$data["allProduct"][$j]["id"].','.$data["allProduct"][$j]["price"].')" class="add-cart active">Thêm vào giỏ</li>
                                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>';
                                        }
                                    }
                        echo        '</div>
                                </div>
                            </div>';
                        }
                    ?>
                    </div>

                </div>
            </section>
<script type="text/javascript">
    function addToCard(productId, priceProduct) {
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
        var action = "add";
        $.ajax({
            url:"home/addToCart",
            method:"POST",
<<<<<<< HEAD
            data:{action:action ,productId:productId, num:1},
=======
            data:{action:action ,productId:productId, num:1, priceProduct:priceProduct},
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
            success:function(data){
                location.reload();
            }
        });
    }
</script>