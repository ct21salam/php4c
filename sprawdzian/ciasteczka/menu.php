<div class="menu_container">
    <a class="menu_link <?=  (basename($_SERVER['PHP_SELF']) == 'strona_glowna.php') ? ', menu_link_active' : '' ?>" href="strona_glowna.php">Strona główna</a>
    <a class="menu_link <?=  (basename($_SERVER['PHP_SELF']) == 'strona_logowania.php') ? ', menu_link_active' : '' ?> " href="strona_logowania.php">Strona logowania</a>
    <a class="menu_link <?=  (basename($_SERVER['PHP_SELF']) == 'strona_tylko_dla_zalogowanych.php') ? ', menu_link_active' : '' ?> " href="strona_tylko_dla_zalogowanych.php">Strona tylko dla zalogowanych</a>
    <a class="menu_link <?=  (basename($_SERVER['PHP_SELF']) == 'panel_administracyjny.php') ? ', menu_link_active' : '' ?> " href="panel_administracyjny.php">Panel administracyjny</a>
</div>
<br>