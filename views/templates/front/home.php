{% extends "./front.php" %}

{% block content %}
    {% if banner_display is defined and banner_display == true %}
        {% include('./components/banner.php') %}
    {% endif %}
{% endblock %}