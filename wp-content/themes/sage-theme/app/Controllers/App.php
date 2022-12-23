<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Services\Queries;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        $title = "";
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            $title = get_the_archive_title();
        }
        if (is_search()) {
            $title = sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            $title = __('Not Found', 'sage');
        }
        if (empty($title)) {
            $title = get_the_title();
        }
        return $title;
    }

    public static function getLogo()
    {
        $logo = get_field('ns_header_logo', ACF_OPTION);
        $url = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/logo_en.svg';
        $aperity = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content6/aperity.png';
        $cba = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content6/cb.png';
        $provi = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content6/provi.png';
        $salsify = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content6/salffy.png';
        $molerm = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content6/molerm.png';
        $untappd = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content6/untapp.png';
        $towns = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content6/logof6.png';
        $lap = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content8/lap.png';
        $bg = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content8/bg.png';
        $advance = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/footer/logof1.png';
        $barringer = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/footer/logof5.png';
        $fourpic = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/content3/fourpic.png';
        $eagle = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/footer/logof3.png';
        $firestone = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/footer/logof2.png';
        $towns = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/footer/logof6.png';
        $whistle = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/footer/logof4.png';
        $alt = ($logo && $logo['alt']) ? $logo['alt'] : 'logo';
        $href = home_url();
        return compact('lap','bg','url', 'aperity', 'cba', 'provi', 'salsify','fourpic', 'molerm', 'untappd', 'advance', 'barringer', 'eagle', 'firestone', 'towns', 'whistle','alt', 'href');
    }

    public static function getBanner()
    {
        $banner = get_field('ns_header_banner', ACF_OPTION);
        $BannerL = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/content1/BannerL.png';
        $BannerR = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/content1/BannerR.png';
        $iconlink = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/footer/iconlink.png';
        $footer = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/footer/footer.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $href = home_url();
        return compact('Banner', 'BannerL', 'BannerR', 'iconlink', 'footer', 'alt', 'href');
    }

    public static function getIcon()
    {
        $icon = get_field('ns_header_Icon', ACF_OPTION);
        $icon1 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/content2/icon1.png';
        $icon2 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/content2/icon2.png';
        $icon3 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/content2/icon3.png';
        $icon4 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/content2/icon4.png';
        $alt = ($icon && $icon['alt']) ? $icon['alt'] : 'icon';
        $href = home_url();
        return compact('icon1', 'icon2', 'icon3', 'icon4', 'alt', 'href');
    }

    public static function getFooterAddress()
    {
        return get_field('ns_footer_address', ACF_OPTION);
    }

    public static function getCopyRight()
    {
        return get_field('ns_copyright', ACF_OPTION);
    }

    public static function getTrackingCode($position = '')
    {
        if ($position) {
            switch ($position) {
                case 'in_head':
                    $code = get_field('ns_tracking_head', ACF_OPTION);
                    break;
                case 'after_open_body':
                    $code = get_field('ns_tracking_after_body', ACF_OPTION);
                    break;
                case 'before_close_body':
                    $code = get_field('ns_tracking_before_body', ACF_OPTION);
                    break;
                default:
                    $code = '';
                    break;
            }
            return $code;
        }
        return '';
    }

    public static function getFavicon()
    {
        $favicon = get_field('ns_favicon', ACF_OPTION);
        return $favicon ? $favicon : '';
    }

    public static function getAppleIcon()
    {
        $icon = get_field('ns_apple_touch_icon', ACF_OPTION);
        return $icon ? $icon : '';
    }
    /**
     * Get content 404.
     *
     * @return string
     */
    public static function getContent404()
    {
        return Queries::getOptionField('ns_404_page_content');
    }

    /**
     * Get Main Menu
     */
    public static function getMainNav()
    {
        $location = 'primary_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeHeaderMenu(),
                'menu_class' => 'main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col text-inherit
                lg:flex-row lg:justify-end',
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
    /**
     * Get Footer Menu
     */
    public static function getFooterNav()
    {
        $location = 'footer_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                ITEMS_WRAP => '%3$s',
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeFooterMenu(),
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
}
