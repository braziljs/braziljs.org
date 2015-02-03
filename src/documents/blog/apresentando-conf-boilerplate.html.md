---
title: Apresentando o ConfBoilerplate
date: '2012-11-20'
layout: blog
authors: [braziljs]
old_url: http://braziljs.org/apresentando-conf-boilerplate/
---

<iframe src="http://www.youtube.com/embed/EI99oZI3nKY" frameborder="0" width="700" height="400"></iframe>

Um dos objetivos da BrazilJS Foundation é ajudar os organizadores a concretizarem seus eventos.

Nós realmente acreditamos que por trás desses encontros regionais, muito conhecimento pode ser gerado e compartilhado de uma maneira incrível.

Por isso, queremos fazer de tudo para facilitar a vida desses caras que ralam tanto para fazer um evento acontecer.

***** O que é?

Nossa experiência mostra que numa organização de evento, perde-se muito tempo no contato com patrocinadores, na escolha do local, na compra das passagens dos palestrantes. Enfim, muito trabalho mesmo e o que acontece na maioria das vezes é que falta tempo para se dedicar no site da conferência. Esse projeto trás um template que facilita na criação do site de qualquer evento.

***** Como funciona?

Nós usamos o [DocPad](https://github.com/bevry/docpad), um static generator em NodeJS, para criar esse modelo extremamente simples de customizar. Mas fique tranquilo, você não precisa saber NodeJS para utilizar.

***** Como customizar?

O projeto já vem com um template pronto, bonito e totalmente responsivo, explorando também os recursos de microdata ([schema.org](http://schema.org/)).

Ele foi pensado em módulos para facilitar a customização. Desde o CSS que é dividido entre reset.css, base.css e theme.css. Até o HTML que divide cada seção em uma partial diferente.

Apesar de todas as qualidades, nós recomendamos que altere os aspectos visuais dele, a fim de colocar sua própria cara no evento. Para maioria das alterações do projeto, basta ir até o **docpad.coffe** e alterar o valor das variáveis.

***** Quer saber mais?

Vá até o [repositório do projeto no Github](https://github.com/braziljs/conf-boilerplate), lá você pode consultar toda documentação.

E se você ainda não o assistiu, confira o [vídeo de apresentação](http://www.youtube.com/watch?v=EI99oZI3nKY) do projeto.