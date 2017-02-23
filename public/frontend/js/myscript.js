$(document).ready(function() {
	$('.updatecart').click(function() {
		var rowid = $(this).attr('id');
		var qty = $(this).parent().parent().find('.qty').val();
		var token = $("input[name='_token']").val();

		$.ajax({
			url: 'sua-gio-hang/'+rowid+'/'+qty,
			type: 'GET',
			cache: false,
			data: {'_token':token,'id':rowid,'qty':qty},
			success: function(data){
				if(data == 'oke'){
					window.location = 'gio-hang'
				}
			}
		});
	});

	$('div.alert').delay(3000).slideUp();
});