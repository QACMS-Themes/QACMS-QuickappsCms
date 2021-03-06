<?php echo $this->Form->input('Block.settings.slider_order', array('type' => 'textarea', 'class' => 'plain-text',  'label' => 'Images settings', 'value' => $block['Block']['settings']['slider_order'])); ?>
<em><?php echo __d('theme_quickapps_cms', 'Enter one image per line, in the format <b>file name|url|caption</b>. e.g.:'); ?></em>
<p>
    <span style="color:blue;">image1.jpg</span>|<span style="color:green;">http://www.domain.com/url_image1</span>|<span style="color:orange;">Description for image 1</span><br/>
    <span style="color:blue;">image2.jpg</span>|<span style="color:green;">http://www.domain.com/url_image2</span>|<span style="color:orange;">Description for image 2</span><br/>
    <span style="color:blue;">image4.jpg</span>|<span style="color:green;">http://www.domain.com/image3_url_only</span>|<br/>
    <span style="color:blue;">image3.jpg</span>||<span style="color:orange;">Description only</span>
</p>
<em> - <?php echo __d('theme_quickapps_cms', 'Image files should be stoted in /files/<b>%s</b>, you can change this folder in the <a href="%s">theme settings panel</a>', Configure::read('Modules.ThemeQuickappsCms.settings.slider_folder'), $this->Html->url('/admin/system/themes/settings/QuickappsCms')); ?></em><br/>
<em> - <?php echo __d('theme_quickapps_cms', 'Special tags are allowed'); ?></em>

<?php 
    echo $this->Form->input('Block.settings.slider_theme', 
        array(
            'type' => 'select', 
            'label' => __d('theme_quickapps_cms', 'Slider Theme'), 
            'options' => array('default' => 'Default', 'orman' => 'Orman', 'pascal' => 'Pascal', 'wds' => 'Web Design & Such'),
            'value' => @$block['Block']['settings']['slider_theme']
        )
    );
?>