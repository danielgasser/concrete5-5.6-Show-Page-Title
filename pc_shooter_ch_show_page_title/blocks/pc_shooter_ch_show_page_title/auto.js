/**
 * Show Page Title JavaScript functions
 * @author pc-shooter <info@pc-shooter.ch>
 *
 * @package Show Page Title
 * @category C5 package
 * @version 1.0
 * @copyright pc-shooter - Development
 */
var desc = $('#show_desc'),
    descTrigger = '#desc_true',
    descLabel = $('label[for=desc_true]'),
    pcShooterChShowPageTitle = '#pc-shooter-ch-show-page-title';

$(document).ready(function(){
    if (!$(descTrigger).is(':checked')) {
        desc.hide();
    }

    // Tabs
    $(pcShooterChShowPageTitle + ' a').click(function (ev) {
        var tab_to_show = $(this).attr('href');
        $(pcShooterChShowPageTitle + ' li').
            removeClass('ccm-nav-active').
            find('a').
            each(function (ix, elem) {
                var tab_to_hide = $(elem).attr('href');
                $(tab_to_hide).hide();
            });
        $(tab_to_show).show();
        $(this).parent('li').addClass('ccm-nav-active');
        return false;
    }).first().click();

    // Description
    $(descTrigger).on('click', function(){
        if ($(descTrigger).is(':checked')) {
            desc.show();
            descLabel.text(ccm_t('hide-desc'));
        } else {
            desc.hide();
            descLabel.text(ccm_t('show-desc'));
        }
    })
})
