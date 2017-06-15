<?php 
/**
* The template for displaying comments
*
* The area of the page that contains both current comments
* and the comment form.
*
* @package WordPress
* @subpackage Zenon
* @version = 1.0
*/
?>
<br>
<div id="comments" class="comments-area">
        <?php if ( have_comments() ): ?>
            <div class="comments-title"><br>
                Total Comments : 
                    <?php echo get_comments_number();
                    get_the_title() ; ?>
            </div><hr style="width: 100%;border-color:#4a4a4a">
        <ol class="comments-list">
          <?php wp_list_comments( array(
            'style' => 'ol',
            'short_ping' => 'true',
            'avatar_size' => '42'
            ) );
            ?>
        </ol>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>
