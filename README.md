# Exemplo de Integração POST (Callback) com a Monetizze
Esse é um script em PHP de exemplo de como o POST (callback) da Monetizze pode ser tratado


Para integrar a Monetizze com seu sistema.

- Vá no menu ferramentas
- Clique na opção postback
- Selecione Tipo (Server to Server)
- No campo URL coloque a url do seus sistema que receberá o post callback da Monetizze


*Botão de teste envia um produto exemplo chamado X-Wing


# Payload
```json
{
  "venda": {
    "codigo": "41852883",
    "plano": "140235",
    "dataInicio": "2022-10-01 09:33:48",
    "dataFinalizada": "2022-10-01 09:33:53",
    "meioPagamento": "Monetizze",
    "formaPagamento": "Cartão de crédito",
    "garantiaRestante": 0,
    "status": "Completa",
    "valor": "157.00",
    "quantidade": "1",
    "valorRecebido": "16.92",
    "onebuyclick": "0",
    "venda_upsell": null,
    "tipo_frete": "0",
    "descr_tipo_frete": "0",
    "frete": "0.00",
    "cupom": null,
    "src": "",
    "utm_source": "",
    "utm_medium": "",
    "utm_content": "",
    "utm_campaign": "",
    "linkBoleto": "",
    "linha_digitavel": "",
    "parcelas": "2"
  },
  "chave_unica": "a762b04bee2cb1bf05454082305c8fc5",
  "plano": {
    "codigo": "140235",
    "referencia": "FN140235",
    "nome": "3 potes por R$167 (super desconto)",
    "quantidade": "3",
    "sku": null
  },
  "produto": {
    "codigo": "145388",
    "chave": "4a920341e79639658c2459847e146da9",
    "nome": "Lift Detox Caps",
    "categoria": "Saúde, Bem-estar e Beleza"
  },
  "comprador": {
    "nome": "Amanda Dassis da Silva",
    "email": "amandadassis19@gmail.com",
    "data_nascimento": null,
    "cnpj_cpf": "16943386735",
    "telefone": "27998958642",
    "cep": "29830000",
    "endereco": "Rua Duarte   / perto da escola",
    "numero": "326",
    "complemento": "Casa",
    "bairro": "Rubia ",
    "cidade": "Nova Venécia",
    "estado": "ES",
    "pais": "BR"
  },
  "produtos": [
    {
      "produto": "123123",
      "codPlano": "123123",
      "chave": "4a920341e79639658c123337e146da9",
      "nome": "Lift Detox Caps Teste",
      "descricao": "Lift Detox Caps funciona como um aux\u00edlio ao emagrecimento.\n\nA combina\u00e7\u00e3o exclusiva dentro das c\u00e1psulas formam uma esp\u00e9cie de gel que proporciona uma poderosa a\u00e7\u00e3o inibidora de apetite, permitindo o auxilio do emagrecimento r\u00e1pido e saud\u00e1vel.\n\nAten\u00e7\u00e3o: produto com Anvisa aprovado!",
      "plano": "DS112323",
      "planoNome": "Teste Pote - 137,00",
      "cupom": null,
      "cupom_descricao": null,
      "valor": "137.00",
      "principal": "1",
      "quantidade": "1",
      "formato": "11",
      "categoria": "37",
      "membertizze": null,
      "sku": null
    }
  ],
  "tipoEvento": {
    "codigo": 6,
    "descricao": "Completa"
  },
  "url_recuperacao": "https://app.monetizze.com.br/checkout/KAL215862/?rec=20fac2e74b0cff1ec6d7ceb5dee4fd08",
  "postback_evento": "6",
  "tipoPostback": {
    "codigo": 2,
    "descricao": "Produtor"
  },
  "comissoes": [
    {
      "refAfiliado": "QU20076026",
      "nome": "Thiago",
      "email": "thiagocardozoh@hotmail.com",
      "tipo_comissao": "Último Clique",
      "valor": "65.33",
      "porcentagem": "45.00000"
    },
    {
      "refAfiliado": "",
      "nome": "CAPSUL BRASIL",
      "email": "capsulbrasilfb@gmail.com",
      "tipo_comissao": "Gerente",
      "valor": "0.01",
      "porcentagem": "0.00689"
    }
  ],
  "produtor": {
    "cnpj_cpf": "47051483000117",
    "nome": "TAG REPRESENTACOES LTDA",
    "email": "felipemorenopro@gmail.com"
  },
  "order_bump": 0,
  "ecommerce": false,
  "pix_url": "https://app.monetizze.com.br/checkout/obrigado/?c=03b2bff1300dd40e9f256b265068181f",
  "pix_imagem_qrcode": "https://live-us.adyen.com/hpp/generateQRCodeImage.shtml?url=00020101021226990014br.gov.bcb.pix2577pix.bpp.com.br%2F14796606%2Fqrs1%2Fv2%2F01reA77C03VnQjrkSlUWJjPNPb2jRJ8FiTqoz2Tr1EZsj5204000053039865802BR5914MONETIZZE+LTDA6009SAO+PAULO62070503***630425A0",
  "pix_codigo_qrcode": "00020101021226990014br.gov.bcb.pix2577pix.bpp.com.br/14796606/qrs1/v2/01reA77C03VnQjrkSlUWJjPNPb2jRJ8FiTqoz2Tr1EZsj5204000053039865802BR5914MONETIZZE LTDA6009SAO PAULO62070503***630425A0",
  "venda_item_order_bump": [
    {
      "produto": "188838",
      "codPlano": "169998",
      "chave": "32a25720158935a25236f05a547b9a1c",
      "nome": "Vivendo de Home Office",
      "descricao": "Vivendo de Home Office é um treinamento online perfeito para quem deseja prestar serviços para grandes empresas sem precisar sair de casa e  receber os pagamentos em euro ou dólar mesmo morando no Brasil. ",
      "plano": "HX169998",
      "planoNome": "Checkout 67 - sem boleto",
      "cupom": null,
      "cupom_descricao": null,
      "valor": "67.00",
      "principal": "1",
      "quantidade": "1",
      "formato": "1",
      "categoria": "12",
      "membertizze": "0"
    },
    {
      "produto": "217085",
      "codPlano": "183166",
      "chave": "c171a826df042dde186aadcec1ba0a78",
      "nome": "Combo Profissões na Internet + Suporte Premium",
      "descricao": "O Profissões na Internet é um guia passo a passo para você que deseja iniciar uma carreira prestando serviços na internet. Você já pode começar ganhando 1.000 reais no primeiro mês, trabalhando apenas 2 horas por dia.",
      "plano": "HE183166",
      "planoNome": "Plano 1",
      "cupom": null,
      "cupom_descricao": null,
      "valor": "27.00",
      "principal": "0",
      "quantidade": "1",
      "formato": "2",
      "categoria": "12",
      "membertizze": null
    }
  ],
  "callcenter": {
    "id": "Y83azT5GFRo%3D",
    "url": "https://callcenter.monetizze.com.br/sell/BtbGiDhCess/Y83azT5GFRo%3D"
  },
  "codigo_venda": "42063567",
  "codigo_status": "6",
  "rastreio": {
    "status": 2,
    "descricao": "Postado",
    "codigo": "PQ907915688BR"
  },
  "assinatura": {
    "codigo": "1104370",
    "status": "Cancelada",
    "data_assinatura": "2022-08-01 09:04:19",
    "parcela": "3"
  },
  "ecommerce_dados": {
    "checkout": "KAU260669",
    "tempo_expiracao": 10,
    "valor_frete": 19.55,
    "valor_soma_produtos": 358.35,
    "valor_desconto": 0,
    "valor_total": 377.9,
    "valor_acrescimo": 0,
    "bloquear_dados_comprador": false,
    "dados_comprador": {
      "nome": "Eliana Moesch",
      "cnpj_cpf": "86329138915",
      "celular": null,
      "data_nascimento": null,
      "exigir_cnpj_cpf": false,
      "email": "elicristina65@live.com",
      "exigir_endereco_entrega": false,
      "endereco_entrega": {
        "cep": "85950000",
        "endereco": "Rua General Carneiro",
        "numero": 37,
        "complemento": "Tapecaria Perola",
        "bairro": "Osvaldo Cruz",
        "cidade": "Palotina",
        "estado": "PR",
        "pais": "BR"
      }
    },
    "produtos": [
      {
        "codigo": null,
        "nome": "Castanha de Caju Torrada com Sal (W1) 1kg",
        "preco": 78.5,
        "quantidade": 1,
        "descricao": "Castanha de Caju Torrada com Sal (W1) 1kg",
        "categoria": null,
        "sku": "7898180909175"
      },
      {
        "codigo": null,
        "nome": "Castanha do Pará Média 1kg",
        "preco": 54.91,
        "quantidade": 1,
        "descricao": "Castanha do Pará Média 1kg",
        "categoria": null,
        "sku": "7898180906051"
      }
    ],
    "identificador": 414063,
    "venda": "42312309"
  },
  "recuperacao_parcelada": {
    "codigo": "1123804",
    "status": "Ativa",
    "data_recuperacao_parcelada": "2022-10-01 09:52:25",
    "parcela": "1"
  },
  "json": "{\"venda\":{\"codigo\":\"41852883\",\"plano\":\"140235\",\"dataInicio\":\"2022-10-01 09:33:48\",\"dataFinalizada\":\"2022-10-01 09:33:53\",\"meioPagamento\":\"Monetizze\",\"formaPagamento\":\"Cart\u00e3o de cr\u00e9dito\",\"garantiaRestante\":0,\"status\":\"Completa\",\"valor\":\"157.00\",\"quantidade\":\"1\",\"valorRecebido\":\"16.92\",\"onebuyclick\":\"0\",\"venda_upsell\":null,\"tipo_frete\":\"0\",\"descr_tipo_frete\":\"0\",\"frete\":\"0.00\",\"cupom\":null,\"src\":\"\",\"utm_source\":\"\",\"utm_medium\":\"\",\"utm_content\":\"\",\"utm_campaign\":\"\",\"linkBoleto\":\"\",\"linha_digitavel\":\"\",\"parcelas\":\"2\"},\"chave_unica\":\"a762b04bee2cb1bf05454082305c8fc5\",\"plano\":{\"codigo\":\"140235\",\"referencia\":\"FN140235\",\"nome\":\"3 potes por R$167 (super desconto)\",\"quantidade\":\"3\",\"sku\":null},\"produto\":{\"codigo\":\"145388\",\"chave\":\"4a920341e79639658c2459847e146da9\",\"nome\":\"Lift Detox Caps\",\"categoria\":\"Sa\u00fade, Bem-estar e Beleza\"},\"comprador\":{\"nome\":\"Amanda Dassis da Silva\",\"email\":\"amandadassis19@gmail.com\",\"data_nascimento\":null,\"cnpj_cpf\":\"16943386735\",\"telefone\":\"27998958642\",\"cep\":\"29830000\",\"endereco\":\"Rua Duarte   \/ perto da escola\",\"numero\":\"326\",\"complemento\":\"Casa\",\"bairro\":\"Rubia \",\"cidade\":\"Nova Ven\u00e9cia\",\"estado\":\"ES\",\"pais\":\"BR\"},\"produtos\":[{\"produto\":\"123123\",\"codPlano\":\"123123\",\"chave\":\"4a920341e79639658c123337e146da9\",\"nome\":\"Lift Detox Caps Teste\",\"descricao\":\"Lift Detox Caps funciona como um aux\u00edlio ao emagrecimento.\n\nA combina\u00e7\u00e3o exclusiva dentro das c\u00e1psulas formam uma esp\u00e9cie de gel que proporciona uma poderosa a\u00e7\u00e3o inibidora de apetite, permitindo o auxilio do emagrecimento r\u00e1pido e saud\u00e1vel.\n\nAten\u00e7\u00e3o: produto com Anvisa aprovado!\",\"plano\":\"DS112323\",\"planoNome\":\"Teste Pote - 137,00\",\"cupom\":null,\"cupom_descricao\":null,\"valor\":\"137.00\",\"principal\":\"1\",\"quantidade\":\"1\",\"formato\":\"11\",\"categoria\":\"37\",\"membertizze\":null,\"sku\":null}],\"tipoEvento\":{\"codigo\":6,\"descricao\":\"Completa\"},\"url_recuperacao\":\"https:\/\/app.monetizze.com.br\/checkout\/KAL215862\/?rec=20fac2e74b0cff1ec6d7ceb5dee4fd08\",\"postback_evento\":\"6\",\"tipoPostback\":{\"codigo\":2,\"descricao\":\"Produtor\"},\"comissoes\":[{\"refAfiliado\":\"QU20076026\",\"nome\":\"Thiago\",\"email\":\"thiagocardozoh@hotmail.com\",\"tipo_comissao\":\"\u00daltimo Clique\",\"valor\":\"65.33\",\"porcentagem\":\"45.00000\"},{\"refAfiliado\":\"\",\"nome\":\"CAPSUL BRASIL\",\"email\":\"capsulbrasilfb@gmail.com\",\"tipo_comissao\":\"Gerente\",\"valor\":\"0.01\",\"porcentagem\":\"0.00689\"}],\"produtor\":{\"cnpj_cpf\":\"47051483000117\",\"nome\":\"TAG REPRESENTACOES LTDA\",\"email\":\"felipemorenopro@gmail.com\"},\"order_bump\":0,\"ecommerce\":false,\"pix_url\":\"https:\/\/app.monetizze.com.br\/checkout\/obrigado\/?c=03b2bff1300dd40e9f256b265068181f\",\"pix_imagem_qrcode\":\"https:\/\/live-us.adyen.com\/hpp\/generateQRCodeImage.shtml?url=00020101021226990014br.gov.bcb.pix2577pix.bpp.com.br%2F14796606%2Fqrs1%2Fv2%2F01reA77C03VnQjrkSlUWJjPNPb2jRJ8FiTqoz2Tr1EZsj5204000053039865802BR5914MONETIZZE+LTDA6009SAO+PAULO62070503***630425A0\",\"pix_codigo_qrcode\":\"00020101021226990014br.gov.bcb.pix2577pix.bpp.com.br\/14796606\/qrs1\/v2\/01reA77C03VnQjrkSlUWJjPNPb2jRJ8FiTqoz2Tr1EZsj5204000053039865802BR5914MONETIZZE LTDA6009SAO PAULO62070503***630425A0\",\"venda_item_order_bump\":[{\"produto\":\"188838\",\"codPlano\":\"169998\",\"chave\":\"32a25720158935a25236f05a547b9a1c\",\"nome\":\"Vivendo de Home Office\",\"descricao\":\"Vivendo de Home Office \u00e9 um treinamento online perfeito para quem deseja prestar servi\u00e7os para grandes empresas sem precisar sair de casa e  receber os pagamentos em euro ou d\u00f3lar mesmo morando no Brasil. \",\"plano\":\"HX169998\",\"planoNome\":\"Checkout 67 - sem boleto\",\"cupom\":null,\"cupom_descricao\":null,\"valor\":\"67.00\",\"principal\":\"1\",\"quantidade\":\"1\",\"formato\":\"1\",\"categoria\":\"12\",\"membertizze\":\"0\"},{\"produto\":\"217085\",\"codPlano\":\"183166\",\"chave\":\"c171a826df042dde186aadcec1ba0a78\",\"nome\":\"Combo Profiss\u00f5es na Internet + Suporte Premium\",\"descricao\":\"O Profiss\u00f5es na Internet \u00e9 um guia passo a passo para voc\u00ea que deseja iniciar uma carreira prestando servi\u00e7os na internet. Voc\u00ea j\u00e1 pode come\u00e7ar ganhando 1.000 reais no primeiro m\u00eas, trabalhando apenas 2 horas por dia.\",\"plano\":\"HE183166\",\"planoNome\":\"Plano 1\",\"cupom\":null,\"cupom_descricao\":null,\"valor\":\"27.00\",\"principal\":\"0\",\"quantidade\":\"1\",\"formato\":\"2\",\"categoria\":\"12\",\"membertizze\":null}],\"callcenter\":{\"id\":\"Y83azT5GFRo%3D\",\"url\":\"https:\/\/callcenter.monetizze.com.br\/sell\/BtbGiDhCess\/Y83azT5GFRo%3D\"},\"codigo_venda\":\"42063567\",\"codigo_status\":\"6\",\"rastreio\":{\"status\":2,\"descricao\":\"Postado\",\"codigo\":\"PQ907915688BR\"},\"assinatura\":{\"codigo\":\"1104370\",\"status\":\"Cancelada\",\"data_assinatura\":\"2022-08-01 09:04:19\",\"parcela\":\"3\"},\"ecommerce_dados\":{\"checkout\":\"KAU260669\",\"tempo_expiracao\":10,\"valor_frete\":19.55,\"valor_soma_produtos\":358.35,\"valor_desconto\":0,\"valor_total\":377.9,\"valor_acrescimo\":0,\"bloquear_dados_comprador\":false,\"dados_comprador\":{\"nome\":\"Eliana Moesch\",\"cnpj_cpf\":\"86329138915\",\"celular\":null,\"data_nascimento\":null,\"exigir_cnpj_cpf\":false,\"email\":\"elicristina65@live.com\",\"exigir_endereco_entrega\":false,\"endereco_entrega\":{\"cep\":\"85950000\",\"endereco\":\"Rua General Carneiro\",\"numero\":37,\"complemento\":\"Tapecaria Perola\",\"bairro\":\"Osvaldo Cruz\",\"cidade\":\"Palotina\",\"estado\":\"PR\",\"pais\":\"BR\"}},\"produtos\":[{\"codigo\":null,\"nome\":\"Castanha de Caju Torrada com Sal (W1) 1kg\",\"preco\":78.5,\"quantidade\":1,\"descricao\":\"Castanha de Caju Torrada com Sal (W1) 1kg\",\"categoria\":null,\"sku\":\"7898180909175\"},{\"codigo\":null,\"nome\":\"Castanha do Par\u00e1 M\u00e9dia 1kg\",\"preco\":54.91,\"quantidade\":1,\"descricao\":\"Castanha do Par\u00e1 M\u00e9dia 1kg\",\"categoria\":null,\"sku\":\"7898180906051\"}],\"identificador\":414063,\"venda\":\"42312309\"},\"recuperacao_parcelada\":{\"codigo\":\"1123804\",\"status\":\"Ativa\",\"data_recuperacao_parcelada\":\"2022-10-01 09:52:25\",\"parcela\":\"1\"}}"
}
```
# Descrição do Payload
| Campo                                                           | Tipo             | Descrição / Exemplo |
| :-------------------------------------------------------------- |:----------------:| :------------------:|
|venda.codigo                                                     | numérico         ||
|venda.plano                                                      | numérico         ||
|venda.dataInicio                                                 | datetime         | Y-m-d H:i:s
|venda.dataFinalizada                                             | datetime         | Y-m-d H:i:s
|venda.meioPagamento                                              | string           ||
|venda.formaPagamento                                             | string           | [Formas de pagamento](#formas-de-pagamento)
|venda.garantiaRestante                                           | numérico         ||
|venda.status                                                     | string           | [Status Venda](#status-venda) |
|venda.valor                                                      | decimal          ||
|venda.quantidade                                                 | numérico         ||
|venda.valorRecebido                                              | decimal          ||
|venda.onebuyclick                                                | numérico         ||
|venda.venda_upsell                                               | numérico ou null |
|venda.tipo_frete                                                 | numérico ou null | [Tipo Frete](#tipo-frete) |
|venda.descr_tipo_frete                                           | string ou null   | [Descrição Tipo Frete](#descrição-tipo-frete)
|venda.frete                                                      | decimal          ||
|venda.cupom                                                      | string ou null   ||
|venda.src                                                        | string ou null   ||
|venda.utm_source                                                 | string ou null   || Valor do SRC que foi enviado via parâmetro da URL de divulgação
|venda.utm_medium                                                 | string ou null   || Valor do SRC que foi enviado via parâmetro da URL de divulgação
|venda.utm_content                                                | string ou null   || Valor do SRC que foi enviado via parâmetro da URL de divulgação
|venda.utm_campaign                                               | string ou null   || Valor do SRC que foi enviado via parâmetro da URL de divulgação
|venda.linkBoleto                                                 | string           ||
|venda.linha_digitavel                                            | string           ||
|venda.parcelas                                                   | numérico         ||
|chave_unica                                                      | string           ||
|plano.codigo                                                     | numérico         ||
|plano.referencia                                                 | string           ||
|plano.nome                                                       | string           ||
|plano.quantidade                                                 | numérico         ||
|produto.codigo                                                   | numérico         ||
|produto.chave                                                    | string           ||
|produto.nome                                                     | string           ||
|produto.categoria                                                | string           | [Descrição Produto Categoria](#descrição-produto-categoria) |
|comprador.nome                                                   | string            ||
|comprador.email                                                  | string            ||
|comprador.data_nascimento                                        | date              | Y-m-d |
|comprador.cnpj_cpf                                               | string ou null    ||
|comprador.telefone                                               | string ou null    ||
|comprador.cep                                                    | string ou null    ||
|comprador.endereco                                               | string ou null    ||
|comprador.numero                                                 | string ou null    ||
|comprador.complemento                                            | string ou null    ||
|comprador.bairro                                                 | string ou null    ||
|comprador.cidade                                                 | string ou null    ||
|comprador.estado                                                 | string ou null    ||
|comprador.pais                                                   | string            ||
|produtos[].produto                                               | string            ||
|produtos[].codPlano                                              | string            ||
|produtos[].chave                                                 | string            ||
|produtos[].nome                                                  | string            ||
|produtos[].descricao                                             | string            ||
|produtos[].plano                                                 | string            ||
|produtos[].planoNome                                             | string            ||
|produtos[].cupom                                                 | string ou null    ||
|produtos[].cupom_descricao                                       | string ou null    ||
|produtos[].valor                                                 | decimal           ||
|produtos[].principal                                             | numérico          ||
|produtos[].quantidade                                            | numérico          ||
|produtos[].formato                                               | numérico          || [Produto Formato](#proudto-formato) |
|produtos[].categoria                                             | numérico          || [Produto Categoria](#proudto-categoria) |
|produtos[].membertizze                                           | numérico ou null  ||
|produtos[].sku                                                   | string ou null    ||
|tipoEvento.codigo                                                | numérico          | [Código Tipo Evento](#código-tipo-evento) |
|tipoEvento.descricao                                             | string            | [Descrição Tipo Evento](#descrição-tipo-evento) |
|url_recuperacao                                                  | string            ||
|postback_evento                                                  | numérico          | [Postback Evento](#postback-evento) |
|tipoPostback.codigo                                              | numérico          | [Tipo Postback Código](#tipo-postback-código) |
|tipoPostback.descricao                                           | string            | [Tipo Postback Descrição](#tipo-postback-descrição) |
|produtor.cnpj_cpf                                                | string            ||
|produtor.nome                                                    | string            ||
|produtor.email                                                   | string            ||
|order_bump                                                       | numérico          || 0 ou 1
|ecommerce                                                        | bool              ||
|comissoes[].refAfiliado                                          | string            ||
|comissoes[].nome                                                 | string            ||
|comissoes[].email                                                | string            ||
|comissoes[].tipo_comissao                                        | string            | [Tipo Comissão Descrição](#tipo-comissão-descrição) |
|comissoes[].valor                                                | decimal           ||
|comissoes[].porcentagem                                          | decimal           ||
|pix_url                                                          | string            ||
|pix_imagem_qrcode                                                | string            ||
|pix_codigo_qrcode                                                | string            ||
|callcenter.id                                                    | string            ||
|callcenter.url                                                   | string            ||
|venda_item_order_bump[].produto                                  | numérico          ||
|venda_item_order_bump[].codPlano                                 | numérico          ||
|venda_item_order_bump[].chave                                    | string            ||
|venda_item_order_bump[].nome                                     | string            ||
|venda_item_order_bump[].descricao                                | string            ||
|venda_item_order_bump[].plano                                    | string            ||
|venda_item_order_bump[].planoNome                                | string            ||
|venda_item_order_bump[].cupom                                    | string ou null    ||
|venda_item_order_bump[].cupom_descricao                          | string ou null    ||
|venda_item_order_bump[].valor                                    | decimal           ||
|venda_item_order_bump[].principal                                | numérico          | "0" ou "1" |
|venda_item_order_bump[].quantidade                               | numérico          ||
|venda_item_order_bump[].formato                                  | numérico          | [Produto Formato](#produto-formato) |
|venda_item_order_bump[].categoria                                | numérico          | [Produto Categoria](#produto-categoria) |
|venda_item_order_bump[].membertizze                              | numérico ou null  | [Order Bump Membertizze](#order-bump-membertizze) |
|codigo_venda                                                     | numérico          ||
|codigo_status                                                    | numérico          | [Código Status Venda](#código-status-venda) |
|rastreio.status                                                  | numérico          | [Código Rastreio Status](#código-rastreio-status) |
|rastreio.descricao                                               | string            | [Descrição Rastreio Status](#descrição-rastreio-status) |
|rastreio.codigo                                                  | string            ||
|assinatura.codigo                                                | numérico          ||
|assinatura.status                                                | string            | [Assinatura Status](#assinatura-status) |
|assinatura.data_assinatura                                       | datetime          | Y-m-d H:i:s |
|assinatura.parcela                                               | numérico          ||
|ecommerce_dados.checkout                                         | string            ||
|ecommerce_dados.tempo_expiracao                                  | numérico          ||
|ecommerce_dados.valor_frete                                      | numérico          ||
|ecommerce_dados.valor_soma_produtos                              | numérico          ||
|ecommerce_dados.valor_desconto                                   | decimal           ||
|ecommerce_dados.valor_total                                      | decimal           ||
|ecommerce_dados.valor_acrescimo                                  | decimal           ||
|ecommerce_dados.bloquear_dados_comprador                         | boll              ||
|ecommerce_dados.dados_comprador.nome                             | string            ||
|ecommerce_dados.dados_comprador.cnpj_cpf                         | string            ||
|ecommerce_dados.dados_comprador.celular                          | string ou null    ||
|ecommerce_dados.dados_comprador.data_nascimento                  | date ou null      | Y-m-d |
|ecommerce_dados.dados_comprador.exigir_cnpj_cpf                  | bool              ||
|ecommerce_dados.dados_comprador.email                            | string            ||
|ecommerce_dados.dados_comprador.exigir_endereco_entrega          | bool              ||
|ecommerce_dados.dados_comprador.endereco_entrega.cep             | string            ||
|ecommerce_dados.dados_comprador.endereco_entrega.endereco        | string            ||
|ecommerce_dados.dados_comprador.endereco_entrega.numero          | string            ||
|ecommerce_dados.dados_comprador.endereco_entrega.complemento     | string            ||
|ecommerce_dados.dados_comprador.endereco_entrega.bairro          | string            ||
|ecommerce_dados.dados_comprador.endereco_entrega.cidade          | string            ||
|ecommerce_dados.dados_comprador.endereco_entrega.estado          | string            ||
|ecommerce_dados.dados_comprador.endereco_entrega.pais            | string            ||
|ecommerce_dados.produtos[].nome                                  | string            ||
|ecommerce_dados.produtos[].preco                                 | decimal           ||
|ecommerce_dados.produtos[].quantidade                            | numérico          ||
|ecommerce_dados.produtos[].descricao                             | string            ||
|ecommerce_dados.produtos[].sku                                   | string            ||
|ecommerce_dados.identificador                                    | numérico          ||
|ecommerce_dados.venda                                            | numérico          ||
|recuperacao_parcelada.codigo                                     | numérico          ||
|recuperacao_parcelada.status                                     | string            | [Recuperação Parcelada Status](#recuperação-parcelada-status) |
|recuperacao_parcelada.data_recuperacao_parcelada                 | datetime          | Y-m-d H:i:s
|recuperacao_parcelada.parcela                                    | numérico          ||
|json                                                             | string            | string json de todos os outros atributos


### Formas de Pagamento
| Descrição        |
| :--------------- |
|Boleto            |
|Cartão de crédito |
|Pix               |
|Grátis            |
|Débito online     |

### Status Venda
| Descrição           |
| :------------------ |
|Abandono de Checkout |
|Aguardando pagamento |
|Finalizada           |
|Cancelada            |
|Devolvida            |
|Bloqueada            |
|Completa             |

### Tipo Frete
| Código    | Descrição |
| :-------- |:---------
|0          |Intelipost |
|10         |Intelipost |
|11         |Intelipost |
|3          |Intelipost |
|3220       |Intelipost |
|3298       |Intelipost |
|4          |Intelipost |
|4014       |Sedex      |
|4510       |PAC        |
|999997     |Intelipost |
|999998     |Intelipost |
|999999     |Valor fixo |

### Descrição Tipo Frete
| Descrição                      |
| :----------------------------- |
|Correios Frete Super expresso   |
|Correios Frete-gratis           |
|Correios PAC Contrato TA        |
|Correios PAC                    |
|Correios SEDEX                  |
|Freteasy PAC                    |
|Padrão                          |
|Total Express                   |
|Valor Fixo (Grátis)             |
|Valor Fixo                      |

### Descrição Produto Categoria
| Descrição                                         |
| :------------------------------------------------ |
|Administração e Negócios                           |
|Animais de Estimação                               |
|Arquitetura e Engenharia                           |
|Artes e Música                                     |
|Auto-ajuda e Desenvolvimento Pessoal               |
|Automóveis                                         |
|Blogs e Redes Sociais                              |
|Casa e Jardinagem                                  |
|Culinária, Gastronomia, Receitas                   |
|Design e Templates PSD, PPT ou HTML                |
|Edição de Áudio, Vídeo ou Imagens                  |
|Educacional, Cursos Técnicos e Profissionalizantes |
|Entretenimento, Lazer e Diversão                   |
|Esportes e Fitness                                 |
|Filmes e Cinema                                    |
|Geral                                              |
|Histórias em Quadrinhos                            |
|Idiomas                                            |
|Informática                                        |
|Internet Marketing                                 |
|Investimentos e Finanças                           |
|Jogos de Cartas, Poker, Loterias                   |
|Jogos de Computador, Jogos Online                  |
|Jurídico                                           |
|Literatura e Poesia                                |
|Marketing de Rede                                  |
|Marketing e Comunicação                            |
|Meio Ambiente                                      |
|Música, Bandas e Shows                             |
|Paquera, Sedução e Relacionamentos                 |
|Plugins, Widgets e Extensões                       |
|Produtividade e Organização Pessoal                |
|Relatórios, Artigos e Pesquisas                    |
|Religião e Crenças                                 |
|Romances, Dramas, Estórias e Contos                |
|RPG e Jogos de Mesa                                |
|Saúde, Bem-estar e Beleza                          |
|Scripts                                            |
|Segurança do Trabalho                              |
|Sexologia e Sexualidade                            |
|Snippets (Trechos de Vídeo)                        |
|Turismo                                            |
|Pessoas com deficiência                            |
|Moda e vestuário                                   |
|Produtos infantis                                  |
|Eletrônicos                                        |
|Eletroportáteis                                    |
|Eletrodomésticos                                   |
|Moveis e decoração                                 |
|Perfumaria                                         |
|Rascunho                                           |
|Trader                                             |

### Produto Categoria
| Código | Descrição                                          |
| :------| :------------------------------------------------- |
1        | Administração e Negócios                           |
2        | Animais de Estimação                               |
3        | Arquitetura e Engenharia                           |
4        | Artes e Música                                     |
5        | Auto-ajuda e Desenvolvimento Pessoal               |
6        | Automóveis                                         |
7        | Blogs e Redes Sociais                              |
8        | Casa e Jardinagem                                  |
9        | Culinária, Gastronomia, Receitas                   |
10       | Design e Templates PSD, PPT ou HTML                |
11       | Edição de Áudio, Vídeo ou Imagens                  |
12       | Educacional, Cursos Técnicos e Profissionalizantes |
13       | Entretenimento, Lazer e Diversão                   |
14       | Esportes e Fitness                                 |
15       | Filmes e Cinema                                    |
16       | Geral                                              |
17       | Histórias em Quadrinhos                            |
18       | Idiomas                                            |
19       | Informática                                        |
20       | Internet Marketing                                 |
21       | Investimentos e Finanças                           |
22       | Jogos de Cartas, Poker, Loterias                   |
23       | Jogos de Computador, Jogos Online                  |
24       | Jurídico                                           |
25       | Literatura e Poesia                                |
26       | Marketing de Rede                                  |
27       | Marketing e Comunicação                            |
28       | Meio Ambiente                                      |
29       | Música, Bandas e Shows                             |
30       | Paquera, Sedução e Relacionamentos                 |
31       | Plugins, Widgets e Extensões                       |
32       | Produtividade e Organização Pessoal                |
33       | Relatórios, Artigos e Pesquisas                    |
34       | Religião e Crenças                                 |
35       | Romances, Dramas, Estórias e Contos                |
36       | RPG e Jogos de Mesa                                |
37       | Saúde, Bem-estar e Beleza                          |
38       | Scripts                                            |
39       | Segurança do Trabalho                              |
40       | Sexologia e Sexualidade                            |
41       | Snippets (Trechos de Vídeo)                        |
42       | Turismo                                            |
43       | Pessoas com deficiência                            |
44       | Moda e vestuário                                   |
45       | Produtos infantis                                  |
46       | Eletrônicos                                        |
47       | Eletroportáteis                                    |
48       | Eletrodomésticos                                   |
49       | Moveis e decoração                                 |
50       | Perfumaria                                         |
51       | Rascunho                                           |
52       | Trader                                             |

### Produto Formato
| Código | Descrição                                                |
|:-------| :--------------------------------------------------------|
1        |Site Membros (Cursos, Video Aulas)/ Serviço de assinatura |
2        |Ebooks, Documentos, Texto                                 |
3        |Software                                                  |
4        |Aplicativos p/ Celular                                    |
5        |Screencasts, Filmes                                       |
6        |Áudios, Músicas, Ringtones                                |
7        |Templates, Códigos Fonte                                  |
8        |Imagens, Ícones, Fotos                                    |
9        |Serviços                                                  |
10       |Mentoria/Mastermind                                       |
11       |Produto Físico                                            |
12       |Evento                                                    |
13       |Planilha de Excel                                         |
14       |E-commerce                                                |
15       |Rascunho                                                  |
16       |E-commerce Iset                                           |

### Código Tipo Evento
| Descrição |
| :---------|
|1          |
|2          |
|3          |
|4          |
|5          |
|6          |
|7          |
|8          |
|98         |
|99         |
|101        |
|102        |
|103        |
|104        |
|105        |
|106        |
|120        |

### Descrição Tipo Evento
| Código | Descrição                         |
| :------| :-------------------------------- |
|1       | Aguardando pagamento              |
|2       | Finalizada / Aprovada             |
|3       | Cancelada                         |
|4       | Devolvida (Reembolso)             |
|5       | Bloqueada                         |
|6       | Completa                          |
|7       | Abandono de Checkout              |
|8       | Oculto                            |
|98      | Cartão                            |
|99      | Boleto                            |
|101     | Assinatura - Ativa                |
|102     | Assinatura - Inadimplente         |
|103     | Assinatura - Cancelada            |
|104     | Assinatura - Aguardando pagamento |
|105     | Recuperação Parcelada - Ativa     |
|106     | Recuperação Parcelada - Cancelada |
|120     | Status do pedido - Rastreio       |

### Postback Evento
| Descrição |
| :---------|
|1          |
|2          |
|3          |
|4          |
|6          |
|7          |
|101        |
|102        |
|103        |
|104        |
|105        |
|106        |
|120        |

### Tipo Postback Código
| Código | Descrição           |
| :------|:------------------- |
|1       | Sistema             |
|2       | Produtor            |
|3       | Co-Produtor         |
|4       | Afiliado            |
|5       | Afiliado Premium    |
|6       | Gerente de Afiliado |
|7       | Co-Afiliado         |

### Tipo Postback Descrição
| Descrição           |
|:------------------- |
| Sistema             |
| Produtor            |
| Co-Produtor         |
| Afiliado            |
| Afiliado Premium    |
| Gerente de Afiliado |
| Co-Afiliado         |

### Tipo Comissão Descrição
| Descrição           |
| :------------------ |
|Cashback             |
|Clique intermediário |
|Co-Afiliado          |
|Co-Produtor          |
|Gerente              |
|Lead                 |
|Primeiro Clique      |
|Produtor             |
|Sistema              |
|Televendas           |
|último Clique        |

### Order Bump Formato
| Descrição |
| :-------- |
|1          |
|2          |
|3          |
|4          |
|5          |
|6          |
|7          |
|8          |
|9          |
|10         |
|11         |
|12         |
|13         |
|14         |
|15         |
|16         |

### Código Status Venda
| Descrição |
| :-------- |
|1          |
|2          |
|3          |
|4          |
|6          |

### Order Bump Membertizze
| Valor | Descrição            |
| :---- | :------------------- |
|null   | Não é área membros   |
|0      | Área membros externa |
|2      | Membertizze 2.0      |

### Código Rastreio Status
| Código    | Descrição           |
| :-------- | :-------------------|
|2          | Postado             |
|3          | Extraviado          |
|4          | Devolvido           |
|5          | Saiu para entrega   |
|6          | Entregue            |
|7          | Em trânsito         |
|8          | Aguardando retirada |

### Descrição Rastreio Status
### Código Rastreio Status
|Descrição           |
|:-------------------|
|Postado             |
|Extraviado          |
|Devolvido           |
|Saiu para entrega   |
|Entregue            |
|Em trânsito         |
|Aguardando retirada |

### Assinatura Status
| Descrição           |
| :------------------ |
|Aguardando pagamento |
|Ativa                |
|Cancelada            |
|Inadimplente         |
|Postado             |

### Recuperação Parcelada Status
| Descrição           |
| :------------------ |
|Ativa                |
|Aguardando pagamento |
|Cancelada            |
