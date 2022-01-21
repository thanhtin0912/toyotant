$(document).ready(function(){  
    GetALLCarToCompare();
    GetALLCarToCompare1();
    GetALLCar();
    
    $(".PriceNow").number( true,0);
    $("#inputPriceNow").number( true,0);
    $("#txtCarType").val('toaltis20VS');
    $("#txtCarTypeToCompare1").val('toaltis20VS');
    
    chiphidangky();
    $("#SelEnemy").bind("change",function()
    {
       var name = $("#SelEnemy option:selected").text();
       $('.txtEnemy').html(name);
       GetDataEnemyToChange();

    });
    $("#txtCarType").bind("change",function()
    {
       GetReDataCarAfterSelect();
       $('.PriceNow').number( true,0);
       $("#inputPriceNow").number( true,0);
       chiphidangky();
    });
    $("#txtCarTypeToCompare").bind("change",function()
    {
       var name = $( "#txtCarTypeToCompare option:selected" ).text();
       $('.txtEnemy').html(name);
       GetReImageCarRight();

    });
    $("#txtCarTypeToCompare1").bind("change",function()
    {   
        var name = $("#txtCarTypeToCompare1 option:selected").text();
        $('.txtToyota').html(name);
        GetReImageCarLeft();
        GetEnemyCompareForProduct();
    });

    GetEnemyCompareForProduct();
});

