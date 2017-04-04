

 
 $("#form_rank").submit(function(){

	var base_url = $("#base_url").val();
	var user_id  = $("#user_id").val();
	var user_rank = $("#user_rank").val();

	if(user_rank == '')
	{
		alert('Set Rank First');
		return;
	}
	
	url = base_url+'admin/setuserrank/'+user_id+'/'+user_rank;
	$.post(
        url,
        $(this).serialize(),
        function(response){
        	response = JSON.parse(response);
        	if(response.success)
        	{
        		$("#rankform_success").html('Values updated.');
        		$("#rankform_success").removeClass('hide');
        		$("#rankform_fail").addClass('hide');
        	}
        	else
        	{
        		$("#rankform_fail").html('Please enter new values.');
        		$("#rankform_fail").removeClass('hide');
        		$("#rankform_success").addClass('hide');

        	}
        });
});

$("#savevideos_Btn").click(function(){

	if($(".video_q").length == 0)
	{
		alert('Enter Videos URL/S First');
		return;
	}

	var urls = [];
	var base_url = $("#base_url").val();
	var user_id  = $("#user_id").val();

	$(".video_q").each(function(){

		var url = $(this).html();
		urls.push(url);
	});

	url = base_url+'admin/addvideos/';
	
		$.ajax({
		   type: "POST",
		   data: {urls:urls,user_id:user_id},
		   url:url,
		   success: function(msg){
		     $("#addvideos_success").html('Videos Updated Successfully.');
        	 $("#addvideos_success").removeClass('hide');
		   }
		});

});


$("#form_social").submit(function(){

	var base_url = $("#base_url").val();
	var user_id  = $("#user_id").val();
	url = base_url+'admin/processajax/'+user_id;
	$.post(
        url,
        $(this).serialize(),
        function(response){
        	response = JSON.parse(response);
        	if(response.success)
        	{
        		$("#socialform_success").html('Values updated.');
        		$("#socialform_success").removeClass('hide');
        		$("#socialform_fail").addClass('hide');
        	}
        	else
        	{
        		$("#socialform_fail").html('Please enter new values.');
        		$("#socialform_fail").removeClass('hide');
        		$("#socialform_success").addClass('hide');

        	}
        });
});


$("#number_add_btn").click(function(){

	var type_text = $("#number_add_type option:selected").text();
	var type = $("#number_add_type option:selected").val();
	var value = $("#number_add_value").val();
	if(type == 0)
		return;

	if(value == '')
		return;

	$("#numbers_list").append("<tr class='number_tr' value='"+type+"'><td>"+type_text+"</td><td class='number_inside_tr'>"+value+"</td></tr>");
});


$("#form_contact").submit(function(){

	var contact_numbers = [];
	$(".number_tr").each(function() {
	  $this = $(this)
	  var type = $this.attr('value');
	  var value = $this.find('.number_inside_tr').html();
	  var numberObject = new Object;
	  numberObject.type = type;
	  numberObject.value = value;
	  contact_numbers.push((numberObject));
	});

	
	
	var data = $('#form_contact').serializeArray();
	data.push({name: 'contact_numbers', value: JSON.stringify(contact_numbers)});


	var base_url = $("#base_url").val();
	var user_id  = $("#user_id").val();
	url = base_url+'admin/ajaxcontactnumbers/'+user_id;
	$.post(
        url,
        data,
        function(response){
        	response = JSON.parse(response);
        	if(response.success)
        	{
        		$("#contactform_success").html('Values updated.');
        		$("#contactform_success").removeClass('hide');
        	}
        });


});

$(".updateMedia_btn").click(function(){

	var media_id 			= $(this).attr('data-id');
	var media_title 		= $("#"+media_id+"_title").val();
	var media_description   = $("#"+media_id+"_description").val();
	
	var base_url = $("#base_url").val();

	var data = [];
	// // data['title'] = media_id;
	// // data['description'] = media_description;
	// data.push({title: media_title, description: media_description});
	url = base_url+'admin/updatemedia/'+media_id+'?title='+media_title+'&description='+media_description;
	$.post(
	    url,
	    data,
	    function(response){
	    	response = JSON.parse(response);
	    	if(response.success)
	    	{
	    		alert('updated');
	    	}
	    });


});



$(".deleteMedia_btn").click(function(){
	var media_id = $(this).attr('data-id');
	var r = confirm("Are you sure?");
	if (r == true) 
	{
	    var base_url = $("#base_url").val();
		var data = [];
		url = base_url+'admin/deletemedia/'+media_id;
		$.post(
		    url,
		    data,
		    function(response){
		    	response = JSON.parse(response);
		    	if(response.success)
		    	{
		    		$("#row_"+media_id).fadeOut();
		    	}
		    });
	} 
	else 
	{
	    return;
	}
	
});