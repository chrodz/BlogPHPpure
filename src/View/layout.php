<html lang="es">
<head>
    <title>Blog en PHP Puro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/blog.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <?php print_r($this)?>
    <?php echo $this->render('tpl/header.php', array('title'=>'BlogPierre')) ?>
    <?php echo $this->render($template, array()) ?>
    <?php echo $this->render('tpl/footer.php', array()) ?>
    <?php echo $this->test()?>
</div>

</body>
</html>