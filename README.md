# cid-gui

Esse projeto tem como base o CID. https://sourceforge.net/projects/c-i-d/ 

Agradecimentos pelo excelente trabalho ao Eduardo Moraes https://sourceforge.net/u/emoraes25/profile/

![image](https://user-images.githubusercontent.com/40308971/190188060-bb3a4c19-8fcf-487d-82a1-ea736b12c2ef.png)

# Requerimentos
#sudo adduser www-data sudo

#sudo nano /etc/sudoers

Alterar a linha %sudo... para %sudo ALL=(ALL) NOPASSWD: ALL

# Sistema
Aplicação foi testada no sistema operacional Debian 11, apache2, php7.4.

- Instale o apache2 e o php.

#sudo apt-get install apache2 && sudo apt-get install php

# Recomendações
Por segurança, não permita essa aplicação ser acessível por meio externo, deixei acessível apenas com localhost.
