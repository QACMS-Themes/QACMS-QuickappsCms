<?php
class InstallComponent extends Component {
    public $Installer;

    public function beforeInstall() {
        return true;
    }

    function afterInstall() {
        // add slider settings
        ClassRegistry::init('Module')->save(
            array(
                'Module' => array(
                    'name' => 'ThemeQuickappsCms',
                    'settings' => array(
                        'slider_folder' => 'theme_quickapps_cms_slider'
                    )
                )
            )
        );

        // create slider folder
        $this->Installer->rcopy(
            THEMES . 'QuickappsCms' . DS . 'app' . DS . 'ThemeQuickappsCms' . DS . 'webroot' . DS . 'files' . DS . 'theme_quickapps_cms_slider_install', 
            ROOT . DS . 'webroot' . DS . 'files' . DS . 'theme_quickapps_cms_slider' . DS
        );

        /**
		 * Create slider block widget
		 *
		 */
		$this->Installer->createBlock(
			array(
                'module' => 'ThemeQuickappsCms',
                'delta' => 'slider',
                'status' => 1,
                'visibility' => 1,
                'pages' => '/',
                'title' => 'Slider',
                'settings' => array(
                    'slider_order' => "1_[language].jpg\n2_[language].jpg\n3_[language].jpg"
                )
            )
		, 'QuickappsCms.slider');

        return true;        
    }

    public function beforeUninstall(){
        return true;
    }

    public function afterUninstall(){
        return true;
    }
}