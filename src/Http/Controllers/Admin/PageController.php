<?php

namespace BiNet\Pages\Http\Controllers\Admin;

use Illuminate\Http\Request;

class PageController {
	// BiNet\Pages\Services\PageService
	public $service;

	public function __construct(PageService $service) {
		$this->service = $service;
	}

	public function index(PageFilter $filter) {
		$pages = $this->service->query();

	}

	public function create() {
		$data = $request->all();

		try {
			$this->service->create($data);
		} catch (Exception $e) {
			
		}
	}

	public function store($request) {
		try {
			$result = $this->service->create($data);
		} catch(ValidationException $e) {

		}
	}

	public function edit($id) {

	}

	public function update($request, $id) {
		$data = $request->all();

		try {
			$result = $this->request->update($id, $data);
		} catch (NotFoundException $e) {

		} catch (ValidationException $e) {

		}
	}

	public function destroy($id) {
		try{
			$result = $this->service->delete($id);
		} catch (NotFoundException $e) {

		}
	}
}