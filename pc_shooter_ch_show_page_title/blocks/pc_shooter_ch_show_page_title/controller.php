<?php  
defined('C5_EXECUTE') or die("Access Denied.");

/**
 * Show Page Title block controller
 * @author pc-shooter <info@pc-shooter.ch>
 *
 * @package Show Page Title
 * @category C5 package
 * @version 1.0
 * @copyright GNU General Public License (GPL v2)
 */
class PcShooterChShowPageTitleBlockController extends Concrete5_Controller_Block_Content {
    /**
     * @var string Blocks name
     * -- translated in getBlockTypeName() --
     */
    protected $btName = 'Show Page Title';
    /**
     * @var string DB block table name
     */
    protected $btTable = 'btPcShooterChShowPageTitle';
    /**
     * @var int Add/edit window width
     */
    protected $btInterfaceWidth = 500;
    /**
     * @var int Add/edit window height
     */
    protected $btInterfaceHeight = 250;

    /**
     * @var string C5 Styling
     */
    protected $btWrapperClass = 'ccm-ui';

    /**
     * @var string Package handle
     */
    public $pkgHandle = 'pc_shooter_ch_show_page_title';

    /**
     * Get block type name
     * @return string Block type name
     */
    public function getBlockTypeName() {
        return t($this->btName);
    }

    /**
     * Get block type description
     * @return string Block type description
     */
    public function getBlockTypeDescription() {
        return t('Shows the page title in a <b>&lt;h1&gt;</b> tag & description in a <b>&lt;div&gt;</b>.');
    }

    /**
     * Get package name
     * @return mixed Package Handle
     */
    public function getPkgHandle() {
        return $this->pkgHandle;
    }

    /**
     * @return string Package path
     */
    public function getPackageBlockPath() {
        return DIRNAME_PACKAGES . '/' . $this->getPkgHandle() . '/' . DIRNAME_BLOCKS . '/' . $this->pkgHandle;
    }
    /**
     * @return array
     */
    public function getJavaScriptStrings() {
        return array(
            'show-desc' => t('Show Description'),
            'hide-desc' => t('Hide Description')
        );
    }

    /**
     * This function should returns trimmed down text content for a given block.
     * http://www.concrete5.org/documentation/general-topics/search/
     * @return mixed
     */
    public function getSearchableContent() {
        return $this->content;
    }

}