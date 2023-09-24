{% extends 'partials/body.twig.php' %}

{% block title %}Home - Mini Framework{% endblock %}

{% block body %}
<div class="max-width center-screen bg-white padding">
    <div class="alert alert-dismissible alert-danger">
        <h3><strong>Oh snap! {{title}}</strong></h3>
        <hr>
        <h5><strong>{{message}}</strong></h5>

    </div>
</div>
{% endblock %}




