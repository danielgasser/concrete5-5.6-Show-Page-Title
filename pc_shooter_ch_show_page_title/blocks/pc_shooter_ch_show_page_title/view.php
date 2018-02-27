<?php     defined('C5_EXECUTE') or die("Access Denied.");

$page = Page::getCurrentPage();
$pageDesc = $page->getCollectionDescription();
Loader::helper('concrete/interface');

if (empty($pageDesc) || !isset($pageDesc)) {
    $pageDesc = t('No Page Description existent for this page');
} else {
    $pageDesc = htmlspecialchars($page->getCollectionDescription(), ENT_QUOTES, 'UTF-8');
}
?>
<!-- --------------------------------------- -->
<!-- @package Show Page Title -->
<!-- @author pc-shooter <info@pc-shooter.ch>

<!-- This simple package shows the page title and page description defined in -->
<!-- the page properties (dashboard/sitemap/full/): -->
<!-- Page Properties - Name:          becomes Title -->
<!-- Page Properties - Description:   becomes Description: -->
<!-- Option - Description:  Show/Hide description: -->
<!-- @version Development version 1.0 -->
<!-- @category C5 package -->
<!-- @copyright pc-shooter - Development -->
<!-- --------------------------------------- -->

<div id="<?php   echo $block_css_id; ?>" class="ccm-ui <?php   echo $block_css_class; ?>">
    <div id="<?php   echo $block_css_style; ?>">
        <h1 class="<?php   echo $title_css_class; ?>"><?php   echo htmlspecialchars($page->getCollectionName(), ENT_QUOTES, 'UTF-8'); ?></h1>
        <?php  
        // Description
        if ($desc_true) { ?>
        <div class="<?php   echo $desc_css_class; ?>">
            <?php   echo $pageDesc; ?>
        </div>
        <?php  
        }
        ?>
    </div>
</div>