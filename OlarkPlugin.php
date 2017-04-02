<?php
/**
 * Olark plugin for Craft CMS
 *
 * Integrate Crisp.im with Craft
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Olark
 * @since     1.0.0
 */

namespace Craft;

class OlarkPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init ()
    {
        parent::init();

        craft()->templates->hook('olark', function (&$context) {
            if ( craft()->request->isSiteRequest() ) {
                $settings = isset($context['olarkSettings']) ? $context['olarkSettings'] : array();

                $widget = craft()->olark->getWidgetCode($settings);

                return $widget;
            }
        });
    }

    /**
     * @return mixed
     */
    public function getName ()
    {
        return Craft::t('Olark');
    }

    /**
     * @return mixed
     */
    public function getDescription ()
    {
        return Craft::t('Integrate Olark with Craft');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl ()
    {
        return 'https://github.com/sjelfull/Olark/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl ()
    {
        return 'https://raw.githubusercontent.com/sjelfull/Olark/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper ()
    {
        return 'Superbig';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl ()
    {
        return 'https://superbig.co';
    }

    /**
     * @return array
     */
    protected function defineSettings ()
    {
        return array(
            'siteId' => array( AttributeType::String, 'label' => 'Site ID', 'default' => '' ),
        );
    }

    /**
     * @return mixed
     */
    public function getSettingsHtml ()
    {
        return craft()->templates->render('olark/Olark_Settings', array(
            'settings' => $this->getSettings()
        ));
    }

    /**
     * @param mixed $settings The Widget's settings
     *
     * @return mixed
     */
    public function prepSettings ($settings)
    {
        // Modify $settings here...

        return $settings;
    }

}