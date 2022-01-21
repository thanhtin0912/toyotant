<style>
    .container-test-driver {
        background-color: #fff !important;
        padding: 0 !important;
    }
    .test-driver-form {
        padding: 15px;
    }
    .test-driver-group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
        margin-bottom: 20px;
    }
    .test-driver-group:last-child {
        margin-bottom: 0px;
    }
    .test-driver-group .test-driver-label {
        font-weight: bold;
        font-size: 18px;
        line-height: 150%;
        color: #1a1a1a;
        margin-bottom: 10px;
    }
    .test-driver-group .test-driver-input {
        width: 100%;
        padding-bottom: 8px;
        border: none;
        outline: none;
        border-bottom: 1px solid #cccccc;
    }
    .test-driver-group .select2-container {
        width: 100%;
        padding-bottom: 8px;
        border: none;
        outline: none;
        border-bottom: 1px solid #cccccc;
    }
    /* .select2-container--default .select2-selection--single {
        border: none !important
    } */
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
        var car         = $('#selCar').val();
        var fullname    = $('#fullname').val();
        var phone       = $('#phone').val();
        var mail        = $('#email').val();
        var date        = $('#start-date').val();
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

        if(car == ''){
            notify('Vui lòng nhập mẫu xe lái thử.', 'danger');
            return false;
        }
        if(date == ''){
            notify('Vui lòng nhập ngày lái thử.', 'danger');
            return false;
        }

        if ($('#verify-form').is(":checked") && $('#snd-verify-form').is(":checked")){
            $('#send').hide();
            $.post('<?=PATH_URL.'home/registerTestDriver'?>',{
                car     : car,
                fullname: fullname,
                phone   : phone,
                mail   : mail,
                date    : date,
                csrf_token: $('#csrf_token').val()
            },function(data){
                responseText = data.split(".");          
                if(responseText[0]=='success'){
                    notify('Đăng ký lái thử thành công.', 'success');
                } else {
                    notify('Đăng ký lái thử không thành công.', 'danger');
                }
            }); 
        } else {
            notify('Vui lòng xác nhận cung cấp thông tin để liên hệ với Toyota Nha Trang.', 'danger');
			return false;
        }
        
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                    <a title="Đăng ký lái thử" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Đăng ký lái thử</span></a>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="grid pt-4" style="background-color: rgba(0, 0, 0, 0.6) !important;">
    <div class="container-fluid m2-content connected-tech-enform-content container-test-driver">
        <div class="row">
            <div class=" col-lg-6 col-md-5 col-sm-5 ">
                <img class="img-responsive" src="<?= PATH_URL ?>assets/img/test-driver.jpg" alt="">
            </div>
            <div class=" col-lg-6 col-md-7 col-sm-7">
                <div class="enform-on-us content-section">
                    <div class="m2-text-tile  section-header">
                        <h2>Đăng ký lái thử</h2>
                    </div>
                </div>
                <div class="test-driver-form">
                    <div class="test-driver-group">
                        <label class="test-driver-label">Họ và tên * </label>
                        <input class="test-driver-input" type="text" id="fullname" placeholder="Nguyễn Văn A">
                    </div>

                    <div class="test-driver-group">
                        <label class="test-driver-label">Số điện thoại * </label>
                        <input class="test-driver-input" type="text" id="phone" placeholder="Số điện thoại">
                    </div>
                    <div class="test-driver-group">
                        <label class="test-driver-label">Email * </label>
                        <input class="test-driver-input" type="text" id="email" placeholder="Email">
                    </div>
                    <div class="test-driver-group">
                        <label class="test-driver-label">Xe lái thử * </label>
                        <select class="test-driver-input" id="selCar">
                            <?php foreach ($products as $key => $p): ?>
                            <option value="<?=$p->name ?>" $select ><?=$p->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="test-driver-group">
                        <label class="test-driver-label">Ngày * </label>
                        <div id="flight-datepicker" class="input-daterange test-driver-group">
                            <div class="form-item">
                                <span class="fontawesome-calendar"></span>
                                <input type="text" id="start-date" name="start" data-date-format="DD/MM/YYYY " class="test-driver-input" />
                                <span class="date-text date-depart" style="display:none;"></span>
                            </div>
                        </div>
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
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 text-center">
                        <a class="m2-cta-tile cta-button" id="send" onclick="send()">Gửi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#selCar").select2()
</script>