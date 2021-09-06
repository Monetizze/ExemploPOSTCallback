
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
  $codigoTipoEvento =    $dados['tipoEvento']['codigo']; // 1=AGUARDANDO_PAGAMENTO, 2=FINALIZADA_APROVADA, 3=CANCELADA, 4=DEVOLVIDA, 5=BLOQUEADA, 6=COMPLETA, 7=ABANDONO_DE_CHECKOUT, 8=OCULTO, 98=CARTAO, 99=BOLETO, 101=ASSINATURA_ATIVA, 102=ASSINATURA_INADIMPLENTE, 103=ASSINATURA_CANCELADA, 104=ASSINATURA_AGUARDANDO_PAGAMENTO
  $descricaoTipoEvento = $dados['tipoEvento']['descricao']; // 1='Aguardando pagamento', 2='Finalizada / Aprovada', 3='Cancelada', 4='Devolvida (Reembolso)', 5='Bloqueada', 6='Completa', 7='Abandono de Checkout', 8='Oculto', 98='Cartão', 99='Boleto', 101='Assinatura - Ativa', 102='Assinatura - Inadimplente', 103='Assinatura - Cancelada', 104='Assinatura - Aguardando pagamento'


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


/*
 
  SIGNIFICADO DE CADA STATUS DA VENDA

  Aguardando pagamento = Ainda não foi confirmado o pagamento (se a forma de pagamento for boleto = Boleto Impresso,)
  Finalizada = Pagamento confirmado - Produto pode ser entregue
  Cancelada =  Boleto não pago, ou cartão de crédito recusado
  Devolvida = Venda reembolsada ao comprador
  Bloqueada = Venda em disputa
  Completa =  Valor das comissões disponível para saque na Monetizze (Quando a venda completa 30 dias da data de finalizada)

*/

/*

    Novos comentários adicionados por 
        Jeferson Capobianco <jefersoncapobianco@gmail.com>
        Challenger CRM <challengercrm.com>
        
        Obrigado pela contribuição.
*/
