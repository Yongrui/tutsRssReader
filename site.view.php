<?php include('header.php'); ?>

<body>
    <div data-role="page" id="site">
        <header data-position="fixed" data-role="header" class="<?php echo ucwords($siteName); ?>">
            <a href="#home" data-icon="back" data-rel="back">Back</a>
            <h1><?php echo ucwords($siteName); ?></h1>
            <a href="#" data-icon="refresh" id="refresh" class="ui-btn-right" data-iconpos="notext">Refresh</a>
        </header>
        <div data-role="content">
            <ul data-role="listview">
			<?php
			foreach ($feed->query->results->item as $item => $value) {
				if ($siteName === 'psdtuts') {
					$comments = $item->comment->content;
				} else {
					$comments = $item->comments[1];
				}
			?>

			<li>
				<h2>
					<a href="article.php?siteName=<?php $siteName;?>&origLink=<?php echo urlencode($item->guid->content);?>">
						<?php echo $item->title; ?>
					</a>
				</h2>
				<span class="ui-li-count"><?php echo $comments; ?> </span>
			</li>

			<?php } ?>
			
            </ul>
        </div>

        <footer data-position="fixed" data-role="footer">
            <h4> www.tutsplus.com </h4>
        </footer>
    </div>

    <footer data-position="fixed" data-role="footer">
            <h4> www.tutsplus.com </h4>
    </footer>
</body>
</html>