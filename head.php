<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 반응형 필수 -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- 제이쿼리 불러오기 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- 폰트어썸 불러오기 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<!-- 토스트 UI 시작 -->
<!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/default.min.css">

<!-- 토스트 UI 에디터, 자바스크립트 코어 -->
<script defer src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>

<!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.css" />
<!-- 토스트 UI 에디터, CSS 코어 -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

<!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
<script defer src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight.min.js"></script>
<!-- 토스트 UI 끝 -->


<link rel="stylesheet" href="common.css">
    <script defer src="common.js"></script>
    <title><?=$siteTitle?></title>
</head>
<body>



  

<!-- 탑바 시작 -->

<div class="body-content">
  
        <header class="top-bar con-min-width visible-md-up">
          <div class="con height-100p flex flex-jc-sb">
            <a href="index.ssghtml.php" class="logo">
              <span><i class="fab fa-envira"></i></span>
              <span>Design Jasmin</span>
            </a>
            <nav class="top-bar__menu-box-1 height-100p">
              <ul class="flex height-100p">
                <li>
                  <a href="index.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                    <span><i class="fas fa-home"></i></span>
                    <span>HOME</span>
                  </a>
                </li>
                <li>
                  <a href="about.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
                    <span><i class="far fa-address-card"></i></span>
                    <span>ABOUT</span>
                  </a>
                </li>
                <li>
                  <a href="pf.ssg.php" class="flex flex-jc-c flex-ai-c height-100p">
                    <span><i class="fas fa-list-alt"></i></span>
                    <span>PORTFOLIO</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex flex-jc-c flex-ai-c height-100p">
                    <span><i class="fas fa-newspaper"></i></span>
                    <span>ARTICLES</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </header>
        <!-- 탑바 끝 -->
        
          
        
          

        
        <!-- 모바일 탑바 시작 -->
        <header class="mobile-top-bar con-min-width visible-sm-down flex">
          <div class="flex-1-0-0 flex">
            <div class="mobile-top-bar__btn-toggle-side-bar flex-as-c">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
          <div>
            <a href="#" class="logo height-100p">
              <span><i class="fab fa-envira"></i></span>
              <span>Design Jasmin</span>
            </a>
          </div>
          <div class="flex-1-0-0"></div>
        </header>
        <!-- 모바일 탑바 끝 -->
        
        <!-- 모바일 사이드 바 시작 -->
        <aside class="mobile-side-bar visible-sm-down">
        
          <nav class="mobile-side-bar__menu-box-1">
            <ul>
              <li>
                <a href="index.php" class="block">
                  <span><i class="fas fa-home"></i></span>
                  <span>HOME</span>
                </a>
              </li>
              <li>
                <a href="about.php" class="block">
                  <span><i class="far fa-address-card"></i></span>
                  <span>ABOUT</span>
                </a>
              </li>
              <li>
                <a href="pf.ssg.php" class="block">
                  <span><i class="fas fa-list-alt"></i></span>
                  <span>PORTFOLIO</span>
                </a>
              </li>
              <li>
                <a href="#" class="block">
                  <span><i class="fas fa-newspaper"></i></span>
                  <span>ARTICLES</span>
                </a>
              </li>
            </ul>
          </nav>
        
        </aside>
        <!-- 모바일 사이드 바 끝 -->
        
          
        
        <!-- svg시작 -->
