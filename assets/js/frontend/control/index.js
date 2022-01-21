$(document).ready(function(){  
    GetALLCar();
    GetALLCarToCompare1();
    GetALLCarToCompare2();
    GetALLCarToBooking();
    GetALLMaintenance();
    GetAllNewsWithLimit8();
    GetKhamphacacdongxe();

    // $('.start-date').datepicker({format: 'yyyy-mm-dd',});
    //lay danh sach cac xe toyota de xem gia nhan
    $(".txtCarType" ).bind("change",function()
    {
        GetDataCar();
        $('#ViewPrice').show();
        $('#lblvayTC').show();
    });
    // thay doi xem chi tiet bao duong  
    $("#Maintenancetype" ).bind("change",function()
    {
       
       GetDataMaintenance();

    });

    //lay danh sach cac xe toyota de so sanh 1
    $("#CompareCarType1" ).bind("change",function()
    {
      GetImgCompare1();
      $('#divimgCompare1').show();
  
    });
    //lay danh sach cac xe toyota de so sanh 2
    $("#CompareCarType2" ).bind("change",function()
    {
        GetImgCompare2();
        $('#divimgCompare2').show();
    });
    //
    
    $('#txtPriceNow').number( true,0);
    $('#txtPriceLate').number( true,0 );
    $('#txtPriceCarLate').number( true,0 );
    $('#txtPayMoney').number( true,0 );

    $("#start-date" ).bind("change",function()
    {
        

        CheckTimeSheetForToday();
        $('#Timesheet').show();
        $('#timetopick').val('');
        

    });
    
    $("#txtphonenumber").ForceNumericOnly();
    
});
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
                $('.txtCarType').children().remove();
                $('.txtCarType').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });

}
function GetDataCar()
{

  var carID = $(".txtCarType").val();
  var ProductName= $(".txtCarType").val();
  for( var i = 0 ; i<listAllCar.length;i++)
  {
    if(carID==listAllCar[i].ProductID)
    {   
        $("#imgCurrent").attr("src",listAllCar[i].IMG);
        $("#txtPriceNow").val(listAllCar[i].PriceNow);
        $("#txtPriceLate").val(listAllCar[i].PriceLate);
        $("#txtPriceCarLate").val(listAllCar[i].PriceLate);
        break;
    }
  }
}


