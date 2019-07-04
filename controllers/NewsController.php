<?php

include_once ROOT. '/models/News.php';

class NewsController {

	public function actionIndex()
	{
		
		$newsList = array();
		$newsList = News::getDataList("news.date");
		 // List of news for the slider
		$sliderNews = array();
        $sliderNews = News::getDataList("COUNT(comm.comment)");

		require_once(ROOT . '/views/news/index.php');

		return true;
	}

	public function actionView($id)
	{
		if ($id) {
			$newsItem =array();
			$newsItem = News::getNewsItemByID($id);
			$commentsItems=array();
			$commentsItems=News::getCommentsByID($id);

	require_once(ROOT . '/views/news/view.php');


		}

		return true;

	}

}

