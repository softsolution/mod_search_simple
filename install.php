<?php
/*==================================================*/
/*            created by soft-solution.ru           */
/*==================================================*/

    function info_module_mod_search_simple(){

        //
        // �������� ������
        //

        //��������� (�� �����)
        $_module['title']        = '������� ������ ������';

        //�������� (� �������)
        $_module['name']         = '������� ������ ������';

        //��������
        $_module['description']  = '������ ������� �����';

        //������ (�������������)
        $_module['link']         = 'mod_search_simple';

        //�������
        $_module['position']     = 'sidebar';

        //�����
        $_module['author']       = 'soft-solution.ru';

        //������� ������
        $_module['version']      = '1.0';

        //
        // ��������� ��-���������
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