function showcompare(){
    GetSpecEnemyCompareKT();
    GetSpecEnemyCompareVH();
    GetSpecEnemyCompareAT();
    GetSpecEnemyCompareTM();
    GetSpecEnemyCompareCP();
    GetSpecEnemyCompareOT();
    $("#checkshow1").show(500);
    $("#checkshow").hide(500);
    // $("#checkshow1").show();
}

   
function GetDataEnemyToChange(){
    var EnemyID =  $('#SelEnemy').val();
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetDataEnemyToChange',
        data: {
            EnemyID           : EnemyID
        }, 
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){  
                $("#ImgEnemyChange").attr("src",data.Value[0].StrValue3);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
var lstImageLeft=[];
function GetALLCarToCompare1(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetALLCarAndGroupCar',
        data: {},           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                lstImageLeft = data.Value;  
                var str="<option value='' >Chọn mẫu xe Toyota</option>";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<option value='"+data.Value[i].ProductID+"' title='"+data.Value[i].StrValue1+"'>"+data.Value[i].ProductName+"</option>";
                }
                $('#txtCarTypeToCompare1').children().remove();
                $('#txtCarTypeToCompare1').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function GetEnemyCompareForProduct(){
    var EnemyGroup = $('#txtCarTypeToCompare1').val();
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetEnemyCompareForProduct',
        data: {EnemyGroup :  EnemyGroup},           
        success: function(data) { 
            data = JSON.parse(data);
            var str="";
            if(data.Value.length == 0)
            {
                str+="<option value=''>--- Không có mẫu xe ---</option>";
            }
            else
            {
                if(data.Return == 1){ 
                var str="<option value=''>--- Vui lòng chọn hãng khác ---</option>";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<option value='"+data.Value[i].CommonId+"'>"+data.Value[i].StrValue2+"</option>";
                }
                
                }
            }
            $('#SelEnemy').children().remove();
            $('#SelEnemy').append(str);
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function GetReImageCarLeft(){
  var carID = $("#txtCarTypeToCompare1").val();
  for( var i = 0 ; i<lstImageLeft.length;i++)
  {
    if(carID==lstImageLeft[i].ProductID)
    {   
        $("#ImgEnemyChange1").attr("src",lstImageLeft[i].IMG);
        ;
        break;
    }
  }
}


function GetSpecEnemyCompareKT(){

    var ProductID = $("#txtCarTypeToCompare1").val();
    var GetEnemy =  $('#SelEnemy').val();
    var getToyota = $('#txtCarTypeToCompare').val();
    var CompareProduct ='';
    if(GetEnemy=='' || GetEnemy===''){
        CompareProduct = getToyota;
    }else{
        CompareProduct = GetEnemy;
    }
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecEnemyCompare',
        data: {
            ProductID           : ProductID,
            CompareProduct      : CompareProduct,
            CompareType         : 40401
        }, 

        success: function(data) { 

            data = JSON.parse(data);

            if(data.Return == 1){  
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr class='dataTR_mobile'><td colspan='3' class='category'>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td></tr>";
                    str+="<tr class='dataTR_destock'>";
                    str+="<td>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td>";
                    str+="<td>";
                    if (data.Value[i].Status == 1){
                        str+="<div class='advantage'><svg class='icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 150 100' enable-background='new 0 0 150 100'><path fill-rule='evenodd' clip-rule='evenodd' d='M134.524 0L63.096 71.432l-47.62-47.62L1.19 38.094l47.622 47.62h-.003L63.095 100 77.38 85.716l71.43-71.428z'></path></svg>";
                        str+=""+data.Value[i].StrValueProduct+"</div>";
                    }else{
                        str+=" "+data.Value[i].StrValueProduct+" ";
                    }
                    str+="</td>";

                    str+="<td>";
                    str+=" "+data.Value[i].StrValueCompareProduct+" ";
                    str+="</td>";
                    str+="</tr>"; 
                }
                $('#ListSearch_KT').children().remove();
                $('#ListSearch_KT').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetSpecEnemyCompareVH(){
    var ProductID = $("#txtCarTypeToCompare1").val();
    var GetEnemy =  $('#SelEnemy').val();
    var getToyota = $('#txtCarTypeToCompare').val();
    var CompareProduct ='';
    if(GetEnemy=='' || GetEnemy===''){
        CompareProduct = getToyota;
    }else{
        CompareProduct = GetEnemy;
    }
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecEnemyCompare',
        data: {
            ProductID           : ProductID,
            CompareProduct      : CompareProduct,
            CompareType         : 40402
        },           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr class='dataTR_mobile'><td colspan='3' class='category'>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td></tr>";
                    str+="<tr class='dataTR_destock'>";
                    str+="<td>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td>";
                    str+="<td>";
                    if (data.Value[i].Status == 1){
                        str+="<div class='advantage'><svg class='icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 150 100' enable-background='new 0 0 150 100'><path fill-rule='evenodd' clip-rule='evenodd' d='M134.524 0L63.096 71.432l-47.62-47.62L1.19 38.094l47.622 47.62h-.003L63.095 100 77.38 85.716l71.43-71.428z'></path></svg>";
                        str+=""+data.Value[i].StrValueProduct+"</div>";
                    }else{
                        str+=" "+data.Value[i].StrValueProduct+" ";
                    }
                    str+="</td>";

                    str+="<td>";
                    str+=" "+data.Value[i].StrValueCompareProduct+" ";
                    str+="</td>";
                    str+="</tr>"; 
                }
                $('#ListSearch_VH').children().remove();
                $('#ListSearch_VH').append(str);
                }
            },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetSpecEnemyCompareAT(){
    var ProductID = $("#txtCarTypeToCompare1").val();
    var GetEnemy =  $('#SelEnemy').val();
    var getToyota = $('#txtCarTypeToCompare').val();
    var CompareProduct ='';
    if(GetEnemy=='' || GetEnemy===''){
        CompareProduct = getToyota;
    }else{
        CompareProduct = GetEnemy;
    }
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecEnemyCompare',
        data: {
            ProductID           : ProductID,
            CompareProduct      : CompareProduct,
            CompareType         : 40403
        },           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr class='dataTR_mobile'><td colspan='3' class='category'>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td></tr>";
                    str+="<tr class='dataTR_destock'>";
                    str+="<td>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td>";
                    str+="<td>";
                    if (data.Value[i].Status == 1){
                        str+="<div class='advantage'><svg class='icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 150 100' enable-background='new 0 0 150 100'><path fill-rule='evenodd' clip-rule='evenodd' d='M134.524 0L63.096 71.432l-47.62-47.62L1.19 38.094l47.622 47.62h-.003L63.095 100 77.38 85.716l71.43-71.428z'></path></svg>";
                        str+=""+data.Value[i].StrValueProduct+"</div>";
                    }else{
                        str+=" "+data.Value[i].StrValueProduct+" ";
                    }
                    str+="</td>";

                    str+="<td>";
                    str+=" "+data.Value[i].StrValueCompareProduct+" ";
                    str+="</td>";
                    str+="</tr>"; 
                }
                $('#ListSearch_AT').children().remove();
                $('#ListSearch_AT').append(str);
                }
            },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetSpecEnemyCompareTM(){
    var ProductID = $("#txtCarTypeToCompare1").val();
    var GetEnemy =  $('#SelEnemy').val();
    var getToyota = $('#txtCarTypeToCompare').val();
    var CompareProduct ='';
    if(GetEnemy=='' || GetEnemy===''){
        CompareProduct = getToyota;
    }else{
        CompareProduct = GetEnemy;
    }
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecEnemyCompare',
        data: {
            ProductID           : ProductID,
            CompareProduct      : CompareProduct,
            CompareType         : 40404
        },           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr class='dataTR_mobile'><td colspan='3' class='category'>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td></tr>";
                    str+="<tr class='dataTR_destock'>";
                    str+="<td>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td>";
                    str+="<td>";
                    if (data.Value[i].Status == 1){
                        str+="<div class='advantage'><svg class='icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 150 100' enable-background='new 0 0 150 100'><path fill-rule='evenodd' clip-rule='evenodd' d='M134.524 0L63.096 71.432l-47.62-47.62L1.19 38.094l47.622 47.62h-.003L63.095 100 77.38 85.716l71.43-71.428z'></path></svg>";
                        str+=""+data.Value[i].StrValueProduct+"</div>";
                    }else{
                        str+=" "+data.Value[i].StrValueProduct+" ";
                    }
                    str+="</td>";

                    str+="<td>";
                    str+=" "+data.Value[i].StrValueCompareProduct+" ";
                    str+="</td>";
                    str+="</tr>"; 
                }
                $('#ListSearch_TM').children().remove();
                $('#ListSearch_TM').append(str);
                }
            },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetSpecEnemyCompareCP(){
    var ProductID = $("#txtCarTypeToCompare1").val();
    var GetEnemy =  $('#SelEnemy').val();
    var getToyota = $('#txtCarTypeToCompare').val();
    var CompareProduct ='';
    if(GetEnemy=='' || GetEnemy===''){
        CompareProduct = getToyota;
    }else{
        CompareProduct = GetEnemy;
    }
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecEnemyCompare',
        data: {
            ProductID           : ProductID,
            CompareProduct      : CompareProduct,
            CompareType         : 40405
        },           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr class='dataTR_mobile'><td colspan='3' class='category'>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td></tr>";
                    str+="<tr class='dataTR_destock'>";
                    str+="<td>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td>";
                    str+="<td>";
                    if (data.Value[i].Status == 1){
                        str+="<div class='advantage'><svg class='icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 150 100' enable-background='new 0 0 150 100'><path fill-rule='evenodd' clip-rule='evenodd' d='M134.524 0L63.096 71.432l-47.62-47.62L1.19 38.094l47.622 47.62h-.003L63.095 100 77.38 85.716l71.43-71.428z'></path></svg>";
                        str+=""+data.Value[i].StrValueProduct+"</div>";
                    }else{
                        str+=" "+data.Value[i].StrValueProduct+" ";
                    }
                    str+="</td>";

                    str+="<td>";
                    str+=" "+data.Value[i].StrValueCompareProduct+" ";
                    str+="</td>";
                    str+="</tr>"; 
                }
                $('#ListSearch_CP').children().remove();
                $('#ListSearch_CP').append(str);
                }
            },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetSpecEnemyCompareOT(){
    var ProductID = $("#txtCarTypeToCompare1").val();
    var GetEnemy =  $('#SelEnemy').val();
    var getToyota = $('#txtCarTypeToCompare').val();
    var CompareProduct ='';
    if(GetEnemy=='' || GetEnemy===''){
        CompareProduct = getToyota;
    }else{
        CompareProduct = GetEnemy;
    }
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecEnemyCompare',
        data: {
            ProductID           : ProductID,
            CompareProduct      : CompareProduct,
            CompareType         : 40406
        },           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr class='dataTR_mobile'><td colspan='3' class='category'>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td></tr>";
                    str+="<tr class='dataTR_destock'>";
                    str+="<td>"+data.Value[i].Content+"<sup data-disclaimer='msrp_total'></sup></td>";
                    str+="<td>";
                    if (data.Value[i].Status == 1){
                        str+="<div class='advantage'><svg class='icon' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 150 100' enable-background='new 0 0 150 100'><path fill-rule='evenodd' clip-rule='evenodd' d='M134.524 0L63.096 71.432l-47.62-47.62L1.19 38.094l47.622 47.62h-.003L63.095 100 77.38 85.716l71.43-71.428z'></path></svg>";
                        str+=""+data.Value[i].StrValueProduct+"</div>";
                    }else{
                        str+=" "+data.Value[i].StrValueProduct+" ";
                    }
                    str+="</td>";

                    str+="<td>";
                    str+=" "+data.Value[i].StrValueCompareProduct+" ";
                    str+="</td>";
                    str+="</tr>"; 
                }
                $('#ListSearch_OT').children().remove();
                $('#ListSearch_OT').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

