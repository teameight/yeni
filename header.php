<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yeni_Nostalji_16
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Karma:300" rel="stylesheet">
<script src="https://use.typekit.net/gno0url.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'yeni' ); ?></a>

	<button class="menu-toggle" id="menu-toggle">
		<img class="menu-toggle-open menu-toggle-light" src="<?php echo get_template_directory_uri() . '/images/hamburger-white.svg'; ?>">
		<img class="menu-toggle-open menu-toggle-dark" src="<?php echo get_template_directory_uri() . '/images/hamburger-black.svg'; ?>">
		<img class="menu-toggle-close" width="26" height="26" src="<?php echo get_template_directory_uri() . '/images/x-white.svg'; ?>">
	</button>

	<header id="masthead" class="site-header" role="banner">



		<nav id="site-navigation" class="main-navigation" role="navigation">

				<a class="main-logo" href="<?php echo esc_url( home_url() ); ?>">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="141" height="84" viewBox="0 0 783 467">
  <defs>
    <polygon id="a" points="588.172 378 588.172 .215 .546 .215 .546 378"/>
  </defs>
  <g fill="none" fill-rule="evenodd">
    <path fill="#F7F3EB" d="M351.4669 102.7461C347.3309 102.7461 343.9669 106.1101 343.9669 110.2461 343.9669 114.3821 347.3309 117.7461 351.4669 117.7461 355.6029 117.7461 358.9669 114.3821 358.9669 110.2461 358.9669 106.1101 355.6029 102.7461 351.4669 102.7461M628.4401 186.2891C632.5761 186.2891 635.9401 182.9251 635.9401 178.7891 635.9401 174.6531 632.5761 171.2891 628.4401 171.2891 624.3041 171.2891 620.9401 174.6531 620.9401 178.7891 620.9401 182.9251 624.3041 186.2891 628.4401 186.2891M665.3839 176.3897C669.5199 176.3897 672.8839 173.0257 672.8839 168.8897 672.8839 164.7537 669.5199 161.3897 665.3839 161.3897 661.2479 161.3897 657.8839 164.7537 657.8839 168.8897 657.8839 173.0257 661.2479 176.3897 665.3839 176.3897"/>
    <g transform="translate(194 88.169)">
      <mask id="b" fill="white">
        <use xlink:href="#a"/>
      </mask>
      <path fill="#F7F3EB" d="M241.9738,293.0117 C234.7888,319.8237 213.4678,327.1947 196.6968,322.7057 C183.7908,319.2477 172.8178,308.1127 177.3948,291.0297 C179.3528,283.7227 182.6788,278.8937 187.5608,276.2647 C191.0078,274.4087 195.2698,273.6167 200.1628,273.6167 C211.9378,273.6167 227.3558,278.2047 243.7818,283.5977 C243.4508,286.5767 242.8588,289.7087 241.9738,293.0117 L241.9738,293.0117 Z M308.1338,141.7667 L308.3488,141.7097 C334.7178,134.7037 357.8738,128.5527 375.9568,118.0057 L370.6348,158.4307 C366.9048,186.6447 353.9748,198.4037 346.4238,197.4377 C342.0558,196.8897 339.8558,191.2917 340.8118,183.2387 L341.5748,177.4447 C341.9358,174.7067 340.0078,172.1957 337.2698,171.8347 C334.5418,171.4707 332.0208,173.4017 331.6608,176.1397 L330.8908,181.9957 C330.7888,182.8487 330.7198,183.7047 330.6768,184.5607 C330.5558,184.8957 330.4618,185.2457 330.4138,185.6137 C328.4308,200.6747 319.5578,207.7857 312.2188,206.8077 C305.4308,205.9137 301.9678,198.3267 303.3948,187.4797 C305.0278,175.0817 314.4698,155.4117 332.8548,155.4117 C335.6168,155.4117 337.8548,153.1737 337.8548,150.4117 C337.8548,147.6507 335.6168,145.4117 332.8548,145.4117 C319.1848,145.4117 297.4188,156.2677 293.4808,186.1747 C292.6108,192.7857 293.1648,198.3037 294.6928,202.7537 C292.6978,211.5767 285.1208,216.5097 278.8818,215.6157 C267.2418,213.9307 265.4818,195.3297 267.5108,179.9137 L271.2658,151.3917 L308.1338,141.7667 Z M15.2028,116.4477 C15.2278,114.4597 15.3838,112.3657 15.6718,110.1747 C18.2838,90.3317 29.0988,84.4157 32.3508,83.0747 C34.1618,82.3277 35.9608,81.9567 37.5908,81.9567 C39.4038,81.9567 41.0088,82.4157 42.1898,83.3287 C44.6468,85.2277 44.7468,88.6587 44.3988,91.2027 C42.8848,102.2537 30.0098,114.8797 15.2028,116.4477 L15.2028,116.4477 Z M395.5108,46.0957 C398.5738,22.7337 404.8558,12.4957 407.5168,10.5017 C409.0928,12.8977 411.6438,22.5257 408.5638,45.9217 C405.6528,68.0367 399.1018,83.3757 389.1128,94.6937 L395.5108,46.0957 Z M583.8248,88.4787 C581.0858,88.1157 578.5748,90.0447 578.2148,92.7827 C572.7158,134.5517 558.5268,157.5127 547.5918,169.4197 C534.8498,183.2927 519.1198,190.1427 504.4298,188.2087 C480.0338,184.9967 466.0058,159.8847 470.3158,127.1397 L473.6248,102.0027 C473.9858,99.2657 472.0578,96.7537 469.3208,96.3937 C466.5908,96.0307 464.0718,97.9597 463.7108,100.6987 L460.4018,125.8327 L460.4018,125.8327 L460.4018,125.8347 L457.6328,146.8657 C455.5388,162.7727 448.4398,171.0437 442.4938,173.4817 C439.3338,174.7757 436.3928,174.5557 434.2148,172.8577 C430.9378,170.3037 429.6398,164.7747 430.6528,157.6877 L436.6818,111.9017 C437.0418,109.1637 435.1148,106.6527 432.3768,106.2917 C429.6398,105.9277 427.1268,107.8577 426.7668,110.5967 L420.7538,156.2707 L420.7538,156.2707 L420.7538,156.2717 L418.3048,174.8737 C410.8118,231.7907 394.6458,267.2977 368.8838,283.4237 C350.7478,294.7767 329.3358,295.3597 307.3448,291.4647 C310.9638,280.6397 313.6118,269.0377 315.2388,256.6857 C315.5988,253.9487 313.6718,251.4367 310.9338,251.0757 C308.1968,250.7137 305.6848,252.6427 305.3248,255.3807 C303.7238,267.5327 301.1008,278.9027 297.4838,289.4447 C283.1368,286.1387 268.7148,281.3457 254.9558,276.7657 C254.6718,276.6707 254.3868,276.5757 254.1028,276.4817 C253.7208,259.6427 246.0428,247.1297 237.0938,236.7647 C237.8228,236.6057 238.5568,236.4207 239.2998,236.1727 C249.1548,232.8837 255.7908,223.0147 260.2658,211.0917 C264.1358,220.1087 270.6928,224.5337 277.4498,225.5117 C278.4768,225.6607 279.5008,225.7337 280.5158,225.7337 C289.0688,225.7337 297.0068,220.5847 301.4658,212.6887 C304.2648,214.9367 307.5338,216.2777 310.9128,216.7227 C311.7578,216.8337 312.6128,216.8897 313.4748,216.8897 C321.5438,216.8887 330.1708,212.0067 335.5308,202.2277 C337.8378,204.9527 341.0128,206.8377 345.1788,207.3607 C345.8668,207.4467 346.5588,207.4897 347.2548,207.4897 C354.0488,207.4897 361.1298,203.4107 366.9768,196.0437 C369.6518,192.6747 371.9908,188.7127 373.9738,184.2527 C375.7588,187.6357 378.1288,190.4257 381.0748,192.4697 C384.6098,194.9207 388.6598,196.1497 392.9208,196.1497 C396.9618,196.1487 401.1928,195.0437 405.3498,192.8297 C407.7878,191.5327 408.7108,188.5047 407.4138,186.0677 C406.1158,183.6287 403.0878,182.7047 400.6498,184.0037 C395.5338,186.7277 390.4758,186.8197 386.7748,184.2527 C381.2658,180.4307 378.9968,171.5017 380.5468,159.7517 C380.5478,159.7487 380.5478,159.7447 380.5488,159.7407 L380.5488,159.7377 L387.0408,110.4257 C404.6518,96.2417 414.6928,75.9837 418.4778,47.2267 C420.7198,30.1997 421.6208,8.5447 413.1838,2.0737 C410.5838,0.0777 407.3248,-0.3323 404.2418,0.9467 C395.8288,4.4347 388.6838,21.2367 385.5958,44.7927 L377.6688,105.0017 C360.2528,117.5727 336.0988,123.9907 305.7808,132.0447 L272.6748,140.6887 L276.6458,110.5257 C277.0068,107.7877 275.0798,105.2767 272.3418,104.9157 C269.6028,104.5537 267.0918,106.4827 266.7318,109.2207 L262.2298,143.4157 L260.3918,143.8957 C219.0068,155.3067 189.5088,153.6837 172.7208,139.0687 C157.5848,125.8907 152.2398,101.3877 156.8308,66.2427 L159.7118,43.3307 C160.0568,40.5907 158.1148,38.0907 155.3748,37.7457 C152.6348,37.4077 150.1348,39.3437 149.7898,42.0827 L146.2028,70.6127 C141.1028,108.6157 126.6318,120.7197 118.1668,119.6077 C113.8998,119.0397 111.5158,114.9907 112.2348,109.5317 C112.8988,104.4897 114.3368,101.1197 116.0018,97.2197 C118.0468,92.4287 120.3658,86.9977 121.5648,77.8857 C122.6388,69.7277 120.2968,62.7847 115.1388,58.8387 C110.1758,55.0417 103.4208,54.4957 96.6068,57.3387 C92.0248,59.2517 87.8488,62.4397 84.1828,66.6927 L84.5568,63.8597 C84.9168,61.1217 82.9898,58.6107 80.2518,58.2497 C77.5158,57.8847 75.0028,59.8167 74.6418,62.5547 L69.5448,101.2727 C66.9788,120.7397 54.6788,132.3937 44.0218,136.8067 C35.7798,140.2207 27.6958,139.8327 22.3978,135.7657 C19.5688,133.5947 17.5458,130.3807 16.3788,126.3087 C33.1878,124.1667 51.8418,110.5527 54.3058,92.5607 C55.3048,85.2677 53.1738,79.1797 48.3058,75.4167 C43.1618,71.4417 35.7728,70.8487 28.5398,73.8287 C16.5098,78.7877 7.9928,91.8877 5.7578,108.8697 C3.6958,124.5267 7.4438,136.8957 16.3098,143.6997 C20.9878,147.2887 26.8518,149.1097 33.1868,149.1097 C37.9118,149.1097 42.9008,148.0957 47.8488,146.0457 C53.6718,143.6337 59.8848,139.5137 65.2838,133.6397 L64.8248,137.1237 C64.4638,139.8617 66.3908,142.3727 69.1288,142.7337 C69.3508,142.7627 69.5708,142.7777 69.7878,142.7777 C72.2588,142.7777 74.4078,140.9457 74.7388,138.4287 L78.8628,107.1057 C78.8628,107.1047 78.8638,107.1037 78.8638,107.1027 C81.9938,82.5557 92.0708,70.0687 100.4578,66.5677 C103.8818,65.1387 107.0178,65.2147 109.0618,66.7807 C111.3018,68.4937 112.2448,72.0667 111.6508,76.5807 C110.6298,84.3327 108.6848,88.8887 106.8048,93.2927 C105.0148,97.4877 103.1628,101.8247 102.3208,108.2267 C100.8688,119.2527 106.9788,128.2077 116.8488,129.5197 C117.6718,129.6287 118.4998,129.6847 119.3358,129.6847 C128.8178,129.6837 138.9908,122.5577 146.5148,106.8767 C149.0988,124.1687 155.6538,137.4687 166.1548,146.6107 C185.3118,163.2887 217.1808,165.8037 260.8188,154.1337 L257.5968,178.6097 C255.9028,191.4767 250.4208,221.9187 236.1338,226.6877 C231.4208,228.2617 227.1208,226.1907 224.8178,223.9027 C213.6448,212.7127 206.9998,205.2167 209.4778,195.9667 C210.7768,191.1187 212.8538,188.0627 215.6528,186.8807 C217.9478,185.9117 220.6868,186.2107 222.9178,186.8157 C224.1398,187.1857 225.4648,187.7167 226.9198,188.4237 C229.3438,189.6017 232.2658,188.6477 233.5248,186.2647 C234.7848,183.8817 233.9308,180.9297 231.5918,179.5887 C231.0528,179.2797 228.2938,177.7667 224.4928,176.8827 C209.5638,173.0967 202.5248,184.3687 197.6618,192.1507 C192.6378,200.1917 190.9538,201.5977 187.6728,200.5137 C185.4088,199.7687 182.8148,200.6157 181.6388,202.6887 C180.4758,204.7397 180.7908,207.2137 182.5408,208.7767 C182.9968,209.3487 186.5398,214.2327 185.0218,225.7647 C182.9758,241.3087 172.2478,248.1867 162.7078,246.9127 C149.3498,245.1557 146.3718,231.1427 147.8818,219.6777 C151.6318,191.1927 172.3768,188.9967 173.3368,188.9107 C176.0768,188.6947 178.1308,186.3057 177.9298,183.5617 C177.7268,180.8077 175.3358,178.7137 172.5768,178.9407 C171.7868,178.9977 164.6318,179.6567 156.8068,184.8547 C149.5948,189.6457 140.4718,199.3497 137.9678,218.3727 C136.5688,228.9967 138.2998,238.3037 142.9738,245.2867 C147.2878,251.7327 153.8328,255.8307 161.4028,256.8277 C168.9058,257.8137 176.6948,255.5327 182.7618,250.5667 C187.4048,246.7637 193.2868,239.6017 194.9358,227.0697 C195.9148,219.6347 195.2198,214.0517 194.0428,210.0387 C196.2208,209.2067 198.1018,207.8097 199.7598,206.1387 C202.2978,215.5527 210.2758,223.5177 218.5778,231.8057 C230.1728,243.3827 242.0648,255.2567 243.8728,273.1067 C218.9478,265.0157 197.5588,259.5267 182.8218,267.4587 C175.4838,271.4087 170.4078,278.4687 167.7358,288.4417 C164.9148,298.9697 166.3488,308.8837 171.8808,317.1107 C176.8008,324.4247 184.6948,329.8427 194.1088,332.3657 C197.9498,333.3947 201.9298,333.9207 205.9368,333.9197 C224.9898,333.9187 244.5568,322.0067 251.6328,295.5997 C252.4488,292.5537 253.0498,289.6257 253.4558,286.8057 C266.5498,291.1627 280.1888,295.6417 293.8818,298.8967 C289.6298,308.9827 284.3778,318.2127 278.1398,326.5277 C265.5128,343.3597 249.1198,355.7927 230.7318,362.4857 C200.5038,373.4877 168.0298,367.7697 145.9788,347.5637 C133.1848,335.8407 124.2658,319.5297 120.1848,300.3937 C115.5088,278.4657 116.9518,253.1107 124.4748,225.0327 C135.2818,184.7007 121.7548,166.8827 115.4368,161.0937 C107.2028,153.5487 96.2218,151.4987 85.3078,155.4697 C68.3188,161.6537 55.4528,180.3917 49.8388,206.4867 C45.4508,200.6657 39.2568,197.3617 32.7658,196.5067 C19.3068,194.7397 3.5728,203.6757 0.9318,223.7367 C-1.9672,245.7607 12.3818,254.3937 12.9948,254.7507 C15.3778,256.1397 18.4678,255.3497 19.8588,252.9637 C21.2488,250.5777 20.4698,247.5327 18.0828,246.1437 C17.7048,245.9087 8.8458,240.2377 10.8468,225.0407 C12.6398,211.4207 22.8068,205.2677 31.4608,206.4217 C39.5978,207.4927 48.2228,215.3807 45.7718,234.0847 L45.7678,234.1157 L45.7678,234.1197 L35.8698,309.3027 C35.5088,312.0397 37.4358,314.5517 40.1738,314.9117 C40.3948,314.9417 40.6148,314.9557 40.8328,314.9557 C43.3038,314.9557 45.4528,313.1237 45.7838,310.6077 L55.6818,235.4197 C55.6838,235.4107 55.6838,235.4017 55.6848,235.3927 L57.9338,218.3137 C60.7578,196.8657 70.3298,171.5637 88.7278,164.8667 C96.1238,162.1737 103.2098,163.4537 108.6818,168.4667 C119.0368,177.9557 121.3298,198.1347 114.8158,222.4457 C106.8798,252.0637 105.3958,278.9907 110.4048,302.4797 C114.9218,323.6607 124.8878,341.7997 139.2238,354.9367 C155.7318,370.0647 177.3568,377.9997 199.9248,377.9997 C211.2728,377.9997 222.8618,375.9917 234.1518,371.8827 C254.3678,364.5247 272.3438,350.9157 286.1388,332.5287 C293.2308,323.0737 299.1188,312.5417 303.8068,301.0267 C328.4248,305.6687 352.8348,305.2677 374.1898,291.9007 C401.9678,274.5127 419.4668,238.0017 427.6378,180.3787 C427.7828,180.4997 427.9198,180.6287 428.0678,180.7447 C431.1118,183.1167 434.7308,184.3237 438.5548,184.3237 C441.0778,184.3237 443.6918,183.7967 446.2858,182.7347 C453.6388,179.7207 459.6028,172.9857 463.4458,163.7927 C464.9548,168.1497 466.8808,172.2307 469.2478,175.9727 C477.1198,188.4167 489.1498,196.2827 503.1238,198.1227 C505.1988,198.3967 507.2838,198.5317 509.3748,198.5317 C525.3968,198.5307 541.7098,190.6087 554.9568,176.1837 C572.0358,157.5867 583.5068,129.1987 588.1288,94.0877 C588.4898,91.3507 586.5618,88.8387 583.8248,88.4787 L583.8248,88.4787 Z" mask="url(#b)"/>
    </g>
    <path fill="#F7F3EB" d="M104.8537,122.6085 C92.8747,118.3455 87.3047,108.1975 89.1697,94.0325 C90.4047,84.6495 96.0207,77.4245 104.1907,74.7065 C106.4057,73.9685 108.6717,73.6085 110.9357,73.6085 C117.1647,73.6085 123.3667,76.3395 128.3827,81.4775 C133.2417,86.4555 140.7147,97.6675 141.6727,120.0045 C127.8657,125.1905 114.8807,126.1735 104.8537,122.6085 M189.8957,151.9215 C187.1657,151.5605 184.6467,153.4885 184.2867,156.2265 L176.0927,218.4665 C174.0217,233.5035 161.8207,244.0485 151.3607,247.4835 C144.1687,249.8455 137.9047,249.0045 134.1787,245.1715 C127.7237,238.5345 128.2077,223.0885 135.5067,202.7965 C145.9467,173.7705 151.3697,148.2095 151.6657,126.6735 C153.9367,125.6455 156.2127,124.5195 158.4877,123.2975 C174.8067,114.5315 198.8587,96.6295 220.7677,61.1245 C234.0687,39.5655 249.9527,23.9955 266.6987,16.0945 C281.2807,9.2165 296.2107,8.1525 309.8757,13.0135 C337.6317,22.8905 353.7317,54.7375 349.0287,90.4605 C348.6677,93.1975 350.5957,95.7095 353.3327,96.0695 C356.0697,96.4315 358.5827,94.5035 358.9427,91.7645 C364.2677,51.3235 345.4687,15.0655 313.2277,3.5925 C297.0197,-2.1755 279.4557,-0.9795 262.4327,7.0505 C243.6657,15.9035 226.7837,32.3305 212.2567,55.8725 C191.5147,89.4885 168.9947,106.3015 153.7557,114.4885 C152.9527,114.9195 152.1507,115.3375 151.3497,115.7415 C149.6767,93.4335 141.9287,81.0395 135.5377,74.4925 C125.9597,64.6825 113.0617,61.2165 101.0327,65.2175 C89.1437,69.1735 81.0017,79.4585 79.2557,92.7275 C76.7837,111.5015 85.1007,126.1935 101.5007,132.0295 C112.8167,136.0555 126.8787,135.4765 141.6437,130.6005 C140.8707,147.7715 136.5947,170.2245 126.0967,199.4115 C114.8577,230.6615 120.3897,245.3365 127.0097,252.1435 C131.2917,256.5475 137.1047,258.8145 143.7137,258.8145 C147.1237,258.8145 150.7487,258.2105 154.4807,256.9845 C160.4977,255.0085 166.9657,251.1665 172.4977,245.7745 L170.9267,257.7065 C165.1827,301.3305 150.3677,336.2555 128.0817,358.7095 C109.6067,377.3215 86.4547,386.3395 64.5627,383.4615 C20.5987,377.6725 6.0177,333.6955 11.0737,295.2845 C11.4347,292.5465 9.5077,290.0355 6.7697,289.6745 C4.0297,289.3115 1.5197,291.2415 1.1597,293.9795 C-2.3953,320.9815 2.2597,344.8955 14.6207,363.1335 C26.0597,380.0115 43.3327,390.7525 63.2577,393.3755 C66.3787,393.7865 69.5177,393.9895 72.6627,393.9895 C94.7267,393.9885 117.0677,384.0005 135.1787,365.7545 C159.0197,341.7345 174.8097,304.8235 180.8407,259.0105 L194.2007,157.5315 C194.5617,154.7945 192.6337,152.2825 189.8957,151.9215"/>
  </g>
