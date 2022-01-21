<style>
    .tabs .slider {
        position: relative;
        width: 50%;
        transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
    }

    .content-setion-tabs .tab-content .container {
        margin-bottom: 5px;
        text-align: left !important
    }

    .box-header {
        padding: 10px ! important;
        border-bottom: 1px solid #d1cfcf ! important;
        background-color: #c1c7c9;
        margin-bottom: 5px;

    }

    .list-car-heading {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }

    .list-car-heading .list-car-name {
        font-weight: 700;
        font-size: 14px;
        line-height: initial;
        margin-bottom: 0;
        letter-spacing: inherit;
    }

    .list-car-heading .car-price {
        margin: 0;
        position: relative;
    }

    .panel-default {
        border: none ! important;
        background: none ! important;
        box-shadow: none ! important
    }

    .panel-title a {
        text-decoration: underline;
    }

    .box-body {
        padding: 5px 15px;
        margin-bottom: 20px;
    }
</style>
<div class="grid ">
    <div class="container-fluid m2-content pt-3">
        <div class="td-crumb-container">

            <div class="entry-crumbs">
                <span itemscope="">
                    <a title="" class="entry-crumb" itemprop="url" href="<?= PATH_URL ?>"><span itemprop="title">Trang
                            Chủ</span></a>
                </span>
                <i class="fa fa-angle-double-right"></i>
                <span itemscope="">
                    <a title="Tín dụng - tài chính" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Tín dụng - tài chính</span></a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
            <div>
                <a href="#"><img data-u="image" data-src="<?= PATH_URL ?>assets/images/dichvu/banner_credit.png" src="<?= PATH_URL ?>assets/images/dichvu/banner_credit.png" /></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jssor_1_slider_init();
