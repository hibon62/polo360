<?php $this->inc('elements/header.php'); ?>

            <div class="slider">
                <div class="slider_cont">
                    <div class="separater_hd"></div>
                    <div class="slider_image">
                        <?php
                            $a = new Area('contenu');
                            $a -> display($c);
                        ?>
                        <ul class="bullets">
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <h1>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1>
                </div>
                <div class="clear"></div>
            </div>
            <div class="container_12">
                <div class="grid_4 logic">
                    <?php
                        $a = new Area('Col1');
                        $a -> display($c);
                    ?>
                </div>
                <div class="grid_4 solution">
                    <?php
                        $a = new Area('Col2');
                        $a -> display($c);
                    ?>
                </div>
                <div class="grid_4 culture">
                    <?php
                        $a = new Area('Col3');
                        $a -> display($c);
                    ?>
                </div>
                <div class="clear"></div>
                <div class="sep"></div>
                <div class="grid_4 social_con">
                    <div class="social">
                        <?php
                            $a = new Area('Social');
                            $a -> display($c);
                        ?>
                    </div>
                </div>
                <div class="grid_4 contact">
                    <?php
                            $a = new Area('Contact');
                            $a -> display($c);
                        ?>
                </div>
                <div class="grid_4 news">
                  <?php
                          $a = new Area('blog');
                          $a -> display($c);
                      ?>
                </div>
            </div>
            <div class="clear"></div>

<?php $this->inc('elements/footer.php'); ?>
