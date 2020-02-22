<?php
/*==================================================*/
/*            created by soft-solution.ru           */
/*==================================================*/

    function info_module_mod_search_simple(){

        //
        // Описание модуля
        //

        //Заголовок (на сайте)
        $_module['title']        = 'Простой модуль поиска';

        //Название (в админке)
        $_module['name']         = 'Простой модуль поиска';

        //описание
        $_module['description']  = 'Модуль Простой поиск';

        //ссылка (идентификатор)
        $_module['link']         = 'mod_search_simple';

        //позиция
        $_module['position']     = 'sidebar';

        //автор
        $_module['author']       = 'soft-solution.ru';

        //текущая версия
        $_module['version']      = '1.0';

        //
        // Настройки по-умолчанию
        //
        //$_module['config'] = array();

        return $_module;

    }

// ========================================================================== //

    function install_module_mod_search_simple(){

        return true;

    }

// ========================================================================== //

    function upgrade_module_mod_search_simple(){

        return true;

    }

// ========================================================================== //

?>