<!--Section: Contact v.2-->
<section id="wrapper" class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Bạn có bất kì câu hỏi nào cho chúng tôi không? Hãy hỏi ngay đừng ngần ngại nhé. Chúng tôi sẽ trả lời bạn sớm nhất có thể!!!</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="http://localhost/Laptrinhweb/FeedbackAdmin/addFeedback" method="POST">

                <!--Grid row-->
                <div class="row">
                </div>
                <!--Grid row-->
			    <input type="text" name="user_id" value="<?=$user["id"]?>" hidden="true">

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Chủ đề</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Nội dung</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div style="margin-top:10px" class="text-center text-md-left">
                    <button class="btn btn-primary" name="btnContact">Gửi</button>
                </div>

            </form>

            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Đại học Bách Khoa TPHCM</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>034 765 1292</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>loc.nguyencse@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->