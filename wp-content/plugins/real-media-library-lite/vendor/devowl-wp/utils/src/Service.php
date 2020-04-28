<?php

namespace MatthiasWeb\RealMediaLibrary\Vendor\MatthiasWeb\Utils;

use WP_REST_Response;
// @codeCoverageIgnoreStart
\defined('ABSPATH') or die('No script kiddies please!');
// Avoid direct file request
// @codeCoverageIgnoreEnd
/**
 * Create a base REST Service needed for boilerplate development. Please do not remove it.
 */
class Service
{
    private $core;
    /**
     * C'tor.
     *
     * @param PluginReceiver $core
     * @codeCoverageIgnore
     */
    private function __construct($core)
    {
        $this->core = $core;
    }
    /**
     * Register endpoints.
     */
    public function rest_api_init()
    {
        $namespace = \MatthiasWeb\RealMediaLibrary\Vendor\MatthiasWeb\Utils\Service::getNamespace($this->getCore());
        register_rest_route($namespace, '/plugin', ['methods' => 'GET', 'callback' => [$this, 'routePlugin']]);
    }
    /**
     * Response for /plugin route.
     */
    public function routePlugin()
    {
        return new \WP_REST_Response($this->getCore()->getPluginData());
    }
    /**
     * Get core instance.
     *
     * @return PluginReceiver
     * @codeCoverageIgnore
     */
    public function getCore()
    {
        return $this->core;
    }
    /**
     * Get the wp-json URL for a defined REST service.
     *
     * @param string $instance The plugin class instance, so we can determine the slug from
     * @param string $namespace The prefix for REST service
     * @param string $endpoint The path appended to the prefix
     * @return string Example: https://wordpress.org/wp-json
     */
    public static function getUrl($instance, $namespace = null, $endpoint = '')
    {
        $path = ($namespace === null ? \MatthiasWeb\RealMediaLibrary\Vendor\MatthiasWeb\Utils\Service::getNamespace($instance) : $namespace) . '/' . $endpoint;
        return rest_url($path);
    }
    /**
     * Get the default namespace of this plugin generated from the slug.
     *
     * @param string $instance The plugin class instance, so we can determine the slug from
     * @param string $version The version used for this namespace
     * @return string
     */
    public static function getNamespace($instance, $version = 'v1')
    {
        return $instance->getPluginConstant(\MatthiasWeb\RealMediaLibrary\Vendor\MatthiasWeb\Utils\PluginReceiver::$PLUGIN_CONST_SLUG) . '/' . $version;
    }
    /**
     * Get a new instance of Service.
     *
     * @param PluginReceiver $core
     * @return Service
     * @codeCoverageIgnore Instance getter
     */
    public static function instance($core)
    {
        return new \MatthiasWeb\RealMediaLibrary\Vendor\MatthiasWeb\Utils\Service($core);
    }
}
