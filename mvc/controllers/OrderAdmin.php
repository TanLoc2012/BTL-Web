<?php
require_once "mvc/utility/utility.php";
class OrderAdmin extends Controller{

    public $orderModel;

    public function __construct() {
        $this->orderModel = $this->model("OrderModel");
    }

    public function SayHi($page=1){
        $allOrder = $this->orderModel->getAllOrder();
        $currentIndex = ($page-1) * 8;
        $countAllProduct = count($allOrder);
        $numPages = ceil($countAllProduct/8);

        $this->view("order/orderAdmin",[
            "allOrder"=> $allOrder,
            "numPages"=>$numPages,
            "currentIndex"=>$currentIndex,
            "pages"=>$page
        ]);
    }

    public function detailOrder($id) {
        $detailorder = $this->orderModel->getDetailOrder($id);
        $orderItem = $this->orderModel->getOrderItem($id);
        
        $this->view("order/detailOrder",[
            "detailOrder"=>$detailorder,
            "orderItem"=>$orderItem
        ]);
    }

    public function updateStatusOrder($id, $status){
        $this->orderModel->updateStatus($id, $status);
        header('Location: http://localhost/Laptrinhweb/OrderAdmin');
    }

    public function addOrderSuccess(){
        
        if(isset($_POST["btnCheckout"])){
            $fullname = getPost('fullname');
            $table = getPost('table');
            $address = getPost('address');
            $phone = getPost('phone');
            $email = getPost('email');
            $user_id = getPost('user_id');
            $totalMoney = getPost('totalMoney');
            if($fullname == "" || $address == "" || $phone == "" || $email == "")
                header('Location: http://localhost/Laptrinhweb/Home/checkout/'.$totalMoney);
            else {
                $this->orderModel->insertOrders($user_id, $fullname, $address, $phone, $email,$totalMoney, $table);
                if($table!=0){
                    $this->orderModel->updateStatusTable(1,$table);
                }
                $productModel = $this->model("ProductModel");
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
                    $orderDetails = $productModel->getProductOrder($idList);
                } else {
                    $orderDetails = [];
                }
                $orderId = $this->orderModel->getOrderId($user_id);
                var_dump($orderId);
                for($i=0;$i<count($orderDetails);$i++){
                    $this->orderModel->insertOrderDetail($orderId[0]["id"], $orderDetails[$i]["id"], $orderDetails[$i]["price"], $num[$i], $num[$i]*$orderDetails[$i]["price"]);
                }
                setcookie('cart', "", -60, '/');
                header('Location: http://localhost/Laptrinhweb/Home/succesOrder');
            }
        }
    }

}

?>