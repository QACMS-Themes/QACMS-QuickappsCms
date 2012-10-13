<?php echo $this->Form->input('Module.settings.slider_folder', array('between' => $this->Html->url('/files/', true), 'type' => 'text', 'label' => __d('theme_quickapps_cms', 'Image slider folder'))); ?>
<em><?php echo __d('theme_quickapps_cms', 'Recomended images size:') ?> 950x300px<br/></em>

<?php echo $this->Form->input('Module.settings.twitter_link', array('type' => 'text', 'label' => __d('theme_quickapps_cms', 'Twitter Link'))); ?>
<?php echo $this->Form->input('Module.settings.facebook_link', array('type' => 'text', 'label' => __d('theme_quickapps_cms', 'Facebook Link'))); ?>
<?php echo $this->Form->input('Module.settings.analytic_key', array('style' => 'width:100px;' ,'type' => 'text', 'label' => __d('theme_quickapps_cms', 'Google Analytic Key'))); ?>
<em><?php echo __d('theme_quickapps_cms', 'e.g.: %s', 'UA-3219302-13'); ?></em>