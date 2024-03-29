<?php
	$title = 'Quản Lý Đơn Hàng';
    $isActive = "OrderAdmin";
	require_once('mvc/views/blocks/header_admin.php');
	$countOrder = count($data["allOrder"]);

?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Quản Lý Đơn Hàng - Tổng cộng có <?=$countOrder?> đơn hàng</h3>

		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th>STT</th>
					<th>Họ & Tên</th>
					<th>Email</th>
					<th>Tổng Tiền</th>
					<th>Ngày Tạo</th>
					<th style="width: 120px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	for($i=$data["currentIndex"];$i<$data["currentIndex"]+8 && $i<$countOrder;$i++) {
		echo '<tr>
					<th>'.($i+1).'</th>
					<td><a href="http://localhost/Laptrinhweb/OrderAdmin/detailOrder/'.$data["allOrder"][$i]['id'].'">'.$data["allOrder"][$i]['fullname'].'</a></td>
					<td>'.$data["allOrder"][$i]['email'].'</a></td>
					<td>'.number_format($data["allOrder"][$i]['total_money']).' đ</td>
					<td>'.$data["allOrder"][$i]['created_at'].'</td>
					<td style="width: 50px">';
		if($data["allOrder"][$i]['status'] == 0) {
			echo '<a href="http://localhost/Laptrinhweb/OrderAdmin/updateStatusOrder/'.$data["allOrder"][$i]['id'].'/1"><button  class="btn btn-sm btn-success" style="margin-bottom: 10px;">Duyệt</button><a/>
			<a href="http://localhost/Laptrinhweb/OrderAdmin/updateStatusOrder/'.$data["allOrder"][$i]['id'].'/2"><button class="btn btn-sm btn-danger">Hủy bỏ</button><a/>';
		} else if($data["allOrder"][$i]['status'] == 1) {
			echo '<label class="badge badge-success">Đã duyệt</label>';
		} else if($data["allOrder"][$i]['status'] == 2){
			echo '<label class="badge badge-danger">Đã hủy</label>';
		}
		else if($data["allOrder"][$i]['status'] == 4){
			echo '<a href="http://localhost/Laptrinhweb/OrderAdmin/updateStatusOrder/'.$data["allOrder"][$i]['id'].'/1"><button  class="btn btn-sm btn-success" style="margin-bottom: 10px;">Duyệt</button><a/>
			<a href="http://localhost/Laptrinhweb/OrderAdmin/updateStatusOrder/'.$data["allOrder"][$i]['id'].'/2"><button class="btn btn-sm btn-danger">Hủy bỏ</button><a/>';
			echo '<label class="badge badge-danger">Đã thanh toán</label>';
		}	
		else echo '<label class="badge badge-danger">Hoàn thành giao dịch</label>';
		echo '</td>
				</tr>';
	}
?>
			</tbody>
		</table>
	</div>
	<nav aria-label="Page navigation example">
            <ul class="pagination pg-blue justify-content-center">
                <li class="page-item">
            <?php
                    if($data["numPages"]>1){
                        if($data["pages"]==1){
                            echo    '<a href="http://localhost/Laptrinhweb/OrderAdmin/SayHi/1" class="page-link"><i class="fa fa-chevron-left"></i> Previous</a>';
                        }
                        else echo    '<a href="http://localhost/Laptrinhweb/OrderAdmin/SayHi/'.($data["pages"]-1).'" class="page-link"><i class="fa fa-chevron-left"></i> Previous</a>';
                        echo '</li>';
                        for($i=1; $i<=$data["numPages"];$i++){
                            if($i == $data["pages"]){
                                echo '<li class="page-item active"><a class="page-link" href="http://localhost/Laptrinhweb/OrderAdmin/SayHi/'.$i.'">'.$i.'</a></li>';
                            }
                            else echo '<li><a class="page-link" href="http://localhost/Laptrinhweb/OrderAdmin/SayHi/'.$i.'">'.$i.'</a></li>';
                        }
                        echo '<li class="page-item">';
                        if($data["pages"] == $data["numPages"]){
                            echo '<a href="http://localhost/Laptrinhweb/OrderAdmin/SayHi/1" class="page-link"> Next <i class="fa fa-chevron-right"></i></a>';
                        }
                        else echo '<a href="http://localhost/Laptrinhweb/OrderAdmin/SayHi/'.($data["pages"]+1).'" class="page-link "> Next <i class="fa fa-chevron-right"></i></a>';
                    }
                ?>
                </li>
            </ul>
        </nav>
</div>
<?php
	require_once('mvc/views/blocks/footer_admin.php');
?>