$(document).ready(function(){  

    $("#selGroupCarID").bind("change",function()
    {
       GetCarOfGroup();
       $("#selCarID").removeAttr('disabled');
    });

    $("#selCarID").bind("change",function()
    {
       GetDataCarWithID();
    });
    GetALLInsuranceToCompare1();
    GetALLInsuranceToCompare2();
});


function GetCarOfGroup(){
   var GroupCarToyotaID = $("#selGroupCarID").val();
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetToyotaCarAndGroupCar',
        data: {
          GroupCarToyotaID : GroupCarToyotaID
        },           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){  
                var str="<option value='' >Vui lòng chọn</option>";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<option value='"+data.Value[i].CommonId+"' title='"+data.Value[i].StrValue1+"'>"+data.Value[i].ProductName+"</option>";
                }
                $('#selCarID').children().remove();
                $('#selCarID').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function GetDataCarWithID(){
   var id = $("#selCarID").val();
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetDataProductWithID',
        data: {
          id : id
        },           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){  
                $("#ImgCar").attr("src",data.Value[0].IMG);
                $("#txtPriceLate").html(data.Value[0].PriceLate);
                $("#inputPriceLate").val(data.Value[0].PriceLate);
                // $("#inputPriceNow").val(listAllCar[i].PriceNow);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
  $("#txtPriceLate").number( true,0);
}

var lstDataINS1=[];
function GetALLInsuranceToCompare1(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetDataAllInsurance',
        data: {},           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                lstDataINS1 = data.Value;  

                var str="<option value='' >Chọn Bảo Hiểm 1</option>";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<option value='"+data.Value[i].InsuranceID+"' >"+data.Value[i].InsuranceName+"</option>";
                }
                $('#selInsuranceToCompare1').children().remove();
                $('#selInsuranceToCompare1').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetDataInsuranceToCompare1(){

    var InsID = $("#selInsuranceToCompare1").val();
    var PriceCar = $("#inputPriceLate").val();
    for( var i = 0 ; i<lstDataINS1.length;i++)
    {
        if(InsID==lstDataINS1[i].InsuranceID)
        {   
            $("#imglogoINS1").attr("src",lstDataINS1[i].ImageURL);
            $("#spanPrice").html(lstDataINS1[i].Price);
            $("#spanStrValue1").html(lstDataINS1[i].StrValue1);
            $("#spanStrValue2").html(lstDataINS1[i].StrValue2);
            $("#spanStrValue3").html(lstDataINS1[i].StrValue3);
            $("#spanStrValue4").html(lstDataINS1[i].StrValue4);
            $("#spanStrValue5").html(lstDataINS1[i].StrValue5);
            $("#spanStrValue6").html(lstDataINS1[i].StrValue6);
            $("#spanStrValue7").html(lstDataINS1[i].StrValue7);
            $("#spanStrValue8").html(lstDataINS1[i].StrValue8);
            $("#spanStrValue9").html(lstDataINS1[i].StrValue9);
            $("#spanStrValue10").html(lstDataINS1[i].StrValue10);
            $("#spanStrValue11").html(lstDataINS1[i].StrValue11);
            $("#spanStrValue12").html(lstDataINS1[i].StrValue12);
            $("#imgProcessINS1").attr("src",lstDataINS1[i].LinkURL);
            break;
        }
      }
    var Percen = $("#spanPrice").html();
    var PhiBH = PriceCar * (Percen/100);
    $("#spanPhiBH").html(PhiBH);
    $("#spanPhiBH").number( true,0);
}

var lstDataINS2=[];
function GetALLInsuranceToCompare2(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetDataAllInsurance',
        data: {},           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                lstDataINS2 = data.Value;  
                var str="<option value='' >Chọn Bảo Hiểm 2</option>";
                for (var i = 0; i < data.Value.length; i++) {
                    str+="<option value='"+data.Value[i].InsuranceID+"' >"+data.Value[i].InsuranceName+"</option>";
                }
                $('#selInsuranceToCompare2').children().remove();
                $('#selInsuranceToCompare2').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetDataInsuranceToCompare2(){

  var InsID = $("#selInsuranceToCompare2").val();
  var PriceCar = $("#inputPriceLate").val();
  for( var i = 0 ; i<lstDataINS2.length;i++)
  {
    if(InsID==lstDataINS2[i].InsuranceID)
    {   

        $("#imglogoINS1Com").attr("src",lstDataINS2[i].ImageURL);
        $("#spanPriceCom").html(lstDataINS2[i].Price);
        $("#spanStrValue1Com").html(lstDataINS2[i].StrValue1);
        $("#spanStrValue2Com").html(lstDataINS2[i].StrValue2);
        $("#spanStrValue3Com").html(lstDataINS2[i].StrValue3);
        $("#spanStrValue4Com").html(lstDataINS2[i].StrValue4);
        $("#spanStrValue5Com").html(lstDataINS2[i].StrValue5);
        $("#spanStrValue6Com").html(lstDataINS2[i].StrValue6);
        $("#spanStrValue7Com").html(lstDataINS2[i].StrValue7);
        $("#spanStrValue8Com").html(lstDataINS2[i].StrValue8);
        $("#spanStrValue9Com").html(lstDataINS2[i].StrValue9);
        $("#spanStrValue10Com").html(lstDataINS2[i].StrValue10);
        $("#spanStrValue11Com").html(lstDataINS2[i].StrValue11);
        $("#spanStrValue12Com").html(lstDataINS2[i].StrValue12);
        $("#imgProcessINS1Com").attr("src",lstDataINS2[i].LinkURL);

        break;
    }
  }
  var Percen = $("#spanPriceCom").html();
  var PhiBH = PriceCar * (Percen/100);
  $("#spanPhiBHCom").html(PhiBH);
  $("#spanPhiBHCom").number( true,0);
    
}

function showCompareInsurrance(){
    var CheckGroupcar           = $('#selGroupCarID').val();
    var CheckCarID              = $('#selCarID').val();
    var CheckINS1       = $('#selInsuranceToCompare1').val();
    var CheckINS2       = $('#selInsuranceToCompare2').val();
 
    if(CheckGroupcar=="" || CheckGroupcar==="")
    {
    alert("Vui lòng chọn mẫu xe thông tin !");
    return;
    }
    if(CheckCarID=="" || CheckCarID==="")
    {
    alert("Vui lòng chọn dòng xe thông tin !");
    return;
    }
    if(CheckINS1=="" || CheckINS1==="")
    {
    alert("Vui lòng chọn bảo hiểm thứ nhất thông tin !");
    return;
    }

    if(CheckINS2=="" || CheckINS2==="")
    {
    alert("Vui lòng chọn bảo hiểm thứ hai thông tin !");
    return;
    }

    if(CheckINS1==CheckINS2 || CheckINS2==CheckINS1)
    {
    alert("Vui lòng không chọn 2 bảo hiểm giống nhau !");
    return;
    }

    GetDataInsuranceToCompare1();
    GetDataInsuranceToCompare2();
    $('#divshowcompareINS').show();
}