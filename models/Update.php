<?php

class Update
{
    public static function createNews($author_name,$content)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO news (author_name,content) VALUES (:author_name, :content)';
        $result = $db->prepare($sql);
        $result->bindParam(':author_name', $author_name, PDO::PARAM_STR);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        $result->execute();
        header("Location:/");
    }

    public static function createComment($news_id,$author_name,$comment)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO comments (news_id,author_name,comment) VALUES (:news_id,:author_name, :comment)';
        $result = $db->prepare($sql);
        $result->bindParam(':news_id', $news_id, PDO::PARAM_INT);
        $result->bindParam(':author_name', $author_name, PDO::PARAM_STR);
        $result->bindParam(':comment', $comment, PDO::PARAM_STR);
        $result->execute();
        header("Location:/news/$news_id");
    }
}
