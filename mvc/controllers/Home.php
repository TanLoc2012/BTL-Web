<?php

class Home extends Controller{

    public $categoryModel, $productModel, $allCategory;

    public function __construct(){
        $this->categoryModel = $this->model("CategoryModel");
        $this->allCategory = $this->categoryModel->getCategory();
        $this->productModel = $this->model("ProductModel");
    }

    function SayHi() {
        $productMonNuoc = $this->productModel->selectProductCategory(108,1);
        $productMonNuong = $this->productModel->selectProductCategory(109,1);
        $productMonChay = $this->productModel->selectProductCategory(110,1);
        $productMonKho = $this->productModel->selectProductCategory(111,1);
        $productDrink = $this->productModel->selectProductCategory(112,1);
        $productAnVat = $this->productModel->selectProductCategory(113,1);
        $this->view("home",[
            "render"=>"home",
            "allCategory"=>$this->allCategory,
            "productMonNuoc"=>$productMonNuoc,
            "productMonNuong"=>$productMonNuong,
            "productMonChay"=>$productMonChay,
            "productMonKho"=>$productMonKho,
            "productDrink"=>$productDrink,
            "productAnVat"=>$productAnVat
        ]);   
    }

    public function productDetail($id){
        $feedbackModel = $this->model("FeedbackModel");
        $feedbackProduct = $feedbackModel->getFeedbackProduct($id);
        $productItem = $this->productModel->selectProduct($id);
        $category_id = $productItem["category_id"];
        $allProductCategory = $this->productModel->selectProductCategory($category_id,1);
        $productCategory = $this->categoryModel->selectCategory($category_id);
        $this->view("home",[
            "render"=>"productDetail",
            "productItem"=>$productItem,
            "productCategory"=>$productCategory,
            "allProductCategory"=>$allProductCategory,
            "category_id"=>$category_id,
            "allCategory"=>$this->allCategory,
            "feedbackProduct"=>$feedbackProduct
        ]);
    }

    public function productList($category_id = 0, $page = 1, $fillter=1){
        if($category_id == 0){
            for($i=0;$i<count($this->allCategory);$i++){
                $category[$i] = $this->allCategory[$i]["id"];
            }
            $allProductCategory = $this->productModel->getAllProduct($fillter);
            $currentIndex = ($page-1) * 12;
            $countAllProduct = count($allProductCategory);
            $numPages = ceil($countAllProduct/12);
            $this->view("home",[
                "render"=>"productList",
                "allProductCategory"=>$allProductCategory,
                "allCategory"=>$this->allCategory,
                "category_id"=>$category_id,
                "numPages"=>$numPages,
                "currentIndex"=>$currentIndex,
                "pages"=>$page,
                "fillter"=>$fillter
            ]);
        }
        else {
            $allProductCategory = $this->productModel->selectProductCategory($category_id,$fillter);
            $currentIndex = ($page-1) * 12;
            $countAllProduct = count($allProductCategory);
            $numPages = ceil($countAllProduct/12);
            $this->view("home",[
                "render"=>"productList",
                "allProductCategory"=>$allProductCategory,
                "allCategory"=>$this->allCategory,
                "category_id"=>$category_id,
                "numPages"=>$numPages,
                "currentIndex"=>$currentIndex,
                "pages"=>$page,
                "fillter"=>$fillter
            ]);
        }
    }

    public function search_buttuon(){
        if(isset($_POST)){
            $page = 1;
            $search_name = $_POST["search_name"];
            $allProductCategory = $this->productModel->searchProduct($search_name);
            $currentIndex = ($page-1) * 12;
            $countAllProduct = count($allProductCategory);
            $numPages = ceil($countAllProduct/12);
            $category_id = $fillter = 0;
            $this->view("home",[
                "render"=>"productList",
                "allProductCategory"=>$allProductCategory,
                "allCategory"=>$this->allCategory,
                "category_id"=>$category_id,
                "numPages"=>$numPages,
                "currentIndex"=>$currentIndex,
                "pages"=>$page,
                "fillter"=>$fillter
            ]);
        }
    }

    public function card(){
        $cart = [];
        $num = [];
        if(isset($_COOKIE['cart'])) {
            $json = $_COOKIE['cart'];
            $cart = json_decode($json, true);
        }
        $idList = [];
        foreach ($cart as $item) {
            $idList[] = $item['id'];
            $num[] = $item['num'];
        }
        if(count($idList) > 0) {
            $idList = implode(',', $idList);
            //[2, 5, 6] => 2,5,6
            $orderDetails = $this->productModel->getProductOrder($idList);
        } else {
            $orderDetails = [];
        }
        
        if($orderDetails != NULL)
            $countOrder = count($orderDetails);
        else $countOrder = 0;
        $this->view("home",[
            "render"=>"card",
            "orderDetails"=>$orderDetails,
            "countOrder"=>$countOrder,
            "allCategory"=>$this->allCategory,
            "num"=>$num
        ]);
    }

    public function addToCart(){
        header('Location: http://localhost/Laptrinhweb/Login');
        if(!empty($_POST)) {
            $action = getPost('action');
            $id = getPost('productId');
            $num = getPost('num');

            $cart = [];
            if(isset($_COOKIE['cart'])) {
                $json = $_COOKIE['cart'];
                $cart = json_decode($json, true);
            }
        
            switch ($action) {
                case 'add':
                    $isFind = false;
                    for ($i=0; $i < count($cart); $i++) { 
                        if($cart[$i]['id'] == $id) {
                            $cart[$i]['num'] += $num;
                            $isFind = true;
                            break;
                        }
                    }
        
                    if(!$isFind) {
                        $cart[] = [
                            'id'=>$id,
                            'num'=>$num
                        ];
                    }
                    setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');
                    break;
            }
        }
    }

