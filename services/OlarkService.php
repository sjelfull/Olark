<?php
/**
 * Olark plugin for Craft CMS
 *
 * Olark Service
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Olark
 * @since     1.0.0
 */

namespace Craft;

class OlarkService extends BaseApplicationComponent
{
    protected $settings;

    public function init ()
    {
        parent::init();
        $plugin         = craft()->plugins->getPlugin('olark');
        $this->settings = $plugin->getSettings();
    }

    public function getWidgetCode ($settings = [])
    {
        $oldPath = craft()->templates->getTemplatesPath();
        $siteId  = $this->settings['siteId'];

        if ( empty($siteId) ) {
            return null;
        }

        $widget = null;

        craft()->templates->setTemplatesPath(CRAFT_PLUGINS_PATH . 'olark/templates/');

        try {
            $widget = craft()->templates->render('Olark_Widget', array(
                'siteId' => $siteId,
            ));
        }
        catch (\Exception $e) {
            OlarkPlugin::log('Couldn\'t render Olark widget: ' . $e->getMessage(), LogLevel::Error);
        }

        craft()->templates->setTemplatesPath($oldPath);

        return $widget;
    }

}