<?php
session_start();           // Start or resume the session
session_unset();           // Clear all session variables
session_destroy();    


echo '

<script>
    window.location.href="/";
</script>

';

exit;



?>