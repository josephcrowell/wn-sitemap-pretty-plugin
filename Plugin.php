<?php namespace JosephCrowell\SitemapPretty;

use System\Classes\PluginBase;

/**
 * Sitemap Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ["Winter.Sitemap"];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            "name" => "josephcrowell.sitemap-pretty::lang.plugin.name",
            "description" =>
                "josephcrowell.sitemap-pretty::lang.plugin.description",
            "author" => "Joseph Crowell",
            "icon" => "icon-sitemap",
            "homepage" =>
                "https://github.com/josephcrowell/wn-sitemap-pretty-plugin",
            "replaces" => "Xeor.Sitemap",
        ];
    }
}