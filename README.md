# Api

A prova possui 9 rotas, tendo como prefixo 'prova/'. A api roda na porta 8000. A rota fica por exemplo: 'localhost:8000/api/prova/signos'
- Retorna todos os signos - GET 'signos'
- Retorna todos os tipos sanguíneos - GET 'tipo-sanguineos'
- Retorna todas as instituições - GET 'instituicoes'
- Retorna todas as competências - GET 'competencias'
- Retorna todos os perfis cadastrados - GET 'perfis'
- Retorna um perfil, buscando pelo ID - GET 'perfis/{id}'
- Cria um perfil com o body abaixo - POST 'perfis'
- Atualiza um perfil com as informações novas, com o ID - PUT 'perfis/{id}'
- Deleta um perfil com ID - DELETE 'perfis/{id}'




# Body do POST de criar perfil

{
	"tipos_sanguineo_id": 4,
	"signo_id": 2,
	"cpf": "168.396.435-73",
	"nome": "Martin Vitor Ruan Pires",
	"data_nascimento": "1999-01-11",
	"email": "martinvitorpires@heinrich.com.br",
	"telefone": "(79) 98409-3762",
	"experiencia": [
		{
			"empresa": "CBM",
			"inicio": "2020-05-20",
			"fim":"",
			"atual_trabalho": true,
			"cargo": "junior"
		}
	],
	"formacao": [
		{
			"instituicao_id": 4,
			"nome": "Ciência Da Computação"
		}
	],
	"resumo": "Quero trabalhar."
}

Os campos de experiencia, experiencia.fim, como no body acima, e formacao podem estar vazios. Ex.: "experiencia": [] Ex.2: "formacao": []

## Body do PUT de perfil

O body abaixo é só um exemplo e é possível mudar os outros campos:
{
	"resumo": "Maria Joaquina"
}

## Docker e MySQL

Para executar o banco MySQL e rodar o projeto, primeiro mude para a pasta do projeto, 'cd prova/', após isso, digite 'make deploy_prova', para rodar os containers do back e do banco com o docker. 

## Migrations e Seeders

Após o build dos containers, é necessário entrar no container com 'docker exec -it back-prova bash'. Após isso, executar 'php artisan migrate:fresh --seed', para gerar um banco novo e povoar o banco.

## PEST

Para rodar todos os testes feito com o PEST, é necessário executar o comando 'php artisan test'. É possível também executar os testes em paralelo com o comando, 'php artisan test --parallel'.

