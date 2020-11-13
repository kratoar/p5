<!DOCTYPE html>
<html>
    <head>
        <title>{{ title }} | Tech blog</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="./public/css/main.css"/>
        <!-- <script src="./public/js/tagbar.js"></script> -->
        <script src="./public/js/main.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <base href="/">
    </head>
    <body>
        {% include('./components/header.php') %}
        <main>
            {% block content %}
            {% endblock %} 
        </main>
        {#% include('./components/tagbar.php') %#}
    </body>
</html>