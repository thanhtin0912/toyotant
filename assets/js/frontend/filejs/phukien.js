$(document).ready(function(){  
    GetALLCarCommonCode();
    SearchAccessories(1);
    $("#selProductGroup").bind("change",function()
    {
        GetReImageCarLeft();
        SearchAccessories(1);
        $('.PriceNow').number( true,0);
    });

    

    $('.PriceNow').number( true,0);
    $('.GetAccessories input:checkbox').click(function() {
        $('.GetAccessories input:checkbox').not(this).prop('checked', false);
    });
    
});


function FotmatNumberAfterSearch(){
    SearchAccessories(1);
    $('.PriceNow').number( true,0);
}

var lstImageLeft=[];
function GetALLCarCommonCode(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetALLCarCommonCode',
        data: {},           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                lstImageLeft = data.Value;  
                var str="<option value='' >Tất cả</option>";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<option value='"+data.Value[i].CommonId+"' >"+data.Value[i].StrValue1+"</option>";
                }
                $('#selProductGroup').children().remove();
                $('#selProductGroup').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function GetReImageCarLeft(){
  var carID = $("#selProductGroup").val();
  for( var i = 0 ; i<lstImageLeft.length;i++)
  {
    if(carID==lstImageLeft[i].CommonId)
    {   
        $("#imgCarSelected").attr("src",lstImageLeft[i].StrValue3);
        ;
        break;
    }
  }
}


function SearchAccessories(page){
    
    var Brief = '';
    var ProductID = $('#selProductGroup').val();
    var Catalog = $('#txtAccessoriestoPick').val();
    var record = 12;

    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/SearchAccessories',
        data: {
            Brief                       : Brief,
            ProductID                   : ProductID,
            Catalog                     : Catalog,
            currPage                    : page,
            record                      : record
        },           
        success: function(data) { 
            SearchAccessories_Complete(data,page,record);
        },
        error: function () {
        },
        async:false ,       
    });
}



function SearchAccessories_Complete(data,page,record){
    data = JSON.parse(data);
    if(data.Return == 1){
        var str="";
        for (var i = 0; i < data.Value.length; i++) {
            var giacu= data.Value[i].PriceNow;
            var giamoi= data.Value[i].PriceDiscount
            var link="phu-kien-chi-tiet/"+data.Value[i].KeyWord+"-"+data.Value[i].ProductID+"-"+data.Value[i].Catalog+"-"+data.Value[i].id+"";
            str+="<div class='col-xs-12 col-sm-4  col-md-3 ' style=' padding-right:10px ! important; margin-bottom: 10px ! important; '>";
            str+="<div class='product-img product-img-brd'>";
            str+="<a href='"+link+"'><img class='full-width img-responsive' src='"+data.Value[i].Image+"' alt='"+data.Value[i].Brief+"'></a>";
            // str+="<a class='add-to-cart' href='"+link+"'><i class='fa fa-shopping-cart'></i>Chi tiết</a>";
                if(data.Value[i].Status == 1){
                    str+="";
                }else if(data.Value[i].Status == 2){
                    str+="<div class='shop-rgba-red rgba-banner'>Ưu đãi</div>";
                }else if(data.Value[i].Status == 3){
                    str+="<div class='shop-rgba-dark-green rgba-banner'>Mới</div>";
                }
            str+="</div>";
            str+="<div class='product-description product-description-brd'>";
            str+="<div class='overflow-h margin-bottom-5'>";
            
            str+="<h4 class='title-price' style='height: 45px; margin-bottom: 5px;font-weight: bold; border-bottom: 1px solid #ccc;'><a href='"+link+"'>"+data.Value[i].Brief+"</a></h4>";
            str+="<div class='row' >";

            str+="<p class='title-price' style='font-weight:bold;'><span class='PriceNow'>"+data.Value[i].PriceDiscount+"</span>  VNĐ</p>";
            if (giacu == giamoi){
                 str+="<p>&nbsp;</p>";
            }else{
                str+="<p class='title-price line-through' style='font-weight:bold; font-size:80%'><span class='PriceNow'>"+data.Value[i].PriceNow+"</span>  VNĐ</p>";
            }
            
             
            str+="</div>";
            str+="</div>";
            // str+="<ul class='list-inline product-ratings'>";
            //     for (var j = 0; j < data.Value[i].Mark; j++) {
            //         str+="<li><i class='rating-selected fa fa-star'></i></li>";
            //     }
            //     for (var h = 0; h < (5 - (data.Value[i].Mark)); h++) {
            //         str+="<li><i class='rating fa fa-star'></i></li>";
            //     }
            // str+="</ul>";
            str+="</div>";
            str+="</div>";
            $('.PriceNow').number( true,0);         
        }
        
        // $('.PriceNow').number( true,0);
        
        $('#divContentAccessories').children().remove();
        $('#divContentAccessories').append(str);

        var totalRecord = parseInt(data.Total[0].Total);
        var remainder = totalRecord % record;
        var totalPage = (totalRecord - remainder) / record;
        if (remainder > 0) {
            totalPage = totalPage + 1;
        }
        var nextPage = page +1;
        var prevPage = page -1; 

        $('#spTotal').html(totalRecord);


        if (page == 1) {
            str = '<li><a href="javascript:void(0);">1</a></li>';
            str = str + '<li><a href="javascript:void(0);" onclick="SearchAccessories(' + nextPage + ')">&raquo;</a></li>';
        }
        
        else {
            if (page == totalPage) {
                str = '<li><a href="javascript:void(0);" onclick="SearchAccessories(' + prevPage + ')">&laquo;</a></li>';
                str = str + '<li><a href="javascript:void(0);">' + page + '</a></li>';
            }
            else {
                str = '<li><a href="javascript:void(0);" onclick="SearchAccessories(' + prevPage + ')">&laquo;</a></li>';
                str = str + '<li><a href="javascript:void(0);">' + page + '</a></li>';
                str = str + '<li><a href="javascript:void(0);" onclick="SearchAccessories(' + nextPage + ')">&raquo;</a></li>';
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
    $('.PriceNow').number( true,0);
}
