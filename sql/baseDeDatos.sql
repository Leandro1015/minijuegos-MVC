CREATE TABLE minijuegos2(
  idMinijuego tinyint UNSIGNED NOT NULL auto_increment,
  nombre varchar(50) NOT NULL,
  descripcion varchar(255) NOT NULL,
  url_juego varchar(255) NOT NULL,
  
  CONSTRAINT pk_idMinijuego PRIMARY KEY (idMinijuego)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO minijuegos (idMinijuego, nombre, descripcion, url_juego)
VALUES ('Trash Invader', 'Esto es una descripción', 'https://url_juego1.com'),
('Lupa Eco-Logica', 'Esto es una descripción', 'http://localhost/proyecto-ABP/2324_2DAW_LupaEcoLogica/src/'),
('Juego3', 'Esto es una descripción', 'https://url_juego3.com'),
('Juego4', 'Esto es una descripción', 'https://url_juego4.com');