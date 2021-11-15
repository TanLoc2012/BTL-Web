<?php

class Home extends Controller{

    public $categoryModel, $productMode, $allCategory;

    public function __construct(){
        $this->categoryModel = $this->model("CategoryModel");
        $this->allCategory = $this->categoryModel->getCategory();
        $this->productModel = $this->model("ProductModel");
    }

    function SayHi() {
        $productVsmart = $this->productModel->selectProductCategory(1,1);
        $productIphone = $this->productModel->selectProductCategory(2,1);
        $productSamsung = $this->productModel->selectProductCategory(3,1);
        $productXiaomi = $this->productModel->selectProductCategory(102,1);
        $productOppo = $this->productModel->selectProductCategory(104,1);
        $this->view("home",[
            "render"=>"home",
            "allCategory"=>$this->allCategory,
            "productVsmart"=>$productVsmart,
            "productIphone"=>$productIphone,
            "productSamsung"=>$productSamsung,
            "productXiaomi"=>$productXiaomi,
            "productOppo"=>$productOppo
        ]);   
    }

    public function productDetail($id){
        $productItem = $this->productModel->selectProduct($id);
        $category_id = $productItem["category_id"];
<<<<<<< HEAD
        $allProductCategory = $this->productModel->selectProductCategory($category_id,1);
=======
        $allProductCategory = $this->productModel->selectProductCategory($category_id);
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
        $productCategory = $this->categoryModel->selectCategory($category_id);
        $this->view("home",[
            "render"=>"productDetail",
            "productItem"=>$productItem,
            "productCategory"=>$productCategory,
            "allProductCategory"=>$allProductCategory,
            "category_id"=>$category_id,
            "allCategory"=>$this->allCategory
        ]);
    }

<<<<<<< HEAD
    public function productList($category_id = 0, $page = 1, $fillter=1){
=======
    public function productList($category_id = 0, $page = 1){
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
        if($category_id == 0){
            for($i=0;$i<count($this->allCategory);$i++){
                $category[$i] = $this->allCategory[$i]["id"];
            }
<<<<<<< HEAD
            $allProductCategory = $this->productModel->getAllProduct($fillter);
=======
            $allProductCategory = $this->productModel->getAllProduct();
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
            $currentIndex = ($page-1) * 9;
            $countAllProduct = count($allProductCategory);
            $numPages = ceil($countAllProduct/9);
            $this->view("home",[
                "render"=>"productList",
                "allProductCategory"=>$allProductCategory,
                "allCategory"=>$this->allCategory,
                "category_id"=>$category_id,
                "numPages"=>$numPages,
                "currentIndex"=>$currentIndex,
<<<<<<< HEAD
                "pages"=>$page,
                "fillter"=>$fillter
            ]);
        }
        else {
            $allProductCategory = $this->productModel->selectProductCategory($category_id,$fillter);
=======
                "pages"=>$page
            ]);
        }
        else {
            $allProductCategory = $this->productModel->selectProductCategory($category_id);
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
            $currentIndex = ($page-1) * 9;
            $countAllProduct = count($allProductCategory);
            $numPages = ceil($countAllProduct/9);
            $this->view("home",[
                "render"=>"productList",
                "allProductCategory"=>$allProductCategory,
                "allCategory"=>$this->allCategory,
                "category_id"=>$category_id,
                "numPages"=>$numPages,
                "currentIndex"=>$currentIndex,
<<<<<<< HEAD
                "pages"=>$page,
                "fillter"=>$fillter
=======
                "pages"=>$page
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
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
<<<<<<< HEAD
        header('Location: http://localhost/Laptrinhweb/Login');
=======
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
        if(!empty($_POST)) {
            $action = getPost('action');
            $id = getPost('productId');
            $num = getPost('num');
<<<<<<< HEAD
=======
            $priceProduct = getPost('priceProduct');     
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3

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
<<<<<<< HEAD
=======
                            $cart[$i]['priceProduct'] = $priceProduct;
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
                            $isFind = true;
                            break;
                        }
                    }
        
                    if(!$isFind) {
                        $cart[] = [
                            'id'=>$id,
<<<<<<< HEAD
                            'num'=>$num
=======
                            'num'=>$num,
                            'priceProduct'=> $priceProduct
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
                        ];
                    }
                    setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');
                    break;
            }
        }
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

<<<<<<< HEAD
    public function quanlytaikhoan(){

        $this->view("home",[
            "render"=>"quanlytaikhoan",
            "allCategory"=>$this->allCategory
        ]);
    }

=======
>>>>>>> de184f3d1b9b9e7bf7d73aa5c02793075ab018c3
    public function contact(){

        $this->view("home",[
            "render"=>"contact",
            "allCategory"=>$this->allCategory
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
}

?>
