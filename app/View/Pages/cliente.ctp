<?php
$currentUser = $this->Session->read('Auth.User');
if($currentUser['role']!='cliente'){
    echo '<script type="text/javascript">

window.location="../";

</script>';
}?>
<div class="row-fluid"><div class="span4"></div><div class="span4"></div><div class="span4"></div></div>
<div class="row-fluid">
        
</div>

