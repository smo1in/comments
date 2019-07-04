<?php
return array(
	
	'news/([0-9]+)' => 'news/view/$1',
	'update/addNews' => 'update/addNews',
	'update/addComment/([0-9]+)' => 'update/addComment/$1',
	'' => 'news/index'
);