var listAllCarCompare1=[];
function GetALLCarToCompare1(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetALLCarAndSpec',
        data: {},           
        success: function(data) { 
          data = JSON.parse(data);
            if(data.Return == 1){ 
              var lst = data.Value;
              listAllCarCompare1=data.Value;  
              var str="<option value=''>--- Vui lòng chọn ---</option>";
              for (var i = 0; i < data.Value.length; i++) {
                str+="<option value='"+data.Value[i].ProductID+"'>"+data.Value[i].ProductName+"</option>";
              }
                $('#CompareCarType1').children().remove();
                $('#CompareCarType1').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });

}
function GetImgCompare1()
{

  var carID = $("#CompareCarType1").val();
  for( var i = 0 ; i<listAllCarCompare1.length;i++)
  {
    if(carID==listAllCarCompare1[i].ProductID)
    {   
        $("#imgCompare1").attr("src",listAllCarCompare1[i].imageURL);
        $("#spProductName1").html(listAllCarCompare1[i].ProductName);
        $("#StrValue1_1").html(listAllCarCompare1[i].StrValue1);
        $("#StrValue2_1").html(listAllCarCompare1[i].StrValue2);
        $("#StrValue3_1").html(listAllCarCompare1[i].StrValue3);
        $("#StrValue4_1").html(listAllCarCompare1[i].StrValue4);
        $("#StrValue5_1").html(listAllCarCompare1[i].StrValue5);
        $("#StrValue6_1").html(listAllCarCompare1[i].StrValue6);
        $("#StrValue7_1").html(listAllCarCompare1[i].StrValue7);
        $("#StrValue8_1").html(listAllCarCompare1[i].StrValue8);
        $("#StrValue9_1").html(listAllCarCompare1[i].StrValue9);
        $("#StrValue10_1").html(listAllCarCompare1[i].StrValue10);
        $("#StrValue11_1").html(listAllCarCompare1[i].StrValue11);
        $("#StrValue12_1").html(listAllCarCompare1[i].StrValue12);
        $("#StrValue13_1").html(listAllCarCompare1[i].StrValue13);
        $("#StrValue14_1").html(listAllCarCompare1[i].StrValue14);
        $("#StrValue15_1").html(listAllCarCompare1[i].StrValue15);
        $("#StrValue16_1").html(listAllCarCompare1[i].StrValue16);
        $("#StrValue17_1").html(listAllCarCompare1[i].StrValue17);
        $("#StrValue18_1").html(listAllCarCompare1[i].StrValue18);
        $("#StrValue19_1").html(listAllCarCompare1[i].StrValue19);
        $("#StrValue20_1").html(listAllCarCompare1[i].StrValue20);
        $("#StrValue21_1").html(listAllCarCompare1[i].StrValue21);
        $("#StrValue22_1").html(listAllCarCompare1[i].StrValue22);
        $("#StrValue23_1").html(listAllCarCompare1[i].StrValue23);
        $("#StrValue24_1").html(listAllCarCompare1[i].StrValue24);
        $("#StrValue25_1").html(listAllCarCompare1[i].StrValue25);
        $("#StrValue26_1").html(listAllCarCompare1[i].StrValue26);
        $("#StrValue27_1").html(listAllCarCompare1[i].StrValue27);
        $("#StrValue28_1").html(listAllCarCompare1[i].StrValue28);
        $("#StrValue29_1").html(listAllCarCompare1[i].StrValue29);
        $("#StrValue30_1").html(listAllCarCompare1[i].StrValue30);
        $("#StrValue31_1").html(listAllCarCompare1[i].StrValue31);
        $("#StrValue32_1").html(listAllCarCompare1[i].StrValue32);
        $("#StrValue33_1").html(listAllCarCompare1[i].StrValue33);
        $("#StrValue34_1").html(listAllCarCompare1[i].StrValue34);
        $("#StrValue35_1").html(listAllCarCompare1[i].StrValue35);
        $("#StrValue36_1").html(listAllCarCompare1[i].StrValue36);
        $("#StrValue37_1").html(listAllCarCompare1[i].StrValue37);
        $("#StrValue38_1").html(listAllCarCompare1[i].StrValue38);
        $("#StrValue39_1").html(listAllCarCompare1[i].StrValue39);
        $("#StrValue40_1").html(listAllCarCompare1[i].StrValue40);
        $("#StrValue41_1").html(listAllCarCompare1[i].StrValue41);
        $("#StrValue42_1").html(listAllCarCompare1[i].StrValue42);
        $("#StrValue43_1").html(listAllCarCompare1[i].StrValue43);
        $("#StrValue44_1").html(listAllCarCompare1[i].StrValue44);
        $("#StrValue45_1").html(listAllCarCompare1[i].StrValue45);
        $("#StrValue46_1").html(listAllCarCompare1[i].StrValue46);
        $("#StrValue47_1").html(listAllCarCompare1[i].StrValue47);
        $("#StrValue48_1").html(listAllCarCompare1[i].StrValue48);
        $("#StrValue49_1").html(listAllCarCompare1[i].StrValue49);
        $("#StrValue50_1").html(listAllCarCompare1[i].StrValue50);
        $("#StrValue51_1").html(listAllCarCompare1[i].StrValue51);
        $("#StrValue52_1").html(listAllCarCompare1[i].StrValue52);
        $("#StrValue53_1").html(listAllCarCompare1[i].StrValue53);
        $("#StrValue54_1").html(listAllCarCompare1[i].StrValue54);
        $("#StrValue55_1").html(listAllCarCompare1[i].StrValue55);
        $("#StrValue56_1").html(listAllCarCompare1[i].StrValue56);
        $("#StrValue57_1").html(listAllCarCompare1[i].StrValue57);
        $("#StrValue58_1").html(listAllCarCompare1[i].StrValue58);
        $("#StrValue59_1").html(listAllCarCompare1[i].StrValue59);
        $("#StrValue60_1").html(listAllCarCompare1[i].StrValue60);
        $("#StrValue61_1").html(listAllCarCompare1[i].StrValue61);
        $("#StrValue62_1").html(listAllCarCompare1[i].StrValue62);
        $("#StrValue63_1").html(listAllCarCompare1[i].StrValue63);
        $("#StrValue64_1").html(listAllCarCompare1[i].StrValue64);
        $("#StrValue65_1").html(listAllCarCompare1[i].StrValue65);
        $("#StrValue66_1").html(listAllCarCompare1[i].StrValue66);
        $("#StrValue67_1").html(listAllCarCompare1[i].StrValue67);
        $("#StrValue68_1").html(listAllCarCompare1[i].StrValue68);
        $("#StrValue69_1").html(listAllCarCompare1[i].StrValue69);
        $("#StrValue70_1").html(listAllCarCompare1[i].StrValue70);
        $("#StrValue71_1").html(listAllCarCompare1[i].StrValue71);
        $("#StrValue72_1").html(listAllCarCompare1[i].StrValue72);
        $("#StrValue73_1").html(listAllCarCompare1[i].StrValue73);
        $("#StrValue74_1").html(listAllCarCompare1[i].StrValue74);
        $("#StrValue75_1").html(listAllCarCompare1[i].StrValue75);
        $("#StrValue76_1").html(listAllCarCompare1[i].StrValue76);
        $("#StrValue77_1").html(listAllCarCompare1[i].StrValue77);
        $("#StrValue78_1").html(listAllCarCompare1[i].StrValue78);
        $("#StrValue79_1").html(listAllCarCompare1[i].StrValue79);
        $("#StrValue80_1").html(listAllCarCompare1[i].StrValue80);
        $("#StrValue81_1").html(listAllCarCompare1[i].StrValue81);
        $("#StrValue82_1").html(listAllCarCompare1[i].StrValue82);
        $("#StrValue83_1").html(listAllCarCompare1[i].StrValue83);
        $("#StrValue84_1").html(listAllCarCompare1[i].StrValue84);
        $("#StrValue85_1").html(listAllCarCompare1[i].StrValue85);
        $("#StrValue86_1").html(listAllCarCompare1[i].StrValue86);
        $("#StrValue87_1").html(listAllCarCompare1[i].StrValue87);
        $("#StrValue88_1").html(listAllCarCompare1[i].StrValue88);
        $("#StrValue89_1").html(listAllCarCompare1[i].StrValue89);
        $("#StrValue90_1").html(listAllCarCompare1[i].StrValue90);
        $("#StrValue91_1").html(listAllCarCompare1[i].StrValue91);
        $("#StrValue92_1").html(listAllCarCompare1[i].StrValue92);
        $("#StrValue93_1").html(listAllCarCompare1[i].StrValue93);
        $("#StrValue94_1").html(listAllCarCompare1[i].StrValue94);
        $("#StrValue95_1").html(listAllCarCompare1[i].StrValue95);
        $("#StrValue96_1").html(listAllCarCompare1[i].StrValue96);
        $("#StrValue97_1").html(listAllCarCompare1[i].StrValue97);
        $("#StrValue98_1").html(listAllCarCompare1[i].StrValue98);
        $("#StrValue99_1").html(listAllCarCompare1[i].StrValue99);
        $("#StrValue100_1").html(listAllCarCompare1[i].StrValue100);
        $("#StrValue101_1").html(listAllCarCompare1[i].StrValue101);
        $("#StrValue102_1").html(listAllCarCompare1[i].StrValue102);
        $("#StrValue103_1").html(listAllCarCompare1[i].StrValue103);
        $("#StrValue104_1").html(listAllCarCompare1[i].StrValue104);
        $("#StrValue105_1").html(listAllCarCompare1[i].StrValue105);
        $("#StrValue106_1").html(listAllCarCompare1[i].StrValue106);
        $("#StrValue107_1").html(listAllCarCompare1[i].StrValue107);
        $("#StrValue108_1").html(listAllCarCompare1[i].StrValue108);
        
        break;
    }
  }
}

