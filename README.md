Conteúdo em banco de dados
==========================

Ao invés de trabalhar com require / include para incluir as páginas de conteúdo no site simples, você deverá agora trazer esse conteúdo de um banco de dados MySQL.

Você também precisará criar um arquivo de configuração (variáveis) para com o banco de dados e também as fixtures necessárias para que seja possível verificar dados de teste.

Não deixe de criar um sistema de busca por palavra-chave, ou seja, quando alguém buscar determinada palavra, o sistema deverá  pesquisar nos conteúdos das páginas no banco de dados e listar as páginas que possuem a palavra buscada. Ao clicar nessa página, o usuário deverá ser redirecionado para a mesma.

A conexão deverá ser realizada via PDO.


OBS para uso:
=============

1 - Criar database education
2 - Colocar os dados de acesso ao banco de dados, no arquivo engine/config.php
3 - Colocar as rotas configuradas para uso, no arquivo engine/config.php
4 - Criar tabela pages rodando a pagina model/fixture.php
5 - para recuperar a conexão basta chamar a function getDb();
6 - As paginas de view estão dentro de /includes

Pronto, desta forma estará tudo funcionando em perfeita armonia;

Área administrativa
===================

Agora que seu projeto possui diversas páginas de conteúdo que vem diretamente de um banco de dados, você tem o seguinte desafio: Deixar todas essas páginas administráveis =)

Crie uma área restrita (onde você precisa de um login e senha). Nessa área você terá acesso a listagem de todas as páginas. Ao clicar na página, você terá opção de editar seu conteúdo através de um editor online (você pode utilizar um de sua preferência como o ckeditor)...

Depois de fazer as alterações, você pode clicar em salvar, para completar a edição de conteúdo da página correspondente. (No momento do salvar, você dará um update no banco de dados).

Se um usuário não autenticado acessar a URL de administração, ele deverá ser redirecionado para uma tela de login para ele se autenticar.

O usuário e senha de autenticação deverão estar gravados no banco de forma segura.

Crie uma fixture para adicionar o usuário e senha.

PS: Basicamente o que estou exigindo a mais é a utilização do editor online... Conte conosco para lhe ajudar a implementar, mas antes quero que você tente por você mesmo...

PSS: Perceba que ao final desse projeto, você terá um site 100% administrável, ou seja, você fará um CMS simples, mas lembre-se, foi você que fez =)

PSSS: Conte conosco SEMPRE!
