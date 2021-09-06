
<?php
    /*
        Documentação PostBack de integração da Monetizze
        Documento para auxiliar desenvolvedores a integrar Monetizze ao seu software
    */

  $dados = $_POST;

  //Chave Unica
  //Para verificar se o POST foi enviado pela Monetizze
  //Compare a chave recebida com a chave que se encontra no menu Ferramentas->Postback
  $chaveUnica = $dados['chave_unica'];
  if($chaveUnica  != '82e98fd17562ae451ba4f9e3b9c2eab6') {
    exit;
  }

  //Compare a chave do produto recebida com a chave que se encontra da aba Dados Gerais no detalhe do produto
  $chave = $dados['produto']['chave'];
  if($chave  != 'd166bc9efec4b99953fa17aa5912d648') {
    exit;
  }

  //dados do produto
  // Em vendas realizadas atraves de checkout com Order Bump "$dados['produto']['codigo']" e "$dados['produto']['nome']" referem-se ao item principal da venda.
  $codigoProduto =       $dados['produto']['codigo'];
  $nomeProduto =         $dados['produto']['nome'];
  $descricaoProduto =    $dados['produto']['categoria']; // Exibe a categoria do produto
    // Tipo Postback
  $codTipoPostback =     $dados['tipoPostback']['codigo']; // 1=Sistema, 2=Produtor, 3=Co-Produtor, 4=Afiliado, 5=Afiliado Premium, 6=Gerente de Afiliado, 7=Co-Afiliado 
  $descTipoPostback =    $dados['tipoPostback']['descricao']; //Sistema,Produtor, Co-Produtor, Afiliado, Afiliado Premium, Gerente de Afiliado, Co-Afiliado

  // Tipo Evento
  $codigoTipoEvento =    $dados['tipoEvento']['codigo']; // 120= Status do pedido - Rastreio
  $descricaoTipoEvento = $dados['tipoEvento']['descricao']; // Status do pedido - Rastreio


  //Dados do comprador - Somente Produto e co-produtor OU se os dados do comprador estiverem liberados para o afiliado

  $nome                 = $dados['comprador']['nome'];
  $email                = $dados['comprador']['email'];
  $data_nascimento      = $dados['comprador']['data_nascimento']; // Formato yyyy-mm-dd
  $cnpj_cpf             = $dados['comprador']['cnpj_cpf']; //Numero inteiro (sem pontos)
  $telefone             = $dados['comprador']['telefone'];
  $cep                  = $dados['comprador']['cep']; //Numero inteiro (sem pontos)
  $endereco             = $dados['comprador']['endereco'];
  $numero               = $dados['comprador']['numero'];
  $complemento          = $dados['comprador']['complemento'];
  $bairro               = $dados['comprador']['bairro'];
  $cidade               = $dados['comprador']['cidade'];
  $estado               = $dados['comprador']['estado'];
  $pais                 = $dados['comprador']['pais'];

  /**
   * Dados referente ao rastreio do produto
   */

  $rastreio_status      = $dados['rastreio']['status']; // 2=Postado, 3=Extraviado, 4=Devolvido, 5=Saiu para entrega, 6=Entregue, 7=Em trânsito, 8=Aguardando retirada
  $rastreio_descricao   = $dados['rastreio']['descricao']; // Postado, Extraviado, Devolvido, Saiu para entrega, Entregue, Em trânsito, Aguardando retirada
  $rastreio_codigo      = $dados['rastreio']['codigo']; // string hash com o código de rastreio



  $json = $dados['json']; // Contem todo o conteúdo do postback em formato json

