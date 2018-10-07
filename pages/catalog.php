<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../style.css">
<title>Каталог товаров</title>
</head>
<body>

<a href="/"> To main page</a>

<h1>Catalog foto</h1>
{% for foto in content %}
<div class="foto_prev">

	<a href="/catalog/{{ foto.id }}"><img src="../{{ foto.link }}" alt="{{ foto.name }}"></a>
	<p>Название фото: {{ foto.name }}</p>
	<p>Просмотров: {{ foto.views }}</p>
</div>

{% endfor %}

</body>
</html>