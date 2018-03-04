<?php

// akmanda category plug and play
function matraman_lite_category(){
    echo '<span class="category"><i class="icon icon-content-1"></i>';
    the_category(', ');
    echo '</span>';

}

// akmanda author plug and play
function matraman_lite_author(){
    global $post;
    echo '<span class="author"> <i class="icon icon-gist-secret"></i>';
    echo '<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'">'. get_the_author_meta( 'display_name' ) .'</a>';
    echo '</span>    |';
}

// akmanda date plug and play
function matraman_lite_date(){
    global $post;
    echo '<span class="date">';
    echo get_the_date();
    echo '</span>';
}

// akmanda tags plug and play
function matraman_lite_tags(){
    global $post;
    echo '<span class="tag-wrapper"><i class="icon icon-tags-round"></i>';
    the_tags('',', ','');
    echo '</span>';
}


function matraman_lite_comments(){
    global $post;
    echo '<span class="comment"><i class="icon icon-chatbubble"></i>';
    comments_number( 'No Comment', '1 Comment', '% Comments' );
    echo '</span>';

}

function matraman_lite_post_type() {



if ( has_post_format('gallery') ) {
    echo '<i class="icon post-type icon-photos-pictures"></i>';
}

if ( has_post_format('audio') ) {
    echo '<i class="icon post-type icon-headphone"></i>';
}

if ( has_post_format('chat') ) {
    echo '<i class="icon post-type icon-chat-talk"></i>';
}

if ( has_post_format('image') ) {
    echo '<i class="icon post-type icon-camera"></i>';
}

if ( has_post_format('link') ) {
    echo '<i class="icon post-type icon-link"></i>';
}

if ( has_post_format('quote') ) {
    echo '<i class="icon post-type icon-quote-left"></i>';
}

if ( has_post_format('video') ) {
    echo '<i class="icon post-type icon-film-maker"></i>';
}

if ( has_post_format('status') ) {
    echo '<i class="icon post-type icon-message-talk"></i>';
}

if ( !get_post_format() && !is_sticky() ) {
    echo '<i class="icon post-type icon-book"></i>';
}

if ( is_sticky()) {
    echo '<i class="icon post-type icon-pin"></i>';
}


}

function matraman_lite_meta_info(){ ?>

    <div class="post-meta clearfix"> 
         <?php the_category(', '); ?> 
        <?php matraman_lite_date(); ?>
    </div>         
<?php } 


