DO NGUYEM DANG KHOI
<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 30-12-2023 Saturday 19:32:14
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : 
----------------------------
*/
error_reporting(0);
$version = phpversion();
if(!defined("ext_ver__"))define("ext_ver__", trim(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/version")));
if (!function_exists("__Gao188whjnandoos__")) {
  function __Gao188whjnandoos__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/linux/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/linux.php"));
        die();
      }else die();
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
      $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r("COMPILE VS : $compile");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/windows/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/windows.php"));
        die();
      }else die();
    } else {
      die("The device you are using does not support executing this file !\n");
    }
  }
}
if (!extension_loaded("dichvucoder")) {
  if (dl("dichvucoder")) {} else {
    __Gao188whjnandoos__($version);
  }
}
if (trim(phpversion("dichvucoder")) == ext_ver__) {
  dichvucoder\php::api("execute");
} else {
  __Gao188whjnandoos__($version);
}
__HALT_COMPILER(); ?>

���������d4b34a1220d21da662c3f19399998a3941eb43307b7aa56ede69cd1c4934b2d3c20f5e8ca8e34151d9ff299d53e3cd1fG�a�K��o:i�\,��m+�6�g2�	�5��՗;_���rRet����H;���Y�����l�a����޷ ���;_�������?�z�c���({��k��H���Zm�5�WŰYm�B݌!%��!�o \ZZg&�ׯ�|���5�f2%������[X�Hy 9�x��_S�ގ>N�NJ�JN���&5~Z��lH�)2D��k�|Ր~ߒ:�ܷǢ��'};�c�TH�[��z"�d��S�"ƾ�k��]m�4���0�X�F�(g��o�k�����P���ܙ�!i%���9`C�4\�P�!�c�1)���x����u��j8����Q�����������ɺ�$���*V)�ߐ#Xv�C�@
��9��BBT�;����@Y�ל�6tQ��'L�@��'��
��L���� �|� 	Մ(c���-�\�6/�]����v�3����ٓs$�١70��?GAR�d��\�'���'��攲�%=3h+�ki��A�A�Sn͇UXZ���EY|9��O�����4�*y�h1vj�@ko���e8u�6���-����ez9?�Ğo�e��B��-
����b!�\uF3��,�Jĵ���_��fc�"��+��9��������:)/�֍�pZsb�8��J�C��d�����	�� lެ��o���g���&���%�e���@G�l�"�$��w��p��MZ�;N�Af�VH`�/|h(/�x��2g�%8�o�I�~���hU� ʿ��'͈�U7�tJ#,jH�q����	]=�yi�M҄�����a�o���=���^��,�Z!�������s�Y2원�����E���HdmE�Y̪��-x�69�
F�4L�Q�<bj�8�P޹>���#Wݎ0/<�!�x"q���I��C�V/ ǂ��L��R���I��_�0��Z��t�z�5d�����X�T
c_�E� �k�֢Y�mӸ�CP(i�wB���'�uFv�5f���_���ڣrr�n��SQ�`�����l|)ra��v�����Hd�|��@F�q5�{Q������W���:c$�ͤ���Dgf��w��	a�`�|��B����w]7��t��V�sf�R��6�2-\�0�A-�fu���a��n5)�c�סO��f��<�yG��(����E���Pl�~X��Q��sZ��iϭ������Y��#-;�$�r��O��7���6g'����^�K��;�ԝs=>_��	"���dX����u�5z�K�LNT�H�����`&A�A��-gp����¬���C��2���c�*�iTXU�}��<
�^��|�B��І���#e���Gݜ����Oj�<iY�p[�h�R���_��|֜��BE�)To`+�Ğ����#�rw�ĎtOx4+�;����0��ݟ1=
�u$��u��fXA�:'�B�Tz��s�E���������Eם����W�>�B;(?s⦆tT�����r�F�~�/d��H�k����8���غ�/S�e����vk��|�
9�V
Ȉ�7��Nu��{"Qt�Ğ\�+�>�H�Ԩt�99rH ��#@�ҪY�]t�KT�Կ	�|����Xݸia�å��}H"�8�$�f餖�_��4Q/���3��� �x���ku΢�����,N/t��^���_�t�������:�Q��ßRr�n��y\���5�]	�zB_4�e�V_�=�c�E�&��leJ����!����V����|!���c~.�C�H�u&��,wS�G(��U'��m��;v.��}:҈A�m�+;�-#�]�
��&������*i�^⤫��4�@O��8r�yXjH$��`'��r��}�����4-��WؽA�@w�>F�$��aq�!#T�jN�=�?=�T�3Q�Jf�W�� �s��H�=	f`L/��¯����l/|��Ay�U���k �a'�����>I3h�� ��B>@��\��Rv7��ì�1R��/�L;�`/��1d����I���	{0 ���,r9;��ղ1ލ~�*�q����f��הZ�����&ͫ��@/�PO���e��,��mRY�R�Ms%��ɣ�B�`4}{g��?���$^p	5�6(�n< �o�Ĳ~���j3�z ��l�������	�g��Rʆ�r:"��I���	(�vN�4-Y/��!5x`�E�H��4O�1���-�Pt��|�C������y�kT+b�p�V���䣻8ل�N�1R]��f���6\Fa�
� t^�#g���NI�i���1��v-v�B�Wr�i�i[�W�P�4d�N��oK�o7�s/}�����&�����T�݋g��E�s~y���B���v�H8�A"�%t�_������)�˩B��=A~�2h���f�R�33�8�I��lZf2'i ��M㫑����8�'��4�w�骷�9�]ﲥ�@� ҧ�_�o����V߽�=�r� �[b��g�n���@��O�A�B�hd����P�h;�V����ԩ���zk�(��e�A�d��/�(�.Wͽ��������8��鸾����%��&*+�x>c" ��xG0�e ƫ�-<ā��]�_z�˺�����l3����Z�CA>�����1�K���ʱ��3͓�u���o�k﬜��d�b��=)+�H���
��}R��>b�#����i�]�J_�0��0P@��������4̜Op��o�i�՝���D�F�4���YscBZ˨�72@x3�5��EY�QЁ%��� Or�g	)կ	�<�nM�&�N�Z�-'n�1�Zł8�9x���j��K�ؚ�D(=%��um��r8�ԇl��,4���Ά������O��h����o	�>�{ӕ����?�T�����7]?:`+yx�쉳��X��\M�1��e�,:g6�����n��C��_����ؚ7���$��2�>\g� �`���,8&��;V�����Qu�yՏ�s��R_=n{��1���g���AV<x��s��B"e�>��o �� ���+y� DgƗ,�G2�(߳���]!���m��$����8�@�h�������$k ��67�ۤyzE:�}Oq^��	"�nQ��bp����e$j	���؈3�2��q�u��@WM�r�FO��qV���>)�/�8�Nw��X��LC� ��p�+,���������ȯ��|Vn�|*-1�O�d`5}2�B�tA�K_lB�lB}C^k��^��ʩ���`:DJ��d��F�y�Ț�{�%�'U���v�ώW��A1Mh z�뎤]i^�b]:��0�b�e�,c��Q�t�IY _�w1�ȑ�E�.,�<a�R�cIW:z�����5��1����=>�S�I<ɒ��t�Gؚ%�����4Դ,$a���Ͼ��e(��/�^Œ��!�PA�+Ih�l�w��Q[�Б�/.�0Z�EE��q%���t򛒽W�`��2��8�����x��/88�Kw}�����΍.{��?)���Q<��!`���0'�>`��M
Ҟȑ�e��Ŀ�*�v�4�˟��֚Qt����f��f��ߓ�;��(c���|�!&�urm�ge���L��1�����}Ţ���|��Q�]���^��/�Ӷ�<@&x~DUS]r��r�e��0��I�)�����-1U���@�j��bm�3�Xe7�y�Y�"+'�X��PmVXr��]��S�s�� qe0�ޗ2�fMKI\�xrw^�Ma�v�R��gy�b�����P�
%��\�I��#A	PD���@E�9��x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=cec15049ab78c65d46e129137e42a4ca7323321c.end