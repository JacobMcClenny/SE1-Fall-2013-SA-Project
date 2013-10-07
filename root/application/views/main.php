<?php $this->load->helper('html'); ?>
<?php echo doctype('html5'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <?php foreach ($styles as $url) echo link_tag("css/$url.css") . "\n"; ?>
        <?php foreach ($scripts as $url) echo link_tag("js/$url.js") . "\n"; ?>
    </head>
    <body>
        <header>
            <?php $this->load->view('header'); ?>
        </header>
        
        <nav>
            <?php $this->load->view('nav'); ?>
        </nav>
        
        <section class="content">
            <?php $this->load->view('content/'.$content); ?>
        </section>
        
        <footer>
            <?php $this->load->view('footer'); ?>
        </footer>
    </body>
</html>
