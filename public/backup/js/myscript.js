$(document).ready(function () {
	$(".updatecart").click(function () {
		var rowId = $(this).attr('id');
		var qty = $(this).parent().parent().find(".qty").val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url:'cart_update/'+rowId+'/'+{qty},
			type:'GET',
			cache:false,
			data:{"_token":token,"id":rowId,"qty":qty},
			success:function (data) {
				if (data == "ok") 
				{
					window.location = "cart"
				}
			}
		});
	});
});
