<<<<<<< HEAD
<nav id="nav-breadcrumb" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="ml125 breadcrumb-item"><a href="http://localhost/Laptrinhweb/Home">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?=$data["productCategory"]?></li>
  </ol>
</nav>
<!-- End Breadcrumb -->
<!--Section: Block Content-->
<div id="wrapper">

<section class="mb-5">
  <div class="row">
    <div class="col-md-6 mb-4 mb-md-0">
      <div class="mdb-lightbox">
        <div class="row product-gallery mx-1">
          <div class="col-12 mb-0">
            <figure class="overlay rounded z-depth-1 main-img">
              <img style="width: 400px;height: 400px;"
                src="<?=$data["productItem"]["thumbnail"]?>"
                class="img-fluid z-depth-1">
            </figure>
          </div>
        </div>

      </div>

    </div>
    <div class="col-md-6">

      <h5><?=$data["productItem"]["title"]?></h5>
      <hr>
      <p><span class="mr-1"><strong><?= number_format($data["productItem"]["price"]).' đ'?></strong></span> 
      <span style="margin-left:12px; text-decoration: line-through;" class="mr-1">
        <?php
            if($data["productItem"]["discount"] != 0) echo number_format($data["productItem"]["discount"]).' đ';
        ?>
     </span>  
     </p>
      <p class="pt-1"><?=$data["productItem"]["description"]?></p>
      <button onclick="addToCard(<?=$data['productItem']['id']?>)" type="button" class="btn btn-light btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Thêm vào giỏ hàng</button>
    </div>
  </div>

</section>
<!--Section: Block Content-->
<!-- Classic tabs -->
<div class="classic-tabs border rounded px-4 pt-1">

  <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info"
        aria-selected="false">Information</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
        aria-selected="false">Reviews (1)</a>
    </li>
  </ul>
  <div class="tab-content" id="advancedTabContent">
    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
      <h5>Product Description</h5>
      <p class="small text-muted text-uppercase mb-2">Shirts</p>
      <h6>12.99 $</h6>
      <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
        error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
        officia quis dolore quos sapiente tempore alias.</p>
    </div>
    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
      <h5>Additional Information</h5>
      <table class="table table-striped table-bordered mt-3">
        <thead>
          <tr>
            <th scope="row" class="w-150 dark-grey-text h6">Weight</th>
            <td><em>0.3 kg</em></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="w-150 dark-grey-text h6">Dimensions</th>
            <td><em>50 × 60 cm</em></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
      <h5><span>1</span> review for <span>Fantasy T-shirt</span></h5>
      <div class="media mt-3 mb-4">
        <img class="d-flex mr-3 z-depth-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" width="62"
          alt="Generic placeholder image">
        <div class="media-body">
          <div class="d-sm-flex justify-content-between">
            <p class="mt-1 mb-2">
              <strong>Marthasteward </strong>
              <span>– </span><span>January 28, 2020</span>
            </p>
            <ul class="rating mb-sm-0">
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-primary"></i>
              </li>
            </ul>
          </div>
          <p class="mb-0">Nice one, love it!</p>
        </div>
      </div>
      <hr>
      <h5 class="mt-4">Add a review</h5>
      <p>Your email address will not be published.</p>
      <div class="my-3">
        <ul class="rating mb-0">
          <li>
            <a href="#!">
              <i class="fas fa-star fa-sm text-primary"></i>
            </a>
          </li>
          <li>
            <a href="#!">
              <i class="fas fa-star fa-sm text-primary"></i>
            </a>
          </li>
          <li>
            <a href="#!">
              <i class="fas fa-star fa-sm text-primary"></i>
            </a>
          </li>
          <li>
            <a href="#!">
              <i class="fas fa-star fa-sm text-primary"></i>
            </a>
          </li>
          <li>
            <a href="#!">
              <i class="far fa-star fa-sm text-primary"></i>
            </a>
          </li>
        </ul>
      </div>
      <div>
        <!-- Your review -->
        <div class="md-form md-outline">
          <textarea id="form76" class="md-textarea form-control pr-6" rows="4"></textarea>
          <label for="form76">Your review</label>
        </div>
        <!-- Name -->
        <div class="md-form md-outline">
          <input type="text" id="form75" class="form-control pr-6">
          <label for="form75">Name</label>
        </div>
        <!-- Email -->
        <div class="md-form md-outline">
          <input type="email" id="form77" class="form-control pr-6">
          <label for="form77">Email</label>
        </div>
        <div class="text-right pb-2">
          <button type="button" class="btn btn-primary">Add a review</button>
        </div>
      </div>
    </div>
  </div>

</div>

