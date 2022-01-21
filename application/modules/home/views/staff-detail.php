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
                    <a title="Tin tức" class="entry-crumb" itemprop="url" href="#"><span itemprop="title">Nhân viên</span></a>
                </span>
                <i class="fa fa-angle-double-right"></i>
                <span itemscope="">
                    <a title="<?= $detail[0]->name ?>" class="entry-crumb" itemprop="url" href="#"><span itemprop="title"><?= $detail[0]->name ?></span></a>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="grid pt-4" style="background-color: rgba(0, 0, 0, 0.6) !important;">
    <div class="container-fluid m2-content connected-tech-enform-content container-test-driver">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <img class="img-responsive hvr-float-shadow" src="<?= PATH_URL . DIR_UPLOAD_STAFF . $detail[0]->image ?>" alt="">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="enform-on-us content-section">
                    <div class="m2-text-tile  section-header pt-4">
                        <h2><?= $detail[0]->name ?></h2>
                    </div>
                </div>
                <div class="test-driver-form">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th style="width:50px; border-top: 0px ! important;"><i class="fa fa-paper-plane"></i></th>
                                    <th style="width:130px;font-weight: bold; border-top: 0px ! important;">Chức vụ :</th>
                                    <th style="border-top: 0px ! important;"><span style="color: red; font-weight:bold"><?= $detail[0]->position; ?></span></th>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-home" aria-hidden="true"></i> </th>
                                    <th style="font-weight: bold;">Phòng ban :</th>
                                    <th><?= $detail[0]->department ?></th>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-phone" aria-hidden="true"></i> </th>
                                    <th style="font-weight: bold;">Điện thoại :</th>
                                    <th><?= $detail[0]->phone ?></th>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-suitcase" aria-hidden="true"></i> </th>
                                    <th style="font-weight: bold;">Trạng thái :</th>
                                    <th>
                                        <?php if ($detail[0]->status == 1) { ?>
                                            <button type="button" class="btn btn-info  btn-sm mt-ladda-btn ladda-button btn-circle" data-style="expand-right" data-size="s">
                                                <span class="ladda-label">Đang làm việc</span>
                                            </button>
                                        <?php } else { ?>
                                            <button type="button" class="btn red btn-sm mt-ladda-btn ladda-button btn-circle" data-style="expand-right" data-size="s">
                                                <span class="ladda-label">Nghỉ việc</span>
                                            </button>
                                        <?php } ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-envelope" aria-hidden="true"></i> </th>
                                    <th style="font-weight: bold;">Email :</th>
                                    <th><?= $detail[0]->email ?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