var listAllCar=[];
function GetALLCar(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetALLCar',
        data: {},           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                var lst = data.Value;
                listAllCar=data.Value;  
                var str="<option value=''>--- Vui lòng chọn ---</option>";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<option value='"+data.Value[i].ProductID+"'>"+data.Value[i].ProductName+"</option>";
                }
                $('#txtCarType').children().remove();
                $('#txtCarType').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });

}
var lstDataToyota=[];
function GetALLCarToCompare(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetALLCar',
        data: {},           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                lstDataToyota = data.Value;  
                var str="<option value='' disabled selected>Choose mẫu xe Toyota</option>";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<option value='"+data.Value[i].ProductID+"'>"+data.Value[i].ProductName+"</option>";
                }
                $('#txtCarTypeToCompare').children().remove();
                $('#txtCarTypeToCompare').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });

}
function GetReImageCarRight(){

  var carID = $("#txtCarTypeToCompare").val();
  for( var i = 0 ; i<lstDataToyota.length;i++)
  {
    if(carID==lstDataToyota[i].ProductID)
    {   
        $("#ImgEnemyChange").attr("src",lstDataToyota[i].IMG);
        ;
        break;
    }
  }
}



function GetReDataCarAfterSelect(){

  var carID = $("#txtCarType").val();
 
  for( var i = 0 ; i<listAllCar.length;i++)
  {
    if(carID==listAllCar[i].ProductID)
    {   

        $("#imgCarSelected").attr("src",listAllCar[i].IMG);
        $("#txtPriceCarLate").html(listAllCar[i].PriceNow);
        $("#inputPriceNow").val(listAllCar[i].PriceNow);
        break;
    }
  }
}

