<?php include ROOT . '/views/layouts/header.php'; ?>
<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<div class="new_post_form">
					<h2>New Post</h2>
					<form class="transparent" method="post" action="/update/addNews">
						<div class="form-inner">
							<p><label>Author<input type="text" name="author_name"> </label></p>
							<p><label>Text<textarea rows="2" cols="30" name="content"></textarea></label></p>
							<input type="submit" value="Post Your News">
						</div>
					</form>
				</div>
				<?php foreach ($newsList as $newsItem) : ?>
					<div class="post">
						<h2 class="title"><a href='/news/<?php echo $newsItem['id']; ?>'><?php echo $newsItem['title'] . ' # ' . $newsItem['id']; ?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name']; ?></a> on <?php echo $newsItem['date']; ?>
							&nbsp;&bull;&nbsp; <a href='/news/<?php echo $newsItem['id']; ?>' class="permalink"> Full article</a></p>
						<div class="entry">
							<p><img src="/template/images/pic01.jpg" width="800" height="300" alt="" /></p>
							<p><?php echo mb_strimwidth($newsItem['content'], 0, 100, "..."); ?></p>
							<p>
								<h4><?php echo $newsItem['COUNT(comm.comment)'] ?> comment(s)</h4>
							</p>
						</div>
					</div>
				<?php endforeach; ?>
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