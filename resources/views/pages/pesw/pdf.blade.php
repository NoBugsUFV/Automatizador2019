<html>
<head>
	<title> PESw - {{ $cliente }}</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
	<link rel="stylesheet" href="{{ public_path('css/pdf.css') }}" media="all" type="text/css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
</head>
<body>
	<header></header>
	<footer>
		Rodapé experimental
	</footer>
	<main class="ui center aligned container">
	@include('pages.pesw.capa')
	<table class="ui celled table table-bordered">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Valor</th>
				<th>Descrição</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($funcionalidades as $funcionalidade)
			<tr>
				<td data-label="Nome">{{ $funcionalidade->name }}</td>
				<td data-label="Valor">{{ $funcionalidade->value }}</td>
				<td data-label="Descrição">{{ $funcionalidade->description }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</main>
</body>
</html>