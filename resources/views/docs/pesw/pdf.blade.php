<!DOCTYPE html>
<html>
<head>
	<title> PESw - {{ $cliente }}</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
	<link rel="stylesheet" href="{{ public_path('css/pdf.css') }}" media="all" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
</head>
<body>
	<main class="ui center aligned container">
	@include('docs.pesw.capa')
	<div class="page">
		@include("docs.pesw.header")
		@include("docs.pesw.footer")
		<div>
			<div>
				<div class="paragraph">
					<div class="title">
						1.Descrição do Documento
					</div>
					<div class="content">
						Esse documento tem como objetivo definir preço, 
						prazo e o escopo para a realização do projeto de
						criação do site para {{ $cliente }}
					</div>
				</div>
			</div>
			<div class="paragraph">
				<div class="title"> 2.Visão Geral do produto</div>
				<div class="content">
					{{ $visao }}
				</div>
			</div>
			
		</div>
		<div>
			<table class="ui celled large table table-bordered">
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
						<td data-label="Valor"> R${{ number_format($funcionalidade->value,2,'.','') }}</td>
						<td data-label="Descrição">{{ $funcionalidade->description}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</main>
</body>
</html>