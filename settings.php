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

$settings = null;
defined('MOODLE_INTERNAL') || die;
$ADMIN->add('themes', new admin_category('theme_eduhub', 'Eduhub'));

// General setting page.
$temp = new admin_settingpage('theme_eduhub_general',  get_string('generalsettings', 'theme_eduhub'));

    // Logo file setting.
    $name = 'theme_eduhub/logo';
    $title = get_string('logo', 'theme_eduhub');
    $description = get_string('logodesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Site color.
    $name = 'theme_eduhub/sitecolor';
    $title = get_string('sitecolor', 'theme_eduhub');
    $description = get_string('sitecolordesc', 'theme_eduhub');
    $default = '#3e65a0';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $temp->add($setting);
    // Custom CSS file.
    $name = 'theme_eduhub/customcss';
    $title = get_string('customcss', 'theme_eduhub');
    $description = get_string('customcssdesc', 'theme_eduhub');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Back to top button.
    $name = 'theme_eduhub/backtotop';
    $title = get_string('backtotop', 'theme_eduhub');
    $description = get_string('backtotopdesc', 'theme_eduhub');
    $default = '1';
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);
    // Read-me.
    $readme = new moodle_url('/theme/eduhub/README.txt');
   $readme = html_writer::link($readme, get_string('readme_click', 'theme_eduhub'), array('target' => '_blank'));
    $temp->add(new admin_setting_heading('theme_eduhub_generalreadme', get_string('readme_title', 'theme_eduhub'),
    get_string('readme_desc', 'theme_eduhub', array('url' => $readme))));
