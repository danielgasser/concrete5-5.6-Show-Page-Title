<?php  
/**
 * Show Page Title Installer controller
 * @author pc-shooter <info@pc-shooter.ch>
 * @package Show Page Title
 * @version 1.0
 * @filesource
 */
defined('C5_EXECUTE') or die(_("Access Denied."));

/**
 * @package Show Page Title
 * @author pc-shooter <info@pc-shooter.ch>
 *
 * This simple package shows the page title and page description defined in
 * the page properties (dashboard/sitemap/full/):
 * Page Properties - Name:          becomes Title
 * Page Properties - Description:   becomes Description:
 * Option - Description:  Show/Hide description:
 * @version Development version 1.0
 * @category C5 package
 * @copyright GNU General Public License (GPL v2)
 */
class PcShooterChShowPageTitlePackage extends Package {

    /**
     * @var string Package handle
     */
    protected $pkgHandle = 'pc_shooter_ch_show_page_title';
    /**
     * @var string C5 version required for this package
     */
    protected $appVersionRequired = '5.6.2';
    /**
     * @var string Package version
     */
    protected $pkgVersion = '1.0';

    /**
     * Get package desc.
     * @return string The package information in the "Add functionality"-window
     */
    public function getPackageDescription() {
        return t('This simple package shows the page title and page description defined in the page properties.');
    }

    /**
     * Get package name
     * @return string Package name
     */
    public function getPackageName() {
        return t("Show Page Title");
    }

    /**
     * Package installer
     * @return Package|void
     */
    public function install() {
        $pkg = parent::install();
        BlockType::installBlockTypeFromPackage($this->pkgHandle, $pkg);
    }

}