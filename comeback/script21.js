$(document).ready(function(){
	$("#inputfile").change(function(){
		//if(document.querySelector('#do_submit').value!= undefined){
			//alert($('#inputfile').val());
			var property = document.querySelector('#inputfile').files[0];
			var img_name = property.name;
			var img_size = property.size;
			
			var form_data = new FormData();
			form_data.append("inputfile", document.querySelector('#inputfile').files[0]);
			$.ajax({
				url: "profile2.php",
				type: "POST",
				data: form_data,
				contentType: false,
	   		    processData: false,
	   		    beforeSend: function(){
	   		    	$("#result").html("image uploading..");
	   		    },
				success: function(data){
						$("#result").html(data);
				}
			});
	});
});