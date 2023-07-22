# Modelagem Física Brasa Divina

```sql
CREATE TABLE novosUsuarios(
    id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    cep VARCHAR(10) NOT NULL UNIQUE,
    complemento VARCHAR(45) NOT NULL UNIQUE,
    telefone VARCHAR(18) NOT NULL,
    tipo ENUM('admin','comum') NOT NULL
);
```

```sql
CREATE TABLE usuarios(
    id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
```

```sql
CREATE TABLE alimentos(
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

INSERT INTO `alimentos` (`imagem`, `titulo`, `preco`, `resumo`) VALUES
('pizza-calabresa.png', 'Calabresa', 20, 'Mussarela, calabresa trufada, cebola, molho marinara e orégano.'),
('pizza-baiana.png', 'Baiana', 20, 'Mussarela, tomates, milho, pimenta, pimentão e molho marinara.'),
('pizza-calabacon.png', 'Calabacon', 20, 'Mussarela, tomates, milho, pimenta, pimentão e molho marinara.'),
('pizza-mussarela.png', 'Mussarela',  20, 'Mussarela, orégano, presunto, pimenta, milho e molho bechamel.'),
('pizza-pimentao.png', 'Pimentão', 20, 'Mussarela, pimentão, orégano, pimenta, milho e molho cheddar.'),
('pizza-presunto.png', 'Presunto', 20, 'Mussarela, presunto, orégano, brócolis, alho e molho cheddar.');