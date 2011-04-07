package EntryIsInCategory::Plugin;
use strict;

sub _hdlr_entry_is_in_category {
    my ( $ctx, $args, $cond ) = @_;
    my $entry = $ctx->stash( 'entry' );
    my $category = $ctx->stash( 'category' );
    return 0 unless defined $entry;
    return 0 unless defined $category;
    return 1 if $entry->is_in_category( $category );
    return 0;
}

1;