$ADMIN->add('theme_eduhub', $temp);
// Frontpage Banner setting page.
$temp = new admin_settingpage('theme_eduhub_frontpagebanner',  get_string('frontpagebanner', 'theme_eduhub'));
    // Headerimg file setting.
    $name = 'theme_eduhub/headerimg';
    $title = get_string('headerimg', 'theme_eduhub');
    $description = get_string('headerimgdesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'headerimg');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Bannerheading.
    $name = 'theme_eduhub/bannerheading';
    $title = get_string('bannerheading', 'theme_eduhub');
    $description = get_string('bannerheadingdesc', 'theme_eduhub');
    $default = 'Perfect Learning System';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Bannercontent.
    $name = 'theme_eduhub/bannercontent';
    $title = get_string('bannercontent', 'theme_eduhub');
    $description = get_string('bannercontentdesc', 'theme_eduhub');
    $default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Read-me.
    $readme = new moodle_url('/theme/eduhub/README.txt');
   $readme = html_writer::link($readme, get_string('readme_click', 'theme_eduhub'), array('target' => '_blank'));
    $temp->add(new admin_setting_heading('theme_eduhub_generalreadme', get_string('readme_title', 'theme_eduhub'),
    get_string('readme_desc', 'theme_eduhub', array('url' => $readme))));
$ADMIN->add('theme_eduhub', $temp);
// Marketing Box setting page.
$temp = new admin_settingpage('theme_eduhub_marketingbox',  get_string('marketingbox', 'theme_eduhub'));
    $name = 'theme_eduhub/displaymarketingbox';
    $title = get_string('displaymarketingbox', 'theme_eduhub');
    $description = get_string('displaymarketingboxdesc', 'theme_eduhub');
    $default = 1;
    $choices = array(0 => 'No', 1 => 'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);
    // Marketing1icon.
    $name = 'theme_eduhub/marketing1icon';
    $title = get_string('marketing1icon', 'theme_eduhub');
    $description = get_string('marketing1icondesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing1icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing1heading.
    $name = 'theme_eduhub/marketing1heading';
    $title = get_string('marketing1heading', 'theme_eduhub');
    $description = get_string('marketing1headingdesc', 'theme_eduhub');
    $default = 'We Provide';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing1subheading.
    $name = 'theme_eduhub/marketing1subheading';
    $title = get_string('marketing1subheading', 'theme_eduhub');
    $description = get_string('marketing1subheadingdesc', 'theme_eduhub');
    $default = 'Forum And Chat';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing1content.
    $name = 'theme_eduhub/marketing1content';
    $title = get_string('marketing1content', 'theme_eduhub');
    $description = get_string('marketing1contentdesc', 'theme_eduhub');
    $default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing1url.
    $name = 'theme_eduhub/marketing1url';
    $title = get_string('marketing1url', 'theme_eduhub');
    $description = get_string('marketing1urldesc', 'theme_eduhub');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing2icon.
    $name = 'theme_eduhub/marketing2icon';
    $title = get_string('marketing2icon', 'theme_eduhub');
    $description = get_string('marketing2icondesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing2icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing2heading.
    $name = 'theme_eduhub/marketing2heading';
    $title = get_string('marketing2heading', 'theme_eduhub');
    $description = get_string('marketing2headingdesc', 'theme_eduhub');
    $default = 'We serve';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing2subheading.
    $name = 'theme_eduhub/marketing2subheading';
    $title = get_string('marketing2subheading', 'theme_eduhub');
    $description = get_string('marketing2subheadingdesc', 'theme_eduhub');
    $default = 'online courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing2content.
    $name = 'theme_eduhub/marketing2content';
    $title = get_string('marketing2content', 'theme_eduhub');
    $description = get_string('marketing2contentdesc', 'theme_eduhub');
    $default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing2url.
    $name = 'theme_eduhub/marketing2url';
    $title = get_string('marketing2url', 'theme_eduhub');
    $description = get_string('marketing2urldesc', 'theme_eduhub');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing3icon.
    $name = 'theme_eduhub/marketing3icon';
    $title = get_string('marketing3icon', 'theme_eduhub');
    $description = get_string('marketing3icondesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing3icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing3heading.
    $name = 'theme_eduhub/marketing3heading';
    $title = get_string('marketing3heading', 'theme_eduhub');
    $description = get_string('marketing3headingdesc', 'theme_eduhub');
    $default = 'Fast online';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing3subheading.
    $name = 'theme_eduhub/marketing3subheading';
    $title = get_string('marketing3subheading', 'theme_eduhub');
    $description = get_string('marketing3subheadingdesc', 'theme_eduhub');
    $default = 'support';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing3content.
    $name = 'theme_eduhub/marketing3content';
    $title = get_string('marketing3content', 'theme_eduhub');
    $description = get_string('marketing3contentdesc', 'theme_eduhub');
    $default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing3url.
    $name = 'theme_eduhub/marketing3url';
    $title = get_string('marketing3url', 'theme_eduhub');
    $description = get_string('marketing3urldesc', 'theme_eduhub');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing4icon.
    $name = 'theme_eduhub/marketing4icon';
    $title = get_string('marketing4icon', 'theme_eduhub');
    $description = get_string('marketing4icondesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing4icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing4heading.
    $name = 'theme_eduhub/marketing4heading';
    $title = get_string('marketing4heading', 'theme_eduhub');
    $description = get_string('marketing4headingdesc', 'theme_eduhub');
    $default = 'Ask que';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing4subheading.
    $name = 'theme_eduhub/marketing4subheading';
    $title = get_string('marketing4subheading', 'theme_eduhub');
    $description = get_string('marketing4subheadingdesc', 'theme_eduhub');
    $default = 'we give you answere';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing4content.
    $name = 'theme_eduhub/marketing4content';
    $title = get_string('marketing4content', 'theme_eduhub');
    $description = get_string('marketing4contentdesc', 'theme_eduhub');
    $default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Marketing4url.
    $name = 'theme_eduhub/marketing4url';
    $title = get_string('marketing4url', 'theme_eduhub');
    $description = get_string('marketing4urldesc', 'theme_eduhub');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Read-me.
    $readme = new moodle_url('/theme/eduhub/README.txt');
   $readme = html_writer::link($readme, get_string('readme_click', 'theme_eduhub'), array('target' => '_blank'));
    $temp->add(new admin_setting_heading('theme_eduhub_generalreadme', get_string('readme_title', 'theme_eduhub'),
    get_string('readme_desc', 'theme_eduhub', array('url' => $readme))));
$ADMIN->add('theme_eduhub', $temp);
// Main Box setting page.
$temp = new admin_settingpage('theme_eduhub_mainbox',  get_string('mainbox', 'theme_eduhub'));
    $name = 'theme_eduhub/displaymainbox';
    $title = get_string('displaymainbox', 'theme_eduhub');
    $description = get_string('displaymainboxdesc', 'theme_eduhub');
    $default = 1;
    $choices = array(0 => 'No', 1 => 'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);
    // Mainheading.
    $name = 'theme_eduhub/mainheading';
    $title = get_string('mainheading', 'theme_eduhub');
    $description = get_string('mainheadingdesc', 'theme_eduhub');
    $default = 'Reviews for MDLMS';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Maincontent.
    $name = 'theme_eduhub/maincontent';
    $title = get_string('maincontent', 'theme_eduhub');
    $description = get_string('maincontentdesc', 'theme_eduhub');
    $default = 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox1icon.
    $name = 'theme_eduhub/mainbox1icon';
    $title = get_string('mainbox1icon', 'theme_eduhub');
    $description = get_string('mainbox1icondesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox1icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox1heading.
    $name = 'theme_eduhub/mainbox1heading';
    $title = get_string('mainbox1heading', 'theme_eduhub');
    $description = get_string('mainbox1headingdesc', 'theme_eduhub');
    $default = 'All Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox1content.
    $name = 'theme_eduhub/mainbox1content';
    $title = get_string('mainbox1content', 'theme_eduhub');
    $description = get_string('mainbox1contentdesc', 'theme_eduhub');
    $default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox1url.
    $name = 'theme_eduhub/mainbox1url';
    $title = get_string('mainbox1url', 'theme_eduhub');
    $description = get_string('mainbox1urldesc', 'theme_eduhub');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox2icon.
    $name = 'theme_eduhub/mainbox2icon';
    $title = get_string('mainbox2icon', 'theme_eduhub');
    $description = get_string('mainbox2icondesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox2icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox2heading.
    $name = 'theme_eduhub/mainbox2heading';
    $title = get_string('mainbox2heading', 'theme_eduhub');
    $description = get_string('mainbox2headingdesc', 'theme_eduhub');
    $default = 'Messages';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox2content.
    $name = 'theme_eduhub/mainbox2content';
    $title = get_string('mainbox2content', 'theme_eduhub');
    $description = get_string('mainbox2contentdesc', 'theme_eduhub');
    $default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox2url.
    $name = 'theme_eduhub/mainbox2url';
    $title = get_string('mainbox2url', 'theme_eduhub');
    $description = get_string('mainbox2urldesc', 'theme_eduhub');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox3icon.
    $name = 'theme_eduhub/mainbox3icon';
    $title = get_string('mainbox3icon', 'theme_eduhub');
    $description = get_string('mainbox3icondesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox3icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox3heading.
    $name = 'theme_eduhub/mainbox3heading';
    $title = get_string('mainbox3heading', 'theme_eduhub');
    $description = get_string('mainbox3headingdesc', 'theme_eduhub');
    $default = 'Forum';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox3content.
    $name = 'theme_eduhub/mainbox3content';
    $title = get_string('mainbox3content', 'theme_eduhub');
    $description = get_string('mainbox3contentdesc', 'theme_eduhub');
    $default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox3url.
    $name = 'theme_eduhub/mainbox3url';
    $title = get_string('mainbox3url', 'theme_eduhub');
    $description = get_string('mainbox3urldesc', 'theme_eduhub');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox4icon.
    $name = 'theme_eduhub/mainbox4icon';
    $title = get_string('mainbox4icon', 'theme_eduhub');
    $description = get_string('mainbox4icondesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'mainbox4icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox4heading.
    $name = 'theme_eduhub/mainbox4heading';
    $title = get_string('mainbox4heading', 'theme_eduhub');
    $description = get_string('mainbox4headingdesc', 'theme_eduhub');
    $default = 'Help';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox4content.
    $name = 'theme_eduhub/mainbox4content';
    $title = get_string('mainbox4content', 'theme_eduhub');
    $description = get_string('mainbox4contentdesc', 'theme_eduhub');
    $default = 'Contrary to popular belief, Lorem classical literature, discovered the undoubtable source.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mainbox4url.
    $name = 'theme_eduhub/mainbox4url';
    $title = get_string('mainbox4url', 'theme_eduhub');
    $description = get_string('mainbox4urldesc', 'theme_eduhub');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Read-me.
    $readme = new moodle_url('/theme/eduhub/README.txt');
   $readme = html_writer::link($readme, get_string('readme_click', 'theme_eduhub'), array('target' => '_blank'));
    $temp->add(new admin_setting_heading('theme_eduhub_generalreadme', get_string('readme_title', 'theme_eduhub'),
    get_string('readme_desc', 'theme_eduhub', array('url' => $readme))));
    $ADMIN->add('theme_eduhub', $temp);
    // Footer setting page.
$temp = new admin_settingpage('theme_eduhub_footersettings',  get_string('footersettings', 'theme_eduhub'));
    // Getintouch.
    $name = 'theme_eduhub/getintouch';
    $title = get_string('getintouch', 'theme_eduhub');
    $description = get_string('getintouchdesc', 'theme_eduhub');
    $default = 'get in touch with us';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Getintouchcontent.
    $name = 'theme_eduhub/getintouchcontent';
    $title = get_string('getintouchcontent', 'theme_eduhub');
    $description = get_string('getintouchcontentdesc', 'theme_eduhub');
    $default = 'Lorem Ipsum is simply dummy text of the printing.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Address.
    $name = 'theme_eduhub/address';
    $title = get_string('address', 'theme_eduhub');
    $description = get_string('addressdesc', 'theme_eduhub');
    $default = 'Address : Jst, Usrp 123, London UK';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mobile.
    $name = 'theme_eduhub/mobile';
    $title = get_string('mobile', 'theme_eduhub');
    $description = get_string('mobiledesc', 'theme_eduhub');
    $default = 'Mobile : 0012345678';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Mail.
    $name = 'theme_eduhub/mail';
    $title = get_string('mail', 'theme_eduhub');
    $description = get_string('maildesc', 'theme_eduhub');
    $default = 'Email : info@eduhub.com';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Phone.
    $name = 'theme_eduhub/phone';
    $title = get_string('phone', 'theme_eduhub');
    $description = get_string('phonedesc', 'theme_eduhub');
    $default = 'Phone : 011-1234567';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Siteheading.
    $name = 'theme_eduhub/siteheading';
    $title = get_string('siteheading', 'theme_eduhub');
    $description = get_string('siteheadingdesc', 'theme_eduhub');
    $default = 'edu hub';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Sitecontent.
    $name = 'theme_eduhub/sitecontent';
    $title = get_string('sitecontent', 'theme_eduhub');
    $description = get_string('sitecontentdesc', 'theme_eduhub');
    $default = 'Contrary to popular belief, Lorem Ipsum is not simply random text.';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Facebook url setting.
    $name = 'theme_eduhub/facebook';
    $title = get_string('facebook', 'theme_eduhub');
    $description = get_string('facebookdesc', 'theme_eduhub');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Twitter url setting.
    $name = 'theme_eduhub/twitter';
    $title = get_string('twitter', 'theme_eduhub');
    $description = get_string('twitterdesc', 'theme_eduhub');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Pintirest url setting.
    $name = 'theme_eduhub/pintirest';
    $title = get_string('pintirest', 'theme_eduhub');
    $description = get_string('pintirestdesc', 'theme_eduhub');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Googleplus url setting.
    $name = 'theme_eduhub/googleplus';
    $title = get_string('googleplus', 'theme_eduhub');
    $description = get_string('googleplusdesc', 'theme_eduhub');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Linkdin url setting.
    $name = 'theme_eduhub/linkdin';
    $title = get_string('linkdin', 'theme_eduhub');
    $description = get_string('linkdindesc', 'theme_eduhub');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Copyright setting.
    $name = 'theme_eduhub/copyright';
    $title = get_string('copyright', 'theme_eduhub');
    $description = get_string('copyrightdesc', 'theme_eduhub');
    $default = 'ThemeCaters';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    // Footerimg file setting.
    $name = 'theme_eduhub/footerimg';
    $title = get_string('footerimg', 'theme_eduhub');
    $description = get_string('footerimgdesc', 'theme_eduhub');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'footerimg');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Footnote setting.
    $name = 'theme_eduhub/footnote';
    $title = get_string('footnote', 'theme_eduhub');
    $description = get_string('footnotedesc', 'theme_eduhub');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
   // Read-me.
    $readme = new moodle_url('/theme/eduhub/README.txt');
   $readme = html_writer::link($readme, get_string('readme_click', 'theme_eduhub'), array('target' => '_blank'));
    $temp->add(new admin_setting_heading('theme_eduhub_generalreadme', get_string('readme_title', 'theme_eduhub'),
    get_string('readme_desc', 'theme_eduhub', array('url' => $readme))));
$ADMIN->add('theme_eduhub', $temp);
