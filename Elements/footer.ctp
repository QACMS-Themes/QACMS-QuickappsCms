    <script type="text/javascript">
        jQuery('ul.nav').superfish({ 
            delay: 200,
            animation: {opacity:'show', height:'show'},
            speed: 'fast',
            autoArrows: true,
            dropShadows: false
        });

        Cufon.replace('.slogan p', { fontFamily: 'Colaborate-Thin', hover: true }); 
        Cufon.replace('#services h2', { fontFamily: 'Colaborate-Thin', hover: true }); 
        Cufon.replace('.node-full h2.node-title', { fontFamily: 'Colaborate-Thin', fontSize: '40px' });
        Cufon.replace('.node-list h2.node-title', { fontFamily: 'Colaborate-Thin', fontSize: '30px' });
    </script>

    <?php if (Configure::read('Theme.settings.analytic_key')): ?>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '<?php echo Configure::read('Theme.settings.analytic_key'); ?>']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <?php endif; ?>