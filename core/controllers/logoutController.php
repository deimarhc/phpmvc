<?php

unset($_SESSION['id'], $_SESSION['name'], $_SESSION['mail']);
session_destroy();
header('location: ?view=index');