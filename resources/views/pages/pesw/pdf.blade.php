<html>
<head>
	<title> PESw - {{ $cliente }}</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
	<style>
		body {
			align-content: center;
			align-items: center;
			align-content: center;
			background-color: transparent;
			page-break-inside: avoid; 
		}
		table {
			align-self: center !important;
		}
		.page {
			align-items: center;
		}
	</style>
</head>
<body class="ui center aligned container">
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
				<td data-label="Nome">{{ $funcionalidade->nome }}</td>
				<td data-label="Valor">{{ $funcionalidade->valor }}</td>
				<td data-label="Descrição">{{ $funcionalidade->descricao }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>