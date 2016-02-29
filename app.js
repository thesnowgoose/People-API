$("#txtSearch").keyup(function(evt){
	$("#results").html("");
    var text = $("#txtSearch").val();
    if (text!=""){
    	$.get("getList.php?text="+text, function(data, status){
    		console.log(data);
    	    $.each($.parseJSON(data), function(item,element){
    	    	// console.log(element);
    	    	$("#results").append("<p>"+element+"</p>");
    	    });
    	});
	}
});