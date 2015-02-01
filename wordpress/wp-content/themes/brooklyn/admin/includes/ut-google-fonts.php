<?php

if ( ! function_exists( 'ut_recognized_google_fonts' ) ) {
  
  	function ut_recognized_google_fonts( $field_id = '' ) {

		$google_fonts = array (
            0 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'ABeeZee',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/abeezee/v3/mE5BOuZKGln_Ex0uYKpIaw.ttf',
                'italic' => 'http://fonts.gstatic.com/s/abeezee/v3/kpplLynmYgP0YtlJA3atRw.ttf',
              ),
            ),
            1 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Abel',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/abel/v5/RpUKfqNxoyNe_ka23bzQ2A.ttf',
              ),
            ),
            2 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Abril Fatface',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/abrilfatface/v7/X1g_KwGeBV3ajZIXQ9VnDojjx0o0jr6fNXxPgYh_a8Q.ttf',
              ),
            ),
            3 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Aclonica',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/aclonica/v5/M6pHZMPwK3DiBSlo3jwAKQ.ttf',
              ),
            ),
            4 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Acme',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/acme/v4/-J6XNtAHPZBEbsifCdBt-g.ttf',
              ),
            ),
            5 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Actor',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/actor/v5/ugMf40CrRK6Jf6Yz_xNSmQ.ttf',
              ),
            ),
            6 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Adamina',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/adamina/v6/RUQfOodOMiVVYqFZcSlT9w.ttf',
              ),
            ),
            7 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Advent Pro',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '100',
                1 => '200',
                2 => '300',
                3 => 'regular',
                4 => '500',
                5 => '600',
                6 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
                2 => 'greek',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                100 => 'http://fonts.gstatic.com/s/adventpro/v3/87-JOpSUecTG50PBYK4ysi3USBnSvpkopQaUR-2r7iU.ttf',
                200 => 'http://fonts.gstatic.com/s/adventpro/v3/URTSSjIp0Wr-GrjxFdFWnGeudeTO44zf-ht3k-KNzwg.ttf',
                300 => 'http://fonts.gstatic.com/s/adventpro/v3/sJaBfJYSFgoB80OL1_66m0eOrDcLawS7-ssYqLr2Xp4.ttf',
                'regular' => 'http://fonts.gstatic.com/s/adventpro/v3/1NxMBeKVcNNH2H46AUR3wfesZW2xOQ-xsNqO47m55DA.ttf',
                500 => 'http://fonts.gstatic.com/s/adventpro/v3/7kBth2-rT8tP40RmMMXMLJp-63r6doWhTEbsfBIRJ7A.ttf',
                600 => 'http://fonts.gstatic.com/s/adventpro/v3/3Jo-2maCzv2QLzQBzaKHV_pTEJqju4Hz1txDWij77d4.ttf',
                700 => 'http://fonts.gstatic.com/s/adventpro/v3/M4I6QiICt-ey_wZTpR2gKwJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            8 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Aguafina Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/aguafinascript/v4/65g7cgMtMGnNlNyq_Z6CvMxLhO8OSNnfAp53LK1_iRs.ttf',
              ),
            ),
            9 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Akronim',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/akronim/v4/qA0L2CSArk3tuOWE1AR1DA.ttf',
              ),
            ),
            10 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Aladin',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/aladin/v4/PyuJ5cVHkduO0j5fAMKvAA.ttf',
              ),
            ),
            11 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Aldrich',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/aldrich/v5/kMMW1S56gFx7RP_mW1g-Eg.ttf',
              ),
            ),
            12 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alef',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/alef/v3/ENvZ_P0HBDQxNZYCQO0lUA.ttf',
                700 => 'http://fonts.gstatic.com/s/alef/v3/VDgZJhEwudtOzOFQpZ8MEA.ttf',
              ),
            ),
            13 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alegreya',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
                4 => '900',
                5 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/alegreya/v6/62J3atXd6bvMU4qO_ca-eA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/alegreya/v6/cbshnQGxwmlHBjUil7DaIfesZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/alegreya/v6/5oZtdI5-wQwgAFrd9erCsaCWcynf_cDxXwCLxiixG1c.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/alegreya/v6/IWi8e5bpnqhMRsZKTcTUWgJKKGfqHaYFsRG-T3ceEVo.ttf',
                900 => 'http://fonts.gstatic.com/s/alegreya/v6/oQeMxX-vxGImzDgX6nxA7KCWcynf_cDxXwCLxiixG1c.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/alegreya/v6/-L71QLH_XqgYWaI1GbOVhp0EAVxt0G0biEntp43Qt6E.ttf',
              ),
            ),
            14 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alegreya SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
                4 => '900',
                5 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/alegreyasc/v5/3ozeFnTbygMK6PfHh8B-iqCWcynf_cDxXwCLxiixG1c.ttf',
                'italic' => 'http://fonts.gstatic.com/s/alegreyasc/v5/GOqmv3FLsJ2r6ZALMZVBmkeOrDcLawS7-ssYqLr2Xp4.ttf',
                700 => 'http://fonts.gstatic.com/s/alegreyasc/v5/M9OIREoxDkvynwTpBAYUq3e1Pd76Vl7zRpE7NLJQ7XU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/alegreyasc/v5/5PCoU7IUfCicpKBJtBmP6c_zJjSACmk0BRPxQqhnNLU.ttf',
                900 => 'http://fonts.gstatic.com/s/alegreyasc/v5/M9OIREoxDkvynwTpBAYUqyenaqEuufTBk9XMKnKmgDA.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/alegreyasc/v5/5PCoU7IUfCicpKBJtBmP6U_yTOUGsoC54csJe1b-IRw.ttf',
              ),
            ),
            15 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alegreya Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '100',
                1 => '100italic',
                2 => '300',
                3 => '300italic',
                4 => 'regular',
                5 => 'italic',
                6 => '500',
                7 => '500italic',
                8 => '700',
                9 => '700italic',
                10 => '800',
                11 => '800italic',
                12 => '900',
                13 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'vietnamese',
                2 => 'latin',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                100 => 'http://fonts.gstatic.com/s/alegreyasans/v2/TKyx_-JJ6MdpQruNk-t-PJFGFO4uyVFMfB6LZsii7kI.ttf',
                '100italic' => 'http://fonts.gstatic.com/s/alegreyasans/v2/gRkSP2lBpqoMTVxg7DmVn2cDnjsrnI9_xJ-5gnBaHsE.ttf',
                300 => 'http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9acB1LjARzAvdqa1uQC32v70.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9CnfqlVoxTUFFx1C8tBqmbcg.ttf',
                'regular' => 'http://fonts.gstatic.com/s/alegreyasans/v2/KYNzioYhDai7mTMnx_gDgn8f0n03UdmQgF_CLvNR2vg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/alegreyasans/v2/TKyx_-JJ6MdpQruNk-t-PD4G9C9ttb0Oz5Cvf0qOitE.ttf',
                500 => 'http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9aQqQmZ7VjhwksfpNVG0pqGc.ttf',
                '500italic' => 'http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9Cs7DCVO6wo6i5LKIyZDzK40.ttf',
                700 => 'http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9aVCbmAUID8LN-q3pJpOk3Ys.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9CpF66r9C4AnxxlBlGd7xY4g.ttf',
                800 => 'http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9acxnD5BewVtRRHHljCwR2bM.ttf',
                '800italic' => 'http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9CicOAJ_9MkLPbDmrtXDPbIU.ttf',
                900 => 'http://fonts.gstatic.com/s/alegreyasans/v2/11EDm-lum6tskJMBbdy9aW42xlVP-j5dagE7-AU2zwg.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/alegreyasans/v2/WfiXipsmjqRqsDBQ1bA9ChRaDUI9aE8-k7PrIG2iiuo.ttf',
              ),
            ),
            16 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alegreya Sans SC',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '100',
                1 => '100italic',
                2 => '300',
                3 => '300italic',
                4 => 'regular',
                5 => 'italic',
                6 => '500',
                7 => '500italic',
                8 => '700',
                9 => '700italic',
                10 => '800',
                11 => '800italic',
                12 => '900',
                13 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'vietnamese',
                2 => 'latin',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                100 => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/trwFkDJLOJf6hqM93944kVnzStfdnFU-MXbO84aBs_M.ttf',
                '100italic' => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/qG3gA9iy5RpXMH4crZboqqakMVR0XlJhO7VdJ8yYvA4.ttf',
                300 => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR46-1IqtfxJspFjzJp0SaQRcI.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0CnTKaH808trtzttbEg4yVA.ttf',
                'regular' => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/6kgb6ZvOagoVIRZyl8XV-EklWX-XdLVn1WTiuGuvKIU.ttf',
                'italic' => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/trwFkDJLOJf6hqM93944kTfqo69HNOlCNZvbwAmUtiA.ttf',
                500 => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR46_hHTluI57wqxl55RvSYo3s.ttf',
                '500italic' => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0NqVvxKdFVwqwzilqfVd39U.ttf',
                700 => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR4600aId5t1FC-xZ8nmpa_XLk.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0IBYn3VD6xMEnodOh8pnFw4.ttf',
                800 => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR46wQgSHD3Lo1Mif2Wkk5swWA.ttf',
                '800italic' => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0HStmCm6Rs90XeztCALm0H8.ttf',
                900 => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/AjAmkoP1y0Vaad0UPPR461Rf9EWUSEX_PR1d_gLKfpM.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/alegreyasanssc/v2/0VweK-TO3aQgazdxg8fs0IvtwEfTCJoOJugANj-jWDI.ttf',
              ),
            ),
            17 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alex Brush',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/alexbrush/v5/ooh3KJFbKJSUoIRWfiu8o_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            18 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alfa Slab One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/alfaslabone/v4/Qx6FPcitRwTC_k88tLPc-Yjjx0o0jr6fNXxPgYh_a8Q.ttf',
              ),
            ),
            19 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alice',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/alice/v6/wZTAfivekBqIg-rk63nFvQ.ttf',
              ),
            ),
            20 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alike',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/alike/v6/Ho8YpRKNk_202fwDiGNIyw.ttf',
              ),
            ),
            21 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Alike Angular',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/alikeangular/v5/OpeCu4xxI3qO1C7CZcJtPT3XH2uEnVI__ynTBvNyki8.ttf',
              ),
            ),
            22 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Allan',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/allan/v6/T3lemhgZmLQkQI2Qc2bQHA.ttf',
                700 => 'http://fonts.gstatic.com/s/allan/v6/zSxQiwo7wgnr7KkMXhSiag.ttf',
              ),
            ),
            23 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Allerta',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/allerta/v6/s9FOEuiJFTNbMe06ifzV8g.ttf',
              ),
            ),
            24 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Allerta Stencil',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/allertastencil/v6/CdSZfRtHbQrBohqmzSdDYFf2eT4jUldwg_9fgfY_tHc.ttf',
              ),
            ),
            25 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Allura',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/allura/v3/4hcqgZanyuJ2gMYWffIR6A.ttf',
              ),
            ),
            26 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Almendra',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/almendra/v7/PDpbB-ZF7deXAAEYPkQOeg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/almendra/v7/CNWLyiDucqVKVgr4EMidi_esZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/almendra/v7/ZpLdQMj7Q2AFio4nNO6A76CWcynf_cDxXwCLxiixG1c.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/almendra/v7/-tXHKMcnn6FqrhJV3l1e3QJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            27 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Almendra Display',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/almendradisplay/v5/2Zuu97WJ_ez-87yz5Ai8fF6uyC_qD11hrFQ6EGgTJWI.ttf',
              ),
            ),
            28 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Almendra SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/almendrasc/v5/IuiLd8Fm9I6raSalxMoWeaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            29 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Amarante',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/amarante/v3/2dQHjIBWSpydit5zkJZnOw.ttf',
              ),
            ),
            30 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Amaranth',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/amaranth/v5/7VcBog22JBHsHXHdnnycTA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/amaranth/v5/UrJlRY9LcVERJSvggsdBqPesZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/amaranth/v5/j5OFHqadfxyLnQRxFeox6qCWcynf_cDxXwCLxiixG1c.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/amaranth/v5/BHyuYFj9nqLFNvOvGh0xTwJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            31 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Amatic SC',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/amaticsc/v5/MldbRWLFytvqxU1y81xSVg.ttf',
                700 => 'http://fonts.gstatic.com/s/amaticsc/v5/IDnkRTPGcrSVo50UyYNK7y3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            32 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Amethysta',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/amethysta/v3/1jEo9tOFIJDolAUpBnWbnA.ttf',
              ),
            ),
            33 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Anaheim',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/anaheim/v3/t-z8aXHMpgI2gjN_rIflKA.ttf',
              ),
            ),
            34 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Andada',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/andada/v6/rSFaDqNNQBRw3y19MB5Y4w.ttf',
              ),
            ),
            35 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Andika',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-29',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/andika/v5/oe-ag1G0lcqZ3IXfeEgaGg.ttf',
              ),
            ),
            36 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Angkor',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/angkor/v7/DLpLgIS-8F10ecwKqCm95Q.ttf',
              ),
            ),
            37 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Annie Use Your Telescope',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/annieuseyourtelescope/v5/2cuiO5VmaR09C8SLGEQjGqbp7mtG8sPlcZvOaO8HBak.ttf',
              ),
            ),
            38 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Anonymous Pro',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'cyrillic-ext',
                3 => 'cyrillic',
                4 => 'latin',
                5 => 'greek',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-29',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/anonymouspro/v7/Zhfjj_gat3waL4JSju74E-V_5zh5b-_HiooIRUBwn1A.ttf',
                'italic' => 'http://fonts.gstatic.com/s/anonymouspro/v7/q0u6LFHwttnT_69euiDbWKwIsuKDCXG0NQm7BvAgx-c.ttf',
                700 => 'http://fonts.gstatic.com/s/anonymouspro/v7/WDf5lZYgdmmKhO8E1AQud--Cz_5MeePnXDAcLNWyBME.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/anonymouspro/v7/_fVr_XGln-cetWSUc-JpfA1LL9bfs7wyIp6F8OC9RxA.ttf',
              ),
            ),
            39 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Antic',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/antic/v6/hEa8XCNM7tXGzD0Uk0AipA.ttf',
              ),
            ),
            40 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Antic Didone',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/anticdidone/v3/r3nJcTDuOluOL6LGDV1vRy3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            41 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Antic Slab',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/anticslab/v3/PSbJCTKkAS7skPdkd7AKEvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            42 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Anton',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/anton/v5/XIbCenm-W0IRHWYIh7CGUQ.ttf',
              ),
            ),
            43 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Arapey',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/arapey/v4/dqu823lrSYn8T2gApTdslA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/arapey/v4/pY-Xi5JNBpaWxy2tZhEm5A.ttf',
              ),
            ),
            44 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Arbutus',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/arbutus/v4/Go_hurxoUsn5MnqNVQgodQ.ttf',
              ),
            ),
            45 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Arbutus Slab',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/arbutusslab/v3/6k3Yp6iS9l4jRIpynA8qMy3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            46 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Architects Daughter',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/architectsdaughter/v5/RXTgOOQ9AAtaVOHxx0IUBMCy0EhZjHzu-y0e6uLf4Fg.ttf',
              ),
            ),
            47 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Archivo Black',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/archivoblack/v3/WoAoVT7K3k7hHfxKbvB6B51XQG8isOYYJhPIYAyrESQ.ttf',
              ),
            ),
            48 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Archivo Narrow',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/archivonarrow/v4/DsLzC9scoPnrGiwYYMQXppTvAuddT2xDMbdz0mdLyZY.ttf',
                'italic' => 'http://fonts.gstatic.com/s/archivonarrow/v4/vqsrtPCpTU3tJlKfuXP5zUpmlyBQEFfdE6dERLXdQGQ.ttf',
                700 => 'http://fonts.gstatic.com/s/archivonarrow/v4/M__Wu4PAmHf4YZvQM8tWsMLtdzs3iyjn_YuT226ZsLU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/archivonarrow/v4/wG6O733y5zHl4EKCOh8rSTg5KB8MNJ4uPAETq9naQO8.ttf',
              ),
            ),
            49 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Arimo',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'greek',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-14',
              'files' => 
              array (
                'regular' => 'http://themes.googleusercontent.com/static/fonts/arimo/v6/Gpeo80g-5ji2CcyXWnzh7g.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/arimo/v6/_OdGbnX2-qQ96C4OjhyuPw.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/arimo/v6/ZItXugREyvV9LnbY_gxAmw.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/arimo/v6/__nOLWqmeXdhfr0g7GaFePesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            50 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Arizonia',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/arizonia/v5/yzJqkHZqryZBTM7RKYV9Wg.ttf',
              ),
            ),
            51 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Armata',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/armata/v5/1H8FwGgIRrbYtxSfXhOHlQ.ttf',
              ),
            ),
            52 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Artifika',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/artifika/v5/Ekfp4H4QG7D-WsABDOyj8g.ttf',
              ),
            ),
            53 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Arvo',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/arvo/v7/vvWPwz-PlZEwjOOIKqoZzA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/arvo/v7/id5a4BCjbenl5Gkqonw_Rw.ttf',
                700 => 'http://fonts.gstatic.com/s/arvo/v7/OB3FDST7U38u3OjPK_vvRQ.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/arvo/v7/Hvl2MuWoXLaCy2v6MD4Yvw.ttf',
              ),
            ),
            54 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Asap',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/asap/v3/2lf-1MDR8tsTpEtvJmr2hA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/asap/v3/mwxNHf8QS8gNWCAMwkJNIg.ttf',
                700 => 'http://fonts.gstatic.com/s/asap/v3/o5RUA7SsJ80M8oDFBnrDbg.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/asap/v3/_rZz9y2oXc09jT5T6BexLQ.ttf',
              ),
            ),
            55 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Asset',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/asset/v5/hfPmqY-JzuR1lULlQf9iTg.ttf',
              ),
            ),
            56 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Astloch',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/astloch/v5/fmbitVmHYLQP7MGPuFgpag.ttf',
                700 => 'http://fonts.gstatic.com/s/astloch/v5/aPkhM2tL-tz1jX6aX2rvo_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            57 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Asul',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/asul/v4/9qpsNR_OOwyOYyo2N0IbBw.ttf',
                700 => 'http://fonts.gstatic.com/s/asul/v4/uO8uNmxaq87-DdPmkEg5Gg.ttf',
              ),
            ),
            58 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Atomic Age',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/atomicage/v5/WvBMe4FxANIKpo6Oi0mVJ_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            59 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Aubrey',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/aubrey/v7/zo9w8klO8bmOQIMajQ2aTA.ttf',
              ),
            ),
            60 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Audiowide',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/audiowide/v3/yGcwRZB6VmoYhPUYT-mEow.ttf',
              ),
            ),
            61 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Autour One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/autourone/v3/2xmQBcg7FN72jaQRFZPIDvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            62 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Average',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/average/v3/aHUibBqdDbVYl5FM48pxyQ.ttf',
              ),
            ),
            63 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Average Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/averagesans/v3/dnU3R-5A_43y5bIyLztPsS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            64 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Averia Gruesa Libre',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/averiagruesalibre/v3/10vbZTOoN6T8D-nvDzwRFyXcKHuZXlCN8VkWHpkUzKM.ttf',
              ),
            ),
            65 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Averia Libre',
              'category' => 'display',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
                4 => '700',
                5 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/averialibre/v3/r6hGL8sSLm4dTzOPXgx5XacQoVhARpoaILP7amxE_8g.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/averialibre/v3/I6wAYuAvOgT7el2ePj2nkina0FLWfcB-J_SAYmcAXaI.ttf',
                'regular' => 'http://fonts.gstatic.com/s/averialibre/v3/rYVgHZZQICWnhjguGsBspC3USBnSvpkopQaUR-2r7iU.ttf',
                'italic' => 'http://fonts.gstatic.com/s/averialibre/v3/1etzuoNxVHR8F533EkD1WfMZXuCXbOrAvx5R0IT5Oyo.ttf',
                700 => 'http://fonts.gstatic.com/s/averialibre/v3/r6hGL8sSLm4dTzOPXgx5XUD2ttfZwueP-QU272T9-k4.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/averialibre/v3/I6wAYuAvOgT7el2ePj2nkvAs9-1nE9qOqhChW0m4nDE.ttf',
              ),
            ),
            66 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Averia Sans Libre',
              'category' => 'display',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
                4 => '700',
                5 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/averiasanslibre/v3/_9-jTfQjaBsWAF_yp5z-V4CP_KG_g80s1KXiBtJHoNc.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/averiasanslibre/v3/o7BEIK-fG3Ykc5Rzteh88YuyGu4JqttndUh4gRKxic0.ttf',
                'regular' => 'http://fonts.gstatic.com/s/averiasanslibre/v3/yRJpjT39KxACO9F31mj_LqV8_KRn4epKAjTFK1s1fsg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/averiasanslibre/v3/COEzR_NPBSUOl3pFwPbPoCZU2HnUZT1xVKaIrHDioao.ttf',
                700 => 'http://fonts.gstatic.com/s/averiasanslibre/v3/_9-jTfQjaBsWAF_yp5z-V8QwVOrz1y5GihpZmtKLhlI.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/averiasanslibre/v3/o7BEIK-fG3Ykc5Rzteh88bXy1DXgmJcVtKjM5UWamMs.ttf',
              ),
            ),
            67 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Averia Serif Libre',
              'category' => 'display',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
                4 => '700',
                5 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/averiaseriflibre/v4/yvITAdr5D1nlsdFswJAb8SmC4gFJ2PHmfdVKEd_5S9M.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/averiaseriflibre/v4/YOLFXyye4sZt6AZk1QybCG2okl0bU63CauowU4iApig.ttf',
                'regular' => 'http://fonts.gstatic.com/s/averiaseriflibre/v4/fdtF30xa_Erw0zAzOoG4BZqY66i8AUyI16fGqw0iAew.ttf',
                'italic' => 'http://fonts.gstatic.com/s/averiaseriflibre/v4/o9qhvK9iT5iDWfyhQUe-6Ru_b0bTq5iipbJ9hhgHJ6U.ttf',
                700 => 'http://fonts.gstatic.com/s/averiaseriflibre/v4/yvITAdr5D1nlsdFswJAb8Q50KV5TaOVolur4zV2iZsg.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/averiaseriflibre/v4/YOLFXyye4sZt6AZk1QybCNxohRXP4tNDqG3X4Hqn21k.ttf',
              ),
            ),
            68 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bad Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'cyrillic',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/badscript/v4/cRyUs0nJ2eMQFHwBsZNRXfesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            69 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Balthazar',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/balthazar/v4/WgbaSIs6dJAGXJ0qbz2xlw.ttf',
              ),
            ),
            70 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bangers',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bangers/v6/WAffdge5w99Xif-DLeqmcA.ttf',
              ),
            ),
            71 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Basic',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/basic/v4/hNII2mS5Dxw5C0u_m3mXgA.ttf',
              ),
            ),
            72 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Battambang',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/battambang/v8/MzrUfQLefYum5vVGM3EZVPesZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/battambang/v8/dezbRtMzfzAA99DmrCYRMgJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            73 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Baumans',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/baumans/v4/o0bFdPW1H5kd5saqqOcoVg.ttf',
              ),
            ),
            74 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bayon',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bayon/v7/yTubusjTnpNRZwA4_50iVw.ttf',
              ),
            ),
            75 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Belgrano',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/belgrano/v5/iq8DUa2s7g6WRCeMiFrmtQ.ttf',
              ),
            ),
            76 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Belleza',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/belleza/v3/wchA3BWJlVqvIcSeNZyXew.ttf',
              ),
            ),
            77 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'BenchNine',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/benchnine/v3/ah9xtUy9wLQ3qnWa2p-piS3USBnSvpkopQaUR-2r7iU.ttf',
                'regular' => 'http://fonts.gstatic.com/s/benchnine/v3/h3OAlYqU3aOeNkuXgH2Q2w.ttf',
                700 => 'http://fonts.gstatic.com/s/benchnine/v3/qZpi6ZVZg3L2RL_xoBLxWS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            78 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bentham',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bentham/v5/5-Mo8Fe7yg5tzV0GlQIuzQ.ttf',
              ),
            ),
            79 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Berkshire Swash',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/berkshireswash/v3/4RZJjVRPjYnC2939hKCAimKfbtsIjCZP_edQljX9gR0.ttf',
              ),
            ),
            80 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bevan',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bevan/v6/Rtg3zDsCeQiaJ_Qno22OJA.ttf',
              ),
            ),
            81 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bigelow Rules',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bigelowrules/v3/FEJCPLwo07FS-6SK6Al50X8f0n03UdmQgF_CLvNR2vg.ttf',
              ),
            ),
            82 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bigshot One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bigshotone/v5/wSyZjBNTWDQHnvWE2jt6j6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            83 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bilbo',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bilbo/v5/-ty-lPs5H7OIucWbnpFrkA.ttf',
              ),
            ),
            84 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bilbo Swash Caps',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bilboswashcaps/v6/UB_-crLvhx-PwGKW1oosDmYeFSdnSpRYv5h9gpdlD1g.ttf',
              ),
            ),
            85 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bitter',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bitter/v6/w_BNdJvVZDRmqy5aSfB2kQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/bitter/v6/TC0FZEVzXQIGgzmRfKPZbA.ttf',
                700 => 'http://fonts.gstatic.com/s/bitter/v6/4dUtr_4BvHuoRU35suyOAg.ttf',
              ),
            ),
            86 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Black Ops One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/blackopsone/v6/2XW-DmDsGbDLE372KrMW1Yjjx0o0jr6fNXxPgYh_a8Q.ttf',
              ),
            ),
            87 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bokor',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bokor/v7/uAKdo0A85WW23Gs6mcbw7A.ttf',
              ),
            ),
            88 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bonbon',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bonbon/v5/IW3u1yzG1knyW5oz0s9_6Q.ttf',
              ),
            ),
            89 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Boogaloo',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/boogaloo/v5/4Wu1tvFMoB80fSu8qLgQfQ.ttf',
              ),
            ),
            90 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bowlby One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bowlbyone/v6/eKpHjHfjoxM2bX36YNucefesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            91 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bowlby One SC',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bowlbyonesc/v7/8ZkeXftTuzKBtmxOYXoRedDkZCMxWJecxjvKm2f8MJw.ttf',
              ),
            ),
            92 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Brawler',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/brawler/v5/3gfSw6imxQnQxweVITqUrg.ttf',
              ),
            ),
            93 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bree Serif',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/breeserif/v4/5h9crBVIrvZqgf34FHcnEfesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            94 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bubblegum Sans',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bubblegumsans/v4/Y9iTUUNz6lbl6TrvV4iwsytnKWgpfO2iSkLzTz-AABg.ttf',
              ),
            ),
            95 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Bubbler One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/bubblerone/v3/e8S0qevkZAFaBybtt_SU4qCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            96 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Buda',
              'category' => 'display',
              'variants' => 
              array (
                0 => '300',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/buda/v5/hLtAmNUmEMJH2yx7NGUjnA.ttf',
              ),
            ),
            97 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Buenard',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/buenard/v5/NSpMPGKAUgrLrlstYVvIXQ.ttf',
                700 => 'http://fonts.gstatic.com/s/buenard/v5/yUlGE115dGr7O9w9FlP3UvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            98 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Butcherman',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/butcherman/v6/bxiJmD567sPBVpJsT0XR0vesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            99 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Butterfly Kids',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/butterflykids/v3/J4NTF5M25htqeTffYImtlUZaDk62iwTBnbnvwSjZciA.ttf',
              ),
            ),
            100 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cabin',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '500',
                3 => '500italic',
                4 => '600',
                5 => '600italic',
                6 => '700',
                7 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cabin/v6/XeuAFYo2xAPHxZGBbQtHhA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/cabin/v6/0tJ9k3DI5xC4GBgs1E_Jxw.ttf',
                500 => 'http://fonts.gstatic.com/s/cabin/v6/HgsCQ-k3_Z_uQ86aFolNBg.ttf',
                '500italic' => 'http://fonts.gstatic.com/s/cabin/v6/50sjhrGE0njyO-7mGDhGP_esZW2xOQ-xsNqO47m55DA.ttf',
                600 => 'http://fonts.gstatic.com/s/cabin/v6/eUDAvKhBtmTCkeVBsFk34A.ttf',
                '600italic' => 'http://fonts.gstatic.com/s/cabin/v6/sFQpQDBd3G2om0Nl5dD2CvesZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/cabin/v6/4EKhProuY1hq_WCAomq9Dg.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/cabin/v6/K83QKi8MOKLEqj6bgZ7LrfesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            101 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cabin Condensed',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '500',
                2 => '600',
                3 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cabincondensed/v6/B0txb0blf2N29WdYPJjMSiQPsWWoiv__AzYJ9Zzn9II.ttf',
                500 => 'http://fonts.gstatic.com/s/cabincondensed/v6/Ez4zJbsGr2BgXcNUWBVgEARL_-ABKXdjsJSPT0lc2Bk.ttf',
                600 => 'http://fonts.gstatic.com/s/cabincondensed/v6/Ez4zJbsGr2BgXcNUWBVgELS5sSASxc8z4EQTQj7DCAI.ttf',
                700 => 'http://fonts.gstatic.com/s/cabincondensed/v6/Ez4zJbsGr2BgXcNUWBVgEMAWgzcA047xWLixhLCofl8.ttf',
              ),
            ),
            102 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cabin Sketch',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cabinsketch/v7/d9fijO34zQajqQvl3YHRCS3USBnSvpkopQaUR-2r7iU.ttf',
                700 => 'http://fonts.gstatic.com/s/cabinsketch/v7/ki3SSN5HMOO0-IOLOj069ED2ttfZwueP-QU272T9-k4.ttf',
              ),
            ),
            103 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Caesar Dressing',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/caesardressing/v4/2T_WzBgE2Xz3FsyJMq34T9gR43u4FvCuJwIfF5Zxl6Y.ttf',
              ),
            ),
            104 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cagliostro',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cagliostro/v4/i85oXbtdSatNEzss99bpj_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            105 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Calligraffitti',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/calligraffitti/v6/vLVN2Y-z65rVu1R7lWdvyDXz_orj3gX0_NzfmYulrko.ttf',
              ),
            ),
            106 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cambo',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cambo/v4/PnwpRuTdkYCf8qk4ajmNRA.ttf',
              ),
            ),
            107 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Candal',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/candal/v5/x44dDW28zK7GR1gGDBmj9g.ttf',
              ),
            ),
            108 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cantarell',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cantarell/v5/p5ydP_uWQ5lsFzcP_XVMEw.ttf',
                'italic' => 'http://fonts.gstatic.com/s/cantarell/v5/DTCLtOSqP-7dgM-V_xKUjqCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/cantarell/v5/Yir4ZDsCn4g1kWopdg-ehC3USBnSvpkopQaUR-2r7iU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/cantarell/v5/weehrwMeZBXb0QyrWnRwFXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
              ),
            ),
            109 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cantata One',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cantataone/v4/-a5FDvnBqaBMDaGgZYnEfqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            110 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cantora One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cantoraone/v4/oI-DS62RbHI8ZREjp73ehqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            111 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Capriola',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/capriola/v3/JxXPlkdzWwF9Cwelbvi9jA.ttf',
              ),
            ),
            112 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cardo',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'latin',
                3 => 'greek',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cardo/v7/jbkF2_R0FKUEZTq5dwSknQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/cardo/v7/pcv4Np9tUkq0YREYUcEEJQ.ttf',
                700 => 'http://fonts.gstatic.com/s/cardo/v7/lQN30weILimrKvp8rZhF1w.ttf',
              ),
            ),
            113 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Carme',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/carme/v6/08E0NP1eRBEyFRUadmMfgA.ttf',
              ),
            ),
            114 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Carrois Gothic',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/carroisgothic/v3/GCgb7bssGpwp7V5ynxmWy2x3d0cwUleGuRTmCYfCUaM.ttf',
              ),
            ),
            115 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Carrois Gothic SC',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/carroisgothicsc/v3/bVp4nhwFIXU-r3LqUR8DSJTdPW1ioadGi2uRiKgJVCY.ttf',
              ),
            ),
            116 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Carter One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/carterone/v7/5X_LFvdbcB7OBG7hBgZ7fPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            117 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Caudex',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'latin',
                3 => 'greek',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/caudex/v5/PWEexiHLDmQbn2b1OPZWfg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/caudex/v5/XjMZF6XCisvV3qapD4oJdw.ttf',
                700 => 'http://fonts.gstatic.com/s/caudex/v5/PetCI4GyQ5Q3LiOzUu_mMg.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/caudex/v5/yT8YeHLjaJvQXlUEYOA8gqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            118 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cedarville Cursive',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cedarvillecursive/v5/cuCe6HrkcqrWTWTUE7dw-41zwq9-z_Lf44CzRAA0d0Y.ttf',
              ),
            ),
            119 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ceviche One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cevicheone/v5/WOaXIMBD4VYMy39MsobJhKCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            120 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Changa One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/changaone/v8/dr4qjce4W3kxFrZRkVD87fesZW2xOQ-xsNqO47m55DA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/changaone/v8/wJVQlUs1lAZel-WdTo2U9y3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            121 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Chango',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/chango/v4/3W3AeMMtRTH08t5qLOjBmg.ttf',
              ),
            ),
            122 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Chau Philomene One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/chauphilomeneone/v3/KKc5egCL-a2fFVoOA2x6tBFi5dxgSTdxqnMJgWkBJcg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/chauphilomeneone/v3/eJj1PY_iN4KiIuyOvtMHJP6uyLkxyiC4WcYA74sfquE.ttf',
              ),
            ),
            123 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Chela One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/chelaone/v3/h5O0dEnpnIq6jQnWxZybrA.ttf',
              ),
            ),
            124 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Chelsea Market',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/chelseamarket/v3/qSdzwh2A4BbNemy78sJLfAAI1i8fIftCBXsBF2v9UMI.ttf',
              ),
            ),
            125 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Chenla',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
        
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/chenla/v8/aLNpdAUDq2MZbWz2U1a16g.ttf',
              ),
            ),
            126 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cherry Cream Soda',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cherrycreamsoda/v5/OrD-AUnFcZeeKa6F_c0_WxOiHiuAPYA9ry3O1RG2XIU.ttf',
              ),
            ),
            127 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cherry Swash',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cherryswash/v3/HqOk7C7J1TZ5i3L-ejF0vi3USBnSvpkopQaUR-2r7iU.ttf',
                700 => 'http://fonts.gstatic.com/s/cherryswash/v3/-CfyMyQqfucZPQNB0nvYyED2ttfZwueP-QU272T9-k4.ttf',
              ),
            ),
            128 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Chewy',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/chewy/v6/hcDN5cvQdIu6Bx4mg_TSyw.ttf',
              ),
            ),
            129 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Chicle',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/chicle/v4/xg4q57Ut9ZmyFwLp51JLgg.ttf',
              ),
            ),
            130 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Chivo',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '900',
                3 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/chivo/v6/L88PEuzS9eRfHRZhAPhZyw.ttf',
                'italic' => 'http://fonts.gstatic.com/s/chivo/v6/Oe3-Q-a2kBzPnhHck_baMg.ttf',
                900 => 'http://fonts.gstatic.com/s/chivo/v6/JAdkiWd46QCW4vOsj3dzTA.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/chivo/v6/LoszYnE86q2wJEOjCigBQ_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            131 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cinzel',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
                2 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cinzel/v3/GF7dy_Nc-a6EaHYSyGd-EA.ttf',
                700 => 'http://fonts.gstatic.com/s/cinzel/v3/nYcFQ6_3pf_6YDrOFjBR8Q.ttf',
                900 => 'http://fonts.gstatic.com/s/cinzel/v3/FTBj72ozM2cEOSxiVsRb3A.ttf',
              ),
            ),
            132 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cinzel Decorative',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
                2 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cinzeldecorative/v3/fmgK7oaJJIXAkhd9798yQgT5USbJx2F82lQbogPy2bY.ttf',
                700 => 'http://fonts.gstatic.com/s/cinzeldecorative/v3/pXhIVnhFtL_B9Vb1wq2F95-YYVDmZkJErg0zgx9XuZI.ttf',
                900 => 'http://fonts.gstatic.com/s/cinzeldecorative/v3/pXhIVnhFtL_B9Vb1wq2F97Khqbv0zQZa0g-9HOXAalU.ttf',
              ),
            ),
            133 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Clicker Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/clickerscript/v3/Zupmk8XwADjufGxWB9KThBnpV0hQCek3EmWnCPrvGRM.ttf',
              ),
            ),
            134 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Coda',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '800',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v9',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/coda/v9/yHDvulhg-P-p2KRgRrnUYw.ttf',
                800 => 'http://fonts.gstatic.com/s/coda/v9/6ZIw0sbALY0KTMWllZB3hQ.ttf',
              ),
            ),
            135 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Coda Caption',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '800',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                800 => 'http://fonts.gstatic.com/s/codacaption/v7/YDl6urZh-DUFhiMBTgAnz_qsay_1ZmRGmC8pVRdIfAg.ttf',
              ),
            ),
            136 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Codystar',
              'category' => 'display',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/codystar/v3/EVaUzfJkcb8Zqx9kzQLXqqCWcynf_cDxXwCLxiixG1c.ttf',
                'regular' => 'http://fonts.gstatic.com/s/codystar/v3/EN-CPFKYowSI7SuR7-0cZA.ttf',
              ),
            ),
            137 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Combo',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/combo/v4/Nab98KjR3JZSSPGtzLyXNw.ttf',
              ),
            ),
            138 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Comfortaa',
              'category' => 'display',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
                4 => 'greek',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/comfortaa/v6/r_tUZNl0G8xCoOmp_JkSCi3USBnSvpkopQaUR-2r7iU.ttf',
                'regular' => 'http://fonts.gstatic.com/s/comfortaa/v6/lZx6C1VViPgSOhCBUP7hXA.ttf',
                700 => 'http://fonts.gstatic.com/s/comfortaa/v6/fND5XPYKrF2tQDwwfWZJIy3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            139 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Coming Soon',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/comingsoon/v5/Yz2z3IAe2HSQAOWsSG8COKCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            140 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Concert One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/concertone/v6/N5IWCIGhUNdPZn_efTxKN6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            141 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Condiment',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/condiment/v3/CstmdiPpgFSV0FUNL5LrJA.ttf',
              ),
            ),
            142 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Content',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/content/v7/l8qaLjygvOkDEU2G6-cjfQ.ttf',
                700 => 'http://fonts.gstatic.com/s/content/v7/7PivP8Zvs2qn6F6aNbSQe_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            143 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Contrail One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/contrailone/v5/b41KxjgiyqX-hkggANDU6C3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            144 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Convergence',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/convergence/v4/eykrGz1NN_YpQmkAZjW-qKCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            145 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cookie',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cookie/v6/HxeUC62y_YdDbiFlze357A.ttf',
              ),
            ),
            146 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Copse',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/copse/v5/wikLrtPGjZDvZ5w2i5HLWg.ttf',
              ),
            ),
            147 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Corben',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/corben/v7/tTysMZkt-j8Y5yhkgsoajQ.ttf',
                700 => 'http://fonts.gstatic.com/s/corben/v7/lirJaFSQWdGQuV--fksg5g.ttf',
              ),
            ),
            148 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Courgette',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/courgette/v3/2YO0EYtyE9HUPLZprahpZA.ttf',
              ),
            ),
            149 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cousine',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'greek',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cousine/v8/GYX4bPXObJNJo63QJEUnLg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/cousine/v8/1WtIuajLoo8vjVwsrZ3eOg.ttf',
                700 => 'http://fonts.gstatic.com/s/cousine/v8/FXEOnNUcCzhdtoBxiq-lovesZW2xOQ-xsNqO47m55DA.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/cousine/v8/y_AZ5Sz-FwL1lux2xLSTZS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            150 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Coustard',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/coustard/v5/iO2Rs5PmqAEAXoU3SkMVBg.ttf',
                900 => 'http://fonts.gstatic.com/s/coustard/v5/W02OCWO6OfMUHz6aVyegQ6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            151 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Covered By Your Grace',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/coveredbyyourgrace/v5/6ozZp4BPlrbDRWPe3EBGA6CVUMdvnk-GcAiZQrX9Gek.ttf',
              ),
            ),
            152 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Crafty Girls',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/craftygirls/v4/0Sv8UWFFdhQmesHL32H8oy3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            153 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Creepster',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/creepster/v4/0vdr5kWJ6aJlOg5JvxnXzQ.ttf',
              ),
            ),
            154 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Crete Round',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/creteround/v4/B8EwN421qqOCCT8vOH4wJ6CWcynf_cDxXwCLxiixG1c.ttf',
                'italic' => 'http://fonts.gstatic.com/s/creteround/v4/5xAt7XK2vkUdjhGtt98unUeOrDcLawS7-ssYqLr2Xp4.ttf',
              ),
            ),
            155 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Crimson Text',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '600',
                3 => '600italic',
                4 => '700',
                5 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/crimsontext/v5/3IFMwfRa07i-auYR-B-zNS3USBnSvpkopQaUR-2r7iU.ttf',
                'italic' => 'http://fonts.gstatic.com/s/crimsontext/v5/a5QZnvmn5amyNI-t2BMkWPMZXuCXbOrAvx5R0IT5Oyo.ttf',
                600 => 'http://fonts.gstatic.com/s/crimsontext/v5/rEy5tGc5HdXy56Xvd4f3I2v8CylhIUtwUiYO7Z2wXbE.ttf',
                '600italic' => 'http://fonts.gstatic.com/s/crimsontext/v5/4j4TR-EfnvCt43InYpUNDIR-5-urNOGAobhAyctHvW8.ttf',
                700 => 'http://fonts.gstatic.com/s/crimsontext/v5/rEy5tGc5HdXy56Xvd4f3I0D2ttfZwueP-QU272T9-k4.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/crimsontext/v5/4j4TR-EfnvCt43InYpUNDPAs9-1nE9qOqhChW0m4nDE.ttf',
              ),
            ),
            156 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Croissant One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/croissantone/v3/mPjsOObnC77fp1cvZlOfIYjjx0o0jr6fNXxPgYh_a8Q.ttf',
              ),
            ),
            157 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Crushed',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/crushed/v5/aHwSejs3Kt0Lg95u7j32jA.ttf',
              ),
            ),
            158 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cuprum',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cuprum/v6/JgXs0F_UiaEdAS74msmFNg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/cuprum/v6/cLEz0KV6OxInnktSzpk58g.ttf',
                700 => 'http://fonts.gstatic.com/s/cuprum/v6/6tl3_FkDeXSD72oEHuJh4w.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/cuprum/v6/bnkXaBfoYvaJ75axRPSwVKCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            159 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cutive',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cutive/v6/G2bW-ImyOCwKxBkLyz39YQ.ttf',
              ),
            ),
            160 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Cutive Mono',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/cutivemono/v3/ncWQtFVKcSs8OW798v30k6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            161 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Damion',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/damion/v5/13XtECwKxhD_VrOqXL4SiA.ttf',
              ),
            ),
            162 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Dancing Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/dancingscript/v5/DK0eTGXiZjN6yA8zAEyM2RnpV0hQCek3EmWnCPrvGRM.ttf',
                700 => 'http://fonts.gstatic.com/s/dancingscript/v5/KGBfwabt0ZRLA5W1ywjowb_dAmXiKjTPGCuO6G2MbfA.ttf',
              ),
            ),
            163 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Dangrek',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/dangrek/v7/LOaFhBT-EHNxZjV8DAW_ew.ttf',
              ),
            ),
            164 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Dawning of a New Day',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/dawningofanewday/v6/JiDsRhiKZt8uz3NJ5xA06gXLnohmOYWQZqo_sW8GLTk.ttf',
              ),
            ),
            165 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Days One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/daysone/v5/kzwZjNhc1iabMsrc_hKBIA.ttf',
              ),
            ),
            166 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Delius',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/delius/v5/TQA163qafki2-gV-B6F_ag.ttf',
              ),
            ),
            167 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Delius Swash Caps',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/deliusswashcaps/v7/uXyrEUnoWApxIOICunRq7yIrxb5zDVgU2N3VzXm7zq4.ttf',
              ),
            ),
            168 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Delius Unicase',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/deliusunicase/v8/b2sKujV3Q48RV2PQ0k1vqu6rPKfVZo7L2bERcf0BDns.ttf',
                700 => 'http://fonts.gstatic.com/s/deliusunicase/v8/7FTMTITcb4dxUp99FAdTqNy5weKXdcrx-wE0cgECMq8.ttf',
              ),
            ),
            169 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Della Respira',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/dellarespira/v3/F4E6Lo_IZ6L9AJCcbqtDVeDcg5akpSnIcsPhLOFv7l8.ttf',
              ),
            ),
            170 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Denk One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/denkone/v3/TdXOeA4eA_hEx4W8Sh9wPw.ttf',
              ),
            ),
            171 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Devonshire',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/devonshire/v4/I3ct_2t12SYizP8ZC-KFi_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            172 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Didact Gothic',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'cyrillic-ext',
                3 => 'cyrillic',
                4 => 'latin',
                5 => 'greek',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/didactgothic/v6/v8_72sD3DYMKyM0dn3LtWotBLojGU5Qdl8-5NL4v70w.ttf',
              ),
            ),
            173 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Diplomata',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/diplomata/v5/u-ByBiKgN6rTMA36H3kcKg.ttf',
              ),
            ),
            174 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Diplomata SC',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/diplomatasc/v4/JdVwAwfE1a_pahXjk5qpNi3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            175 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Domine',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/domine/v3/wfVIgamVFjMNQAEWurCiHA.ttf',
                700 => 'http://fonts.gstatic.com/s/domine/v3/phBcG1ZbQFxUIt18hPVxnw.ttf',
              ),
            ),
            176 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Donegal One',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/donegalone/v3/6kN4-fDxz7T9s5U61HwfF6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            177 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Doppio One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/doppioone/v3/WHZ3HJQotpk_4aSMNBo_t_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            178 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Dorsa',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/dorsa/v6/wCc3cUe6XrmG2LQE6GlIrw.ttf',
              ),
            ),
            179 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Dosis',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '200',
                1 => '300',
                2 => 'regular',
                3 => '500',
                4 => '600',
                5 => '700',
                6 => '800',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                200 => 'http://fonts.gstatic.com/s/dosis/v3/ztftab0r6hcd7AeurUGrSQ.ttf',
                300 => 'http://fonts.gstatic.com/s/dosis/v3/awIB6L0h5mb0plIKorXmuA.ttf',
                'regular' => 'http://fonts.gstatic.com/s/dosis/v3/rJRlixu-w0JZ1MyhJpao_Q.ttf',
                500 => 'http://fonts.gstatic.com/s/dosis/v3/ruEXDOFMxDPGnjCBKRqdAQ.ttf',
                600 => 'http://fonts.gstatic.com/s/dosis/v3/KNAswRNwm3tfONddYyidxg.ttf',
                700 => 'http://fonts.gstatic.com/s/dosis/v3/AEEAj0ONidK8NQQMBBlSig.ttf',
                800 => 'http://fonts.gstatic.com/s/dosis/v3/nlrKd8E69vvUU39XGsvR7Q.ttf',
              ),
            ),
            180 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Dr Sugiyama',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/drsugiyama/v4/S5Yx3MIckgoyHhhS4C9Tv6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            181 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Droid Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
        
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                'regular' => 'http://themes.googleusercontent.com/static/fonts/droidsans/v4/rS9BT6-asrfjpkcV3DXf__esZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/droidsans/v4/EFpQQyG9GqCrobXxL-KRMQJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            182 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Droid Sans Mono',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/droidsansmono/v6/ns-m2xQYezAtqh7ai59hJcwD6PD0c3_abh9zHKQtbGU.ttf',
              ),
            ),
            183 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Droid Serif',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                'regular' => 'http://themes.googleusercontent.com/static/fonts/droidserif/v4/DgAtPy6rIVa2Zx3Xh9KaNaCWcynf_cDxXwCLxiixG1c.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/droidserif/v4/cj2hUnSRBhwmSPr9kS5890eOrDcLawS7-ssYqLr2Xp4.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/droidserif/v4/QQt14e8dY39u-eYBZmppwXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/droidserif/v4/c92rD_x0V1LslSFt3-QEps_zJjSACmk0BRPxQqhnNLU.ttf',
              ),
            ),
            184 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Duru Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-08',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/durusans/v5/R1xHvAOARPh8_so9_UKw1w.ttf',
              ),
            ),
            185 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Dynalight',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/dynalight/v4/-CWsIe8OUDWTIHjSAh41kA.ttf',
              ),
            ),
            186 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'EB Garamond',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'vietnamese',
                2 => 'cyrillic-ext',
                3 => 'cyrillic',
                4 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ebgaramond/v6/CDR0kuiFK7I1OZ2hSdR7G6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            187 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Eagle Lake',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/eaglelake/v3/ZKlYin7caemhx9eSg6RvPfesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            188 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Eater',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/eater/v4/gm6f3OmYEdbs3lPQtUfBkA.ttf',
              ),
            ),
            189 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Economica',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/economica/v3/G4rJRujzZbq9Nxngu9l3hg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/economica/v3/p5O9AVeUqx_n35xQRinNYaCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/economica/v3/UK4l2VEpwjv3gdcwbwXE9C3USBnSvpkopQaUR-2r7iU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/economica/v3/ac5dlUsedQ03RqGOeay-3Xe1Pd76Vl7zRpE7NLJQ7XU.ttf',
              ),
            ),
            190 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ek Mukta',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '200',
                1 => '300',
                2 => 'regular',
                3 => '500',
                4 => '600',
                5 => '700',
                6 => '800',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
                2 => 'devanagari',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-29',
              'files' => 
              array (
                200 => 'http://fonts.gstatic.com/s/ekmukta/v5/crtkNHh5JcM3VJKG0E-B36CWcynf_cDxXwCLxiixG1c.ttf',
                300 => 'http://fonts.gstatic.com/s/ekmukta/v5/mpaAv7CIyk0VnZlqSneVxKCWcynf_cDxXwCLxiixG1c.ttf',
                'regular' => 'http://fonts.gstatic.com/s/ekmukta/v5/aFcjXdC5jyJ1p8w54wIIrg.ttf',
                500 => 'http://fonts.gstatic.com/s/ekmukta/v5/PZ1y2MstFczWvBlFSgzMyaCWcynf_cDxXwCLxiixG1c.ttf',
                600 => 'http://fonts.gstatic.com/s/ekmukta/v5/Z5Mfzeu6M3emakcJO2QeTqCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/ekmukta/v5/4ugcOGR28Jn-oBIn0-qLYaCWcynf_cDxXwCLxiixG1c.ttf',
                800 => 'http://fonts.gstatic.com/s/ekmukta/v5/O68TH5OjEhVmn9_gIrcfS6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            191 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Electrolize',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/electrolize/v4/yFVu5iokC-nt4B1Cyfxb9aCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            192 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Elsie',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-29',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/elsie/v3/gwspePauE45BJu6Ok1QrfQ.ttf',
                900 => 'http://fonts.gstatic.com/s/elsie/v3/1t-9f0N2NFYwAgN7oaISqg.ttf',
              ),
            ),
            193 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Elsie Swash Caps',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/elsieswashcaps/v3/9L3hIJMPCf6sxCltnxd6X2YeFSdnSpRYv5h9gpdlD1g.ttf',
                900 => 'http://fonts.gstatic.com/s/elsieswashcaps/v3/iZnus9qif0tR5pGaDv5zdKoKBWBozTtxi30NfZDOXXU.ttf',
              ),
            ),
            194 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Emblema One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/emblemaone/v4/7IlBUjBWPIiw7cr_O2IfSaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            195 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Emilys Candy',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/emilyscandy/v3/PofLVm6v1SwZGOzC8s-I3S3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            196 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Engagement',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/engagement/v4/4Uz0Jii7oVPcaFRYmbpU6vesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            197 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Englebert',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/englebert/v3/sll38iOvOuarDTYBchlP3Q.ttf',
              ),
            ),
            198 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Enriqueta',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/enriqueta/v4/_p90TrIwR1SC-vDKtmrv6A.ttf',
                700 => 'http://fonts.gstatic.com/s/enriqueta/v4/I27Pb-wEGH2ajLYP0QrtSC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            199 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Erica One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ericaone/v5/cIBnH2VAqQMIGYAcE4ufvQ.ttf',
              ),
            ),
            200 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Esteban',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/esteban/v3/ESyhLgqDDyK5JcFPp2svDw.ttf',
              ),
            ),
            201 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Euphoria Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/euphoriascript/v3/c4XB4Iijj_NvSsCF4I0O2MxLhO8OSNnfAp53LK1_iRs.ttf',
              ),
            ),
            202 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ewert',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ewert/v3/Em8hrzuzSbfHcTVqMjbAQg.ttf',
              ),
            ),
            203 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Exo',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '100',
                1 => '100italic',
                2 => '200',
                3 => '200italic',
                4 => '300',
                5 => '300italic',
                6 => 'regular',
                7 => 'italic',
                8 => '500',
                9 => '500italic',
                10 => '600',
                11 => '600italic',
                12 => '700',
                13 => '700italic',
                14 => '800',
                15 => '800italic',
                16 => '900',
                17 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                100 => 'http://fonts.gstatic.com/s/exo/v3/RI7A9uwjRmPbVp0n8e-Jvg.ttf',
                '100italic' => 'http://fonts.gstatic.com/s/exo/v3/qtGyZZlWb2EEvby3ZPosxw.ttf',
                200 => 'http://fonts.gstatic.com/s/exo/v3/F8OfC_swrRRxpFt-tlXZQg.ttf',
                '200italic' => 'http://fonts.gstatic.com/s/exo/v3/fr4HBfXHYiIngW2_bhlgRw.ttf',
                300 => 'http://fonts.gstatic.com/s/exo/v3/SBrN7TKUqgGUvfxqHqsnNw.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/exo/v3/3gmiLjBegIfcDLISjTGA1g.ttf',
                'regular' => 'http://fonts.gstatic.com/s/exo/v3/eUEzTFueNXRVhbt4PEB8kQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/exo/v3/cfgolWisMSURhpQeVHl_NA.ttf',
                500 => 'http://fonts.gstatic.com/s/exo/v3/jCg6DmGGXt_OVyp5ofQHPw.ttf',
                '500italic' => 'http://fonts.gstatic.com/s/exo/v3/lo5eTdCNJZQVN08p8RnzAQ.ttf',
                600 => 'http://fonts.gstatic.com/s/exo/v3/q_SG5kXUmOcIvFpgtdZnlw.ttf',
                '600italic' => 'http://fonts.gstatic.com/s/exo/v3/0cExa8K_pxS2lTuMr68XUA.ttf',
                700 => 'http://fonts.gstatic.com/s/exo/v3/3_jwsL4v9uHjl5Q37G57mw.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/exo/v3/0me55yJIxd5vyQ9bF7SsiA.ttf',
                800 => 'http://fonts.gstatic.com/s/exo/v3/yLPuxBuV0lzqibRJyooOJg.ttf',
                '800italic' => 'http://fonts.gstatic.com/s/exo/v3/n3LejeKVj_8gtZq5fIgNYw.ttf',
                900 => 'http://fonts.gstatic.com/s/exo/v3/97d0nd6Yv4-SA_X92xAuZA.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/exo/v3/JHTkQVhzyLtkY13Ye95TJQ.ttf',
              ),
            ),
            204 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Exo 2',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '100',
                1 => '100italic',
                2 => '200',
                3 => '200italic',
                4 => '300',
                5 => '300italic',
                6 => 'regular',
                7 => 'italic',
                8 => '500',
                9 => '500italic',
                10 => '600',
                11 => '600italic',
                12 => '700',
                13 => '700italic',
                14 => '800',
                15 => '800italic',
                16 => '900',
                17 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                100 => 'http://fonts.gstatic.com/s/exo2/v2/oVOtQy53isv97g4UhBUDqg.ttf',
                '100italic' => 'http://fonts.gstatic.com/s/exo2/v2/LNYVgsJcaCxoKFHmd4AZcg.ttf',
                200 => 'http://fonts.gstatic.com/s/exo2/v2/qa-Ci2pBwJdCxciE1ErifQ.ttf',
                '200italic' => 'http://fonts.gstatic.com/s/exo2/v2/DCrVxDVvS69n50O-5erZVvesZW2xOQ-xsNqO47m55DA.ttf',
                300 => 'http://fonts.gstatic.com/s/exo2/v2/nLUBdz_lHHoVIPor05Byhw.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/exo2/v2/iSy9VTeUTiqiurQg2ywtu_esZW2xOQ-xsNqO47m55DA.ttf',
                'regular' => 'http://fonts.gstatic.com/s/exo2/v2/Pf_kZuIH5c5WKVkQUaeSWQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/exo2/v2/xxA5ZscX9sTU6U0lZJUlYA.ttf',
                500 => 'http://fonts.gstatic.com/s/exo2/v2/oM0rzUuPqVJpW-VEIpuW5w.ttf',
                '500italic' => 'http://fonts.gstatic.com/s/exo2/v2/amzRVCB-gipwdihZZ2LtT_esZW2xOQ-xsNqO47m55DA.ttf',
                600 => 'http://fonts.gstatic.com/s/exo2/v2/YnSn3HsyvyI1feGSdRMYqA.ttf',
                '600italic' => 'http://fonts.gstatic.com/s/exo2/v2/Vmo58BiptGwfVFb0teU5gPesZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/exo2/v2/2DiK4XkdTckfTk6we73-bQ.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/exo2/v2/Sdo-zW-4_--pDkTg6bYrY_esZW2xOQ-xsNqO47m55DA.ttf',
                800 => 'http://fonts.gstatic.com/s/exo2/v2/IVYl_7dJruOg8zKRpC8Hrw.ttf',
                '800italic' => 'http://fonts.gstatic.com/s/exo2/v2/p0TA6KeOz1o4rySEbvUxI_esZW2xOQ-xsNqO47m55DA.ttf',
                900 => 'http://fonts.gstatic.com/s/exo2/v2/e8csG8Wnu87AF6uCndkFRQ.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/exo2/v2/KPhsGCoT2-7Uj6pMlRscH_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            205 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Expletus Sans',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '500',
                3 => '500italic',
                4 => '600',
                5 => '600italic',
                6 => '700',
                7 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/expletussans/v6/gegTSDBDs5le3g6uxU1ZsX8f0n03UdmQgF_CLvNR2vg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/expletussans/v6/Y-erXmY0b6DU_i2Qu0hTJj4G9C9ttb0Oz5Cvf0qOitE.ttf',
                500 => 'http://fonts.gstatic.com/s/expletussans/v6/cl6rhMY77Ilk8lB_uYRRwAqQmZ7VjhwksfpNVG0pqGc.ttf',
                '500italic' => 'http://fonts.gstatic.com/s/expletussans/v6/sRBNtc46w65uJE451UYmW87DCVO6wo6i5LKIyZDzK40.ttf',
                600 => 'http://fonts.gstatic.com/s/expletussans/v6/cl6rhMY77Ilk8lB_uYRRwCvj1tU7IJMS3CS9kCx2B3U.ttf',
                '600italic' => 'http://fonts.gstatic.com/s/expletussans/v6/sRBNtc46w65uJE451UYmW8yKH23ZS6zCKOFHG0e_4JE.ttf',
                700 => 'http://fonts.gstatic.com/s/expletussans/v6/cl6rhMY77Ilk8lB_uYRRwFCbmAUID8LN-q3pJpOk3Ys.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/expletussans/v6/sRBNtc46w65uJE451UYmW5F66r9C4AnxxlBlGd7xY4g.ttf',
              ),
            ),
            206 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fanwood Text',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fanwoodtext/v5/hDNDHUlsSb8bgnEmDp4T_i3USBnSvpkopQaUR-2r7iU.ttf',
                'italic' => 'http://fonts.gstatic.com/s/fanwoodtext/v5/0J3SBbkMZqBV-3iGxs5E9_MZXuCXbOrAvx5R0IT5Oyo.ttf',
              ),
            ),
            207 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fascinate',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fascinate/v4/ZE0637WWkBPKt1AmFaqD3Q.ttf',
              ),
            ),
            208 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fascinate Inline',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fascinateinline/v5/lRguYfMfWArflkm5aOQ5QJmp8DTZ6iHear7UV05iykg.ttf',
              ),
            ),
            209 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Faster One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fasterone/v4/YxTOW2sf56uxD1T7byP5K_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            210 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fasthand',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fasthand/v6/6XAagHH_KmpZL67wTvsETQ.ttf',
              ),
            ),
            211 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fauna One',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/faunaone/v3/8kL-wpAPofcAMELI_5NRnQ.ttf',
              ),
            ),
            212 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Federant',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/federant/v6/tddZFSiGvxICNOGra0i5aA.ttf',
              ),
            ),
            213 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Federo',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/federo/v7/JPhe1S2tujeyaR79gXBLeQ.ttf',
              ),
            ),
            214 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Felipa',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/felipa/v3/SeyfyFZY7abAQXGrOIYnYg.ttf',
              ),
            ),
            215 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fenix',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fenix/v3/Ak8wR3VSlAN7VN_eMeJj7Q.ttf',
              ),
            ),
            216 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Finger Paint',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fingerpaint/v3/m_ZRbiY-aPb13R3DWPBGXy3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            217 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fira Mono',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'vietnamese',
                2 => 'cyrillic-ext',
                3 => 'cyrillic',
                4 => 'latin',
                5 => 'greek',
              ),
              'version' => 'v1',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/firamono/v1/WQOm1D4RO-yvA9q9trJc8g.ttf',
                700 => 'http://fonts.gstatic.com/s/firamono/v1/l24Wph3FsyKAbJ8dfExTZy3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            218 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fira Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
                4 => '500',
                5 => '500italic',
                6 => '700',
                7 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
                4 => 'greek',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-29',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/firasans/v3/VTBnrK42EiOBncVyQXZ7jy3USBnSvpkopQaUR-2r7iU.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/firasans/v3/6s0YCA9oCTF6hM60YM-qTS9-WlPSxbfiI49GsXo3q0g.ttf',
                'regular' => 'http://fonts.gstatic.com/s/firasans/v3/nsT0isDy56OkSX99sFQbXw.ttf',
                'italic' => 'http://fonts.gstatic.com/s/firasans/v3/cPT_2ddmoxsUuMtQqa8zGqCWcynf_cDxXwCLxiixG1c.ttf',
                500 => 'http://fonts.gstatic.com/s/firasans/v3/zM2u8V3CuPVwAAXFQcDi4C3USBnSvpkopQaUR-2r7iU.ttf',
                '500italic' => 'http://fonts.gstatic.com/s/firasans/v3/6s0YCA9oCTF6hM60YM-qTcCNfqCYlB_eIx7H1TVXe60.ttf',
                700 => 'http://fonts.gstatic.com/s/firasans/v3/DugPdSljmOTocZOR2CItOi3USBnSvpkopQaUR-2r7iU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/firasans/v3/6s0YCA9oCTF6hM60YM-qTXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
              ),
            ),
            219 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fjalla One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fjallaone/v3/3b7vWCfOZsU53vMa8LWsf_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            220 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fjord One',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fjordone/v4/R_YHK8au2uFPw5tNu5N7zw.ttf',
              ),
            ),
            221 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Flamenco',
              'category' => 'display',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/flamenco/v5/x9iI5CogvuZVCGoRHwXuo6CWcynf_cDxXwCLxiixG1c.ttf',
                'regular' => 'http://fonts.gstatic.com/s/flamenco/v5/HC0ugfLLgt26I5_BWD1PZA.ttf',
              ),
            ),
            222 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Flavors',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/flavors/v4/SPJi5QclATvon8ExcKGRvQ.ttf',
              ),
            ),
            223 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fondamento',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fondamento/v4/6LWXcjT1B7bnWluAOSNfMPesZW2xOQ-xsNqO47m55DA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/fondamento/v4/y6TmwhSbZ8rYq7OTFyo7OS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            224 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fontdiner Swanky',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fontdinerswanky/v5/8_GxIO5ixMtn5P6COsF3TlBjMPLzPAFJwRBn-s1U7kA.ttf',
              ),
            ),
            225 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Forum',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/forum/v6/MZUpsq1VfLrqv8eSDcbrrQ.ttf',
              ),
            ),
            226 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Francois One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/francoisone/v8/bYbkq2nU2TSx4SwFbz5sCC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            227 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Freckle Face',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/freckleface/v3/7-B8j9BPJgazdHIGqPNv8y3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            228 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fredericka the Great',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/frederickathegreat/v4/7Es8Lxoku-e5eOZWpxw18nrnet6gXN1McwdQxS1dVrI.ttf',
              ),
            ),
            229 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fredoka One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fredokaone/v3/QKfwXi-z-KtJAlnO2ethYqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            230 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Freehand',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/freehand/v7/uEBQxvA0lnn_BrD6krlxMw.ttf',
              ),
            ),
            231 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fresca',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fresca/v4/2q7Qm9sCo1tWvVgSDVWNIw.ttf',
              ),
            ),
            232 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Frijole',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/frijole/v4/L2MfZse-2gCascuD-nLhWg.ttf',
              ),
            ),
            233 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fruktur',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fruktur/v5/PnQvfEi1LssAvhJsCwH__w.ttf',
              ),
            ),
            234 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Fugaz One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/fugazone/v5/5tteVDCwxsr8-5RuSiRWOw.ttf',
              ),
            ),
            235 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'GFS Didot',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'greek',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gfsdidot/v5/jQKxZy2RU-h9tkPZcRVluA.ttf',
              ),
            ),
            236 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'GFS Neohellenic',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gfsneohellenic/v6/B4xRqbn-tANVqVgamMsSDiayCZa0z7CpFzlkqoCHztc.ttf',
                'italic' => 'http://fonts.gstatic.com/s/gfsneohellenic/v6/KnaWrO4awITAqigQIIYXKkCTdomiyJpIzPbEbIES3rU.ttf',
                700 => 'http://fonts.gstatic.com/s/gfsneohellenic/v6/7HwjPQa7qNiOsnUce2h4448_BwCLZY3eDSV6kppAwI8.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/gfsneohellenic/v6/FwWjoX6XqT-szJFyqsu_GYFF0fM4h-krcpQk7emtCpE.ttf',
              ),
            ),
            237 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gabriela',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gabriela/v3/B-2ZfbAO3HDrxqV6lR5tdA.ttf',
              ),
            ),
            238 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gafata',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gafata/v4/aTFqlki_3Dc3geo-FxHTvQ.ttf',
              ),
            ),
            239 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Galdeano',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/galdeano/v5/ZKFMQI6HxEG1jOT0UGSZUg.ttf',
              ),
            ),
            240 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Galindo',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/galindo/v3/2lafAS_ZEfB33OJryhXDUg.ttf',
              ),
            ),
            241 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gentium Basic',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gentiumbasic/v6/KCktj43blvLkhOTolFn-MYtBLojGU5Qdl8-5NL4v70w.ttf',
                'italic' => 'http://fonts.gstatic.com/s/gentiumbasic/v6/qoFz4NSMaYC2UmsMAG3lyTj3mvXnCeAk09uTtmkJGRc.ttf',
                700 => 'http://fonts.gstatic.com/s/gentiumbasic/v6/2qL6yulgGf0wwgOp-UqGyLNuTeOOLg3nUymsEEGmdO0.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/gentiumbasic/v6/8N9-c_aQDJ8LbI1NGVMrwtswO1vWwP9exiF8s0wqW10.ttf',
              ),
            ),
            242 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gentium Book Basic',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gentiumbookbasic/v5/IRFxB2matTxrjZt6a3FUnrWDjKAyldGEr6eEi2MBNeY.ttf',
                'italic' => 'http://fonts.gstatic.com/s/gentiumbookbasic/v5/qHqW2lwKO8-uTfIkh8FsUfXfjMwrYnmPVsQth2IcAPY.ttf',
                700 => 'http://fonts.gstatic.com/s/gentiumbookbasic/v5/T2vUYmWzlqUtgLYdlemGnaWESMHIjnSjm9UUxYtEOko.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/gentiumbookbasic/v5/632u7TMIoFDWQYUaHFUp5PA2A9KyRZEkn4TZVuhsWRM.ttf',
              ),
            ),
            243 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Geo',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/geo/v7/mJuJYk5Pww84B4uHAQ1XaA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/geo/v7/8_r1wToF7nPdDuX1qxel6Q.ttf',
              ),
            ),
            244 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Geostar',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/geostar/v5/A8WQbhQbpYx3GWWaShJ9GA.ttf',
              ),
            ),
            245 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Geostar Fill',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/geostarfill/v5/Y5ovXPPOHYTfQzK2aM-hui3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            246 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Germania One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/germaniaone/v3/3_6AyUql_-FbDi1e68jHdC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            247 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gilda Display',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gildadisplay/v3/8yAVUZLLZ3wb7dSsjix0CADHmap7fRWINAsw8-RaxNg.ttf',
              ),
            ),
            248 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Give You Glory',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/giveyouglory/v5/DFEWZFgGmfseyIdGRJAxuBwwkpSPZdvjnMtysdqprfI.ttf',
              ),
            ),
            249 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Glass Antiqua',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/glassantiqua/v3/0yLrXKplgdUDIMz5TnCHNODcg5akpSnIcsPhLOFv7l8.ttf',
              ),
            ),
            250 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Glegoo',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/glegoo/v3/2tf-h3n2A_SNYXEO0C8bKw.ttf',
              ),
            ),
            251 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gloria Hallelujah',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gloriahallelujah/v6/CA1k7SlXcY5kvI81M_R28Q3RdPdyebSUyJECJouPsvA.ttf',
              ),
            ),
            252 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Goblin One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/goblinone/v5/331XtzoXgpVEvNTVcBJ_C_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            253 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gochi Hand',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gochihand/v6/KT1-WxgHsittJ34_20IfAPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            254 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gorditas',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gorditas/v3/uMgZhXUyH6qNGF3QsjQT5Q.ttf',
                700 => 'http://fonts.gstatic.com/s/gorditas/v3/6-XCeknmxaon8AUqVkMnHaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            255 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Goudy Bookletter 1911',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/goudybookletter1911/v5/l5lwlGTN3pEY5Bf-rQEuIIjNDsyURsIKu4GSfvSE4mA.ttf',
              ),
            ),
            256 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Graduate',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/graduate/v3/JpAmYLHqcIh9_Ff35HHwiA.ttf',
              ),
            ),
            257 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Grand Hotel',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/grandhotel/v3/C_A8HiFZjXPpnMt38XnK7qCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            258 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gravitas One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gravitasone/v5/nBHdBv6zVNU8MtP6w9FwTS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            259 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Great Vibes',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/greatvibes/v3/4Mi5RG_9LjQYrTU55GN_L6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            260 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Griffy',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/griffy/v3/vWkyYGBSyE5xjnShNtJtzw.ttf',
              ),
            ),
            261 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gruppo',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gruppo/v6/pS_JM0cK_piBZve-lfUq9w.ttf',
              ),
            ),
            262 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Gudea',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/gudea/v3/S-4QqBlkMPiiA3jNeCR5yw.ttf',
                'italic' => 'http://fonts.gstatic.com/s/gudea/v3/7mNgsGw_vfS-uUgRVXNDSw.ttf',
                700 => 'http://fonts.gstatic.com/s/gudea/v3/lsip4aiWhJ9bx172Y9FN_w.ttf',
              ),
            ),
            263 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Habibi',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/habibi/v4/YYyqXF6pWpL7kmKgS_2iUA.ttf',
              ),
            ),
            264 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Hammersmith One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/hammersmithone/v6/FWNn6ITYqL6or7ZTmBxRhjjVlsJB_M_Q_LtZxsoxvlw.ttf',
              ),
            ),
            265 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Hanalei',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/hanalei/v5/Sx8vVMBnXSQyK6Cn0CBJ3A.ttf',
              ),
            ),
            266 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Hanalei Fill',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/hanaleifill/v4/5uPeWLnaDdtm4UBG26Ds6C3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            267 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Handlee',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/handlee/v4/6OfkXkyC0E5NZN80ED8u3A.ttf',
              ),
            ),
            268 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Hanuman',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/hanuman/v7/hRhwOGGmElJSl6KSPvEnOQ.ttf',
                700 => 'http://fonts.gstatic.com/s/hanuman/v7/lzzXZ2l84x88giDrbfq76vesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            269 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Happy Monkey',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/happymonkey/v4/c2o0ps8nkBmaOYctqBq1rS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            270 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Headland One',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/headlandone/v3/iGmBeOvQGfq9DSbjJ8jDVy3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            271 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Henny Penny',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/hennypenny/v3/XRgo3ogXyi3tpsFfjImRF6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            272 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Herr Von Muellerhoff',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/herrvonmuellerhoff/v5/mmy24EUmk4tjm4gAEjUd7NLGIYrUsBdh-JWHYgiDiMU.ttf',
              ),
            ),
            273 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Hind',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '500',
                3 => '600',
                4 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
                2 => 'devanagari',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/hind/v2/qa346Adgv9kPDXoD1my4kA.ttf',
                'regular' => 'http://fonts.gstatic.com/s/hind/v2/mktFHh5Z5P9YjGKSslSUtA.ttf',
                500 => 'http://fonts.gstatic.com/s/hind/v2/2cs8RCVcYtiv4iNDH1UsQQ.ttf',
                600 => 'http://fonts.gstatic.com/s/hind/v2/TUKUmFMXSoxloBP1ni08oA.ttf',
                700 => 'http://fonts.gstatic.com/s/hind/v2/cXJJavLdUbCfjxlsA6DqTw.ttf',
              ),
            ),
            274 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Holtwood One SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/holtwoodonesc/v6/sToOq3cIxbfnhbEkgYNuBbAgSRh1LpJXlLfl8IbsmHg.ttf',
              ),
            ),
            275 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Homemade Apple',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/homemadeapple/v5/yg3UMEsefgZ8IHz_ryz86BiPOmFWYV1WlrJkRafc4c0.ttf',
              ),
            ),
            276 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Homenaje',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/homenaje/v4/v0YBU0iBRrGdVjDNQILxtA.ttf',
              ),
            ),
            277 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell DW Pica',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfelldwpica/v5/W81bfaWiUicLSPbJhW-ATsA5qm663gJGVdtpamafG5A.ttf',
                'italic' => 'http://fonts.gstatic.com/s/imfelldwpica/v5/alQJ8SK5aSOZVaelYoyT4PL2asmh5DlYQYCosKo6yQs.ttf',
              ),
            ),
            278 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell DW Pica SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfelldwpicasc/v5/xBKKJV4z2KsrtQnmjGO17JZ9RBdEL0H9o5qzT1Rtof4.ttf',
              ),
            ),
            279 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell Double Pica',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfelldoublepica/v5/yN1wY_01BkQnO0LYAhXdUol14jEdVOhEmvtCMCVwYak.ttf',
                'italic' => 'http://fonts.gstatic.com/s/imfelldoublepica/v5/64odUh2hAw8D9dkFKTlWYq0AWwkgdQfsRHec8TYi4mI.ttf',
              ),
            ),
            280 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell Double Pica SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfelldoublepicasc/v5/jkrUtrLFpMw4ZazhfkKsGwc4LoC4OJUqLw9omnT3VOU.ttf',
              ),
            ),
            281 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell English',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfellenglish/v5/xwIisCqGFi8pff-oa9uSVHGNmx1fDm-u2eBJHQkdrmk.ttf',
                'italic' => 'http://fonts.gstatic.com/s/imfellenglish/v5/Z3cnIAI_L3XTRfz4JuZKbuewladMPCWTthtMv9cPS-c.ttf',
              ),
            ),
            282 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell English SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfellenglishsc/v5/h3Tn6yWfw4b5qaLD1RWvz5ATixNthKRRR1XVH3rJNiw.ttf',
              ),
            ),
            283 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell French Canon',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfellfrenchcanon/v5/iKB0WL1BagSpNPz3NLMdsJ3V2FNpBrlLSvqUnERhBP8.ttf',
                'italic' => 'http://fonts.gstatic.com/s/imfellfrenchcanon/v5/owCuNQkLLFW7TBBPJbMnhRa-QL94KdW80H29tcyld2A.ttf',
              ),
            ),
            284 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell French Canon SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfellfrenchcanonsc/v5/kA3bS19-tQbeT_iG32EZmaiyyzHwYrAbmNulTz423iM.ttf',
              ),
            ),
            285 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell Great Primer',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfellgreatprimer/v5/AL8ALGNthei20f9Cu3e93rgeX3ROgtTz44CitKAxzKI.ttf',
                'italic' => 'http://fonts.gstatic.com/s/imfellgreatprimer/v5/1a-artkXMVg682r7TTxVY1_YG2SFv8Ma7CxRl1S3o7g.ttf',
              ),
            ),
            286 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'IM Fell Great Primer SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imfellgreatprimersc/v5/A313vRj97hMMGFjt6rgSJtRg-ciw1Y27JeXb2Zv4lZQ.ttf',
              ),
            ),
            287 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Iceberg',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/iceberg/v3/p2XVm4M-N0AOEEOymFKC5w.ttf',
              ),
            ),
            288 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Iceland',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/iceland/v4/kq3uTMGgvzWGNi39B_WxGA.ttf',
              ),
            ),
            289 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Imprima',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/imprima/v3/eRjquWLjwLGnTEhLH7u3kA.ttf',
              ),
            ),
            290 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Inconsolata',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/inconsolata/v8/7bMKuoy6Nh0ft0SHnIGMuaCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/inconsolata/v8/AIed271kqQlcIRSOnQH0yXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
              ),
            ),
            291 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Inder',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/inder/v4/C38TwecLTfKxIHDc_Adcrw.ttf',
              ),
            ),
            292 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Indie Flower',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/indieflower/v6/10JVD_humAd5zP2yrFqw6i3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            293 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Inika',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/inika/v3/eZCrULQGaIxkrRoGz_DjhQ.ttf',
                700 => 'http://fonts.gstatic.com/s/inika/v3/bl3ZoTyrWsFun2zYbsgJrA.ttf',
              ),
            ),
            294 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Irish Grover',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/irishgrover/v5/kUp7uUPooL-KsLGzeVJbBC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            295 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Istok Web',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/istokweb/v7/RYLSjEXQ0nNtLLc4n7--dQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/istokweb/v7/kvcT2SlTjmGbC3YlZxmrl6CWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/istokweb/v7/2koEo4AKFSvK4B52O_Mwai3USBnSvpkopQaUR-2r7iU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/istokweb/v7/ycQ3g52ELrh3o_HYCNNUw3e1Pd76Vl7zRpE7NLJQ7XU.ttf',
              ),
            ),
            296 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Italiana',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/italiana/v3/dt95fkCSTOF-c6QNjwSycA.ttf',
              ),
            ),
            297 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Italianno',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/italianno/v5/HsyHnLpKf8uP7aMpDQHZmg.ttf',
              ),
            ),
            298 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Jacques Francois',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/jacquesfrancois/v3/_-0XWPQIW6tOzTHg4KaJ_M13D_4KM32Q4UmTSjpuNGQ.ttf',
              ),
            ),
            299 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Jacques Francois Shadow',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/jacquesfrancoisshadow/v3/V14y0H3vq56fY9SV4OL_FASt0D_oLVawA8L8b9iKjbs.ttf',
              ),
            ),
            300 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Jim Nightshade',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/jimnightshade/v3/_n43lYHXVWNgXegdYRIK9CF1W_bo0EdycfH0kHciIic.ttf',
              ),
            ),
            301 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Jockey One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/jockeyone/v5/cAucnOZLvFo07w2AbufBCfesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            302 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Jolly Lodger',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/jollylodger/v3/RX8HnkBgaEKQSHQyP9itiS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            303 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Josefin Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '100',
                1 => '100italic',
                2 => '300',
                3 => '300italic',
                4 => 'regular',
                5 => 'italic',
                6 => '600',
                7 => '600italic',
                8 => '700',
                9 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                100 => 'http://fonts.gstatic.com/s/josefinsans/v6/q9w3H4aeBxj0hZ8Osfi3d8SVQ0giZ-l_NELu3lgGyYw.ttf',
                '100italic' => 'http://fonts.gstatic.com/s/josefinsans/v6/s7-P1gqRNRNn-YWdOYnAOXXcj1rQwlNLIS625o-SrL0.ttf',
                300 => 'http://fonts.gstatic.com/s/josefinsans/v6/C6HYlRF50SGJq1XyXj04z6cQoVhARpoaILP7amxE_8g.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/josefinsans/v6/ppse0J9fKSaoxCIIJb33Gyna0FLWfcB-J_SAYmcAXaI.ttf',
                'regular' => 'http://fonts.gstatic.com/s/josefinsans/v6/xgzbb53t8j-Mo-vYa23n5i3USBnSvpkopQaUR-2r7iU.ttf',
                'italic' => 'http://fonts.gstatic.com/s/josefinsans/v6/q9w3H4aeBxj0hZ8Osfi3d_MZXuCXbOrAvx5R0IT5Oyo.ttf',
                600 => 'http://fonts.gstatic.com/s/josefinsans/v6/C6HYlRF50SGJq1XyXj04z2v8CylhIUtwUiYO7Z2wXbE.ttf',
                '600italic' => 'http://fonts.gstatic.com/s/josefinsans/v6/ppse0J9fKSaoxCIIJb33G4R-5-urNOGAobhAyctHvW8.ttf',
                700 => 'http://fonts.gstatic.com/s/josefinsans/v6/C6HYlRF50SGJq1XyXj04z0D2ttfZwueP-QU272T9-k4.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/josefinsans/v6/ppse0J9fKSaoxCIIJb33G_As9-1nE9qOqhChW0m4nDE.ttf',
              ),
            ),
            304 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Josefin Slab',
              'category' => 'serif',
              'variants' => 
              array (
                0 => '100',
                1 => '100italic',
                2 => '300',
                3 => '300italic',
                4 => 'regular',
                5 => 'italic',
                6 => '600',
                7 => '600italic',
                8 => '700',
                9 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                100 => 'http://fonts.gstatic.com/s/josefinslab/v5/etsUjZYO8lTLU85lDhZwUsSVQ0giZ-l_NELu3lgGyYw.ttf',
                '100italic' => 'http://fonts.gstatic.com/s/josefinslab/v5/8BjDChqLgBF3RJKfwHIYh3Xcj1rQwlNLIS625o-SrL0.ttf',
                300 => 'http://fonts.gstatic.com/s/josefinslab/v5/NbE6ykYuM2IyEwxQxOIi2KcQoVhARpoaILP7amxE_8g.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/josefinslab/v5/af9sBoKGPbGO0r21xJulyyna0FLWfcB-J_SAYmcAXaI.ttf',
                'regular' => 'http://fonts.gstatic.com/s/josefinslab/v5/46aYWdgz-1oFX11flmyEfS3USBnSvpkopQaUR-2r7iU.ttf',
                'italic' => 'http://fonts.gstatic.com/s/josefinslab/v5/etsUjZYO8lTLU85lDhZwUvMZXuCXbOrAvx5R0IT5Oyo.ttf',
                600 => 'http://fonts.gstatic.com/s/josefinslab/v5/NbE6ykYuM2IyEwxQxOIi2Gv8CylhIUtwUiYO7Z2wXbE.ttf',
                '600italic' => 'http://fonts.gstatic.com/s/josefinslab/v5/af9sBoKGPbGO0r21xJuly4R-5-urNOGAobhAyctHvW8.ttf',
                700 => 'http://fonts.gstatic.com/s/josefinslab/v5/NbE6ykYuM2IyEwxQxOIi2ED2ttfZwueP-QU272T9-k4.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/josefinslab/v5/af9sBoKGPbGO0r21xJuly_As9-1nE9qOqhChW0m4nDE.ttf',
              ),
            ),
            305 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Joti One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/jotione/v3/P3r_Th0ESHJdzunsvWgUfQ.ttf',
              ),
            ),
            306 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Judson',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/judson/v6/znM1AAs0eytUaJzf1CrYZQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/judson/v6/GVqQW9P52ygW-ySq-CLwAA.ttf',
                700 => 'http://fonts.gstatic.com/s/judson/v6/he4a2LwiPJc7r8x0oKCKiA.ttf',
              ),
            ),
            307 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Julee',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/julee/v5/CAib-jsUsSO8SvVRnE9fHA.ttf',
              ),
            ),
            308 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Julius Sans One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/juliussansone/v3/iU65JP9acQHPDLkdalCF7jjVlsJB_M_Q_LtZxsoxvlw.ttf',
              ),
            ),
            309 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Junge',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/junge/v3/j4IXCXtxrw9qIBheercp3A.ttf',
              ),
            ),
            310 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Jura',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '500',
                3 => '600',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'cyrillic-ext',
                3 => 'cyrillic',
                4 => 'latin',
                5 => 'greek',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/jura/v6/Rqx_xy1UnN0C7wD3FUSyPQ.ttf',
                'regular' => 'http://fonts.gstatic.com/s/jura/v6/YAWMwF3sN0KCbynMq-Yr_Q.ttf',
                500 => 'http://fonts.gstatic.com/s/jura/v6/16xhfjHCiaLj3tsqqgmtGg.ttf',
                600 => 'http://fonts.gstatic.com/s/jura/v6/iwseduOwJSdY8wQ1Y6CJdA.ttf',
              ),
            ),
            311 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Just Another Hand',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/justanotherhand/v6/fKV8XYuRNNagXr38eqbRf99BnJIEGrvoojniP57E51c.ttf',
              ),
            ),
            312 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Just Me Again Down Here',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/justmeagaindownhere/v7/sN06iTc9ITubLTgXoG-kc3M9eVLpVTSK6TqZTIgBrWQ.ttf',
              ),
            ),
            313 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kalam',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
                2 => 'devanagari',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/kalam/v2/MgQQlk1SgPEHdlkWMNh7Jg.ttf',
                'regular' => 'http://fonts.gstatic.com/s/kalam/v2/hNEJkp2K-aql7e5WQish4Q.ttf',
                700 => 'http://fonts.gstatic.com/s/kalam/v2/95nLItUGyWtNLZjSckluLQ.ttf',
              ),
            ),
            314 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kameron',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kameron/v6/9r8HYhqDSwcq9WMjupL82A.ttf',
                700 => 'http://fonts.gstatic.com/s/kameron/v6/rabVVbzlflqvmXJUFlKnu_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            315 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kantumruy',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/kantumruy/v2/ERRwQE0WG5uanaZWmOFXNi3USBnSvpkopQaUR-2r7iU.ttf',
                'regular' => 'http://fonts.gstatic.com/s/kantumruy/v2/kQfXNYElQxr5dS8FyjD39Q.ttf',
                700 => 'http://fonts.gstatic.com/s/kantumruy/v2/gie_zErpGf_rNzs920C2Ji3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            316 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Karla',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/karla/v4/78UgGRwJFkhqaoFimqoKpQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/karla/v4/51UBKly9RQOnOkj95ZwEFw.ttf',
                700 => 'http://fonts.gstatic.com/s/karla/v4/JS501sZLxZ4zraLQdncOUA.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/karla/v4/3YDyi09gQjCRh-5-SVhTTvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            317 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Karma',
              'category' => 'serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '500',
                3 => '600',
                4 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
                2 => 'devanagari',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/karma/v2/lH6ijJnguWR2Sz7tEl6MQQ.ttf',
                'regular' => 'http://fonts.gstatic.com/s/karma/v2/wvqTxAGBUrTqU0urTEoPIw.ttf',
                500 => 'http://fonts.gstatic.com/s/karma/v2/9YGjxi6Hcvz2Kh-rzO_cAw.ttf',
                600 => 'http://fonts.gstatic.com/s/karma/v2/h_CVzXXtqSxjfS2sIwaejA.ttf',
                700 => 'http://fonts.gstatic.com/s/karma/v2/smuSM08oApsQPPVYbHd1CA.ttf',
              ),
            ),
            318 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kaushan Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kaushanscript/v3/qx1LSqts-NtiKcLw4N03IBnpV0hQCek3EmWnCPrvGRM.ttf',
              ),
            ),
            319 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kavoon',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kavoon/v3/382m-6baKXqJFQjEgobt6Q.ttf',
              ),
            ),
            320 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kdam Thmor',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kdamthmor/v2/otCdP6UU-VBIrBfVDWBQJ_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            321 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Keania One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/keaniaone/v3/PACrDKZWngXzgo-ucl6buvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            322 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kelly Slab',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kellyslab/v5/F_2oS1e9XdYx1MAi8XEVefesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            323 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kenia',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kenia/v7/OLM9-XfITK9PsTLKbGBrwg.ttf',
              ),
            ),
            324 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Khand',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '500',
                3 => '600',
                4 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
                2 => 'devanagari',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-29',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/khand/v2/072zRl4OU9Pinjjkg174LA.ttf',
                'regular' => 'http://fonts.gstatic.com/s/khand/v2/HdLdTNFqNIDGJZl1ZEj84w.ttf',
                500 => 'http://fonts.gstatic.com/s/khand/v2/46_p-SqtuMe56nxQdteWxg.ttf',
                600 => 'http://fonts.gstatic.com/s/khand/v2/zggGWYIiPJyMTgkfxP_kaA.ttf',
                700 => 'http://fonts.gstatic.com/s/khand/v2/0I0UWaN-X5QBmfexpXKhqg.ttf',
              ),
            ),
            325 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Khmer',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
        
              array (
                0 => 'khmer',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/khmer/v8/vWaBJIbaQuBNz02ALIKJ3A.ttf',
              ),
            ),
            326 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kite One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kiteone/v3/8ojWmgUc97m0f_i6sTqLoQ.ttf',
              ),
            ),
            327 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Knewave',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/knewave/v4/KGHM4XWr4iKnBMqzZLkPBg.ttf',
              ),
            ),
            328 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kotta One',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kottaone/v3/AB2Q7hVw6niJYDgLvFXu5w.ttf',
              ),
            ),
            329 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Koulen',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v9',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/koulen/v9/AAYOK8RSRO7FTskTzFuzNw.ttf',
              ),
            ),
            330 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kranky',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kranky/v5/C8dxxTS99-fZ84vWk8SDrg.ttf',
              ),
            ),
            331 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kreon',
              'category' => 'serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/kreon/v8/HKtJRiq5C2zbq5N1IX32sA.ttf',
                'regular' => 'http://fonts.gstatic.com/s/kreon/v8/zA_IZt0u0S3cvHJu-n1oEg.ttf',
                700 => 'http://fonts.gstatic.com/s/kreon/v8/jh0dSmaPodjxISiblIUTkw.ttf',
              ),
            ),
            332 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Kristi',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kristi/v6/aRsgBQrkQkMlu4UPSnJyOQ.ttf',
              ),
            ),
            333 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Krona One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/kronaone/v3/zcQj4ljqTo166AdourlF9w.ttf',
              ),
            ),
            334 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'La Belle Aurore',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/labelleaurore/v5/Irdbc4ASuUoWDjd_Wc3md123K2iuuhwZgaKapkyRTY8.ttf',
              ),
            ),
            335 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lancelot',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lancelot/v4/XMT7T_oo_MQUGAnU2v-sdA.ttf',
              ),
            ),
            336 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lato',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '100',
                1 => '100italic',
                2 => '300',
                3 => '300italic',
                4 => 'regular',
                5 => 'italic',
                6 => '700',
                7 => '700italic',
                8 => '900',
                9 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                100 => 'http://themes.googleusercontent.com/static/fonts/lato/v7/Upp-ka9rLQmHYCsFgwL-eg.ttf',
                '100italic' => 'http://themes.googleusercontent.com/static/fonts/lato/v7/zLegi10uS_9-fnUDISl0KA.ttf',
                300 => 'http://themes.googleusercontent.com/static/fonts/lato/v7/Ja02qOppOVq9jeRjWekbHg.ttf',
                '300italic' => 'http://themes.googleusercontent.com/static/fonts/lato/v7/dVebFcn7EV7wAKwgYestUg.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/lato/v7/h7rISIcQapZBpei-sXwIwg.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/lato/v7/P_dJOFJylV3A870UIOtr0w.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/lato/v7/iX_QxBBZLhNj5JHlTzHQzg.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/lato/v7/WFcZakHrrCKeUJxHA4T_gw.ttf',
                900 => 'http://themes.googleusercontent.com/static/fonts/lato/v7/8TPEV6NbYWZlNsXjbYVv7w.ttf',
                '900italic' => 'http://themes.googleusercontent.com/static/fonts/lato/v7/draWperrI7n2xi35Cl08fA.ttf',
              ),
            ),
            337 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'League Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/leaguescript/v6/wnRFLvfabWK_DauqppD6vSeUSrabuTpOsMEiRLtKwk0.ttf',
              ),
            ),
            338 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Leckerli One',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/leckerlione/v6/S2Y_iLrItTu8kIJTkS7DrC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            339 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ledger',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ledger/v3/G432jp-tahOfWHbCYkI0jw.ttf',
              ),
            ),
            340 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lekton',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-14',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lekton/v6/r483JYmxf5PjIm4jVAm8Yg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/lekton/v6/_UbDIPBA1wDqSbhp-OED7A.ttf',
                700 => 'http://fonts.gstatic.com/s/lekton/v6/WZw-uL8WTkx3SBVfTlevXQ.ttf',
              ),
            ),
            341 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lemon',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lemon/v4/wed1nNu4LNSu-3RoRVUhUw.ttf',
              ),
            ),
            342 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Libre Baskerville',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/librebaskerville/v3/pR0sBQVcY0JZc_ciXjFsKyyZRYCSvpCzQKuMWnP5NDY.ttf',
                'italic' => 'http://fonts.gstatic.com/s/librebaskerville/v3/QHIOz1iKF3bIEzRdDFaf5QnhapNS5Oi8FPrBRDLbsW4.ttf',
                700 => 'http://fonts.gstatic.com/s/librebaskerville/v3/kH7K4InNTm7mmOXXjrA5v-xuswJKUVpBRfYFpz0W3Iw.ttf',
              ),
            ),
            343 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Life Savers',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lifesavers/v5/g49cUDk4Y1P0G5NMkMAm7qCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/lifesavers/v5/THQKqChyYUm97rNPVFdGGXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
              ),
            ),
            344 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lilita One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lilitaone/v3/vTxJQjbNV6BCBHx8sGDCVvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            345 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lily Script One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lilyscriptone/v3/uPWsLVW8uiXqIBnE8ZwGPDjVlsJB_M_Q_LtZxsoxvlw.ttf',
              ),
            ),
            346 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Limelight',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/limelight/v6/5dTfN6igsXjLjOy8QQShcg.ttf',
              ),
            ),
            347 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Linden Hill',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lindenhill/v5/UgsC0txqd-E1yjvjutwm_KCWcynf_cDxXwCLxiixG1c.ttf',
                'italic' => 'http://fonts.gstatic.com/s/lindenhill/v5/OcS3bZcu8vJvIDH8Zic83keOrDcLawS7-ssYqLr2Xp4.ttf',
              ),
            ),
            348 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lobster',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v9',
              'lastModified' => '2014-06-17',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lobster/v9/9LpJGtNuM1D8FAZ2BkJH2Q.ttf',
              ),
            ),
            349 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lobster Two',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lobstertwo/v6/xb9aY4w9ceh8JRzobID1naCWcynf_cDxXwCLxiixG1c.ttf',
                'italic' => 'http://fonts.gstatic.com/s/lobstertwo/v6/Ul_16MSbfayQv1I4QhLEoEeOrDcLawS7-ssYqLr2Xp4.ttf',
                700 => 'http://fonts.gstatic.com/s/lobstertwo/v6/bmdxOflBqMqjEC0-kGsIiHe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/lobstertwo/v6/LEkN2_no_6kFvRfiBZ8xpM_zJjSACmk0BRPxQqhnNLU.ttf',
              ),
            ),
            350 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Londrina Outline',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/londrinaoutline/v4/lls08GOa1eT74p072l1AWJmp8DTZ6iHear7UV05iykg.ttf',
              ),
            ),
            351 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Londrina Shadow',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/londrinashadow/v3/dNYuzPS_7eYgXFJBzMoKdbw6Z3rVA5KDSi7aQxS92Nk.ttf',
              ),
            ),
            352 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Londrina Sketch',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/londrinasketch/v3/p7Ai06aT1Ycp_D2fyE3z69d6z_uhFGnpCOifUY1fJQo.ttf',
              ),
            ),
            353 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Londrina Solid',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/londrinasolid/v3/yysorIEiYSBb0ylZjg791MR125CwGqh8XBqkBzea0LA.ttf',
              ),
            ),
            354 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lora',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                'regular' => 'http://themes.googleusercontent.com/static/fonts/lora/v7/aXJ7KVIGcejEy1abawZazg.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/lora/v7/AN2EZaj2tFRpyveuNn9BOg.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/lora/v7/enKND5SfzQKkggBA_VnT1A.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/lora/v7/ivs9j3kYU65pR9QD9YFdzQ.ttf',
              ),
            ),
            355 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Love Ya Like A Sister',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/loveyalikeasister/v6/LzkxWS-af0Br2Sk_YgSJY-ad1xEP8DQfgfY8MH9aBUg.ttf',
              ),
            ),
            356 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Loved by the King',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lovedbytheking/v5/wg03xD4cWigj4YDufLBSr8io2AFEwwMpu7y5KyiyAJc.ttf',
              ),
            ),
            357 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lovers Quarrel',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/loversquarrel/v3/gipdZ8b7pKb89MzQLAtJHLHLxci2ElvNEmOB303HLk0.ttf',
              ),
            ),
            358 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Luckiest Guy',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/luckiestguy/v5/5718gH8nDy3hFVihOpkY5C3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            359 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lusitana',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lusitana/v3/l1h9VDomkwbdzbPdmLcUIw.ttf',
                700 => 'http://fonts.gstatic.com/s/lusitana/v3/GWtZyUsONxgkdl3Mc1P7FKCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            360 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Lustria',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/lustria/v3/gXAk0s4ai0X-TAOhYzZd1w.ttf',
              ),
            ),
            361 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Macondo',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/macondo/v4/G6yPNUscRPQ8ufBXs_8yRQ.ttf',
              ),
            ),
            362 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Macondo Swash Caps',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/macondoswashcaps/v3/SsSR706z-MlvEH7_LS6JAPkkgYRHs6GSG949m-K6x2k.ttf',
              ),
            ),
            363 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Magra',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/magra/v3/hoZ13bwCXBxuGZqAudgc5A.ttf',
                700 => 'http://fonts.gstatic.com/s/magra/v3/6fOM5sq5cIn8D0RjX8Lztw.ttf',
              ),
            ),
            364 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Maiden Orange',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/maidenorange/v5/ZhKIA2SPisEwdhW7g0RUWojjx0o0jr6fNXxPgYh_a8Q.ttf',
              ),
            ),
            365 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mako',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mako/v6/z5zSLmfPlv1uTVAdmJBLXg.ttf',
              ),
            ),
            366 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Marcellus',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/marcellus/v3/UjiLZzumxWC9whJ86UtaYw.ttf',
              ),
            ),
            367 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Marcellus SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/marcellussc/v3/_jugwxhkkynrvsfrxVx8gS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            368 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Marck Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/marckscript/v6/O_D1NAZVOFOobLbVtW3bci3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            369 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Margarine',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/margarine/v4/DJnJwIrcO_cGkjSzY3MERw.ttf',
              ),
            ),
            370 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Marko One',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/markoone/v5/hpP7j861sOAco43iDc4n4w.ttf',
              ),
            ),
            371 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Marmelad',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/marmelad/v5/jI0_FBlSOIRLL0ePWOhOwQ.ttf',
              ),
            ),
            372 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Marvel',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/marvel/v5/Fg1dO8tWVb-MlyqhsbXEkg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/marvel/v5/HzyjFB-oR5usrc7Lxz9g8w.ttf',
                700 => 'http://fonts.gstatic.com/s/marvel/v5/WrHDBL1RupWGo2UcdgxB3Q.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/marvel/v5/Gzf5NT09Y6xskdQRj2kz1qCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            373 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mate',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mate/v4/ooFviPcJ6hZP5bAE71Cawg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/mate/v4/5XwW6_cbisGvCX5qmNiqfA.ttf',
              ),
            ),
            374 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mate SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/matesc/v4/-YkIT2TZoPZF6pawKzDpWw.ttf',
              ),
            ),
            375 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Maven Pro',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '500',
                2 => '700',
                3 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mavenpro/v6/sqPJIFG4gqsjl-0q_46Gbw.ttf',
                500 => 'http://fonts.gstatic.com/s/mavenpro/v6/SQVfzoJBbj9t3aVcmbspRi3USBnSvpkopQaUR-2r7iU.ttf',
                700 => 'http://fonts.gstatic.com/s/mavenpro/v6/uDssvmXgp7Nj3i336k_dSi3USBnSvpkopQaUR-2r7iU.ttf',
                900 => 'http://fonts.gstatic.com/s/mavenpro/v6/-91TwiFzqeL1F7Kh91APwS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            376 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'McLaren',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mclaren/v3/OprvTGxaiINBKW_1_U0eoQ.ttf',
              ),
            ),
            377 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Meddon',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/meddon/v6/f8zJO98uu2EtSj9p7ci9RA.ttf',
              ),
            ),
            378 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'MedievalSharp',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/medievalsharp/v7/85X_PjV6tftJ0-rX7KYQkOe45sJkivqprK7VkUlzfg0.ttf',
              ),
            ),
            379 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Medula One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/medulaone/v5/AasPgDQak81dsTGQHc5zUPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            380 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Megrim',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/megrim/v6/e-9jVUC9lv1zxaFQARuftw.ttf',
              ),
            ),
            381 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Meie Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/meiescript/v3/oTIWE5MmPye-rCyVp_6KEqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            382 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Merienda',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/merienda/v3/MYY6Og1qZlOQtPW2G95Y3A.ttf',
                700 => 'http://fonts.gstatic.com/s/merienda/v3/GlwcvRLlgiVE2MBFQ4r0sKCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            383 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Merienda One',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/meriendaone/v6/bCA-uDdUx6nTO8SjzCLXvS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            384 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Merriweather',
              'category' => 'serif',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
                4 => '700',
                5 => '700italic',
                6 => '900',
                7 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/merriweather/v7/ZvcMqxEwPfh2qDWBPxn6nqcQoVhARpoaILP7amxE_8g.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/merriweather/v7/EYh7Vl4ywhowqULgRdYwICna0FLWfcB-J_SAYmcAXaI.ttf',
                'regular' => 'http://fonts.gstatic.com/s/merriweather/v7/RFda8w1V0eDZheqfcyQ4EC3USBnSvpkopQaUR-2r7iU.ttf',
                'italic' => 'http://fonts.gstatic.com/s/merriweather/v7/So5lHxHT37p2SS4-t60SlPMZXuCXbOrAvx5R0IT5Oyo.ttf',
                700 => 'http://fonts.gstatic.com/s/merriweather/v7/ZvcMqxEwPfh2qDWBPxn6nkD2ttfZwueP-QU272T9-k4.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/merriweather/v7/EYh7Vl4ywhowqULgRdYwIPAs9-1nE9qOqhChW0m4nDE.ttf',
                900 => 'http://fonts.gstatic.com/s/merriweather/v7/ZvcMqxEwPfh2qDWBPxn6nqObDOjC3UL77puoeHsE3fw.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/merriweather/v7/EYh7Vl4ywhowqULgRdYwIBd0_s6jQr9r5s5OZYvtzBY.ttf',
              ),
            ),
            385 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Merriweather Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
                4 => '700',
                5 => '700italic',
                6 => '800',
                7 => '800italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/merriweathersans/v4/6LmGj5dOJopQKEkt88Gowan5N8K-_DP0e9e_v51obXQ.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/merriweathersans/v4/nAqt4hiqwq3tzCecpgPmVdytE4nGXk2hYD5nJ740tBw.ttf',
                'regular' => 'http://fonts.gstatic.com/s/merriweathersans/v4/AKu1CjQ4qnV8MUltkAX3sOAj_ty82iuwwDTNEYXGiyQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/merriweathersans/v4/3Mz4hOHzs2npRMG3B1ascZ32VBCoA_HLsn85tSWZmdo.ttf',
                700 => 'http://fonts.gstatic.com/s/merriweathersans/v4/6LmGj5dOJopQKEkt88GowbqxG25nQNOioCZSK4sU-CA.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/merriweathersans/v4/nAqt4hiqwq3tzCecpgPmVbuqAJxizi8Dk_SK5et7kMg.ttf',
                800 => 'http://fonts.gstatic.com/s/merriweathersans/v4/6LmGj5dOJopQKEkt88GowYufzO2zUYSj5LqoJ3UGkco.ttf',
                '800italic' => 'http://fonts.gstatic.com/s/merriweathersans/v4/nAqt4hiqwq3tzCecpgPmVdDmPrYMy3aZO4LmnZsxTQw.ttf',
              ),
            ),
            386 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Metal',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/metal/v8/zA3UOP13ooQcxjv04BZX5g.ttf',
              ),
            ),
            387 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Metal Mania',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/metalmania/v5/isriV_rAUgj6bPWPN6l9QKCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            388 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Metamorphous',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/metamorphous/v5/wGqUKXRinIYggz-BTRU9ei3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            389 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Metrophobic',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/metrophobic/v5/SaglWZWCrrv_D17u1i4v_aCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            390 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Michroma',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/michroma/v6/0c2XrW81_QsiKV8T9thumA.ttf',
              ),
            ),
            391 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Milonga',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/milonga/v3/dzNdIUSTGFmy2ahovDRcWg.ttf',
              ),
            ),
            392 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Miltonian',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/miltonian/v7/Z4HrYZyqm0BnNNzcCUfzoQ.ttf',
              ),
            ),
            393 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Miltonian Tattoo',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/miltoniantattoo/v8/1oU_8OGYwW46eh02YHydn2uk0YtI6thZkz1Hmh-odwg.ttf',
              ),
            ),
            394 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Miniver',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/miniver/v4/4yTQohOH_cWKRS5laRFhYg.ttf',
              ),
            ),
            395 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Miss Fajardose',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/missfajardose/v5/WcXjlQPKn6nBfr8LY3ktNu6rPKfVZo7L2bERcf0BDns.ttf',
              ),
            ),
            396 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Modern Antiqua',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/modernantiqua/v5/8qX_tr6Xzy4t9fvZDXPkh6rFJ4O13IHVxZbM6yoslpo.ttf',
              ),
            ),
            397 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Molengo',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/molengo/v6/jcjgeGuzv83I55AzOTpXNQ.ttf',
              ),
            ),
            398 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Molle',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'italic' => 'http://fonts.gstatic.com/s/molle/v3/9XTdCsjPXifLqo5et-YoGA.ttf',
              ),
            ),
            399 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Monda',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/monda/v3/qFMHZ9zvR6B_gnoIgosPrw.ttf',
                700 => 'http://fonts.gstatic.com/s/monda/v3/EVOzZUyc_j1w2GuTgTAW1g.ttf',
              ),
            ),
            400 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Monofett',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/monofett/v5/C6K5L799Rgxzg2brgOaqAw.ttf',
              ),
            ),
            401 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Monoton',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/monoton/v5/aCz8ja_bE4dg-7agSvExdw.ttf',
              ),
            ),
            402 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Monsieur La Doulaise',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/monsieurladoulaise/v4/IMAdMj6Eq9jZ46CPctFtMKP61oAqTJXlx5ZVOBmcPdM.ttf',
              ),
            ),
            403 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Montaga',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/montaga/v3/PwTwUboiD-M4-mFjZfJs2A.ttf',
              ),
            ),
            404 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Montez',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/montez/v5/kx58rLOWQQLGFM4pDHv5Ng.ttf',
              ),
            ),
            405 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Montserrat',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                'regular' => 'http://themes.googleusercontent.com/static/fonts/montserrat/v4/Kqy6-utIpx_30Xzecmeo8_esZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/montserrat/v4/IQHow_FEYlDC4Gzy_m8fcgJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            406 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Montserrat Alternates',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/montserratalternates/v3/z2n1Sjxk9souK3HCtdHuklPuEVRGaG9GCQnmM16YWq0.ttf',
                700 => 'http://fonts.gstatic.com/s/montserratalternates/v3/YENqOGAVzwIHjYNjmKuAZpeqBKvsAhm-s2I4RVSXFfc.ttf',
              ),
            ),
            407 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Montserrat Subrayada',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/montserratsubrayada/v3/nzoCWCz0e9c7Mr2Gl8bbgrJymm6ilkk9f0nDA_sC_qk.ttf',
                700 => 'http://fonts.gstatic.com/s/montserratsubrayada/v3/wf-IKpsHcfm0C9uaz9IeGJvEcF1LWArDbGWgKZSH9go.ttf',
              ),
            ),
            408 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Moul',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/moul/v7/Kb0ALQnfyXawP1a_P_gpTQ.ttf',
              ),
            ),
            409 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Moulpali',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/moulpali/v8/diD74BprGhmVkJoerKmrKA.ttf',
              ),
            ),
            410 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mountains of Christmas',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mountainsofchristmas/v7/dVGBFPwd6G44IWDbQtPew2Auds3jz1Fxb61CgfaGDr4.ttf',
                700 => 'http://fonts.gstatic.com/s/mountainsofchristmas/v7/PymufKtHszoLrY0uiAYKNM9cPTbSBTrQyTa5TWAe3vE.ttf',
              ),
            ),
            411 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mouse Memoirs',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mousememoirs/v3/NBFaaJFux_j0AQbAsW3QeH8f0n03UdmQgF_CLvNR2vg.ttf',
              ),
            ),
            412 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mr Bedfort',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mrbedfort/v4/81bGgHTRikLs_puEGshl7_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            413 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mr Dafoe',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mrdafoe/v4/s32Q1S6ZkT7EaX53mUirvQ.ttf',
              ),
            ),
            414 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mr De Haviland',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mrdehaviland/v4/fD8y4L6PJ4vqDk7z8Y8e27v4lrhng1lzu7-weKO6cw8.ttf',
              ),
            ),
            415 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mrs Saint Delafield',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mrssaintdelafield/v3/vuWagfFT7bj9lFtZOFBwmjHMBelqWf3tJeGyts2SmKU.ttf',
              ),
            ),
            416 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mrs Sheppards',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mrssheppards/v4/2WFsWMV3VUeCz6UVH7UjCn8f0n03UdmQgF_CLvNR2vg.ttf',
              ),
            ),
            417 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Muli',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/muli/v6/VJw4F3ZHRAZ7Hmg3nQu5YQ.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/muli/v6/s-NKMCru8HiyjEt0ZDoBoA.ttf',
                'regular' => 'http://fonts.gstatic.com/s/muli/v6/KJiP6KznxbALQgfJcDdPAw.ttf',
                'italic' => 'http://fonts.gstatic.com/s/muli/v6/Cg0K_IWANs9xkNoxV7H1_w.ttf',
              ),
            ),
            418 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Mystery Quest',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/mysteryquest/v3/467jJvg0c7HgucvBB9PLDyeUSrabuTpOsMEiRLtKwk0.ttf',
              ),
            ),
            419 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Neucha',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'cyrillic',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/neucha/v6/bijdhB-TzQdtpl0ykhGh4Q.ttf',
              ),
            ),
            420 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Neuton',
              'category' => 'serif',
              'variants' => 
              array (
                0 => '200',
                1 => '300',
                2 => 'regular',
                3 => 'italic',
                4 => '700',
                5 => '800',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                200 => 'http://fonts.gstatic.com/s/neuton/v7/DA3Mkew3XqSkPpi1f4tJow.ttf',
                300 => 'http://fonts.gstatic.com/s/neuton/v7/xrc_aZ2hx-gdeV0mlY8Vww.ttf',
                'regular' => 'http://fonts.gstatic.com/s/neuton/v7/9R-MGIOQUdjAVeB6nE6PcQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/neuton/v7/uVMT3JOB5BNFi3lgPp6kEg.ttf',
                700 => 'http://fonts.gstatic.com/s/neuton/v7/gnWpkWY7DirkKiovncYrfg.ttf',
                800 => 'http://fonts.gstatic.com/s/neuton/v7/XPzBQV4lY6enLxQG9cF1jw.ttf',
              ),
            ),
            421 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'New Rocker',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/newrocker/v4/EFUWzHJedEkpW399zYOHofesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            422 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'News Cycle',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v11',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/newscycle/v11/xyMAr8VfiUzIOvS1abHJO_esZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/newscycle/v11/G28Ny31cr5orMqEQy6ljtwJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            423 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Niconne',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/niconne/v5/ZA-mFw2QNXodx5y7kfELBg.ttf',
              ),
            ),
            424 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nixie One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/nixieone/v6/h6kQfmzm0Shdnp3eswRaqQ.ttf',
              ),
            ),
            425 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nobile',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/nobile/v6/lC_lPi1ddtN38iXTCRh6ow.ttf',
                'italic' => 'http://fonts.gstatic.com/s/nobile/v6/vGmrpKzWQQSrb-PR6FWBIA.ttf',
                700 => 'http://fonts.gstatic.com/s/nobile/v6/9p6M-Yrg_r_QPmSD1skrOg.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/nobile/v6/oQ1eYPaXV638N03KvsNvyKCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            426 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nokora',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/nokora/v8/dRyz1JfnyKPNaRcBNX9F9A.ttf',
                700 => 'http://fonts.gstatic.com/s/nokora/v8/QMqqa4QEOhQpiig3cAPmbQ.ttf',
              ),
            ),
            427 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Norican',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/norican/v3/SHnSqhYAWG5sZTWcPzEHig.ttf',
              ),
            ),
            428 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nosifer',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/nosifer/v4/7eJGoIuHRrtcG00j6CptSA.ttf',
              ),
            ),
            429 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nothing You Could Do',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/nothingyoucoulddo/v5/jpk1K3jbJoyoK0XKaSyQAf-TpkXjXYGWiJZAEtBRjPU.ttf',
              ),
            ),
            430 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Noticia Text',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'vietnamese',
                2 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/noticiatext/v5/wdyV6x3eKpdeUPQ7BJ5uUC3USBnSvpkopQaUR-2r7iU.ttf',
                'italic' => 'http://fonts.gstatic.com/s/noticiatext/v5/dAuxVpkYE_Q_IwIm6elsKPMZXuCXbOrAvx5R0IT5Oyo.ttf',
                700 => 'http://fonts.gstatic.com/s/noticiatext/v5/pEko-RqEtp45bE2P80AAKUD2ttfZwueP-QU272T9-k4.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/noticiatext/v5/-rQ7V8ARjf28_b7kRa0JuvAs9-1nE9qOqhChW0m4nDE.ttf',
              ),
            ),
            431 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Noto Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'devanagari',
                7 => 'greek',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/notosans/v5/0Ue9FiUJwVhi4NGfHJS5uA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/notosans/v5/dLcNKMgJ1H5RVoZFraDz0qCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/notosans/v5/PIbvSEyHEdL91QLOQRnZ1y3USBnSvpkopQaUR-2r7iU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/notosans/v5/9Z3uUWMRR7crzm1TjRicDne1Pd76Vl7zRpE7NLJQ7XU.ttf',
              ),
            ),
            432 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Noto Serif',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'greek',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/notoserif/v3/zW6mc7bC1CWw8dH0yxY8JfesZW2xOQ-xsNqO47m55DA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/notoserif/v3/HQXBIwLHsOJCNEQeX9kNzy3USBnSvpkopQaUR-2r7iU.ttf',
                700 => 'http://fonts.gstatic.com/s/notoserif/v3/lJAvZoKA5NttpPc9yc6lPQJKKGfqHaYFsRG-T3ceEVo.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/notoserif/v3/Wreg0Be4tcFGM2t6VWytvED2ttfZwueP-QU272T9-k4.ttf',
              ),
            ),
            433 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nova Cut',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/novacut/v7/6q12jWcBvj0KO2cMRP97tA.ttf',
              ),
            ),
            434 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nova Flat',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/novaflat/v7/pK7a0CoGzI684qe_XSHBqQ.ttf',
              ),
            ),
            435 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nova Mono',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
                1 => 'greek',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/novamono/v6/6-SChr5ZIaaasJFBkgrLNw.ttf',
              ),
            ),
            436 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nova Oval',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/novaoval/v7/VuukVpKP8BwUf8o9W5LYQQ.ttf',
              ),
            ),
            437 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nova Round',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/novaround/v7/7-cK3Ari_8XYYFgVMxVhDvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            438 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nova Script',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/novascript/v7/dEvxQDLgx1M1TKY-NmBWYaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            439 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nova Slim',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/novaslim/v7/rPYXC81_VL2EW-4CzBX65g.ttf',
              ),
            ),
            440 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nova Square',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/novasquare/v7/BcBzXoaDzYX78rquGXVuSqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            441 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Numans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/numans/v5/g5snI2p6OEjjTNmTHyBdiQ.ttf',
              ),
            ),
            442 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Nunito',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/nunito/v6/zXQvrWBJqUooM7Xv98MrQw.ttf',
                'regular' => 'http://fonts.gstatic.com/s/nunito/v6/ySZTeT3IuzJj0GK6uGpbBg.ttf',
                700 => 'http://fonts.gstatic.com/s/nunito/v6/aEdlqgMuYbpe4U3TnqOQMA.ttf',
              ),
            ),
            443 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Odor Mean Chey',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/odormeanchey/v7/GK3E7EjPoBkeZhYshGFo0eVKG8sq4NyGgdteJLvqLDs.ttf',
              ),
            ),
            444 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Offside',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/offside/v3/v0C913SB8wqQUvcu1faUqw.ttf',
              ),
            ),
            445 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Old Standard TT',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/oldstandardtt/v6/n6RTCDcIPWSE8UNBa4k-DLcB5jyhm1VsHs65c3QNDr0.ttf',
                'italic' => 'http://fonts.gstatic.com/s/oldstandardtt/v6/QQT_AUSp4AV4dpJfIN7U5PWrQzeMtsHf8QsWQ2cZg3c.ttf',
                700 => 'http://fonts.gstatic.com/s/oldstandardtt/v6/5Ywdce7XEbTSbxs__4X1_HJqbZqK7TdZ58X80Q_Lw8Y.ttf',
              ),
            ),
            446 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Oldenburg',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/oldenburg/v3/dqA_M_uoCVXZbCO-oKBTnQ.ttf',
              ),
            ),
            447 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Oleo Script',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/oleoscript/v4/21stZcmPyzbQVXtmGegyqKCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/oleoscript/v4/hudNQFKFl98JdNnlo363fne1Pd76Vl7zRpE7NLJQ7XU.ttf',
              ),
            ),
            448 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Oleo Script Swash Caps',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/oleoscriptswashcaps/v3/vdWhGqsBUAP-FF3NOYTe4iMF4kXAPemmyaDpMXQ31P0.ttf',
                700 => 'http://fonts.gstatic.com/s/oleoscriptswashcaps/v3/HMO3ftxA9AU5floml9c755reFYaXZ4zuJXJ8fr8OO1g.ttf',
              ),
            ),
            449 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Open Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
                4 => '600',
                5 => '600italic',
                6 => '700',
                7 => '700italic',
                8 => '800',
                9 => '800italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'devanagari',
                7 => 'greek',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-14',
              'files' => 
              array (
                300 => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/DXI1ORHCpsQm3Vp6mXoaTS3USBnSvpkopQaUR-2r7iU.ttf',
                '300italic' => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/PRmiXeptR36kaC0GEAetxi9-WlPSxbfiI49GsXo3q0g.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/IgZJs4-7SA1XX_edsoXWog.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/O4NhV7_qs9r9seTo7fnsVKCWcynf_cDxXwCLxiixG1c.ttf',
                600 => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/MTP_ySUJH_bn48VBG8sNSi3USBnSvpkopQaUR-2r7iU.ttf',
                '600italic' => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/PRmiXeptR36kaC0GEAetxpZ7xm-Bj30Bj2KNdXDzSZg.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/k3k702ZOKiLJc3WVjuplzC3USBnSvpkopQaUR-2r7iU.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/PRmiXeptR36kaC0GEAetxne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                800 => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/EInbV5DfGHOiMmvb1Xr-hi3USBnSvpkopQaUR-2r7iU.ttf',
                '800italic' => 'http://themes.googleusercontent.com/static/fonts/opensans/v8/PRmiXeptR36kaC0GEAetxg89PwPrYLaRFJ-HNCU9NbA.ttf',
              ),
            ),
            450 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Open Sans Condensed',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'greek',
              ),
              'version' => 'v7',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                300 => 'http://themes.googleusercontent.com/static/fonts/opensanscondensed/v7/gk5FxslNkTTHtojXrkp-xEMwSSh38KQVJx4ABtsZTnA.ttf',
                '300italic' => 'http://themes.googleusercontent.com/static/fonts/opensanscondensed/v7/jIXlqT1WKafUSwj6s9AzV4_LkTZ_uhAwfmGJ084hlvM.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/opensanscondensed/v7/gk5FxslNkTTHtojXrkp-xBEM87DM3yorPOrvA-vB930.ttf',
              ),
            ),
            451 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Oranienbaum',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/oranienbaum/v3/M98jYwCSn0PaFhXXgviCoaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            452 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Orbitron',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '500',
                2 => '700',
                3 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/orbitron/v5/DY8swouAZjR3RaUPRf0HDQ.ttf',
                500 => 'http://fonts.gstatic.com/s/orbitron/v5/p-y_ffzMdo5JN_7ia0vYEqCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/orbitron/v5/PS9_6SLkY1Y6OgPO3APr6qCWcynf_cDxXwCLxiixG1c.ttf',
                900 => 'http://fonts.gstatic.com/s/orbitron/v5/2I3-8i9hT294TE_pyjy9SaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            453 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Oregano',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/oregano/v3/UiLhqNixVv2EpjRoBG6axA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/oregano/v3/_iwqGEht6XsAuEaCbYG64Q.ttf',
              ),
            ),
            454 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Orienta',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/orienta/v3/_NKSk93mMs0xsqtfjCsB3Q.ttf',
              ),
            ),
            455 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Original Surfer',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/originalsurfer/v4/gdHw6HpSIN4D6Xt7pi1-qIkEz33TDwAZczo_6fY7eg0.ttf',
              ),
            ),
            456 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Oswald',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                300 => 'http://themes.googleusercontent.com/static/fonts/oswald/v8/y3tZpCdiRD4oNRRYFcAR5Q.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/oswald/v8/uLEd2g2vJglLPfsBF91DCg.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/oswald/v8/7wj8ldV_5Ti37rHa0m1DDw.ttf',
              ),
            ),
            457 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Over the Rainbow',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/overtherainbow/v6/6gp-gkpI2kie2dHQQLM2jQBdxkZd83xOSx-PAQ2QmiI.ttf',
              ),
            ),
            458 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Overlock',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
                4 => '900',
                5 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/overlock/v4/Z8oYsGi88-E1cUB8YBFMAg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/overlock/v4/rq6EacukHROOBrFrK_zF6_esZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/overlock/v4/Fexr8SqXM8Bm_gEVUA7AKaCWcynf_cDxXwCLxiixG1c.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/overlock/v4/wFWnYgeXKYBks6gEUwYnfAJKKGfqHaYFsRG-T3ceEVo.ttf',
                900 => 'http://fonts.gstatic.com/s/overlock/v4/YPJCVTT8ZbG3899l_-KIGqCWcynf_cDxXwCLxiixG1c.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/overlock/v4/iOZhxT2zlg7W5ij_lb-oDp0EAVxt0G0biEntp43Qt6E.ttf',
              ),
            ),
            459 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Overlock SC',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/overlocksc/v4/8D7HYDsvS_g1GhBnlHzgzaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            460 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ovo',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ovo/v6/mFg27dimu3s9t09qjCwB1g.ttf',
              ),
            ),
            461 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Oxygen',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                300 => 'http://themes.googleusercontent.com/static/fonts/oxygen/v3/lZ31r0bR1Bzt_DfGZu1S8A.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/oxygen/v3/uhoyAE7XlQL22abzQieHjw.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/oxygen/v3/yLqkmDwuNtt5pSqsJmhyrg.ttf',
              ),
            ),
            462 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Oxygen Mono',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/oxygenmono/v3/DigTu7k4b7OmM8ubt1Qza6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            463 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'PT Mono',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ptmono/v3/QUbM8H9yJK5NhpQ0REO6Wg.ttf',
              ),
            ),
            464 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'PT Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-14',
              'files' => 
              array (
                'regular' => 'http://themes.googleusercontent.com/static/fonts/ptsans/v6/UFoEz2uiuMypUGZL1NKoeg.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/ptsans/v6/yls9EYWOd496wiu7qzfgNg.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/ptsans/v6/F51BEgHuR0tYHxF0bD4vwvesZW2xOQ-xsNqO47m55DA.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/ptsans/v6/lILlYDvubYemzYzN7GbLkC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            465 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'PT Sans Caption',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ptsanscaption/v8/OXYTDOzBcXU8MTNBvBHeSW8by34Z3mUMtM-o4y-SHCY.ttf',
                700 => 'http://fonts.gstatic.com/s/ptsanscaption/v8/Q-gJrFokeE7JydPpxASt25tc0eyfI4QDEsobEEpk_hA.ttf',
              ),
            ),
            466 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'PT Sans Narrow',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                'regular' => 'http://themes.googleusercontent.com/static/fonts/ptsansnarrow/v5/UyYrYy3ltEffJV9QueSi4ZTvAuddT2xDMbdz0mdLyZY.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/ptsansnarrow/v5/Q_pTky3Sc3ubRibGToTAYsLtdzs3iyjn_YuT226ZsLU.ttf',
              ),
            ),
            467 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'PT Serif',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ptserif/v7/sAo427rn3-QL9sWCbMZXhA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/ptserif/v7/9khWhKzhpkH0OkNnBKS3n_esZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/ptserif/v7/kyZw18tqQ5if-_wpmxxOeKCWcynf_cDxXwCLxiixG1c.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/ptserif/v7/Foydq9xJp--nfYIx2TBz9QJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            468 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'PT Serif Caption',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ptserifcaption/v7/7xkFOeTxxO1GMC1suOUYWVsRioCqs5fohhaYel24W3k.ttf',
                'italic' => 'http://fonts.gstatic.com/s/ptserifcaption/v7/0kfPsmrmTSgiec7u_Wa0DB1mqvzPHelJwRcF_s_EUM0.ttf',
              ),
            ),
            469 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Pacifico',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/pacifico/v6/GIrpeRY1r5CzbfL8r182lw.ttf',
              ),
            ),
            470 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Paprika',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/paprika/v3/b-VpyoRSieBdB5BPJVF8HQ.ttf',
              ),
            ),
            471 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Parisienne',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/parisienne/v3/TW74B5QISJNx9moxGlmJfvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            472 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Passero One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/passeroone/v7/Yc-7nH5deCCv9Ed0MMnAQqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            473 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Passion One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
                2 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/passionone/v5/1UIK1tg3bKJ4J3o35M4heqCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/passionone/v5/feOcYDy2R-f3Ysy72PYJ2ne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                900 => 'http://fonts.gstatic.com/s/passionone/v5/feOcYDy2R-f3Ysy72PYJ2ienaqEuufTBk9XMKnKmgDA.ttf',
              ),
            ),
            474 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Pathway Gothic One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/pathwaygothicone/v3/Lqv9ztoTUV8Q0FmQZzPqaA6A6xIYD7vYcYDop1i-K-c.ttf',
              ),
            ),
            475 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Patrick Hand',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'vietnamese',
                2 => 'latin',
              ),
              'version' => 'v9',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/patrickhand/v9/9BG3JJgt_HlF3NpEUehL0C3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            476 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Patrick Hand SC',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'vietnamese',
                2 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/patrickhandsc/v3/OYFWCgfCR-7uHIovjUZXsbAgSRh1LpJXlLfl8IbsmHg.ttf',
              ),
            ),
            477 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Patua One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/patuaone/v5/njZwotTYjswR4qdhsW-kJw.ttf',
              ),
            ),
            478 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Paytone One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/paytoneone/v7/3WCxC7JAJjQHQVoIE0ZwvqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            479 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Peralta',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/peralta/v3/cTJX5KEuc0GKRU9NXSm-8Q.ttf',
              ),
            ),
            480 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Permanent Marker',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/permanentmarker/v4/9vYsg5VgPHKK8SXYbf3sMol14xj5tdg9OHF8w4E7StQ.ttf',
              ),
            ),
            481 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Petit Formal Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/petitformalscript/v3/OEZwr2-ovBsq2n3ACCKoEvVPl2Gjtxj0D6F7QLy1VQc.ttf',
              ),
            ),
            482 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Petrona',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/petrona/v4/nnQwxlP6dhrGovYEFtemTg.ttf',
              ),
            ),
            483 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Philosopher',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'cyrillic',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/philosopher/v6/oZLTrB9jmJsyV0u_T0TKEaCWcynf_cDxXwCLxiixG1c.ttf',
                'italic' => 'http://fonts.gstatic.com/s/philosopher/v6/_9Hnc_gz9k7Qq6uKaeHKmUeOrDcLawS7-ssYqLr2Xp4.ttf',
                700 => 'http://fonts.gstatic.com/s/philosopher/v6/napvkewXG9Gqby5vwGHICHe1Pd76Vl7zRpE7NLJQ7XU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/philosopher/v6/PuKlryTcvTj7-qZWfLCFIM_zJjSACmk0BRPxQqhnNLU.ttf',
              ),
            ),
            484 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Piedra',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/piedra/v4/owf-AvEEyAj9LJ2tVZ_3Mw.ttf',
              ),
            ),
            485 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Pinyon Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/pinyonscript/v5/TzghnhfCn7TuE73f-CBQ0CeUSrabuTpOsMEiRLtKwk0.ttf',
              ),
            ),
            486 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Pirata One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/pirataone/v3/WnbD86B4vB2ckYcL7oxuhvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            487 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Plaster',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/plaster/v6/O4QG9Z5116CXyfJdR9zxLw.ttf',
              ),
            ),
            488 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Play',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'cyrillic-ext',
                3 => 'cyrillic',
                4 => 'latin',
                5 => 'greek',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/play/v5/GWvfObW8LhtsOX333MCpBg.ttf',
                700 => 'http://fonts.gstatic.com/s/play/v5/crPhg6I0alLI-MpB3vW-zw.ttf',
              ),
            ),
            489 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Playball',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/playball/v5/3hOFiQm_EUzycTpcN9uz4w.ttf',
              ),
            ),
            490 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Playfair Display',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
                4 => '900',
                5 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v9',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/playfairdisplay/v9/2NBgzUtEeyB-Xtpr9bm1CV6uyC_qD11hrFQ6EGgTJWI.ttf',
                'italic' => 'http://fonts.gstatic.com/s/playfairdisplay/v9/9MkijrV-dEJ0-_NWV7E6NzMsbnvDNEBX25F5HWk9AhI.ttf',
                700 => 'http://fonts.gstatic.com/s/playfairdisplay/v9/UC3ZEjagJi85gF9qFaBgICsv6SrURqJprbhH_C1Mw8w.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/playfairdisplay/v9/n7G4PqJvFP2Kubl0VBLDECsYW3XoOVcYyYdp9NzzS9E.ttf',
                900 => 'http://fonts.gstatic.com/s/playfairdisplay/v9/UC3ZEjagJi85gF9qFaBgIKqwMe2wjvZrAR44M0BJZ48.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/playfairdisplay/v9/n7G4PqJvFP2Kubl0VBLDEC0JfJ4xmm7j1kL6D7mPxrA.ttf',
              ),
            ),
            491 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Playfair Display SC',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
                4 => '900',
                5 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v3/G0-tvBxd4eQRdwFKB8dRkcpjYTDWIvcAwAccqeW9uNM.ttf',
                'italic' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v3/myuYiFR-4NTrUT4w6TKls2klJsJYggW8rlNoTOTuau0.ttf',
                700 => 'http://fonts.gstatic.com/s/playfairdisplaysc/v3/5ggqGkvWJU_TtW2W8cEubA-Amcyomnuy4WsCiPxGHjw.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v3/6X0OQrQhEEnPo56RalREX4krgPi80XvBcbTwmz-rgmU.ttf',
                900 => 'http://fonts.gstatic.com/s/playfairdisplaysc/v3/5ggqGkvWJU_TtW2W8cEubKXL3C32k275YmX_AcBPZ7w.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/playfairdisplaysc/v3/6X0OQrQhEEnPo56RalREX8Zag2q3ssKz8uH1RU4a9gs.ttf',
              ),
            ),
            492 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Podkova',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/podkova/v7/eylljyGVfB8ZUQjYY3WZRQ.ttf',
                700 => 'http://fonts.gstatic.com/s/podkova/v7/SqW4aa8m_KVrOgYSydQ33vesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            493 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Poiret One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/poiretone/v3/dWcYed048E5gHGDIt8i1CPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            494 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Poller One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/pollerone/v5/dkctmDlTPcZ6boC8662RA_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            495 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Poly',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/poly/v6/bcMAuiacS2qkd54BcwW6_Q.ttf',
                'italic' => 'http://fonts.gstatic.com/s/poly/v6/Zkx-eIlZSjKUrPGYhV5PeA.ttf',
              ),
            ),
            496 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Pompiere',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/pompiere/v5/o_va2p9CD5JfmFohAkGZIA.ttf',
              ),
            ),
            497 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Pontano Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/pontanosans/v3/gTHiwyxi6S7iiHpqAoiE3C3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            498 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Port Lligat Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/portlligatsans/v4/CUEdhRk7oC7up0p6t0g4P6mASEpx5X0ZpsuJOuvfOGA.ttf',
              ),
            ),
            499 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Port Lligat Slab',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/portlligatslab/v4/CUEdhRk7oC7up0p6t0g4PxLSPACXvawUYCBEnHsOe30.ttf',
              ),
            ),
            500 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Prata',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/prata/v5/3gmx8r842loRRm9iQkCDGg.ttf',
              ),
            ),
            501 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Preahvihear',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/preahvihear/v7/82tDI-xTc53CxxOzEG4hDaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            502 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Press Start 2P',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
                3 => 'greek',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/pressstart2p/v3/8Lg6LX8-ntOHUQnvQ0E7o1jfl3W46Sz5gOkEVhcFWF4.ttf',
              ),
            ),
            503 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Princess Sofia',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/princesssofia/v3/8g5l8r9BM0t1QsXLTajDe-wjmA7ie-lFcByzHGRhCIg.ttf',
              ),
            ),
            504 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Prociono',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/prociono/v5/43ZYDHWogdFeNBWTl6ksmw.ttf',
              ),
            ),
            505 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Prosto One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/prostoone/v3/bsqnAElAqk9kX7eABTRFJPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            506 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Puritan',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/puritan/v6/wv_RtgVBSCn-or2MC0n4Kg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/puritan/v6/BqZX8Tp200LeMv1KlzXgLQ.ttf',
                700 => 'http://fonts.gstatic.com/s/puritan/v6/pJS2SdwI0SCiVnO0iQSFT_esZW2xOQ-xsNqO47m55DA.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/puritan/v6/rFG3XkMJL75nUNZwCEIJqC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            507 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Purple Purse',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/purplepurse/v4/Q5heFUrdmei9axbMITxxxS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            508 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Quando',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/quando/v3/03nDiEZuO2-h3xvtG6UmHg.ttf',
              ),
            ),
            509 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Quantico',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/quantico/v4/pwSnP8Xpaix2rIz99HrSlQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/quantico/v4/KQhDd2OsZi6HiITUeFQ2U_esZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/quantico/v4/OVZZzjcZ3Hkq2ojVcUtDjaCWcynf_cDxXwCLxiixG1c.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/quantico/v4/HeCYRcZbdRso3ZUu01ELbQJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            510 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Quattrocento',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-29',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/quattrocento/v6/WZDISdyil4HsmirlOdBRFC3USBnSvpkopQaUR-2r7iU.ttf',
                700 => 'http://fonts.gstatic.com/s/quattrocento/v6/Uvi-cRwyvqFpl9j3oT2mqkD2ttfZwueP-QU272T9-k4.ttf',
              ),
            ),
            511 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Quattrocento Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/quattrocentosans/v7/efd6FGWWGX5Z3ztwLBrG9eAj_ty82iuwwDTNEYXGiyQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/quattrocentosans/v7/8PXYbvM__bjl0rBnKiByg532VBCoA_HLsn85tSWZmdo.ttf',
                700 => 'http://fonts.gstatic.com/s/quattrocentosans/v7/tXSgPxDl7Lk8Zr_5qX8FIbqxG25nQNOioCZSK4sU-CA.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/quattrocentosans/v7/8N1PdXpbG6RtFvTjl-5E7buqAJxizi8Dk_SK5et7kMg.ttf',
              ),
            ),
            512 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Questrial',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/questrial/v5/MoHHaw_WwNs_hd9ob1zTVw.ttf',
              ),
            ),
            513 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Quicksand',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/quicksand/v4/qhfoJiLu10kFjChCCTvGlC3USBnSvpkopQaUR-2r7iU.ttf',
                'regular' => 'http://fonts.gstatic.com/s/quicksand/v4/Ngv3fIJjKB7sD-bTUGIFCA.ttf',
                700 => 'http://fonts.gstatic.com/s/quicksand/v4/32nyIRHyCu6iqEka_hbKsi3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            514 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Quintessential',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/quintessential/v3/mmk6ioesnTrEky_Zb92E5s02lXbtMOtZWfuxKeMZO8Q.ttf',
              ),
            ),
            515 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Qwigley',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/qwigley/v5/aDqxws-KubFID85TZHFouw.ttf',
              ),
            ),
            516 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Racing Sans One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/racingsansone/v3/1r3DpWaCiT7y3PD4KgkNyDjVlsJB_M_Q_LtZxsoxvlw.ttf',
              ),
            ),
            517 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Radley',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/radley/v8/FgE9di09a-mXGzAIyI6Q9Q.ttf',
                'italic' => 'http://fonts.gstatic.com/s/radley/v8/Z_JcACuPAOO2f9kzQcGRug.ttf',
              ),
            ),
            518 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rajdhani',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '500',
                3 => '600',
                4 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
                2 => 'devanagari',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/rajdhani/v2/9pItuEhQZVGdq8spnHTku6CWcynf_cDxXwCLxiixG1c.ttf',
                'regular' => 'http://fonts.gstatic.com/s/rajdhani/v2/Wfy5zp4PGFAFS7-Wetehzw.ttf',
                500 => 'http://fonts.gstatic.com/s/rajdhani/v2/nd_5ZpVwm710HcLual0fBqCWcynf_cDxXwCLxiixG1c.ttf',
                600 => 'http://fonts.gstatic.com/s/rajdhani/v2/5fnmZahByDeTtgxIiqbJSaCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/rajdhani/v2/UBK6d2Hg7X7wYLlF92aXW6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            519 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Raleway',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '100',
                1 => '200',
                2 => '300',
                3 => 'regular',
                4 => '500',
                5 => '600',
                6 => '700',
                7 => '800',
                8 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                100 => 'http://themes.googleusercontent.com/static/fonts/raleway/v7/UDfD6oxBaBnmFJwQ7XAFNw.ttf',
                200 => 'http://themes.googleusercontent.com/static/fonts/raleway/v7/LAQwev4hdCtYkOYX4Oc7nPesZW2xOQ-xsNqO47m55DA.ttf',
                300 => 'http://themes.googleusercontent.com/static/fonts/raleway/v7/2VvSZU2kb4DZwFfRM4fLQPesZW2xOQ-xsNqO47m55DA.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/raleway/v7/_dCzxpXzIS3sL-gdJWAP8A.ttf',
                500 => 'http://themes.googleusercontent.com/static/fonts/raleway/v7/348gn6PEmbLDWlHbbV15d_esZW2xOQ-xsNqO47m55DA.ttf',
                600 => 'http://themes.googleusercontent.com/static/fonts/raleway/v7/M7no6oPkwKYJkedjB1wqEvesZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/raleway/v7/VGEV9-DrblisWOWLbK-1XPesZW2xOQ-xsNqO47m55DA.ttf',
                800 => 'http://themes.googleusercontent.com/static/fonts/raleway/v7/mMh0JrsYMXcLO69jgJwpUvesZW2xOQ-xsNqO47m55DA.ttf',
                900 => 'http://themes.googleusercontent.com/static/fonts/raleway/v7/ajQQGcDBLcyLpaUfD76UuPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            520 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Raleway Dots',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ralewaydots/v3/lhLgmWCRcyz-QXo8LCzTfC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            521 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rambla',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rambla/v3/YaTmpvm5gFg_ShJKTQmdzg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/rambla/v3/mhUgsKmp0qw3uATdDDAuwA.ttf',
                700 => 'http://fonts.gstatic.com/s/rambla/v3/C5VZH8BxQKmnBuoC00UPpw.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/rambla/v3/ziMzUZya6QahrKONSI1TzqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            522 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rammetto One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rammettoone/v4/mh0uQ1tV8QgSx9v_KyEYPC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            523 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ranchers',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ranchers/v3/9ya8CZYhqT66VERfjQ7eLA.ttf',
              ),
            ),
            524 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rancho',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rancho/v5/ekp3-4QykC4--6KaslRgHA.ttf',
              ),
            ),
            525 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rationale',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rationale/v6/7M2eN-di0NGLQse7HzJRfg.ttf',
              ),
            ),
            526 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Redressed',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/redressed/v5/3aZ5sTBppH3oSm5SabegtA.ttf',
              ),
            ),
            527 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Reenie Beanie',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/reeniebeanie/v5/ljpKc6CdXusL1cnGUSamX4jjx0o0jr6fNXxPgYh_a8Q.ttf',
              ),
            ),
            528 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Revalia',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/revalia/v3/1TKw66fF5_poiL0Ktgo4_A.ttf',
              ),
            ),
            529 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ribeye',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ribeye/v4/e5w3VE8HnWBln4Ll6lUj3Q.ttf',
              ),
            ),
            530 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ribeye Marrow',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ribeyemarrow/v5/q7cBSA-4ErAXBCDFPrhlY0cTNmV93fYG7UKgsLQNQWs.ttf',
              ),
            ),
            531 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Righteous',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/righteous/v4/0nRRWM_gCGCt2S-BCfN8WQ.ttf',
              ),
            ),
            532 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Risque',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/risque/v3/92RnElGnl8yHP97-KV3Fyg.ttf',
              ),
            ),
            533 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Roboto',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '100',
                1 => '100italic',
                2 => '300',
                3 => '300italic',
                4 => 'regular',
                5 => 'italic',
                6 => '500',
                7 => '500italic',
                8 => '700',
                9 => '700italic',
                10 => '900',
                11 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'greek',
              ),
              'version' => 'v11',
              'lastModified' => '2014-07-14',
              'files' => 
              array (
                100 => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/7MygqTe2zs9YkP0adA9QQQ.ttf',
                '100italic' => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/T1xnudodhcgwXCmZQ490TPesZW2xOQ-xsNqO47m55DA.ttf',
                300 => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/dtpHsbgPEm2lVWciJZ0P-A.ttf',
                '300italic' => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/iE8HhaRzdhPxC93dOdA056CWcynf_cDxXwCLxiixG1c.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/W5F8_SL0XFawnjxHGsZjJA.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/hcKoSgxdnKlbH5dlTwKbow.ttf',
                500 => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/Uxzkqj-MIMWle-XP2pDNAA.ttf',
                '500italic' => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/daIfzbEw-lbjMyv4rMUUTqCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/bdHGHleUa-ndQCOrdpfxfw.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/owYYXKukxFDFjr0ZO8NXh6CWcynf_cDxXwCLxiixG1c.ttf',
                900 => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/H1vB34nOKWXqzKotq25pcg.ttf',
                '900italic' => 'http://themes.googleusercontent.com/static/fonts/roboto/v11/b9PWBSMHrT2zM5FgUdtu0aCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            534 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Roboto Condensed',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
                4 => '700',
                5 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'greek',
              ),
              'version' => 'v9',
              'lastModified' => '2014-07-14',
              'files' => 
              array (
                300 => 'http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/b9QBgL0iMZfDSpmcXcE8nJRhFVcex_hajThhFkHyhYk.ttf',
                '300italic' => 'http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/mg0cGfGRUERshzBlvqxeAPYa9bgCHecWXGgisnodcS0.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/Zd2E9abXLFGSr9G3YK2MsKDbm6fPDOZJsR8PmdG62gY.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/BP5K8ZAJv9qEbmuFp8RpJY_eiqgTfYGaH0bJiUDZ5GA.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/b9QBgL0iMZfDSpmcXcE8nPOYkGiSOYDq_T7HbIOV1hA.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/robotocondensed/v9/mg0cGfGRUERshzBlvqxeAE2zk2RGRC3SlyyLLQfjS_8.ttf',
              ),
            ),
        
            535 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Roboto Slab',
              'category' => 'serif',
              'variants' => 
              array (
                0 => '100',
                1 => '300',
                2 => 'regular',
                3 => '700',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'greek',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                100 => 'http://fonts.gstatic.com/s/robotoslab/v4/MEz38VLIFL-t46JUtkIEgIAWxXGWZ3yJw6KhWS7MxOk.ttf',
                300 => 'http://fonts.gstatic.com/s/robotoslab/v4/dazS1PrQQuCxC3iOAJFEJS9-WlPSxbfiI49GsXo3q0g.ttf',
                'regular' => 'http://fonts.gstatic.com/s/robotoslab/v4/3__ulTNA7unv0UtplybPiqCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://fonts.gstatic.com/s/robotoslab/v4/dazS1PrQQuCxC3iOAJFEJXe1Pd76Vl7zRpE7NLJQ7XU.ttf',
              ),
            ),
            536 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rochester',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rochester/v5/bnj8tmQBiOkdji_G_yvypg.ttf',
              ),
            ),
            537 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rock Salt',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rocksalt/v5/Zy7JF9h9WbhD9V3SFMQ1UQ.ttf',
              ),
            ),
            538 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rokkitt',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rokkitt/v7/GMA7Z_ToF8uSvpZAgnp_VQ.ttf',
                700 => 'http://fonts.gstatic.com/s/rokkitt/v7/gxlo-sr3rPmvgSixYog_ofesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            539 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Romanesco',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/romanesco/v4/2udIjUrpK_CPzYSxRVzD4Q.ttf',
              ),
            ),
            540 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ropa Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ropasans/v4/Gba7ZzVBuhg6nX_AoSwlkQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/ropasans/v4/V1zbhZQscNrh63dy5Jk2nqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            541 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rosario',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v9',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rosario/v9/bL-cEh8dXtDupB2WccA2LA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/rosario/v9/pkflNy18HEuVVx4EOjeb_Q.ttf',
                700 => 'http://fonts.gstatic.com/s/rosario/v9/nrS6PJvDWN42RP4TFWccd_esZW2xOQ-xsNqO47m55DA.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/rosario/v9/EOgFX2Va5VGrkhn_eDpIRS3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            542 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rosarivo',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rosarivo/v3/EmPiINK0qyqc7KSsNjJamA.ttf',
                'italic' => 'http://fonts.gstatic.com/s/rosarivo/v3/u3VuWsWQlX1pDqsbz4paNPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            543 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rouge Script',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rougescript/v4/AgXDSqZJmy12qS0ixjs6Vy3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            544 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rubik Mono One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rubikmonoone/v2/e_cupPtD4BrZzotubJD7UbAREgn5xbW23GEXXnhMQ5Y.ttf',
              ),
            ),
            545 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rubik One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rubikone/v2/Zs6TtctNRSIR8T5PO018rQ.ttf',
              ),
            ),
            546 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ruda',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
                2 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ruda/v6/jPEIPB7DM2DNK_uBGv2HGw.ttf',
                700 => 'http://fonts.gstatic.com/s/ruda/v6/JABOu1SYOHcGXVejUq4w6g.ttf',
                900 => 'http://fonts.gstatic.com/s/ruda/v6/Uzusv-enCjoIrznlJJaBRw.ttf',
              ),
            ),
            547 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rufina',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rufina/v3/s9IFr_fIemiohfZS-ZRDbQ.ttf',
                700 => 'http://fonts.gstatic.com/s/rufina/v3/D0RUjXFr55y4MVZY2Ww_RA.ttf',
              ),
            ),
            548 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ruge Boogie',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rugeboogie/v6/U-TTmltL8aENLVIqYbI5QaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            549 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ruluko',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ruluko/v3/lv4cMwJtrx_dzmlK5SDc1g.ttf',
              ),
            ),
            550 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rum Raisin',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rumraisin/v3/kDiL-ntDOEq26B7kYM7cx_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            551 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ruslan Display',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ruslandisplay/v6/SREdhlyLNUfU1VssRBfs3rgH88D3l9N4auRNHrNS708.ttf',
              ),
            ),
            552 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Russo One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/russoone/v3/zfwxZ--UhUc7FVfgT21PRQ.ttf',
              ),
            ),
            553 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ruthie',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ruthie/v5/vJ2LorukHSbWYoEs5juivg.ttf',
              ),
            ),
            554 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Rye',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/rye/v3/VUrJlpPpSZxspl3w_yNOrQ.ttf',
              ),
            ),
            555 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sacramento',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sacramento/v3/_kv-qycSHMNdhjiv0Kj7BvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            556 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sail',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sail/v5/iuEoG6kt-bePGvtdpL0GUQ.ttf',
              ),
            ),
            557 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Salsa',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/salsa/v5/BnpUCBmYdvggScEPs5JbpA.ttf',
              ),
            ),
            558 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sanchez',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sanchez/v3/BEL8ao-E2LJ5eHPLB2UAiw.ttf',
                'italic' => 'http://fonts.gstatic.com/s/sanchez/v3/iSrhkWLexUZzDeNxNEHtzA.ttf',
              ),
            ),
            559 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sancreek',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sancreek/v6/8ZacBMraWMvHly4IJI3esw.ttf',
              ),
            ),
            560 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sansita One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sansitaone/v5/xWqf68oB50JXqGIRR0h2hqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            561 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sarina',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sarina/v4/XYtRfaSknHIU3NHdfTdXoQ.ttf',
              ),
            ),
            562 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Satisfy',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/satisfy/v5/PRlyepkd-JCGHiN8e9WV2w.ttf',
              ),
            ),
            563 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Scada',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/scada/v3/iZNC3ZEYwe3je6H-28d5Ug.ttf',
                'italic' => 'http://fonts.gstatic.com/s/scada/v3/PCGyLT1qNawkOUQ3uHFhBw.ttf',
                700 => 'http://fonts.gstatic.com/s/scada/v3/t6XNWdMdVWUz93EuRVmifQ.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/scada/v3/kLrBIf7V4mDMwcd_Yw7-D_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            564 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Schoolbell',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/schoolbell/v5/95-3djEuubb3cJx-6E7j4vesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            565 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Seaweed Script',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/seaweedscript/v3/eorWAPpOvvWrPw5IHwE60BnpV0hQCek3EmWnCPrvGRM.ttf',
              ),
            ),
            566 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sevillana',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sevillana/v3/6m1Nh35oP7YEt00U80Smiw.ttf',
              ),
            ),
            567 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Seymour One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/seymourone/v3/HrdG2AEG_870Xb7xBVv6C6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            568 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Shadows Into Light',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/shadowsintolight/v5/clhLqOv7MXn459PTh0gXYAW_5bEze-iLRNvGrRpJsfM.ttf',
              ),
            ),
            569 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Shadows Into Light Two',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/shadowsintolighttwo/v3/gDxHeefcXIo-lOuZFCn2xVQrZk-Pga5KeEE_oZjkQjQ.ttf',
              ),
            ),
            570 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Shanti',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/shanti/v6/lc4nG_JG6Q-2FQSOMMhb_w.ttf',
              ),
            ),
            571 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Share',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/share/v4/1ytD7zSb_-g9I2GG67vmVw.ttf',
                'italic' => 'http://fonts.gstatic.com/s/share/v4/a9YGdQWFRlNJ0zClJVaY3Q.ttf',
                700 => 'http://fonts.gstatic.com/s/share/v4/XrU8e7a1YKurguyY2azk1Q.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/share/v4/A992-bLVYwAflKu6iaznufesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            572 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Share Tech',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sharetech/v3/Dq3DuZ5_0SW3oEfAWFpen_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            573 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Share Tech Mono',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sharetechmono/v3/RQxK-3RA0Lnf3gnnnNrAscwD6PD0c3_abh9zHKQtbGU.ttf',
              ),
            ),
            574 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Shojumaru',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/shojumaru/v3/WP8cxonzQQVAoI3RJQ2wug.ttf',
              ),
            ),
            575 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Short Stack',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/shortstack/v5/v4dXPI0Rm8XN9gk4SDdqlqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            576 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Siemreap',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/siemreap/v8/JSK-mOIsXwxo-zE9XDDl_g.ttf',
              ),
            ),
            577 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sigmar One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sigmarone/v5/oh_5NxD5JBZksdo2EntKefesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            578 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Signika',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '600',
                3 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
        
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/signika/v5/0wDPonOzsYeEo-1KO78w4fesZW2xOQ-xsNqO47m55DA.ttf',
                'regular' => 'http://fonts.gstatic.com/s/signika/v5/WvDswbww0oAtvBg2l1L-9w.ttf',
                600 => 'http://fonts.gstatic.com/s/signika/v5/lQMOF6NUN2ooR7WvB7tADvesZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/signika/v5/lEcnfPBICWJPv5BbVNnFJPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            579 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Signika Negative',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '600',
                3 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/signikanegative/v4/q5TOjIw4CenPw6C-TW06FjYFXpUPtCmIEFDvjUnLLaI.ttf',
                'regular' => 'http://fonts.gstatic.com/s/signikanegative/v4/Z-Q1hzbY8uAo3TpTyPFMXVM1lnCWMnren5_v6047e5A.ttf',
                600 => 'http://fonts.gstatic.com/s/signikanegative/v4/q5TOjIw4CenPw6C-TW06FrKLaDJM01OezSVA2R_O3qI.ttf',
                700 => 'http://fonts.gstatic.com/s/signikanegative/v4/q5TOjIw4CenPw6C-TW06FpYzPxtVvobH1w3hEppR8WI.ttf',
              ),
            ),
            580 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Simonetta',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '900',
                3 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/simonetta/v4/fN8puNuahBo4EYMQgp12Yg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/simonetta/v4/ynxQ3FqfF_Nziwy3T9ZwL6CWcynf_cDxXwCLxiixG1c.ttf',
                900 => 'http://fonts.gstatic.com/s/simonetta/v4/22EwvvJ2r1VwVCxit5LcVi3USBnSvpkopQaUR-2r7iU.ttf',
                '900italic' => 'http://fonts.gstatic.com/s/simonetta/v4/WUXOpCgBZaRPrWtMCpeKoienaqEuufTBk9XMKnKmgDA.ttf',
              ),
            ),
            581 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sintony',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sintony/v3/IDhCijoIMev2L6Lg5QsduQ.ttf',
                700 => 'http://fonts.gstatic.com/s/sintony/v3/zVXQB1wqJn6PE4dWXoYpvPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            582 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sirin Stencil',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sirinstencil/v4/pRpLdo0SawzO7MoBpvowsImg74kgS1F7KeR8rWhYwkU.ttf',
              ),
            ),
            583 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Six Caps',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sixcaps/v6/_XeDnO0HOV8Er9u97If1tQ.ttf',
              ),
            ),
            584 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Skranji',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/skranji/v3/jnOLPS0iZmDL7dfWnW3nIw.ttf',
                700 => 'http://fonts.gstatic.com/s/skranji/v3/Lcrhg-fviVkxiEgoadsI1vesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            585 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Slabo 13px',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v1',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/slabo13px/v1/jPGWFTjRXfCSzy0qd1nqdvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            586 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Slabo 27px',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v1',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/slabo27px/v1/gC0o8B9eU21EafNkXlRAfPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            587 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Slackey',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/slackey/v5/evRIMNhGVCRJvCPv4kteeA.ttf',
              ),
            ),
            588 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Smokum',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/smokum/v5/8YP4BuAcy97X8WfdKfxVRw.ttf',
              ),
            ),
            589 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Smythe',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/smythe/v6/yACD1gy_MpbB9Ft42fUvYw.ttf',
              ),
            ),
            590 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sniglet',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '800',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sniglet/v6/XWhyQLHH4SpCVsHRPRgu9w.ttf',
                800 => 'http://fonts.gstatic.com/s/sniglet/v6/NLF91nBmcEfkBgcEWbHFa_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            591 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Snippet',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/snippet/v5/eUcYMLq2GtHZovLlQH_9kA.ttf',
              ),
            ),
            592 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Snowburst One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/snowburstone/v3/zSQzKOPukXRux2oTqfYJjIjjx0o0jr6fNXxPgYh_a8Q.ttf',
              ),
            ),
            593 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sofadi One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sofadione/v3/nirf4G12IcJ6KI8Eoj119fesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            594 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sofia',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sofia/v4/Imnvx0Ag9r6iDBFUY5_RaQ.ttf',
              ),
            ),
            595 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sonsie One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sonsieone/v4/KSP7xT1OSy0q2ob6RQOTWPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            596 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sorts Mill Goudy',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sortsmillgoudy/v5/JzRrPKdwEnE8F1TDmDLMUlIL2Qjg-Xlsg_fhGbe2P5U.ttf',
                'italic' => 'http://fonts.gstatic.com/s/sortsmillgoudy/v5/UUu1lKiy4hRmBWk599VL1TYNkCNSzLyoucKmbTguvr0.ttf',
              ),
            ),
            597 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Source Code Pro',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => '200',
                1 => '300',
                2 => 'regular',
                3 => '500',
                4 => '600',
                5 => '700',
                6 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                200 => 'http://fonts.gstatic.com/s/sourcecodepro/v5/leqv3v-yTsJNC7nFznSMqaXvKVW_haheDNrHjziJZVk.ttf',
                300 => 'http://fonts.gstatic.com/s/sourcecodepro/v5/leqv3v-yTsJNC7nFznSMqVP7R5lD_au4SZC6Ks_vyWs.ttf',
                'regular' => 'http://fonts.gstatic.com/s/sourcecodepro/v5/mrl8jkM18OlOQN8JLgasD9Rl0pGnog23EMYRrBmUzJQ.ttf',
                500 => 'http://fonts.gstatic.com/s/sourcecodepro/v5/leqv3v-yTsJNC7nFznSMqX63uKwMO11Of4rJWV582wg.ttf',
                600 => 'http://fonts.gstatic.com/s/sourcecodepro/v5/leqv3v-yTsJNC7nFznSMqeiMeWyi5E_-XkTgB5psiDg.ttf',
                700 => 'http://fonts.gstatic.com/s/sourcecodepro/v5/leqv3v-yTsJNC7nFznSMqfgXsetDviZcdR5OzC1KPcw.ttf',
                900 => 'http://fonts.gstatic.com/s/sourcecodepro/v5/leqv3v-yTsJNC7nFznSMqRA_awHl7mXRjE_LQVochcU.ttf',
              ),
            ),
            598 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Source Sans Pro',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '200',
                1 => '200italic',
                2 => '300',
                3 => '300italic',
                4 => 'regular',
                5 => 'italic',
                6 => '600',
                7 => '600italic',
                8 => '700',
                9 => '700italic',
                10 => '900',
                11 => '900italic',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'vietnamese',
                2 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                200 => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGKXvKVW_haheDNrHjziJZVk.ttf',
                '200italic' => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6OptKU7UIBg2hLM7eMTU8bI.ttf',
                300 => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGFP7R5lD_au4SZC6Ks_vyWs.ttf',
                '300italic' => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6DUpNKoQAsDux-Todp8f29w.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/ODelI1aHBYDBqgeIAH2zlNRl0pGnog23EMYRrBmUzJQ.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/M2Jd71oPJhLKp0zdtTvoMwRX4TIfMQQEXLu74GftruE.ttf',
                600 => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGOiMeWyi5E_-XkTgB5psiDg.ttf',
                '600italic' => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6Pp6lGoTTgjlW0sC4r900Co.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGPgXsetDviZcdR5OzC1KPcw.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6LVT4locI09aamSzFGQlDMY.ttf',
                900 => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/toadOcfmlt9b38dHJxOBGBA_awHl7mXRjE_LQVochcU.ttf',
                '900italic' => 'http://themes.googleusercontent.com/static/fonts/sourcesanspro/v7/fpTVHK8qsXbIeTHTrnQH6A0NcF6HPGWR298uWIdxWv0.ttf',
              ),
            ),
            599 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Source Serif Pro',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '600',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-29',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sourceserifpro/v2/CeUM4np2c42DV49nanp55YGL0S0YDpKs5GpLtZIQ0m4.ttf',
                600 => 'http://fonts.gstatic.com/s/sourceserifpro/v2/yd5lDMt8Sva2PE17yiLarGi4cQnvCGV11m1KlXh97aQ.ttf',
                700 => 'http://fonts.gstatic.com/s/sourceserifpro/v2/yd5lDMt8Sva2PE17yiLarEkpYHRvxGNSCrR82n_RDNk.ttf',
              ),
            ),
            600 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Special Elite',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/specialelite/v5/9-wW4zu3WNoD5Fjka35Jm4jjx0o0jr6fNXxPgYh_a8Q.ttf',
              ),
            ),
            601 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Spicy Rice',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/spicyrice/v4/WGCtz7cLoggXARPi9OGD6_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            602 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Spinnaker',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/spinnaker/v7/MQdIXivKITpjROUdiN6Jgg.ttf',
              ),
            ),
            603 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Spirax',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/spirax/v4/IOKqhk-Ccl7y31yDsePPkw.ttf',
              ),
            ),
            604 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Squada One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/squadaone/v4/3tzGuaJdD65cZVgfQzN8uvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            605 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Stalemate',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/stalemate/v3/wQLCnG0qB6mOu2Wit2dt_w.ttf',
              ),
            ),
            606 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Stalinist One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/stalinistone/v5/ltOD4Zj3WJDXYjAIR-9vZojjx0o0jr6fNXxPgYh_a8Q.ttf',
              ),
            ),
            607 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Stardos Stencil',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/stardosstencil/v5/ygEOyTW9a6u4fi4OXEZeTFf2eT4jUldwg_9fgfY_tHc.ttf',
                700 => 'http://fonts.gstatic.com/s/stardosstencil/v5/h4ExtgvoXhPtv9Ieqd-XC81wDCbBgmIo8UyjIhmkeSM.ttf',
              ),
            ),
            608 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Stint Ultra Condensed',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/stintultracondensed/v4/8DqLK6-YSClFZt3u3EgOUYelbRYnLTTQA1Z5cVLnsI4.ttf',
              ),
            ),
            609 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Stint Ultra Expanded',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/stintultraexpanded/v3/FeigX-wDDgHMCKuhekhedQ7dxr0N5HY0cZKknTIL6n4.ttf',
              ),
            ),
            610 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Stoke',
              'category' => 'serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/stoke/v5/Sell9475FOS8jUqQsfFsUQ.ttf',
                'regular' => 'http://fonts.gstatic.com/s/stoke/v5/A7qJNoqOm2d6o1E6e0yUFg.ttf',
              ),
            ),
            611 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Strait',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/strait/v3/m4W73ViNmProETY2ybc-Bg.ttf',
              ),
            ),
            612 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sue Ellen Francisco',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sueellenfrancisco/v6/TwHX4vSxMUnJUdEz1JIgrhzazJzPVbGl8jnf1tisRz4.ttf',
              ),
            ),
            613 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Sunshiney',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/sunshiney/v5/kaWOb4pGbwNijM7CkxK1sQ.ttf',
              ),
            ),
            614 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Supermercado One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/supermercadoone/v5/kMGPVTNFiFEp1U274uBMb4mm5hmSKNFf3C5YoMa-lrM.ttf',
              ),
            ),
            615 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Suwannaphum',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/suwannaphum/v8/1jIPOyXied3T79GCnSlCN6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            616 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Swanky and Moo Moo',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/swankyandmoomoo/v5/orVNZ9kDeE3lWp3U3YELu9DVLKqNC3_XMNHhr8S94FU.ttf',
              ),
            ),
            617 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Syncopate',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/syncopate/v5/RQVwO52fAH6MI764EcaYtw.ttf',
                700 => 'http://fonts.gstatic.com/s/syncopate/v5/S5z8ixiOoC4WJ1im6jAlYC3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            618 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Tangerine',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/tangerine/v5/DTPeM3IROhnkz7aYG2a9sA.ttf',
                700 => 'http://fonts.gstatic.com/s/tangerine/v5/UkFsr-RwJB_d2l9fIWsx3i3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            619 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Taprom',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'khmer',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/taprom/v7/-KByU3BaUsyIvQs79qFObg.ttf',
              ),
            ),
            620 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Tauri',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/tauri/v3/XIWeYJDXNqiVNej0zEqtGg.ttf',
              ),
            ),
            621 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Teko',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => 'regular',
                2 => '500',
                3 => '600',
                4 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
                2 => 'devanagari',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                300 => 'http://fonts.gstatic.com/s/teko/v2/OobFGE9eo24rcBpN6zXDaQ.ttf',
                'regular' => 'http://fonts.gstatic.com/s/teko/v2/UtekqODEqZXSN2L-njejpA.ttf',
                500 => 'http://fonts.gstatic.com/s/teko/v2/FQ0duU7gWM4cSaImOfAjBA.ttf',
                600 => 'http://fonts.gstatic.com/s/teko/v2/QDx_i8H-TZ1IK1JEVrqwEQ.ttf',
                700 => 'http://fonts.gstatic.com/s/teko/v2/xKfTxe_SWpH4xU75vmvylA.ttf',
              ),
            ),
            622 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Telex',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/telex/v3/24-3xP9ywYeHOcFU3iGk8A.ttf',
              ),
            ),
            623 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Tenor Sans',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic-ext',
                2 => 'cyrillic',
                3 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/tenorsans/v6/dUBulmjNJJInvK5vL7O9yfesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            624 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Text Me One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/textmeone/v3/9em_3ckd_P5PQkP4aDyDLqCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            625 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'The Girl Next Door',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/thegirlnextdoor/v6/cWRA4JVGeEcHGcPl5hmX7kzo0nFFoM60ux_D9BUymX4.ttf',
              ),
            ),
            626 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Tienne',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
                2 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/tienne/v7/-IIfDl701C0z7-fy2kmGvA.ttf',
                700 => 'http://fonts.gstatic.com/s/tienne/v7/JvoCDOlyOSEyYGRwCyfs3g.ttf',
                900 => 'http://fonts.gstatic.com/s/tienne/v7/FBano5T521OWexj2iRYLMw.ttf',
              ),
            ),
            627 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Tinos',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'vietnamese',
                3 => 'cyrillic-ext',
                4 => 'cyrillic',
                5 => 'latin',
                6 => 'greek',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/tinos/v7/EqpUbkVmutfwZ0PjpoGwCg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/tinos/v7/slfyzlasCr9vTsaP4lUh9A.ttf',
                700 => 'http://fonts.gstatic.com/s/tinos/v7/vHXfhX8jZuQruowfon93yQ.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/tinos/v7/M6kfzvDMM0CdxdraoFpG6vesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            628 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Titan One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/titanone/v3/FbvpRvzfV_oipS0De3iAZg.ttf',
              ),
            ),
            629 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Titillium Web',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '200',
                1 => '200italic',
                2 => '300',
                3 => '300italic',
                4 => 'regular',
                5 => 'italic',
                6 => '600',
                7 => '600italic',
                8 => '700',
                9 => '700italic',
                10 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                200 => 'http://fonts.gstatic.com/s/titilliumweb/v3/anMUvcNT0H1YN4FII8wprzOdCrLccoxq42eaxM802O0.ttf',
                '200italic' => 'http://fonts.gstatic.com/s/titilliumweb/v3/RZunN20OBmkvrU7sA4GPPj4N98U-66ThNJvtgddRfBE.ttf',
                300 => 'http://fonts.gstatic.com/s/titilliumweb/v3/anMUvcNT0H1YN4FII8wpr9ZAkYT8DuUZELiKLwMGWAo.ttf',
                '300italic' => 'http://fonts.gstatic.com/s/titilliumweb/v3/RZunN20OBmkvrU7sA4GPPrfzCkqg7ORZlRf2cc4mXu8.ttf',
                'regular' => 'http://fonts.gstatic.com/s/titilliumweb/v3/7XUFZ5tgS-tD6QamInJTcTyagQBwYgYywpS70xNq8SQ.ttf',
                'italic' => 'http://fonts.gstatic.com/s/titilliumweb/v3/r9OmwyQxrgzUAhaLET_KO-ixohbIP6lHkU-1Mgq95cY.ttf',
                600 => 'http://fonts.gstatic.com/s/titilliumweb/v3/anMUvcNT0H1YN4FII8wpr28K9dEd5Ue-HTQrlA7E2xQ.ttf',
                '600italic' => 'http://fonts.gstatic.com/s/titilliumweb/v3/RZunN20OBmkvrU7sA4GPPgOhzTSndyK8UWja2yJjKLc.ttf',
                700 => 'http://fonts.gstatic.com/s/titilliumweb/v3/anMUvcNT0H1YN4FII8wpr2-6tpSbB9YhmWtmd1_gi_U.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/titilliumweb/v3/RZunN20OBmkvrU7sA4GPPio3LEw-4MM8Ao2j9wPOfpw.ttf',
                900 => 'http://fonts.gstatic.com/s/titilliumweb/v3/anMUvcNT0H1YN4FII8wpr7L0GmZLri-m-nfoo0Vul4Y.ttf',
              ),
            ),
            630 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Trade Winds',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/tradewinds/v4/sDOCVgAxw6PEUi2xdMsoDaCWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            631 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Trocchi',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/trocchi/v3/uldNPaKrUGVeGCVsmacLwA.ttf',
              ),
            ),
            632 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Trochut',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/trochut/v3/6Y65B0x-2JsnYt16OH5omw.ttf',
                'italic' => 'http://fonts.gstatic.com/s/trochut/v3/pczUwr4ZFvC79TgNO5cZng.ttf',
                700 => 'http://fonts.gstatic.com/s/trochut/v3/lWqNOv6ISR8ehNzGLFLnJ_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            633 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Trykker',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/trykker/v4/YiVrVJpBFN7I1l_CWk6yYQ.ttf',
              ),
            ),
            634 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Tulpen One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/tulpenone/v5/lwcTfVIEVxpZLZlWzR5baPesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            635 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ubuntu',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '300',
                1 => '300italic',
                2 => 'regular',
                3 => 'italic',
                4 => '500',
                5 => '500italic',
                6 => '700',
                7 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'cyrillic-ext',
                3 => 'cyrillic',
                4 => 'latin',
                5 => 'greek',
              ),
              'version' => 'v5',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                300 => 'http://themes.googleusercontent.com/static/fonts/ubuntu/v5/7-wH0j2QCTHKgp7vLh9-sQ.ttf',
                '300italic' => 'http://themes.googleusercontent.com/static/fonts/ubuntu/v5/j-TYDdXcC_eQzhhp386SjaCWcynf_cDxXwCLxiixG1c.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/ubuntu/v5/lhhB5ZCwEkBRbHMSnYuKyA.ttf',
                'italic' => 'http://themes.googleusercontent.com/static/fonts/ubuntu/v5/b9hP8wd30SygxZjGGk4DCQ.ttf',
                500 => 'http://themes.googleusercontent.com/static/fonts/ubuntu/v5/bMbHEMwSUmkzcK2x_74QbA.ttf',
                '500italic' => 'http://themes.googleusercontent.com/static/fonts/ubuntu/v5/NWdMogIO7U6AtEM4dDdf_aCWcynf_cDxXwCLxiixG1c.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/ubuntu/v5/B7BtHjNYwAp3HgLNagENOQ.ttf',
                '700italic' => 'http://themes.googleusercontent.com/static/fonts/ubuntu/v5/pqisLQoeO9YTDCNnlQ9bf6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            636 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ubuntu Condensed',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'cyrillic-ext',
                3 => 'cyrillic',
                4 => 'latin',
                5 => 'greek',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ubuntucondensed/v5/DBCt-NXN57MTAFjitYxdrKDbm6fPDOZJsR8PmdG62gY.ttf',
              ),
            ),
            637 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ubuntu Mono',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'greek-ext',
                1 => 'latin-ext',
                2 => 'cyrillic-ext',
                3 => 'cyrillic',
                4 => 'latin',
                5 => 'greek',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ubuntumono/v5/EgeuS9OtEmA0y_JRo03MQaCWcynf_cDxXwCLxiixG1c.ttf',
                'italic' => 'http://fonts.gstatic.com/s/ubuntumono/v5/KAKuHXAHZOeECOWAHsRKA0eOrDcLawS7-ssYqLr2Xp4.ttf',
                700 => 'http://fonts.gstatic.com/s/ubuntumono/v5/ceqTZGKHipo8pJj4molytne1Pd76Vl7zRpE7NLJQ7XU.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/ubuntumono/v5/n_d8tv_JOIiYyMXR4eaV9c_zJjSACmk0BRPxQqhnNLU.ttf',
              ),
            ),
            638 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Ultra',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/ultra/v7/OW8uXkOstRADuhEmGOFQLA.ttf',
              ),
            ),
            639 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Uncial Antiqua',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/uncialantiqua/v3/F-leefDiFwQXsyd6eaSllqrFJ4O13IHVxZbM6yoslpo.ttf',
              ),
            ),
            640 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Underdog',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/underdog/v4/gBv9yjez_-5PnTprHWq0ig.ttf',
              ),
            ),
            641 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Unica One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/unicaone/v3/KbYKlhWMDpatWViqDkNQgA.ttf',
              ),
            ),
            642 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'UnifrakturCook',
              'category' => 'display',
              'variants' => 
              array (
                0 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                700 => 'http://fonts.gstatic.com/s/unifrakturcook/v7/ASwh69ykD8iaoYijVEU6RrWZkcsCTHKV51zmcUsafQ0.ttf',
              ),
            ),
            643 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'UnifrakturMaguntia',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/unifrakturmaguntia/v6/7KWy3ymCVR_xfAvvcIXm3-kdNg30GQauG_DE-tMYtWk.ttf',
              ),
            ),
            644 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Unkempt',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
                1 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/unkempt/v6/NLLBeNSspr0RGs71R5LHWA.ttf',
                700 => 'http://fonts.gstatic.com/s/unkempt/v6/V7H-GCl9bgwGwqFqTTgDHvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            645 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Unlock',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/unlock/v5/rXEQzK7uIAlhoyoAEiMy1w.ttf',
              ),
            ),
            646 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Unna',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/unna/v7/UAS0AM7AmbdCNY_80xyAZQ.ttf',
              ),
            ),
            647 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'VT323',
              'category' => 'monospace',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/vt323/v6/ITU2YQfM073o1iYK3nSOmQ.ttf',
              ),
            ),
            648 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Vampiro One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/vampiroone/v5/OVDs4gY4WpS5u3Qd1gXRW6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            649 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Varela',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/varela/v6/ON7qs0cKUUixhhDFXlZUjw.ttf',
              ),
            ),
            650 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Varela Round',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/varelaround/v5/APH4jr0uSos5wiut5cpjri3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            651 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Vast Shadow',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/vastshadow/v5/io4hqKX3ibiqQQjYfW0-h6CWcynf_cDxXwCLxiixG1c.ttf',
              ),
            ),
            652 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Vesper Libre',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => '500',
                2 => '700',
                3 => '900',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
                2 => 'devanagari',
              ),
              'version' => 'v2',
              'lastModified' => '2014-07-29',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/vesperlibre/v2/Cg-TeZFsqV8BaOcoVwzu2C3USBnSvpkopQaUR-2r7iU.ttf',
                500 => 'http://fonts.gstatic.com/s/vesperlibre/v2/0liLgNkygqH6EOtsVjZDsZMQuUSAwdHsY8ov_6tk1oA.ttf',
                700 => 'http://fonts.gstatic.com/s/vesperlibre/v2/0liLgNkygqH6EOtsVjZDsUD2ttfZwueP-QU272T9-k4.ttf',
                900 => 'http://fonts.gstatic.com/s/vesperlibre/v2/0liLgNkygqH6EOtsVjZDsaObDOjC3UL77puoeHsE3fw.ttf',
              ),
            ),
            653 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Vibur',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/vibur/v6/xB9aKsUbJo68XP0bAg2iLw.ttf',
              ),
            ),
            654 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Vidaloka',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/vidaloka/v7/C6Nul0ogKUWkx356rrt9RA.ttf',
              ),
            ),
            655 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Viga',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/viga/v4/uD87gDbhS7frHLX4uL6agg.ttf',
              ),
            ),
            656 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Voces',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/voces/v3/QoBH6g6yKgNIgvL8A2aE2Q.ttf',
              ),
            ),
            657 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Volkhov',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v7',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/volkhov/v7/MDIZAofe1T_J3un5Kgo8zg.ttf',
                'italic' => 'http://fonts.gstatic.com/s/volkhov/v7/1rTjmztKEpbkKH06JwF8Yw.ttf',
                700 => 'http://fonts.gstatic.com/s/volkhov/v7/L8PbKS-kEoLHm7nP--NCzPesZW2xOQ-xsNqO47m55DA.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/volkhov/v7/W6oG0QDDjCgj0gmsHE520C3USBnSvpkopQaUR-2r7iU.ttf',
              ),
            ),
            658 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Vollkorn',
              'category' => 'serif',
              'variants' => 
              array (
                0 => 'regular',
                1 => 'italic',
                2 => '700',
                3 => '700italic',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/vollkorn/v5/IiexqYAeh8uII223thYx3w.ttf',
                'italic' => 'http://fonts.gstatic.com/s/vollkorn/v5/UuIzosgR1ovBhJFdwVp3fvesZW2xOQ-xsNqO47m55DA.ttf',
                700 => 'http://fonts.gstatic.com/s/vollkorn/v5/gOwQjJVGXlDOONC12hVoBqCWcynf_cDxXwCLxiixG1c.ttf',
                '700italic' => 'http://fonts.gstatic.com/s/vollkorn/v5/KNiAlx6phRqXCwnZZG51JAJKKGfqHaYFsRG-T3ceEVo.ttf',
              ),
            ),
            659 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Voltaire',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/voltaire/v5/WvqBzaGEBbRV-hrahwO2cA.ttf',
              ),
            ),
            660 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Waiting for the Sunrise',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/waitingforthesunrise/v6/eNfH7kLpF1PZWpsetF-ha9TChrNgrDiT3Zy6yGf3FnM.ttf',
              ),
            ),
            661 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Wallpoet',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v6',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/wallpoet/v6/hmum4WuBN4A0Z_7367NDIg.ttf',
              ),
            ),
            662 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Walter Turncoat',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/walterturncoat/v5/sG9su5g4GXy1KP73cU3hvQplL2YwNeota48DxFlGDUo.ttf',
              ),
            ),
            663 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Warnes',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-23',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/warnes/v5/MXG7_Phj4YpzAXxKGItuBw.ttf',
              ),
            ),
            664 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Wellfleet',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-28',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/wellfleet/v3/J5tOx72iFRPgHYpbK9J4XQ.ttf',
              ),
            ),
            665 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Wendy One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v3',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/wendyone/v3/R8CJT2oDXdMk_ZtuHTxoxw.ttf',
              ),
            ),
            666 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Wire One',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/wireone/v5/sRLhaQOQpWnvXwIx0CycQw.ttf',
              ),
            ),
            667 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Yanone Kaffeesatz',
              'category' => 'sans-serif',
              'variants' => 
              array (
                0 => '200',
                1 => '300',
                2 => 'regular',
                3 => '700',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-01-07',
              'files' => 
              array (
                200 => 'http://themes.googleusercontent.com/static/fonts/yanonekaffeesatz/v5/We_iSDqttE3etzfdfhuPRbq92v6XxU4pSv06GI0NsGc.ttf',
                300 => 'http://themes.googleusercontent.com/static/fonts/yanonekaffeesatz/v5/We_iSDqttE3etzfdfhuPRZlIwXPiNoNT_wxzJ2t3mTE.ttf',
                'regular' => 'http://themes.googleusercontent.com/static/fonts/yanonekaffeesatz/v5/YDAoLskQQ5MOAgvHUQCcLdXn3cHbFGWU4T2HrSN6JF4.ttf',
                700 => 'http://themes.googleusercontent.com/static/fonts/yanonekaffeesatz/v5/We_iSDqttE3etzfdfhuPRf2R4S6PlKaGXWPfWpHpcl0.ttf',
              ),
            ),
            668 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Yellowtail',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/yellowtail/v5/HLrU6lhCTjXfLZ7X60LcB_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            669 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Yeseva One',
              'category' => 'display',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin-ext',
                1 => 'cyrillic',
                2 => 'latin',
              ),
              'version' => 'v8',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/yesevaone/v8/eenQQxvpzSA80JmisGcgX_esZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            670 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Yesteryear',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v4',
              'lastModified' => '2014-07-10',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/yesteryear/v4/dv09hP_ZrdjVOfZQXKXuZvesZW2xOQ-xsNqO47m55DA.ttf',
              ),
            ),
            671 => 
            array (
              'kind' => 'webfonts#webfont',
              'family' => 'Zeyada',
              'category' => 'handwriting',
              'variants' => 
              array (
                0 => 'regular',
              ),
              'subsets' => 
              array (
                0 => 'latin',
              ),
              'version' => 'v5',
              'lastModified' => '2014-07-16',
              'files' => 
              array (
                'regular' => 'http://fonts.gstatic.com/s/zeyada/v5/hmonmGYYFwqTZQfG2nRswQ.ttf',
              ),
            ),
          );
		
		
		return apply_filters( 'ut_recognized_google_fonts' , $google_fonts , $field_id );
		
	}

}


?>