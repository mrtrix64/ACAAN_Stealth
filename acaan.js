// Wait for device API libraries to load
    //
    function onLoad() {
        document.addEventListener("deviceready", onDeviceReady, false);
    }

    // device APIs are available
    //
    function onDeviceReady() {
        // Now safe to use device APIs
	setInterval(function(){
	jQuery.ajax({
	url: "http://www.cardstats.co.uk/push_data_json.php",
	dataType:'json',
	success:function(response)
{
	var latestcall = response.position;
	var cutnumber = $('#cutposition').text();
	//alert ("Latest call is "+latestcall);
	//alert ("Number on page is "+cutnumber);
	//$('#cutposition').text(response.position );
	//$('#cutcard').text(response.card );
	
	if (latestcall == cutnumber)
  {
  	//alert("Latest call and page number match");
  }
else
  {
	 //alert("Latest call and page number DON'T match"); 	
	$('#cutposition').text(response.position);
	$('#cutcard').text(response.card );
	window.plugin.notification.badge.set(response.position);
	var cardcut = $('#cutcard').text();
	var cardpos = $('#cutposition').text();
	
	window.plugin.notification.local.add({
    title: cardcut,
    message: cardpos,
});
  }
}
});
	
	},1000);
window.plugin.backgroundMode.enable();	
    }


/*document.addEventListener("deviceready", onDeviceReady, false);

function onDeviceReady() {
    // Now safe to use the PhoneGap API
	

	
//NICE... Detects CHANGE	
$('#card').bind('DOMSubtreeModified', function() {
	var cardcut = $('#card').text();
	var cutnumber = $('#cutposition').text();
	window.plugin.notification.badge.set(cutnumber);
	
});
	
}*/

/*function badger() {
	//alert("Badger run");
	var cutnumber = $('#cutposition').text();
	
	}	

$(window).load(function() {
    //dom not only ready, but everything is loaded
	//alert("It's loaded!") 
	badger();
});*/