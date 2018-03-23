
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});


$('.list-group-item').click(function() {
    $(this).toggleClass('active');
});

var editor = ace.edit("editor");
editor.setTheme("ace/theme/tomorrow");
editor.session.setMode("ace/mode/sql");
var textarea = $('#sql');
editor.getSession().on("change", function () {
    textarea.val(editor.getSession().getValue());
});

$('#submit').click(function() {
	// stop the sql being edited or re clicking the button until were done
	$('#overlay').show();

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	var databases = $('.connection-list > a.active');
	databases.each(function(index,val) {
		var db_group = $(this).data('group');
		var id = $(this).data('id');
		var is_last_item = (index == (databases.length - 1));
		$.ajax({
			type: 'POST',
			url: '/query',
			data: {'group': db_group, 'database': $(this).data('id'), 'sql': textarea.val()},
			success: function(data) {
				//show feedback (errors or success)
				try {
				    data = JSON.parse(data);
				} catch(e) {
				    //JSON parse error, this is not json (or JSON isn't in your browser)
					console.log(e);
				}

				//wrap the message and display it in the feedback area
				if(data === true) {
					var feedback = "<div class='alert feedback-item alert-success alert-dismissible fade show' role='alert'><strong>" + id + "</strong> - Success!<button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button></div>";
					$('#feedback').append(feedback);
				} else {
					var feedback = "<div class='alert feedback-item alert-danger alert-dismissible fade show' role='alert'><strong>" + id + "</strong> - " + data + "<button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button></div>";
					$('#feedback').append(feedback);
				}


			}
		});

		if(is_last_item == true) {
			// all items have been processed so unlock the text editor and button 
			$('#overlay').hide();
		}
	});




});

