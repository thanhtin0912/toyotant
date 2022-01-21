<style>
    .tabs .slider {
        position: relative;
        width: 33.33%;
        transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
    }

    .panel-title a {
        text-decoration: underline;
    }

    .box-body {
        padding: 5px 15px;
        margin-bottom: 20px;
    }

    .testimonials-v4 .testimonials-v4-in {
        background: #d6eefb;
        position: relative;
        margin-bottom: 40px;
        padding: 20px 20px 20px 55px;
        box-shadow: 3px 3px 3px 0 rgb(0 0 0 / 10%);
        text-align: left;
    }

    .testimonials-v4 .testimonials-v4-in h3 {
        font-weight: bold;
        font-family: "gothic", Arial, sans-serif;
    }

    .testimonials-v4 .testimonials-v4-in:before {
        color: #bbb;
        font-size: 60px;
        content: "\" ";
        position: absolute;
        margin: -25px 0 0 -40px;
        font-family: Georgia, serif;
    }

    .testimonials-v4 .testimonials-v4-in:after {
        width: 0;
        height: 0;
        left: 80px;
        content: " ";
        bottom: -30px;
        position: absolute;
        border-style: solid;
        border-width: 30px 30px 0 0;
        border-color: #d6eefb transparent transparent transparent;
        -webkit-filter: drop-shadow(2px 2px 1px rgba(0, 0, 0, 0.1));
        filter: drop-shadow(2px 2px 1px rgba(0, 0, 0, 0.1));
    }

    .testimonials-v4 img {
        float: left;
        width: 100px;
        height: auto;
        margin: 0 20px;
    }

    .testimonials-v4 .testimonials-author {
        color: #555;
        display: block;
        font-size: 16px;
        overflow: hidden;
        padding-top: 8px;
        text-transform: uppercase;
        text-align: left;
    }

    .testimonials-v4 .testimonials-author em {
        font-size: 15px;
        text-transform: capitalize;
        font-weight: 500;
    }
    .map {
        width: 100%;
        height: 350px;
        border-top: solid 1px #eee;
        border-bottom: solid 1px #eee;
    }
    .contact {
        margin: 10px 0 15px 0;
        text-align: left;
    }
    .contact .headline {
        margin: 10px 0;
    }
    .contact h3{
        margin: 0 0 -2px 0;
        padding-bottom: 5px;
        display: block !important;
        border-bottom: 2px solid #e41e0a;
        text-align: left;
        font-family: "gothic", Arial, sans-serif;
    }
    .contact ul li{
        color: #687074;
        font-size: 14px;
        font-weight: 500;
        padding: 8px 15px;
    }
    .contact ul li:hover i, .contact ul li:hover a {
        color: #777;
    }
    .contact ul li i {
        color: #e41e0a;
        font-size: 16px;
        min-width: 15px;
        margin-right: 8px;
        text-align: center;
        position: relative;
    }
