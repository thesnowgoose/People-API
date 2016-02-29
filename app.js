var flag = true;

$("#txtSearch").keyup(function(evt){
	$("#results").html("");
    var text = $("#txtSearch").val();
    if (text!="" && flag){
    	flag = false;
    	$.get("getList.php?text="+text, function(data, status){
    		console.log(data);
    		flag =true;
    	    $.each($.parseJSON(data), function(item,element){
    	    	// console.log(element);
    	    	$("#results").append("<p>"+element+"</p>");
    	    });
    	});
	}
});