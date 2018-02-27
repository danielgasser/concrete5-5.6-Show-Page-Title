<?php     
defined('C5_EXECUTE') or die("Access Denied.");

$form = Loader::helper('form');
Loader::helper('concrete/interface');
$blockStyles = array(
    'no_style' => '-',
    'google_style' => t('Google Style'),
    'news_paper_style' => t('Newspaper Style')
);

?>
<div>
    <ul id="pc-shooter-ch-show-page-title" class="ccm-dialog-tabs" style="margin-left: -1px">
        <li><a href="#global-block-style"><?php   echo t('Global Block Style'); ?></a></li>
        <li><a href="#custom-css-class"><?php   echo t('Custom CSS-Classes'); ?></a></li>
        <li><a href="#description"><?php   echo t('Show Description'); ?></a></li>
    </ul>
</div>

<!-- Global Block Style -->
<div id="global-block-style">
    <h4><?php   echo t('Choose Block Style'); ?></h4><br/>
    <div class="clearfix">
        <?php   echo $form->label('block_css_style', t('Global Block Style'));?>
        <div class="input">
            <?php   echo  $form->select('block_css_style', $blockStyles, $block_css_style); ?>
        </div>
    </div>
</div>
<!-- Custom CSS-Classes-->
<div id="custom-css-class">
    <h4><?php   echo t('Add Custom CSS-Classes'); ?></h4><br/>
    <div class="clearfix">
        <?php   echo $form->label('block_css_id', t('Whole block CSS-ID')); ?>
        <div class="input">
            <?php   echo  $form->text('block_css_id', $block_css_id); ?>
        </div>
    </div>
    <div class="clearfix">
        <?php   echo $form->label('block_css_class', t('Whole block CSS-Class')); ?>
        <div class="input">
            <?php   echo  $form->text('block_css_class', $block_css_class); ?>
        </div>
    </div>
    <div class="clearfix">
        <?php   echo $form->label('title_css_class', t('Title CSS-Class')); ?>
        <div class="input">
            <?php   echo  $form->text('title_css_class', $title_css_class); ?>
        </div>
    </div>
</div>
<!-- Description -->
<div id="description">
    <div class="clearfix">
        <?php   echo $form->label('desc_true', t('Show Description')); ?>
        <div class="input">
            <?php  
            $checked = ($desc_true == 1) ? true : false;
            $val = ($desc_true == null) ? 0 : 1;
            echo  $form->checkbox('desc_true', 1, $checked); ?>
        </div>
    </div>
    <div class="clearfix" id="show_desc">
        <?php   echo $form->label('desc_css_class', t('Description CSS-Class')); ?>
        <div class="input">
            <?php   echo  $form->text('desc_css_class', $desc_css_class); ?>
        </div>
    </div>
</div>