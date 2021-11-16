<?php
require_once "mvc/views/blocks/header.php";

if($data["render"] == "home") {
    require_once "mvc/views/components/sliderbar.php";
    require_once "mvc/views/components/showProduct.php";
}
else if($data["render"] == "productDetail"){
    require_once "mvc/views/components/product_detail.php";
}
else if($data["render"] == "productList"){
    require_once "mvc/views/components/productList.php";
}
else if($data["render"] == "card"){
    require_once "mvc/views/components/card.php";
}
else if($data["render"] == "contact"){
    require_once "mvc/views/components/contact.php";
}
else if($data["render"] == "gioithieu"){
    require_once "mvc/views/components/gioithieu.php";
}
else if($data["render"] == "tintuc"){
    require_once "mvc/views/components/tintuc.php";
}
else if($data["render"] == "quanlytaikhoan"){
    require_once "mvc/views/components/updateInfoUser.php";
}

require_once "mvc/views/blocks/footer.php";