-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 23/09/2018 às 14:23
-- Versão do servidor: 5.5.44-0+deb7u1
-- Versão do PHP: 7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


INSERT INTO `products` (`id`,`name`, `value`, `description`) VALUES
(1,'Fundação', '490.0000', 'Definição de template (modelo de layout) e menu para acesso às páginas.'),
(2,'Eventos', '100.0000', 'Sistema que permite a postagem de eventos na forma de notícias, podendo dividi-los em áreas'),
(3,'Custo do Desenvolvedor', '300.0000', 'Valor simbólico de horas gastas no desenvolvimento.'),
(4,'Agenda', '60.0000', 'Sistema que permite agendar e gerenciar atividades e eventos.'),
(5,'Banner', '60.0000', 'Imagem estática no topo do site.'),
(6,'Banner slideshow', '90.0000', 'Slideshow com transição de imagens que será exibido no topo do site. '),
(7,'Calendário simples', '40.0000', 'Exibe um calendário simples no site.'),
(8,'Carta de serviços/Nossos produtos', '55.0000', 'Página que exibe os produtos e/ou serviços prestados pela empresa.'),
(9,'Clientes', '75.0000', 'Página que exibe os clientes da empresa.'),
(10,'Clima Tempo', '55.0000', 'Permite visualizar a previsão do tempo de uma determinada cidade.'),
(11,'Comentários nas postagens', '90.0000', 'Sistema que permite que os clientes comentem as postagens do site. Os comentários serão exibidos na página principal do site, mediante a aprovação do administrador.'),
(12,'Módulo SEO\n', '75.0000', 'Práticas e ferramentas para posicionar melhor o conteúdo do site nos motores de busca como, por exemplo, o Google.'),
(13,'Contador de visitas', '45.0000', 'Exibe a quantidade de visualizações do site.'),
(14,'Contador regressivo de dias', '45.0000', 'Sistema que conta os dias, horas, minutos e segundos que estão faltando para determinado evento.'),
(15,'Contrate-nos', '75.0000', 'Formulário que permite a contratação dos serviços da empresa.'),
(16,'Downloads e Uploads', '75.0000', 'Sistema que permite o download de arquivos do site.'),
(17,'E-commerce', '5000.0000', 'Sistema que permite o gerenciamento da venda on-line de produtos.'),
(18,'Enquete', '45.0000', 'Permite que o administrador do site faça uma pergunta para que os usuários respondam.'),
(19,'Estatísticas do site (Analytics)', '60.0000', 'Uso da ferramenta "Google Analytics", que permite a visualização de relatórios do número de acessos ao site, origem dos acessos, e erros em páginas.'),
(20,'Fale Conosco', '75.0000', 'Formulário de contato que permite o envio de solicitações ou sugestões do site para uma ou mais contas de e-mail.'),
(21,'FAQ', '45.0000', 'Permite aos usuários do site verificar algumas perguntas frequentes e suas respectivas respostas. É útil para tirar dúvida dos participantes.'),
(22,'Galeria de imagens', '75.0000', 'Página do site que permite a postagem de fotos. As fotos podem ser organizadas por seções (álbuns).'),
(23,'Galeria de vídeos', '75.0000', 'Página do site que permite a postagem de vídeos. Eles podem ser organizados por seções.'),
(24,'Google Maps', '60.0000', 'Página que irá conter o endereço e o mapa gerado pelo Google Apps.'),
(25,'Indique nossos produtos/serviços', '150.0000', 'Os usuários podem informar e-mails de seus amigos e o sistema enviará um convite para ver a página do serviço/produto.'),
(26,'Mapa do site', '60.0000', 'Exibe a representação hierárquica da estrutura do site.'),
(27,'MEJ (Informações sobre o MEJ)', '45.0000', 'Página que contém informações sobre o Movimento Empresa Júnior.'),
(28,'Membros da empresa', '75.0000', 'Página que exibe os membros da empresa, podendo separá-los por área de atuação e/ou cargo.'),
(29,'Mídias sociais', '75.0000', 'Faz a conexão entre o Twitter, o Facebook e o site.'),
(30,'Newsletter', '65.0000', 'Sistema que permite o envio de notícias às pessoas que se cadastrarem na newsletter.'),
(31,'Notícias', '115.0000', 'Sistema que permite a publicação de notícias sobre a empresa.'),
(32,'Origem dos acessos', '55.0000', 'Permite saber qual a página da web que levou os usuários até o seu site.'),
(33,'Pagamento online', '250.0000', 'Redireciona o usuário para um sistema de pagamento de terceiro, geralmente o Pag Seguro.'),
(34,'Parceiros', '65.0000', 'Sistema que exibe imagens e links dos parceiros, com animação na transição das imagens.'),
(35,'Patrocinadores', '65.0000', 'Sistema que exibe imagens e links dos patrocinadores, com animação na transição das imagens.'),
(36,'Portfólio', '75.0000', 'Página que exibe os serviços já realizados pela empresa.'),
(37,'Processo seletivo', '75.0000', 'Página com informações sobre o processo seletivo da empresa.'),
(38,'Sistema de busca', '60.0000', 'Sistema que permite que o usuário faça buscas por palavras chave no conteúdo do site.'),
(39,'Sistema de login (multiusuários)', '115.0000', 'Sistema que permite ao integrante da comissão ter acesso á uma área restrita do site mediante apresentação de login e senha.'),
(40,'Suporte online', '115.0000', 'Permite que a empresa atenda seus clientes por meio de um bate-papo no site.'),
(41,'Tradutor para 1 idioma', '40.0000', 'Traduz todo o conteúdo do site para um outro idioma.'),
(42,'Tradutor para 2 idiomas', '45.0000', 'Traduz todo o conteúdo do site para dois idiomas. A inclusão deste item exclui o item acima.'),
(43,'Tradutor para 4 idiomas', '60.0000', 'Traduz todo o conteúdo do site para quatro idiomas. A inclusão deste item exclui o item acima.'),
(44,'Usuários online', '40.0000', 'Exibe a quantidade de usuários que estão vendo o sistema em tempo real.'),
(45,'Wrapper (frame)', '60.0000', 'Permite inserir no site conteúdo de sites externos, arquivos em outras linguagens de programação, formulários etc.'),
(46,'Página estática\n', '45.0000', 'Página contendo apenas conteúdo estático (imagens, texto)'),
(47,'Funções Extras', '200.0000', 'Use esse campo para uma função que não se encontra no banco de dados NB.'),
(48,'Migração de Hospedagem', '120.0000', 'Migração dos arquivos do site do nosso servidor para a hospedagem do cliente.'),
(49,'Sobre nós', '60.0000', 'Página contendo informações sobre a empresa (Quem somos)');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `pesw`
--

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pesw`
--