</svg>

</a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'primary-menu' ) ); ?>

			<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_class' => 'secondary-menu' ) ); ?>

			<div class="social-icons">
				<a href="//facebook.com/yeninostaljiband">
				<svg width="9px" height="18px" viewBox="0 0 9 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
				    <desc>Created with Sketch.</desc>
				    <defs></defs>
				    <path class="social-icon icon-facebook" d="M5.83409123,3.33526235 L8.48595089,3.33526235 L8.48595089,0 L5.83409123,0 C3.78685558,0 2.12148772,1.74545396 2.12148772,3.8911394 L2.12148772,5.55877058 L0,5.55877058 L0,8.89403292 L2.12148772,8.89403292 L2.12148772,17.7880658 L5.3037193,17.7880658 L5.3037193,8.89403292 L7.95557896,8.89403292 L8.48595089,5.55877058 L5.3037193,5.55877058 L5.3037193,3.8911394 C5.3037193,3.58985404 5.54662965,3.33526235 5.83409123,3.33526235" id="Page-1" stroke="none" fill="#F5F1E6" fill-rule="evenodd"></path>
				</svg>
				</a>

				<a href="//instagram.com/yeninostalji">
				<svg width="17px" height="19px" viewBox="29 0 17 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
				    <desc>Created with Sketch.</desc>
				    <defs></defs>
				    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(29.566029, 0.950000)">
				        <path class="social-icon icon-instagram" d="M7.97306374,0.000543171296 C5.80837694,0.000543171296 5.53779109,0.0108634259 4.68716485,0.0516012731 C3.84002683,0.0923391204 3.25749486,0.241711227 2.75319857,0.455720718 C2.22697637,0.679507292 1.78148143,0.974992477 1.33947471,1.46058762 C0.893979772,1.94292373 0.622895605,2.42797569 0.417589214,2.99830556 C0.221252519,3.55179711 0.0842154858,4.18296215 0.0468417495,5.10635336 C0.0094680132,6.03680579 0,6.3317478 0,8.69128391 C0,11.05082 0.0094680132,11.345762 0.0468417495,12.2729554 C0.0842154858,13.1963466 0.221252519,13.8313139 0.417589214,14.3810032 C0.623393921,14.9545921 0.893979772,15.4401873 1.33947471,15.9219802 C1.78148143,16.4037731 2.22697637,16.7030605 2.75020868,16.9235881 C3.25799317,17.1375976 3.83703693,17.2869697 4.68417495,17.3277075 C5.53430287,17.3684454 5.80538704,17.3787656 7.97007385,17.3787656 C10.1347607,17.3787656 10.4058448,17.3684454 11.2559727,17.3277075 C12.1031108,17.2869697 12.6856427,17.1375976 13.189939,16.9235881 C13.7131713,16.7030605 14.1586663,16.4043163 14.600673,15.9219802 C15.0426797,15.4396441 15.3172521,14.9545921 15.5195686,14.3842623 C15.7159053,13.8307707 15.8529423,13.1996057 15.890316,12.2762145 C15.9276898,11.3495642 15.9371578,11.0540791 15.9371578,8.69454294 C15.9371578,6.33500683 15.9276898,6.04006481 15.890316,5.11287141 C15.8529423,4.18948021 15.7159053,3.55451296 15.5195686,3.00482361 C15.3232319,2.42743252 15.0521477,1.94238056 14.6071511,1.46004444 C14.1651444,0.978251505 13.7196494,0.67896412 13.1964171,0.458436574 C12.6886326,0.244427083 12.1095889,0.0950549769 11.2624509,0.0543171296 C10.409333,0.0103202546 10.1382489,0 7.97356206,0 L7.97306374,0.000543171296 Z M7.97306374,1.56541968 C10.1033667,1.56541968 10.3555149,1.57573993 11.1931849,1.61647778 C11.9720535,1.6539566 12.3921343,1.79626748 12.6726865,1.91522199 C13.043434,2.07165532 13.3110299,2.26176528 13.5880939,2.56376852 C13.8686461,2.86957396 14.0395686,3.15799792 14.1860737,3.56211736 C14.295205,3.8679228 14.4257639,4.32907523 14.4601477,5.17479294 C14.4975215,6.09166609 14.5069895,6.36651076 14.5069895,8.68530903 C14.5069895,11.0041073 14.4975215,11.282211 14.4601477,12.1958251 C14.4257639,13.0448019 14.295205,13.5026953 14.1860737,13.8085007 C14.0425585,14.2126201 13.8686461,14.5043031 13.5910838,14.8063064 C13.3105316,15.1121118 13.0459256,15.2984196 12.6756764,15.4581119 C12.3951242,15.5770664 11.9715552,15.7193773 11.1961748,15.7568561 C10.3550165,15.797594 10.1028684,15.8079142 7.97555533,15.8079142 C5.84824226,15.8079142 5.59310422,15.797594 4.75493589,15.7568561 C3.97606723,15.7193773 3.55598643,15.5770664 3.27543425,15.4581119 C2.90468679,15.3016786 2.63709083,15.1121118 2.35952855,14.8095654 C2.07897637,14.50376 1.90805382,14.215336 1.76154877,13.8117597 C1.65241746,13.5059543 1.52185854,13.0442587 1.4874747,12.1990841 C1.45010097,11.282211 1.44063296,11.0073663 1.44063296,8.68856806 C1.44063296,6.36976979 1.45010097,6.09166609 1.4874747,5.17805197 C1.52185854,4.32907523 1.65241746,3.87118183 1.76154877,3.56537639 C1.90506392,3.16125694 2.07947469,2.86957396 2.35653865,2.56702755 C2.63709083,2.26122211 2.90169689,2.07491435 3.27244435,1.91522199 C3.55299653,1.79626748 3.97606723,1.6539566 4.75194599,1.61647778 C5.589616,1.57573993 5.84226246,1.56541968 7.97256543,1.56541968 L7.97306374,1.56541968 Z" id="Fill-1" fill="#F5F1E6"></path>
				        <path class="social-icon icon-instagram" d="M7.97306374,11.5869301 C6.50602002,11.5869301 5.31653857,10.2903802 5.31653857,8.69128391 C5.31653857,7.09218762 6.50602002,5.79563773 7.97306374,5.79563773 C9.44010747,5.79563773 10.6295889,7.09218762 10.6295889,8.69128391 C10.6295889,10.2903802 9.44010747,11.5869301 7.97306374,11.5869301 M7.97306374,4.22695903 C5.71220186,4.22695903 3.87740056,6.22637257 3.87740056,8.69128391 C3.87740056,11.1561953 5.71170354,13.1556088 7.97306374,13.1556088 C10.2344239,13.1556088 12.0687269,11.1561953 12.0687269,8.69128391 C12.0687269,6.22691574 10.2344239,4.22695903 7.97306374,4.22695903" id="Fill-3" fill="#F5F1E6"></path>
				        <path class="social-icon icon-instagram" d="M12.2301815,5.09277407 C11.701966,5.09277407 11.2739121,4.62618993 11.2739121,4.05042836 C11.2739121,3.47466678 11.701966,3.00808264 12.2301815,3.00808264 C12.7583969,3.00808264 13.1864508,3.47466678 13.1864508,4.05042836 C13.1864508,4.62618993 12.7583969,5.09277407 12.2301815,5.09277407 Z" id="Fill-5" fill="#F5F1E6"></path>
				    </g>
				</svg>
				</a>

				<a href="//soundcloud.com/yeni-nostalji">
				<svg width="28px" height="14px" viewBox="101 2 28 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
				    <desc>Created with Sketch.</desc>
				    <defs></defs>
				    <path class="icon-soundcloud social-icon" d="M101.911099,13.7968371 L102.748004,13.7968371 L103.166456,11.9723643 L102.748004,10.1478914 L101.911099,10.1478914 L101.492647,11.9723643 L101.911099,13.7968371 Z M105.258717,15.62131 L106.095621,15.62131 L106.514073,11.9723643 L106.095621,8.32341857 L105.258717,8.32341857 L104.840265,11.9723643 L105.258717,15.62131 Z M109.443239,15.62131 L108.606334,15.62131 L108.187882,10.9816755 L108.606334,6.49894571 L109.443239,6.49894571 L109.861691,11.0601278 L109.443239,15.62131 Z M111.953952,15.62131 L112.790856,15.62131 L113.209309,9.22926934 L112.790856,2.85 L111.953952,2.85 L111.5355,9.22926934 L111.953952,15.62131 Z M124.82052,8.38636288 C124.347669,8.38636288 123.895741,8.48670889 123.484821,8.6673317 C123.210316,5.40699871 120.600011,2.85 117.417264,2.85 C116.638106,2.85 115.882381,3.01055361 115.212021,3.28240007 C114.951744,3.38821949 114.883117,3.49677563 114.883117,3.70750224 L114.883117,15.1879977 C114.883117,15.4096711 115.046314,15.5939429 115.252192,15.6158366 C115.261398,15.6167488 124.759426,15.6222222 124.821357,15.6222222 C126.727826,15.6222222 128.273588,14.0020903 128.273588,12.0052048 C128.273588,10.0083192 126.726989,8.38727512 124.82052,8.38727512 L124.82052,8.38636288 Z" id="Page-1" stroke="none" fill="#F5F1E6" fill-rule="evenodd"></path>
				</svg>
				</a>

			</div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">