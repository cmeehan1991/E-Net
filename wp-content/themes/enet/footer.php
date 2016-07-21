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
</div> <!--Site Content-->
<script>
     // Get the Global Footer
    $.ajax({
        url:'https://www.elon.edu/globalheaderapi/api/main',
        dataType:'xml',
        success:function(xml){
            $(xml).find('FooterHTML').each(function(){
               $('.global_footer').html($(this).text()); 
            });
        }
    });
</script>
<footer class="global_footer"></footer>
    </body>
</html>
