define(['jquery', 'class'], function ($, Class) {
	var components = {
		'autocomplete' : '[is="autocomplete"]'
	};

	function ComponentsController () {
		var componentSets = {} ;

		this.registrate = function (component, selector, options) {
			if (!componentSets[component]) {
				componentSets[component] = [];
				var self = componentSets[component];

				self.called = false;

				self.init = function () {
					this.called = true;
				};

				this.loadComponent(component);

			}

			componentSets[component].push({
				selector: selector,
				options: {},
				elements: []
			});

		};

		this.init = function () {
			for (var key in componentSets) {
				var set = componentSets[key];
				set.elements.push(new set.component)
				component.init();
				/*console.log($(component.selector))
				console.log(component);
				$(component.selector).each(component.init);*/
			}
		};

		this.loadComponent = function (component) {
			var style = document.createElement('link');
			style.href = '/js/components/' + component + '/styles.css?' + requirejs.s.contexts._.config.urlArgs;
			style.rel = 'stylesheet';
			style.type = 'text/css';
			style.media = 'all';
			document.getElementsByTagName('HEAD')[0].appendChild(style);

			requirejs(['/js/components/' + component + '/index.js'], function(init) {
				self.init = init;
				if (called)
					self.init();
			});

			
		}

	}

	ComponentsController.prototype.registrate = function () {

	};

	ComponentsController.prototype.add = function (component, selector, options) {
		this.registrates.push({
			selector: selector,
			options: {},
			elements: []
		});
	};

	ComponentsController.prototype._create = function (component, selector, options) {
		
	};
	
	function Component (component, selector, options) {
		var self = this;
		
		var called = false;

		this.title = component;
		this.registrates = [];

		this.add(selector, options);

		
		

		
 
	}

	Component.prototype.add = function (selector, options) {
		this.registrates.push({
			selector: selector,
			options: {},
			elements: []
		});
	
		for (var key in options) {
			this.registrates[this.registrates.length - 1].options[key] = options[key];
		}
	};

	


	
	
	var componentsController = componentsController || new ComponentsController;

	//Добавление сомпонента
	ComponentsController.Component = Backbone.View.extend({
		//
		events: {

		},

		render: function() {

		}


	});
	
	return componentsController;
});