<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Custom Fields Toolbox - Documentação</h1>

  <h2>Descrição</h2>
  <p>O Custom Fields Toolbox é um plugin para WordPress que fornece recursos avançados para campos personalizados (Meta Fields). Ele adiciona funcionalidades extras aos campos personalizados, incluindo máscaras de entrada e manipulação de valores em tempo real.</p>

  <h2>Instalação</h2>
  <ol>
    <li>Baixe o arquivo do plugin <code>custom-fields-toolbox.zip</code>.</li>
    <li>Acesse o painel administrativo do WordPress.</li>
    <li>Navegue até "Plugins" e clique em "Adicionar novo".</li>
    <li>Clique em "Enviar plugin" e selecione o arquivo <code>custom-fields-toolbox.zip</code> que você baixou.</li>
    <li>Ative o plugin.</li>
  </ol>

  <h2>Utilização</h2>

  <h3>Exemplo 1: Aplicando uma máscara de telefone a um campo personalizado e transferindo o valor em tempo real:</h3>
  <pre><code>&lt;input type="text" id="_cftteln_example" name="_cftteln_example"&gt;
&lt;input type="text" id="_cfttell_example" name="_cfttell_example"&gt;</code></pre>

  <h3>Exemplo 2: Aplicando uma máscara de celular a um campo personalizado e transferindo o valor em tempo real:</h3>
  <pre><code>&lt;input type="text" id="_cftceln_example" name="_cftceln_example"&gt;
&lt;input type="text" id="_cftcell_example" name="_cftcell_example"&gt;</code></pre>

  <h3>Exemplo 3: Aplicando uma máscara de slug a um campo personalizado e transferindo o valor em tempo real:</h3>
  <pre><code>&lt;input type="text" id="_cftslugn_example" name="_cftslugn_example"&gt;
&lt;input type="text" id="_cftslugl_example" name="_cftslugl_example"&gt;</code></pre>

  <h2>Notas adicionais</h2>
  <ul>
    <li>Certifique-se de incluir o jQuery no seu site WordPress.</li>
    <li>Os campos com os prefixos mencionados acima serão automaticamente processados pelo plugin Custom Fields Toolbox.</li>
    <li>Certifique-se de atribuir IDs únicos aos seus campos personalizados para evitar conflitos.</li>
<li>As máscaras de entrada serão aplicadas aos campos automaticamente assim que a página for carregada.</li>
<li>Os valores digitados nos campos de telefone serão transferidos em tempo real para os campos de telefone correspondentes, removendo parênteses, espaços e traços.</li>
<li>Verifique se o plugin Custom Fields Toolbox está ativado e os scripts estão corretamente enfileirados no seu tema WordPress.</li>
</ul>

<h2>Compatibilidade</h2>
<p>O Custom Fields Toolbox é compatível com vários plugins de formulário do WordPress, incluindo:</p>
<ul>
<li>Contact Form 7</li>
<li>Elementor</li>
<li>JetEngine</li>
<li>Gravity Forms</li>
<li>Ninja Forms</li>
<li>WPForms</li>
</ul>

</body>
</html>
