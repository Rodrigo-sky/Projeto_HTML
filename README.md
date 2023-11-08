# Trabalho Final HTML!

Olá, o grupo é composto por Rodrigo Teixeira e Guilherme Aguilar e vamos apresentar o nosso projeto de um site de uma clínica veterinária fictícia chamada Pet Life. 

O objetivo do site é oferecer serviços de consulta, exame e vacinação para animais domésticos, além de informações sobre saúde e bem-estar animal. O site foi desenvolvido usando a biblioteca Bootstrap versão 5, que facilita a criação de páginas responsivas e com design moderno. Também usamos jQuery e jQuery UI para adicionar interatividade e efeitos visuais ao site. Além disso, usamos media queries para ajustar o layout do site de acordo com o tamanho da tela do dispositivo. 

O banco de dados foi criado localmente usando o código SQL que vocês podem ver na tela. Esse código define a estrutura da tabela AgendamentoExame, que armazena os dados dos clientes que solicitam um exame para seus pets. Também inserimos alguns exemplos de registros na tabela, usando o comando INSERT. O site permite que os clientes façam o agendamento de exames online, preenchendo um formulário com seus dados e os dados do pet. 

> CREATE DATABASE petlife; 
> CREATE TABLE AgendamentoExame (
>     id INT AUTO_INCREMENT PRIMARY KEY,
>     nomeTutor VARCHAR(255) NOT NULL,
>     emailContato VARCHAR(255) NOT NULL,
>     dataConsulta DATE NOT NULL,
>     nomeExame VARCHAR(255) NOT NULL,
>     descricaoSintomas TEXT );


O site também tem outras páginas, como a página inicial, Quem Somos, Agendamento e Exames. Vamos mostrar agora como o site funciona na prática, navegando pelas páginas e demonstrando as funcionalidades.

[Vídeo com a demonstração do site](https://youtu.be/DWheZ0iQwv0)
