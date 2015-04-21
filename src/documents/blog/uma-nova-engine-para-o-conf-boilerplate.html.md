---
title: Uma nova engine para o Conf Boilerplate
date: 2015-04-21
layout: blog
---

Há muito tempo atrás, em uma galáxia muito, muito distante... nasceu a ideia de ajudar os organizadores de evento em uma tarefa essencial: *o site do evento*.

Isso porque quanto mais eventos ajudávamos, mais notávamos que na jornada de organização existem dezenas de tarefas que precisam de maior atenção do organizador do que apenas construir um site.

Nós queríamos montar algo que fosse produtivo e fácil de configurar, por isso optamos pelo caminho dos [geradores estáticos](https://www.staticgen.com/).

[Iniciamos o projeto em Jekyll](https://github.com/braziljs/conf-boilerplate/tree/v1.0.0). Porém, seu foco em blogs e os constantes problemas com as dependências de [Ruby](https://www.ruby-lang.org/en/) nos levaram a um caminho óbvio: migrar para [Node](http://nodejs.org/). Afinal, essa organização se chama Brazil**JS**, então nada mais óbvio do que evangelizar algo feito em JavaScript.

Finalmente em 2012, nesse mesmo blog, [anunciamos o Conf Boilerplate](http://braziljs.org/blog/apresentando-conf-boilerplate/). E desde então, [mais de 20 conferências no mundo todo](https://github.com/braziljs/conf-boilerplate#showcase) usaram nossa ferramenta, incluindo *DevFest's*, *TEDx's* e, é claro, *Front In's*.

Na época optamos pelo [DocPad](https://docpad.org/) como engine para construir o Conf Boilerplate por conta do seu alto nível de customização. Essa decisão nos ajudou drasticamente, tracionando diversos projetos e iniciando muitos desenvolvedores no mundo Node.

Porém, uma série de problemas incluindo [governança](https://github.com/docpad/docpad/issues/821) e performance nos levaram a [explorar outras soluções](https://github.com/braziljs/conf-boilerplate/issues/109). O que nos trás ao [Metalsmith](http://www.metalsmith.io/).

Esperamos que a nova ferramenta melhore ainda mais o workflow desse projeto e convidamos vocês a brincarem com a [versão 3](https://github.com/braziljs/conf-boilerplate/releases/tag/v3.0.0) que, apesar de não trazer nenhuma funcionalidade extra, trás mudanças substânciais de arquitetura, não só na engine de geração estática, mas como também na engine de templates.

Mais informações sobre como migrar e o que muda exatamente, você pode encontrar nas [notas do release](https://github.com/braziljs/conf-boilerplate/releases/tag/v3.0.0).

*Happy hacking!*