<?php
/*constantes em nosso sistema serão informações que não irão variar,
por exemplo: ip do servidor, credenciais do banco de dados, idioma do site.
*/
define("SERVIDOR","127.0.0.1");
define("DATABASE", ['127.0.0.1',
'root',
'senha123']);
printf(SERVIDOR);
print_r(DATABASE);
?>
