# cid-gui-web
Adicionando pasta compartilhada
-
<img src="https://i.imgur.com/PSOwMyd.gif">

- Criar pasta compartilhada com: Nome do compartilhamento. Exemplo: \\\EXEMPLO\NOME DO COMPARTILHAMENTO.
- Regra de permissão de leitura e gravação ou apenas leitura por usuário ou grupo.
- Restrições de arquivos.

Atualizando pasta compartilhada
-
<img src="https://i.imgur.com/OwHNXaG.gif">

- Adicionar ou remover regra de permissão de leitura e gravação ou apenas leitura por usuário ou grupo.
- Adicionar ou remover restrições de arquivos.


# Projeto original

Esse projeto tem como base o CID. https://sourceforge.net/projects/c-i-d/ 

Agradecimentos pelo excelente trabalho ao Eduardo Moraes https://sourceforge.net/u/emoraes25/profile/

# Requerimentos

Aplicação foi testada no sistema operacional Debian 11, apache2, php7.4.

>#sudo apt-get install apache2 && sudo apt-get install php

>#sudo adduser www-data sudo

>#sudo nano /etc/sudoers

Alterar a linha %sudo... para %sudo ALL=(ALL) NOPASSWD: ALL

# Recomendações
Por segurança, não permita essa aplicação ser acessível por meio externo, deixe acessível apenas com localhost.
