<?php
include_once ROOT . '/models/Update.php';

class UpdateController
{
    public function actionAddNews()
    {
        $author_name = $_POST['author_name'];
        $content = $_POST['content'];
        Update::createNews($author_name, $content);
        return true;
    }
    public function actionAddComment($id)
    {
        if ($id) {
            $author_name = $_POST['author_name'];
            $comment = $_POST['comment'];
            Update::createComment($id,$author_name, $comment);
            return true;
        }
    }
}
