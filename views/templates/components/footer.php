<footer>
    <div class="container">
        <div class="tech-list row tp-sm-c">
            {% for tech in tech_list %}
                <div class="tech ts-md tw-bold tp-xs-c col-md-2 col-sm-4 col-xs-6">
                    {{- tech -}}
                </div>
            {% endfor %}
        </div>
        <hr/>
        <div class="bottom row">
            <div class="links col-md-8 ts-md tw-bold tp-md-c">
                <a href="#">Plan du site</a>
                <a href="#">Qui sommes-nous ?</a>
                <a href="#">Politique de confidentialité</a>
                <a href="#">Mentions légales</a>
            </div>
            <div class="credentials col-md-4 ts-md tw-medium tp-md-c">
                Made by <span style="color:#f00;">♥</span> for a better web !
            </div>
        </div>
    </div>
</footer>