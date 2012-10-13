<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Configure::read('Variable.language.code'); ?>" version="XHTML+RDFa 1.0" dir="<?php echo Configure::read('Variable.language.direction'); ?>">
    <head>
        <title><?php echo $this->Layout->title(); ?></title>
        <?php echo $this->Layout->meta(); ?>
        <?php echo $this->Layout->stylesheets(); ?>
        <?php echo $this->Layout->javascripts(); ?>
        <?php echo $this->Layout->header(); ?>
    </head>

    <body>
        <div id="header-top">
            <div class="container">
                <?php if (Configure::read('Theme.settings.site_logo')): ?>
                    <a href="<?php echo $this->Html->url('/'); ?>" id="logo">
                        <?php echo $this->Html->image(Configure::read('Theme.settings.site_logo_url')); ?>
                    </a>
                <?php endif; ?>            

                <?php if ($this->Block->regionCount('user-menu')): ?>
                <div id="user-menu">
                    <?php echo $this->Block->region('user-menu'); ?>
                </div>
                <?php endif; ?>

                <?php if ($this->Block->regionCount('language-switcher')): ?>
                <div id="language-switcher">
                    <?php echo $this->Block->region('language-switcher'); ?>
                </div>
                <?php endif; ?>

                <?php if ($this->Block->regionCount('search')): ?>
                <div id="search-block">
                    <?php echo $this->Block->region('search'); ?>
                </div>
                <?php endif; ?>

             </div>
        </div>

        <div id="header-bottom">
            <div class="container">
                <?php echo $this->Block->region('main-menu'); ?>
            </div>
        </div>

        <div id="page">
            <?php if ($this->Block->regionCount('slider')): ?>
            <div class="top-slider">
                <?php echo $this->Block->region('slider'); ?>
            </div>
            <?php endif; ?>

            <?php if ($this->Layout->is('view.frontpage')): ?>
                <div class="container">
                    <?php if (Configure::read('Theme.settings.site_slogan')): ?>
                    <div class="slogan">
                        <p>
                            <?php echo $this->Html->image('left-quote.png'); ?>
                            <?php echo __t(Configure::read('Variable.site_slogan')); ?>
                            <?php echo $this->Html->image('right-quote.png'); ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <div id="services">
                        <div class="service first">
                            <?php echo $this->Block->region('services-left'); ?>

                        </div> <!-- end .service -->

                        <div class="service middle">
                            <?php echo $this->Block->region('services-center'); ?>

                        </div> <!-- end .service -->

                        <div class="service last">
                            <?php echo $this->Block->region('services-right'); ?>
                        </div> <!-- end .service -->
                    </div>

                    <?php echo $this->element('social-links'); ?>
                </div>
            <?php else: ?>
                <div class="container">
                    <div id="help-blocks">
                        <?php echo $this->Block->region('help'); ?>
                    </div>

                    <?php if ($sessionFlash = $this->Layout->sessionFlash()): ?>
                    <div id="sessionFlash">
                        <?php echo $sessionFlash; ?>
                    </div>
                    <?php endif; ?>

                    <div id="sidebar-left">
                        <?php echo $this->Block->region('sidebar-left'); ?>&nbsp;
                    </div>

                    <div id="content" class="clearfix">
                        <?php echo $this->Layout->content(); ?>
                    </div>

                    <?php echo $this->element('social-links'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div id="footer">
            <div class="container">
                <div class="social">
                    <?php
                        if ($Layout['feed']) {
                            echo $this->Html->link($this->Html->image('rss_32.png'), $Layout['feed'], array('escape' => false));
                        }

                        if (Configure::read('Theme.settings.facebook_link')) {
                            echo $this->Html->link($this->Html->image('facebook_32.png'), Configure::read('Theme.settings.facebook_link'), array('escape' => false));
                        }

                        if (Configure::read('Theme.settings.twitter_link')) {
                            echo $this->Html->link($this->Html->image('twitter_32.png'), Configure::read('Theme.settings.twitter_link'), array('escape' => false));
                        }
                    ?>
                </div>

                <div class="footer-blocks">
                    <?php echo $this->Layout->hook('system_powered_by'); ?>
                </div>
            </div>
        </div>

        <?php echo $this->Layout->footer(); ?>
    </body>
</html>

<?php echo "<!-- " . round(microtime(true) - TIME_START, 4) . "s -->";