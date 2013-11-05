<?php include('header.php'); ?>

<body>
    <div data-role="page" id="article">
        <header data-position="fixed" data-role="header" class="<?php echo $siteName; ?>">
            <a href="#site" data-icon="back" data-rel="back">Back</a>
            <h1><?php echo ucWords($siteName).'+'; ?></h1>
        </header>
        <div data-role="content">
        	<h1><?php echo $feed->title; ?></h1>
        	<div><?php echo $feed->description; ?></div>
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