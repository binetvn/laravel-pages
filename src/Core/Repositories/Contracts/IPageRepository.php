<?php

namespace BiNet\Pages\Repositories\Contracts;

use BiNet\App\Repositories\Contracts\IRepository;

interface IPageRepository extends IRepository {
	
	// 
	public function findBySlug($slug);

	/**
	 * @returns [results=>, count=>, ...]
	 */
	public function findAllBy($slug, $title, $skip=0, $take=-1, $sortBy=null, $sortDirection='asc');
}