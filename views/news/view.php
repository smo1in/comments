<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Effloresce by FCT</title>
	<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">

						<h2 class="title"><a href='/news/<?php echo $newsItem['id']; ?>'><?php echo $newsItem['title'] . ' # ' . $newsItem['id']; ?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name']; ?></a> on <?php echo $newsItem['date']; ?>
							&nbsp;&bull;&nbsp; <a href='/' class="permalink"> Back to HomePage</a></p>
						<div class="entry">
							<p><img src="/template/images/pic01.jpg" width="800" height="300" alt="" /></p>
							<p><?php echo $newsItem['content']; ?></p>
							<h2>Comments</h2><br />
							<?php foreach ($commentsItems as $commentItem) : ?>
								<p class="meta"><a href="#"><?php echo ($commentItem['author_name']); ?></a>
									put comment:
									<?php echo ($commentItem['comment']); ?></p>
							<?php endforeach; ?>
						</div>
						<div class="new_comment_form">
							<h2>New Post</h2>
							<form class="transparent" method="post" action="/update/addComment/<?php echo $newsItem['id']; ?>">
								<div class="form-inner">
									<p><label>Author<input type="text" name="author_name"> </label></p>
									<p><label>Text<textarea rows="2" cols="30" name="comment"></textarea></label></p>
									<input type="submit" value="Post Your Comment">
								</div>
							</form>
						</div>
					</div>


					<p><a href='/' class="permalink"> Back to HomePage</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
	</div>
	<?php include ROOT . '/views/layouts/footer.php'; ?>