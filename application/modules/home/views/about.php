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
                            Ch???</span></a>
                </span>
                <i class="fa fa-angle-double-right"></i>
                <span itemscope="">
                    <a title="Gi???i thi???u" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Gi???i thi???u</span></a>
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
                <li title="VAY T??I CH??NH"><label for="thongdiep" role="button"><span>Th??ng ??i???p</span> <br><img src="<?= PATH_URL ?>assets/images/icon/gt1.png"></label></li>
                <li title="T??? CH??? T??I CH??NH"><label for="tongquan" role="button"><span>T???ng quan</span> <br><img src="<?= PATH_URL ?>assets/images/icon/gt2.png"></label></li>
                <li title="T??? CH??? T??I CH??NH"><label for="lienhe" role="button"><span>Li??n h???</span> <br><img src="<?= PATH_URL ?>assets/images/icon/gt4.png"></label></li>
            </ul>
            <div class="slider">
                <div class="indicator"></div>
            </div>
            <div class="content">
                <section class="content-setion-tabs">
                    <h2 class="page-header">Th??ng ??i???p</h2>
                    <div class="row">
                        <div class="col-md-offset-2 col-sm-offset-2 col-sm-9 col-md-9" style="padding-right: 20px;">
                            <!-- Testimonials v4 -->
                            <div class="testimonials-v4 md-margin-bottom-50">
                                <div class="testimonials-v4-in">
                                    <h3>CH??NG T??I KH??NG C?? G?? NGO??I S??? H??I L??NG C???A KH??CH H??NG </h3>
                                    <p>Mang l???i gi?? tr??? c??ng l???i ??ch cao nh???t khi Kh??ch h??ng s??? d???ng s???n ph???m v?? D???ch v??? c???a ch??ng t??i, Ch??ng t??i t??m c??ch ????? ph??t tri???n v?? t???o s??? kh??c bi???t ????? ??em ?????n s??? vui v??? cho m???i ng?????i.</p>
                                    <p>- Mong mu???n l??m Kh??ch h??ng h??i l??ng</p>
                                    <p>- S??? tin c???y & T??n tr???ng</p>
                                    <p>- T??nh s??ng t???o</p>
                                    <p>- S??? n??ng ?????ng & Ni???m t??? h??o</p>
                                    <p>- S??? l???ng nghe</p>
                                    <p>- S??? kh??c bi???t</p>
                                </div>
                                <img class="rounded-x" src="<?= PATH_URL ?>assets/images/gioithieu/Mr-Tan1.png" alt="thumb">
                                <span class="testimonials-author">
                                    <p style="font-weight: bold;">Mr T???n</p>
                                    <em>T???ng Gi??m ?????c, <a href="<?= PATH_URL ?>">Toyota NT JSC</a></em>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-setion-tabs">
                    <h2 class="page-header">T???NG QUAN</h2>
                    <div class="row tab-v3">
                        <div class="col-sm-3">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#khuonvien" data-toggle="tab" aria-expanded="true">Khu??n vi??n</a></li>
                                <li class=""><a href="#diachi" data-toggle="tab" aria-expanded="false">?????a ch???</a></li>
                                <li class=""><a href="#showroom" data-toggle="tab" aria-expanded="true">Show room</a></li>
                                <li class=""><a href="#congnghe" data-toggle="tab" aria-expanded="false">C??ng ngh???</a></li>
                                <li class=""><a href="#khachhang" data-toggle="tab" aria-expanded="false">Kh??ch h??ng</a></li>
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
                                    <h4>KHU??N VI??N R???NG L???N</h4>
                                    <p>V???i v???n ?????u t?? h??n 4 tri???u USD, TNT ???????c x??y d???ng tr??n t???ng di???n t??ch l?? 3.500m2 bao g???m: Kh???i v??n ph??ng r???ng h??n 450m2, Khu d???ch v??? r???ng h??n 2.300m2 g???m 10 khoang b???o d?????ng v?? s???a ch???a chung, 21 khoang s???a ch???a th??n xe v?? s??n, 01 khu r???a ??? l??m ?????p xe v?? 01 khoang giao xe m???i.</p>
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
                                    <h4>?????A CH??? THU???N TI???N</h4>
                                    <p>T??a nh?? TNT t???a l???c t???i ?????a ch??? Km5, ???????ng 23/10, V??nh Hi???p ??? con ???????ng huy???t m???ch v??o trung t??m th??nh ph??? Nha Trang, r???t thu???n ti???n cho vi???c Kh??ch h??ng ??? Kh??nh H??a v?? c??c t???nh l??n c???n kh??c nh?? L??m ?????ng, Ninh Thu???n, Ph?? Y??n ????a xe ?????n l??m d???ch v???.</p>
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
                                        <h4>SHOWROOM HI???N ?????I</h4>
                                        <p>Showroom ???????c thi???t k??? hi???n ?????i, sang tr???ng, tr??ng b??y c??c m???u xe m???i nh???t c???a Toyota.</p>
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
                                    <h4>C??NG NGH??? TI??N TI???N</h4>
                                    <p>Trang thi???t b??? nh???p kh???u hi???n ?????i, ????p ???ng nh???ng y??u c???u kh???t khe nh???t.</p>
                                    <p>Ph??ng s??n ?????t chu???n qu???c t???, s??? d???ng h??? th???ng khu???y s??n pha m??u ti??n ti???n trong khu v???c kh??p k??n, ?????m b???o v??? sinh m??i tr?????ng.</p>
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
                                    <h4>KH??CH H??NG</h4>
                                    <p>TNT li??n k???t v???i c??c ?????i t??c t??i ch??nh ng??n h??ng v?? c??c ????n v??? b???o hi???m nh???m mang ?????n d???ch v??? t???t nh???t ?????n t???ng kh??ch h??ng. M???t s??? ?????i t??c t??i ch??nh: Vietcombank, Techcombank???</p>
                                    <p>T??nh ?????n th???i ??i???m hi???n t???i, TNT ???? b??n ra th??? tr?????ng g???n 1000 xe v?? ????n ti???p h??n 10000 l?????t xe ?????n l??m D???ch v??? l?? minh ch???ng thi???t th???c nh???t cho k???t qu??? c???a ph????ng ch??m: ??? H???t l??ng v?? Kh??ch h??ng??? m?? C??ng ty ???? v?? ??ang x??y d???ng..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-setion-tabs">
                    <h2 class="page-header">Li??n h???</h2>
                    <div class="row">
                        <div id="map" class="map margin-bottom-20">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.8732719507766!2d109.14424831468533!3d12.256854233474181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7ce82949de127f00!2zQ3R5IGPhu5UgcGjhuqduIFRveW90YSBOaGEgdHJhbmc!5e0!3m2!1svi!2s!4v1482226182796" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="row margin-bottom-30 contact">
                            <div class="col-xs-12 col-md-7 col-sd-7 mb-margin-bottom-30">
                                
                                <div class="headline">
                                    <h3>G???i th??ng tin ph???n h???i</h3>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="txtcustomer" placeholder="H??? t??n Kh??ch h??ng" name="txtcustomer">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-mobile-phone "></i></span>
                                        <input type="text" class="form-control" id="txtphonenumber" placeholder="S??? ??i???n thoai" name="txtphonenumber">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" type="text" id="txtEmail" placeholder="?????a ch??? Email" name="txtEmail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" class="form-control" id="txtAdress" placeholder="?????a ch???" name="txtphonenumber">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="txtContent" name="" placeholder="Ghi ch?? t??? kh??ch h??ng" rows="5"></textarea>
                                </div>
                                <div class="modal-footer" style="float: left ! important;">
                                    <button class="btn btn-danger" style="height: 35px; background: red;" onclick="();">G???i</button>
                                </div>
                            </div>
                            <!--/col-md-9-->
                            <div class="col-xs-12 col-md-1 col-sd-1">
                            </div>
                            <div class="col-xs-12 col-md-4 col-sd-4">
                                <!-- Contacts -->
                                <div class="headline">
                                    <h3>?????a ch???</h3>
                                </div>
                                <ul class="list-unstyled who margin-bottom-30">
                                    <li><i class="fa fa-home"></i>C??ng ty TNHH Toyota Nha Trang:<br>
                                            Km5 ???????ng 23/10 - V??nh Hi???p - Nha Trang - Kh??nh H??a
                                    </li>
                                    <li><a href="mail:info@toyotanhatrang.com.vn"><i class="fa fa-envelope"></i>info@toyotanhatrang.com.vn</a></li>
                                    <li><a href="welcome"><i class="fa fa-globe"></i>http://www.toyotanhatrang.com.vn</a></li>
                                    <li><a href="https://www.facebook.com/toyotanhatrang"><i class="fa fa-facebook"></i>/toyotanhatrang</a></li>
                                </ul>
                                <!-- Business Hours -->
                                <div class="headline">
                                    <h3>??i???n tho???i</h3>
                                </div>
                                <ul class="list-unstyled margin-bottom-30 who">
                                    <li><a href="tel:<?= $info[0]->phone;?>"><i class="fa fa-phone"></i><strong>Hotline:</strong> <?= $info[0]->phone;?></a></li>
                                    <li><a href="tel:<?= $info[0]->phone_cskh; ?>"><i class="fa fa-phone"></i><strong>CSKH:</strong> <?= $info[0]->phone_cskh; ?></a></li>
                                    <li><a href="tel:<?= $info[0]->phone_ch;?>"><i class="fa fa-phone"></i><strong>C???u h???:</strong> <?= $info[0]->phone_ch;?></a></li>
                                    <li><a href="tel:<?= $info[0]->phone_dv;?>"><i class="fa fa-phone"></i><strong>Dich v???:</strong> <?= $info[0]->phone_dv;?></a></li>
                                    <li><a href="tel:<?= $info[0]->phone_bh;?>"><i class="fa fa-phone"></i><strong>B??n h??ng:</strong> <?= $info[0]->phone_bh;?></a></li>

                                </ul>

                                <!-- Why we are? -->
                                <div class="headline">
                                    <h3>Gi??? l??m vi???c</h3>
                                </div>
                                <ul class="list-unstyled margin-bottom-30 who">
                                    <li><strong>Th??? 2 ?????n ch??? nh???t</strong></li>
                                    <li><i class="fa fa-check-square-o"></i><strong>S??ng : </strong> 7h30 ?????n 11h30</li>
                                    <li><i class="fa fa-check-square-o"></i><strong>Chi???u : </strong> 1h00 ?????n 5h00</li>
                                    <li><strong>* Ch??? nh???t s??ng 8h ?????n 11h chi???u 1h ?????n 4h</strong></li>
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