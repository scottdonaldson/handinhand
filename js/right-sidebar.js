jQuery(document).ready(function($) {
	
	var input = $('#right-sidebar input[type="text"]'),
		changeButton = '<h2 class="alignright change">Change</h2>',
		removeButton = '<h2 class="alignright remove">X</h2>',
		addButton = '<h2 style="text-align:center;">Add new</h2>';
	input.each(function(i){
		$this = $(this);
		$this.after('<img src='+$this.val()+'>');
		var hasImg = $this.val();
		
		if (hasImg) {
			if (i>2) {
				$(removeButton).insertAfter(this).on('click',function(){
					formfield = $(this).siblings('input').addClass('active');
					$('.active').val('');
					$(this).parent().append('<p style="max-width:180px;"><strong>Changes have been made. Update to see changes.</strong></p>');				
				});
			}

			$(changeButton).insertAfter(this).on('click',function(){
				formfield = $(this).siblings('input').addClass('active');
				tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
				window.send_to_editor = function(html) {
					imgurl = $('img',html).attr('src');
					formfield
						.removeClass('active')
						.val(imgurl)
						.parent().append('<p style="max-width:180px;"><strong>Changes have been made. Update to see changes.</strong></p>');
					tb_remove();
				}								
			});
	
		} else {
			$(addButton).insertAfter(this).on('click',function(){
				formfield = $(this).siblings('input').addClass('active');
				tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
				window.send_to_editor = function(html) {
					imgurl = $('img',html).attr('src');
					formfield
						.removeClass('active')
						.val(imgurl)
						.parent().append('<p style="max-width:180px;"><strong>Changes have been made. Update to see changes.</strong></p>');
					tb_remove();
				}
			});
		}
	});

});