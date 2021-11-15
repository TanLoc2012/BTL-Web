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
        var action = "add";
        $.ajax({
            url:"home/addToCart",
            method:"POST",
            data:{action:action ,productId:productId, num:1},
            success:function(data){
                location.reload();
            }
        });
    }
</script>