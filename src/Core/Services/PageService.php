<?php

namespace BiNet\Pages\Services;

class PageService {
	private $repo;
	private $validator;

	public function __construct(PageRepository $repo, $validator) {
		$this->repo = $repo;
		$this->validator = $validator;
	}

	public function findBySlug($slug) {
		return $this->repo->findBySlug($slug);
	}

	public function findAll() {
		
	}

}