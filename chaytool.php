DONATE ME 0337660475
<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 03-12-2023 Sunday 10:34:54
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : 
----------------------------
*/
error_reporting(E_ERROR);
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

���������9a56252b6cf4601245a630989fdbfcf5ac4b672c976346e4fd4e7a874b9b0f332ea88ee1eecf3e57c7fb646229854135���?���6w?]��W+�W
h.�x!L��K�\
�m~3�2HA9��p��DQ.æ�2b�����Yk��=�����%�W�� ���{�{�)�I�J������I����Yb������v���w51�õZj<��@�x+<$�y�j�㇭nxc_�^S��(>E�-><0%J|ؐe}�P������'W����@8j�.z"8����SUZ���uyќ��D^�k����P���2�v�}�r�[(�BSG��#�����������W�}[|1�Iț��/�5�����+��4��Z�);��"#�I��1P�1�/:��Դ�M�t(#�}Q�*2�3���M7��4d�G��K�\KUBWj;��X;5�Q~��b��\XQ>T�;X���ꂰX���Y���d[\��Ɔ�F`J�ڞ�~t(s�����������	L�N�\鼫�6�[^�u�ZV^�أb�K��oM	� ǨH����V.��_�4	 �R,�*^o�a����X�è�
���%'�E!�D:h���evE��ɟz=���\A�j���1�X��[������K�\)�-��
��@m�G�A���F�1i�2n����,���-�R�����×]V;���>��@�X������H �Ɲ����~��8"-d��K����
����� UAm]?�@�jV�,�R��E��ZV�]�#���Q����y],�"��d����yq�+���Ϥ�`���a5H<}x�^����y�n;�1�m�'�%( �9��?��iÂi�#B��" W$����@�ԓ��$c?�SNA��*��d4;�s>�^���=ڑ��c�����k��=*�W�rd������!�Vbw����S~3�m�i��myT��.JAE3 ���r(�pm2�ͬ����ܣqչ_��r�r/�M��
m�����l�D�˩�6�
�>��z;�Ó���`A�����W�9��TK�N����0���Y]j����p�l����j�[�ʙ����C��ҙ k�MX�V0���N��?7�b냳�O�G	^�~}t�����Ϲ�����ܐ�r�qU�]�Ek���~>nશ���d��W�tC.̿Wj�����\C��S�(�Vo�^�[xJ���[4�|�MW���.�-���N��M�٨r��x,�4I���\*��GT1j����=:��X6(Uʦ������>	��,dq�֘��&��v�/��M�7�,S�
I��?�����/�R�#.�H;E_oR1��}>�����+�~uq��j�%�ڑ����ρ����Y_`��;M�"Y�[g�qQ�M�խ)&c�'N�/'�ǟ�L��� �EQ}�����ȆF��7�?�Z*]^�C�| FB����R�3�~:� ��y�Gw����/��P�E�9��x��ؙ���ҷ��W��p����$Mj��j�����h�q��qԥh"۟�!�o��J��ҭ�Ԃ*-�' ��b*r;*?t�-_cAg����o���E��/�'I�õ�E��H�
�x���`�W������t���ؗ��7;�����[ߨ���	�<��$��t5㐯��4�=�:M3f�kdf����D��	V���x	1�"���⌬S�����n�y;�I��ʓhP� Y[Y:ֳE��@Y�ϽS{�3��,�Ǹ��%I��/0H5�|��?>� �a0��BCn
9���eg*�%s������֊�(�v�8�u��=f-�Pz���)WXP��)[6h��[��|�{o��S�3z�	)0�ʡ
.Z�����$*@�z�Sq��lkӁ�h��?��
�&��O�s�>L��z�0(X�&{7%"�u�z��찶[{5j?Ln82\\�P�E�
�� <]�0ζ����c�`7�L�|>��(���p�����Y\j����/W0q��B5����&?��>Ic:��Ń���1��Ջ���E���SO��'�V����#���(�T��-d�����G��0�����ƿU!h#�j��9A2��w趔�A缘[��{�#	1r0�؉�,ڑ�:9�� �gZ� ��O� J;K��g���5rnG1q��{V�j!���]����x�S��bP~�u�X:Ħԫ2�u�s�H������k�Gkl��Ƞ��Gڱˡ��ih���WVG<?`_�f,&�@��3��Qd�I�q�Փ&�U��sO�8eVM� sCx�P���̳�����Ұ) �)����q���'𞃗�����ɓ���9s��9\�A�ca��0ߟ��drz���K��D���q���Ѝ]o �#{�ڋ�������|�Ts>��0��&��H�2���E���P͹�֋q��P��jI0�zׁ�[v�qF(��-�T���Zsp	�`�����V���m�@�g��u'F}
;g��G���i�܂_��u6�Qd�R}��#�W�5������!/��%��A�f-����=ΒFr���;�dn���ˤw���n���-�l���_��d~����u�є���`	��=���n�U�Y�O3��Pb�p>�7&P��@�.<����#��Ŷß�xm�����������-ׅ����b��˛9�~���Os�C���W	p��2�6�RW�Ѭ�(	7�6��V�4����:�qM�%�~ޕ��3�.����E��Q~�� n� �IK��c��� �¶�""I-�E~� ~�{�L>�]�V&R#RY�;�N�J_'�#�i�!�s5�Z��� kҡ{^�Y������/��b
:�߭�y�������+�:{x:2ͥ��ݎ��iFy�.�ğ7���=Y6��WWjɦ���e#16F�.G`�H`=9>�MqK�2�|�C������O^(E�ԙ���B!ԝ�d|ˎ��dmP��9���i���P����e]���� ��Y����mT2�kiȸ��kN���mƈ���J0����<��Ne^m��51���rk�l�:T �B��1��J4�``�����0Z�����jJ9����jhL'x8�Y�~Ƒ�D���e�-�H/�7W��Si��1Q Fh�=��M��y]��!c���c.�]����2[2�`����vv�c\�	���=}Urۤѵ�W���G%�^��e�4�����KT��2T�&�ߓz��KD��pKϥQ���_�b������h���IE��:Bׅ��s����R9%���u���o�Bɉxt���k�U�pxF#�K�Yҙ��L@Z�/�0�(�����4�{����0Y3X�v��OV૷�� ���E�5p��X�J���iƠ��#�$%�);@�D���T����%�P�Oht�d1X.P���Y��5������K�ʚ��7�3h�����= 2�=��j4	��o���������W���S3�A�Mm( �'p
0�i��Ê��*�+ h7y����x'�I�*dM�)���)�Z��R�g�����j�z�g&���YǺ�&��!޼�>fS� ��c��x�ւ�/b�D��"��>h!<qFq`�v�2�O�%tǝ1��z?J�I_�궴�T����ZW&=g �@�9-�j��cZ�wT���s���<��`;|�9�0�c�УkR^y�aw�v����7���%���p�-I�N��]�P�N�W��"Cg�B�.�w��=ъ��4�+�C��
КS�{���X%f�_,�$t���9��9��6�ׂ9�8q��b�/�$�#��:nm>�c�kdbӲ�ε�Y�����7����x����X�J���!��%
zr;f��<N�^� ÄB�۬
/���
v�hsnR�[TX��}{�-3���C������0���/p�l#�ד��\	-Ѷ�(1B~���$yم�u#*�L3sGmA �F���h��§��٤����b��e��y��j�GG��`�Ǌ�j]�p'�?<҂6���0���&\"�>��B��?g�?�v4�i7�L禟��������GӺ7y���E��Z������;���+�_�f�ŵvnn�@gg�fDڬ$"}�y�؅E��Zj�$.�� C��3���=�n9�+�0x���\��0�������A�	�M��$:J�����u�ԇ�MÇǝ*��/ɿ;�Ae9j���}��\xa�8>�F��x�l�dz���o���4g����:I#�HR�mG]�ZyP��@�>~������ݺ�
�0x4�����3��P��}��#Cl>]��mbYf�\��$�uf��+�����튅l�o���ۛi?�UR��n-	Oz�1O��$
�i�Z�̂&/Q9e�n��`�'��L���Y�2V��2�J���aG�T�s�hF���R��1�xl^}���ɟ5֘Fxr�!ȸ!:W�	���D3� C�>��T&1?�*��T2����>#.ľ�`*�	�LN~�BШ�peg0�x�/(y��
�:���)W��AZ�ۇ�Z,�40�3<o�U�����`)��=w<�{Z���͙�S�M<Iu�\��l��H��� jSd��;�m�T_ ?���}rx����&�����9GP+��|���
�g
�;|���|�`�C㜈+&�җK�U��@4��!�p�翧�R
!���6�N����"�6K*�N_[��Kz�#'W�7���⢧�G*V�Ї�sf 7r��}�K�)��,�m"��X�8|���nN~�|�>���d2>p�"sap�A�eZj�B�V�$�(*�	���,� -1��V���RC�KwP�Gbƒ	/{ �t�"�)Ǔ�ɿ5�K���8G[��o��9��YK�'x�o���C�,;π��j�@�ڌ��HM]�8v���dz�4Rz��ǭ���XI�sbgI�я�;�P4�=2����*�!�@���aW���cn+3U�whkom��Ee�3����}W�]7n�d�2����{�w�0U���S,�ܮa>���m+�_KCq �ϗݳcv��ov^�K!�b� 'q�_GyW�;Xa+�鵻|=��=L��S�I}z%�7�T3�c�2n��p�՝�M��_D5��?�����a��~� D�+)V\�ń��ޖ٫��m�
:�����j�U	�Wz݋�{�݂�,a+���%ɔ���Y�T�%��~Ke�5�!���\Z�m3�E6{i���py�p\j�m����6u$IK�8��sU����Ql��q�[ {X0q��:E��[FFV����Ѣu����*����{�6�g����J��z$�V�r��+�\,㖂��%89��P���˙W��i=&h�}Jo�����]��O�o��RѹAkE���}nmo�Wˢs��A��#ほ��l��Z�������X�����4�>Ƣ����1����W� � ��!A^�l�s�^κ���u�V��]��A��ԭ�h�;�o�U=���7�w
��{�K>����f%p�W��v�� l�d�3L�*NR[o�K^�]Y.=�V�� �����8�$�ۅZO�z>_j,U�H�{�#��8�K��RZՍ	�"�d �y���Ss_wx;��d��
u��v.�]�ƶ����R����iM���Sэ��*Èv�8�eSBb�o�X���ǡf��|J ������alά(�s<�m�� W� ������#L9�Bq����
W�uw�4�����ѰJˏ����@�C֨��w�&ζp�^���U�1?�2
�y@��=3K)d�(�J�/ )w�[�����+�ix4�a�f,�>�>��@�����W�Q�s�A�G��r�;�FZ	.M�h�ߍ�v.��Ϭߏ��T*ϼ���=C�wڮ�N�ݎ�Fg`��So~���V&N�1���^��]�����Eg���?~�������(�С�������>(��އ���M^�ʥ��J6C>��)�a\p�q�C���ׅ;����9ߟnW����h�Wzv6}j�^�Z/{���6�yO� T�����~��e@/���e���]!�-�Y�����S���!�T�6㰺7��ʛ����MO��BQQ�HE���=Gύ.�8�&H�&��;z�!B�P�%��IJ�wK��IH
V���'/��p�H
5�	�ta�u�?�JN�6�_��5 �c��v9�l@�L	3a��}V^���Xx��Yk8+����p�H�3�y6��F߂H~t��$�W^8T8�e���+ib��<eͷ�U�V�¥���UM���8����d��H�������(�:'H���=���Z���n��O���uww/��f�F�y�{�R���o-�23�����9������0���J�����|(��Y�H �g��=ړ�_�'�r/�Y}q[c��Lk|��鹡X;���Iz���2��m\�:���7s���$��ͮ�E�S�Iuߢ��������{�-�o�7{�/Qh�	btlPjϿ���%��ۈ��M�p~�-���5��6/�g��wa����֭k��Ó�zOGO�}�(S��l���Ƿ���wE�Z����l�_�8ի�gV��H�N�hfS��JYL� 
k>����lUy��h��}����^�߯��)���@%t_c�E�M��a<���mr�Bn�W������>K#]�@g"�+[���m������w�lG���v4k��]2SBA��6��텪љ׹n���㑣O;�GN`�XY��2h�r�o��g��%D�M�˵i�C��*�['#hm�M���	Kۄˎ?,�]��؞[��շ��� ��{`3�F�������ѐH(��
7�9_WxO���(A?������iGat�F���]�5�q>��q�4D}���-MD�J=}\?'�p�Ǭ�E�d6��gG�@s^?��b�ε"ψo;�o��7f��c����Ⱦ�?p��I	�$9�0�����F��-�n֪j�얗^�=�( {@��}��h3�O��*s�WY�'>fY�t��Y�}l����J���Z����������oӴ_܅�C$>�ln�&c�T����&�+�K:���~ӭ��%U���x�s1@���g�i��;�s�~�~1�ҷ#�Θ�w���B�e_`$j�\(3������y�BJ��®���`�5�����]��Q��Z��LE``+�&�� ��_�%��މ��B)/�m{����8R(e�+�`�T}>�-�G�hT�4>�]�G�$�Aݧ�(�и]Th�yQ���̹�x(�}��1���	D�Ͷ�w��W�D'�>~�?�W��a����?�%�"'��-��PF�~���`�X��i���,��d}�
�����l�2S����pw��Bƚ��ϯ\���^D.2�'��N���2W{��/S�21�}����Ad!�D�m׽���,2��U��j���$�ء��ƿ�.�k��UN�s]�	�bdiJ�����]�����f��+�,r���˶ܗ֣�4&��h��X�8V:eB,[�@m1���!��w��e1�,��h�s[��j��m'�f�e�:c�_�H�OU����;%�K���o-ٴ	��"P�1ٰ ��+ ~�A��n��J+n�:�2
�Hh�PE_N�C�����q��mS��a��X]��Y��3�C�X�!b�`�Nй_8�`��Rߙ7�t���Z�/��4c_T��+ދp���vk��%>ٮ������~�}��L���"A `����%_/]�-TaP4e�(����	�B�l���M� �b�BS�� ��;�.�J\�WW���r���:��߀��t�1����GD,~�w�=������wc�Ds��-�|�t�F$RQ��{o������'R�C�gH�ٍ���MAFn��~��$+7�)yt��lkU��i��UWIuj,����0t,440�
R;1�W �s�j�\;���<>�G`�vB���/��̴6~�0�׍����LdfXb�.�ZYRx��X�y�l������X��0;��j�y�����9����օ��G��|`��^�`	���	k��C��wE���^ ��*�`l�]��O�;kW��wF���&��X�j�i�MrSD�BP�q���e��
Tb[��t���Iԑ ���ΣO���|!g����j��+�߬�l�d��m��wǻ��V��9q�+nST6�*�n@����aC*ڒs��Lp�zj��X�O���ĉ�Q^YbVeY�w���ؿ�ե��I#.�<�()��(r����K�S��y�kJB?p|�K��� ��|� �K�.F���r��X�]M7B���{H������2)��볠���7��?��-��A�~D�3��*�[��?�#�(���uK����q�<���SAc�x���w��o�fr)f޺�����:�O�DeH����.�**���[����ϔ�LPa�8�ȧ59o��\��SE?���t�}�HI��_��0�=���@
��+����o�[Y�to�!N�_~�^,��`�q�(�E�*K}�m���?�S��^�
>�R�C4O"!�a��Q`y��ygZ�cI@P��T�������Ć߇� �9wx�|O����F@d�V4��(�T⵮VvE:�����|��"d�et}z�y�|�������ˑS����ƖD��z_����_Y��*o�˔�F�r�JGsV�'��x\]��M���	=��1���>
�q?+�E<s�R�C�52�nHz�@qeN�*m~ypƒ3l��Y�R��R������6�s���1o��%���RW=8wpr�N�]s�N�52��:�*���̱ q��[Y	��������-׏#ct�(tu��&�)~�,������â���r��� _�y(=��x[[�r���6�)��N2_Y�Kz��*�8�Ô��0�F��D;�v��$��`���bG�2��l����#�a�lS a<.�;��2����-�h8J=��g�dL�
�#TS�{����H3!��T^zޮP�rן���uӁ2�m�ߡ�F��T�gl�{��vbxuX��2�c�%wvO��̞�AE^СA"�uIH��か6�4�|$a��[Ieq�~An��{w�g��L��;��O�c��H%�~���q(Qr$}Gӫo��`�3�)0���Wng�꤫�S,�'R�?
��@���mY���_�!��Ri
��$Q~�������b=�Ϗ�P��KWWY��Po�gOD����ƈhiJ0�4���l#*
��R�����Ж8b}z�hY��tR���e��7jaۭ&W������#�꯿�=n+Wܖ�[�:�U�0J�=*D�%O�{ۃ.p�*}˟>E������V�V��A�)]�|k�#�:�����>� �%#/�c*�f��w�O �nXz'4��>�r\}(^�_�ɟ�$���]^���{�����@m�9�:+�к�nFU)��V�ʏ���&�Oᄎ�ń����=�$�Q�1�g��	4������ܐDf5����Pa���ao��&OM>�/@���F�/�ʘ����]��~&A�nخqא�K�!����������94	�[����[�:1Ϗ���d��:��W뱸o,|4������Q')�6&s��i���H��W�F�-dF���vׁSw��~2�����P��
�������$���b"T�������9�,�����#����*F��&ll�ɶ?J�x70���� ��O�H��VUϥ��Jt�0��[d�����`� ���m5P������r����AH��� �ޕ�6O'XfP�Z	�9B��4;�m5ȪV���g�\IzN�i��kh�������X��H�;J�9NwI��/�+��fק�-��E���'�'*V�Y/�� J�7$B/)$u��(�Ϙ�4�.�4A��}��/���]��,��3$�LI;o��C��BᙡA�c �򣣲�d\_s@1�Ψ��C��v��/Ǡg~��J}�ƀcjL�"�q����X���_��<�G�R:��[��Xk���|RŻCRM�E�+l�EC"�]�l�6�VQ�7u�����k�a�g�?���J��[���^�m�x�T]BE�-E�8)j�k��%�L��\�҉�������Z5y�T����d��Cl�v�w?���'���o��ZH�.7�Σ�L�]e.��\پ�<�B�m�Yؾt�4����[��0���y�:��j�X	i�]u�bd_Ԑ�T��ñ��c�l�Yr.?祝�b#�����ӵA��L��A�J��o������Ѿ����{1?T�<����t�V�hd.~.��q7^�7�rR{O���~k��֊}���!?{~�?�JY�~l�C��c���g�lH{� Q֕�ԗ		|�
H9s��V�u�����㯯F�l�x��J��vk�I',��B5����A5��u6�*��Ej��M�O��$�A�5� �k���Õ�e'��ڐ���r��u�J�~M|�>�j�x����h�p���{�L7��x�jguG"�]�k�{l�x�v�5u=ﲭ�^��MG1��N��w��/�r�8��������燦���!�d�Qz/Xп��
1Χ��X�h-�T�e��ޚC2e/c.� ��k����22Q?8���Aѱ�1 g�0���+��<�Քb�x7��|G�1v�G̕s��&�Z�:S}��!���eƏ������1!����[]��~���K]��@_XY��\��)8j��MIY]����{��>�5fIJ�fr�ǜ�ci���"�	����g�vN�	3^���ӈ�4�B� ���ou5�WQI���4��D�8"b�6�	F.Ȧ�e<f�N�ֹ��$��:����P��vR0�A�{�~'�ۆ#4��;���V���<rD3G񶈀�OT�*P�^���,ļ��ǫP���q_��A%�jϖ��P�~*�2ɢ�4��P�d�����~�a�2����;A@���	��/���*�N���]�c{��姽��F#�{�Y��ó�nE|/P��7�������S0�I_��4�|~��ݴ���|.s>b���L��@�S���_jhjM/1���>�6�U�h��«�C��۩�VFk�y���*���䴢7]|�"�N՚�fu�Z�,��JV7R[;�h�UR�w��c�kY[�5-&BG4��+�鯜9y6(�!e_�\��׽a� ����4�ǿ
�/�;��xRH<�����׭\j�sL:pcr��*U�q�:Av˦F$�4��/n@�]�t��ѵ�o�:gzRȻ~}eJ�^HS���U�y����#����G�%�N:Tp.�=�h4y䫬Cr��ea�m��
�s�ZB:DF���=+��@�GN �vX�e���9��iղ��b����[31:m�tA���`I�A����_�,>xg�tz &�k����i����&`�ݷIv�}B�}Ȧ�H�z����}Wž���9p�`Ռ�'%\�15�ߞ��, ioRH�9�ɂ.����	$/kC���މأ��� ~��;4��6��m��p�
��#z����`u�B\��BӴm���T�B�+���_9H�
�&�T	�]�JpΘ�q:� ��V�j��Y�[�Eq�%*��}�S��Az�j���d1��~���
7	Z��Jڻ"::5Ӎ2�&�t{�/;}G�6ᖔG}����NY�Q�9[��+�?���w������! ]��ͪ��zƴ���|���k�u_"C���x�Y�QF�[+ȧ��!��6P�m_�I��2�k�Zm����<s��6���)�OR�r1��a��S2&	��>A)���������o���bK��:�r��|�}\$��+FV���	�>��n���9g�E���V r%����+c7��)�vVߠ��W}�������
ܖW9(�Qc	=����[&�(���X�S�K�P� ror�߭wœ���c6���U0c.�9�2� �C�J�e���ݾ����hQ����ҟi��ʊ`���|9p  �M����x8�9���W.מ N8�2^�&x�ٸ�)���v#Ⲻ�n0�fs��H���ot}���J+�Ly�ѱ�/��)���'�+ȝ�����`��_0*����D�x0�c9�g�A+U�K�l����J3�D\[g_�V}��Y�Ȱ�y,
v𯎋n�[ ��S"_sW���_��pn]�FB=�a�"c�?;[�з���V4[fI�u�_j\�Y��[N�6,���`��?l�(��`���R;�dԎ�E,s���zO�w�Z�d�k�Z�a�|�`��iw��T?4[�*��cL�;��6)Hcl�47��D<��U���Ȋ�҃T >���M��Ad���	�W  �����!��0�B�����|�ج]*�{��BE���P�>��]
�y�+��q�cJ�C���g ���~��ɭ�v6E$q�� ,!�J��/��@�R�<\��h�Y�,���[Cp��9/*�����H�L�	4v))}�x	mZ|^����uD�2nI��^�K�!=�(�������#-�B������I6Z��e��<�= �-?�*w�Ŷ�o���+��k#9��0��{�0�kÜ�'�ϥ]Y�x߾��TjE7��@jk�$�V�ݺ��w2�ǧ�p�@{�~Ǭ�{Du4�����5=��e�h���P:S�:�S����R@��ȋ�ʺZ��
,��{���'BCc]3�)[���T4H�م`X��z}�q5o\��@Xx7U��߫��z9~<�~G.m�P�IK�bS\���%@�b{��v�)�|O���C�d�pܚ�S�x�Bp�$�3%��cɝ8���^L^"�btt��B`�t�3��s�$�QA��R�5	4��[b2�~�F�m�C���?�6�W�sN^g+��O#9b\��-+N�D��EB;���=!p5��`��ԭ.7�#X��%l�iAh`�` �|Rfցw��S/�UO���
�h!���sa��e�;��f'��w�	i�L__���x�� lG�Wz��g4s"
�I4�J?IiibY�(85�1����z>Q��Q��4ۑD�t��V#)�e�� ��6�듑�椉�� ��=tJHO�oY�/�#�)���z�G�wpۂ�Z�������tBl3�,p�i���a��$�+�����3J]�W�����u�]�F��~�i�<�2z�v�7�e�dUuE
ʢk@ù�j��U�8������_[^H-�^�*�"��d� 4�� *�L�F� �.�Z�+�M����US-���R��38ވ{�Wr������pLW����;�j����Q��X:Пo�j�G�$A��{x|1
���6h�
��?�i��J ��>�&l�Ou6z�����z���	������`�>�5%d��K��/� //.`<�²-B.�o�_��b
��k�z)�l�Mʿ�掉4�� ���(V���<v7X�)��A��X��WɮQ2.$��B��x9���U5�G�n^E�*���ĵ \y��/�_�D�5IO�I��������B��_�Y�k�@���/7���-�Y:t����:u��"�� g��4���u��TC�P��i�0�_'�?�I���J+x�s�QP��nj�5�eѠV���h�QMR{;ؾ"��/)���!8 �%��'�G��9n�.i#�; �#��3ἶ���j��֖8�dB��]��)��y4?�n f�� �����"�2א�ƅ�\��C[���S�.7 aj��|%��Uh�{eS�F���J���k���q�Ȩ	_��6Fs�M=��/���-h�bޱA)�Lo�qj������0�|��Վ�8�&�畺87'' =�;D��-Ry�-�*��ߋ���D�TA,�a�V��l������4<M����{��9I��O����܌nXr:��B8U{3cc�^�NUT��45��5�`cY;k�ǈFsoZ|������K�7��h)�g�h(õ/�JpX��[���/�� �m%T�t8f��~$KD���5����y�� y�ɱ]*�-oH��.��{ !Y0�}(KLTJ h0ѱ0�Np8�)^p��a#���/ߛ��X��װw�[g���V�^�����oU��y�dxo�����ޓ�4�M�l���31���s{��sR�FH�|�K�2/�%�-��S���g�E
�?��u-�
	z�
�
rf��@k*';\	�kO�]�Q�mW��e�*W�3�6Nb���Nc���w�	���
�!K�>���:��VX,j��}�vͱ?x������̵�U�����~ęΓ���v��4]uw_�%����U��
t����ڤ�@\�;����>	�³M�CU��<´�����9W��|o�[���u�U�qb��0�yΊ+0O�mBZ7n�ź&rE�� �S`u��|ۑB��c�'0$��:� �D��kD�H�*ı7�z�#�lOW0o;1�����)Fܝ9!h`���r��W��C���Y�9W �9��%+ў�c�� �B����g>� yČMX��P��6��������jU�c�$k@7����$�J�E������<B7����,����CXK��20i��Y~�zs��9�O�I��� ֊���dW�;���pA5{�����ײ�|�g�S���6n�LE�lXEX6d� 1Vi]����2.��},
��SFrF�{��O�D���άz�b���{m�X@%���￿����\��ʱ�	-ftiލ����e��?*x>�2��m8M7�Ê�Q����fV�C�@j� ��` o{
��f�vU-
���V�`�kN�����ƪ���E��^�!�����v�gDS�kF��G�*J���X��*Gb���8�!�n[~�0E�!��z�sC%��ь��}�y��M������&�؆i"�/�m�>�t100M� �|��Ŕ�Mc�9�}�c�͝�en~��D���z���}N���O/��HiC���N��\���ΫqjG?p�Ab��Qw͉"#��_~����3��U"�JhKa��X����#൶�rS��cV�i�ѵ�J����]��q?��#��di�a5��x��_�3�M���B\��B�=���g@8���jF�� �H�Ga���������뾭��M�뢿s��Iβw��ݞ 40�ba�=���)�*��T�"�� q�M�i��=�{���f0nR�&����ݗ����W���:��(9�~���tx�N2S�!�v@���Aߵ"���U��t��O2ˍ���1�i<����@��X����=�o��M��X;� M�g�e�G�B#��)��n,\�2Hu@�-�͞�hn&��g
R�4DYa~���>>���g޲<U�s�n���,E2O�@�Q}n�/��Sw��Lj㱂��s���8�m`�������eB��m��-�(mx6����lD���֯p��Ŗ�M�h�0Hm�A/$5\GA7�i;5�ؐ�?ad�K0'�I6�ݤU�!�#ϯ�s;���(nH�L8g�o��.����1?)�o5E��u�~���g���k��7��8����I�2��0Q�Y��\M�%}��U�	a��Ȫ�1�I�l�&n��Îpb8�֟H*Wȍх_%��d�o�ME@k7�R8❇V�pZcMd���jG���}��ˋ#�����(_mY��@�^p��	�T?��iӀ���4��p_��6�Q�O�4�N���>����4�w��dF�煁�6KF�w�4�O@=뫟�
|y���&��ٟNk�n_n�]��+�$Z�z���ʯ��z�T�bc���1܀:�\돲�ۛ-犤]���X��lL���m�g����*�_e�z��n.Vۑn�K�{Qzxr�b��u?H�%��c� .5�H$&E�: ��%z%h+	���x8H
������W�����/ҝ��R�D�S��I����s���5z�)B	����g��r��ܦ�u��1����tȠ�s�}���s~)ia׶rH{Ch2�g�%��I$w%�w(����}�����> �E{/��^�<��c���q�yY��_>����<�џ��1��À�˺�BL��

R1�����t닡�:DK�$��Y��!���`�ˍ�`C�lCYn۪�;Dz����A�#�Qq>e4,�r:V�X2�r�m�Џ�҇�l	j�9f��I-�����ﴖ酪�8��(�K���K�8�O�o�}��D�6�J�`�{[!N�*��k=�w���g���r�,�8v���Y���/(�sD�`�q���fn�\[���j��LR��r��&���*�Vf�T��`�k]���2=qi��������b�A�5�ɲ�c��F�oV$���-��2�d�4ٻ�n�K=A���Ν|���j�(|�ABO�I&�F�4�ݽfL�	��)�F���ҝ��۸�	��c.��ZF��|��ud�bj��wP�C�|ud�Q�Ö΂�=ۍ���@�4[�A�}#R�"�r����k�z�[C�F���a�E��2^��ɾ9��9f|��}�t�}���/��ˎ`�HӪ��2iK�W�*�Io�Rʇ�#�E�q�0�s���R!Stw�JK�jF���q�~&%Le�`Y��TDq~]B0O987�?�ص.8��}�j �͈��o��'�L?=�}��3�p,��ۄ�A��z��<מ�Ah�� �'�U�e<��0���ص?f�o�0�,�ϑ�L6�>��UT�ӏVsɴ��7�E3uA;���aS��M�
��_����r���@���އ�������1#6�J�h*�Yj(c}ږ��7�ͧ0�ɭ����hH_t�Z�9#K�%OP�����ں�j�1�Y@��ƛ�Yy�C���l��^�{YA�t�?��B��
��a���Q�g�&Rm����Dl.�J(��Wԭ~�v�M@N$./��\6�V��Q���h�S?wu����w'~5Pg���;ON��Y�����G`Y6O�CF��'��#UD��@��]m!n��a�=޾FmUE�7'�|����K���8���E�3�0�}�k�/$�P�N05�-A��MAM�/���c̜sXF���h6����}��l���+nK��i�[c[�[��o^�������-5�(��&�˴#R�&�!u<�b�
Mt��q�L��ՠ�?[`�Sk�jB7���*��^���,8�u�����TiY�֕�^����@Z*L�O{�(�{x8<�3�^�W��*�f�4{������ņ7"�&�����m�� �unϴ����쐔�ꡱ�P{��LOa�=Ԑ��X�D��g�0-B�h��X�)����1�T�*O�s�����m���<2Ι#���d��?��r{�#�{�9�Fx��`����Z��W
����1&���XC$�>ӧ�A #�[%�ӽԜ��&�-&�^��b��_�	�f���C��Lu��~MΡeu��$qu/,LxZ��V���I~^���,xs1؉������_����)�V�G���a�>��G��?F���{���g��R��i��l���N���3���
b�w^`��f�"�2�6
�A6$g]�r@��n4LCK�ʋ��U(Χ
_(��&/��QL�'����_&��Zx
bܽ�F1{�%[C�0{ܝ�5��f�D���t�!t���h?8�`#@�b剽#O
y��y��'M��f�4�F�2q��g"RCF��R�RE�-���f�!�E3!f]��g ��p�$_߰,TX)^�v�I�]��)��2��+c�	؄g��Ǭc�X���;�2樫`'8W9�	���>�	��pBH�u�P7��ѡ��^~��x���8Ia�OV-�d�2�EW�%N��f'�}	��E�z�F��]O8��S�hX��1)Z?Y�vKZ�H�UtU�2�?�S0^��>�zK~'>��\<���N��SgJ�x�G$�X:w�$�B��!�����p7�ğt0�/	�����vN8����;o�lx�B1���ǳ�l��+=�z��}E���1��~��5�΃�^h�2�q'M���`�Kau��D��ڧ�o�()� d%��/ʨw>�*{1��q1�>+���EN젤\�P�l�����x�76��]�v����(�͌�g��j������J�1�����(���fen���N�Px{�,���g*`�J�{ϝ�3
^9a]�\R�p�U�2�`��FC@vM�����a�|Pf���c=r�9�ioI?�vF��t���FhZi��ŋ���7�{����s��ߝ��B��7��[�F�)�O�
}���-�A+�v�����B*���0�2&�2D��7�i���s�$�������y`7݉��*���Z�����d����AK�ù]V;n(�퍖Yai��ҳ�h5��:��N���n�� �����A��H�����s��9и}[�˘����5?���AN�5I����,�,��<���Ԧj-��p�ˠa� Q�ɲ�(*��M]=8yR
wֺ��a�R���w|'h0���e�t�XU��3�\�������2���g���^G�*� 3��p���Q�#|��.>P:�������2�0c��S��Ҫo^�t'�W���q�� B�BD��W��9|�=fҪ+~��~w7[0Wb3Η-�������~�2�f����c�Y4�0ˤWNҢu���=��<	����?U>��H�?�B`�;^:r�l`�/x��w`Λ���S>�6�`K.�'Ӄt���� ~`��U�� �!?�� Ǵ6����a5�.=�����fkwL&7�m�G)�#��	-�Z �A]�D��	��9��}��5���ׅr�!R!|-;؋��c��7{Ѝje�F�{Ȟ~Sv��U�]FQKT����#���c�|���.�o�E��vk98�X.���P��Ҹ�x�3-|�l��eg��I�;G��焟��QG��=��(~O�s�f^W���Xj�`~�Y���|�',�W
�8��D��P!9���+Ko���P�wՆ���k'.��4_s�֓*�o�
�T�٨�]��*��`,�h�m�M���^�V�|�q����~���!%@���z�u�zJ*��2��� �ْ���(V�n�ER/���dW�����S�1���-pu[�^1�<x ���wJf�ƃۊ��n��ϫHUK.?.���yu�#�{a�.Lh���'F�{)74�띡�4׫�Qſ�y�_gWCуX��V�<��O�w�2>�$iS��P�gU�uv�Я����*y��|	^�0_\�+�̘�ν���f��4�G�ŀ�+���ǢS��Y�����r	)q� wI��y���aƥM�_�sh&s���,��E�L�	�E�N��N�����_E��Nx^�s�ұ/��[7���GTR�1{���ΰ����!GCZi2���c�U'7ykt�����R.��x>T��=����*��P�;��ses�S�k3�>c�v�
�e�7��E�}+h�w?���1���n'�L)?��;+�mj4_���3�>L�I�?w��^̶a����lp�g�OT�b��~�a��A�d��t��ͦ�C�$�D�:Q I�/����Fiq�����ϓ��3NY���P�|a�
�`+Gu��#IdYfҀ����$�!!?~ٚ�okT~q �ҍK����`��8��m�� {y�g}!1��oJ��`"�=7�kNM-g#����#�$��R!2��Q���׸�?;/�_���-��\��@����*<h�isl���2��%t��Y���*PI�Ƃ���@��/�tE��K�-�@7=XAXG�"p��ؙ8iv�y錚�n�QM:W��"��A5�<ng�� �t�}ӛJ޽$�4%�^�S��:{s�y�R�=o�:zQ��ql܂�Yo:Y!Z5f�Ǎ�����.0�pY.���c��I��=�>�)�F�77f&�Y��Z8-H6�%�\{����05_ܥ��ʹ��պ�Oy�b��!IZ��,̝������I���+$�W�J<vb�p��>������7�� � j᪢�7L�w�L妓տ�: 
F�C	ÞZ�Â��X� ���ܚ��<��S�mB� �8}}D���~Le�l����	�[���F�'���^^�ML9t=�?M3�㯶���|VM	�� �Y<�(եpC�`��*���-��`��5���J���U��,�\ܓ��|���!� _#�`�[,*_����%��m\�s�"u�����S���hnM𬤝�'��v��KdE�zZ�jBa"�?�Xb��Px�c�M��[
~��>^j��ҽ<����s@���!�Ah��Z��PYW��rU.Bg�b��Ԥ�F�_�E���<ܵ�4�:_q�y��|�7�Yg��R"RK1��˨�|�9B��?R��MS@-cu#�2�$�@)��4`+2Y��8��'�&1$�TU� ��v�q���#)^����S��l���.�is#ǥ����� ��-ғ)!�7�ȗ�Z���;�����F��2��m��6q;��g��x�^&�^L�<�
���GF`*~�޹�պ ��+��;v~9��*n����C���	~�^=	�C+C��/�w����Q�>dk������-@�k[2�@n�T�\���J!r��,�����P y)��/a�m��n�Ae�5�Xۤ9�ѹ�8'�;hf��aU��A�2zU3�8P������ң{\��@e��F��E�Pu2�3o��$a}q��o|�3|����-��^���ɦ�Mէ0>�h�Hܩ�.����G �i#F�Y�����j%��.P*��z���U� 4�+_�Ӆ��M��b��e���&M����#e�d,�9+�Ȗ)���߉iλ�5������$;�>D�yN�*,w���K�}`��â�[��<���K ����;��;�k&C"^$aT4�`��H�c%�Ֆ�����^�#��$�~+ܦ��@�g���,�LyI� �2%)7N�X�����3��袚h�F[�4����W�*UB��pT���ׄT��չ�/i�{k~8��	q�V��e)����8r�37���w}|��[�ʼ#ON��7�3���͖�3Un�x��$
<��+pl�յ>�M�#�{����ֈ�:��.��Z�9zN�t��|��" lʓS
�T�X��?�V�W���|6�J�kE<��N�����f(5�{}���Q%�frCiU>�������� Z�~�ٺ��h��~�����8v6:>^�&��Z��G��>��p�JB�K���=�8���`��#H���vg8�i>���V1���j��,k�Z�h�?���c7��]t�I(�fО�JC��r�ǲ�F��m�+0~�w
��&���9�)i�i�oP�{�F�?�d٩4>c�b
2M��^��Y��}���8��:�Y*q��`�&����f
����k�0���ݩV�Ԥ�����c�9��PŶ�'�>�-q�P^K�������Pz[����4h�?Z�W�����dם��}�(����h�"xT�ni�r�X��Bb[�b!m��Z-���6�$�Fjԛ�rS�Y6a�:;�ö�����4��L��F�& ����(���p���۳���ht��w>|�v$J�Q���.�&g�	�=�&%7���m#�
q$.h�Ko��yq�x'ĽT�7x�cX�Ύ�H�L���c���#�		r�Bj�׳�i4�$���H��B�ب<y}�#�?�;wY�Uδ�x��f��/����BZ�YL�1*=��ݳ����3��&�;���[N�w����<��@�B�>�f���$�hW#��zo�W�ePAcи�.X�E��K��w�g�>Þٙb��?�J���~C\�~"V֭���f���c���a��p
�t6hn̳�b�q<�c>s(4�UZ������C��}:��ɚ�mYq�Zzt
6Q:S6U�㐉��"��Rg���4e���6��H�Q��4pP��J�xQ�R)޶R`�y��_����]�����G=��^�	
�~^��HT30R�9��E�a4A�T՞��_ܹb���뢫tb6��G�t�û 1]��ڊ���^N�� %�G[����H�2}�fX���M��iJi�C�FQ�{�������3W�X���K�e��<�O�2��%s��l���{Ѽ7�<	�*HV���Ue� X�>�M���D�WxI@a��-^�`p���R!�h��:���ff}'���X��=uYA)��c����nr�D�4�����Ï��o�+X��<BG��&���AU��xlf�=�m�6{���NW�����aKⴎ q�\ǐ��<d5�Ü�����:��jc~�Ċ ��Wr���3���ο�ZTÑ!a���WD�5N̏n�B��^v9�%�X�%3��zW������`XZ��q�lZp�a���U!�s�>�O�΀ϼ�Kbx�.⩹�Љs�U>�Q�E�q��9ۺr�c��N��-4��OC�^Y	�9��F�����D���B�����ob�x�z��x��d� �1%��l��g���9���E�i&�i5�d�7�v�[k���z!��Gc%T$�74��^��gf��)�Ya�YYӜ�+Lu��[It6vN�<ub��e"R������\��z�	 b���]����Z8 �m
s[Ze���}��G�L��u�W�U�HI ��w��A�a���)A#\�p��Z�ۍT���B�
 ��q�t��3��2�P�Se�,�m�o��|ߢ?9���@L-��]
��C�zZ��uߚ)�_<{��� ���]�?~��I*��f��;�)�w��cQ����/��g�{�������h�vrX� lYjw�GӦ�+�D����T/��v��P<��,��{X0���]�=��vw��W��=�N�>�۳T��x�G��=�-R�IUv��o�rg}�wc�pIb^s j��WG�"���l}�2]�G�t�7�+U��,L0U�R�m=��<�Ӈq֦-�HKS�<��utb�Rp��~�$�2�W�Y
YE�'�b���r-�e~�hE�7�I)�^����G֪�8�'ZA;:\�	|�%�Nн��\Y���<( �d＿jQ	й~O�����������.~5H4̳�L�	��k��ԉ��R����p�h\.EQZ�S�ٲ��L�p�4�k��.��Q���H?�z��� �'>+��AP�~&�\�j��Y5E���~(s�Yd��S�ĭB��v�ļvR��<�l�.,�@gO,;�I�� Ii�'&���j��@�N-�y��3m*�3'Sm�{�F|V��@ �5���lY��C��+9�p������7�Ɋ2Qt�I
iM������-[=����TTw`�&ܾi3�a��� ���au?��e��W�rc������U�V�\r,F�cը��]Q�S��0s@�����sk�SF�>�Ts����8EL����y+{��$��:����juh���,��V"�W,e��:vf�X�̈-�^Ȇ�V�`a���"&�h�ءY0��=����8��
<B��Џ�#_^D|@��^����(k�*Ær��!���%�p A�4����KP-dP0M��ȯ�|����ck�Ṯ0�� h[��L�ƣ��b�/X0UM�h,����vL+��@�M�6.Q��������I�9jOJ�k�5�G�l�:�tTP*ؚV6]��׽ɋ'R��*�:R��G���׿�[&�� r�@�Ƀ �F���z��"�nu�]��26u��G��*�("M�+[���B/}3��
��V:�fjWq���PPJ=xA"�h����N�����DUPC� P��o����8��45I�Ze����E����1ߤWH��nd�i��$��b���X�c�&����KkA��ylռ!�� �pB|ft_��n`&�Q�>ھ��E��*ޓ���N���=�s}o!��k��)?.<xe��$�n�rQ��G�����h�3z$!�\%�2�i5H��X�7U��*���&A*�XE��U�w�$.Vs�S�i�r��L%��I�,3İ���|�E�no�Z�Z��$fj����ɾm���>�d��������b����(�D�%w��`t�˜�x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=8834adc87620ad1d4f3fbec3af9ce67a1f0e2b1b.end