</style>
<div class="grid ">
    <div class="container-fluid m2-content " style="margin-top: 10px;">
        <div class="td-crumb-container">

            <div class="entry-crumbs">
                <span itemscope="">
                    <a title="" class="entry-crumb" itemprop="url" href="<?= PATH_URL ?>"><span itemprop="title">Trang
                            Chủ</span></a>
                </span>
                <i class="fa fa-angle-double-right"></i>
                <span itemscope="">
                    <a title="Giới thiệu" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Giới thiệu</span></a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="container-fluid m2-content pt-4">
        <div class="tabs parentTabs">
            <input type="radio" id="thongdiep" name="tab-control" checked>
            <input type="radio" id="tongquan" name="tab-control">
            <input type="radio" id="lienhe" name="tab-control">
            <ul class="list-item">
                <li title="VAY TÀI CHÍNH"><label for="thongdiep" role="button"><span>Thông điệp</span> <br><img src="<?= PATH_URL ?>assets/images/icon/gt1.png"></label></li>
                <li title="TỰ CHỦ TÀI CHÍNH"><label for="tongquan" role="button"><span>Tổng quan</span> <br><img src="<?= PATH_URL ?>assets/images/icon/gt2.png"></label></li>
                <li title="TỰ CHỦ TÀI CHÍNH"><label for="lienhe" role="button"><span>Liên hệ</span> <br><img src="<?= PATH_URL ?>assets/images/icon/gt4.png"></label></li>
            </ul>
            <div class="slider">
                <div class="indicator"></div>
            </div>
            <div class="content">
                <section class="content-setion-tabs">
                    <h2 class="page-header">Thông điệp</h2>
                    <div class="row">
                        <div class="col-md-offset-2 col-sm-offset-2 col-sm-9 col-md-9" style="padding-right: 20px;">
                            <!-- Testimonials v4 -->
                            <div class="testimonials-v4 md-margin-bottom-50">
                                <div class="testimonials-v4-in">
                                    <h3>CHÚNG TÔI KHÔNG CÓ GÌ NGOÀI SỰ HÀI LÒNG CỦA KHÁCH HÀNG </h3>
                                    <p>Mang lại giá trị cùng lợi ích cao nhất khi Khách hàng sử dụng sản phẩm và Dịch vụ của chúng tôi, Chúng tôi tìm cách để phát triển và tạo sự khác biệt để đem đến sự vui vẻ cho mọi người.</p>
                                    <p>- Mong muốn làm Khách hàng hài lòng</p>
                                    <p>- Sự tin cậy & Tôn trọng</p>
                                    <p>- Tính sáng tạo</p>
                                    <p>- Sự năng động & Niềm tự hào</p>
                                    <p>- Sự lắng nghe</p>
                                    <p>- Sự khác biệt</p>
                                </div>
                                <img class="rounded-x" src="<?= PATH_URL ?>assets/images/gioithieu/Mr-Tan1.png" alt="thumb">
                                <span class="testimonials-author">
                                    <p style="font-weight: bold;">Mr Tấn</p>
                                    <em>Tổng Giám Đốc, <a href="<?= PATH_URL ?>">Toyota NT JSC</a></em>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-setion-tabs">
                    <h2 class="page-header">TỔNG QUAN</h2>
                    <div class="row tab-v3">
                        <div class="col-sm-3">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#khuonvien" data-toggle="tab" aria-expanded="true">Khuôn viên</a></li>
                                <li class=""><a href="#diachi" data-toggle="tab" aria-expanded="false">Địa chỉ</a></li>
                                <li class=""><a href="#showroom" data-toggle="tab" aria-expanded="true">Show room</a></li>
                                <li class=""><a href="#congnghe" data-toggle="tab" aria-expanded="false">Công nghệ</a></li>
                                <li class=""><a href="#khachhang" data-toggle="tab" aria-expanded="false">Khách hàng</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div class="tab-pane fade  in active" id="nhaxuong">
                                    <div class="container">
                                        <div id="carousel-KV" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-KV" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-KV" data-slide-to="1" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_kv01.jpg" alt=" slide">
                                                </div>
                                                <div class="item">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_kv02.jpg" alt=" slide">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <h4>KHUÔN VIÊN RỘNG LỚN</h4>
                                    <p>Với vốn đầu tư hơn 4 triệu USD, TNT được xây dựng trên tổng diện tích là 3.500m2 bao gồm: Khối văn phòng rộng hơn 450m2, Khu dịch vụ rộng hơn 2.300m2 gồm 10 khoang bảo dưỡng và sữa chữa chung, 21 khoang sữa chữa thân xe và sơn, 01 khu rửa – làm đẹp xe và 01 khoang giao xe mới.</p>
                                </div>
                                <div class="tab-pane fade" id="diachi">
                                    <div class="container">
                                        <div id="carousel-DC" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-DC" data-slide-to="0" class="active"></li>
                                                <!-- <li data-target="#carousel-DC" data-slide-to="1" class=""></li> -->
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_kv03.jpg" alt=" slide">
                                                </div>
                                                <!-- <div class="item">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_kv02.jpg" alt=" slide">
                                                </div> -->
                                            </div>
                                        </div>

                                    </div>
                                    <h4>ĐỊA CHỈ THUẬN TIỆN</h4>
                                    <p>Tòa nhà TNT tọa lạc tại địa chỉ Km5, đường 23/10, Vĩnh Hiệp – con đường huyết mạch vào trung tâm thành phố Nha Trang, rất thuận tiện cho việc Khách hàng ở Khánh Hòa và các tỉnh lân cận khác như Lâm Đồng, Ninh Thuận, Phú Yên đưa xe đến làm dịch vụ.</p>
                                </div>
                                <div class="tab-pane fade" id="showroom">
                                    <div class="container">
                                        <div id="carousel-SR" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-SR" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-SR" data-slide-to="1" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_sh001.jpg" alt="First slide">
                                                </div>
                                                <div class="item">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_sh002.jpg" alt="Second slide">
                                                </div>
                                            </div>
                                        </div>
                                        <h4>SHOWROOM HIỆN ĐẠI</h4>
                                        <p>Showroom được thiết kế hiện đại, sang trọng, trưng bày các mẫu xe mới nhất của Toyota.</p>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="congnghe">
                                    <div class="container">
                                        <div id="carousel-CN" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-CN" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-CN" data-slide-to="1" class=""></li>
                                                <li data-target="#carousel-CN" data-slide-to="2" class=""></li>
                                                <li data-target="#carousel-CN" data-slide-to="3" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_ktv01.jpg">
                                                </div>
                                                <div class="item">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_ktv02.jpg">
                                                </div>
                                                <div class="item">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_ktv03.jpg">
                                                </div>
                                                <div class="item">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_ktv04.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>CÔNG NGHỆ TIÊN TIẾN</h4>
                                    <p>Trang thiết bị nhập khẩu hiện đại, đáp ứng những yêu cầu khắt khe nhất.</p>
                                    <p>Phòng sơn đạt chuẩn quốc tế, sử dụng hệ thống khuấy sơn pha màu tiên tiến trong khu vực khép kín, đảm bảo vệ sinh môi trường.</p>
                                </div>
                                <div class="tab-pane fade" id="khachhang">
                                    <div class="container">
                                        <div id="carousel-KH" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-KH" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-KH" data-slide-to="1" class=""></li>
                                                <li data-target="#carousel-KH" data-slide-to="2" class=""></li>
                                                <li data-target="#carousel-KH" data-slide-to="3" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_kh001.jpg" alt="First slide">
                                                </div>
                                                <div class="item ">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_kh002.jpg" alt="First slide">
                                                </div>
                                                <div class="item ">
                                                    <img src="<?= PATH_URL ?>assets/images/gioithieu/gt_kh003.jpg" alt="First slide">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <h4>KHÁCH HÀNG</h4>
                                    <p>TNT liên kết với các đối tác tài chính ngân hàng và các đơn vị bảo hiểm nhằm mang đến dịch vụ tốt nhất đến từng khách hàng. Một số đối tác tài chính: Vietcombank, Techcombank…</p>
                                    <p>Tính đến thời điểm hiện tại, TNT đã bán ra thị trường gần 1000 xe và đón tiếp hơn 10000 lượt xe đến làm Dịch vụ là minh chứng thiết thực nhất cho kết quả của phương châm: “ Hết lòng vì Khách hàng” mà Công ty đã và đang xây dựng..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-setion-tabs">
                    <h2 class="page-header">Liên hệ</h2>
                    <div class="row">
                        <div id="map" class="map margin-bottom-20">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.8732719507766!2d109.14424831468533!3d12.256854233474181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ce82949de127f00!2zQ3R5IGPhu5UgcGjhuqduIFRveW90YSBOaGEgdHJhbmc!5e0!3m2!1svi!2s!4v1482226182796" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="row margin-bottom-30 contact">
                            <div class="col-xs-12 col-md-7 col-sd-7 mb-margin-bottom-30">
                                
                                <div class="headline">
                                    <h3>Gửi thông tin phản hồi</h3>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="txtcustomer" placeholder="Họ tên Khách hàng" name="txtcustomer">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-mobile-phone "></i></span>
                                        <input type="text" class="form-control" id="txtphonenumber" placeholder="Số điện thoai" name="txtphonenumber">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" type="text" id="txtEmail" placeholder="Địa chỉ Email" name="txtEmail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" class="form-control" id="txtAdress" placeholder="Địa chỉ" name="txtphonenumber">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="txtContent" name="" placeholder="Ghi chú từ khách hàng" rows="5"></textarea>
                                </div>
                                <div class="modal-footer" style="float: left ! important;">
                                    <button class="btn btn-danger" style="height: 35px; background: red;" onclick="();">Gửi</button>
                                </div>
                            </div>
                            <!--/col-md-9-->
                            <div class="col-xs-12 col-md-1 col-sd-1">
                            </div>
                            <div class="col-xs-12 col-md-4 col-sd-4">
                                <!-- Contacts -->
                                <div class="headline">
                                    <h3>Địa chỉ</h3>
                                </div>
                                <ul class="list-unstyled who margin-bottom-30">
                                    <li><i class="fa fa-home"></i>Công ty TNHH Toyota Nha Trang:<br>
                                            Km5 đường 23/10 - Vĩnh Hiệp - Nha Trang - Khánh Hòa
                                    </li>
                                    <li><a href="mail:info@toyotanhatrang.com.vn"><i class="fa fa-envelope"></i>info@toyotanhatrang.com.vn</a></li>
                                    <li><a href="welcome"><i class="fa fa-globe"></i>http://www.toyotanhatrang.com.vn</a></li>
                                    <li><a href="https://www.facebook.com/toyotanhatrang"><i class="fa fa-facebook"></i>/toyotanhatrang</a></li>
                                </ul>
                                <!-- Business Hours -->
                                <div class="headline">
                                    <h3>Điện thoại</h3>
                                </div>
                                <ul class="list-unstyled margin-bottom-30 who">
                                    <li><a href="tel:<?= $info[0]->phone;?>"><i class="fa fa-phone"></i><strong>Hotline:</strong> <?= $info[0]->phone;?></a></li>
                                    <li><a href="tel:<?= $info[0]->phone_cskh; ?>"><i class="fa fa-phone"></i><strong>CSKH:</strong> <?= $info[0]->phone_cskh; ?></a></li>
                                    <li><a href="tel:<?= $info[0]->phone_ch;?>"><i class="fa fa-phone"></i><strong>Cứu hộ:</strong> <?= $info[0]->phone_ch;?></a></li>
                                    <li><a href="tel:<?= $info[0]->phone_dv;?>"><i class="fa fa-phone"></i><strong>Dich vụ:</strong> <?= $info[0]->phone_dv;?></a></li>
                                    <li><a href="tel:<?= $info[0]->phone_bh;?>"><i class="fa fa-phone"></i><strong>Bán hàng:</strong> <?= $info[0]->phone_bh;?></a></li>

                                </ul>

                                <!-- Why we are? -->
                                <div class="headline">
                                    <h3>Giờ làm việc</h3>
                                </div>
                                <ul class="list-unstyled margin-bottom-30 who">
                                    <li><strong>Thứ 2 đến chủ nhật</strong></li>
                                    <li><i class="fa fa-check-square-o"></i><strong>Sáng : </strong> 7h30 đến 11h30</li>
                                    <li><i class="fa fa-check-square-o"></i><strong>Chiều : </strong> 1h00 đến 5h00</li>
                                    <li><strong>* Chủ nhật sáng 8h đến 11h chiều 1h đến 4h</strong></li>
                                </ul>
                            </div>
                            <!--/col-md-3-->
                        </div>
                        <!--/row-->
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>