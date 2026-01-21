# ⟡ CEP Searcher: Strategy & Factory Pattern ִֶָ. .. ִֶָ🪽་༘࿐

Projeto de estudo para demonstrar os padrões de projeto **Strategy** e **Simple Factory**, implementados de forma equivalente em **PHP 8.1+** e **Python 3**.

O sistema realiza buscas de CEP utilizando diferentes provedores (**ViaCEP** e **BrasilAPI**), permitindo alternar a estratégia de busca sem modificar a lógica principal.

---

## ⟡ Tecnologias e Conceitos

- **Linguagens:** PHP e Python  
- **Padrões de Projeto:**
  - **Strategy:** Troca dinâmica do provedor de busca de CEP.
  - **Simple Factory:** Centraliza a criação da estratégia escolhida.

---

## ⟡ Strategy Pattern (foco do projeto)

O **Strategy Pattern** permite encapsular diferentes formas de executar a mesma ação.

Neste projeto:
- O objetivo é sempre **buscar um CEP**
- O que muda é **qual API faz a busca**

Cada provedor implementa a mesma interface, podendo ser trocado em tempo de execução.  
O contexto (`CepSearcher`) não conhece detalhes das APIs, apenas executa a estratégia atual.

---

## ⟡ Factory + Strategy

A **Factory** é usada para decidir **qual estratégia instanciar**, evitando `if/else` espalhados pelo código principal.

Resultado:
- Código mais limpo
- Fácil adicionar novos provedores
- Menor acoplamento

---

## ⟡ Estrutura do Projeto

```bash

design-pattern-strategy/
├── php/
│   ├── src/
│   │   ├── Contracts/
│   │   ├── Factories/
│   │   └── Services/
│   └── main.php
│
├── python/
│   ├── Contracts/
│   ├── Factories/
│   ├── Services/
│   └── main.py
│
└── .gitignore
```

## ⟡ Como Executar
**⟡ Versão PHP**
- Acesse a pasta: cd php

- Instale as dependências (necessário para gerar o Autoload):

```bash
composer install
```

- Execute:

```bash
php main.php
```

**⟡ Versão Python**
- Acesse a pasta: cd python

- Certifique-se de ter a biblioteca requests instalada:

```bash
pip install requests
```

- Execute:

```bash
python3 main.py
```

## ⟡ Referências de Estudo
* [Vídeo: Strategy Pattern na Prática (YouTube)](https://www.youtube.com/watch?v=DzlXwgsc_AU)
* [Design Patterns: Strategy (Refactoring Guru)](https://refactoring.guru/design-patterns/strategy)
