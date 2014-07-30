<?php include 'header.php'; ?>

<body>
    <div class="flashNotice"></div>
    <?php $this->renderPartial('/elements/quota') ?>
    <section class="searchContent">
        <?php echo $content ?>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>