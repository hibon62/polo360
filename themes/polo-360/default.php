<?php
defined('C5_EXECUTE') or die("Access Denied");
$this->inc('elements/header.php'); ?>
    </head>
    <body>
      <div class="container_12 prefix_5">
        <?php
          $a = new Area('Contenu');
          $a->display($c);
        ?>
      </div>
<?php $this->inc('elements/footer.php'); ?>
