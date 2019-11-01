<?php
include 'conexao.php';

/*$tabela1 = "drop table cadastroDeUsuario";

$tabela2 = "drop table imagemPlantas";

$tabela3 = "drop table imagemCarpoteca";

$tabela4 = "drop table carpoteca";

$tabela5 = "drop table plantas";

$tabela6 = "drop table tipoDeUsuario";

$tabela7 = "drop table likeArtigo";*/

$tabela1 = "CREATE TABLE IF NOT EXISTS `dbPlantasDoCerrado`.`cadastroDeUsuario` (
  `id_cadastro` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(20) NOT NULL,
  `nome` VARCHAR(20) NOT NULL,
  `senha` VARCHAR(15) NOT NULL,
  `tipoDeUsuario` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_cadastro`))";

$tabela2 = "CREATE TABLE IF NOT EXISTS `dbPlantasDoCerrado`.`imagemCarpoteca` (
  `id_imagemCarpoteca` INT NOT NULL AUTO_INCREMENT,
  `imgCarpoteca1` MEDIUMBLOB NULL,
  `imgCarpoteca2` MEDIUMBLOB NULL,
  `imgCarpoteca3` MEDIUMBLOB NULL,
  `imgCarpoteca4` MEDIUMBLOB NULL,
  PRIMARY KEY (`id_imagemCarpoteca`))";

$tabela3 = "CREATE TABLE IF NOT EXISTS `dbPlantasDoCerrado`.`carpoteca` (
  `id_carpoteca` INT NOT NULL AUTO_INCREMENT,
  `nomeCientificoCarpoteca` VARCHAR(35) NOT NULL,
  `nomePopularCarpoteca` VARCHAR(35) NOT NULL,
  `descricao` TEXT(3000) NOT NULL,
  `id_imagemCapoteca` INT NULL,
  `idCadastro` INT NULL,
  PRIMARY KEY (`id_carpoteca`),
  CONSTRAINT `id_ImagemCapoteca`
    FOREIGN KEY (`id_imagemCapoteca`)
    REFERENCES `dbPlantasDoCerrado`.`imagemCarpoteca` (`id_imagemCarpoteca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idCadastro`
    FOREIGN KEY (`idCadastro`)
    REFERENCES `dbPlantasDoCerrado`.`cadastroDeUsuario` (`id_cadastro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)";

$tabela4 = "CREATE TABLE IF NOT EXISTS `dbPlantasDoCerrado`.`imagemPlantas` (
  `id_imagemPlantas` INT NOT NULL AUTO_INCREMENT,
  `imgPlanta1` MEDIUMBLOB NULL,
  `imgPlanta2` MEDIUMBLOB NULL,
  `imgPlanta3` MEDIUMBLOB NULL,
  `imgPlanta4` MEDIUMBLOB NULL,
  PRIMARY KEY (`id_imagemPlantas`))";

$tabela5 = "CREATE TABLE IF NOT EXISTS `dbPlantasDoCerrado`.`plantas` (
  `id_plantas` INT NOT NULL AUTO_INCREMENT,
  `nomeCientifico` VARCHAR(35) NOT NULL,
  `nomePopular` VARCHAR(35) NOT NULL,
  `divisao` VARCHAR(35) NOT NULL,
  `classe` VARCHAR(35) NOT NULL,
  `ordem` VARCHAR(35) NOT NULL,
  `familia` VARCHAR(35) NOT NULL,
  `descricao` TEXT(3000) NOT NULL,
  `id_cadastro` INT NULL,
  `id_carpoteca` INT NULL,
  `id_imagemPlantas` INT NULL,
  PRIMARY KEY (`id_plantas`),
  CONSTRAINT `id_cadastro`
    FOREIGN KEY (`id_cadastro`)
    REFERENCES `dbPlantasDoCerrado`.`cadastroDeUsuario` (`id_cadastro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_carpoteca`
    FOREIGN KEY (`id_carpoteca`)
    REFERENCES `dbPlantasDoCerrado`.`carpoteca` (`id_carpoteca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_imagemPlanta`
    FOREIGN KEY (`id_imagemPlantas`)
    REFERENCES `dbPlantasDoCerrado`.`imagemPlantas` (`id_imagemPlantas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)";

/*$tabela1 = "CREATE TABLE IF NOT EXISTS cadastroDeUsuario(
id_cadastro int(55) primary key auto_increment not null,
login varchar(20) not null,
nome varchar(20) not null,
senha varchar(15) not null
)";

$tabela2 = "CREATE TABLE IF NOT EXISTS imagemPlantas(
    id int(55) primary key auto_increment not null,
    img1 longblob,
    img2 longblob,
    img3 longblob,
    img4 longblob
)";

$tabela3 = "CREATE TABLE IF NOT EXISTS imagemCarpoteca(
    id int(55) primary key auto_increment not null,
    img1 longblob,
    img2 longblob,
    img3 longblob,
    img4 longblob
)";

$tabela4 = "CREATE TABLE IF NOT EXISTS carpoteca(
id int(55) primary key auto_increment not null,
nomeCientificoCarpoteca varchar(35) not null,
nomePopularCarpoteca varchar(35) not null,
descricao text(3000) not null,
id_imgCarpoteca int(55),
id_cadastro int(55) not null,
foreign key (id_imgCarpoteca) references imagemCarpoteca(id),
foreign key (id_cadastro) references cadastroDeUsuario(id_cadastro)
)";

$tabela5 = "CREATE TABLE IF NOT EXISTS plantas(
id int(55) primary key auto_increment not null,
nomeCientifico varchar(35) not null,
nomePopular varchar(35) not null,
divisao varchar(35) not null,
classe varchar(35) not null,
ordem varchar(35) not null,
familia varchar(35) not null,
descricao text(3000) not null,
id_cadastro int(55) not null,
id_likeArtigo int(55),
id_imgPlanta int(55),
id_carpoteca int(55),
foreign key (id_likeArtigo) references likeArtigo(id),
foreign key (id_imgPlanta) references imagemPlantas(id),
foreign key (id_carpoteca) references carpoteca(id),
foreign key (id_cadastro) references cadastroDeUsuario(id_cadastro)
)";

$tabela6 = "CREATE TABLE IF NOT EXISTS tipoDeUsuario(
id int(55) primary key auto_increment not null,
usuario varchar(15) not null,
id_cadastro int(55),
constraint foreign key (id_cadastro) references cadastroDeUsuario(id_cadastro)
)";

$tabela7 = "CREATE TABLE IF NOT EXISTS likeArtigo(
id int(55) primary key auto_increment,
gostei boolean,
id_cadastro int(55),
foreign key (id_cadastro) references cadastroDeUsuario(id_cadastro)
)";*/



if($conecta->query($tabela1)===TRUE){
    echo "Tabela cadastro criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela cadastro: ".$conecta->error."<br>";
}

if($conecta->query($tabela2)===TRUE){
    echo "Tabela imagens da Carpoteca criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela imagens da Carpoteca: ".$conecta->error."<br>";
}

if($conecta->query($tabela3)===TRUE){
    echo "Tabela carpoteca criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela carpoteca: ".$conecta->error."<br>";
}

if($conecta->query($tabela4)===TRUE){
    echo "Tabela imagens das plantas criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela imagens das plantas: ".$conecta->error."<br>";
}

if($conecta->query($tabela5)===TRUE){
    echo "Tabela plantas criada com sucesso<br>";
}else{
    echo "Erro na criação da tabela plantas: ".$conecta->error."<br>";
}


$conecta->close();


