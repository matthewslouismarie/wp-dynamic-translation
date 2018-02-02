<?php

setcookie('USER_LANG', 'fr', strtotime('+1 month'));
wp_redirect(get_home_url());
