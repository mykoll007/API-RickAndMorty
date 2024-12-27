# API de Personagens de Rick and Morty

![Rick and Morty](https://i.imgur.com/OgIFtCO.jpg)

### Objetivo:
Fornecer acesso a dados sobre os personagens da série "Rick and Morty". Para fins de demonstração, escolhi 17 personagens e os armazenei em um arquivo JSON, em vez de buscar todos os dados diretamente da API.

---

### Comunicação:

- **Tipo**: RESTful
- **Formato**: JSON

**Exemplo de Requisição**:  
`GET https://rickandmortyapi.com/api/character`

---

### Endpoints Principais:

#### 1. Listar Personagens
- **URL**: `https://rickandmortyapi.com/api/character`
- **Descrição**: Retorna todos os personagens (com paginação).

#### 2. Obter Personagem por ID
- **URL**: `https://rickandmortyapi.com/api/character/{id}`
- **Descrição**: Retorna os detalhes de um personagem específico.

---

### API Consumida

A API utilizada para fornecer as informações dos personagens é a **[Rick and Morty API](https://rickandmortyapi.com/)**. Ela permite acessar dados sobre personagens, episódios, locais e mais, com várias opções de filtragem e busca.
