<!-- Begin Breadcrumb -->
<nav id="nav-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="ml125 breadcrumb-item"><a href="http://localhost/Laptrinhweb/Home">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
        </ol>
    </nav>
    <!-- End Breadcrumb -->

    <div id="wrapper">
    <p>Danh mục sản phẩm</p>
    <button 
        style="margin-bottom: 5px; margin-right: 5px;
        <?php
            if($data["category_id"] == 0)
                echo "background-color:red";
        ?>
        " 
        type="button" 
        class="btn btn-primary">
        <a style="color:white" href="http://localhost/Laptrinhweb/Home/productList/0">Tất cả</a>
    </button>
    <?php
        $countCategory = count($data["allCategory"]);
            for($i=0;$i<$countCategory;$i++){
                echo   '<button style="margin-bottom: 5px; margin-right: 5px;';if($data["category_id"] == $data["allCategory"][$i]["id"]) echo "background-color:red"; echo '" type="button" class="btn btn-primary">
                    <a style="color:white" href="http://localhost/Laptrinhweb/Home/productList/'.$data["allCategory"][$i]["id"].'">'.$data["allCategory"][$i]["name"].'</a></button>';
            }
                
    ?>
        
        <hr>
        <p>Bộ lọc</p>
        <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
                if($data["fillter"] == 1)
                    echo "background-color:red";
            ?>
        " type="button" class="btn btn-primary">
            <a style="color:white" href="http://localhost/Laptrinhweb/Home/productList/<?=$data["category_id"]?>/1/1">Giá (Cao &gt; Thấp)</a></button>
        <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
                if($data["fillter"] == 2)
                    echo "background-color:red";
            ?>
        " type="button" class="btn btn-primary">
            <a style="color:white" href="http://localhost/Laptrinhweb/Home/productList/<?=$data["category_id"]?>/1/2">Giá (Thấp &gt; Cao)</a></button>
        <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
                if($data["fillter"] == 3)
                    echo "background-color:red";
            ?>
        " type="button" class="btn btn-primary">
            <a style="color:white" href="http://localhost/Laptrinhweb/Home/productList/<?=$data["category_id"]?>/1/3">Tên (A &gt; Z)</a></button>
        <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
                if($data["fillter"] == 4)
                    echo "background-color:red";
            ?>
        " type="button" class="btn btn-primary">
            <a style="color:white" href="http://localhost/Laptrinhweb/Home/productList/<?=$data["category_id"]?>/1/4">Tên (Z &gt; A)</a></button>
       
        <hr>
        <div class="showproduct">
        <?php
            $countAllProduct = count($data["allProductCategory"]);
            for($i=0;$i<$countAllProduct;$i++){
                echo    '<div style="margin-bottom:10px" class="card">';
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
    function addToCard(productId, priceProduct) {
        var action = "add";
        $.ajax({
            url:"http://localhost/Laptrinhweb/home/addToCart",
            method:"POST",
            data:{action:action ,productId:productId, num:1, priceProduct:priceProduct},
            success:function(data){
                location.reload();
            }
        });
    }
</script>