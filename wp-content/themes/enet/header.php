<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package E-Net
 * @subpackage enet
 * @since E-Net 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>E-Net | Meehan Dev</title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!--Style.css-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"/>

        <!--Latest compiled JQuery CDN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Bootstrap CDN-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script>
            // Retrieve the global header, CSS, and header scripts
            $.ajax({
                url: 'https://www.elon.edu/globalheaderapi/api/main',
                dataType: 'xml',
                success: function (data) {
                    $(data).find('HeaderAndFooterStyles').each(function () {
                        $('head').append($(this).text());
                    });
                    $(data).find('HeaderScripts').each(function () {
                        $('head').append($(this).text());
                    });
                    $(data).find('HeaderHTML').each(function () {
                        $(".Global_Header").html($(this).text());
                    });
                }
            });
        </script>


        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>   
        <header class="Global_Header"></header>




