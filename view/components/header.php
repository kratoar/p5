<header>
    <div class="container">
        <a class="header-title" href="">My first blog</a>
        <div id="mini-menu-toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="header-nav first">
            <a class="header-nav-element">
                News
                <div class="nav-elem-underline"></div>
            </a>
            <a class="header-nav-element">
                Posts
                <div class="nav-elem-underline"></div>
            </a>
            <a class="header-nav-element">
                About us
                <div class="nav-elem-underline"></div>
            </a>
            <?= ($GLOBALS['user']->isLoged() ? `
                    <a class="header-nav-element">
                        Profile
                        <div class="nav-elem-underline"></div>
                    </a>
                ` : null) ?>
            <div class="header-nav-element">
                <?= ($GLOBALS['user']->isLoged() ? 'Logout' : 'Login') ?>
                <div class="nav-elem-underline"></div>
            </div>
        </div>
    </div>
</header>