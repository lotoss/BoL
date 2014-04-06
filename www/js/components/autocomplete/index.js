define(['jquery', 'underscore', 'backbone', 'proxy', 'text!./template.html'], 
	function ($, _, Backbone, proxy, template) {
	
	template = _.template(template);

	function initAutocopmlete (component) {
		console.log(this);
		var self = this;
		$(function () {
			for (var i = 0; i < self.registrates.length; i++ ) {
				var item = self.registrates[i];

				$.extend(item.options, Autocomplete.prototype.options);
				
				$(item.selector).each(function () {
					item.elements.push(new Autocomplete(this, item.options) );
				});
			}

		});

		
	}




	function Autocomplete (elem, options) {
		_.bindAll(this, 'keyupEvent');
		this.options = options;
		console.log(arguments);
		this.$el = $(elem);
		this.el = this.$el[0];
		/*this.options = $.extend({}, options);*/
		

		var $elem = $(elem);
		this.options.id = $elem.attr('id');
		this.options.name = $elem.attr('name');
		this.options.placeholder = $elem.attr('placeholder');



		this.render();
	}

	Autocomplete.prototype.options = {
		url: '/ajax/airports.php'
	};

	Autocomplete.prototype.render = function () {
		var $prevEl = this.$el;
		this.$el = $( template(this.options) );
		this.el = this.$el[0];
		
		//Снять события
		this.undelegate();

		$prevEl.replaceWith(this.$el);

		//Повесить события
		this.delegate();

	};

	Autocomplete.prototype.delegate = function () {
		this.$el.on('keyup', '.autocomplete-input', this.keyupEvent);
	};

	Autocomplete.prototype.undelegate = function () {
		this.$el.off('keyup');
	};

	Autocomplete.prototype.keyupEvent = function (event) {
		var $this = $(event.currentTarget);
		var value = $this.val();
		console.log(this)
		if (value.length < 3) 
			return;

		proxy.send(this.options.url, {query: value, time: (new Date()).getTime() / 1000 })
			.success()
			.error();

	}




	return initAutocopmlete;
});