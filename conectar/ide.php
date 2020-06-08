<?php

session_start();
 if(isset($_SESSION['identificacion']))
{ echo $_SESSION['identificacion']['identificacion']; } ?>