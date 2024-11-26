<?php
require_once 'footer.php';
 function debug( array $post) : void
{
    echo '<pre class="text-bg-secondary p-3">';
    var_dump($post);
    echo '</pre>';
}

//:O