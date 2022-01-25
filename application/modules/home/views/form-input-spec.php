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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    
    function send(){
        var car         = $('#selCar').val();
        var tskt    = $('#selTSKT').val();
        var arr       = $('#arr').val();
        if(car == ''){
            notify('Vui lòng nhập mẫu xe lái thử.', 'danger');
            return false;
        }

        if(tskt == '' ){
            notify('Vui lòng nhập TSKT .', 'danger');
            return false;
        }
        if(arr == ''){
            notify('Vui lòng nhập arr.', 'danger');
            return false;
        }

        $.post('<?=PATH_URL.'home/insertTSKT'?>',{
            car     : car,
            tskt   : tskt,
            arr   : arr,
            csrf_token: $('#csrf_token').val()
        },function(data){
            responseText = data.split(".");          
            if(responseText[0]=='success'){
                notify('Đăng ký lái thử thành công.', 'success');
            } else {
                notify('Đăng ký lái thử không thành công.', 'danger');
            }
        }); 

    }
</script>

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
                    <a title="Đăng ký lái thử" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Nhập thông số kỹ thuật</span></a>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="grid pt-4" style="background-color: rgba(0, 0, 0, 0.6) !important;">
    <div class="container-fluid m2-content connected-tech-enform-content container-test-driver">
        <div class="row">
            <div class=" col-lg-12 col-md-12 col-sm-12">
                <div class="enform-on-us content-section">
                    <div class="m2-text-tile  section-header">
                        <h2>Nhập nhanh thông số kỹ thuật</h2>
                    </div>
                </div>
                <div class="test-driver-form">

                    <div class="test-driver-group">
                        <label class="test-driver-label">Mẫu xe * </label>
                        <select class="test-driver-input" id="selCar">
                            <?php foreach ($products as $key => $p): ?>
                            <option value="<?=$p->id ?>"><?=$p->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="test-driver-group">
                        <label class="test-driver-label">Loại TSKT * </label>
                        <select class="test-driver-input" id="selTSKT">
                            <?php foreach ($tskt as $key => $v): ?>
                            <option value="<?=$v->id ?>"><?=$v->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="test-driver-group">
                        <label class="test-driver-label">Array * </label>
                        <textarea class="form-control" id="arr" name="" placeholder="Ghi chú từ khách hàng" rows="15"></textarea>
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