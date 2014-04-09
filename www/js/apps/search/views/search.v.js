define(['jquery', 'underscore', 'backbone', 'components'], function ($, _, Backbone, compCtrl) {

	return SearchView = Backbone.View.extend({
		el: '.main-fiter',

		events: {
			'click a.search': 'onSearchClick',
			'change [name="from"]': 'onChangeFrom', 
			'change [name="to"]': 'onChangeTo', 
			'change [name="whenFrom"]': 'onChangeWhenFrom', 
			'change [name="whenTo"]': 'onChangeWhenTo'
		},

		initialize: function () {
			console.log(this.el)

			this.render();
		}, 

		render: function () {

			compCtrl.registrate('autocomplete', '#from, #to', {
				url: '/ajax/airports.php',
				valueTemplate: '<b><%= city %>,</b> <%= country %> <i class=""><%= IATA %></i>',
				valueRulle: '!value.title',
				valueSet: 'value.IATA',
				valueDisplay: 'value.city + \',  \' +value.country'
			});
		
		},


		//event
		onSearchClick: function (event) {
			event.preventDefault();
		},

		onChangeFrom: function (event) {
			event.preventDefault();
		},

		onChangeTo: function (event) {
			event.preventDefault();
		},

		onChangeWhenFrom: function (event) {
			event.preventDefault();
		},

		onChangeWhenTo: function (event) {
			event.preventDefault();
		},

	}); 

});