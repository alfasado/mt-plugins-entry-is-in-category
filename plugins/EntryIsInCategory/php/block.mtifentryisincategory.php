<?php
function smarty_block_mtifentryisincategory ( $args, $content, &$ctx, &$repeat ) {
    $entry = $ctx->stash( 'entry' );
    $category = $ctx->stash( 'category' );
    $places = $entry->placement( FALSE );
    $is_in = FALSE;
    if ( is_array( $places ) ) {
        if ( isset ( $category ) ) {
            foreach ( $places as $place ) {
                if ( $place->category_id == $category->id ) {
                    $is_in = TRUE;
                    break;
                }
            }
        }
    }
    return $ctx->_hdlr_if( $args, $content, $ctx, $repeat, $is_in );
}
?>