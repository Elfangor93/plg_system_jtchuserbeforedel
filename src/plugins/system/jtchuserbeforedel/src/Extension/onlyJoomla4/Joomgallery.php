<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.Jtchuserbeforedel
 *
 * @author      Guido De Gobbis <support@joomtools.de>
 * @copyright   Copyright JoomTools.de - All rights reserved.
 * @license     GNU General Public License version 3 or later
 */

namespace JtChUserBeforeDel\Extension;

defined('_JEXEC') or die;

use JtChUserBeforeDel\JtChUserBeforeDelInterface;

/**
 * Class to support the 3th party extension 'com_joomgallery'.
 *
 * @since  1.1.0
 */
class Joomgallery implements JtChUserBeforeDelInterface
{
    /**
     * Constructor
     *
     * @since   1.1.0
     */
    public function __construct()
    {
      $defines = JPATH_ADMINISTRATOR.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'com_joomgallery'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'defines.php';
      require_once $defines;
    }

    /**
     * The extensions real name language string.
     *
     * @return  string
     *
     * @since   1.1.0
     */
    public function getExtensionRealNameLanguageString()
    {
        return \strtoupper($this->getExtensionBaseContext());
    }

    /**
     * The extensions first/base part of the context.
     *
     * @return  string
     *
     * @since   1.1.0
     */
    public function getExtensionBaseContext()
    {
        return _JOOM_OPTION;
    }

    /**
     * The database table and columns about the user information to change.
     *
     * @return  array
     *
     * @since   1.1.0
     * @see     JtChUserBeforeDelInterface
     */
    public function getColumsToChange()
    {
        return array(
            array(
                'tableName' => _JOOM_TABLE_IMAGES,
                'uniqueId'  => 'id',
                'author'    => 'created_by',
            ),
            array(
                'tableName' => _JOOM_TABLE_CATEGORIES,
                'uniqueId'  => 'id',
                'author'    => 'created_by',
            ),
            array(
                'tableName' => _JOOM_TABLE_COMMENTS,
                'uniqueId'  => 'id',
                'author'    => 'created_by',
            ),
            array(
                'tableName' => _JOOM_TABLE_CONFIGS,
                'uniqueId'  => 'id',
                'author'    => 'created_by',
            ),
            array(
                'tableName' => _JOOM_TABLE_FIELDS,
                'uniqueId'  => 'id',
                'author'    => 'created_by',
            ),
            array(
                'tableName' => _JOOM_TABLE_GALLERIES,
                'uniqueId'  => 'id',
                'author'    => 'created_by',
            ),
            array(
                'tableName' => _JOOM_TABLE_TAGS,
                'uniqueId'  => 'id',
                'author'    => 'created_by',
            ),
            array(
                'tableName' => _JOOM_TABLE_USERS,
                'uniqueId'  => 'id',
                'author'    => 'cmsuser',
            ),
            array(
                'tableName' => _JOOM_TABLE_VOTES,
                'uniqueId'  => 'id',
                'author'    => 'created_by',
            ),
        );
    }
}
