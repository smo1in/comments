<?php

class News
{
	/** Returns single news items with specified id
	 * @rapam integer &id
	 */

	public static function getNewsItemByID($id)
	{
		$id = intval($id);

		if ($id) {

			$db = Db::getConnection();
			$result = $db->query('SELECT news.id, news.title, news.date, news.author_name, news.content,comm.comment
			FROM php_base.news AS news 
		   	LEFT JOIN php_base.comments AS comm 
			ON news.id = comm.news_id
			WHERE news.id=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}
	}

	public static function getCommentsByID($id)
	{
		$id = intval($id);
		if ($id) {

			$db = Db::getConnection();
			$commentsItems=array();
			$result = $db->query('SELECT news.id,comm.comment,comm.author_name
			FROM php_base.news AS news 
		   	LEFT JOIN php_base.comments AS comm 
			ON news.id = comm.news_id
			WHERE news.id=' . $id);
			
			$i = 0;
			while ($row = $result->fetch()) {
				$commentsItems[$i]['author_name'] = $row['author_name'];
				$commentsItems[$i]['comment'] = $row['comment'];
				$i++;
			}

			return $commentsItems;
		}
	}


	public static function getDataList($param)
	{

		$db = Db::getConnection();
		$dataList = array();

		$result = $db->query('SELECT news.id, news.title, news.date, news.author_name, news.content,COUNT(comm.comment) 
 		FROM php_base.news AS news 
		LEFT JOIN php_base.comments AS comm 
	  	ON news.id = comm.news_id
 		GROUP BY news.id, news.title, news.date, news.author_name, news.content
 		ORDER BY ' . $param . ' DESC LIMIT 5;');

		$i = 0;
		while ($row = $result->fetch()) {
			$dataList[$i]['id'] = $row['id'];
			$dataList[$i]['title'] = $row['title'];
			$dataList[$i]['date'] = $row['date'];
			$dataList[$i]['author_name'] = $row['author_name'];
			$dataList[$i]['content'] = $row['content'];
			$dataList[$i]['COUNT(comm.comment)'] = $row['COUNT(comm.comment)'];
			$i++;
		}

		return $dataList;
	}
}
