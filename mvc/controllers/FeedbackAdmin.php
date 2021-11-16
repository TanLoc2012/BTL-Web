<?php
require_once "mvc/utility/utility.php";
class FeedbackAdmin extends Controller{

    public $feedbackModel;

    public function __construct() {
        $this->feedbackModel = $this->model("FeedbackModel");
    }

    public function SayHi(){
        $allFeedback = $this->feedbackModel->getAllFeedback();
        $this->view("feedback/feedbackAdmin",[
            "allFeedback"=>$allFeedback
        ]);
    }

    public function updateStatusFeedback($id) {
        $this->feedbackModel->updateStatus($id);
        header('Location: http://localhost/Laptrinhweb/FeedbackAdmin');
    }

    public function addFeedback() {
        if(isset($_POST["btnReview"])){
            if(isset($_POST["note"]))
                $note = getPost('note');
            $product_id = getPost('product_id');
            if(isset($_POST["user_id"]))
                $user_id = getPost('user_id');
            if(!$user_id)
                header('Location: http://localhost/Laptrinhweb/Home/productDetail/'.$product_id);
        }
        $this->feedbackModel->addFeedbackProduct($note, $user_id,$product_id);
        header('Location: http://localhost/Laptrinhweb/Home/productDetail/'.$product_id);
    }

}

?>