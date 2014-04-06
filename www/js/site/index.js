define (['jquery', 'components'], function  ($, compLoader) {
	compLoader.registrate('autocomplete', '#from, #to', {
		url: '/airports.php',
		success: function (data) {
			var $this = $(this);

			$this.siblings().val(data.IATA);
		}
	});

	$(function () {
		compLoader.init();
	});


});