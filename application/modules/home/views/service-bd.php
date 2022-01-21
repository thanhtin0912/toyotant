<style>
  .tabs .slider {
    position: relative;
    width: 16.667%;
    transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
  }
  .content-setion-tabs .tab-content .container{
    margin-top: 5px; 
    margin-bottom:5px; 
    text-align:left !important
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
          <a title="Tin tức" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Dịch vụ bảo dưỡng</span></a>
        </span>
      </div>
    </div>
  </div>
</div>
<div class="wrapper">
  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
      <div>
        <a href="#"><img data-u="image" data-src="http://toyotanhatrang.com.vn/images/dichvu/nx4.jpg" src="http://toyotanhatrang.com.vn/images/dichvu/nx4.jpg" /></a>
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
      <input type="radio" id="tongquan" name="tab-control" checked>
      <input type="radio" id="baohanh" name="tab-control">
      <input type="radio" id="baoduong" name="tab-control">
      <input type="radio" id="suachua" name="tab-control">
      <input type="radio" id="phutung" name="tab-control">
      <input type="radio" id="datlich" name="tab-control">
      <ul class="list-item">
        <li title="TỔNG QUAN"><label for="tongquan" role="button"><span>TỔNG QUAN</span> <br><img src="<?= PATH_URL ?>assets/images/icon/dv1.png"> </label></li>
        <li title="BẢO HÀNH"><label for="baohanh" role="button"><span>BẢO HÀNH</span><br><img src="<?= PATH_URL ?>assets/images/icon/dv2.png"></label></li>
        <li title="BẢO DƯỠNG"><label for="baoduong" role="button"><span>BẢO DƯỠNG</span> <br><img src="<?= PATH_URL ?>assets/images/icon/dv3.png"> </label></li>
        <li title="SỬA CHỮA"><label for="suachua" role="button"><span>SỬA CHỮA</span><br><img src="<?= PATH_URL ?>assets/images/icon/dv4.png"></label></li>
        <li title="PHỤ TÙNG"><label for="phutung" role="button"><span>PHỤ TÙNG</span> <br><img src="<?= PATH_URL ?>assets/images/icon/dv5.png"> </label></li>
        <li title="ĐẶT LỊCH"><label for="datlich" role="button"><span>ĐẶT LỊCH</span><br><img src="<?= PATH_URL ?>assets/images/icon/dv6.png"></label></li>
      </ul>
      <div class="slider">
        <div class="indicator"></div>
      </div>
      <div class="content">
        <section class="content-setion-tabs">
          <h2 class="page-header">TỔNG QUAN</h2>
          <div class="row tab-v3">
						<div class="col-sm-3">
							<ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#nhaxuong" data-toggle="tab" aria-expanded="true">Nhà xưởng</a></li>
                <li class=""><a href="#trangthietbi" data-toggle="tab" aria-expanded="false">Trang thiết bị</a></li>
                <li class=""><a href="#congnghe" data-toggle="tab" aria-expanded="false">Công nghệ</a></li>
                <li class=""><a href="#phongcho" data-toggle="tab" aria-expanded="false">Phòng chờ</a></li>
                <li class=""><a href="#kythuatvien" data-toggle="tab" aria-expanded="false">Kỹ thuật viên</a></li>
							</ul>
						</div>
						<div class="col-sm-9">
							<div class="tab-content">
								<div class="tab-pane fade  in active" id="nhaxuong">
                  <div class="container" >
                    <div id="carousel-example-genericNX" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-genericNX" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-genericNX" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-genericNX" data-slide-to="2" class=""></li>
                        <li data-target="#carousel-example-genericNX" data-slide-to="3" class=""></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/nx1.jpg" alt=" slide">
                        </div>
                        <div class="item">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/nx2.jpg" alt=" slide">
                        </div>
                        <div class="item ">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/nx3.jpg" alt=" slide">
                        </div>
                        <div class="item ">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/nx4.jpg" alt=" slide">
                        </div>
                      </div>
                    </div>
                  </div>
									<h4>KỸ THUẬT VIÊN TAY NGHỀ CAO</h4>
									<p>Đội ngũ cố vấn và kỹ thuật viên giàu kinh nghiệm, được đào tạo theo tiêu chuẩn Toyota toàn cầu sẽ đảm bảo chất lượng Dịch vụ cao nhất.</p>
								</div>
								<div class="tab-pane fade" id="trangthietbi">
                  <div class="container" >
                    <div id="carousel-example-genericTB" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-genericTB" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-genericTB" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-genericTB" data-slide-to="2" class=""></li>
                        <li data-target="#carousel-example-genericTB" data-slide-to="3" class=""></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/tb1.jpg" alt=" slide">
                        </div>
                        <div class="item">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/tb2.jpg" alt=" slide">
                        </div>
                        <div class="item ">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/tb3.jpg" alt=" slide">
                        </div>
                        <div class="item ">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/tb4.jpg" alt=" slide">
                        </div>
                      </div>
                    </div>
                  </div>
									<h4>TRANG THIẾT BỊ ĐẦY ĐỦ VÀ HIỆN ĐẠI</h4>
									<p>Trang thiết bị đầy đủ và hiện đại nhằm đảm bảo xe luôn được bảo dưỡng nhanh chóng và tốt nhất.</p>
								</div>
								<div class="tab-pane fade" id="congnghe">
                  <div class="container" >
                    <div id="carousel-example-genericCN" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-genericCN" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-genericCN" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-genericCN" data-slide-to="2" class=""></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/cn1.jpg" alt=" slide">
                        </div>
                        <div class="item">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/cn2.jpg" alt=" slide">
                        </div>
                        <div class="item ">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/cn3.jpg" alt=" slide">
                        </div>
                      </div>
                    </div>
                  </div>
									<h4>ÁP DỤNG CÔNG NGHỆ TÂN TIẾN</h4>
									<p>Phòng pha sơn hiện đại cùng công nghệ pha sơn bằng máy vi tính đáp ứng được những yêu cầu khắt khe nhất.</p>
								</div>
								<div class="tab-pane fade" id="phongcho">
                  <div class="container" >
                    <div id="carousel-example-genericPC" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-genericPC" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-genericPC" data-slide-to="1" class=""></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/pc1.jpg" alt=" slide">
                        </div>
                        <div class="item">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/pc2.jpg" alt=" slide">
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4>PHÒNG CHỜ TIỆN NGHI</h4>
									<p>Phòng chờ dành cho khách hàng được thiết kế tiện nghi, thoải mái, dễ dàng quan sát xe đang làm Dịch vụ tại xưởng.</p>
                </div>
                <div class="tab-pane fade" id="kythuatvien">
                  <div class="container" >
                    <div id="carousel-example-genericKT" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-genericKT" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-genericKT" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-genericKT" data-slide-to="2" class=""></li>
                        <li data-target="#carousel-example-genericKT" data-slide-to="3" class=""></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/nx1.jpg" alt=" slide">
                        </div>
                        <div class="item">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/nx2.jpg" alt=" slide">
                        </div>
                        <div class="item ">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/nx3.jpg" alt=" slide">
                        </div>
                        <div class="item ">
                          <img src="<?= PATH_URL ?>assets/images/dichvu/nx4.jpg" alt=" slide">
                        </div>
                      </div>
                    </div>
                  </div>
                  <h2>KỸ THUẬT VIÊN TAY NGHỀ CAO</h2>
                  <p>Đội ngũ cố vấn và kỹ thuật viên giàu kinh nghiệm, được đào tạo theo tiêu chuẩn Toyota toàn cầu sẽ đảm bảo chất lượng Dịch vụ cao nhất.</p>
                </div>
							</div>
						</div>
					</div>
        </section>
        <section class="content-setion-tabs">
          <h2 class="page-header">BẢO HÀNH</h2>
          <div class="row tab-v3">
						<div class="col-sm-3">
							<ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#nhunggiduocbaohanh" data-toggle="tab" aria-expanded="true">Những gì được bảo hành</a></li>
                <li class=""><a href="#nhunggikhongduocbaohanh" data-toggle="tab" aria-expanded="false">Những gì không được bảo hành</a></li>
                <li class=""><a href="#lienhebaohanh" data-toggle="tab" aria-expanded="false">Liên hệ bảo hành</a></li>
                <li class=""><a href="#trachnhiemchuxe" data-toggle="tab" aria-expanded="false">Trách nhiệm chủ xe</a></li>
							</ul>
						</div>
						<div class="col-sm-9">
							<div class="tab-content">
								<div class="tab-pane fade  in active" id="nhunggiduocbaohanh">
                  <div class="container">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header">THỜI HẠN BẢO HÀNH</h4>
                          <p>Chế độ bảo hành bắt đầu được tính ngay kể từ thời điểm xe được giao cho chủ xe đầu tiên. Trong vòng 36 tháng hay 100.000 km, tùy thuộc điều kiện nào đến trước, Toyota đảm bảo sẽ sửa chữa hoặc thay thế bất kỳ phụ tùng nào của xe Toyota mới bị hỏng hóc.</p>
                          <p>- Bảo hành ắc quy: Thời hạn bảo hành cho ắc quy là 12 tháng hoặc 20.000km tuỳ điều kiện nào tới trước.</p>
                          <p>- Bảo hành lốp: Ðược bảo hành theo một chế độ riêng của nhà sản xuất lốp.(xem thêm chính sách)</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header" >ĐIỀU KIỆN BẢO HÀNH</h4>
                          <p>Toyota chỉ đảm bảo sửa chữa, thay thế các phụ tùng của xe Toyota mới bị hỏng hóc trong điều kiện:</p>
                          <p>- Xe đang hoạt động bình thường</p>
                          <p>- Nguyên liệu phụ tùng không tốt</p>
                          <p>- Lỗi lắp ráp</p>
                          <p>- Trừ những điều kiện ghi trong mục “Những Gì Không Được Bảo Hành”.</p>
                          <p>Chú ý: Bảo hành vẫn áp dụng khi xe được chuyển nhượng cho những chủ xe khác.”</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header" >PHẠM VI ÁP DỤNG BẢO HÀNH</h4>
                          <p>Việc bảo hành chỉ áp dụng trong phạm vi Việt Nam.</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header" >BẢO HÀNH MIỄN PHÍ</h4>
                          <p>Mọi sửa chữa thuộc chế độ bảo hành ( phụ tùng, công lao động) là miễn phí.</p>
                      </div>
                    </div>
                  </div>
								</div>
								<div class="tab-pane fade" id="nhunggikhongduocbaohanh">
                  <div class="container" >
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 " >
                          <h4 class="page-header">NHỮNG YẾU TỐ NGOÀI KIỂM SOÁT CỦA NHÀ SẢN XUẤT</h4>
                          <p>- Những sửa chữa hay điều chỉnh do sử dụng sai (đi quá nhanh, chở quá nặng), cẩu thả, sửa, thay đổi, tự ý tháo lắp các bộ phận xe, sửa chữa điều chỉnh không đúng kỹ thuật, tai nạn, lắp thêm phụ tùng/phụ kiện, không thuộc chế độ bảo hành.</p>
                          <p>- Xước sơn do đá, ăn mòn do mỹ phẩm không được bảo hành.</p>
                          <p>- Hư hại hay bị ăn mòn do môi trường như mưa axit, hóa chất, nhựa cây, muối, hà, mưa bão sấm chớp, lũ lụt và những tác động tự nhiên khác không được bảo hành.</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header" >KHÔNG BẢO DƯỠNG XE DÙNG SAI NGUYÊN LIỆU, DẦU BÔI TRƠN</h4>
                          <p>Sửa chữa, điều chỉnh do bảo dưỡng xe không phù hợp, không bảo dưỡng hay dùng nhiên liệu, dầu bôi trơn khác với những loại ghi trong cuốn “Hướng dẫn sử dụng” không thuộc chế độ bảo hành.</p>    
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h2 class="page-header">CHI PHÍ BẢO DƯỠNG THUỘC TRÁCH NHIỆM CỦA CHỦ XE</h4>
                          <p>Chủ xe có trách nhiệm bảo dưỡng xe như kiểm tra hoạt động của máy, thay dầu bôi trơn, rửa xe, đánh bóng, thay bầu lọc, nước làm mát, buzi, cầu chì, thay chổi gạt mưa, má phanh, đĩa côn đã mòn. Ðó là việc bảo dưỡng thường xuyên cho mọi loại xe.</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h2 class="page-header">TIẾNG ĐỘNG BÌNH THƯỜNG, XE RUNG, GIẢM GIÁ TRỊ TỰ NHIÊN</h4>
                          <p>Mọi sửa chữa thuộc chế độ bảo hành ( phụ tùng, công lao động) là miễn phí.</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header"> THAY ĐỔI ĐỒNG HỒ ĐO</h4>
                          <p>Mọi hỏng hóc đối với chiếc xe nào đã bị thay đổi hay điều chỉnh đồng hồ công-tơ-mét dẫn đến không xác định được số đo chính xác đều không được bảo hành.</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header" > CHI PHÍ PHỤ</h4>
                          <p>Thiệt hại phụ hoặc hậu quả kèm theo như gọi điện thoại, mất thời gian, nhỡ việc hay thiệt hại về thương mại không thuộc chế độ bảo hành.</p>
                      </div>
                    </div>
                  </div>
								</div>
								<div class="tab-pane fade" id="lienhebaohanh">
                  <div class="container">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header" >LIÊN HỆ VỚI ĐẠI LÝ/TRẠM BẢO HÀNH TOYOTA NHA TRANG</h4>
                          <p> Để những vấn đề của xe được tư vấn bảo hành nhanh nhất. Quý khách vui lòng liên hệ Hotline: <a href="tel:0912909032">0912909032</a> và trình bày đầy đủ về tình trạng hỏng hóc của xe Toyota Nha Trang luôn cam kết sẽ thực hiện bảo hành tốt nhất cho Quý khách và chịu trách nhiệm trong việc cung cấp các dịch vụ và sửa chữa bạn cần.</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 " >
                          <h4 class="page-header" >LIÊN HỆ VỚI CÔNG TY Ô TÔ TOYOTA VIỆT NAM (TMV)</h4>
                          <p>Liên hệ với phòng dịch vụ của TMV được ghi trên Phiếu đăng ký bảo hành.  </p>
                      </div>
                    </div>
                  </div>
								</div>
								<div class="tab-pane fade" id="trachnhiemchuxe">
                  <div class="container" >
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header"> ÐƯA XE ĐẾN BẢO HÀNH</h4>
                          <p>- Quý khách có trách nhiệm đưa xe của mình đi đến Toyota Nha Trang để thực hiện việc bảo hành sửa chữa.</p>
                          <p>- Quý khách có trách nhiệm bảo dưỡng xe như kiểm tra hoạt động của máy, thay dầu bôi trơn, rửa xe, đánh bóng, thay bầu lọc, nước làm mát, buzi, cầu chì, thay chổi gạt mưa, má phanh, đĩa côn đã mòn. Ðó là việc bảo dưỡng thường xuyên cho mọi loại xe.</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header"> BẢO DƯỠNG XE</h4>
                          <p>- Chủ xe có trách nhiệm sử dụng xe, bảo dưỡng xe một cách hợp lý và quan tâm tới xe theo đúng những chỉ dẫn ghi trong cuốn “Hướng dẫn sử dụng”.</p>
                          <p>- Nếu xe của Quý khách được sử dụng trong điều kiện khắc nghiệt, Quý khách càng phải chú ý bảo dưỡng xe như yêu cầu trong cuốn “Hướng dẫn sử dụng”.</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header" > GHI LẠI NHỮNG LẦN BẢO DƯỠNG</h4>
                          <p>- Quý khách có trách nhiệm ghi lại tất cả những lần bảo dưỡng xe. Ðiều này cần thiết vì trong một số trường hợp nó chứng tỏ Quý khách đã bảo dưỡng xe theo như yêu cầu.</p>
                      </div>
                    </div>
                  </div>
                </div>
							</div>
						</div>
					</div>
        </section>
        <section class="content-setion-tabs">
          <h2 class="page-header">BẢO DƯỠNG</h2>
          <div class="row tab-v3">
						<div class="col-sm-3">
							<ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#baoduongdinhky" data-toggle="tab" aria-expanded="true">Bảo dưỡng định kỳ</a></li>
                <li class=""><a href="#baoduongnhanh" data-toggle="tab" aria-expanded="false">Bảo dưỡng nhanh</a></li>
							</ul>
						</div>
            <div class="col-sm-9">
							<div class="tab-content">
								<div class="tab-pane fade  in active" id="baoduongdinhky">
                  <div class="container">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header">LỢI ÍCH</h4>
                          <p>Từ các chi tiết cấu tạo nên xe, có thể dự đoán được rằng tính năng của chúng sẽ giảm đi, do đó cần phải được bảo dưỡng định kỳ, sau đó điều chỉnh hay thay thế để duy trì tính năng của chúng. Bảo dưỡng định kỳ sẽ:</p>
                          <p>- Ngăn chặn được những vấn đề lớn có thể xảy ra sau này.</p>
                          <p>- Xe ô tô có thể duy trì được trạng thái hoạt động tốt và thỏa mãn được những tiêu chuẩn của pháp luật.</p>
                          <p>- Kéo dài tuổi thọ của xe.</p>
                          <p>- Khách hàng có thể tiết kiệm chi phí và lái xe an toàn hơn.</p>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12 " >
                          <h4 class="page-header"> CHU KỲ</h4>
                          <p>Chu kỳ bảo dưỡng được xác định tùy theo quãng đường xe đi được và khoảng thời gian sử dụng xe tính từ lần bảo dưỡng trước.</p>
                          <p>Ví dụ, nếu lịch bảo dưỡng cho một chi tiết nào đó được nêu ra là 40.000 km hay 24 tháng, việc bảo dưỡng sẽ đến hạn tại thời điểm mà một trong hai điều kiện này thỏa mãn. Xe này do đó đến hạn bảo dưỡng như sau: Lái xe 40.000 km/12 tháng sau lần bảo dưỡng trước, hay lái xe 5.000 km/24 tháng sau lần bảo dưỡng trước</p>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header">LƯU Ý</h4>
                          <p>Nếu xe được sử dụng dưới bất kỳ một trong các điều kiện sau đây, sẽ cần phải bảo dưỡng thường xuyên:</p>
                          <p>- Điều kiện mặt đường: Đường xấu hay có nhiều bùn, đường có tuyết đang tan, đường có nhiều bụi.</p>
                          <p>- Điều khiển lái xe: Xe được sử dụng để kéo rơmóc, hay kéo theo xe cắm trại hoặc chở đồ trên nóc. Xe dùng để lặp lại những quãng đường ngắn dưới 8 km liên tục với nhiệt độ dưới không.</p>
                          <p>- Xe được sử dụng làm xe tuần tra taxi hay xe giao hàng, hay chạy với </p>
                      </div>
                    </div>
                  </div>
								</div>
								<div class="tab-pane fade" id="baoduongnhanh">
                  <div class="container">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12" >
                          <h4 class="page-header" >QUY TRÌNH</h4>
                          <p>Quy Trình Bảo Dưỡng Nhanh Tại Toyota Nha Trang</p>
                          <img src="<?= PATH_URL ?>assets/images/dichvu/quy_trinh.jpg" class="img-responsive">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 " >
                          <h4 class="page-header" >LỢI ÍCH</h4>
                          <table class="table table-bordered" >
                            <thead>
                                <tr>
                                    <th width="50px">Danh mục</th>
                                    <th>Bảo dưỡng nhanh tại Toyota Nha Trang</th>
                                    <th>Thuận lợi cho Khách hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Thời gian</td>
                                    <td>60 phút (Tính từ khi lệnh sửa chữa được ký cho đến lúc nhận lại xe).</td>
                                    <td>Dịch vụ Bảo dưỡng Nhanh sẽ giúp Quý khách hàng hài lòng hơn khi thời gian chờ xe giảm xuống trong khi quy trình bảo dưỡng thông thường mất 150 phút.</td>
                                    
                                </tr>
                                <tr>
                                    <td>Trang thiết bị</td>
                                    <td>Để thực hiện được điều này, chúng tôi đã đầu tư trang thiết bị cơ sở vật chất kỹ thuật trang bị cho khoang bảo dưỡng nhanh những thiết bị chuyên dùng hiện đại, đồng thời liên tục thực hiện cải tiến thiết bị.</td>
                                    <td>Giảm thiểu tối đa các động tác thừa của nhân viên kỹ thuật trong thao tác làm việc sẽ tăng năng suất, hiệu quả và chất lượng các công đoạn Bảo dưỡng cho chiếc xe của Quý khách hàng.</td>
                                    
                                </tr>
                                <tr>
                                    <td>Nhân lực</td>
                                    <td>Để thực hiện được điều này, những thành viên của trạm bảo dưỡng từ cố vấn dịch vụ, các tổ trưởng, kỹ thuật viên, nhân viên phụ tùng, những nhân viên giấy tờ và văn phòng phải trải qua những đợt tập huấn kỹ lưỡng.</td>
                                    <td >Nhanh và chính xác sẽ rút ngắn thời gian giao tiếp của khách hàng.</td>
                                  
                                </tr>
                                <tr>
                                    <td>Quy chuẩn công việc</td>
                                    <td>Bảo Dưỡng Nhanh đưa ra sự thay đổi cho quy chuẩn dòng công việc. Khi khách hàng hẹn đặt chỗ qua điện thoại => trung tâm bảo dưỡng sẽ thu thập các thông tin chi tiết (về khách hàng, về tình trạng xe và yêu cầu dịch vụ) => xác định thời điểm (hẹn đưa xe tới bảo hành hoặc tư vấn). Tất cả được ghi rõ trên phiếu hẹn.</td>
                                    <td></td>
                                </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
								</div>
							</div>
						</div> 
        </section>
        <section class="content-setion-tabs">
          <h2 class="page-header">SỬA CHỮA</h2>
          <div class="row tab-v3">
						<div class="col-sm-3">
							<ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#suachuachung" data-toggle="tab" aria-expanded="true">Sửa chữa chung</a></li>
                <li class=""><a href="#suachuanang" data-toggle="tab" aria-expanded="false">Sửa chữa nặng</a></li>
                <li class=""><a href="#suachuanhanh" data-toggle="tab" aria-expanded="false">Sửa chữa nhanh</a></li>
							</ul>
						</div>
						<div class="col-sm-9">
							<div class="tab-content">
                <div class="tab-pane fade  in active" id="suachuachung">
                  <div class="container" >
                    <div class="row">
                      <div class="col-sm-12" >
                        <h4 class="page-header" >SỬA CHỮA CHUNG</h4>
                        <p>Có những trục trặc diễn ra quá bất ngờ và nhanh đến mức người điều khiển hầu như không thể ý thức được tại sao chiếc xe mình lại như vậy, nguyên nhân là do đâu. Đừng lo lắng, Quý Khách hàng hãy mang chiếc xe của mình đến Toyota Nha Trang, dịch vụ Sữa chữa chung của Công ty chúng tôi sẽ giải đáp thăc mắc và khắc mục từng chi tiết nhỏ cho chiếc xe của bạn.</p>
                      </div>
                      <div class="col-sm-12">
                        <div id="carousel-SCC" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-SCC" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-SCC" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-SCC" data-slide-to="2" class="active"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="item">
                              <img src="<?= PATH_URL ?>assets/images/dichvu/scc2.jpg" alt="First slide">
                            </div>
                            <div class="item">
                              <img src="<?= PATH_URL ?>assets/images/dichvu/scc3.jpg" alt="Second slide">
                            </div>
                            <div class="item active">
                              <img src="<?= PATH_URL ?>assets/images/dichvu/scc1.jpg" alt="Third slide">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="suachuanang">
                  <div class="container" >
                    <div class="row">
                      <div class="col-sm-12" >
                        <h4 class="page-header" >SỬA CHỮA NẶNG</h4>
                        <p >Lý do Quý khách hàng nên chọn Toyota Nha Trang làm nơi sữa chữa nặng cho chiếc xe của mình?</p>
                        <p>- Quý khách có thể hoàn toàn yên tâm khi mang xe vào Toyota Nha Trang, chúng tôi cam kết sẽ sửa chữa xe của Quý khách trở nên nguyên vẹn, có thể đạt tới 100 % vẻ đẹp ban đầu.</p>

                        <p>- Chúng tôi có thể khẳng định cam kết đó, bởi chúng tôi có một đội ngũ Kỹ thuật viên Gò, Hàn, Sơn nhanh nhẹn, nhiệt tình, tâm huyết cùng với đó là những trang thiết bị hiện đại, tiên tiến nhất. Hơn thế nữa, Toyota Nha Trang cam kết sẽ sửa chữa, thay thế phụ tùng, linh kiện xe Quý khách bằng hàng Chính hãng Toyota.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="suachuanhanh">
                  <div class="container" >
                    <div class="row">
                      <div class="col-sm-12" >
                          <h4 class="page-header" >SỬA CHỮA NHANH</h4>
                          <p style="font-weight: bold;"> Lợi ích mang đến cho Khách hàng </p>
                          <p>- Bằng việc thiết lập khoang sửa chữa riêng biệt, áp dụng các dụng cụ, thiết bị chuyên dùng và tạo ra luồng công việc 1 cách liên tục đã loại bỏ được việc di chuyển không cần thiết của kỹ thuật viên, và thời gian dừng giữa các công đoạn sửa chữa trong khi vẫn đảm bảo tối đa hoá năng suất sửa chữa xe cho khách hàng</p>
                          <p>- Chất lượng sửa chữa được duy trì ở mức độ cao nhất.</p>
                          <p>- Tiết kiệm chi phí: chi phí di chuyển, chờ đợi.</p>
                          <p>- Tiết kiệm được thời gian (Thời gian chờ đợi và lưu xe trong xưởng)</p>
                          <p>- Tăng hiệu quả sửa chữa.</p>
                          <p style="font-weight: bold;">
                          Những hư hỏng nào phù hợp với dịch vụ này?
                          </p>
                          
                          <p>- Các vết trầy xước lõm nhẹ trên bề mặt sơn xung quanh xe.</p>
                          <p>- Số khu vực sửa chữa không quá 3 vị trí.</p>
                          <p>- Không bị thủng tôn hoặc biến dạng khung xe.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="content-setion-tabs">
          <h2 class="page-header">PHỤ TÙNG</h2>
          <div class="row tab-v3">
						<div class="col-sm-3">
							<ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#sudungphutungchinhhieu" data-toggle="tab" aria-expanded="true">Tại sao phải sử dụng<br>phụ tùng chính hiệu?</a></li>
                <li class=""><a href="#taisaophaimuaphutung" data-toggle="tab" aria-expanded="false">Tại sao phải mua/thay<br>thế phụ tùng</a></li>
                <li class=""><a href="#cachphanbietphutung" data-toggle="tab" aria-expanded="false">Cách phân biệt phụ<br>tùng chính hiệu</a></li>
							</ul>
						</div>
						<div class="col-sm-9">
              <div class="tab-content">
                <div class="tab-pane fade  in active" id="sudungphutungchinhhieu">
                  <div class="container" >
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="page-header">TẠI SAO PHẢI SỬ DỤNG PHỤ TÙNG CHÍNH HIỆU ?</h4>
                        <p>- Phụ tùng chính hiệu được Toyota nghiên cứu, thiết kế, thử nghiệm và được đánh giá là hoàn toàn phù hợp với chiếc xe Toyota theo từng khu vực.</p>     
                        <p>- Nhiều Phụ tùng không chính hiệu khi lắp ráp sẽ không ăn khớp với các chi tiết xung quanh dẫn đến những nguy hiểm tiềm tàng khi lái xe.</p>
                        <p>- Nếu sử dụng phải Phụ tùng không chính hiệu sẽ làm động cơ xe hoạt động kém hiệu quả, phải thay thường xuyên làm tốn kém chi phí cũng như thời gian, công sức Khách hàng.</p>
                        <img src="<?= PATH_URL ?>assets/images/dichvu/phutung1.jpg" class="img-responsive">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="taisaophaimuaphutung">
                  <div class="container" >
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <h4 class="page-header">TẠI SAO PHẢI MUA THAY THẾ PHỤ TÙNG TẠI TOYOTA NHA TRANG?</h4>
                          <p>Chúng tôi cung cấp Phụ tùng chính hiệu Toyota.</p>
                          <p>Đến Toyota Nha Trang, Khách hàng sẽ được đội ngũ Cố vấn dịch vụ tư vấn nhiệt tình, chi tiết cùng các Chương trình khuyến mãi (nếu có).</p>
                          <p>Đội ngũ Kỹ thuật viên giàu kinh nghiệm của Toyota Nha Trang luôn sẵn sàng phục vụ/ thay thế cho chiếc xe của Quý Khách.</p>
                          <p>Trang thiết bị hiện đại,  tiên tiến, bố trí khoa học sẽ giúp chiếc xe của bạn thay thế Phụ tùng một cách nhanh và hoàn chỉnh nhất.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="cachphanbietphutung">
                  <div class="container" >
                    <div class="row">
                      <div class="col-xs-12 col-sm-12">
                        <p><strong>Vỏ hộp/Bao gói:</strong> Chữ in hoặc logo trên bao gói phụ tùng giả không sắc nét hay nội dung chỉ tương tự như trên bao gói phụ tùng chính hiệu, (ví dụ chữ “Genuine Parts” thì trên phụ tùng giả in là “General Parts”).</p>
                        <img src="<?= PATH_URL ?>assets/images/dichvu/phutung01.jpg" alt="" class="img-responsive">      
                      </div>
                      <div class="col-xs-12 col-sm-12">
                        <p><strong>Hình dáng bên ngoài:</strong> Phụ tùng giả thường được làm từ các vật liệu rẻ tiền và thủ công, nên các đường nét không sắc sảo, hình dạng kích thước không đều, vị trí hay tên phụ tùng in không chính xác (ví dụ lọc dầu giả thường không được sơn phủ phần đế)..</p>
                        <img src="<?= PATH_URL ?>assets/images/dichvu/phutung02.jpg" alt="" class="img-responsive">      
                      </div>
                      <div class="col-xs-12 col-sm-12">
                        <p><strong>Giá phụ tùng:</strong> Phụ tùng giả thường có giá rẻ hơn phụ tùng chính hiệu rất nhiều do được làm từ các vật liệu rẻ tiền, không được kiểm nghiệm chất lượng.</p>
                        <img src="<?= PATH_URL ?>assets/images/dichvu/phutung03.jpg" class="img-responsive">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="content-setion-tabs">
          <h2 class="page-header">ĐẶT LỊCH</h2>
          <div class="row tab-v3">
						<div class="col-sm-3">
							<ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#cachthuc" data-toggle="tab" aria-expanded="true">Cách thứ</a></li>
                <li class=""><a href="#quytrinh" data-toggle="tab" aria-expanded="false">Quy trình</a></li>
                <li class=""><a href="#quyenloi" data-toggle="tab" aria-expanded="false">Sửa chữa nhanh</a></li>
							</ul>
						</div>
						<div class="col-sm-9">
              <div class="tab-content">
                <div class="tab-pane fade  in active" id="cachthuc">
                  <div class="container" >
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="page-header">Cách đặt lích bảo dưỡng ?</h4>
                        <p>Vui lòng nhấp <strong><a href="#">vào đây </a></strong> để đặt lịch bảo dưỡng tại toyota nha trang
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="quytrinh">
                  <div class="container" >
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <img src="<?= PATH_URL ?>assets/images/dichvu/quytrinh-dl.png" alt="" class="img-responsive"> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="quyenloi">
                  <div class="container" >
                    <div class="row">
                      <div class="col-xs-12 col-sm-12">
                        <img src="<?= PATH_URL ?>assets/images/dichvu/quyen_loi.jpg" class="img-responsive">
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

<div class="grid ">
  <div class="container-fluid m2-content " style="margin-top: 10px;">
    <div class="td-crumb-container">
      <div class="form-group text-center>
        <a class="m2-cta-tile cta-button">Đặt lịch dịch vụ</a>
      </div>
    </div>
  </div>
</div>