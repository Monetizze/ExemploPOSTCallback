
<?php


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
  $codigoProduto = $dados['produto']['codigo'];
  $nomeProduto = $dados['produto']['nome'];

  //dados da venda 

  $codVenda         = $dados['venda']['codigo']; // Código da transação
  $codPlano         = $dados['venda']['plano']; // código do plano do produto (da edição do produto aba planos)
  $dataInicio       = $dados['venda']['dataInicio']; // Data que iniciou a compra. Formato: yyyy-mm-dd H:i:s
  $dataFinalizada   = $dados['venda']['dataFinalizada']; // Data em que foi confirmado o pagamento. Formato: yyyy-mm-dd H:i:s
  $meioPagamento    = $dados['venda']['meioPagamento']; // Meio de pagamento utilizado - (PagSeguro, MoIP, Monetize)
  $formaPagametno   = $dados['venda']['formaPagamento']; // Forma de pagamento utilizado - (Cartão de crédito,  Débito online, Boleto, Gratis, Outra)
  $garantiaRestante = $dados['venda']['garantiaRestante'];
  $statusVenda      = $dados['venda']['status']; // Status da venda (Aguardando pagamento, Finalizada, Cancelada, Devolvida, Bloqueada, Completa)
  $valorVenda       = $dados['venda']['valor']; //valor total pago ex: 1457.00
  $valorRecebido    = $dados['venda']['valorRecebido'] ; //valor total que você recebeu por essa venda ex: 1367.00 
  
  $src              = $dados['venda']['src']; //Valor do SRC que foi enviado via parâmetro da URL de divulgação
  $utm_source       = $dados['venda']['utm_source']; //Valor do SRC que foi enviado via parâmetro da URL de divulgação
  $utm_medium       = $dados['venda']['utm_medium']; //Valor do SRC que foi enviado via parâmetro da URL de divulgação
  $utm_content      = $dados['venda']['utm_content']; //Valor do SRC que foi enviado via parâmetro da URL de divulgação
  $utm_campaign     = $dados['venda']['utm_campaign']; //Valor do SRC que foi enviado via parâmetro da URL de divulgação
  
  
  
  // $linkBoleto e $linhaDigitavel - Somente Produto e co-produtor OU se os dados do comprador estiverem liberados para o afiliado
  $linkBoleto       = $dados['venda']['linkBoleto'] ; //Quando a forma de pagamento for Boleto, aqui vem o link para impressão do boleto 
  $linhaDigitavel   = $dados['venda']['linha_digitavel'] ; //Quando a forma de pagamento for Boleto, aqui vem a linha digitável do boleto 
 


  // Se o produto for um produto recorrente (assinatura) é enviado também os dados da assinatura correspondente a essa venda
  // Se não, esses campos não serão enviados
  $codAssinatura    = $dados['assinatura']['codigo']; // código da assinatura na Monetizze
  $statusAssinatura = $dados['assinatura']['status']; // Status da assinatura (Ativa, Inadimplente, Cancelada)
  $dataAssinatura   = $dados['assinatura']['data_assinatura']; // Data da Assinatura. Formato: yyyy-mm-dd H:i:s


  //Comissões - Somente Produto e co-produtor

  $comissoes = $dados['comissoes'];

  foreach ($comissoes as $comissao) {
      
    $nomeComissionado[] = $comissao['nome']; // do afiliado ou produto que recebeu essa comissão
    $tipoComissao[]     = $comissao['tipo_comissao']; // tipo da comissão (Sistema, Produtor, Co-Produtor, Primeiro Clique, Clique intermediário, Último Clique, Lead, Premium, Gerente)
    $valorComissao[]    = $comissao['valor']; // Valor que esse comissionado recebeu
    $porcComissao[]     = $comissao['comissao']; // Porcentagem do valor todal da venda que ele recebeu

  }



  //Dados do comprador - Somente Produto e co-produtor OU se os dados do comprador estiverem liberados para o afiliado 

  $nome             = $dados['comprador']['nome'];
  $email            = $dados['comprador']['email'];
  $data_nascimento  = $dados['comprador']['data_nascimento']; // Formato yyyy-mm-dd
  $cnpj_cpf         = $dados['comprador']['cnpj_cpf'];
  $telefone         = $dados['comprador']['telefone'];
  $cep              = $dados['comprador']['cep'];
  $endereco         = $dados['comprador']['endereco'];
  $numero           = $dados['comprador']['numero'];
  $complemento      = $dados['comprador']['complemento'];
  $bairro           = $dados['comprador']['bairro'];
  $cidade           = $dados['comprador']['cidade'];
  $estado           = $dados['comprador']['estado'];
  $pais             = $dados['comprador']['pais'];



/*

  SIGNIFICADO DE CADA STATUS DA VENDA

  Aguardando pagamento = Ainda não foi confirmado o pagamento (se a forma de pagamento for boleto = Boleto Impresso,)
  Finalizada = Pagamento confirmado - Produto pode ser entregue
  Cancelada =  Boleto não pago, ou cartão de crédito recusado
  Devolvida = Venda reembolsada ao comprador
  Bloqueada = Venda em disputa 
  Completa =  Valor das comissões disponível para saque na Monetizze (Quando a venda completa 30 dias da data de finalizada)

*/
