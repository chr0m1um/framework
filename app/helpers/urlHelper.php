<?php

    function redirect($page) {
        header('location:' . ROUTE_URL . $page);
    }

?>