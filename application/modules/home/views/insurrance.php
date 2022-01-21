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
                    <a title="Tín dụng - tài chính" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Bảo hiểm</span></a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
            <div>
                <a href="#"><img data-u="image" data-src="<?= PATH_URL ?>assets/images/dichvu/banner_credit.jpg" src="<?= PATH_URL ?>assets/images/dichvu/banner_credit.jpg" /></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jssor_1_slider_init();
</script>
<div class="wrapper">
    <div class="container-fluid m2-content pt-4">
        <div class="tabs parentTabs">
            <input type="radio" id="visaonenmuabaohiem" name="tab-control" checked>
            <input type="radio" id="loiichmuabaohiem" name="tab-control">
            <ul class="list-item">
                <li title="VÌ SAO NÊN MUA BẢO HIỂM"><label for="visaonenmuabaohiem" role="button"><span>VÌ SAO NÊN MUA BẢO HIỂM</span> <br><img src="<?= PATH_URL ?>assets/images/icon/bh1.png"></label></li>
                <li title="LỢI ÍCH MUA BẢO HIỂM"><label for="loiichmuabaohiem" role="button"><span>LỢI ÍCH MUA BẢO HIỂM</span> <br><img src="<?= PATH_URL ?>assets/images/icon/bh2.png"></label></li>
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
                                <li class="active"><a href="#loiichmuabaohiem1" data-toggle="tab" aria-expanded="true">Lợi ích mua bảo hiểm</a></li>
                                <li class=""><a href="#cacloaibaohiem" data-toggle="tab" aria-expanded="false">Các loại bảo hiểm ô tô</a></li>
                                <li class=""><a href="#nhungcauhoithuonggap" data-toggle="tab" aria-expanded="false">Những câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div class="tab-pane fade  in active" id="loiichmuabaohiem1">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-11 col-sm-11 col-md-11" >
                                                <h4 class="page-header">1. ĐƯỜNG DÂY NÓNG</h4>
                                                <p>Đường dây nóng hỗ trợ kịp thời những tình huống khẩn cấp khi xảy ra tai nạn bất kể ngày hay đêm. Hướng dẫn khách hàng xử lý tình huống tại hiện trường khi xảy ra sự cố. Bên cạnh việc ghi nhận và theo dõi quy trình bồi thường, đường dây nóng có thể giải đáp mọi thắc mắc của khách hàng từ sản phẩm, dịch vụ đến các thủ tục bồi thường.</p>
                                            </div>
                                            <div class="col-xs-11 col-sm-11 col-md-11" >
                                                <h4 class="page-header">2. CỨU HỘ MIỄN PHÍ</h4>
                                                <p>Nếu xe bị sự cố ở một nơi xa xôi vào đêm tối thì chi phí cứu hộ giao thông quả là không hề nhỏ. Vì vậy, dịch vụ cứu hộ giao thông miễn phí trên toàn quốc cũng là sự ưu tiên lựa chọn cho các chủ xe.</p>
                                            </div>

                                            <div class="col-xs-11 col-sm-11 col-md-11" >
                                                <h4 class="page-header">3. SỮA CHỮA TẠI GARAGE CHÍNH HÃNG</h4>
                                                <p>Với việc sửa chữa tại Đại lý chính hãng, Khách hàng hoàn toàn yên tâm về chất lượng sửa chữa cũng như phụ tùng thay thế. Hơn thế nữa, Công ty bảo hiểm sẽ thanh toán trực tiếp cho các Đại lý, vì vậy Khách hàng không phải thanh toán tiền mặt khi sửa chữa tại các Đại lý này.</p>
                                            </div>

                                            <div class="col-xs-11 col-sm-11 col-md-11" >
                                                <h4 class="page-header">4. SỬA CHỮA VÀ THAY THẾ PHỤ TÙNG KHÔNG TÍNH KHẤU HAO</h4>
                                                <p>Đối với những dòng xe sang trọng đắt tiền, việc sửa chữa và thay thế phụ tùng không tính khấu hao là một dịch vụ ưu việt để đảm bảo chiếc xe vẫn giữ nguyên giá trị sau khi sửa chữa.</p>
                                            </div>

                                            <div class="col-xs-11 col-sm-11 col-md-11" >
                                                <h4 class="page-header">5. BẢO HIỂM THỦY KÍCH:</h4>
                                                <p>Thủy kích (ngập nước) luôn là nỗi ám ảnh của các chủ xe khi lưu thông vào mùa mưa, gây ra những hư hỏng động cơ lớn và chi phí sửa chữa rất cao. Bảo hiểm đã có tùy chọn thêm cho Khách hàng khi xe bị hư hỏng do ngập nước với bao hiểm thủy kích, chính vì thế bạn hoàn toàn yên tâm cho chiếc xe của mình.</p>
                                            </div>
                                            <div class="col-xs-11 col-sm-11 col-md-11" >
                                                <h4 class="page-header">6. BẢO HIỂM MẤT CẮP BỘ PHẬN</h4>
                                                <p>Tình trạng mất cắp bộ phận xe ôtô xảy ra thường xuyên, nhất là những phụ kiện quý hiếm, đắt tiền, gây tổn thất cũng như bất tiện lớn cho chủ xe. Khi tham gia bảo hiểm, khách hàng được an tâm hơn vì có sự chia sẻ rủi ro từ các Công ty bảo hiểm.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cacloaibaohiem">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v1" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Bảo hiểm trách nhiệm dân sự bắt buộc</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v1" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Với  bảo hiểm này, Khách hàng không phải bồi thường do việc sử dụng xe cơ giới gây ra tại nạn tổn thất đến bên thứ 3. Bảo hiểm có trách nhiệm thanh toán mức thiệt hại này.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v2" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Bảo hiểm vật chất xe</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v2" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Đối với Bảo hiểm này, Quý khách sẽ được bồi thường 100% chi phí khi xe xảy ra từ những va quẹt, lật nổ,…, đến các tai nạn bất ngờ ngoài sự kiểm soát của chủ xe.</p>
                                                    <p>Đây là loại bảo hiểm bắt buộc đối với cá nhân/tổ chức mua xe vay trả góp từ Ngân hàng hoặc Công ty cho thuê tài chính.</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v3" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Bảo hiểm trách nhiệm dân sự tự nguyện</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v3" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Đối với loại hình bảo hiểm này khi xảy ra sự cố tai nạn, ngoài việc Công ty bảo hiểm bồi thường TNDS cho bên thứ 3 như trên thì phí bảo hiểm tự nguyện sẽ còn được bảo hiểm cho bên thứ 2 (là người tham gia bảo hiểm).</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-v4" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">Bảo hiểm tai nạn người ngồi trên xe</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse-v4" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Đây là hình thức bảo hiểm sẽ chịu trách nhiệm thiệt hại về thân thể đối với lái xe và những người ngồi trên xe, nếu những người này bị tai nạn khi đang ở trên xe, lên xuống xe trong quá trình xe đang tham gia giao thông.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nhungcauhoithuonggap">
                                    <div class="container">
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">1. Tôi nên mua loại Bảo hiểm nào thì tốt nhất?</h4>
                                            <p>Tùy từng điều kiện sử dụng xe mà Quý khách có thể chon mua các loại Bảo hiểm. Ví dụ: Quý khách sử dụng xe ở thành phố, thường xuyên mưa và ngập úng thì nên phải mua Bảo hiểm thân vỏ, thêm tùy chon thủy kích để xe được bảo hiểm từ những trường hợp va quẹt nhỏ đến hư hỏng động cơ do ngập nước…. Tuy nhiên, để có sự an tâm và chiếc xe được chăm sóc chu đáo nhất, Quý khách nên sử dụng đầy đủ các loại bảo hiểm dành cho chiếc ô tô của mình.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">2. Thời gian mua và sử dụng hợp đồng bảo hiểm là bao lâu?</h4>
                                            <p>Thời gian mua và sử dụng hợp đồng tùy từng vào sự lựa chọn của Quý khách. Bảo hiểm có các mức thời gian thông thường là 1; 2; 3 năm. Đối với trường hợp mua xe trả góp, thời gian mua Bảo hiểm thân vỏ là bắt buộc tương đương với thời gian vay vốn.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">3. Sau khi đã tham gia bảo hiểm, tôi có thể thay đổi lựa chọn về chương trình hoặc bổ sung các quyền lợi nữa không?</h4>
                                            <<p>Khi hợp đồng bảo hiểm được phát hành, bạn không được thay đổi chương trình hoặc bổ sung thêm quyền lợi. Bạn chỉ có thể thay đổi khi mua Bảo hiểm tái tục.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">4. Xe đứng tên tôi, nhưng hợp đồng bảo hiểm có thể đứng tên vợ hoặc con tôi được không?</h4>
                                            <p>Hợp đồng bảo hiểm có thể đứng tên bất cứ ai nếu được chủ xe ủy nhiệm. Người được ủy nhiêm phải từ 18 tuổi trở lên và ý thức được hành vi dân sự.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">5. Có cần phải kiểm tra xe khi mua bảo hiểm vật chất xe không?</h4>
                                            <p>Việc kiểm tra xe là cần thiết để Toyota Nha Trang đánh giá, ghi nhận tình trạng của chiếc xe, để có thể tiến hành bảo hiểm tốt nhất cho Quý khách. Nếu như xe của Quý khách hoàn toàn mới thì không phải qua bước kiểm tra này.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">6. Tôi có thể thay đổi định kỳ thanh toán sau khi hợp đồng có hiệu lực được không?</h4>
                                            <p>Phí bảo hiểm phải được thanh toán đầy đủ một lần trước khi bắt đầu hiệu lực, không áp dụng hình thức thanh toán từng phần theo định kỳ.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">7. Tôi có phải đóng thêm khoản phí/lệ phí nào ngoài phí bảo hiểm không?</h4>
                                            <p>Khi mua Bảo hiểm, ngoài phí bảo hiểm, Quý khách sẽ không cần phải đóng thêm bất kỳ khoản phí hay lệ phí nào khác.</p></div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">8. Tôi có thể hủy hợp đồng bảo hiểm được không? Nếu được, tôi phải làm gì?</h4>
                                            <p>Quý khách có thể hủy hợp đồng bảo hiểm khi chưa hết hạn, có những trường cụ thể sau:</p>
                                            <p>- Đối với bảo hiểm vật chất xe và bảo hiểm tai nạn lái xe và người ngồi trên xe, bạn có thể chấm dứt hợp đồng vào bất kỳ thời điểm nào khi không có bất kỳ khiếu nại đã phát sinh hoặc được thanh toán bồi thường trong suốt thời hạn bảo hiểm.</p>
                                            <p>- Đối với bảo hiểm bắt buộc trách nhiệm dân sự của chủ xe với bên thứ ba, hợp đồng chỉ có thể được chấm dứt trong một số trường hợp đặc biệt được quy định bởi pháp luật.</p>
                                            <p>- Nếu bạn muốn và có đủ điều kiện để chấm dứt hợp đồng, bạn cần liên hệ với Nhân viên bảo hiểm của Toyota Nha Trang để được tư vấn và hoàn chỉnh thủ tục một cách nhanh nhất.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">9. Hợp đồng bảo hiểm của tôi đã hết hiệu lực nhưng tôi quên đóng phí bảo hiểm tái tục. Nếu vẫn muốn tiếp tục được bảo hiểm thì tôi phải làm gì?</h4>
                                            <p>Phí bảo hiểm tái tục phải được thanh toán trước khi hợp đồng cũ hết hiệu lực. Trong trường hợp quên đóng phí vào thời điểm tái tục, bạn nên liên hệ với Nhân viên Bảo hiểm của Toyota Nha Trang để được hướng dẫn.</p></div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">10. Tôi có được giảm phí không nếu tôi không có khiếu nại bồi thường nào trong những năm tham gia bảo hiểm trước đó?</h4>
                                            <p>Khách hàng đươc hưởng chính sách giảm phí (thưởng không khiếu nại) sẽ được áp dụng đối với các trường hợp tái tục như sau:</p>
                                            <p>- Giảm 10% phí đối với 1 năm không phát sinh bồi thường.</p>
                                            <p>- Giảm 20% phí đối với 2 năm liên tiếp không phát sinh bồi thường.</p>
                                            <p>- Giảm 30% phí đối với 3 năm liên tiếp không phát sinh bồi thường trở lên.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">11. Phí bảo hiểm có bị thay đổi trong thời hạn bảo hiểm không?</h4>
                                            <p>Phí bảo hiểm sẽ không thay đổi trong suốt thời hạn bảo hiểm trừ khi có những thay đổi ảnh hưởng lớn đến mức độ rủi ro.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">12. Lịch sử bồi thường có ảnh hưởng gì đến việc tái tục hợp đồng và phí tái tục không?</h4>
                                            <p>Trừ những trường hợp đặc biệt khi tổn thất đã xảy ra đặc biệt nghiêm trọng, hợp đồng sẽ không bị từ chối tái tục. Trong trường hợp tỷ lệ tổn thất cao, chúng tôi có thể điều chỉnh mức phí tái tục và/hoặc quyền lợi bảo hiểm. Quý khách sẽ được thông báo cụ thể về việc này trước thời điểm tái tục.</p>
                                        </div>
                                        <!--  -->
                                        <div class="col-xs-11 col-sm-11 col-md-11" >
                                            <h4 class="page-header">13. Tôi sẽ liên hệ với ai nếu cần yêu cầu hỗ trợ hoặc có thắc mắc liên quan đến hợp đồng bảo hiểm này?</h4>
                                            <p>Bạn có thể liên hệ với Nhân viên bảo hiểm của Toyota Nha Trang để chúng tôi có thể tư vấn hợp đồng bảo hiểm cho bạn mọi thời điểm. SĐT: 0912 909 032</p>
                                        </div>
                                        <!--  -->
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
                                <li class="active"><a href="#quyenloimuabaohiem" data-toggle="tab" aria-expanded="true">Quyền lợi mua bảo hiểm</a></li>
                                <li class=""><a href="#cauhoithuonggap2" data-toggle="tab" aria-expanded="false">Câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div class="tab-pane fade  in active" id="quyenloimuabaohiem">
                                    <div class="container">
                                        <p>Mua bảo hiểm xe là một việc vô cùng quan trọng và cần thiết; để bảo hiểm không chỉ bảo vệ bạn và chính chiếc ô tô của mình mà điều này còn mang lại niềm an tâm cho cả người thân và cộng đồng.</p>
                                        <p>Hãy liên hệ với nhân viên Tư vấn bảo hiểm của Toyota Nha Trang để chúng tôi cùng bạn lựa chon đặt niềm tin vào Bảo hiểm tin cậy nhất.</p>
                                        <h4 class="page-header">Khi mua bảo hiểm tại TNT, quy khách sẽ được :</h4>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4" style="text-align: center ! important;">
                                                <img src="<?= PATH_URL ?>assets/images/dichvu/icon4.jpg">
                                                <p>Thay thế phụ tùng chính hiệu khi làm Bảo hiểm</p>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4" style="text-align: center ! important;">
                                                <img src="<?= PATH_URL ?>assets/images/dichvu/icon5.png">
                                                <p>Tránh các thủ tục phiền phức.</p>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4" style="text-align: center ! important;">
                                                <img src="<?= PATH_URL ?>assets/images/dichvu/icon6.png">
                                                <p>Tiện lợi và nhanh chóng.</p>
                                            </div>
                                        </div>
                                        <h4 class="page-header">Quy trình làm bảo hiểm nhanh gọn, chất lượng theo mô hình dưới đây:</h4>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4 col-md-4" style="text-align: center ! important;">
                                                <img src="<?= PATH_URL ?>assets/images/dichvu/quytrinh01.png">
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4" style="text-align: center ! important;">
                                                <img src="<?= PATH_URL ?>assets/images/dichvu/quytrinh02.png">
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4" style="text-align: center ! important;">
                                                <img src="<?= PATH_URL ?>assets/images/dichvu/quytrinh03.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cauhoithuonggap2">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v31" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">1. Những ai được mua bảo hiểm tại Toyota Nha Trang?</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v31" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Tất cả khách hàng cá nhân, tập thể có xe ô tô đều được tham gia mua bảo hiểm tại Toytota Nha Trang.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v32" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">2. Xe của tôi không phải của Toyota, nhưng khi tôi mua Bảo hiểm tại TNT thì có được thay thế phụ tùng chính hãng không?</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v32" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Toyota Nha Trang cam kết bắt buộc các Công Ty bảo hiểm phải thay thế phụ tùng chính hãng cho KH. Chúng tôi luôn đàm phán và thỏa thuận dựa trên lợi ích của Quý khách.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v33" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">3. Tôi mua Bảo hiểm tại Toyota Nha Trang, tôi có thể làm bảo hiểm xe tại các Garage khác không ?</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v33" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                <p>Làm bảo hiểm xe tại Toyota Nha Trang là quyền lợi của Quý Khách. KH nên đem xe đến Toyota Nha Trang để xe được chăm sóc tốt nhất.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v34" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">4. Xe tôi bị tai nạn tôi nên làm gì để được Bảo hiểm?</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v34" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Quý khách vui lòng đem xe đến Toyota Nha Trang hoặc có thể gọi ngay cứu hộ TNT theo số điện thoại : 0968187115. Chúng tôi sẽ cho xe cứu hộ đến đem về TNT giám định để có thể tiến hành bảo hiểm xe tốt nhất cho Quý khách.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-header with-border">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3-v35" aria-expanded="false" class="">
                                                    <div class="list-car-heading">
                                                        <h3 class="list-car-name">5. Toyota Nha Trang có liên kết với những Công ty Bảo hiểm nào?</h3>
                                                        <p class="car-price"><i class="fa  fa-caret-down"></i></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3-v35" class="panel-collapse collapse " aria-expanded="false">
                                                <div class="panel-body">
                                                    <p>Hệ thống liên kết các Công ty Bảo Hiểm của Toyota Nha Trang gồm 6 Bảo hiểm:</p>
                                                    <p>- Bảo hiểm Liberty.</p>
                                                    <p>- Bảo hiểm Dầu khí – PVI.</p>
                                                    <p>- Bảo hiểm Quân đội – Mic.</p>
                                                    <p>- Bảo hiểm BIC.</p>
                                                    <p>- Bảo hiểm Bảo Minh.</p>
                                                    <p>- Bảo hiểm Bảo Việt.</p>
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