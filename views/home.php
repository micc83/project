{% extends "layouts/base.php" %}

{% block title %}Index{% endblock %}
{% block head %}
    {{ parent() }}
    <style type="text/css">
        .important { color: #336699; }
    </style>
{% endblock %}
{% block content %}
    <h1>Ciao {{name}}</h1>
    <p class="important">
        Welcome to my awesome homepage.
    </p>
{% endblock %}