<div class="svgs">
    <svg id="avatar-1" height="280px" viewBox="0 0 264 280" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <desc></desc>
      <defs>
        <circle id="path-1" cx="120" cy="120" r="120"></circle>
        <path d="M12,160 C12,226.27417 65.72583,280 132,280 C198.27417,280 252,226.27417 252,160 L264,160 L264,-1.42108547e-14 L-3.19744231e-14,-1.42108547e-14 L-3.19744231e-14,160 L12,160 Z" id="path-3"></path>
        <path d="M124,144.610951 L124,163 L128,163 L128,163 C167.764502,163 200,195.235498 200,235 L200,244 L0,244 L0,235 C-4.86974701e-15,195.235498 32.235498,163 72,163 L72,163 L76,163 L76,144.610951 C58.7626345,136.422372 46.3722246,119.687011 44.3051388,99.8812385 C38.4803105,99.0577866 34,94.0521096 34,88 L34,74 C34,68.0540074 38.3245733,63.1180731 44,62.1659169 L44,56 L44,56 C44,25.072054 69.072054,5.68137151e-15 100,0 L100,0 L100,0 C130.927946,-5.68137151e-15 156,25.072054 156,56 L156,62.1659169 C161.675427,63.1180731 166,68.0540074 166,74 L166,88 C166,94.0521096 161.51969,99.0577866 155.694861,99.8812385 C153.627775,119.687011 141.237365,136.422372 124,144.610951 Z" id="path-5"></path>
      </defs>
      <g id="Avataaar" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-825.000000, -1100.000000)" id="Avataaar/Circle">
          <g transform="translate(825.000000, 1100.000000)">
            <g id="Mask"></g>
            <g id="Avataaar" stroke-width="1" fill-rule="evenodd" mask="url(#mask-4)">
              <g id="Body" transform="translate(32.000000, 36.000000)">
                <mask id="mask-6" fill="white">
                  <use xlink:href="#path-5"></use>
                </mask>
                <use fill="#D0C6AC" xlink:href="#path-5"></use>
                <g id="Skin/👶🏽-03-Brown" mask="url(#mask-6)" fill="#FFDBB4">
                  <g transform="translate(-32.000000, 0.000000)" id="Color">
                    <rect x="0" y="0" width="264" height="244"></rect>
                  </g>
                </g>
                <path d="M156,79 L156,102 C156,132.927946 130.927946,158 100,158 C69.072054,158 44,132.927946 44,102 L44,79 L44,94 C44,124.927946 69.072054,150 100,150 C130.927946,150 156,124.927946 156,94 L156,79 Z" id="Neck-Shadow" fill-opacity="0.100000001" fill="#000000" mask="url(#mask-6)"></path>
              </g>
              <g id="Clothing/Overall" transform="translate(0.000000, 170.000000)">
                <defs>
                  <path d="M94,29.6883435 L94,74 L170,74 L170,29.6883435 C179.362956,30.9893126 188.149952,34.0907916 196.00002,38.6318143 L196,110 L187,110 L77,110 L68,110 L68,38.6318027 C75.8500482,34.0907916 84.6370437,30.9893126 94,29.6883435 Z" id="react-path-134"></path>
                </defs>
                <mask id="react-mask-135" fill="white">
                  <use xlink:href="#react-path-134"></use>
                </mask>
                <use id="Overall" fill="#B7C1DB" fill-rule="evenodd" xlink:href="#react-path-134"></use>
                <g id="Color/Palette/Gray-01" mask="url(#react-mask-135)" fill-rule="evenodd" fill="#FFFFFF">
                  <rect id="🖍Color" x="0" y="0" width="264" height="110"></rect>
                </g>
                <circle id="Button" fill="#F4F4F4" fill-rule="evenodd" cx="81" cy="83" r="5"></circle>
                <circle id="Button" fill="#F4F4F4" fill-rule="evenodd" cx="183" cy="83" r="5"></circle>
              </g>
              <g id="Face" transform="translate(76.000000, 82.000000)" fill="#000000">
                <g id="Mouth/Default" transform="translate(2.000000, 52.000000)" fill-opacity="0.699999988">
                  <path d="M40,15 C40,22.7319865 46.2680135,29 54,29 L54,29 C61.7319865,29 68,22.7319865 68,15" id="Mouth"></path>
                </g>
                <g id="Nose/Default" transform="translate(28.000000, 40.000000)" fill-opacity="0.16">
                  <path d="M16,8 C16,12.418278 21.372583,16 28,16 L28,16 C34.627417,16 40,12.418278 40,8" id="Nose"></path>
                </g>
                <g id="Eyes/Wink-😉" transform="translate(0.000000, 8.000000)" fill-opacity="0.599999964">
                  <circle id="Eye" cx="30" cy="22" r="6"></circle>
                  <path d="M70.4123979,24.204889 C72.2589064,20.4060854 76.4166529,17.7575774 81.2498107,17.7575774 C86.065907,17.7575774 90.2113521,20.3874194 92.0675822,24.1647016 C92.618991,25.2867751 91.8343342,26.2050591 91.0428374,25.5246002 C88.5917368,23.4173607 85.1109468,22.1013658 81.2498107,22.1013658 C77.5094365,22.1013658 74.1259889,23.3363293 71.6897696,25.3292186 C70.7990233,26.0578718 69.8723316,25.3159619 70.4123979,24.204889 Z" id="Winky-Wink" transform="translate(81.252230, 21.757577) rotate(-4.000000) translate(-81.252230, -21.757577) "></path>
                </g>
                <g id="Eyebrow/Outline/Default" fill-opacity="0.599999964">
                  <g id="I-Browse" transform="translate(12.000000, 6.000000)">
                    <path d="M3.63024536,11.1585767 C7.54515501,5.64986673 18.2779197,2.56083721 27.5230268,4.83118046 C28.5957248,5.0946055 29.6788665,4.43856013 29.9422916,3.36586212 C30.2057166,2.2931641 29.5496712,1.21002236 28.4769732,0.94659732 C17.7403633,-1.69001789 5.31209962,1.88699832 0.369754639,8.84142326 C-0.270109626,9.74178291 -0.0589363917,10.9903811 0.84142326,11.6302454 C1.74178291,12.2701096 2.9903811,12.0589364 3.63024536,11.1585767 Z" id="Eyebrow" fill-rule="nonzero"></path>
                    <path d="M61.6302454,11.1585767 C65.545155,5.64986673 76.2779197,2.56083721 85.5230268,4.83118046 C86.5957248,5.0946055 87.6788665,4.43856013 87.9422916,3.36586212 C88.2057166,2.2931641 87.5496712,1.21002236 86.4769732,0.94659732 C75.7403633,-1.69001789 63.3120996,1.88699832 58.3697546,8.84142326 C57.7298904,9.74178291 57.9410636,10.9903811 58.8414233,11.6302454 C59.7417829,12.2701096 60.9903811,12.0589364 61.6302454,11.1585767 Z" id="Eyebrow" fill-rule="nonzero" transform="translate(73.000154, 6.039198) scale(-1, 1) translate(-73.000154, -6.039198) "></path>
                  </g>
                </g>
              </g>
              <g id="Top" stroke-width="1" fill-rule="evenodd">
                <defs>
                  <rect id="react-path-103" x="0" y="0" width="264" height="280"></rect>
                  <path d="M21,157.540812 L21,69.046252 C21,65.5140485 21.3981158,62.0748299 22.1519234,58.7710202 C25.205041,38.7314193 36.7752683,22.8108863 50,13 C69.9046441,-1.75961713 103.441939,-6.01828252 115.047069,11.5221046 C123.698343,7.68103538 136.519049,11.1821114 146,20 C155.565156,29.4150438 163.19967,50.1973768 158.657409,67.2035172 C158.762104,68.4691962 158.815476,69.7490355 158.815476,71.0408963 L158.815476,92.8921195 C157.934142,87.9183006 153.988995,84.0029116 149,83.1659169 L149,83 C142.963851,61.4642087 125.229516,51.5800472 114.429684,41.777113 C97.5353566,60.6732583 44.8226408,60.7398069 27,98 L27,108 C27,114.018625 31.4308707,119.002364 37.2085808,119.867187 C38.9518066,140.114792 51.4692178,157.282984 69,165.610951 L69,166 C71.9303712,209.855112 62.358462,264.797432 0,248 C13.6057325,240.037752 20.8081123,189.055563 21,157.540812 Z M117,165.610951 C134.530782,157.282984 147.048193,140.114792 148.791419,119.867187 C153.87876,119.105701 157.921895,115.150816 158.815476,110.107881 L158.815476,111.47039 L158.815476,111.47039 C158.815476,127.298552 162.572711,142.900645 169.7782,156.993609 L196.726668,209.701177 C203.689761,223.320048 201.645562,239.173573 192.790715,250.468968 C189.966212,213.288807 158.90349,184 121,184 L121,184 L117,184 L117,165.610951 Z" id="react-path-104"></path>
                  <path d="M65.1802189,77.7372986 C67.3631845,76.1045334 80.4065113,75.4786511 82.757829,74.0894494 C83.4916461,73.6553857 84.0610723,73.215719 84.4997781,72.7800074 C84.938814,73.215719 85.5085703,73.6553857 86.2423874,74.0894494 C88.593375,75.4786511 101.636702,76.1045334 103.819667,77.7372986 C106.030032,79.3908276 107.643571,83.1846831 107.466966,86.15095 C107.255041,89.7101408 103.361486,98.2028927 93.6723269,99.1811016 C91.5576925,96.8281927 88.2368647,95.3104528 84.4997781,95.3104528 C80.7633517,95.3104528 77.4421938,96.8281927 75.3275594,99.1811016 C65.6387308,98.2028927 61.7451757,89.7101408 61.5332501,86.15095 C61.3566455,83.1846831 62.9701849,79.3908276 65.1802189,77.7372986 M103.141638,94.9063813 C103.142958,94.9057221 103.144609,94.905063 103.145929,94.9047334 C103.144278,94.905063 103.142958,94.9057221 103.141638,94.9063813 M65.8453747,94.9014375 C65.8493359,94.9030855 65.8565982,94.9057221 65.8618798,94.9076997 C65.8565982,94.9057221 65.8509864,94.9034151 65.8453747,94.9014375 M144.86259,55.9853335 C144.47439,50.0303878 143.277769,44.1519058 142.233986,38.2862777 C141.952739,36.7072349 140.423706,26 139.734783,26 C139.502391,35.1094058 138.701893,44.0803858 137.669664,53.1393651 C137.361018,55.8475668 137.037848,58.5564277 136.825262,61.2741874 C136.653609,63.4695546 136.959614,66.1220564 136.427819,68.2455739 C135.749129,70.9524573 132.348087,73.4783984 129.702978,74.410795 C123.102915,76.7373371 117.597802,67.1077689 111.960977,64.2911336 C104.643272,60.6347152 92.0637391,59.7639895 84.5816434,64.5297918 C76.9361472,59.7639895 64.356614,60.6347152 57.0389092,64.2911336 C51.4024147,67.1077689 45.8969708,76.7373371 39.2972383,74.410795 C36.6521296,73.4783984 33.2504268,70.9524573 32.572397,68.2455739 C32.0402723,66.1220564 32.346277,63.4695546 32.174954,61.2741874 C31.9623682,58.5564277 31.6388681,55.8475668 31.3302226,53.1393651 C30.2983232,44.0803858 29.4974953,35.1094058 29.2654335,26 C28.5761802,26 27.0468169,36.7072349 26.7658999,38.2862777 C25.7221169,44.1519058 24.5258266,50.0303878 24.1376265,55.9853335 C23.738533,62.1047422 24.2148704,68.1674622 25.4695887,74.1632765 C26.0687242,77.0277016 26.7685407,79.8756475 27.518863,82.7041478 C28.352701,85.8467429 27.198994,91.9661516 27.5723395,95.1921317 C28.2787581,101.29572 31.1542781,113.199679 34.3833375,118.45096 C35.9440605,120.989096 37.7734867,122.573742 39.816489,124.619148 C41.7825775,126.58809 42.6038717,129.640049 44.7260985,131.73687 C48.6820428,135.645092 54.4456266,137.971304 60.3656788,138.543134 C65.6773527,143.050212 74.505605,146 84.4997781,146 C94.4946114,146 103.322534,143.050212 108.634538,138.543134 C114.55393,137.971304 120.317843,135.645092 124.274118,131.73687 C126.396015,129.640049 127.217309,126.58809 129.183727,124.619148 C131.2264,122.573742 133.055826,120.989096 134.616879,118.45096 C137.845608,113.199679 140.721458,101.29572 141.427547,95.1921317 C141.800892,91.9661516 140.647185,85.8467429 141.481353,82.7041478 C142.231676,79.8756475 142.931162,77.0277016 143.530628,74.1632765 C144.784686,68.1674622 145.261353,62.1047422 144.86259,55.9853335 Z" id="react-path-105"></path>
                </defs>
                <mask id="react-mask-101" fill="white">
                  <use xlink:href="#react-path-103"></use>
                </mask>
                <g id="Mask"></g>
                <g id="Top/Long-Hair/Straight" mask="url(#react-mask-101)">
                  <g transform="translate(-1.000000, 0.000000)">
                    <g id="Hair" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(40.000000, 15.000000)">
                      <mask id="react-mask-102" fill="white">
                        <use xlink:href="#react-path-104"></use>
                      </mask>
                      <use fill="#272C2E" xlink:href="#react-path-104"></use>
                      <g id="Skin/👶🏽-03-Brown" mask="url(#react-mask-102)" fill="#B58143">
                        <g transform="translate(0.000000, 0.000000) " id="Color">
                          <rect x="0" y="0" width="264" height="280"></rect>
                        </g>
                      </g>
                    </g>
                    <path d="M67,113 C84.8226408,80.6646674 137.535357,80.6069148 154.429684,64.2083647 C165.207546,72.6982916 182.891727,79.2665518 188.963018,97.8687161 C182.891727,76.423995 165.207546,66.5601054 154.429684,56.777113 C137.535357,75.6732583 84.8226408,75.7398069 67,113 Z" id="Shadow" fill-opacity="0.16" fill="#000000" fill-rule="evenodd"></path>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
      </g>
    </svg>
  </div>
  
  <!-- svg끝 -->

    <script src="common.js"></script>
</body>
</html>