</script>
<div class="wrapper">
    <div class="container-fluid m2-content " style="margin-top: 20px;">
        <div class="tabs parentTabs">
            <input type="radio" id="vaytaichinh" name="tab-control" checked>
            <input type="radio" id="tuchutaichinh" name="tab-control">
            <ul class="list-item">
                <li title="VAY TÀI CHÍNH"><label for="vaytaichinh" role="button"><span>VAY TÀI CHÍNH</span> <br><img src="<?= PATH_URL ?>assets/images/icon/tc1.png"></label></li>
                <li title="TỰ CHỦ TÀI CHÍNH"><label for="tuchutaichinh" role="button"><span>TỰ CHỦ TÀI CHÍNH</span> <br><img src="<?= PATH_URL ?>assets/images/icon/tc3.png"></label></li>
            </ul>
            <div class="slider">
                <div class="indicator"></div>
            </div>
            <div class="content">
                <section class="content-setion-tabs">
                    <h2 class="page-header">VAY TÀI CHÍNH</h2>
                    <div class="row tab-v3">
                        <div class="col-sm-3">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#tfs" data-toggle="tab" aria-expanded="true">Vay từ TFS</a></li>
                                <li class=""><a href="#nganhang" data-toggle="tab" aria-expanded="false">Vay từ ngân hàng</a></li>
                                <li class=""><a href="#thuetaichinh" data-toggle="tab" aria-expanded="false">Vay cty thuê tài chính</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div class="tab-pane fade  in active" id="tfs">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">GIỚI THIỆU</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="box-body">
                                                    <p><strong>GIỚI THIỆU TFS VIỆT NAM</strong></p>
                                                    <p>&nbsp; &nbsp; &nbsp;- “Vay từ Toyota mua xe Toyota” là một Dịch vụ Tài chính của Công Ty TNHH Một Thành Viên Tài Chính Toyota Việt Nam – Toyota Financial Service Việt Nam (TFSVN).</p>

                                                    <p>&nbsp; &nbsp; &nbsp;- TFSVN là công ty tài chính 100% vốn nước ngoài được đầu tư bởi Tập Đoàn Tài Chính Toyota Nhật Bản. TFSVN là công ty tài chính của nhà sản xuất xe hơi duy nhất tại Việt Nam hiện nay. Chúng tôi hoạt động hướng tới mục tiêu cung cấp dịch vụ tài chính cho Khách hàng mua xe Toyota và các Đại lý ủy quyền của Toyota với các sản phẩm tài chính đa dạng và hấp dẫn.</p>

                                                    <p><strong>Đặc tính sản phẩm:</strong></p>

                                                    <p style="text-decoration:underline;">Sản phẩm tài chính cạnh tranh:</p>

                                                    <p>&nbsp; &nbsp; &nbsp;- Lãi suất cạnh tranh, thời gian vay vốn linh hoạt từ 1 đến 5 năm, thủ tục đơn giản, xét duyệt tín dụng nhanh chóng. Khách hàng không phải chờ lâu để có thể có được khoản tín dụng cần thiết cho việc mua xe. Với thời hạn vay vốn linh hoạt từ 1 đến 5 năm, khách hàng có thể lựa chọn sản phẩm tài chính thích hợp nhất với điều kiện tài chính của mình.</p>

                                                    <p style="text-decoration:underline;">Sản phẩm tài chính đa dạng:</p>

                                                    <p>&nbsp; &nbsp; &nbsp;- Các sản phẩm và dịch vụ đa dạng của TFS luôn thích hợp cho mọi nhu cầu và ngân sách của từng Khách hàng, giúp Khách hàng có thêm cơ hội sở hữu xe Toyota.</p>

                                                    <p style="text-decoration:underline;">Thuận tiện:</p>

                                                    <p>&nbsp; &nbsp; &nbsp;- Mô hình một đầu mối “one-stop shop” thuận tiện cho Khách hàng mua xe Toyota. Chỉ cần tới bất kỳ Đại lý ủy quyền của Toyota trên toàn quốc, Khách hàng có thể lựa chọn cho mình chiếc xe Toyota yêu thích, cùng sự hỗ trợ tài chính từ TFSVN cũng như Bảo hiểm cho chiếc xe của mình.</p>

                                                    <p style="text-decoration:underline;">Chất lượng Toyota:</p>

                                                    <p>&nbsp; &nbsp; &nbsp;- TFSVN cam kết cung cấp sản phẩm và dịch vụ tài chính tiêu chuẩn chất lượng toàn cầu của Toyota, với phương châm hoạt động "Khách hàng là trên hết” </p>
                                                    <p>&nbsp; &nbsp; &nbsp;- Hiện nay TFSVN đã có mặt tại Toyota Nha Trang, để biết thêm thông tin chi tiết Quý khách vui lòng liên hệ với Nhân viên của Công ty theo số điện thoại: 091 290 9032 để được hỗ trợ chu đáo nhất.’’</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">ĐIỀU KIỆN VAY</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="box-body">
                                                    <p><strong>ĐIỀU KIỆN VAY TFS VIỆT NAM</strong></p>
                                                    <p>Các cá nhân có nhu cầu mua xe Toyota, chứng minh được tai sản, khả năng trả nợ của mình và đủ những điều kiện sau:</p>
                                                    <p>&nbsp; &nbsp; &nbsp;- Tuổi từ 18-65.</p>
                                                    <p>&nbsp; &nbsp; &nbsp;- Có hộ khẩu thường trú tại Việt Nam.</p>
                                                    <p>&nbsp; &nbsp; &nbsp;- Có đầy đủ năng lực pháp luật và năng lực hành vi dân sự.</p>
                                                    <p>&nbsp; &nbsp; &nbsp;- Có giấy phép lao động tại Việt Nam (Áp dụng cho người nước ngoài).</p>
                                                    <p>&nbsp; &nbsp; &nbsp;- Đáp ứng các yêu cầu được cấp tín dụng do Ngân hàng Nhà nước Việt Nam quy định (Áp dụng cho người nước ngoài).</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">HỒ SƠ VAY VỐN</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="box-body">
                                                    <p><strong>HỒ SƠ VAY VỐN GỒM:</strong></p>
                                                    <p>1. CMND.</p>
                                                    <p>2. Hộ khẩu.</p>
                                                    <p>3. Giấy chứng nhận tình trạng hôn nhân.</p>
                                                    <p>4. Giấy tờ chứng minh khả năng tài chính.</p>
                                                    <p>5. Đăng ký vay mua xe Toyota theo mẫu của TFSVN.</p>
                                                    <p>6. Chứng từ đính kèm đăng ký vay, Tải về tại <a target="_blank" href="#">đây</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">CÂU HỎI THƯỜNG GẶP</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="box-body">
                                                    <div class="acc-v1" id="accordion-1">
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-One">
                                                                        1. Tôi phải chứng minh thu nhập bao nhiêu để có thể được vay?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-One" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Quyết định cấp tín dụng của TFSVN bao gồm các yếu tố tài chính và phi tài chính. Thu nhập hàng tháng chỉ là một yếu tố tài chính trong số các yếu tố cần xem xét. Về thu nhập, bạn cần chứng minh có nguồn thu nhập ổn định, thường xuyên và đủ đảm bảo việc thanh toán nợ vay.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Two">
                                                                        2. Nếu tôi đưa thêm tài sản để bảo đảm khoản vay ngoài chiếc xe, TFSVN có thể giảm lãi suất cho vay hay tăng tỉ lệ vay không?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Two" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Để đơn giản thủ tục cho Quý khách, Quý khách và TFSVN đồng ý dùng chiếc xe hình thành từ vốn vay làm tài sản đảm bảo cho khoản vay. Việc xem xét tỷ lệ khoản vay cũng như lãi suất cho vay còn dựa trên các yếu tố khác ngoài tài sản thế chấp.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Three">
                                                                        3. Tôi có thể biết tôi phải trả bao nhiêu/tháng nếu tôi muốn mua xe Toyota không?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Three" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Số tiền trả hàng tháng phụ thuộc vào nhiều yếu tố như thời hạn vay, số tiền vay, phương thức thanh toán và lãi suất hiện hành của TFSVN.</p>
                                                                        <p>Quý khách vui lòng đến Toyota Nha Trang, tại đây, nhân viên bán hàng của Đại lý và nhân sẽ tư vấn cụ thể hơn và cùng đưa ra giải pháp phù hợp nhất cho Quý khách.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Four">
                                                                        4. Tôi có thể để người khác đứng tên trên Chứng nhận Đăng ký xe ô tô không?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Four" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Bạn không được để người khác đứng tên trên Chứng nhận Đăng ký xe ô tô. Vì xe là tài sản đảm bảo cho khoản vay nên người Chủ sở hữu xe phải là người vay.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Five">
                                                                        5. TFSVN cung cấp những sản phẩm cho vay nào?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Five" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>TFSVN có nhiều sản phẩm linh hoạt và đa dạng, Quý khách có thể lựa chọn tuỳ theo khả năng tài chính và nhu cầu của mình.</p>
                                                                        <p>Sản phẩm cho vay củ TFS bao gồm sản phẩm linh hoạt và sản phẩm tối ưu:</p>
                                                                        <p>&nbsp; &nbsp;- Sản phẩm tối ưu: Loai hình này có những đặc điểm sau:</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp; + Tận hưởng lãi suất thấp.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp; + Dành cho các Khách hàng có thu nhập ổn định và có kế hoạch vay dài hạn.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp; + Lãi suất thấp trong suốt thời hạn vay.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp; + Có thể thanh toán sớm một phần hoặc toàn bộ khoản tín dụng trước hạn.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp; + Áp dụng Lãi Trả Nợ Gốc Sớm.</p>
                                                                        <p>&nbsp; &nbsp;- Sản phẩm linh hoạt: Loai hình này có những đặc điểm sau:</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp; + Thanh toán sớm không chịu Lãi Trả Nợ Gốc Sớm.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp; + Dành cho các khách hàng muốn linh hoạt trong kế hoạch thanh toán.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp; + Chủ động thanh toán sớm một phần hoặc toàn bộ khoản tín dụng trước hạn.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp; + Không áp dụng Lãi Trả Nợ Gốc Sớm.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Six">
                                                                        6. Tôi có thể vay tối đa TỪ TFS là bao nhiêu?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Six" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Theo chính sách của TFSVN, Quý khách có thể vay đến 90% trị giá xe. Tuy nhiên, tùy vào điều kiện và khả năng tài chính của Quý khách mà TFSVN sẽ quyết định tỉ lệ cho vay cụ thể.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Seven">
                                                                        7. Tôi có thể trả trước một phần nợ hay toàn bộ nợ không? Nếu có thủ tục và phí như thế nào?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Seven" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Quý khách có thể thanh toán sớm một phần hay toàn bộ khoản tín dụng, tuy nhiên Quý khách phải chịu Lãi Trả Nợ Gốc Sớm nếu Quý khách chọn sản phẩm tối ưu. Đối với sản phẩm linh hoạt, Quý khách không phải chịu Lãi Trả Nợ Gốc Sớm. Trong mọi trường hợp, Quý khách phải thông báo cho TFSVN bằng văn bản theo quy định tại Bộ hợp đồng tín dụng ký kết giữa Quý khách với TFSVN..</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Eight">
                                                                        8. Nếu ngày thanh toán theo Lịch thanh toán rơi vào ngày nghỉ / lễ, tôi có thể thanh toán vào ngày sau đó không? Tôi có phải chịu Lãi quá hạn không?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Eight" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Nếu ngày thanh toán rơi vào ngày nghỉ / lễ, Quý khách có thể thanh toán vào ngày TFSVN làm việc ngay sau ngày nghỉ / lễ và không phải trả lãi quá hạn. Quý khách lưu ý, nếu Quý khách không thanh toán ngay vào ngày làm việc kế tiếp sau ngày nghỉ / lễ, lãi quá hạn sẽ được tính từ ngày đến hạn trên lịch thanh toán cho tới ngày thanh toán (bao gồm cả ngày nghỉ / lễ). Nếu ngày thanh toán là ngày 29, 30, 31 của tháng, mà ngày đó không tồn tại thì khoản thanh toán sẽ đến hạn vào ngày cuối cùng của tháng đó.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Night">
                                                                        9. Tôi có thể kiểm tra khoản tiền tôi thanh toán đã vào tài khoản của TFSVN chưa hay không, nếu có thì bằng cách nào?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Night" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Sau khi chuyển tiền từ một ngày (nếu Quý khách nộp tiền tại hệ thống Techcombank và Citibank) đến ba ngày (nếu Quý khách chuyển tiền từ các ngân hàng ngoài hệ thống Techcombank hay Citibank), Quý khách có thể kiểm tra bằng cách gọi điện thoại đến văn phòng TFSVN theo số điện thoại: 84-8) 3911 0199 - (84-8) 3911 0208 hoặc Email: info@toyotafinancial.com.vn.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Ten">
                                                                        10. Tôi có thể thanh toán cho TFSVN bằng những cách nào?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Ten" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>1. Thanh toán tiền hàng tháng thông qua ngân hàng chính của TFSVN:</p>
                                                                        <p>&nbsp; &nbsp;Từ bất kỳ ngân hàng nào, Quý khách đều có thể nộp tiền / chuyển khoản vào tài khoản của chúng tôi bằng cách điền các thông tin theo mẫu của ngân hàng với chi tiết như sau:</p>

                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp;- Số tài khoản: Quý khách điền số tài khoản như trong Thẻ tài khoản được gửi kèm.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp;- Tên chủ tài khoản: TFSVN.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp;- Ngân hàng: Ngân hàng Citibank- Chi nhánh TP.HCM.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp;- Và các nội dung khác theo hướng dẫn của ngân hàng.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp;- Số tiền được xem là đã thanh toán khi đã vào tài khoản của TFSVN tại Ngân hàng Citibank – Chi nhánh TPHCM. Do đó xin Quý khách lưu ý khi tính thời gian chuyển tiền tại ngân hàng mà Quý khách trả tiền sao cho tiền đến được tài khoản của TFSVN tại Ngân hàng Citibank – Chi nhánh TPHCM vào đúng ngày đến hạn ghi trong Lịch thanh toán để tránh phát sinh Lãi Quá hạn.</p>
                                                                        <p>2. Thanh toán tiền hàng tháng vào tài khoản của TFSVN tại Ngân hàng Techcombank:</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp;- Số tài khoản: 102.215.79904.016.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp;- Tên chủ tài khoản: TFSVN.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp;- Tên ngân hàng: Techcombank TP.HCM.</p>
                                                                        <p>&nbsp; &nbsp;&nbsp; &nbsp;-Nội dung thanh toán: Vui lòng ghi rõ Số hợp đồng, Tên người vay và Kỳ trả tiền.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Eleven">
                                                                        11. Làm thế nào tôi có thể biết số dư nợ của mình trong từng thời điểm? Tôi muốn được thông báo lịch sử trả nợ để theo dõi, TFSVN có thể cung cấp cho tôi được không?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Eleven" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Quý khách có thể theo dõi dựa trên Lịch thanh toán mới nhất mà TFSVN gửi cho Quý khách. Nếu Quý khách muốn được thông báo lịch sử trả nợ để theo dõi, TFSVN sẽ cung cấp khi nhận được yêu cầu.</p>

                                                                        <p>Quý khách vui lòng liên hệ nhân viên tư vấn của Toyota Nha Trang theo số 0912909032 để được cung cấp thông tin nhanh nhất.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Twelve">
                                                                        12. Trước khi được giải ngân tôi có phải mua luôn bảo hiểm bằng thời hạn vay không? Nếu có thì thời hạn mua bao hiểm là bao lâu ?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse-Twelve" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <blockquote class="hero" style="line-height: 22px; ">
                                                                        <p>Quý khách không phải mua luôn Bảo hiểm bằng thời hạn vay nếu thời hạn vay trên 01 năm (thời hạn tối thiểu cho bảo hiểm là 01 năm). Quý khách có thể mua từng năm một và gia hạn sau đó để đảm bảo xe vay phải được bảo hiểm trong suốt thời hạn bộ hợp đồng tín dụng có hiệu lực.</p>

                                                                        <p>Quý khách cũng có thể mua luôn cho thời hạn vay. Để biết thêm về thông tin bảo hiểm, Quý khách vui lòng xem tại địa chỉ: <a href="http://toyotanhatrang.com.vn/bao-hiem/">http://toyotanhatrang.com.vn/bao-hiem/</a></p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nganhang">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v1" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Hình Thức Vay Trả Góp Qua Ngân Hàng</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v1" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>1. Áp dụng cho cá nhân/ doanh nghiệp.</p>
                                                    <p>2. Mức tài trợ thông thường 75% trên tài sản thế chấp.</p>
                                                    <p>3. Thời gian tối đa 5 năm.</p>
                                                    <p>4. Lãi suất thông thường của Ngân hàng TMCP: 1,0625%/tháng.</p>
                                                    <p>5. Thời gian thẩm định hồ sơ sau khi nhận đầy đủ 24 giờ.</p>
                                                    <p>6. Chi phí : Phí thủ tục hành chính.</p>
                                                    <p>7. Thủ tục hành chính tại thông thường gồm: Phí đảm bảo tài sản, Phí mở tài khoản, Phí công chứng sao y, Cà vẹt xe, Bảo hiểm thân xe 1,5% trị giá xe trong thời gian vay.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v2" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Hồ Sơ Vay Vốn Qua Ngân Hàng</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v2" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>1. Đăng ký kinh doanh, mấu dấu, Mã số thuế của Công ty, Tổ chức.</p>
                                                    <p>2. Hợp đồng mua xe.</p>
                                                    <p>3. Báo cáo tài chính nộp thuế hàng năm gần nhất (Có dấu của cơ quan thuế).</p>
                                                    <p>4. Tờ khai quyết toán thuế thu nhập doanh nghiệp năm gần nhất (có dấu của cơ quan Thuế).</p>
                                                    <p>5. Bộ tờ khai VAT 12 tháng gần đây nhất bao gồm cả đầu ra và đầu vào (có dấu của cơ quan Thuế).</p>
                                                    <p>6. Hóa đơn điện thoại cố định của Công ty tháng gần nhất.</p>
                                                    <p>7. Điều lệ Công ty.</p>
                                                    <p>8. Biên bản họp đại hội cổ đông bầu hội đồng quản trị (mẫu Ngân hàng).</p>
                                                    <p>9. Biên bản họp hội đồng quản trị về việc vay vốn mua xe trả góp (mẫu Ngân hàng).</p>
                                                    <p>10. Đơn vay vốn ( theo mẫu của Ngân hàng).</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v3" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Quy Trình Mua Xe Qua Ngân Hàng</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v3" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>1. Khách hàng chuẩn bị đầy đủ hồ sơ theo hướng dẫn của nhân viên tín dụng.</p>
                                                    <p>2. Nhân viên tín dụng thẩm định hồ sơ vay vốn.</p>
                                                    <p>3. Sau khi có giấy tài trợ tín dụng và bộ hồ sơ xe, Khách hàng tiến hành tới Toyota Nha Trang đóng tiền đối ứng và tiến hành thủ tục làm đăng ký xe.</p>
                                                    <p>4. Khi có biển số xe và có giấy hẹn lấy đăng ký xe, khách hàng tới Ngân hàng ký hợp đồng tín dụng và nhận giấy nợ với Ngân hàng.</p>
                                                    <p>5. Khi Ngân hàng chuyển tiền vay ôtô của khách hàng (Số tiền còn lại của Hợp đồng) vào tài khoản của Toyota Nha Trang, khách hàng mang theo CMTND và làm thủ tục đến Đại lý để nhận xe.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v4" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Câu hỏi thường gặp</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v4" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="acc-v1" id="accordion-21">
                                                    <div class="panel panel-default">
                                                        <div class="">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-21" href="#collapse-2ndOne">
                                                                    1. Tôi phải chứng minh thu nhập bao nhiêu để có thể được vay tiền Ngân hàng mua xe trả góp?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-2ndOne" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <blockquote class="hero" style="line-height: 22px; ">
                                                                    <p>Quyết định cho vay của Ngân hàng bao gồm các yếu tố tài chính và phi tài chính. Thu nhập hàng tháng chỉ là một trong số các yếu tố tài chính xem xét. Về thu nhập, bạn cần chứng minh có nguồn thu nhập ổn định, thường xuyên và đủ đảm bảo việc thanh toán nợ vay.</p>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-21" href="#collapse-2ndTwo">
                                                                    2. Tôi được tự chon Ngân Hàng để vay vốn, hay phải theo chỉ định của nơi mua xe?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-2ndTwo" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <blockquote class="hero" style="line-height: 22px; ">
                                                                    <p>Quý khách được tự chon bất cứ Ngân hàng nào để vay vốn. Tuy nhiên để được hỗ trợ nhanh chóng, thuận tiện, chí phí hợp lý nhất, Quý khách nên chọn Ngân hàng cùng Nhân viên của Toyota Nha Trang theo Hotline: 0912 909 032</p>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-21" href="#collapse-2ndThree">
                                                                    3. Tài sản đảm bảo để có thể vay tiền Ngân hàng mua xe trả góp là gì? Thế chấp như thế nào ?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-2ndThree" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <blockquote class="hero" style="line-height: 22px; ">
                                                                    <p>Thông thường tài sản bảo đảm sẽ chính là chiếc xe ôtô mới định mua. Nếu Quý khách bảo đảm bằng bất động sản hoặc giấy tờ có giá trị thì mức trả trước tối thiểu có thể thấp hơn mức quy định.</p>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-21" href="#collapse-2ndFour">
                                                                    4. Nếu tài sản đảm bảo cho Ngân hàng là chiếc xe mới tôi sẽ mua, thì tôi có phải mua bảo hiểm thân vỏ trong suốt thời gian vay không?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-2ndFour" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <blockquote class="hero" style="line-height: 22px; ">
                                                                    <p>Quý khách sẽ phải mua bảo hiểm thân vỏ cho chiếc xe của mình trong suốt thời gian mua trả góp, khi tài sản đảm bảo cho Ngân hàng chính là chiếc xe mơi mua..</p>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-21" href="#collapse-2ndFive">
                                                                    5. Giấy đăng ký xe ai sẽ giữ trong thời gian tôi vay tiền.
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-2ndFive" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <blockquote class="hero" style="line-height: 22px; ">
                                                                    <p>Ngân hàng sẽ giữ “Giấy đăng ký xe” cho đến khi Quý khách hoàn thành thanh toán tổng dư nợ và lãi suất. Quý khách sẽ được cấp giấy chứng nhận hợp pháp để xe lưu hành bình thường.</p>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-21" href="#collapse-2ndSix">
                                                                    6. Tôi có thể thanh toán dư nợ trước thời hạn được không? Nếu được, có mất phí không? Phí là bao nhiêu?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-2ndSix" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <blockquote class="hero" style="line-height: 22px; ">
                                                                    <p>Quý khách hoàn toàn có thế thanh toán dư nợ trước thời hạn, khi đó Ngân hàng sẽ bàn giao “Giấy đăng ký xe” cho Quý khách. Phí thanh toán phụ thuộc cụ thể vào số dư nợ Khách hàng trả.</p>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-21" href="#collapse-2ndSeven">
                                                                    7. Tôi đứng tên vay vốn, nhưng chiếc xe có đứng tên người khác được không?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-2ndSeven" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <blockquote class="hero" style="line-height: 22px; ">
                                                                    <p>....</p>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="thuetaichinh">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v31" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Hình Thức Vay Trả Góp Qua Công Ty Tài Chính</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v31" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>- Áp dụng cho cá nhân/ doanh nghệp.</p>
                                                    <p>- Mức tài trợ tối đa có thể là 100% giá trị xe.</p>
                                                    <p>- Thời gian tối đa 05 năm.</p>
                                                    <p>- Lãi suất ưu đãi : 1% - 1,1% tháng.</p>
                                                    <p>- Thời gian thẩm định hồ sơ sau khi nhận đầy đủ: 05 ngày.</p>
                                                    <p>- Công ty cho thuê tài chính đứng tên chủ xe, sau khi khách hàng trả hết nợ, công ty sẽ sang tên lại cho Quý khách.</p>
                                                    <p>- Chi phí thủ tục hành chính bao gồm: Phí đảm bảo tài sản, Phí mở tài khỏan, Phí công chứng sao y, Cà vẹt xe, Bảo hiểm thân xe trong thời gian vay.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v32" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Hồ Sơ Vay Vốn Qua Thuê Tài Chính Của Cá Nhân</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v32" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>1. Đăng ký kinh doanh, Mẫu dấu, Mã số thuế của Công ty, Tổ chức.</p>
                                                    <p>2. Hợp đồng mua xe.</p>
                                                    <p>3. Điều lệ Công ty.</p>
                                                    <p>4. Báo cáo tài chính trong 03 năm gần nhất (bảng cân đối kế toán, báo cáo kết quả hoạt động sản xuất kinh doanh, thuyết minh báo cáo tài chính, báo cáo lưu chuyển tiền tệ,…) (Bản chính hoặc sao y).</p>
                                                    <p>5. Danh mục tài sản cố định (nguyên giá, giá trị còn lại), (Bản chính hoặc sao y).</p>
                                                    <p>6. Chi tiết các khoản phải thu, phải trả, hàng tồn kho (Bản chính hoặc sao y).</p>
                                                    <p>7. Danh mục các khách hàng lớn của doanh nghiệp (Bản chính).</p>
                                                    <p>8. Một số hợp đồng kinh tế liên quan đến đầu vào - đầu ra của doanh nghiệp (Bản chính hoặc sao y).</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v33" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Quy Trình Mua Xe Qua Thuê Tài Chính</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v33" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>1. Khách hàng chuẩn bị đầy đủ hồ sơ theo hướng dẫn của nhân viên tín dụng.</p>
                                                    <p>2. Nhân viên thẩm định đến tận nhà để thẩm định và lấy hồ sơ.</p>
                                                    <p>3. Sau khi có giấy tài trợ tín dụng và hồ sơ xe, Khách hàng tiến hành đóng tiền đối ứng cho bên cho thuê tài chính và chi phí làm thủ tục đăng ký xe.</p>
                                                    <p>4. Khi có biển số xe và có giấy hẹn, khách hàng lên ngân hàng ký hợp đồng tín dụng, đóng phí hành chính và giấy nhận nợ của Công ty cho thuê tài chính.</p>
                                                    <p>5. Khi tiền chuyển khoản của ngân hàng vào tài khoản của Toyota Nha Trang, Khách hàng mang theo CMND và giấy giới thiệu lên nhận xe, ký biên bản bàn giao xe với giấy tờ xe hợp lệ theo pháp luật.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v34" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Câu hỏi thường gặp</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v34" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <div class="container">
                                                        <div class="acc-v1" id="accordion-31">
                                                            <div class="panel panel-default" style="border: none ! important; background: none ! important;box-shadow : none ! important">
                                                                <div class="">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-31" href="#collapse-3ndOne">
                                                                            1. Những đối tượng nào được mua xe qua Công ty cho thuê tài chính?
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-3ndOne" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <blockquote class="hero" style="line-height: 22px; ">
                                                                            <p>Mọi cá nhân và tổ chức đủ điều kiện theo bộ Luật Dân sự, chứng tỏ được tài sản và khả năng thanh toán của mình đều được mua xe dưới hình thức cho thuê tài chính.</p>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default" style="border: none ! important; background: none ! important;box-shadow : none ! important">
                                                                <div class="">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-31" href="#collapse-3ndTwo">
                                                                            2. Mua xe dưới hình thức cho thuê tài chính có phải yêu cầu thế chấp tài sản không ?
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-3ndTwo" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <blockquote class="hero" style="line-height: 22px; ">
                                                                            <p>Tùy từng trường hợp cụ thể mà bên cho thuê tài chính sẽ yêu cầu Quý khách có phải thế chấp tài sản hay không. Trong một số trường hợp đặc biệt, khách hàng được yêu cầu thế chấp tài sản để giảm thiểu rủi ro nhưng không bắt buộc.</p>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="panel panel-default" style="border: none ! important; background: none ! important;box-shadow : none ! important">
                                                                <div class="">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-31" href="#collapse-3ndThree">
                                                                            3. Giá trị cao nhất bên cho thuê tài chính sẽ tài trợ khi mua ô tô là bao nhiêu?
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-3ndThree" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <blockquote class="hero" style="line-height: 22px; ">
                                                                            <p>Giá trị cao nhất bên cho thuê tài chính sẽ tài trợ cho Quý khách có thể lên đến 100% giá trị xe. Tỉ lệ tài trợ này sẽ phụ thuộc vào thời gian vay cũng như khả năng thanh toán của Khách hàng.</p>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default" style="border: none ! important; background: none ! important;box-shadow : none ! important">
                                                                <div class="">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-31" href="#collapse-3ndFour">
                                                                            4. Thời hạn vay từ Công ty cho thuê là bao lâu ?
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-3ndFour" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <blockquote class="hero" style="line-height: 22px; ">
                                                                            <p>Các Công ty cho thuê tài chính áp dụng mức cho vay tối đa thông thường là 5 năm. Thời gian này tùy thuộc vào khả năng thanh toán của Khách hàng và thỏa thuận với bên vay.</p>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default" style="border: none ! important; background: none ! important;box-shadow : none ! important">
                                                                <div class="">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-31" href="#collapse-3ndFive">
                                                                            5. Tôi có thể thanh toán dư nợ trước thời gian như hợp đồng để đứng tên là chủ xe được không?
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-3ndFive" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <blockquote class="hero" style="line-height: 22px; ">
                                                                            <p>Quý khách có thể thanh toán kết thúc dự nợ sớm hơn thời gian ký hợp đồng. Việc thanh toán này quý khách sẽ phải mất thêm phí thông thường là 3% của số dư nợ phải trả đó.</p>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default" style="border: none ! important; background: none ! important;box-shadow : none ! important">
                                                                <div class="">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-31" href="#collapse-3ndSix">
                                                                            6. Thủ tục để thanh toán dư nợ trước hạn như thế nào ?
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-3ndSix" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <blockquote class="hero" style="line-height: 22px; ">
                                                                            <p>Quý khách làm đơn nêu rõ lý do thanh toán trước hạn và gửi về Công ty cho thuê tài chính. Bên cho thuê tài chính sẽ chịu trách nhiệm thực hiện các thủ tục cần thiết và tiến hành chuyển quyền sở hữu tài sản sang cho khách hàng như thỏa thuận trong hợp đồng.</p>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default" style="border: none ! important; background: none ! important;box-shadow : none ! important">
                                                                <div class="">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-31" href="#collapse-3ndSeven">
                                                                            7. Tôi có được hưởng các chính sách ưu đãi về thuế khi mua và sở hữu xe với hình thức thuê tài chính không ?
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse-3ndSeven" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <blockquote class="hero" style="line-height: 22px; ">
                                                                            <p>Quý khách được hưởng đầy đủ quyền lợi, ưu đãi về thuế theo quy định của nhà nước khi sở hữu xe qua hình thức cho thuê tái chính.</p>
                                                                        </blockquote>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-setion-tabs">
                    <h2 class="page-header">TỰ CHỦ TÀI CHÍNH</h2>
                    <div class="row tab-v3">
                        <div class="col-sm-3">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#quytrinhdangkyxe" data-toggle="tab" aria-expanded="true">Quy trình đăng ký xe</a></li>
                                <li class=""><a href="#cauhoithuonggap" data-toggle="tab" aria-expanded="false">Câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div class="tab-pane fade  in active" id="quytrinhdangkyxe">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v21" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">CHUẨN BỊ HỒ SƠ</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v21" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>1.  Hóa đơn mua xe ( bản chính).</p>
                                                    <p>2.  Phiếu kiểm tra chất lượng xuất xưởng của xe (bản chính).</p>
                                                    <p>3.  Giấy chứng nhận chất lượng An toàn kỹ thuật ( copy).</p>
                                                    <p>4.  Hóa đơn nhà máy xuất cho Đại Lý (bản chính).</p>
                                                    <p>5.  Mua Bảo hiểm TNDS bắt buôc khi lưu hành xe.</p>
                                                    <p>6.  Đóng phí sử dụng đường bộ theo từng thời gian lựa chọn của Quý khách (thông thường là các mức : 12; 18; 24; 30 tháng).</p>
                                                    <p>7.  Bản sao giấy phép ĐKKD, Giấy giới thiệu gửi Phòng CSGTĐB-ĐSCA Tỉnh/TP đến Đội đăng ký và Quản lý phương tiện giao thông đường bộ để đăng ký xe ( Áp dụng cho KH là Công ty).</p>
                                                    <p>8.  Sổ Hộ Khẩu, CMTND bản chính và copy (Áp dụng cho KH là cá nhân).</p>
                                                    <p>9.  Quý khách photo tất cả các giấy tờ trên để lưu.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v22" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">NỘP THUẾ TRƯỚC BẠ</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v22" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>1.  Quý khách đem bộ Hồ sơ đã chuẩn bị đến Phòng thuế làm trước bạ.</p>
                                                    <p>2.  Đến Phòng thuế Quận/Huyện nơi có GPKD mới nhất để nộp thuế ( Áp dụng cho KH là công ty).</p>
                                                    <p>3.  Đến chi cục thuế Tỉnh/TP nộp thuế ( Áp dụng cho cá nhân/Công Ty nước ngoài).</p>
                                                    <p>4.  Đến Phòng thuế Quận/Huyện nơi chủ xe có Hộ khẩu thường trú để nộp thuế.</p>
                                                    <p>5.  Lấy 2 tờ khai thuế và khai theo hướng dẫn của Cơ quan thuế.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v23" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">ĐĂNG KÝ BIỂN SỐ XE</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v23" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                <p>1.  Mang xe cần đăng ký biển số và bộ Hồ sơ nhận lại từ Cơ quan đã đóng thuế đến Đội đăng ký Phòng CSGT Tỉnh/TP làm đăng ký biển số xe.</p>
                                                <p>2.  Điền thông tin vào tờ khai đăng ký xe lấy tại nơi đăng ký, nếu là KH là Công ty thì cần phải có chữ kỹ người đại diện và dấu Công ty trên tờ khai. Sau khi nộp tờ khai và Hồ sơ xe, Quý khách sẽ bốc số xe và nhận giấy hẹn đến lấy biển số xe.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cauhoithuonggap">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v31" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">1. Khi làm hợp đồng mua xe, cần cung cấp những thông tin gì?</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v31" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Khi làm hợp đồng mua xe, Quý khách cần cung cấp thông tin sau:</p>
                                                    <p style="text-decoration-line: underline;">Đối với là cá nhân : </p>
                                                    <p> + Họ và tên:</p>
                                                    <p> + Địa chỉ theo sổ hộ khẩu hoặc chứng minh thư:</p>
                                                    <p> + Số điện thoại di động (cá nhân):</p>
                                                    <p style="text-decoration-line: underline;">Đối với Công ty, doanh nghiệp:</p>
                                                    <p> + Cung cấp thông tin đúng như trong đăng ký kinh doanh :</p>
                                                    <p> + Tên đầy đủ của doanh nghiệp:</p>
                                                    <p> + Địa chỉ:</p>
                                                    <p> + Người đại diện, chức vụ:</p>
                                                    <p> + Mã số thuế:</p>
                                                    <p> + Tài khoản ngân hàng:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v32" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">2. Tôi muốn đăng ký xe ô tô đứng tên dưới tên con trai tôi hiện đang là sinh viên có được không ?</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v32" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                <p>Quý khách được đăng ký xe ô tô đứng tên dưới tên con của mình hiện đang là sinh viên. Theo Thông tư số 36/2010/TT-BCA (C11) và Thông tư số 37/2010/TT-BCA-C11 ngày 12/10/2010 hướng dẫn chi tiết về thủ tục đăng ký xe ô tô, trong đó có điều khoản quy định với chủ xe là sinh viên như sau:</p>
                                                <p>+ Sinh viên đó hiện đang theo học hệ tập trung từ 2 năm trở lên của các trường trung cấp, cao đẳng, đại học, học viện.</p>
                                                <p>+ Xuất trình CMTND và giấy giới thiệu của nhà trường.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v33" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">3. Tôi muốn mua và đăng ký xe chính chủ tên tôi nhưng tôi chưa có bằng lái thì có được không ??</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v33" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Quý khách được phép mua và đăng ký xe chính chủ khi đủ 18 tuổi chưa lên, chưa có bằng lái không ảnh hưởng đến việc mua và sở hữu xe. Lái xe và sở hữu xe là hai việc hoàn toàn khác nhau. Quý khách không có bằng lái xe thì sẽ không được lái xe nhưng việc sở hữu xe thì hoàn toàn được. Ví dụ: Bố mẹ mua xe đứng tên con (chưa có bằng lái xe) nhưng xe đó thì người dùng là bố, mẹ.</p>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>