function dutoan(){
    //gia ban
    var giaban         = $('#inputPriceNow').val();
    //tien tra truoc tinh theo %
    var sotientratruoc =$('#sotientratruoc').val();
    //lai suat theo ngan hang
    var laisuat        = $('#laisuattindung').val();
    //so thang tra lai 
    var thangtralai    = $('#thangtindung').val();
    $("#Sothang").html(thangtralai);
    
    var tienno = giaban - ((sotientratruoc/100)*giaban);
    var percent = laisuat/100;
    var lainam = tienno * (percent/12) * thangtralai;
    var laichenhlech = (tienno/thangtralai )* (percent/12);
    var khoantindung = tienno + lainam - (laichenhlech *thangtralai*(thangtralai-1))/2;
    var tindungtheothang = (tienno / thangtralai) +(tienno * (percent/12));

    $('#tindungthangdau').html(tindungtheothang);
    $('#tindungthangdau').number( true,0 );

    $('#Tiengocvalai').html(khoantindung);   
    $('#Tiengocvalai').number( true,0 );
    $('#downloadfile').show();
}

function importExcel() {
    var giaban         = $('#inputPriceNow').val();

    //tien tra truoc tinh theo %
    var sotientratruoc =$('#sotientratruoc').val();
    //lai suat theo ngan hang
    var laisuat        = $('#laisuattindung').val();
    //so thang tra lai 
    var thangtralai    = $('#thangtindung').val();

    var tienno = giaban - ((sotientratruoc/100)*giaban);
  
    $.ajax({
      type: "POST",
        url: url + 'excelController/index',
        data:{  laisuat             : laisuat,
                thangtralai         : thangtralai,
                tienno              : tienno
            }, 
        
        success:function(data){
            $("#mail-status").html(data);
            window.open('upload/dudoan.xls','_blank')
        },
        error:function (){}
    });
}

function chiphidangky() {
    var giaban         = $('#inputPriceNow').val();
    var phidangky = $('#inputPhidangky').val();
    var phidangkiem = $('#inputPhidangkiem').val();
    var BHTNnhansu = $('#inputPhiBHDSdansu').val();

    var phitruocba = (giaban*10)/100;
    var BHthanxe = (giaban*16)/1000;
    var fmphidangky = phidangky*1;
    var fmphidangkiem = phidangkiem*1;
    var fmBHTNnhansu = BHTNnhansu*1;

    var tongchiphidangkiem = phitruocba + fmphidangky + fmphidangkiem + fmBHTNnhansu + BHthanxe;


    $('#spPhitruocba').html(phitruocba); 
 
    $('#spPhiBHDSthanxe').html(BHthanxe); 
    $('#spTongPhiDangKiem').html(tongchiphidangkiem);

    $("#spPhitruocba").number(true,0);
    $("#spPhidangky").number(true,0);
    $("#spPhidangkiem").number(true,0);
    $("#spPhiBHDSdansu").number(true,0);
    $("#spPhiBHDSthanxe").number(true,0);
    $("#spTongPhiDangKiem").number(true,0);
    
}
function checkToyota()
{
    $("#divToyota1").show();
    $("#divToyota").show();
    $("#divEnemy").hide();
    $("#txtCarTypeToCompare").val('');
    $("#SelEnemy").val('');
    $("#btnCompare").show();

}

function checkEnemy()
{
    $("#divToyota1").show();
    $("#divToyota").hide();
    $("#divEnemy").show();
    $("#txtCarTypeToCompare").val('');
    $("#SelEnemy").val('');
    $("#btnCompare").show();
}

function checkshow1(){
    $("#checkshow1").hide();
    $("#checkshow").show();
}
function checkshow(){
    $("#checkshow").hide();
    $("#checkshow1").show();
    GetSpecEnemyCompareKT();
    GetSpecEnemyCompareVH();
    GetSpecEnemyCompareAT();
    GetSpecEnemyCompareTM();
    GetSpecEnemyCompareCP();
    GetSpecEnemyCompareOT();
}