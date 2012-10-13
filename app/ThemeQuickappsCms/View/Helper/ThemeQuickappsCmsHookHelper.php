<?php
/**
 * Theme Helper
 * Theme: QuickappsCms
 *
 * PHP version 5
 *
 * @package  Quickapps.Theme.QuickappsCms.View.Helper
 * @version  1.0
 * @author   Christopher Castro <chris@qucikapps.es>
 * @link     http://cms.quickapps.es
 */
class ThemeQuickappsCmsHookHelper extends AppHelper {
    public function beforeLayout() {
        $this->_View->viewVars['Layout']['footer'][] = $this->_View->element('footer');
    }

/* Header gradients */
    public function stylesheets_alter(&$css) {
        if (count($this->_View->viewVars['Layout']['node'])) {
            $css['inline'][] = "#search-advanced { display:none; }";
        }
    }

/* Adding toggle effect to advanced search form */
    public function javascripts_alter(&$js) {
        $js['file'][] = 'cufon-yui.js';
        $js['file'][] = 'comfortaa.cufonfonts.js';

        if ($this->request->params['plugin'] == 'node' &&
            $this->request->params['controller'] == 'node' &&
            $this->request->params['action'] == 'search' &&
            !count($this->_View->viewVars['Layout']['node'])
        ) {
            $js['inline'][] = '
                $(document).ready(function() {
                    $("#toggle-search_advanced").click(function () {
                        $("#search_advanced").toggle("fast");
                    });
                });
                ';
        }
    }

    # hooktag
    public function content_box($atts, $content=null, $code="") {
        $type = isset($atts['type']) ? $atts['type'] : 'success';
        $return = "<div class=\"td-box dialog-{$type}\">";
        $return .= $content;
        $return .= '</div>';

        return $return;
    }

    # hooktag
    public function button($atts, $content = null, $code="") {
        $atts = Set::merge(
            array(
            'link' => '#',
            'target' => '',
            'color' => '',
            'size' => '', #big/small
            ), $atts
        );

        extract($atts);

        $size = strtolower($size) != 'big' ? ' small' : 'big';
        $target = !empty($target) ? "target=\"{$target}\" " : "";
        $out = "<a href=\"{$link}\" class=\"{$size}-button {$size}{$color}\" {$target}><span>{$content}</span></a>";

        return $out;
    }
}