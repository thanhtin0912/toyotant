$(document).ready(function(){  
	SearchOldProduct(1);
    $('#divThreeRow').hide();
	$('.format-number').number( true,0);
	$('.getGear input:checkbox').click(function() {
	    $('.getGear input:checkbox').not(this).prop('checked', false);
	});
	$('.getFuel input:checkbox').click(function() {
	    $('.getFuel input:checkbox').not(this).prop('checked', false);
	});
	$('.getCartype input:checkbox').click(function() {
	    $('.getCartype input:checkbox').not(this).prop('checked', false);
	});
	$('.getEngine input:checkbox').click(function() {
	    $('.getEngine input:checkbox').not(this).prop('checked', false);
	});
	
    $("#selCompanyOfProductMobile").bind("change",function()
    {
        SearchOldProductmobileMinprice(1);
        $('#selSortPrice').prop('selectedIndex',0);
    });
    
    $("#selSortPrice").bind("change",function()
    {
        var price = $('#selSortPrice').val();
        if(price == 1){
            SearchOldProductmobileMaxprice(1);
        }else if (price == 2){
            SearchOldProductmobileMinprice(1);
        }
        
    });
    // $('.fomatnumber').number( true,0);
});

function SearchOldProductmobileMinprice(page){

    var Title = $('#txtSearchTitleMobile').val();
    var CompanyofProduct = $('#selCompanyOfProductMobile').val();
    var Color = '';
    var record = 9;
  
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/SearchMobile_OldProduct_MinPrice',
        data: {
            Title                       : Title ,
            CompanyofProduct            : CompanyofProduct,
            Color                       : Color,
            currPage                    : page,
            record                      : record
        },           
        success: function(data) { 
            SearchOldProduct_Complete(data,page,record);
            SearchOldProductRow_Complete(data,page,record);
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function SearchOldProductmobileMaxprice(page){

    var Title = $('#txtSearchTitleMobile').val();
    var CompanyofProduct = $('#selCompanyOfProductMobile').val();
    var Color = '';
    var record = 9;
  
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/SearchMobile_OldProduct_MaxPrice',
        data: {
            Title                       : Title ,
            CompanyofProduct            : CompanyofProduct,
            Color                       : Color,
            currPage                    : page,
            record                      : record
        },           
        success: function(data) { 
            SearchOldProduct_Complete(data,page,record);
            SearchOldProductRow_Complete(data,page,record);
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function SearchOldProduct(page){

    var CompanyofProduct = $('#selCompanyOfProduct').val();
    var YearOfMin = $('#selYearFrom').val();
    var YearOfMax = $('#selYearTo').val();
    var PriceMin = $('#selPriceFrom').val();
    var PriceMax = $('#selPriceTo').val();
    var Gear = $('#txtGeartoPick').val();
    var Fuel = $('#txtFueltoPick').val();
    var Engine = $('#txtEnginetoPick').val();
    var CarType = $('#txtCartypetoPick').val();
    var NumberOfKilometersMin = $('#selKMFrom').val();
    var NumberOfKilometersMax = $('#selKMTo').val();
    var Color= $('#txtColortopick').val();
    var record = 9;
    // var PriceMin =  PriceFrom * 1000000;
    // var PriceMax =  PriceTo * 1000000;
    // var PriceMinlate=''
    // if(PriceMin==0){
    //     var PriceMinlate='';
    // }else{

    // }
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/SearchOldProduct',
        data: {
            CompanyofProduct			: CompanyofProduct,
            YearOfMin 					: YearOfMin,
            YearOfMax                   : YearOfMax,
            PriceMin 					: PriceMin,
            PriceMax 					: PriceMax,
            Gear 						: Gear,
            Fuel 						: Fuel,
            Engine 						: Engine,
            CarType                     : CarType,
            NumberOfKilometersMin 		: NumberOfKilometersMin,
            NumberOfKilometersMax 		: NumberOfKilometersMax,
            Color 						: Color,
            currPage					: page,
            record 						: record
        },           
        success: function(data) { 
            SearchOldProduct_Complete(data,page,record);
            SearchOldProductRow_Complete(data,page,record);
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}



function SearchOldProductRow_Complete(data,page,record){
    data = JSON.parse(data);
    if(data.Return == 1){
    	var str="";
       
            for (var i = 0; i < data.Value.length; i++) {
            var link="xequasudung/"+data.Value[i].Keyword+"-"+data.Value[i].CarType+"-"+data.Value[i].id+"";
            str+="<div class='modal-content' style='margin-top: 10px; margin-bottom: 20px ! important;'>";
            // str+="<div class='modal-header' style='background-image: linear-gradient(to top, #080808 1%, #080808);padding: 10px! important;'>";
            
            // // str+="<p>sdsgds</p";
            // str+="</div>";
            str+="<div class='modal-body' style='padding: 10px ! important; border-top: 2px solid #e1e2e4;'> ";
            str+="<div class='row'>";
            str+="<a href='"+link+"'><p class='explore-item-heading' style='color: #121312 ! important; margin:5px 0 ! important; font-size: 23px ! important'>"+data.Value[i].Title+" - "+data.Value[i].YearOf+"</p></a>";
            str+="</div>";
            str+="<div class='row'>";
            str+="<div class='col-xs-6 col-sm-4 col-md-4' style='margin: 5px 0 ! important;'>";
            str+="<label style='letter-spacing: 0px;'><span style='font-weight:bold;'>Người bán : </span>"+data.Value[i].SaleTyle+"</label>";
            str+="</div>";
         
            str+="<div class='col-xs-6 col-sm-4 col-md-4' style='margin: 5px 0 ! important;'>";
            str+="<label style='letter-spacing: 0px;'><span style='font-weight:bold;'>Trạng thái :</span> "

            if (data.Value[i].Status == 1 || data.Value[i].Status === 1){
                str+="Xe mới";
            }if(data.Value[i].Status == 0 || data.Value[i].Status === 0){
                str+="Đã bán";
            }if(data.Value[i].Status == 2 || data.Value[i].Status === 2){
                str+="Ưu đãi";
            }
            str+="</label>";
            str+="</div>";
            str+="</div>";
            str+="<div class='row'>";
            str+="<div class='col-xs-12 col-sm-6 col-md-6' style='padding: 5px ! important;''>";
            str+="<div class='form-group'>";
            str+="<picture lazyload='true' class='tcom-picture'>";
            str+="<a href='"+link+"'><img  src='"+data.Value[i].Image+"'></a>";
            str+="</picture>";
            str+="</div>";
            str+="</div>";
            str+="<div class='col-xs-12 col-sm-6 col-md-6' style='padding: 5px ! important;''>";
            str+="<div class='table-responsive'>";
            str+="<table class='table'>";
            str+=" <tbody style='font-size: 80% ! important;''>";
            var price= Math.floor(data.Value[i].Price/1000000);
            str+="<tr>";
            str+="<th style='width:20%; border-top: 0px ! important;'><i class='fa'><img class='img-reponsive' src='images/icon/icon_oc01.png' alt=''></i></th>";
            str+="<th style='width:40%;font-weight: bold; border-top: 0px ! important;'>Giá bán :</th>";
            str+="<th style='border-top: 0px ! important; color: red;'><b>"+price+" Triệu</b><p>(Chưa phụ phí.)</p></th>";
            str+="</tr>";

            str+="<tr>";
            str+="<th ><i class='fa'><img class='img-reponsive' src='images/icon/icon_oc03.png' alt=''></i></th>";
            str+="<th style='width:40%;font-weight: bold;'>Số KM đã đi :</th>";
            str+="<th class='format-number'>"+data.Value[i].NumberOfKilometers+"</th>";
            str+="</tr>";

            str+="<tr>";
            str+="<th ><i class='fa'><img class='img-reponsive' src='images/icon/icon_oc05.png' alt=''></i></th>";
            str+="<th style='width:40%;font-weight: bold;'>Kiểu dáng :</th>";
            str+="<th>"+data.Value[i].CarType+"</th>";
            str+="</tr>";

            str+="<tr>";
            str+="<th ><i class='fa'><img class='img-reponsive' src='images/icon/icon_oc06.png' alt=''></i></th>";
            str+="<th style='width:40%;font-weight: bold;'>Màu sắc :</th>";
            str+="<th>"+data.Value[i].Color+"</th>";
            str+="</tr>";

            str+="<tr>";
            str+="<th ><i class='fa'><img class='img-reponsive' src='images/icon/icon_oc10.png' alt=''></i></th>";
            str+="<th style='width:40%;font-weight: bold;'>Động cơ :</th>";
            str+="<th>"+data.Value[i].Engine+"</th>";
            str+="</tr>";

            str+="<tr>";
            str+="<th ><i class='fa'><img class='img-reponsive' src='images/icon/icon_oc09.png' alt=''></i></th>";
            str+="<th style='width:40%;font-weight: bold;'>Hộp số :</th>";
            str+="<th>"+data.Value[i].Gear+"</th>";
            str+="</tr>";

            str+="<tr>";
            str+="<th ><i class='fa'><img class='img-reponsive' src='images/icon/icon_oc08.png' alt=''></i></th>";
            str+="<th style='width:40%;font-weight: bold;'>Nhiên liệu :</th>";
            str+="<th>"+data.Value[i].Fuel+"</th>";
            str+="</tr>";

            str+="</tbody></table>";
            str+="</div>";
            str+="</div>";
            str+="</div>";
            str+="<div class='row'>";
            str+="<div class='col-md-offset-6 col-sm-offset-6 col-xs-6 col-sm-3 col-md-3' style='margin-top:5px ! important; padding: 0 20px ! important'>";
            str+="<a class='btn btn-block btn-primary ' style='color:#fff; padding: 10 15px ! important;background: #2370b9;' href='"+link+"'>Chi tiết</a>";
            // str+="<a  data-action='Read More'  class='m2-cta-tile cta-button href='tel:"+data.Value[i].Contact+"'><i class='fa fa-phone'></i> Liên hệ</a>";
            str+="</div>";
            str+="<div class='col-md-offset-6 col-sm-offset-6 col-xs-6 col-sm-3 col-md-3' style='margin-top:5px ! important; padding: 0 20px ! important'>";
            str+="<a class='btn btn-block btn-default ' style='color:red;''><i class='fa fa-phone'></i> Liên hệ</a>";
            str+="</div>";
            str+="</div>";
            str+="</div>";
            str+="</div>";

        
        }
    	
        
	    $('#divOneRow').children().remove();
	    $('#divOneRow').append(str);

	    var totalRecord = parseInt(data.Total[0].Total);
	    var remainder = totalRecord % record;
	    var totalPage = (totalRecord - remainder) / record;
	    if (remainder > 0) {
	        totalPage = totalPage + 1;
	    }
	    var nextPage = page +1;
	    var prevPage = page -1; 



	    if (page == 1) {
	        str = '<li><a href="javascript:void(0);">1</a></li>';
	        str = str + '<li><a href="javascript:void(0);" onclick="SearchOldProduct(' + nextPage + ')">&raquo;</a></li>';
	    }
	    else {
	        if (page == totalPage) {
	            str = '<li><a href="javascript:void(0);" onclick="SearchOldProduct(' + prevPage + ')">&laquo;</a></li>';
	            str = str + '<li><a href="javascript:void(0);">' + page + '</a></li>';
	        }
	        else {
	            str = '<li><a href="javascript:void(0);" onclick="SearchOldProduct(' + prevPage + ')">&laquo;</a></li>';
	            str = str + '<li><a href="javascript:void(0);">' + page + '</a></li>';
	            str = str + '<li><a href="javascript:void(0);" onclick="SearchOldProduct(' + nextPage + ')">&raquo;</a></li>';
	        }
	    }
	    $("#ulPerPageSearchrows li").remove();
	    $("#ulPerPageSearchrows").append(str);

	    if (totalPage == 1) {
	        $("#ulPerPageSearchrows").hide();
	    }
	    else {
	        $("#ulPerPageSearchrows").show();
	    }
    }
}

function SearchOldProduct_Complete(data,page,record){
    data = JSON.parse(data);
    if(data.Return == 1){
    	var str="";
       
    	   for (var i = 0; i < data.Value.length; i++) {
            var link="xequasudung/"+data.Value[i].Keyword+"-"+data.Value[i].CarType+"-"+data.Value[i].id+"";
        	str+="<div  class='col-sm-6 col-md-4 oc-rows'";
            str+="<div class='explore-item-wrapper' >";
            str+="<div class='section-intro' style='box-shadow: 0 2px 3px rgba(0, 0, 0, .38);background-color: #e1e2e4; color:#121312 ! important; padding-left: 10px ! important; '>";
            str+="<div class='row'>";
            str+="<p class='explore-item-heading' style='color: #121312 ! important; margin:5px 0 ! important; font-size: 18px ! important ; letter-spacing: -1px;'>"+data.Value[i].Title+" - "+data.Value[i].YearOf+"</p>";
            str+="<div class='col-xs-6 col-md-6'><span style='font-weight:bold ! important;'>Người bán:</span><span> "+data.Value[i].SaleTyle+" </span></div>";
            if (data.Value[i].Status == 1 || data.Value[i].Status === 1){
                str+="<div class='col-xs-6 col-md-6' style='text-align: right! important;''><span style='font-weight:bold ! important;'>Tình trạng:</span><span style='font-weight:none;'> Mới về</span></div>";
            }if(data.Value[i].Status == 0 || data.Value[i].Status === 0){
                str+="<div class='col-xs-6 col-md-6' style='text-align: right! important;''><span style='font-weight:bold ! important;'>Tình trạng:</span><span style='font-weight:none;'> Đã bán</span></div>";
            }if(data.Value[i].Status == 2 || data.Value[i].Status === 2){
                str+="<div class='col-xs-6 col-md-6' style='text-align: right! important;''><span style='font-weight:bold ! important;'>Tình trạng:</span><span style='font-weight:none;'> Ưu đãi</span></div>";
            }
            str+="</div>";
            str+="</div>";
            str+="<div class='explore-item-option' style='margin-bottom: 10px ! important; box-shadow: 0 2px 3px rgba(0, 0, 0, .38);'>";
            str+="<a href='"+link+"'  class='explore-item-thumb-link explore-image-overlay' style='border-bottom:0px ! important; margin-bottom: 0px !important'>";
            str+="<picture lazyload='true' class='tcom-picture'>";
            str+="<img  src='"+data.Value[i].Image+"' class='explore-item-img'>";
            str+="</picture>";
            str+="</a>"; 
            
            str+="<div class='explore-item-content' style='padding-left: 10px;padding-right: 5px;padding-top: 5px; '>";
            str+="<div></div>";
            str+="<div class='explore-item-copy' style='text-align: left ! important;'>";
            str+="<span  class='explore-item-category' style='padding-left: 0px ! important; margin-top: 5px ! important;margin-bottom: px ! important;'>";
            str+="<span class='col-xs-6 col-sm-6 col-md-6' style='color: #121213; margin-bottom: 5px;'><i class='fa'><img  src='images/icon/icon_oc08.png' alt=''></i>"+data.Value[i].Fuel+"</span>";
            str+="<span class='col-xs-6 col-sm-6 col-md-6' style='color: #121213; margin-bottom: 5px;'><i class='fa'><img  src='images/icon/icon_oc03.png' alt=''></i>"+data.Value[i].NumberOfKilometers+"</span>";
            str+="<span class='col-xs-6 col-sm-6 col-md-6' style='color: #121213; margin-bottom: 5px;'><i class='fa'><img  src='images/icon/icon_oc15.png' alt=''></i>"+data.Value[i].Engine+"</span>";
            str+="<span class='col-xs-6 col-sm-6 col-md-6' style='color: #121213; margin-bottom: 5px;'><i class='fa'><img  src='images/icon/icon_oc05.png' alt=''></i>"+data.Value[i].CarType+"</span>";
            str+="<span class='col-xs-6 col-sm-6 col-md-6' style='color: #121213; margin-bottom: 5px;'><i class='fa'><img  src='images/icon/icon_oc06.png' alt=''></i>"+data.Value[i].Color+"</span>";
            str+="<span class='col-xs-6 col-sm-6 col-md-6' style='color: #121213; margin-bottom: 5px;'><i class='fa'><img  src='images/icon/icon_oc09.png' alt=''></i>"+data.Value[i].Gear+"</span>";
        	str+="</span>";
        	str+="</div>";
        	str+="</div>";
        	str+="<div class='section-intro' style='text-align: center ! important;'>";
        	var price= Math.floor(data.Value[i].Price/1000000);
            str+="<button class='btn btn-block btn-default ' style='color:red;'><b><span class='format-number'>"+price+"</span></b>  Triệu</button>"
            // str+="<a href='"+link+"' data-content-title='' data-action='Read More'  class='btn btn-block btn-default'><span style='top:5px;padding-top: 10px ! important ; margin-bottom: 20px ! important;'>"+price+" TR</span></a>";
        	// str+="<a type='button' class='btn' style='background: #d08411; text-align: center;'><span style='top:5px;padding-top: 10px ! important ; margin-bottom: 20px ! important;'>"+price+" TR</span></a>";
        	str+="</div>";
        	str+="</div>";
        	str+="</div>";
        	str+="</div>";
        }
        
        
	    $('#rowOldCar').children().remove();
	    $('#rowOldCar').append(str);

	    var totalRecord = parseInt(data.Total[0].Total);
	    var remainder = totalRecord % record;
	    var totalPage = (totalRecord - remainder) / record;
	    if (remainder > 0) {
	        totalPage = totalPage + 1;
	    }
	    var nextPage = page +1;
	    var prevPage = page -1; 



	    if (page == 1) {
	        str = '<li><a href="javascript:void(0);">1</a></li>';
	        str = str + '<li><a href="javascript:void(0);" onclick="SearchOldProduct(' + nextPage + ')">&raquo;</a></li>';
	    }
	    else {
	        if (page == totalPage) {
	            str = '<li><a href="javascript:void(0);" onclick="SearchOldProduct(' + prevPage + ')">&laquo;</a></li>';
	            str = str + '<li><a href="javascript:void(0);">' + page + '</a></li>';
	        }
	        else {
	            str = '<li><a href="javascript:void(0);" onclick="SearchOldProduct(' + prevPage + ')">&laquo;</a></li>';
	            str = str + '<li><a href="javascript:void(0);">' + page + '</a></li>';
	            str = str + '<li><a href="javascript:void(0);" onclick="SearchOldProduct(' + nextPage + ')">&raquo;</a></li>';
	        }
	    }
	    $("#ulPerPageSearch li").remove();
	    $("#ulPerPageSearch").append(str);

	    if (totalPage == 1) {
	        $("#ulPerPageSearch").hide();
	    }
	    else {
	        $("#ulPerPageSearch").show();
	    }
    }
}

function OneRow(){
    $('#divThreeRow').toggle('appear'); 
    $('#divOneRow').hide(); 
    $('#btnglyphicon-th').attr('disabled','disabled');
    $('#btnglyphicon-th-list').removeAttr('disabled');
}
function ThreeRow(){
    $('#divOneRow').toggle('appear'); 
    $('#divThreeRow').hide();
    $('#btnglyphicon-th-list').attr('disabled','disabled');
    $('#btnglyphicon-th').removeAttr('disabled');
}

jQuery.fn.ForceNumericOnly =
function () {
    return this.each(function () {
        $(this).keydown(function (e) {
            var key = e.charCode || e.keyCode || 0;
            return (
                key == 8 ||
                key == 9 ||
                key == 46 ||
                key == 110 ||
                key == 190 ||
                (key >= 35 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};