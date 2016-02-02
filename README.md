# qTranslate-X-and-Muffin-Builder

To use, simply change a bug in /themes/betheme/functions/builder/front.php at line 959
Change 

if( ! function_exists( 'sc_sliding_box' ) )
{
    /**
     * [sliding_box]
     */
    function mfn_print_sliding_box( $item ) {
        echo sc_sliding_box( $item['fields'] );
    }
}

for 

if( ! function_exists( 'mfn_print_sliding_box' ) )
{
    /**
     * [sliding_box]
     */
    function mfn_print_sliding_box( $item ) {
        echo sc_sliding_box( $item['fields'] );
    }
}

And then add the content of function.php to your own function.php, preferably in a child-theme.

You can now use [:en] and other languages in the muffin builder.

P.S. The bug in muffin builder code should be fixed in the next update.
