<?php
if ($_SERVER["SERVER_PORT"] == "8081") {
	echo "tp";
	if (stripos(gethostbyaddr($_SERVER['REMOTE_ADDR']), "tpnet"))
	echo "621426172189";
}

if ($_SERVER["SERVER_PORT"] == "8082") {
        echo "cp";
        if (stripos(gethostbyaddr($_SERVER['REMOTE_ADDR']), "cyfrowypolsat"))
        echo "736528735293";
}

if ($_SERVER["SERVER_PORT"] == "8083") {
        echo "pl";
//        if (stripos(gethostbyaddr($_SERVER['REMOTE_ADDR']), "plus.pl"))
        echo "912476189274";
}

if ($_SERVER["SERVER_PORT"] == "8084") {
        echo "lt";
        if (stripos(gethostbyaddr($_SERVER['REMOTE_ADDR']), "plus.pl"))
        echo "801284777436";
}

if ($_SERVER["SERVER_PORT"] == "8085") {
        echo "tm";
        if (stripos(gethostbyaddr($_SERVER['REMOTE_ADDR']), "t-mobile"))
        echo "801887278436";
}

if ($_SERVER["SERVER_PORT"] == "8086") {
        echo "or";
        if (stripos(gethostbyaddr($_SERVER['REMOTE_ADDR']), "centertel"))
        echo "716241762462";
}

if ($_SERVER["SERVER_PORT"] == "8087") {
        echo "tu";
        if (stripos(gethostbyaddr($_SERVER['REMOTE_ADDR']), "t-mobile"))
        echo "238290024861";
}
