<?php
namespace BiNet\Pages\Entities;

use BiNet\App\Entities\Entity;

class Page extends Entity {
	private $slug;
	private $layout;

	private $title;
	private $sections;
}