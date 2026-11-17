# Cris Nails 

Vitrine digital desenvolvida para o estúdio **Cris Nails**, criada para apresentar o portfólio de trabalhos realizados, catálogo de serviços de manicure, tabela de valores e canais de contato para clientes.

## Acesso ao Sistema Online
- **Site em Produção:** http://crisnails.page.gd

---

## Informações Acadêmicas
- **Instituição:** Fatec Americana – Ministro Ralph Biasi
- **Curso:** Tecnologia em Análise e Desenvolvimento de Sistemas (ADS)
- **Disciplina:** Projeto Integrador II
- **Professor:** Clerivaldo José Roccia

---

## Integrantes do Grupo
- Bianca dos Reis Tavares 
- Daniela Tupy 
- Helena Santarosa 
- Uander Bortolozzo 
- Yasmin Botelho 

---

## Funcionalidades Principais
- **Apresentação:** sobre a profissional, diferenciais e materiais.
- **Tabela de Procedimentos:** Exibição dos valores de serviços.
- **Vitrine Dinâmica:** Carregamento de categorias cadastradas no banco de dados, com carrossel horizontal responsivo (`scroll-snap`) em dispositivos móveis.
- **Portfólio Filtrável (`portfolio.php`):** Galeria dinâmica filtrada por categoria.
- **Políticas do Estúdio:** Regras de agendamento e políticas.
- **Agendamento e Localização:** Redirecionamento direto para o WhatsApp com mensagem pré-preenchida e mapa incorporado via Google Maps.

---

## Tecnologias Utilizadas
- **Front-end:** HTML5, CSS3 
- **Back-end:** PHP 8 
- **Banco de Dados:** MySQL
- **Integrações e Recursos Externos:** WhatsApp (`wa.me`), Google Maps (`iframe` e rotas), Google Fonts e Font Awesome
- **Ambiente, Ferramentas e Hospedagem:** XAMPP (Apache + MySQL), Visual Studio Code, Figma, Draw.io, Git, GitHub e InfinityFree

---

## Estrutura de Pastas

```text
cris-nails/
├── assets/
│   ├── img/                                  # Fotos do estúdio e dos trabalhos realizados
│   └── styles.css                            # Folha de estilos principal (layout responsivo e carrossel mobile)
├── config/
│   └── db.php                                # Conexão segura com o banco de dados MySQL
├── Database/
│   └── Cris-nails.sql                        # Script SQL de criação do banco e das tabelas (categorias e fotos)
├── Documentação/
│   └── Documentação Projeto Integrador 2.pdf # Documento técnico completo do Projeto Integrador
├── Protótipos/
│   ├── Diagrama de caso de uso.jpeg          # Diagrama UML de casos de uso do sistema
│   ├── Diagrama de classe.jpeg               # Diagrama de classes da aplicação
│   ├── Fluxograma.drawio                     # Fluxograma de navegação
│   ├── Mapa do site.drawio                   # Arquitetura das seções do site
│   └── Protótipo.png                         # Protótipo visual do sistema
├── index.php                                 # Página principal
├── portfolio.php                             # Galeria dinâmica filtrada por categoria
└── README.md                                 # Apresentação do projeto, tecnologias e instruções de execução
```

---

## Instruções para Instalação e Execução

1. **Pré-requisitos:** Instale e inicie os módulos **Apache** e **MySQL** no **XAMPP** (ou ambiente local equivalente com PHP 8+).
2. **Download do projeto:** Baixe ou clone este repositório e coloque a pasta `cris-nails` dentro do diretório `htdocs` do XAMPP (ex.: `C:\xampp\htdocs\cris-nails`).
3. **Configuração do Banco de Dados:**
   - Acesse `http://localhost/phpmyadmin`.
   - Vá na aba **Importar** (ou **SQL**) e execute o script localizado em `Database/Cris-nails.sql` para criar o banco `cris_nails`, as tabelas (`categorias` e `fotos`) e inserir os registros iniciais.
4. **Configuração da Conexão (`db.php`):**
   - Verifique se os dados locais estão configurados no arquivo `db.php` (`host = '127.0.0.1'`, `dbname = 'cris_nails'`, `user = 'root'`, `pass = ''`).
5. **Execução:**
   - Abra o navegador e acesse `http://localhost/cris-nails/index.php`.
