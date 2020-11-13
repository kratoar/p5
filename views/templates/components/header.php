<header>
    <div class="container">
        <a class="header-title ts-xxxl tw-medium" href="/p5">TechBlog</a>
        <div id="mini-menu-toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="header-nav first">
            <a class="header-nav-element ts-lg tw-medium">
                News
                <div class="nav-elem-underline"></div>
            </a>
            <a class="header-nav-element ts-lg tw-medium">
                Posts
                <div class="nav-elem-underline"></div>
            </a>
            <a class="header-nav-element ts-lg tw-medium">
                About us
                <div class="nav-elem-underline"></div>
            </a>
            {% if user.isLoged() %}
                <a class="header-nav-element ts-lg tw-medium">
                    Profile
                    <div class="nav-elem-underline"></div>
                </a>
            {% endif %}
            <div class="header-nav-element ts-lg tw-medium">
                {{ user.isLoged() ? 'Logout' : 'Login' }}
                <div class="nav-elem-underline"></div>
            </div>
        </div>
        <div class="mini-menu-mask"></div>
    </div>
</header>