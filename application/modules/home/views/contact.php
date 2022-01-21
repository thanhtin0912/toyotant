<style>
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
    
    .required-checkbox-input:checked + label:before, .required-checkbox-input:checked + label:after {
        background: #eb0a1e;
        color: #fff;
        border: #eb0a1e;
    }
    .required-checkbox-input:not(:checked) + label:after, .required-checkbox-input:checked + label:after {
        content: "\f00c";
        font-family: "Font Awesome 5 Free";
        font-weight: 600;
        font-size: 12px;
        position: absolute;
        top: 0.78em;
        left: 0.3em;
        line-height: 0;
        transition: all 0.2s;
    }
    .required-insurance-checkbox-label {
        font-size: 13px;
        color: #1a1a1a;
    }
</style>
<script>
    function send(){
        var fullname    = $('#fullname').val();
        var phone       = $('#phone').val();
        var mail        = $('#email').val();
        var description       = $('#message').val();
        if(fullname == '' ){
            notify('Vui lòng nhập họ tên.', 'danger');
            return false;
        }
        if(phone == ''){
            notify('Vui lòng nhập số điện thoại.', 'danger');
            return false;
        }
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if( !emailReg.test(mail)) {
            notify('Địa chỉ email không hợp lệ', 'danger');
            return false;
        }else if(mail == ''){
            notify('Vui lòng nhập địa chỉ email.', 'danger');
            return false;
        }

        if(description == ''){
            notify('Vui lòng nhập thông tin cần hỗ trợ.', 'danger');
            return false;
        }

        if ($('#verify-form').is(":checked") && $('#snd-verify-form').is(":checked")){
            $('#send').hide();
            $.post('<?=PATH_URL.'home/formInfoContact'?>',{
                fullname: fullname,
                phone   : phone,
                mail   : mail,
                description    : description,
                csrf_token: $('#csrf_token').val()
            },function(data){
                responseText = data.split(".");          
                if(responseText[0]=='success'){
                    notify('Thông tin hỗ trợ đã gửi thành công.', 'success');
                } else {
                    notify('Lỗi trong quá trình gửi thông tin hỗ trợ.', 'danger');
                }
            }); 
        } else {
            notify('Vui lòng xác nhận thông tin cung cấp với Toyota Nha Trang.', 'danger');
			return false;
        }
    }
</script>
<div class="grid ">
    <div class="container-fluid m2-content pt-4">
        <div class="td-crumb-container">

            <div class="entry-crumbs">
                <span itemscope="">
                    <a title="" class="entry-crumb" itemprop="url" href="<?= PATH_URL ?>"><span itemprop="title">Trang
                            Chủ</span></a>
                </span>
                <i class="fa fa-angle-double-right"></i>
                <span itemscope="">
                    <a title="Liên hệ" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Liên hệ</span></a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="container-fluid m2-content pt-3">
        <div class="content">
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
                                <input type="text" class="form-control" id="fullname" placeholder="Họ tên Khách hàng" name="txtcustomer">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-mobile-phone "></i></span>
                                <input type="text" class="form-control" id="phone" placeholder="Số điện thoai" name="txtphonenumber">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" type="text" id="email" placeholder="Địa chỉ Email" name="txtEmail">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="" placeholder="Ghi chú từ khách hàng" rows="5"></textarea>
                        </div>
                        <div class="test-driver-group">
                            <div class="required-checkbox-group">
                                <input class="required-checkbox-input" type="checkbox" id="verify-form" name="verify-form">
                                <label class="required-insurance-checkbox-label pl-1" for="verify-form">
                                    Xác nhận thông tin cung cấp với Toyota Nha Trang.
                                </label>
                            </div>

                            <div class="required-checkbox-group">
                                <input class="required-checkbox-input" type="checkbox" id="snd-verify-form" name="semi-verify-form">
                                <label class="required-insurance-checkbox-label pl-1" for="snd-verify-form">
                                Xác nhận <a href="<?= PATH_URL ?>chinh-sach-bao-mat-thong-tin" target="_blank" rel="noreferrer" style="color: #0056b3;">quy định và chính sách</a> bảo mật của Toyota Nha Trang.
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer" style="float: left ! important;">
                            <button class="btn btn-danger" id="send" style="height: 35px; background: red;" onclick="send();">Gửi</button>
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
        </div>
    </div>
</div>