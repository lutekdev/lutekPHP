# CRIANDO SEU REPOSITÓRIO

### Comandos Usados:

-  `git config --global user.name`
   - Comando serve para mencionar para a ferramenta do `git` o nome do usuário que está tentando conectar ou fazer requests para os servidores,

- `git config --global user.email`
  - Comando básicamente o mesmo do `user.name` aqui ele está perguntando ao usuário qual o e-mail que vai ser usado para acessar os repositórios na qual está tentando criar ou baixar.

- `git init`
  - Comando usado para criar uma estrutura de configurações do git, para saber que foi criado corretamente só verificar se a pasta `.git` está presente na pasta.

- `git add (nome do arquivo.ex)`
  - Esse comando é como fosse uma sala de espera do SuS ou de um pronto socorro, ao usar esse comando você está encaminhando seu arquivo para uma sala de espera `Stage Area`.
  
  - `git add . || git add --all`
    - Esse comando é o mesmo do de cima, o que muda é que ele vai pegar todos os arquivos do seu repositório e enviar para a `Stage Area`. 
  
- `git commit -m "Uma Mensagem Arqui"`
  - Esse comando é usado para especificar o por que você está mexendo no arquivo do `Stage Area`, e como você chegasse a secretaria e falasse o por que está no estabelecimento você tem que esclarecer de forma rápida e leiga o que vai fazer.

- `git remote add origin (Link Da URL.git)`
  - Esse comando é usado para você especificar no projeto em que está fazendo onde ele será enviado, em qual repositorio do GitHub, basicamente é a secretaria tivesse falando olha você vai para tal 'consultorio' ou para tal 'medico'.