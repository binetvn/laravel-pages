<?php

namespace BiNet\Pages\Controllers\Frontend;

use Illuminate\Http\Request;

class PageController {
	private $pageService;

	/**
	 * show page with slug
	 * @param  [type] $slug [description]
	 * @return [type]       [description]
	 * @effects
	 * 	get $page by slug
	 * 	
	 */
	public function show($request, $slug = null) {
		// try {
		// 	$page = $pageService->findBySlug($slug);
			
		// 	return view('page.show', compact('page'));
		// } catch (NotFoundException $e) {
		// 	return abort(404);
		// }
		return 'It works';
	}
}