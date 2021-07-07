<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
    <style>

    
/*  THIAGO, A PARTE IMPORTANTE É ESSA */
.fixedHeightImg > img {
    max-height: 10rem;
    max-width: 20rem;
    margin-left: auto;
    margin-right: auto;
    width: auto;
  }
  /*
    Definir uma altura padrão (fixa) para a classe .fixedHeightImg faz com que qualquer imagem que esteja
    listada no carrosel, dentro de um div com a classe "item", permaneça com essa altura. Nesse exemplo a
    altura máxima é de  500 pixels, que vai ser a altura da imagem, portanto, do carrosel inteiro.
    Importante: Dentro do elemento de cada imagem a altura deve ser definida com um estilo inline
    */
/*  THIAGO, A PARTE IMPORTANTE É ESSA */
  </style>
 </head>
<body>