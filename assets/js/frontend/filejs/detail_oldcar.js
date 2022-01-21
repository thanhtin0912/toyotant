$(document).ready(function(){  
    GetSpecForOldProductKT();
    GetSpecForOldProductDC();
    GetSpecForOldProductNGT();
    GetSpecForOldProductNOT();
    GetSpecForOldProductTN();
    GetSpecForOldProductVHCD();
    GetSpecForOldProductVHBD();
    $('.PriceNow').number( true,0);

});




function GetSpecForOldProductKT(){

    var ProductID = $("#spProductId").val();
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecForOldProduct',
        data: {
            ProductID           : ProductID,
            CompareType         : 41401
        },

        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr>";
                    str+="<th colspan='100%' class='group-title'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></th>";
                    str+="</tr>";
                    var OldCarID = $("#spProductId").val();
                    str+="<tr>";
                    str+="<td data-model='mg-column-0'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></td>";
                    if(data.Value[i].ProductID == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueProduct+"</div></td>"; 
                    } else if (data.Value[i].CompareProduct == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct+"</div></td>";
                    } else{
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct1+"</div></td>"; 
                    }
                    str+="</tr>";
                }
                $('#data40401').children().remove();
                $('#data40401').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

 
    

function GetSpecForOldProductDC(){

    var ProductID = $("#spProductId").val();
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecForOldProduct',
        data: {
            ProductID           : ProductID,
            CompareType         : 41402
        },

        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr>";
                    str+="<th colspan='100%' class='group-title'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></th>";
                    str+="</tr>";
                    var OldCarID = $("#spProductId").val();
                    str+="<tr>";
                    str+="<td data-model='mg-column-0'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></td>";
                    if(data.Value[i].ProductID == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueProduct+"</div></td>"; 
                    } else if (data.Value[i].CompareProduct == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct+"</div></td>";
                    } else{
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct1+"</div></td>"; 
                    }
                    str+="</tr>";
                }
                $('#data40402').children().remove();
                $('#data40402').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetSpecForOldProductNGT(){

    var ProductID = $("#spProductId").val();
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecForOldProduct',
        data: {
            ProductID           : ProductID,
            CompareType         : 41403
        },

        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr>";
                    str+="<th colspan='100%' class='group-title'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></th>";
                    str+="</tr>";
                    var OldCarID = $("#spProductId").val();
                    str+="<tr>";
                    str+="<td data-model='mg-column-0'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></td>";
                    if(data.Value[i].ProductID == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueProduct+"</div></td>"; 
                    } else if (data.Value[i].CompareProduct == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct+"</div></td>";
                    } else{
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct1+"</div></td>"; 
                    }
                    str+="</tr>";
                }
                $('#data40403').children().remove();
                $('#data40403').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function GetSpecForOldProductNOT(){

    var ProductID = $("#spProductId").val();
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecForOldProduct',
        data: {
            ProductID           : ProductID,
            CompareType         : 41404
        },

        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr>";
                    str+="<th colspan='100%' class='group-title'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></th>";
                    str+="</tr>";
                    var OldCarID = $("#spProductId").val();
                    str+="<tr>";
                    str+="<td data-model='mg-column-0'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></td>";
                    if(data.Value[i].ProductID == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueProduct+"</div></td>"; 
                    } else if (data.Value[i].CompareProduct == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct+"</div></td>";
                    } else{
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct1+"</div></td>"; 
                    }
                    str+="</tr>";
                }
                $('#data40404').children().remove();
                $('#data40404').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function GetSpecForOldProductTN(){

    var ProductID = $("#spProductId").val();
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecForOldProduct',
        data: {
            ProductID           : ProductID,
            CompareType         : 41405
        },

        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr>";
                    str+="<th colspan='100%' class='group-title'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></th>";
                    str+="</tr>";
                    var OldCarID = $("#spProductId").val();
                    str+="<tr>";
                    str+="<td data-model='mg-column-0'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></td>";
                    if(data.Value[i].ProductID == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueProduct+"</div></td>"; 
                    } else if (data.Value[i].CompareProduct == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct+"</div></td>";
                    } else{
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct1+"</div></td>"; 
                    }
                    str+="</tr>";
                }
                $('#data40405').children().remove();
                $('#data40405').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function GetSpecForOldProductVHCD(){

    var ProductID = $("#spProductId").val();
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecForOldProduct',
        data: {
            ProductID           : ProductID,
            CompareType         : 41406
        },

        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr>";
                    str+="<th colspan='100%' class='group-title'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></th>";
                    str+="</tr>";
                    var OldCarID = $("#spProductId").val();
                    str+="<tr>";
                    str+="<td data-model='mg-column-0'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></td>";
                    if(data.Value[i].ProductID == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueProduct+"</div></td>"; 
                    } else if (data.Value[i].CompareProduct == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct+"</div></td>";
                    } else{
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct1+"</div></td>"; 
                    }
                    str+="</tr>";
                }
                $('#data40406').children().remove();
                $('#data40406').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function GetSpecForOldProductVHBD(){

    var ProductID = $("#spProductId").val();
    $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetSpecForOldProduct',
        data: {
            ProductID           : ProductID,
            CompareType         : 41407
        },

        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<tr>";
                    str+="<th colspan='100%' class='group-title'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></th>";
                    str+="</tr>";
                    var OldCarID = $("#spProductId").val();
                    str+="<tr>";
                    str+="<td data-model='mg-column-0'><div class='warpper-collapse collapse'>"+data.Value[i].Content+"</div></td>";
                    if(data.Value[i].ProductID == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueProduct+"</div></td>"; 
                    } else if (data.Value[i].CompareProduct == OldCarID){
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct+"</div></td>";
                    } else{
                        str+="<td data-model='mg-column-1'><div class='warpper-collapse collapse'>"+data.Value[i].StrValueCompareProduct1+"</div></td>"; 
                    }
                    str+="</tr>";
                }
                $('#data40407').children().remove();
                $('#data40407').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function GetInfoCustomerToOldCar(){
      $('#lblShowInsertSuccess').hide();
      var FullName          = $('#txtCustomer').val();
      var Phone             = $('#txtPhone').val();
      var Email             = $('#txtEmail').val();
      var ForcusTitle       = $('#txtTitle').html();
      var Note              = $('#txtContent').val();
      if(FullName==''|| Phone==''|| Email==''){
        alert("Vui lòng nhập thông tin");
        return;
      }else{
        $.ajax({
            type: "POST",
            url: url + 'send_email/EmailFormCustomerOldCar',
            data:{  FullName          : FullName,
                    Phone             : Phone, 
                    Email             : Email, 
                    ForcusTitle       : ForcusTitle,
                    Note              : Note
                   
                }, 
            
            success:function(data){
                $("#mail-status").html(data);
                
            },
            error:function (){}
        });
    
    }
    $('#lblShowInsertSuccess').show(500);
}

