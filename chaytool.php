DONATE ME MOMO 0337660475
<?php
/*
----------------------------
PHP Encode V9.0.1 By Dichvucoder.vn
Support Email : dgbaopro@dichvucoder.vn
Time        : 03-12-2023 Sunday 10:29:48
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

���������6128aaf62191c74a0d7a4c3e1ffba3451fb4b9f3f2d918c8856b0d1a21e0f94445a13ce49e6b8122fee0b8e91a20694c�o~��z	�֘�{ӣ ����s$�^�t;�
�݋ٮ!J�0����
��?�&.��&4�)P� �&�F"Z儮�D��+ ���*?�Ҫ߾��1!����%T!ӫ�U߻>�ۯЋ� x���M�f(T��ԉ�"��CzC��u�Oh���}����-�mZ~�����z��4�K_'_4�:/먘���L���>4��k�h��P��L�TAe ��|��!�1���&����vs[�	��#`K%�`���U��b
�x>�b����ў}�l�
Tj��:]�ȅ��"ym�ޱg��+��c����E��S	��޼-�b� hA,�y��/6���	��TE�ݰ����C�Z���Mk�a!m��#�����\�x��fT/�E	W�Lή�rv�2����S�՜���U&�:#�D�N�b>$	d��e J[�i9$GZk�B"��O=�@������*׀aS�,�~Q4}[�,e�S�)���AA9Y��(도�Շ*wx1�I4CQ@�����@�0��%3���j�����}���A�S��J;^�r�V9�F97V�r����al��+7lr�����5��?�����:��ޮY6,�8w�+�'�z�kS}n/Jc�omL���n�+��Y��KIN	�����g�a@W����KF�������D��<aH�l�ͻb;�Az��\Np�c!� �\�*�y%���3�Xn�/}+�U�E�x:��dM�
z�1����u��3��}����~�Qu�����}h���[U[y[��k�0��X	=0���'C$���;}p��	�Pqx�	F��^�ET	�����L�2�����E�1�a2��Qu��!�޴&��#f7~�CߘsO���/Ci���p�`�q�As�u&�K̶3���|v� �
�bĴ�
�K*�4�@':�pY�:���Ψe�1j�)���&9�\�_�u>�zI\cb���o=鳛�_%�뱉��PJ��8�~LerA�}-�������' :٣_I}`4�4�w�x� 4ʆ��K�J�N�/��^͈7�jh>z��݅�D�t(�!#�Uޑ�~H���cH��c8�������BK�l!��32�6��E`4�*���i�>����h�b ��6�)x���߽41i.�*/����yT��8$�}�K�pG��@�i�ѡ[������y�UÅi4Ŗ0��>������1�^�cY�i�Kݹ�q��;�[H��!^P�d�Lj�&�{^�0L�G��9q���Z$%R�,vSےĐ>�1:�]I��[7��	:+�#8���N�OBP�.94�M�����1X����h���k�\Ъ��3� ���>�S���v%S��(4��s���<@ �p�i4�'øLN�C�P}��h�YDml��c �!G��N��'O,�Uo��/���~�	�G�<h�1��	{��6^���!t��e�#+��]��t�ן��h��=!4���lǝ'����Z��z����<l�/iL1���JpI|�3GS���u��6�槲��ц.@փvxʏO����zq��UM2�Æ��Eu�h+i���x��Q�G����M� �uN0�|�E�v��E�l��w��1yF�2�;��� (����W�!/��Y�t]Zu�Y������̾g��ޏtj�Sj^����1j	��c�zxA-kO���~k�c��6��R=��5�Vk hVՑ!k���gQp�D`]�x�p��Rezq��PtE@���a�R�}W ��7dY�8g`��>HAQ��]� Z��&��_AEȗ�d&{�L�/�q@��u%��;�h��ҋ$�	��aaqU#6�����yG��+�Wk��0%��T9���ח%�����}�$��1��虾m"�!����>tnU��`ƙe�y�4\,� 21�/ds3�{���iq��-Ö� /�_���V�]A��A���ޡ� ��z}�E��p*��a۝�ce���=���Ё�[��(��Qߟ��;(�P���2^4����e� �te�VY�����㼩�Ãܾ��U�Q�H��g�;z�w|:�wi���dg�_d0^�G�O��_طK�=%�jE~jR^M�h;�G8ލ�_k�||l�s���x�V&����Cc���Ǐ��h-�˽��-.�}2Y��oֽ�6y+Cl����`��W���a�^��5օCC�S`�2�u|���y�I"@҃@Q��]3��+'#%7��;]a�NAS �֞���_�i�\&U8=�R��33�1��wKi��d2:���X�0ԑNW��-
@*���X�N�Xl�4d/ŭ���,	�Lc�T�::������2̌ǝx�:F6�e�|��e���JE^��F�;L1bC�s��s��������.�?m{fC��Z�T��Jt��p(`��e�o"ߓ��z���b�N(շ�f���ozOcF<?Gc �}�N���~.�u� Y>dQ�n��\�����<�d1?�i�P�o]<ΈL����fM����o.�,S���\�F��'�n��e�
��P�@&�-ϊ�{�fx싵Dt�
x��l��d
ĝ��5V�:E�(̦D?������#Q�,։��[(�A{)����x&v!���^�� ��:�K>��u�P
v�S7�xU�� ��ʡ��=gp����R©��z4J��7Ы��x���P��t`���(nc0�M�^�!ɉ�����ћ�w��px���Q��<����#xs�Y��2���?�2���)ۧ�{�x|��bEȴ�t��*����%�]h���C���ˁ:9�p4ؠ�Nȋ�fS_CNU���E��"n1�ٽ�F���p���ϭ��E&D��P�,�:��E�Y1��`���R!������/��'�U���T�@�5��Q����_����R�݉Ђ�ч�d����C�_��5��#��w����q�IѾC�N4�j}Z4z� ���9�� � �648<�"R��6z^�.pIRB����8�H���+/ͤ8�K��pL��S�}��0]|?!�C�"P޷A�z�KO��w��$�,t%�<w�#{�����|�V��_l�4&����屃�<�����s~��MgF���͈J��X��Q֌�K@��:i=�;�]%Bӓ�s��Zy��%m찜+~C����!x�vU+�5�=	~5��ab�1�ME��������:�:��H�k����eɏ.�ـ޻�6���H�,�0���2�"ho˯`�3J�`�[ ۼ�߉���ż-~��.���q���_U�����ܕ�����q�1����C��[K	��A��-�oq�����=~�"i��t�R�-~T8���bU9A����أQ�Y�0cx�M�i�+����8U�����j3��/��5�G����A��lwWm���;Qd�����?�6� {��_0f����Ww�P�C���ϓ�;�>�|�N+VF�ҏ4��3�@�Q,L���q9G���$��S뾔#�����3--�>�;ߏ���翋�~�$�����#	7�� ����I�KA��j�>�+:r�'������D"�w�+$?��س�C�����=��l5LG��̚�(�E\.����9�dOE1��"g�4F�����U�Â��F��`�|+�,�>��5�)���O�:1^e-�Q�~~��r�6�F����"�Cb
��<*��q�Q��������<�x�Q<�Cg2hO����9P;�M�Z�'m���?�=�f�ԩ��L�Y"M��I[�F���Dc2>��{�AWƬ��Zį|�gщ��%��{Όq���weŲ� ��5ޥ�H&1'ڨ"�!��Ws������C�}���~�W�������� '��|y��a���ʯQA\��q�U���F̑���I���r��s� .���Z�wI�\�~c@Õ���L�^C�3�0HZ��Ë�
�c��-�����F)�I6u�l�����]�&�ڂ����ɐ�`ڃ3�m�]�v�"�:��~!U��Jt�R��۴��	�D�+H��T���턴�����g�u��Q��Nx�L@�[|�T-��GNyQٽ�(ҫ�����7�A�3�Ƣ	�cċ��;��	z�]��،y��ڕ̰v��^�[I���񫥹��f��� ��5#�j���)�Y���0]%��; oS9�J�k����yL���w+&j�y�߰�:m_�]��+p��2����x�����y�m:�j��M�~�����b������X��d�m^���ZkH��9�Ì�4H�鯸�l٩�燜t���N�z��fxi����tW_L�
�1*,��k���p�;���@.l���_��|�X�*��d(�-�;�1[��o�B�THh#F>h��J[Ud�����,
�V0h�Du�������*���1����	��-��
����M��	{��6EkuY=�x���|� �&� ���c�zX��Wg��g���q ։y����:��mP����T�l@@!�[CVmjM��b��Zz��󗗎��Hnv�DW�IDC�'n��aR�P�������'�J�V꼴�Dt��B�k��� ���z�E�	-��b[u��!N�3�,��cj�7ZG�����-5ɾ��e)�ȖO���,��'�����9 *��(�&�/Y�s�`�N����&�Է�[��d�
EmI����&&����}xNwC��m�O�i�S.'7�$1�,\�v�^�"��gP��r���}�l�|i�j?I�W�A?�;��Hg�,,����xA״���XE�w���C���ʚ��C��6��������Td�z+r�ګ��: 8v�xߦ���Ֆ'�=Da�[�a��	�D��p�P��X��%���0+����t)C�%��Fc$�����j�MA�`�G0�l+;pc�b6Ϊ�PO�9ߪA�g�&�<&��wT�ܬ���Cw�f�f#��y4N��GȥA����@�ܭ�R�y9n��ٳ���࠱R��S��!�����W���k��?D��Щ��g�8T�O�`C� ҷ
l�Z��[:�!�g��_1�W����9��?&,�,�V-l�dN�M�D��7 �T����@�nE!����F ��?\39��+���a+�V�8��"Ѧ��7�XJ�p��R�N�sJ9�� �[��5��H:u�R	L ��ln=�dk���uG]f�?tM��x�ܾ�B;t�3�횯���O���+�B	*{��|���7F�K�I��������2����B�n~v�|a��9��$*���� �v���Z8ޗ���b�f�x�Z�M�Ph�-�S��k�u�V1�_9j"5�^8��̀U��H`i ߔڋS��rl���z�޲X��s9��Ha�6�|^�hփ�߭��6rӀ�S�(o�c����$F���-C�Fv�YA�&[f��p�s�ob�/K�n9�5�(W�x�P��|�F�3�	:0ɖ
P�x���#{z���%���`P}e�U�j�R�R�|aо���� �p�/�j�l����� .�f% <���N�hCKjی�w#d3BdSj�4L+���<�\�����<N���awB6_�1jn���X(@ۍ��H|r��am�$K굥��x�r�VΉ�&���𮙝TxP�����ʱ(2�f����hxG�-1��S�P������.[$Cn�+�<��9�V驡����� �<�P��
�HHڢ������?�#��������S���P��U-po��+�w�E�|���_	Ȣ��#���*cL�/K�o��wX��cӿ�.&�����%3}F7	7U�']d��R��C9e��ޚ��-�7��(���H�T�Nx�v�T�/�h��y�w٠�#�d��1 �f~�! �� Ϝ1�rDN�{�!�6r�WS�7��n�n��:��"�D�ׯބp��g�l���������<kU"�:C�7~��9-���9��C�=����<� ��_¦�/�v�]ohab��?�ޣ35iw�Э�sSEgrL�gJ����ZnM)�!T&�f��?��2͌>��ϣ��u�~���ɸx2���hj���-�]��*�^l��zP��+8/�8�o&�������^e8�]j�A�=>�}�@\I�L�Pz�m�k(k{�V7�m�"ftt��<M˃C`x&r��Zi<yK~DY��jU#O�|�!��G��ϫi���9�:^�=X��2Y�Σ���K�t�޷��6t�ϑvj�gֽ�+��:�t��U%�Dr�yb�J��)����J�[�y�(b�h�:K�P�v<���<K�����m���Z4	��,s���XVA�ƛG�~X&Z'R<�'"ls����Q���j�Z�����s�i�/�������- �\a�H�sn|�]�j$"��D�X~-a2; bL�A>}��.Q%e��̛��>
R�~.��$�.=g�Jbɣ� �S�C��վ)s4�>cleV�>dW��Ņaש�xN�=��(;��a�2Q��W����]��v �$U1�!�W?v�M����o��p���P���S���ڂ=�s99����HDhA�2	��>��T�mA��2��@z�<��W���=�=N����i�"(r�[����UD��\w�D�sBMTB��B�������y����C0�v��a��f�6amj�T	��xx<���<���3X������[HP���MS!/�+�Ί�c���ɣ&U�[d	���n�(H��Ȭ��Į����M8	_vo:��n%�ͣG�u���-��'C_�@Xն�_z�`���cFȴZ�jSd8P@�d�>4��ס%��Hv-���a�
������|�mm�y�M���$G2�̷	$�H'���I겨�E�����B�?�/Y�ONg���Z��+=p��P���EM��=�q#��Q�ĻbK���������z���0����?��#׷�%��O�4�Yz	��oA��eo�CQ�[�gd�Q���j�@��$]K��Þ��cZ�Cd]a�������W^�g�X"k79KS6�gK��l=�����In���'�8a�,�xQF��Zۖ�z��?�+HX�!�!0۬���S���Y�.>|��� UP�Ǡ�B�U�xOp�9}��2�y��ǔV��ƈDz2:/��E�p�d$���ٛ�G]e�lPcU�<>-�`��o��Uxgp#�*� n�8R=��r�=�|��F´���k0>�[c�±���nǔ��P�3�T9F\A�����sa��1&92����Ե�D���`}�E��V�1>Y#Ƙ�&LNN��*�+�u�;'���5��I��6������-򽝪�bE�!�g;&�ِ��sW'�2>�*�z6��n���B��t:qw]z,��Ά5W��  ��f^�#�O������EG�8c�Sڰ�;<B.���G:|�Q�ƵK�IA�;�)���O�߫��iO	XP0-��,3qsw+�!����Rz�	�(q3j��������"�2^�W��A:W�\�D��Ui���J%'�i:v��c��t���"2�v����G7�%�%5�7���� O{FFj-M/�	HdR����^��L=�{�~��l���HT4�#�b�wVI����e
y�a����\�
���hl(�D��{i�|[7�H��'i�\�������l��XT}�!/���%���}��̆�F,�,c@�*:��& �_n(�[`�hlHx�C�An��J�N��>4�k���oxhk�p'�]��wV���NG�T��Z����J�����5-���!���-��y���1d���N���jV��'%�^0���;Z@"���LU6�?@�T�C��="�R�h�)�6�ȴ)��,n��Y]�q.M�T��:��rX���j�� �G6��F����.v
( 
q�<9�e G)��-gı����
B�d��s�����a����hW>5uy��U� �_�"�en��/-i�M�/j�Z�M3��E<��n�-q��2zv������sX�&��/�˻�
��؅/���ޕ�Z}oor�}*������+��St�|(��D�%Xż�L�=޸�ꆄ1G��'�*��2_b
]G]yO ����Z���� ���;�N�Z�ձ���XnY�6K��K1�md ��2x�U�D�@_�?/��0YR{=j#���F�læ���<�>��op�"F�����T�gB/�"n��:����O|1�S���&�h��~�8�Z��E*fpc���'���
a ���%se,��(f�NX06��#�*h�f7e	��)��u�=k�c�̆���T8��d[.bGۆ�ԚG������DeTy0�Ԃ��D+�MnN��~t��k��X�B3	��84ys��W�yj�-�� �o<i��r;6��Ap"<�?H��Y����[��Y�Q��G!�C���K�8#��`��!�<&��s�}ɝ]>�^&��XY��Ӭ`�Bc��+��6U�j��˝��sP�� .�Z�����xTy��+p���O)rjgw|z����1e�>�?��q���F�?�A af�"���){i���Å�7vF�}���45�V����,j?3k��9T��ˀg�PyH6�U���Ɍ6�=�i��1G���M����K��|��~}2*Eۦ^����͕X��٭�,bxi������p�U��_���fw�S��	.x��C�5��[L�l��H�;��)�F�Qa�~��{+Yɾ>s��LRg-��U�[�8�M�m8��g�4O�!(.��L��6+�c:�������-�s���޼������X��_j��o�3�� \X s�7�:��iQ���Y��*��Ԥ �2 �d�֩e�;������]��'��{�L}ߌFY���ގ���AE�E�0�^�q��l��ۆ����쉧�%����H���ѐ�g%3�Nox�����|@�H��6#�� Ym$���Yh"Lz�u�X���[@+�:�+B*�D��ɂ��m�����~|ԑ����s�|�4�3.f}0������uZd��Ɠ;�� 1���
���6�gΈ�f�p{���T�0�
ߧ�x�� Z����_��H�H�P�j97��)C��Uݘ�/��WhP���dC u��#C@���?�)����	M���<��M�8
�^���%{��l	[�t��s�r�낭Ъ[t�d�'QE>O�p�WM�CbT� �ެϑ��U�f�! |�y<��π���g�}�>ӧ��ѷv��_o�t4@��$�i��_k�/��<G�������%�3gt��x$Ǝ�j�;��z^q>Z;�7�CPB�1�D
f���N;���u��B*��I��^�*�+�x%�bb�.��4l���G�^�T�o�Y�9���?�IxTi]A����[�X�>VB��8<tҦ�x��,�i;�{|f�@G{�|�ɶm�E�@B� l���nuܑ�G��Y���� �xEK�w*��4�yټ �2���4:�LL2��Ϧ��M�����/�6�,��-)�H9��!�#�zKz�SJR�Ɔ����=��W�]�,��5Bf�ז�b�o�*S}4'환��:�vO�٘�[�8]�<�7�`�����R�������*�5�C8�碘,W��b���VX1z�h���1n PJ̈���l}t��ƕ���v��#\��s�Ax*\�!@�?�Gy�W�dB��P���h�A�����Ű��Ȥ��Ídv�C��O�aS�9�z.b�}1<�?��s�E��	
͙U��
��A�rz�8�=��k]f����-� ����!S^�q3����=�`�v�ȵ��rh�S�4�=�
����qɀh�.� ���5�i�c��vg�Q
n���~��Ω�L5}�tO;6��cpʹ�"L�H��F�&u�3`�������N�F;l�d��ب3_���[�z��^u�6�ܱP���f��ʾ�Db��������|�El���H��0�gA�F,W�Y�ӊ�Z4������%���B?R��G�G���n��u����n��q	��/M�Ӎg���ڶ�c�/�����.�
� ���ݺ�~����Hcu�1�v��jR9�Д��u�9�@j��%��NFX}�I��$ܥc�����.��rI�����:`����/
z���11������R��pX�HVY�I:�*�����w��u�y��FW��|�u�]��T�B�77'k�5Tqs+�H�`�a�Ƚ�]��~�RZ&0u�W�g��)�����u<���u�A�wBM��˝���u'�!�$
-�&�����[���_`P�x.���Ѓ�7�*0�)������D�F��(���Je�|S*յ��O���[:O �}],���@b���MKD�fD�,��������4#R]���e���ؾ��1���ϐ��1�:��$ }�Y�*�!��ς>�z\��
Ž��p��=��֭`�����>^*��?հ'4�����cvl�F_����̘U��Ѵ�|X�$%���*�1=���$D䂿�o\&���J����b��jØ�����`�\t��H|\�qZs���5iv!�@�A@�0����T��>S�(�_�9L��=�#Q����絰6��+��igi�A':5�5vq%��C�m��\&�V�7/���1:$+~�	�3����㥶|QYv���R�w�$$�6xR���2T��������R������Z��P+?���޷Q���W:I�	��d�)�ǴO�4�֛P��9��K�'{;O晴�������9)�9<6� ��ZG���?9xNg�n��뙝@��%��Zrp�J�Ǹ֬^2^�eX�16'�7_Q��R+��#m�����v����"C�	S��>Ej����#�=S+��ŀ/qv6
�4-��qg���S%��JB������.Kj�0��[�p{bC�cS�W$��o�%�:[���k�d�g�N��hdCJ"�q߭˿w��ح�5n=C�)���C�؄5����cv:Ә�מg<)WW�j���c��:;��bw0����A�^�{�� -�|p��l:t�muH���t��o0�ҭ����yG��㍶���2xp���{p���;�J�ǔ�#' �7s7�'�5�$��9j�%�<(Hq�n^�m[���Q4*� 7�m�]\v�����*^M��?������,��.�K�����8EJb��!����9-y�p��C�l[�Ӧ��灉��*m�T�cߧ�o�
��E�����g��c���|�0p\�hd�����n��e+a���^�q�"�~�ݿɢi�;P���7�n��3���	Ҧ�w�����1Tʝc˜�b��u]VB�c�\~����0��=@Ծї�wB���S$��7 G�e]7��ҹT���ྈ�c�(`��I��A��<[�e�v�i�`m0#��iA���(n�X���s2R��}
��^F
ؽ�� ���++s2�j�F��-I
U{��Q�� Pi3ldq����mR�^%��w�%t�T=�`5��Aљ��@5�	���D<��2C���"�aF�j������0J�xaK�͚Ti�B�S�G���,o��~}H�Z�"ꪌ����B"�.c� dM��D������Q�j��I��D6[;R�����֡�1j��}�@�6�V��)=0]�YvQ�eS.lǹdq���oN8���&��TW@ݵ[��2��BƘV,�N�s���s@�`/���ū�|��<�>Ե�(,��#Ճ�k�k<�9￢2,)�LsFPCJ�g��ng�
�:R�^��[�15Pf�O�����@S��]S����`�D����-ɑc��J&0;���O� >3�ǵ~�>�4�rt�� �@�k�B+%od�m������]U	�>I˫���~&�V��@v�J��y7�����ͼ�����_\v������@ە4B	M��IRśk4ȻL�%�O:���o[EJ���`�6&���3��:HV4LD��d٘H H֯�l��6��P?{Ě�{�rSJX�q n�p]�2���������l�2�s�����&]�@�9)m|s>��@����
�d�߈U� X��~�޼=�:�Kq1#�DH�0�I)�{�?W!����?��qCze�'G������G��%���k�b k�OK=�K�BW��t���d���F\�%cL-ä��b�h�{���T�3̒�֋"Y�D|G*IM��_J����K@]�YX�����!���IS�#�[�Z�Ě��=͢��H�xH��Z��l�pD���G_*9QR"��Ƭ���Y���x	5N�h��gӻg\K>��Ws'G9i}�ms��B��a�|�*p[F0z1Up���;���QMʷ��p	���ÌF�k��&�1O"�فdZ���	0���y�C��`��R��C+�-�N���#��yv����/��Aˈ,�����)B��Ʋ���TQ�.�u��oD~B��Sq�(\�A��i�{�E�N%~i?�
;�*��׎��E�7���z'?-Zu���}�`�E��L�&��'F��m�YȮ��Y�M�c�&۾�8dA�����C��l'�(3���S99���9��~�n��VjWF�	���#~G��K��^a$��|?�3o���n���z�S���ñ�:	O�z�  �f�"�a��جy��r�t�h��3�>��aq��jx=c�^5bw�((�6���	W�;Wn�J��Bql�� �kh�2Q��i���ͼ���Y]�����I������Y4ߡ�F�}~w�L�I~C;���b�t����<>�?,c��(�z�URTj�)0@�4��&쎬�0���0� �]}�ck:��>lTe�Ui
��)�O�*Q<�k�o��ѵWY�+J*�����$���Nx%V�x�ɉ;PE�F�Q�����{�D�L�J�!=���考*�r69�Y�L|�u4��jf�Z7��a�N�~~�T�Σ��[e��������C���\;}Z�-3��"�ؙ;>Սڝ�ԭj�2zUP�^�8���à���:cG��	PQo��R��;���⌚�(��|@��+�s��Xr/� U�i�u��8н����K+�J�+.׷�.`���e����g{w"�^��@ǣs�B0�Q�Q�,��ɟ��j�m�2-8$�vXJ	2���o��I�,�)4FP�@�m��Y�̕������O�F@�����ᦚ��h��w��;$�4��BTl��)�]��M҂Ps�po~�^T���2#�ܗK�[��<xg�ҙ�����1�3]�(��1?}#ѷ�fYi;�9ϻj)�+�j��GNKb�����'I���N	�&3lА����[��u�4�����iŻl�k$��)gN/�(��\��%��D�?k!�C6��$~�a��ogmb���*�G�yk��Ρ@���b���A��:��O�1g�!U�����w�����:�{�\lW`�T����?0;�[�g���l�����D�M����wOJ)T��b�Bf�k6wE��s
o6��n��g����7~�7��QSj�؛Ğn��z�`�R7B*@�]��Ɩ��*����L�\/�.�A���'ا�R��������b����8=���/!��~A]ȭ�N���e8�����a���0Z���`��# <i��? =��Y�Ǥ[�������k��I�l��}���z�?�{�� ��Ev@��F��߯A����\�6�1��b���'
v�#_S%6aKr���)r��t�7UK?�ʑ; �+�E#��4�3�v�+4���_Zy��y�Fڲ�<�m�s=��iz�`�jm�6�����@�P9�}B�"�MuzrG���Q'��M��nN+��f\�W�$?�\���G�F��K���N��u�LC��ẃ��_��:���ئ$9-�+�w�����ݑb����EV�����9|�X��KM�2��)��(������t�t�0����Y)�y���=�Юp0<���g���ZM����|\�1�[���F���&l:�'����1��C��g��d�MKk@870�P�7��o�����b)l�
�fC��#M���k��"��|`�����7?#U_����}�=����߼
f����[:;߹*��a�S$Y��{��3��[�{@΅�y�|,t�(�� !@`c�!��d�3
\f	!{�9p���W;�v���ډ��?]�ye΀�#�!�L;��5�cgt��Ӛ�R0��F�Ъ��i���Q\������+0S�H5*�	xV�$��t^(�[G�c��T6%a����{)�5&[��q�fٓ�u>1�����6H6�H+x�p�VW��!�8{Tf�� ���+�"���/)(?X-�'�y�����e�$5&�U��d\|��.�?$j���K�z�&Z��wK�F(?���[c5.s�U����Y�O��A�"��LG'��X�!�����,�8NT�f�����j�'��A ���N| Gˤ�q,)%��y�aI�7�=���BX��r���?@d�j����*�ڻ����RD�W�Z�^�-��uu]��D���{���r=���[8g_0�#q���yБ��-�#��bA(n��;�̂R`��4�����22��o��N�^Q�ӕ�S\�:��#�-�qaKؗ�{v��g� ��嶑��>(e�����Wr8��J&g��g�{��X� H�T�����6�N�4c7Qր�U=M�*}YPQ�#�I_=��p��ڒ?��Y
�y�]��= �;�[I���}��"wp@��Qn�z��c1`>9Nj=����:m�x8�k�N���y�=q �=����M��SA��v�M��x`yK�P?׀�{�g: P�--LP6E���5�t_��)5ȿ�raS9��麷!ۜ {	N�QxҊ�(�7̖Ƣ:<���)R��~�\-�j@�20�`:w��a~�tS�<k������I�&��Ҫ�3�}��e,�[U�!UG�]DB�N_��'(A��-����3�l�2��2���?��
���⭽O[�?�|�>�kjn;���d�!�8t9��o6��sx����v41��DM��@���$@��^�up������S�Ղ~ҷ�8���n��i�>S3=�9������h�����%�̤V<*����FU��~��2����+j:5���N-�8j�l+O6 ����S�]HF� ����=�n	���6��T�K�$+��:r���gG_-�VԿ��8���	���M<���7XA�N��;�L?1��ǳlV3^�X��	:ޡ	��s3��<�](/�z��3uڛ���C���ƨ|\Zݫ�r�kG�Tc�*G��x�m���k�a�?�C�?�	MT�����ȅ� ��  F �5����|����|���iY�r]�Q�V����^{��h`��d���N�Q �*�wU��Rp��a�K�^�Z{u�z�XI��<�XH,��-s<gЀ��M�I�$2 �
�]�m�h�;��% ԭ�mgq5abU=��x1i���'���iZZ�!�uvh��ԇ9�1~? .p���N�{L�b�BtՆ[O�	Z��i8>���r�� ��>����TA!CÒn���%;�� �'���)�n�͡+��|$�e���6	n�N2�]�.߬f��GL٨gG�B�&���-���e��2ftG
b�����ݗS�� �����e��fc���1U�jJ�"Tc�RsBk�%��ɣxQD0ȬۡBV��x�'ܢ�0�o~C���B@��'g8�P��?WC82���u��O�2x�W{-6,�a��7��8�c�����X��u
^�1ZS����@�rI7���ZZ�'������[�^�sH��~��Y�����
`ef��9�Ҋ w�C��1Ev���s�K��_�h���V�W�s.�"u���c:�H[e�����@��2i���X&`x��o�����|�
�M�p����������$�T�]}���/�U� ������N�&@Ӟ���^ωY����0����G���_Ru=�j��^{��X�k�̄T���n�weċ���mFȇ���%�ք�q�ץ4������+�Y(|���Q��++�UM�b�xi�3*�8z6M�a�E������{�3���i�f3��O�����Fb5҇~ �D �LV h I�I fi�U�ȕ�;?�g��}g)�B��|��6s5��'�`_����ت�
�p"E*�E� p.��aA���ϸ9a�o �$����h��b��Aƣ_�}K�����G��=�ag��Gfd�m��+�28���#ʤI�C���\�Tr����Ѻ/y�Z����(�(�=ժ�Eϋks�H$Q&�gI�+�[�t�F��A�?�L�svɤ�����qR��y#=V�
��0�}�Q��n���a�Ab�Z)�[�[gAk�����Pw�qa�lh�/�O�=�$��fr��O��s�VC1�.�w��B6��!fJ|�GC����}���fy�#}3=I����B���6f5��<1K��S����4�[�Э'��͍U /e'^�J;�Z��?J/�5i�\�'jt����d�p�l�4�:,�Ocz#Q�S�8��d
�\�%;����o�ޭ�z�w�Ԃ�f 㣝z��2t�luA�`SL���L�ɹUΪ����'�s�w��s~"��2�Z�0���	G+�h;��C\�������3�@�5�U���c@��NLP��0���zĭf�8粺����MŨEy���e�J`o�&��Ш�>�[Q�.���p]�h�?߷%	�+Ό@���
Cg��B�Brp�r���r��C���a��wSlG�ڌT����˄\`�eҝ�/�1�p��20u͕lS�V��g*п8��H�X�&b<O���Gh
�Q�����Ћ4����{-O�ܗR/w�#�(�Ŵ�`�����O�n�?���5h�s��F�Є��5�/�_��D���ݔhf?�:&y��C�( ���g���������=��_�Ċ<T�Ҁ�$���3T�e���0J(
Ɨ��=�Gy�d��@��] z4d�MXB�_��DTn�*�!��(4_�FHj�3\�EwӦ��N��?�K`i5���5(���'����3Y���F> h*2��k �bW�oޫV�J�w���ͳ�� {���a��	���#B�,v�����iX��t�WBI�%Š@`����G���f�E~5�-���Z	�n�������N�Ƥ3J�f�cd"��{���+l���ӳY`S��L6��G�#�M�.��5h;#צ��@���c>����'X��	$�^��4��D%�}Sd?���j�<���c��w�'A��7Tn�>���SM	��T�C�U�_��ԓ�JA$��Y����N<^)�[�����t�g��F�n?J��=w����Ғ`(���d���ۛ?ޢNo<gd/B���e]��U�\��v���0[TkO��uTJ�:�mà�~K����3�A��'�a+R��06����hv��&�}	9��BK�:�G���j���7�j"_�&��]����ܤ?J�6������������~4�d�����D#}5���<(��RL�b4��a�/�??��ez@
W�wn9B��ɬ)i������
��G47�?�M�|��7���ţH�C�����;�U��{bi��y�P�k!�8�`2����0l�����5� ps�n���\�DVո���e,a���a#��g��Z�\? ��iAUz��Ӧ~x7��T@�O`Y (=�}^
g}
�8��>���7}���-j��/�"�,��Fb���g�9Ȫ����A�x����8�ذ����$c�Gො��:\�&"*i%���E�����Q�%me�r>�SԽyU�4�,m�����$3�F ,�%��Ռ���Z��#0�����&��9���
�ױ��M�>j����y��f�c�R�>�����b�Q���Kz�N%�߫8g߮D��G��:�v~6**�F���K��=!L�dp��M���G�w�HH.b�4��Β	�����#Х/%�9$��e��r���<�
�����:�Le��k$^�����5�� �ػ�l� �.=� ߳�M�{TaB�T����4�n�Wg�Ve�Gy���b���mG>�x2�7��0CL*�b1��Ý�]�cqo�;06� %L���w�eb�5�R�7������� WY�G�92L�O�$O�:H�wjC�B	�=����N>���K)�%�A~YQ�	�ȷ�m�d�Q�tR �5�c6�u]wa�� ;�M��S�����:�a>�+�Ag���Q�P&:�-����.�� � <���R��͕OC�N���6ӻ��4ع���[���x�������~i��;�������U=!vG��F4����� �?���v\yD�WMI��_���el�k7��������#"���B�ܝ%P?EU�tY�S+,(�}TB��.�6��� LKe�~�g��(����}�C^-\�5�S���95�k�~�Qb=����f� ��2�~a��=�?uB�d���A�1MDq)6�rm��vdCb�ѻA`ʫ)_�&],]V��tխ�ڦ#").��y�{��h�x9��7����j'�wٜ0�&���5��y�K�b���V�rnW	�`��o������_S>kʩ��,�a
��i���K�CRLV�N��,��=X .���!=dH��>*�oY�j��4
��7~���@��.4�M�[�L�+�#�Gq��*ˈ7����ݦ��[�w��t�p.�I�]TA��l�v��}i ��v�y��t �Kh���iT8-F�Or���Y�L�C�mV}n�m=u��	U���i���;.!%�`�r����,p�꽔>B�����|8}f:dt���G/��艡�셷-�V+�Y���el������ÿ ��R)���|�6���Ńꅷp���t$�\M�<:�im���ɕ��p,p�Fy�+]��릥=ʟqO����ɕ���cfUI���?����~yG%�2���^��K�c�P�ΐ��1�A��8�NqaJ�ω��t��_򺌟�?����կ�~øC��
�,|�iE-�Q�l}�A���J�0��o�B��r&L	Vs2yՙ4稯2�#b�n�^O�k̂�&5Q�2�ިӰ>ш"��V89.�?�}&�������k��"�eo;�U���
���+��qT@�z)��Z�����4o��pF4(�2WcV/�?&��p �w���=��*;Y�N�M�3��#'�f}���%r��z��}������_b�L���e@%���rS�^ 7�p~==x���\���?�K��pg��-qgK��6�%���"�]ǹ��QPQ&�[��)D���>XvB�"�u�Y����ScN����ݒ7��}��������{�Q��^�֣\R� �ڝ���UK�&ha����e͓N=�jJ��2|�ʍ.�#��-���Nr:>n���Tb�3�Y�fC|��P�
�~u�$0�^��<��L�ϒF� �0\K8Ԙ�}R�����˝C`=� b`c/F�9l�\ri_�����q�1��(BO�F�Ӭ�)Rek�=�L���l�|I�dw�^�$��b\D���A���%�;L@�eO�h�J9ds0=RBJϑ~��W�޿�KCe8ٕ�W{g��|�C�hʓ ��ྟ=A�u6��j\���?�Oe[hP��/L�^!�������KZ�7����1ʚ��d�w%����F��1�TJU#>_�% m��j�� ������F~�g��a����63|	
�4+��U����9��`X�7�t�Z�e��2�m�����]2�UP�x끋�CG�8�ΩW�c8_I0� �΋��^�2�A�%3�K8��3ۘc�פhE��9�d&��w���f �)ȂWL�&��������$�|�`���T�Xr�2O�f8l���9��s[Ad�x��q�1M����ۘ���eA8Uł�μ�k��}g#�J�j47����T��_":����̆��H��̇�R���R����.�vxT��%��8&����`���·���,-���(x_96{2n&���]��᤯D�6;P<k��X��x^lW]�c�3��C�S�+i�7��#�Z*T������!)�
!�lu��ݨ���(9:�S�QPy��૙_ ����/@����_��-�K���<�R��ez9��P�=(��q����f�gیcr 9�l�o�E�����k'x��|�y?d	?n%n�y�H���3��z0rt���N#)x��¯_Wأ̘�$��^�� 	�Ht�V �!|�^���[^ �蛓d!���Z���P���($��lZ۹
b0Ru�n���.��9?h}lb���U8�i
�j�Ra�m����[@ߢA n_|� h��)�cq�lf�n� 䞷�#���aE�����iR��e��D��;�/��������� �y,�	y�#tn���q�9搏�!ť\��0 ��g�
��]��2������W��?�na�k�]�Zާ�W�Ǜ�0%{�p�an{�s�� �ħ	L �]l|I�n\Y�B��h=#��_�@��ʥ��y#��m���%X8J8�[��l�?����Io��銘uo_�ޮ���hŹ�����GSۣu�qb�C��L� ��isn�eRf���/X�Q_<a)�1м��#X��e�����p�J�	6^-��NM�Z�!���k�|i�[�hP#�y�jc��Ia�<kUd�je��K�fl]$��|�1�,?��o��7�-gIA�0l,!�r�� ��c�zwY͑D��t���=�4� X1�͉.nRV����M��$��{��k����o�A}�C�p��k��&�������_�p������2T���@-+!�1��+�e�(��\ˊ�i�'��2� CnT9<)/����-�l����6��9�,�\W����#�V��rd��-~�Y���I��;o8]z��8[���$ؙ>e!��Wh� }4�kZ���V�%�k5���a�X/�����FPu1��}���w�*��K0�?��x��ΡK1�cV���ǑB1 y����8rNo�	[Na�v� w��s��,? `�A���� ���X>��5?E8$?��V�[��.��j��ݞC�l������tP�����\�(M>3mtΣi�T��G E���D�7J�*{ޚ���v��s�n�\�3�l|BH�_y/M�3@tvR��1�|���\�>2Z3W��/��!uB�5�K"kg�9a�'���l��6�幪X�tZ��[�D��,���@HCұ�IdE?A:nhe=�.���X_6���ś�n�F�4IЙ	ڱ�W�Q��ϟOs��-S<��ڗ���_�
� Rk�'o'v
�M@�Z�p��1Z͓P��8�v�ST�8��J��,�F�.���o��3kj���T���yƾ�>�KE`�,�w�t�H����:&lL�2�7��E��ݒ���)�gmd���C��~�Hz���EA:��R�E���nvo���R���z>Kt��_�f����2�M #��-;qۮ�ޔI�M�s�a)ʶ�M?ةWr��趚��UC�Ħ�gUbV�"2��O��3����[{Nh1U��P8>�[�Kh�xd�Hȱ���X�|&?xD���wqDG� 0/��bzJڏ���ez �`qC�P5�aj��@��w�[r}���(s!W��NZZ���Յ�0 �t����rt'E�]{́�h��mA�r���,�`Z<�����ȸԈIF	nPoڡV�և��/�����ͅbç؁�ɫ��Oƹ5�c�,��4]<L�jČ$^��A�� ��Ac�8̀�j?<9 �m�d�7�C_z��X��Q,0!�RQ�̰���qT \����r����U���Q�d��n��᡿w�Й9
��*%��ꭙ2���B~��(�P?�c��@43�X�øݰ�`~��kv�<���7��9_��]�R�5��>�I!�������r�,��]�`|�E�ߩZF&}WXW�a�YS]��&�t���vp���c��*v�)<���Cg���Y�\��B(�)��uY�w�2hA���̷l7ǽi�\��\��䊞{Z^#���f_��Z@�r��5o��^�oa�35e���-� ���6�K>��c.`����V�j9�u
؟U7�y,�Z��\��o�2�+t�Y?�#_���S����L�ʎ4+�V���ߏ!M&��ҏ<�s���(��G�A��ﰫ���3�}��m��$"/��~ ��կ�q��C���Pi���Ƣ_B��辸�38>q.��GC_[F���!����}5s%V��PE��a�	Fn��n��,7����C���?>B;���5�}���7��"a�oaN�-��bY��� w�,��o�����A��E�:��� h[*�Ĕi�?��,��F��U��F�Q�L�|��K���k<��$��ٔS!	,�`�ڔeE��'LW5����!SF��⠵F﷤��)�W�M��$@Р�-����J�fU��R�7SڵB�I�jT�uD�}�hN��&�I�߯�
�������(z�ܵ��~���=���!����<FԢ�0����a��(i�����B��zh�,9Q
c���	��R�y�h�#�7Cgr_�ڗ�FF��)�AO���	V���6�(��ev(n�]v��!��	:K}7]g��jT>�ڴ��<��Ȳt��mM�q��#�.�+�5a^�L�T
 ~<z>m�`I�c���9o���-,Ⴕ��
�u�U�r��AQ����\c�n�a���A�k�<�T�ة}�I'y��z��ܮޠ2p�U�w-K%�q�x4���(hPN%*�r�W�"��� �Q��N�3}�����O�2�"jD(z� 7{2�P�يo��P
�J%�є�2s�.��np�Mŕv�	#�'��+�6*�Nۈ�ʙ�����#�_��3��5�٨T��{��89�!�z��5ѽL|D{_��s�w�@�API˶
�7�*�1�>��i�g�U�}�.K�c+:�.�W>5�6_{�g��Ǡv�3����i#��P�>�{:euZIX3Aw�~} O�ܕ\ _[�l��5�<_�u�-� ��VVj2�-�Gr���a5c<�Y���䅹����f��X 5(Mn�?�
�()9�C�zL��4p�s$�EV\�'�o�� ��WZ�d~��jR����~����ޫ�Ý����*�9��B=�a1�b��53�D�>J���5���'���%t�kzo�L,��"�& �A�iq#��΅�Mt
��6YZ9h3J�9�ΊU��o65?~7��2�cA��Be8�չ��f��8z��ϟ�(�~a	#mN�ۛҮ�y�ƥ����{I��o�P���k}OK+)�l�A���9�ߑN���5��3�hT�C?`�i����ҢPb�����R՟������*��O�!{D6J��lїp`��2�)i��c� �� ��Q��=����5ܶ[p~6� ���ۅ�kA �v�.;$�!J����\�U91�*�&g�t�6���9�u�AB@� 5=~l݊a��u|s��(v2E{�wF�Q��?aB:�����st�@͂B�[����M(K�ā��YNV�]��B�' �QZ8VTe��D�Y���H��2��hDN�pp��PuX���D���z����q|
�aU�'���ZA|
��H���<0P9��s����T��������" *B]�b�+�+�\iɓ�|ȵFf������YA E
@��C�4kT�i�R3A�����c���,y���$�|�@�%1�+9�;F i�jT��J��o�p;�vK��ўtkJ�������RL�������d�w��c΅���@������Tm��-`G?��@��{G�6��J�A�C�7�t�.j���Ӎ��$���W�1#������&�Gk")]�B�D��K�w6Ѵ�:��E:�Bfp}���wl� �6P��ϼ~�7˄��jB�ReJ�����}����Jڞ}�����9���:wc�#.&&@�ĸ������ZWr���0D���Xl�K��x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=31e339ab9e8c7f922798660d86ac3f4216d4b8dc.end