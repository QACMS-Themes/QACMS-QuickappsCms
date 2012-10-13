<?php
/**
 * Theme Hooktags Helper
 * Theme: QuickappsCms
 *
 * PHP version 5
 *
 * @package  Quickapps.Theme.QuickappsCms.View.Helper
 * @version  1.0
 * @author   Christopher Castro <chris@qucikapps.es>
 * @link     http://cms.quickapps.es
 */
class ThemeQuickappsCmsHooktagsHelper extends AppHelper {

    public function content_box($atts, $content=null, $code="") {
        $type = isset($atts['type']) ? $atts['type'] : 'success';
        $return = "<div class=\"td-box dialog-{$type}\">";
        $return .= $content;
        $return .= '</div>';

        return $return;
    }

    public function button($atts, $content = null, $code="") {
        $atts = Set::merge(
            array(
            'link'    => '#',
            'target'    => '',
            'color'    => '',
            'size'    => '', #big/small
            ), $atts
        );

        extract($atts);

        $size = strtolower($size) != 'big' ? ' small' : 'big';
        $target = !empty($target) ? "target=\"{$target}\" " : "";
        $out = "<a href=\"{$link}\" class=\"{$size}-button {$size}{$color}\" {$target}><span>{$content}</span></a>";

        return $out;
    }
}