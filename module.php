<?php
    function mod_search_simple(){

    echo '<form action="/index.php" method="GET" name="searchform" id="searchform">';
    echo '<input type="hidden" name="view" value="search" />';
    echo '<input type="text" name="query" id="searchinput" value="найти" onclick="if (value==defaultValue) value=\'\'" onblur="if (!value) value=defaultValue"/>';
    echo '<input class="button" type="button" onclick="document.searchform.submit()" value="" name="gosearch">';
    echo '</form>';

    return true;

} ?>