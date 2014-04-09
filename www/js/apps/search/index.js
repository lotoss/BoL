requirejs.config({
	//baseUrl: '/js/apps/search',
	paths: {
		'app': 'apps/search/app',
		'router': 'apps/search/router',

		//Views
		'result.view': 'apps/search/views/result.v',
		'filter.view': 'apps/search/views/filter.v',
		'search.view': 'apps/search/views/search.v',

		//Collections
		'searchResult.coll': 'apps/search/searchResult.c',
		'filter.coll': 'apps/search/filter.c',

		//Models
		'searchResult.model' : 'apps/search/searchResult.m'

	}
});

requirejs(['app'], function (application) {
	window.searchApp = application;
});