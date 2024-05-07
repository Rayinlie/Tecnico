<?php
    require_once 'repositorio_animais_class.php';
    $registro_animais = new RepositorioAnimaisMySQL();

                $id_animais = 0;
                $animal = 1;
                $id_especie = 1;
                $id_familia = 1;
                $id_classe  = 1;
                $id_filo    = 1;
                $id_ordem   = 1;
                $id_genero  = 1;
                $id_subspecie = 1;
                $animaisRecebido = new Animais($id_animais, $animal, $id_especie, $id_familia, $id_classe, $id_filo, $id_ordem, $id_genero, $id_subespecie);
                
                $registro = $registro_animais->cadastraranimais($animaisRecebido);
                //header("location: inclui_animal.php");

            
    ?>