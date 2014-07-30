<?php /*
include 'header.php'; ?>
<body>
    <div class="flashNotice"></div>
    <?php echo $this->renderPartial('/layouts/top-menu') ?>
    <section>
        <?php echo $content ?>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>*/ ?>
<?php include 'header.php'; ?>
<body>
	<?php echo $this->renderPartial('/layouts/top-menu') ?>
	<section>
        <?php echo $content ?>
    </section>
	<?php include 'footer.php'; ?>
</body>