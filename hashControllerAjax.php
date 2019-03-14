<?php

    if(isSet($_POST['password'])) {
        echo password_hash($_POST['password'], PASSWORD_BCRYPT);
    }
    else {
        echo "prout";
    }
