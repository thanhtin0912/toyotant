$(document).ready(function(){  

    UpdateCountView();

});

function UpdateCountView(){
    var id           = $('#spNewsID').html();
    var CountView             = $('#spCoutview').html();
    var value = Math.abs(CountView);
    var countViewPlus = value + 1;
	
    $.ajax({    
        type: 'POST',
        url:  url +'welcome/UpdateCountViewNews',
        data: { id          : id,
                countViewPlus       : countViewPlus
            },   
              
        success: function(data) { 
            UpdateCountView_sucessce(data);       
        }, 
        async:false      
    });
}   


function UpdateCountView_sucessce(data)
{
    var sRes = JSON.parse(data);
    if (sRes.Return ===1 || sRes.Return =='1' ||sRes.Return ==='1') 
    {
         
    }
}