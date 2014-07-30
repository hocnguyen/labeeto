<?php include 'header.php'; ?>
<body class="home">
    <?php echo $this->renderPartial('/layouts/top-menu',array('options'=>array('no-top-menu'=>true))) ?>
    <div class="container" id="mainWrapper">
        <?php echo $content ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>