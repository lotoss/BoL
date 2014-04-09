define(['jquery', 'underscore', 'backbone', 'components', 'text!./template.html'], 
	function ($, _, Backbone, componentController, template) {
	
	var Component = componentController.Component;
	
	return Test = Component.extend({

		template: template,

		events: {
			
		}


	});

});