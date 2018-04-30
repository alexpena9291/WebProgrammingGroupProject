<?php
include("HTMLReusables/top.html");
include("HTMLReusables/sideBar.html");
include("HTMLPages/home.html");
?>
<script>
	var locationW = String(window.location);
	var first = locationW.indexOf("=");
	var last = locationW.indexOf("#");
	var userId;
	//alert(locationW.substring((first + 1), locationW.length));
	//alert(first + ":" + last);
	if(last != -1){
	userId = locationW.substring((first + 1), last);
	} else {
	userId = locationW.substring((first + 1), locationW.length);
	}
	//alert(userId);
	personalize(userId);
	
	function personalize(personalId) {
	var xhttp;    
	
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		$userInfo = this.responseText;
		$("#userNameP").html(this.responseText);
		
		}
	};
	xhttp.open("GET", "processingFiles/personalize.php?userId="+ personalId, true);
	xhttp.send();
}
	
</script>

