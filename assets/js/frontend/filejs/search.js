$(document).ready(function(){  
    searchall();
});
function searchall(){
	SearchLinksPages();
	SearchLinksNews();
	SearchLinksOldcar();
	SearchLinksAccessories();
}
function SearchLinksPages(){
var keysearch = $('#txtKeysearch').val();
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/SearchLinksPages',
        data: {keysearch : keysearch},           
        success: function(data) { 
            data = JSON.parse(data);
            console.log(data);
            if(data.Return == 1){ 
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                	str+="<li><i class='fa fa-angle-right color-green'></i> <a href='"+data.Value[i].url+"'>"+data.Value[i].title+"</a>";
                }
                $('#divLinksPages').children().remove();
                $('#divLinksPages').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function SearchLinksNews(){
var keysearch = $('#txtKeysearch').val();
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/SearchLinksNews',
        data: {keysearch : keysearch},           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                	var link="tintuc/"+data.Value[i].Keyword+"-"+data.Value[i].Category+"-"+data.Value[i].id+"";
                	str+='<li><i class="fa fa-angle-right color-green"></i> <a href="'+link+'">'+data.Value[i].Brief+'</a><small style="color: rgba(72, 60, 64, 0.61); ">  (Tin tức)</small></li>';
                }
                $('#divLinksNews').children().remove();
                $('#divLinksNews').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function SearchLinksOldcar(){
var keysearch = $('#txtKeysearch').val();
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/SearchLinksOldcar',
        data: {keysearch : keysearch},           
        success: function(data) {
            // console.log(data);
            data = JSON.parse(data);
            if(data.Return == 1){ 
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                	var link="xequasudung/"+data.Value[i].Keyword+"-"+data.Value[i].CarType+"-"+data.Value[i].id+"";
                	str+='<li><i class="fa fa-angle-right color-green"></i> <a href="'+link+'">'+data.Value[i].Title+'</a><small style="color: rgba(72, 60, 64, 0.61); ">  (Xe qua sử dụng)</small></li>';
                }
                $('#divLinksOldcar').children().remove();
                $('#divLinksOldcar').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}

function SearchLinksAccessories(){
var keysearch = $('#txtKeysearch').val();
  $.ajax({    
        type: 'POST',
        url:  url + 'welcome/SearchLinksAccessories',
        data: {keysearch : keysearch},           
        success: function(data) { 
            data = JSON.parse(data);
            if(data.Return == 1){ 
                var str="";
                for (var i = 0; i < data.Value.length; i++) {
                	var link="phu-kien-chi-tiet/"+data.Value[i].KeyWord+"-"+data.Value[i].ProductID+"-"+data.Value[i].Catalog+"-"+data.Value[i].id+"";
                	str+='<li><i class="fa fa-angle-right color-green"></i> <a href="'+link+'">'+data.Value[i].Brief+'</a><small style="color: rgba(72, 60, 64, 0.61); ">  (Phụ kiện)</small></li>';
                }
                $('#divLinksAccessories').children().remove();
                $('#divLinksAccessories').append(str);
            }
        },
        error: function () {
            //HideLoading();
        },
        async:false ,       
    });
}