function compare(){
  var CompareCarType1          = $('#CompareCarType1').val();
  var CompareCarType2          = $('#CompareCarType2').val();
  if(CompareCarType1=="" || CompareCarType1==="" || CompareCarType2=="" || CompareCarType2==="" )
    {
    alert("Vui lòng chọn xe bạn muốn so sánh");
    return;

    }
  if(CompareCarType1==CompareCarType2)
    {
    alert("Không thể chọn 2 xe giống nhau để so sánh");
    return;
    }
    else
    {

      $('#ModalSoSanh').modal('show');
      
    };
   
}
var listAllCarCompare2=[];
function GetALLCarToCompare2(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetALLCarAndSpec',
        data: {},           
        success: function(data) { 
          data = JSON.parse(data);
            if(data.Return == 1){ 
              var lst = data.Value;
              listAllCarCompare2=data.Value;  
              var str="<option value=''>--- Vui lòng chọn ---</option>";
              for (var i = 0; i < data.Value.length; i++) {
                str+="<option value='"+data.Value[i].ProductID+"'>"+data.Value[i].ProductName+"</option>";
              }
                $('#CompareCarType2').children().remove();
                $('#CompareCarType2').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetImgCompare2()
{

  var carID = $("#CompareCarType2").val();
  for( var i = 0 ; i<listAllCarCompare2.length;i++)
  {
    if(carID==listAllCarCompare2[i].ProductID)
    {   
        $("#imgCompare2").attr("src",listAllCarCompare2[i].imageURL);
        $("#spProductName2").html(listAllCarCompare2[i].ProductName);
        $("#StrValue1_2").html(listAllCarCompare2[i].StrValue1);
        $("#StrValue2_2").html(listAllCarCompare2[i].StrValue2);
        $("#StrValue3_2").html(listAllCarCompare2[i].StrValue3);
        $("#StrValue4_2").html(listAllCarCompare2[i].StrValue4);
        $("#StrValue5_2").html(listAllCarCompare2[i].StrValue5);
        $("#StrValue6_2").html(listAllCarCompare2[i].StrValue6);
        $("#StrValue7_2").html(listAllCarCompare2[i].StrValue7);
        $("#StrValue8_2").html(listAllCarCompare2[i].StrValue8);
        $("#StrValue9_2").html(listAllCarCompare2[i].StrValue9);
        $("#StrValue10_2").html(listAllCarCompare2[i].StrValue10);
        $("#StrValue11_2").html(listAllCarCompare2[i].StrValue11);
        $("#StrValue12_2").html(listAllCarCompare2[i].StrValue12);
        $("#StrValue13_2").html(listAllCarCompare2[i].StrValue13);
        $("#StrValue14_2").html(listAllCarCompare2[i].StrValue14);
        $("#StrValue15_2").html(listAllCarCompare2[i].StrValue15);
        $("#StrValue16_2").html(listAllCarCompare2[i].StrValue16);
        $("#StrValue17_2").html(listAllCarCompare2[i].StrValue17);
        $("#StrValue18_2").html(listAllCarCompare2[i].StrValue18);
        $("#StrValue19_2").html(listAllCarCompare2[i].StrValue19);
        $("#StrValue20_2").html(listAllCarCompare2[i].StrValue20);
        $("#StrValue21_2").html(listAllCarCompare2[i].StrValue21);
        $("#StrValue22_2").html(listAllCarCompare2[i].StrValue22);
        $("#StrValue23_2").html(listAllCarCompare2[i].StrValue23);
        $("#StrValue24_2").html(listAllCarCompare2[i].StrValue24);
        $("#StrValue25_2").html(listAllCarCompare2[i].StrValue25);
        $("#StrValue26_2").html(listAllCarCompare2[i].StrValue26);
        $("#StrValue27_2").html(listAllCarCompare2[i].StrValue27);
        $("#StrValue28_2").html(listAllCarCompare2[i].StrValue28);
        $("#StrValue29_2").html(listAllCarCompare2[i].StrValue29);
        $("#StrValue30_2").html(listAllCarCompare2[i].StrValue30);
        $("#StrValue31_2").html(listAllCarCompare2[i].StrValue31);
        $("#StrValue32_2").html(listAllCarCompare2[i].StrValue32);
        $("#StrValue33_2").html(listAllCarCompare2[i].StrValue33);
        $("#StrValue34_2").html(listAllCarCompare2[i].StrValue34);
        $("#StrValue35_2").html(listAllCarCompare2[i].StrValue35);
        $("#StrValue36_2").html(listAllCarCompare2[i].StrValue36);
        $("#StrValue37_2").html(listAllCarCompare2[i].StrValue37);
        $("#StrValue38_2").html(listAllCarCompare2[i].StrValue38);
        $("#StrValue39_2").html(listAllCarCompare2[i].StrValue39);
        $("#StrValue40_2").html(listAllCarCompare2[i].StrValue40);
        $("#StrValue41_2").html(listAllCarCompare2[i].StrValue41);
        $("#StrValue42_2").html(listAllCarCompare2[i].StrValue42);
        $("#StrValue43_2").html(listAllCarCompare2[i].StrValue43);
        $("#StrValue44_2").html(listAllCarCompare2[i].StrValue44);
        $("#StrValue45_2").html(listAllCarCompare2[i].StrValue45);
        $("#StrValue46_2").html(listAllCarCompare2[i].StrValue46);
        $("#StrValue47_2").html(listAllCarCompare2[i].StrValue47);
        $("#StrValue48_2").html(listAllCarCompare2[i].StrValue48);
        $("#StrValue49_2").html(listAllCarCompare2[i].StrValue49);
        $("#StrValue50_2").html(listAllCarCompare2[i].StrValue50);
        $("#StrValue51_2").html(listAllCarCompare2[i].StrValue51);
        $("#StrValue52_2").html(listAllCarCompare2[i].StrValue52);
        $("#StrValue53_2").html(listAllCarCompare2[i].StrValue53);
        $("#StrValue54_2").html(listAllCarCompare2[i].StrValue54);
        $("#StrValue55_2").html(listAllCarCompare2[i].StrValue55);
        $("#StrValue56_2").html(listAllCarCompare2[i].StrValue56);
        $("#StrValue57_2").html(listAllCarCompare2[i].StrValue57);
        $("#StrValue58_2").html(listAllCarCompare2[i].StrValue58);
        $("#StrValue59_2").html(listAllCarCompare2[i].StrValue59);
        $("#StrValue60_2").html(listAllCarCompare2[i].StrValue60);
        $("#StrValue61_2").html(listAllCarCompare2[i].StrValue61);
        $("#StrValue62_2").html(listAllCarCompare2[i].StrValue62);
        $("#StrValue63_2").html(listAllCarCompare2[i].StrValue63);
        $("#StrValue64_2").html(listAllCarCompare2[i].StrValue64);
        $("#StrValue65_2").html(listAllCarCompare2[i].StrValue65);
        $("#StrValue66_2").html(listAllCarCompare2[i].StrValue66);
        $("#StrValue67_2").html(listAllCarCompare2[i].StrValue67);
        $("#StrValue68_2").html(listAllCarCompare2[i].StrValue68);
        $("#StrValue69_2").html(listAllCarCompare2[i].StrValue69);
        $("#StrValue70_2").html(listAllCarCompare2[i].StrValue70);
        $("#StrValue71_2").html(listAllCarCompare2[i].StrValue71);
        $("#StrValue72_2").html(listAllCarCompare2[i].StrValue72);
        $("#StrValue73_2").html(listAllCarCompare2[i].StrValue73);
        $("#StrValue74_2").html(listAllCarCompare2[i].StrValue74);
        $("#StrValue75_2").html(listAllCarCompare2[i].StrValue75);
        $("#StrValue76_2").html(listAllCarCompare2[i].StrValue76);
        $("#StrValue77_2").html(listAllCarCompare2[i].StrValue77);
        $("#StrValue78_2").html(listAllCarCompare2[i].StrValue78);
        $("#StrValue79_2").html(listAllCarCompare2[i].StrValue79);
        $("#StrValue80_2").html(listAllCarCompare2[i].StrValue80);
        $("#StrValue81_2").html(listAllCarCompare2[i].StrValue81);
        $("#StrValue82_2").html(listAllCarCompare2[i].StrValue82);
        $("#StrValue83_2").html(listAllCarCompare2[i].StrValue83);
        $("#StrValue84_2").html(listAllCarCompare2[i].StrValue84);
        $("#StrValue85_2").html(listAllCarCompare2[i].StrValue85);
        $("#StrValue86_2").html(listAllCarCompare2[i].StrValue86);
        $("#StrValue87_2").html(listAllCarCompare2[i].StrValue87);
        $("#StrValue88_2").html(listAllCarCompare2[i].StrValue88);
        $("#StrValue89_2").html(listAllCarCompare2[i].StrValue89);
        $("#StrValue90_2").html(listAllCarCompare2[i].StrValue90);
        $("#StrValue91_2").html(listAllCarCompare2[i].StrValue91);
        $("#StrValue92_2").html(listAllCarCompare2[i].StrValue92);
        $("#StrValue93_2").html(listAllCarCompare2[i].StrValue93);
        $("#StrValue94_2").html(listAllCarCompare2[i].StrValue94);
        $("#StrValue95_2").html(listAllCarCompare2[i].StrValue95);
        $("#StrValue96_2").html(listAllCarCompare2[i].StrValue96);
        $("#StrValue97_2").html(listAllCarCompare2[i].StrValue97);
        $("#StrValue98_2").html(listAllCarCompare2[i].StrValue98);
        $("#StrValue99_2").html(listAllCarCompare2[i].StrValue99);
        $("#StrValue100_2").html(listAllCarCompare2[i].StrValue100);
        $("#StrValue101_2").html(listAllCarCompare2[i].StrValue101);
        $("#StrValue102_2").html(listAllCarCompare2[i].StrValue102);
        $("#StrValue103_2").html(listAllCarCompare2[i].StrValue103);
        $("#StrValue104_2").html(listAllCarCompare2[i].StrValue104);
        $("#StrValue105_2").html(listAllCarCompare2[i].StrValue105);
        $("#StrValue106_2").html(listAllCarCompare2[i].StrValue106);
        $("#StrValue107_2").html(listAllCarCompare2[i].StrValue107);
        $("#StrValue108_2").html(listAllCarCompare2[i].StrValue108);
        break;
    }
  }
}
function Reset_compare(){
  $('#CompareCarType1').val('');
  $('#CompareCarType2').val('');
  $('#divimgCompare1').hide();
  $('#divimgCompare2').hide();
}


function GetALLCarToBooking(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetALLCar',
        data: {},           
        success: function(data) { 
          data = JSON.parse(data);
            if(data.Return == 1){ 
              var lst = data.Value;
              // listAllCarCompare2=data.Value;  
              var str="<option value=''>--- Vui lòng chọn ---</option>";
              for (var i = 0; i < data.Value.length; i++) {
                str+="<option value='"+data.Value[i].ProductName+"'>"+data.Value[i].ProductName+"</option>";
              }
                $('#autocomplete').children().remove();
                $('#autocomplete').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
// get all cac moc bao duong
var listAllMaintenance=[];
function GetALLMaintenance(){
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/GetALLMaintenance',
        data: {},           
        success: function(data) { 
          data = JSON.parse(data);
            if(data.Return == 1){ 
              var lst = data.Value;
              listAllMaintenance=data.Value;  
              var str="<option value=''>--- chọn mốc bảo dưỡng ---</option>";
              for (var i = 0; i < data.Value.length; i++) {
                str+="<option value='"+data.Value[i].CommonId+"'>"+data.Value[i].StrValue1+"</option>";
              }
                $('#Maintenancetype').children().remove();
                $('#Maintenancetype').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
function GetDataMaintenance()
{
  var mocbaoduong = $("#Maintenancetype").val();
  for( var i = 0 ; i<listAllMaintenance.length;i++)
  {
    if(mocbaoduong==listAllMaintenance[i].CommonId)
    {   
        $("#spanMocbaoduong").html(listAllMaintenance[i].StrValue1);
       
        break;
    }
  }
}

function GetKhamphacacdongxe(){
    $('#khamphacacdongxe').load(url + 'welcome/GetALLCarCommonCode', {} );
}

function CheckTimeSheetForToday(){
    var Datebooking       = $('#start-date').val(); 
    $('#spanTimesheet').load(url + 'welcome/CheckTimeSheetForToday', { Datebooking:$('#start-date').val() } );
}

function GetAllNewsWithLimit8(){
    $('#news').load(url + 'welcome/GetAllNewsWithLimit8', {} );
}

function reset_Booking(){
  $('#autocomplete').val('');
  $('#txtlicense').val('');
  $('#Maintenancetype').val('');
  $('#start-date').val('');
  $('#txtcustomer').val('');
  $('#timetopick').val('');
  $('#txtphonenumber').val('');
  $('#txtEmail').val('');
  $('#Timesheet').hide();
  $('#lblShowInsertSuccess').hide();
  $('#lblShowInsertFail').hide();
}

function InsertBooking()
{
    $('#lblShowInsertSuccess').hide();
    $('#lblShowInsertFail').hide();

  var FullName          = $('#txtcustomer').val();
  var Phone             = $('#txtphonenumber').val();
  var Email             = $('#txtEmail').val();
  var ProductName       = $('#autocomplete').val();
  var Maintenancetype   = $('#Maintenancetype').val();
  var License           = $('#txtlicense').val();
  var Datebooking       = $('#start-date').val();
  var TimeSheetbooking  = $('#timetopick').val();
 
    if(Datebooking=="" || Datebooking==="" || TimeSheetbooking=="" || TimeSheetbooking==="" || FullName=="" || FullName==="" || Phone=="" || Phone==="" || ProductName=="" || ProductName==="" || Maintenancetype=="" || Maintenancetype==="" || License=="" || License==="")
    {
    alert("Vui lòng nhập thông tin");
    return;

    }
    else
    {
          var FullName          = $('#txtcustomer').val();
          var Phone             = $('#txtphonenumber').val();
          var Email             = $('#txtEmail').val();
          var ProductName       = $('#autocomplete').val();
          var Maintenancetype   = $('#Maintenancetype').val();
          var License           = $('#txtlicense').val();
          var Datebooking       = $('#start-date').val();
          var TimeSheetbooking  = $('#timetopick').val();
          var Note              = '';
          var Status            = '0';
          var Messagetype            = '01';
        $.ajax({    
            type: 'POST',
            url:  url +'welcome/InsertBooking',
            data: { FullName          : FullName,
                    Phone             : Phone, 
                    Email             : Email, 
                    ProductName       : ProductName,
                    Maintenancetype   : Maintenancetype,
                    License           : License,
                    Datebooking       : Datebooking,
                    TimeSheetbooking  : TimeSheetbooking ,
                    Note              : Note,
                    Status            : Status,
                    Messagetype       : Messagetype
                },   
                  
            success: function(data) { 
                Insert_InsertBooking(data);       
            }, 
            async:false      
        });
    }   
}
function Insert_InsertBooking(data)
{
    var sRes = JSON.parse(data);
    if (sRes.Return ===1 || sRes.Return =='1' ||sRes.Return ==='1') 
    {
        $('#lblShowInsertSuccess').show(1000);
        $('#lblShowInsertFail').hide();
        sendContact();
        sendSMS();
    }
    else
    {
        $('#lblShowInsertFail').show(1000);
        $('#lblShowInsertSuccess').hide();
    }
}

function tintuc()
{
  window.location.href='tintuc';
}

function sendContact() {
          var FullName          = $('#txtcustomer').val();
          var Phone             = $('#txtphonenumber').val();
          var Email             = $('#txtEmail').val();
          var ProductName       = $('#autocomplete').val();
          var Maintenancetype   = $('#spanMocbaoduong').html();
          var License           = $('#txtlicense').val();
          var Datebooking       = $('#start-date').val();
          var TimeSheetbooking  = $('#timetopick').val();
          var Note  = '';
        $.ajax({
          type: "POST",
            url: url + 'send_email/index',
            data:{  FullName          : FullName,
                    Phone             : Phone, 
                    Email             : Email, 
                    ProductName       : ProductName,
                    Maintenancetype   : Maintenancetype,
                    License           : License,
                    Datebooking       : Datebooking,
                    TimeSheetbooking  : TimeSheetbooking ,
                    Note              : Note
                   
                }, 
            
            success:function(data){
                $("#mail-status").html(data);
            },
            error:function (){}
        });
    
}
function sendSMS() {
          var FullName          = $('#txtcustomer').val();
          var Phone             = $('#txtphonenumber').val();
          var Email             = $('#txtEmail').val();
          var ProductName       = $('#autocomplete').val();
          var Maintenancetype   = $('#spanMocbaoduong').html();
          var License           = $('#txtlicense').val();
          var Datebooking       = $('#start-date').val();
          var TimeSheetbooking  = $('#timetopick').val();
          var Note  = '';
        $.ajax({
          type: "POST",
            url: url + 'send_sms/index',

            data:{  FullName          : FullName,
                    Phone             : Phone, 
                    Email             : Email, 
                    ProductName       : ProductName,
                    Maintenancetype   : Maintenancetype,
                    License           : License,
                    Datebooking       : Datebooking,
                    TimeSheetbooking  : TimeSheetbooking ,
                    Note              : Note
                   
                }, 
            
            success:function(data){
                $("#mail-status").html(data);
            },
            error:function (){}
        }); 
}


function dutoan() 
{
    $('#total').show();
    $('#viewdetail').show();
    //gia ban
    var giaban         = $('#txtPriceCarLate').val();
    //tien tra truoc
    var tientratruoc   = $('#txtPayMoney').val();
    //tien tra truoc tinh theo %
    var sotientratruoc =$('#sotientratruoc').val();
    //lai suat theo ngan hang
    var laisuat        = $('#laisuattindung').val();
    //so thang tra lai 
    var thangtralai    = $('#thangtindung').val();
    
    
    // so tien con thieu

    var tienno = giaban - (tientratruoc || ((sotientratruoc/100)*giaban));
    var percent = laisuat/100;
    var lainam = tienno * (percent/12) * thangtralai;


    var laichenhlech = (tienno/thangtralai )* (percent/12);

    var khoantindung = tienno + lainam - (laichenhlech *thangtralai*(thangtralai-1))/2;

    // var tonglaixuat = (percent * thangtralai/12;

    // var tonglai = (tienno * tonglaixuat);

    // var tongtindung = tienno + tonglai;

    var tindungtheothang = (tienno / thangtralai) +(tienno * (percent/12));

    $('#tindungthangdau').html(tindungtheothang);
    $('#tindungthangdau').number( true,0 );

    $('#Tiengocvalai').html(khoantindung);   
    $('#Tiengocvalai').number( true,0 );
}



function importExcel() {
    var giaban         = $('#txtPriceCarLate').val();
    //tien tra truoc
    var tientratruoc   = $('#txtPayMoney').val();
    //tien tra truoc tinh theo %
    var sotientratruoc =$('#sotientratruoc').val();
    //lai suat theo ngan hang
    var laisuat        = $('#laisuattindung').val();
    //so thang tra lai 
    var thangtralai    = $('#thangtindung').val();

    var tienno = giaban - (tientratruoc || ((sotientratruoc/100)*giaban));
  
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

function reset_Dudoan(){
  $('#txtPayMoney').val('');
  $('#sotientratruoc').val('');
  $('#laisuattindung').val('');
  $('#thangtindung').val('');
  $('#total').hide();
  $('#viewdetail').hide();
}



function GetMaintenanceDetail() {
    $("#txtPayForWorker").val('');
    $("#txtpayForMaintenance").val('');
    $("#txtThoigiandukien").val('');
    $("#txtUoctinhchiphi").html('');

    var ProductID         = $('#Carid').val();
    var MaintenanceID   = $('#Maintenancetype').val();
    var autocomplete   = $('#autocomplete').val();

    if(ProductID=="" || autocomplete=="")
    {
         $('#Baoduongkhactoyota').modal('show');
        return;
    }
    else
    {      
           
            $.ajax({
              type: "POST",
                url: url + 'welcome/GetMaintenanceDetail',
                data:{  ProductID             : ProductID,
                        MaintenanceID         : MaintenanceID
                    }, 

            success: function (data) {

                GetMaintenanceDetail_Complete(data);
            },
            error: function () {
                //HideLoading();
            },
            async: false,
        });
    }
}
function GetMaintenanceDetail_Complete(data) {
    sRes = JSON.parse(data);
    console.log(sRes);
    if (sRes.Return == 1) {
        var ms = sRes.Value[0];
        
        $("#txtPayForWorker").val(ms.PayofWorker);
        $('#txtPayForWorker').number( true,0 );
        $("#txtpayForMaintenance").val(ms.PayofAccessary);
        $('#txtpayForMaintenance').number( true,0 );
        $("#txtThoigiandukien").val(ms.StrValue1 + ' Phút');
        $("#txtUoctinhchiphi").html(ms.TotalPay);
        $('#txtUoctinhchiphi').number( true,0 );
        $('#Description').html(ms.Description);

        $('#Thongtinbaoduongtoyota').modal('show');
    }
}

