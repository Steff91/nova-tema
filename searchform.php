<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 26.12.2017
 * Time: 0:08
 */
?>
<form role="search" method="get" action="<?php echo home_url('/')?>">
<input type="text" class="form-control" placeholder="Search.." value="<?php echo get_search_query();?>" name="s" title="Search">
</form>