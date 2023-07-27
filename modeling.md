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
('pizza-mussarela.png', 'Mussarela', 20, 'Mussarela, molho marinara, borda crocante, orégano e cogumelos.'),
('pizza-pimentao.png', 'Pimentão', 20, 'Mussarela, pimentão, orégano, cebolas e molho bechamel.'),
('pizza-presunto.png', 'Presunto', 20, 'Mussarela, presunto, orégano, azeitonas e molho marinara.'),
('pizza-cebolas.png', 'Cebolas', 20, 'Mussarela, cebolas, escarola, cogumelos e molho barbecue.');