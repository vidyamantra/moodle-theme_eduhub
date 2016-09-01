<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's eduhub theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_eduhub
 * @copyright 2016 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_eduhub_process_css($css, $theme) {
    global $OUTPUT;
    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_eduhub_set_logo($css, $logo);
    // Set the background image for the headerimg.
    $headerimg = $theme->setting_file_url('headerimg', 'headerimg');
    if (!isset($headerimg)) {
        $headerimg = $OUTPUT->pix_url('headerimg', 'theme');
    }
    $css = theme_eduhub_set_headerimg($css, $headerimg);
    // Set the background image for the footerimg.
    $footerimg = $theme->setting_file_url('footerimg', 'footerimg');
    if (!isset($footerimg)) {
        $footerimg = $OUTPUT->pix_url('footerimg', 'theme');
    }
    $css = theme_eduhub_set_footerimg($css, $footerimg);
    // Set the Site color.
    if (empty($theme->settings->sitecolor)) {
        $sitecolor = '#3e65a0'; // Default.
    } else {
        $sitecolor = $theme->settings->sitecolor;
    }
    $css = eduhub_set_sitecolor($css, $sitecolor);
    
    // Set the Banner Font Color.
    if (empty($theme->settings->bannerfontcolor)) {
        $bannerfontcolor = '#fff'; // Default.
    } else {
        $bannerfontcolor = $theme->settings->bannerfontcolor;
    }
    $css = eduhub_set_bannerfontcolor($css, $bannerfontcolor);
    
    
    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_eduhub_set_customcss($css, $customcss);
    return $css;
}
/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_eduhub_set_logo($css, $logo) {
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}
function eduhub_set_sitecolor($css, $sitecolor) {
    $tag = '[[setting:sitecolor]]';
    $css = str_replace($tag, $sitecolor, $css);
    return $css;
}
function eduhub_set_bannerfontcolor($css, $bannerfontcolor) {
    $tag = '[[setting:bannerfontcolor]]';
    $css = str_replace($tag, $bannerfontcolor, $css);
    return $css;
}
function theme_eduhub_set_headerimg($css, $headerimg) {
    $tag = '[[setting:headerimg]]';
    $replacement = $headerimg;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}
function theme_eduhub_set_footerimg($css, $footerimg) {
    $tag = '[[setting:footerimg]]';
    $replacement = $footerimg;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_eduhub_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'logo') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'headerimg') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('headerimg', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'footerimg') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('footerimg', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketing1icon') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('marketing1icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketing2icon') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('marketing2icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketing3icon') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('marketing3icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketing4icon') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('marketing4icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'mainbox1icon') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('mainbox1icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'mainbox2icon') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('mainbox2icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'mainbox3icon') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('mainbox3icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'mainbox4icon') {
        $theme = theme_config::load('eduhub');
        return $theme->setting_file_serve('mainbox4icon', $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}
/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_eduhub_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
/**
 * Returns an object containing HTML for the areas affected by settings.
 *
 * Do not add eduhub specific logic in here, child themes should be able to
 * rely on that function just by declaring settings with similar names.
 *
 * @param renderer_base $output Pass in $OUTPUT.
 * @param moodle_page $page Pass in $PAGE.
 * @return stdClass An object with the following properties:
 *      - navbarclass A CSS class to use on the navbar. By default ''.
 *      - heading HTML to use for the heading. A logo if one is selected or the default heading.
 *      - footnote HTML to use as a footnote. By default ''.
 */
function theme_eduhub_get_html_for_settings(renderer_base $output, moodle_page $page) {
    global $CFG;
    $return = new stdClass;

    $return->navbarclass = '';
    if (!empty($page->theme->settings->invert)) {
        $return->navbarclass .= ' navbar-inverse';
    }
    // Only display the logo on the front page and login page, if one is defined.
    if (!empty($page->theme->settings->logo) &&
            ($page->pagelayout == 'frontpage' || $page->pagelayout == 'login')) {
        $return->heading = html_writer::tag('div', '', array('class' => 'logo'));
    } else {
        $return->heading = $output->page_heading();
    }
    $return->footnote = '';
    if (!empty($page->theme->settings->footnote)) {
        $return->footnote = '<div class="footnote text-center">'.format_text($page->theme->settings->footnote).'</div>';
    }

    return $return;
}


function theme_eduhub_get_setting($setting, $format = false) {
    global $CFG;
    require_once($CFG->dirroot . '/lib/weblib.php');
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('eduhub');
    }
    if (empty($theme->settings->$setting)) {
        return false;
    } else if (!$format) {
        return $theme->settings->$setting;
    } else if ($format === 'format_text') {
        return format_text($theme->settings->$setting, FORMAT_PLAIN);
    } else if ($format === 'format_html') {
        return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
    } else {
        return format_string($theme->settings->$setting);
    }
}