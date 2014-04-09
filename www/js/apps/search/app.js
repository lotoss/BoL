define(['jquery', 'backbone', 'components', 'result.view', 'filter.view', 'search.view'], 
	function ( $, Backbone, compCtrl, ResultView, FilterView, SearchView ) {

	Application = Backbone.Model.extend({

		defaults: {
			
		},
		
		initialize: function () {
			compCtrl.init();

			this.views = {
				'result': new ResultView ({ model: this }),
				'search': new SearchView ({ model: this }),
				'filter': new FilterView ({ model: this })
			};
		}

	}); 

	return new Application();

});