<h3 style="color:red; margin-top:10px">Các sản phẩm cùng danh mục</h3>
<div class="showproduct mt-3">
<?php
    for($i=0;$i<4;$i++){
        echo    '<div class="card">';
        echo        '<a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["allProductCategory"][$i]["id"].'">
                        <img class="card-img-top mt-2"
                            src="'.$data["allProductCategory"][$i]["thumbnail"].'"
                            alt="Card image cap">
                    </a>';
        echo        '<div class="card-body">';
        echo            '<a id="taga" href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["allProductCategory"][$i]["id"].'"><h5 class="card-title">'.$data["allProductCategory"][$i]["title"].'</h5></a>
                        <hr />';
        echo            '<span class="card-text">'.number_format($data["allProductCategory"][$i]["price"]).'đ</span>';
        echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">'; if($data["allProductCategory"][$i]["discount"] != 0) echo number_format($data["allProductCategory"][$i]["discount"]).'đ'; echo '</span>';
        echo        '</div>';
        echo        '<button type="button" class="btnOrder btn btn-danger" onclick="addToCard('.$data["allProductCategory"][$i]["id"].')">Đặt hàng</button>';
        echo    '</div>';
    }
?>
</div>
</div>
<script type="text/javascript">
  function addToCard(productId) {
    var action = "add";
    $.ajax({
      url: "../../home/addToCart",
      method: "POST",
      data: { action: action, productId: productId, num: 1 },
      success: function (data) {
        location.reload();
      }
    });
  }
=======
<div style="margin-top:-20px" class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="http://localhost/Laptrinhweb/Home">Trang chủ</a></li>
                <a href="http://localhost/Laptrinhweb/Home/productList/<?php echo $data["category_id"];?>"><li class="active"><?php echo $data["productCategory"];?></li></a>
            </ul>   
        </div>
    </div>
</div>
<div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <a class="popup-img venobox vbox-item" href="images/product/large-size/1.jpg" data-gall="myGallery">
                                            <img src="<?php echo $data["productItem"]["thumbnail"]; ?>" alt="product image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2><?php echo $data["productItem"]["title"]; ?></h2>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2"><?php echo number_format($data["productItem"]["price"]); ?>VNĐ</span>
                                    </div>
                                    <div  class="price-box">
                                        <span style=" text-decoration: line-through;" class="old-price"><?php echo number_format($data["productItem"]["discount"])?> VNĐ</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span><?php echo $data["productItem"]["description"]; ?>
                                            </span>
                                        </p>
                                    </div>
                                    </div>
                                    <div class="single-add-to-cart cart-quantity">
                                            <div class="quantity ">
                                                <label>Số lượng</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" onclick="addToCard(<?php echo $data['productItem']['id'].','.$data['productItem']['price'];?>)">Thêm vào giỏ hàng</button>
                                    </div>
                                    <div class="product-additional-info pt-25">
                                        <div class="product-social-sharing pt-25">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
            <div class="product-area pt-35">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#description"><span>Mô tả</span></a></li>
                                   <li><a data-toggle="tab" href="#product-details"><span>Chi tiết sản phẩm</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <span><?php echo $data["productItem"]["description"]; ?></span>
                            </div>
                        </div>
                        <div id="product-details" class="tab-pane" role="tabpanel">
                            <div class="product-details-manufacturer">
                                <a href="#">
                                    <img src="http://localhost/Laptrinhweb/public/images/product-details/1.jpg" alt="Product Manufacturer Image">
                                </a>
                                <p><span>Reference</span> demo_7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-30 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Các sản phẩm cùng danh mục</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                            <?php
                            $countProduct = count($data["allProductCategory"]);
                            for($i=0;$i<$countProduct;$i++){
                                echo    '<div class="col-lg-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["allProductCategory"][$i]["id"].'">
                                                        <img src="'.$data["allProductCategory"][$i]["thumbnail"].'" alt="Product Image">
                                                    </a>
                                                    <span class="sticker">New</span>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <h4><a class="product_name" href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["allProductCategory"][$i]["id"].'">'.$data["allProductCategory"][$i]["title"].'</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">'.$data["allProductCategory"][$i]["price"].' VNĐ</span>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="old-price">'.number_format($data["allProductCategory"][$i]["discount"]).' VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                            <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>';
                                }
                            ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
<script type="text/javascript">
    function addToCard(productId, priceProduct) {
        var action = "add";
        $.ajax({
            url:"../../home/addToCart",
            method:"POST",
            data:{action:action ,productId:productId, num:1, priceProduct:priceProduct},
            success:function(data){
                location.reload();
            }
        });
    }
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
</script>