<?php

setcookie('USER_LANG', 'en', strtotime('+1 month'));
wp_redirect(get_home_url());
