# Modelagem Física Brasa Divina

```sql
CREATE TABLE novosUsuarios(
    id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    cep VARCHAR(10) NOT NULL UNIQUE,
    complemento VARCHAR(45) NOT NULL UNIQUE,
    tipo ENUM('admin', 'comum') NOT NULL DEFAULT 'comum' 
);

```

```sql
CREATE TABLE pizzas(
    id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    imagem VARCHAR(45) NOT NULL,
    titulo VARCHAR(45) NOT NULL,
    preco FLOAT NOT NULL,
    resumo VARCHAR(200) NOT NULL
);
```

```sql
CREATE TABLE bebidas(
    id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    imagem VARCHAR(45) NOT NULL,
    titulo VARCHAR(45) NOT NULL,
    preco FLOAT NOT NULL,
    resumo VARCHAR(200) NOT NULL
);
```

```sql
CREATE TABLE doces(
    id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    imagem VARCHAR(45) NOT NULL,
    titulo VARCHAR(45) NOT NULL,
    preco FLOAT NOT NULL,
    resumo VARCHAR(200) NOT NULL
);
```

```sql
CREATE TABLE pizzasPersonalizadas(
    id MEDIUMINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    apelido VARCHAR(45) NOT NULL,
    ingredientes VARCHAR(45) NOT NULL
);
```