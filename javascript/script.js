$(document).ready(function(){
	var i = 0;
	$(".nav a").each(function(){
		if($(this).attr("href") == getFileName()){
			$(this).parent().addClass("active");
			i++;
		}
	});
	if(i == 0){
		$("#startLink").parent().addClass("active");
	}
});

function getFileName() {
	//this gets the full url
	var url = document.location.href;
	//this removes the anchor at the end, if there is one
	url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
	//this removes the query after the file name, if there is one
	url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
	//this removes everything before the last slash in the path
	url = url.substring(url.lastIndexOf("/") + 1, url.length);
	//return
	return url;
}