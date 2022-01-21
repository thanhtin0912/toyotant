var IPEPageCount = 2;
var key = "IPE_Lexus";

function lScript(file) {
	var script = document.createElement('script');
	script.type = 'text/javascript'; script.src = file;	
	if (typeof(script.onreadystatechange) == 'undefined') 
	    script.onload = function() { this.onload = null; }; 
	else  
	    script.onreadystatechange = function() { if (this.readyState != 'loaded' && this.readyState != 'complete') return; this.onreadystatechange = null;  }; 
	
	document.getElementsByTagName('head')[0].appendChild(script);
}
function CCook(n,v,d){var exp= ''; var dm = document.domain;if (d) {var dt= new Date();dt.setTime(dt.getTime()+(d*24*60*60*1000));exp='; expires='+dt.toGMTString();}document.cookie= n+'='+v+exp+'; path=/;domain=' + dm +';' }
function GetC(n){var nEQ= n+'='; var ca= document.cookie.split(';');for(var i=0;i < ca.length;i++) {var c= ca[i];while (c.charAt(0)==' ') c= c.substring(1,c.length);if (c.indexOf(nEQ) == 0) return c.substring(nEQ.length,c.length);} return null;}

(function (){


    if(GetC("IPE_M_FORCE") !== null){
        lScript(document.location.protocol + "//ips-invite.iperceptions.com/webValidator.aspx?sdfc=42cabf71-906-781ac234-5142-4da2-9f06-357f5e949d51&lID=1&loc=STUDY&cD=90&rF=False&iType=1&domainname=0&source=91787");
        return true;
    }

    var IPECanLaunch = (function (pageDelay) {

        var count = null;
        var pageCookie = "IPE_PAGE"; //Do not modify, used in launcher given to client.
        var done = "DONE"; //Do not modify, used in launcher given to client.

        //Get the current page count.  Calculates new count first time called
        function getPageCount() {
            if(count !== null) {
                return count;
            }
            count = 1;
            var prev = GetC(pageCookie);
            if (prev !== null && prev !== done) {
                prev = parseInt(prev, 10);
                if(!isNaN(prev)) {
                    count = prev + 1;
                }
            }
            
            return count;
        }

        //Main script executed
        var val = getPageCount();
        if(val >= pageDelay) {
            CCook(pageCookie, done);
            return true;
        }
        CCook(pageCookie, val);
        return false;
    })(IPEPageCount);

    //To stop the survey, comment to push the survey live again. 
    //IPECanLaunch = false; 

    if(IPECanLaunch) {
        var IPEurl = window.location.href;
        var IPErate = 50;
        if (IPEurl.indexOf("www.lexus.com/cpo/")>-1|| IPEurl.indexOf("www.lexus.com/contact/")>-1){
            IPErate = 50;
        }
        if (IPErate>Math.floor((Math.random() * 100))){
        lScript(document.location.protocol + "//ips-invite.iperceptions.com/webValidator.aspx?sdfc=42cabf71-906-781ac234-5142-4da2-9f06-357f5e949d51&lID=1&loc=STUDY&cD=90&rF=False&iType=1&domainname=0&source=91787");
        }
    }
})();
