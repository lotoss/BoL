define(['jquery', 'underscore', 'proxy', 'backbone'], function ($, _, proxy, Backbone) {

	function ComponentsController () {
		var componentSets = {};

		this.registrate = function (component, selector, options) {
			if (!componentSets[component]) {
				componentSets[component] = [];
				var setsType = componentSets[component];

				setsType.init = function () {
					if ( !setsType.Component )
						return;

					for (var i = 0; i < setsType.length; i++ ) {
						var set = setsType[i];
						
						$(set.selector).each(function() {
							var el = this;
							
							set.elements.push( 
								new setsType.Component({ 
									el: el, 
									options: set.options 
								}) 
							);
						});	
					}
				};

				this.loadComponent(component);

			}

			componentSets[component].push({
				selector: selector,
				options: _.clone(options),
				elements: []
			});

		};

		this.init = function () {
			for (var key in componentSets) {
				componentSets[key].init();
			}
		};

		this.loadComponent = function (component) {
			var self = this;

			var style = document.createElement('link');
			style.href = '/js/components/' + component + '/styles.css?' 
				+ requirejs.s.contexts._.config.urlArgs;
			style.rel = 'stylesheet';
			style.type = 'text/css';
			style.media = 'all';
			document.getElementsByTagName('HEAD')[0].appendChild(style);

			requirejs(['/js/components/' + component + '/index.js'], function(Component) {
				componentSets[component].Component = Component;
				componentSets[component].init();
			});
		}

	}

	var componentsController = componentsController || new ComponentsController;

	//Добавление сомпонента
	componentsController.Component = Backbone.View.extend({
		//
		initialize: function (options) {
			this._parseTemplate();
			this.options = options.options;
			
			if (this.bind)
				for ( var i = 0; i < this.bind.length; i++ ) {
					if (this[this.bind[i]])
						this[this.bind[i]] = _.bind(this[this.bind[i]], this);
				}
				

			this.data = {
				id: this.$el.attr('id'),
				name: this.$el.attr('name'),
				value: this.$el.val(),
				placeholder: this.$el.attr('placeholder')
			}


			if (this.afterInitialize)
				this.afterInitialize();

			this.render();

		},

		_parseTemplate: function () {
			var subTemplates = this.template.match(/<script[\s\S]*<\/script>/g);
			
			for (var i = 0; i < subTemplates.length; i++ ) {
				this[$(subTemplates[i]).attr('id') + 'Template'] = _.template( $(subTemplates[i]).html() );
			}

			this.template = _.template( this.template.replace(/<script[\s\S]*<\/script>/g, '') );
		},

		toJSON: function () {
			return this.data;
		},

		render: function() {
			var $prevEl = this.$el;
			this.setElement( this.template ( this.toJSON() ) );
			$prevEl.replaceWith(this.$el);
		},

		load: function (data) {
			$.ajax({
				url: this.url,
				type: 'POST',
				dataType: 'json',
				data: data,
				success: this.onSuccess,
				error: this.onError
			});
		},

		onSuccess: function () {
			throw new Error('Not redeclarate onLoad() method of ' + this.constructor);
		},

		onError: function () {
			throw new Error('Not redeclarate onError() method of ' + this.constructor);
		}

	});
	
	return componentsController;
});