    public function checkout($total){
        $orderModel = $this->model("OrderModel");
        $table = $orderModel->getTable();

        $this->view("home",[
            "render"=>"checkout",
            "allCategory"=>$this->allCategory,
            "totalMoney"=>$total,
            "table"=>$table
        ]);
    }

    public function paymentOnline($total){
        $orderModel = $this->model("OrderModel");
        $table = $orderModel->getTable();

        $this->view("home",[
            "render"=>"paymentOnline",
            "allCategory"=>$this->allCategory,
            "totalMoney"=>$total,
            "table"=>$table
        ]);
    }
    
    public function succesOrder(){
        
        $this->view("succesOrder",[
        ]);
    }

    public function deleteCart(){
        if(!empty($_POST)) {
            $action = getPost('action');
            $id = getPost('productId');

            $cart = [];
            if(isset($_COOKIE['cart'])) {
                $json = $_COOKIE['cart'];
                $cart = json_decode($json, true);
            }
        
            switch ($action) {
                case 'delete':
                    for ($i=0; $i < count($cart); $i++) { 
                        if($cart[$i]['id'] == $id) {
                            array_splice($cart, $i, 1);
                            break;
                        }
                    }
                    setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');
                break;
            }
        }
        echo $id;
    }

    public function quanlytaikhoan(){
      

        $this->view("home",[
            "render"=>"quanlytaikhoan",
            "allCategory"=>$this->allCategory
        ]);
    }

    public function quanlydonhang($user_id){
        $orderSuccessModel = $this->model("OrderModel");
        $orderItem = $orderSuccessModel->getorders($user_id);
        $this->view("home",[
            "render"=>"quanlydonhang",
            "allCategory"=>$this->allCategory,
            "orderItem"=> $orderItem
        ]);
    }

    public function detailOrderUser($id) {
        $orderModel = $this->model("OrderModel");
        $detailorder = $orderModel->getDetailOrder($id);
        $orderItem = $orderModel->getOrderItem($id);
        $this->view("home",[
            "render"=>"orderDetail",
            "detailOrder"=>$detailorder,
            "allCategory"=>$this->allCategory,
            "orderItem"=>$orderItem
        ]);
    }

    public function confirmOrder($orderId, $user_id,$table_id,$status){
        $orderSuccessModel = $this->model("OrderModel");
        $orderSuccessModel->updateStatusOrder($orderId,$status);
        $orderItem = $orderSuccessModel->getorders($user_id);
        $orderSuccessModel->updateStatusTable(0,$table_id);

        $this->view("home",[
            "render"=>"quanlydonhang",
            "allCategory"=>$this->allCategory,
            "orderItem"=> $orderItem
        ]);
    }

    public function contact($alertSuccess=0){
        $this->view("home",[
            "render"=>"contact",
            "allCategory"=>$this->allCategory,
            "alertSuccess"=>$alertSuccess
        ]);
    }

    public function gioithieu(){

        $this->view("home",[
            "render"=>"gioithieu",
            "allCategory"=>$this->allCategory
        ]);
    }

    public function tintuc(){
    
        $this->view("home",[
            "render"=>"tintuc",
            "allCategory"=>$this->allCategory
        ]);
    }

    public function staff(){
        $orderModel = $this->model("OrderModel");
        $staffOrder = $orderModel->getStaffOrder();

        $this->view("home",[
            "render"=>"staff",
            "allCategory"=>$this->allCategory,
            "staffOrder"=>$staffOrder
        ]);
    }

    public function chef(){
        $orderModel = $this->model("OrderModel");
        $chefOrder = $orderModel->getChefOrder();

        $this->view("home",[
            "render"=>"chef",
            "allCategory"=>$this->allCategory,
            "chefOrder"=>$chefOrder
        ]);
    }

    public function search()
    {
        if (isset($_POST["action"])) {
            
            $search_name = $_POST["search_name"];

            $result = $this->productModel->searchProduct($search_name);
            $output ='<i style="right: 10px;position: absolute;top: 4px;z-index:9999" class="fas fa-times"></i>';
            foreach ($result as $rows) {
                
                $output .='
                <li style="margin: 5px 0;" class="list-group">
                    <div style="margin: 0 auto;" class="row">
                        <div class="col-4" style="">
                            <div class="image">
                            <a href="http://localhost/Laptrinhweb/Home/productDetail/'.$rows["id"].'"><img src="'.$rows["thumbnail"].'" style="width: 75%;padding-right: 0;"></a>
                            </div>
                        </div>
                        <div class="col-8" style="">
                            <div class="name-product">
                                <a href="http://localhost/Laptrinhweb/Home/productDetail/'.$rows["id"].'">'.$rows["title"].'</a>
                            </div>
                            <div class="price">
                                <p>'.number_format($rows["price"]).'&nbspVNĐ</p>
                            </div>
                        </div>
                    </div>
                </li>
                ';
            }
            if($output == '<i style="right: 10px;position: absolute;top: 4px;z-index:9999" class="fas fa-times"></i>')
                $output .= '<li style="margin: 5px 0;" class="list-group">
                            Không tìm thấy sản phẩm</li>';
            echo $output;
        }
    }

    
}

?>
