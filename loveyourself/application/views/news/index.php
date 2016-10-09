<?php foreach($news as $news_item) : ?>
	<h2> <?php echo $news_item['title']; ?>
	<div id = 'main'>
		<?php echo $news_item['text']; ?>
	</div>
		<?php echo $news_item['slug'] ?>
	<p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>
<?php endforeach; ?>