define(['jquery', 'underscore', 'backbone', 'components', 'text!./template.html'], 
	function ($, _, Backbone, componentController, template) {
	
	var Component = componentController.Component;
	

	return Autocomplete = Component.extend({

		url: '/ajax/airports.php',

		template: template,

		requestStatus: [],

		items: [],

		events: {
			'keyup .autocomplete-input' : 'onKeyup',
			//'blur .autocomplete-input' : 'onBlur',
			'focus .autocomplete-input' : 'onFocus',
			'click .autocomplete-item' : 'onItemClick',

		},

		bind: ['onKeyup', 'onKeydown', 'onFocus', 'onBlur', 'onSuccess', 'onError', 'onItemClick'],

		initialize: function () {
			Component.prototype.initialize.apply(this, arguments);


			if (!this.options.url)
				throw new Error('Not set url');
			this.url = this.options.url;

			if (this.options.valueTemplate)
				this.valueTemplate = _.template(this.options.valueTemplate);
			
			if (this.options.valueRulle)
				this.valueRulle = new  Function (['value'], 'return ' + this.options.valueRulle+';');

			if (this.options.valueDisplay)
				this.valueDisplay = new  Function (['value'], 'return ' + this.options.valueDisplay+';');

			if (this.options.valueSet)
				this.valueSet = new  Function (['value'], 'return ' + this.options.valueSet+';');
			
			this.$list = this.$('.autocomplete-list'); 
			this.$value = this.$(':input[name]'); 
			this.$input = this.$('.autocomplete-input'); 
			
			
		},

		onKeyup: function (event) {
			var $this = $(event.currentTarget);


			if ( $this.val().length > 2 ) {
				var req = { query: $this.val(), time: (new Date()).getTime() };
				this.requestStatus.push(req);
				this.load(req);
			}
				
		},

		onKeydown: function (event) {

		},

		onFocus: function (event) {
			var $this = $(event.currentTarget);
			if ( $this.val().length > 2 ) {
				this.$list.show();
			}
		},

		onBlur: function () {
			this.$list.hide();
		},


		onItemClick: function (event) {
			event.preventDefault();
			var $this = $(event.currentTarget);

			var value = this.items[+$this.attr('data-idx')];
			if (typeof value == 'object' ) {
			
				if (!this.valueSet)
					throw new Error('Wrong type of Autocomplete item value. Set valueSet.');

				if (!this.valueDisplay)
					throw new Error('Wrong type of Autocomplete item value. Set valueDisplay.');

				this.$value.val( this.valueSet(value) );
				this.$input.val( this.valueDisplay(value) );
			} else {
				this.$value.val(value);
				this.$input.val(value);
			}

			this.$list.hide();

		},

		onSuccess: function(res, status, ajax) {
			//this.
			if (res.data.length == 0) {
				this.$list.find('.autocomplete-no-results').show().siblings().remove();
				this.$list.show();
				return;
			}
				
			if (res.data.length > 0) {
				this.$list.find('.autocomplete-no-results').hide().siblings().remove();

				var temp = '';
				this.items = res.data;
				for (var i = 0; i < res.data.length; i++) {
					if (typeof res.data[i] == 'object') {
						if (!this.valueTemplate)
							throw new Error('Wrong type of Autocomplete item value. Set valueTemplate.');
						
						if ( !this.valueRulle(res.data[i]) ) {
							continue;
						}
						temp += this.itemTemplate({ value: this.valueTemplate(res.data[i]), idx: i });
					} else {
						temp += this.itemTemplate({ value: res.data[i], idx: i });
					}
						
				}
				
				this.$list.append(temp).show();
				return;
			}

			//this.$list


		},

		onError: function () {

		}




	});

});