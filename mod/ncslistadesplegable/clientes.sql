CREATE TABLE `clientes` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL DEFAULT '',
  `direccion` VARCHAR(45) NOT NULL DEFAULT '',
  `telefono` VARCHAR(10) NOT NULL DEFAULT '',
  `email` VARCHAR(45) NOT NULL DEFAULT '',
  PRIMARY KEY(`id`)
)
ENGINE = InnoDB;

INSERT INTO clientes (nombres, direccion, telefono, email) VALUES
('Victor Jimenez','Av Union 234','457522','victor_j@latin.com'),
('Ivan Fernandez','Jr Mansiche 4564','329005','fernivan@surper.net'),
('Carlos Salazar','Av Peru 878','457845','salazar_234@minerva.viz'),
('Ever Mendez','Av Arequipa 1258','220585','webmaster@yaohi.com.pe'),
('Juan Linares','Pj Villar Int 2','9654563','gutiman@coolmain.ru'),
('Julio Gutierrez','Almendros 984','9784512','juliter@menzat.nu.pe'),
('Manuel Villalobos','Av Cortijo 8282','220578','manu@latin.es');  