<?php
/*
    Template Name: projectPresentation
*/
require("header.php");
?>
    <main style="flex: 1 0 auto;">
        <section
                class="section-presentation-home margin-beetwen">
            <div>
                <h2>
                    <?php the_field('titlepage'); ?>
                </h2>
                <div class="margin-text">
                    <?php the_field('textdescription'); ?>
                </div>
                <div class="container" itemscope
                     itemtype="https://schema.org/URL">
                    <?php
                    $link = get_field('ctacontact');
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a itemprop="url" class="btn-push btn-chat purple" href="<?php echo esc_url($link_url); ?>"
                           target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="first-svg first-svg-other-page">
                <svg class="svgWebDeveloper" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 600 500" style="enable-background:new 0 0 600 500;" xml:space="preserve">
	<style type="text/css">
        .st0 {
            opacity: 0.48;
            fill: #7000CD;
            enable-background: new;
        }

        .st1 {
            opacity: 0.18;
            fill: #7000CD;
            enable-background: new;
        }

        .st2 {
            fill: #7000CD;
        }

        .st3 {
            fill: url(#SVGID_1_);
        }

        .st4 {
            fill: url(#SVGID_2_);
        }

        .st5 {
            fill: #FFDAD2;
        }

        .st6 {
            fill: #3F3D56;
        }

        .st7 {
            fill: url(#SVGID_3_);
        }

        .st8 {
            fill: #FFFFFF;
        }

        .st9 {
            fill: none;
            stroke: #FFFFFF;
            stroke-width: 3.3;
            stroke-miterlimit: 10;
        }

        .st10 {
            fill: url(#SVGID_4_);
        }

        .st11 {
            fill: url(#SVGID_5_);
        }

        .st12 {
            fill: url(#SVGID_6_);
        }

        .st13 {
            fill: url(#SVGID_7_);
        }

        .st14 {
            opacity: 0.51;
            fill: #FFFFFF;
            enable-background: new;
        }
    </style>
                    <g class="allPath">
                        <path class="st0" d="M67.6,25.2h514.9c7.2,0,13.1,5.8,13.1,13.1v320.5c0,7.2-5.8,13-13.1,13H67.6c-7.2,0-13.1-5.8-13.1-13V38.3
		C54.4,31,60.3,25.2,67.6,25.2z"/>
                        <path class="st1" d="M584.8,397.1c-0.4,11.4-2.9,22.9-9.3,32.3c-8,11.8-21,19.1-33.6,26.1l-35.6,19.7c-15.6,8.6-32.1,17.4-50,17.7
		c-12.6,0.1-24.8-3.9-37-7.4c-56.7-16.4-116.4-18.7-175-14.5c-30.1,2.2-59.9,5.8-89.7,10.4c-23.8,3.5-52.3,15.3-73.8,1.3
		c-23.4-15.2-37.7-39.7-51-63.7c-11.5-20.7-23.2-41.9-27-65.3C-3,317.6,11,280.3,32.9,251.1c6.6-8.8,13.7-17.1,21.5-24.8v132.6
		c0,7.3,5.8,13.1,13.1,13.1h514.9C584.2,380.1,585.1,388.6,584.8,397.1L584.8,397.1z"/>
                        <path class="st1"
                              d="M392.4,25.2H254.8c5.1-3.9,10.8-7.3,16.8-9.9c10.8-4.7,22.8-6.9,34.6-7.7C335.9,5.4,365.7,12,392.4,25.2z"/>
                        <path class="st2" d="M266.4,328.1c1.3,1.8,2.9,3.4,4.8,4.7c2.8,1.5,5.7,2.3,8.8,2.6l46.6,7c0.4,0,0.9,0.1,1.3,0.4
		c0.6,0.6,0.7,1.3,0.7,2c0.1,8.8-1,17.4-3.5,25.9c-0.1,0.7-0.4,1.3-0.9,1.8c-0.6,0.4-1.3,0.6-2.2,0.6c-15.6,1.3-31.4,0.9-47.2,0.4
		c-2.6,0-5.3-0.3-7.9-0.9c-4.4-1.2-7.9-4.2-11.2-7.3c-7.2-6.6-35.8-33-37.5-36.7c-2.3-5.1-4.1-10.5-5.6-15.9
		c-1.5-5.3,9.2-6,9.1-11.4c-0.1-3.8,0.3-7.6,1.3-11.2c0.7-3.2,2.3-6.3,4.7-8.6c1.6-1.5-0.9-11.4,1.3-11.5
		c2.6,8.8,14.2,26.3,19.3,33.7C253.9,312.3,259.9,320.4,266.4,328.1L266.4,328.1z"/>

                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="224.9072" y1="807.494"
                                        x2="298.3069"
                                        y2="835.4661" gradientTransform="matrix(1 0 0 1 -4.89 -496.78)">
                            <stop offset="1.000000e-02" style="stop-color:#000000"/>
                            <stop offset="0.12" style="stop-color:#000000;stop-opacity:0.75"/>
                            <stop offset="1" style="stop-color:#000000;stop-opacity:0"/>
                        </linearGradient>
                        <path class="st3" d="M266.4,328.1c1.3,1.8,2.9,3.4,4.8,4.7c2.8,1.5,5.7,2.3,8.8,2.6l46.6,7c0.4,0,0.9,0.1,1.3,0.4
		c0.6,0.6,0.7,1.3,0.7,2c0.1,8.8-1,17.4-3.5,25.9c-0.1,0.7-0.4,1.3-0.9,1.8c-0.6,0.4-1.3,0.6-2.2,0.6c-15.6,1.3-31.4,0.9-47.2,0.4
		c-2.6,0-5.3-0.3-7.9-0.9c-4.4-1.2-7.9-4.2-11.2-7.3c-7.2-6.6-35.8-33-37.5-36.7c-2.3-5.1-4.1-10.5-5.6-15.9
		c-1.5-5.3,9.2-6,9.1-11.4c-0.1-3.8,0.3-7.6,1.3-11.2c0.7-3.2,2.3-6.3,4.7-8.6c1.6-1.5-0.9-11.4,1.3-11.5
		c2.6,8.8,14.2,26.3,19.3,33.7C253.9,312.3,259.9,320.4,266.4,328.1L266.4,328.1z"/>
                        <path class="st2" d="M148.5,254.1c-3.1,2.8-6.1,5.8-8.8,9.1c-6.4,7.9-10.8,17.4-14.8,26.7c-10.7,25-19.9,51.9-17.2,78.9
		c0,1.6,0.4,3.2,1.3,4.7c1.3,1.6,3.1,2.8,5,3.2c5.1,1.6,10.7,1.8,16.1,1.8c21,0.1,42.1,0.4,63.1-0.6c3.2-0.1,6.7-0.4,9.3-2.2
		c2-1.5,3.5-3.5,4.5-5.7c5.7-10.7,7.3-22.9,11.7-34.2c5.8-14.6,21.9-27.9,18.6-43.2C223,227,155.1,248.1,148.5,254.1L148.5,254.1z"
                        />

                        <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="187.5006" y1="888.5629"
                                        x2="165.2251"
                                        y2="754.223" gradientTransform="matrix(1 0 0 1 -4.89 -496.78)">
                            <stop offset="1.000000e-02" style="stop-color:#000000"/>
                            <stop offset="0.12" style="stop-color:#000000;stop-opacity:0.75"/>
                            <stop offset="1" style="stop-color:#000000;stop-opacity:0"/>
                        </linearGradient>
                        <path class="st4" d="M148.5,254.1c-3.1,2.8-6.1,5.8-8.8,9.1c-6.4,7.9-10.8,17.4-14.8,26.7c-10.7,25-19.9,51.9-17.2,78.9
		c0,1.6,0.4,3.2,1.3,4.7c1.3,1.6,3.1,2.8,5,3.2c5.1,1.6,10.7,1.8,16.1,1.8c21,0.1,42.1,0.4,63.1-0.6c3.2-0.1,6.7-0.4,9.3-2.2
		c2-1.5,3.5-3.5,4.5-5.7c5.7-10.7,7.3-22.9,11.7-34.2c5.8-14.6,21.9-27.9,18.6-43.2C223,227,155.1,248.1,148.5,254.1L148.5,254.1z"
                        />
                        <path class="st5" d="M243.6,200c-2.5,12-5.1,24.2-11.7,34.6c-2.5,4.2-5.8,7.6-10.1,9.9c-4.2,2.2-9.6,2.5-13.7-0.1
		c-2-1.3-4.2-3.4-6.4-2.3c-1.6,0.7-2,2.6-2.3,4.4c-0.6,4.2-0.4,8.5,0.1,12.6c0.3,1.2,0.3,2.3,0.1,3.7c-0.6,2.3-2.5,3.9-4.7,4.4
		c-2.2,0.3-4.5,0-6.6-1c-6.4-2.9-11.1-8.8-12.3-15.8c-0.3-2.3-0.4-4.7-0.4-7c-0.3-10.4-1.9-20.7-1.6-31.1s2.9-21.2,9.9-28.9
		c4.1-4.2,8.9-7.6,14.3-9.9c7.9-3.8,16.8-6.4,25.6-5.1c7,1.2,13.1,5.3,16.9,11.2C245.2,186.4,245.3,191.7,243.6,200L243.6,200z"/>
                        <path class="st6" d="M265.3,173.6c1.2-9.9-3.9-19.7-12.9-24.4c-3.8-1.9-8.2-2.8-12.4-3.8c-9.8-2.6-19.1-7-29.2-7.9
		c-10.1-0.9-21.6,2.6-26,11.7c-0.9,1.6-1.6,3.7-3.4,4.1c-1,0.1-2,0-2.9-0.3c-6.7-1.2-12.7,4.5-15.8,10.7c-4.8,9.9-5.1,21.3-4.1,32.3
		c1,10.1,3.5,21,11.7,27.2c0.7,0.6,2,1.2,2.8,0.6c0.3-0.4,0.6-0.9,0.6-1.3c0.9-3.8,1.2-7.7,0.9-11.7c-0.1-2.9-0.6-6,0.1-8.9
		s3.2-5.6,6.1-5.6c2.8,0,5,2.6,5.7,5.3c0.4,2.8,0.4,5.6-0.3,8.2c0.4,1.2,2-0.1,2.2-1.3c2-9.2,2.5-19.4,8.9-26.3
		c1.3,1.3,2.2,2.9,2.8,4.8c1.9-2,4.8-2.8,7.4-1.9c1.9,0.9,3.5,1.9,5,3.2C228.2,200.3,262.1,196.8,265.3,173.6L265.3,173.6z"/>
                        <path class="st2" d="M152.9,269.1c-5,3.5-7.3,9.8-7.4,15.9c-0.1,6.1,6.3,44.4,12.3,55.4c4.7,8.5,14.5,30.5,29.2,36.7
		c4.4,1.8,69.1,1,99.2-2.2c-0.1-7.2-0.6-14.2-1-21.3c0-0.9-0.3-1.9-0.9-2.6c-0.7-0.7-1.9-6-2.9-6c-17.5,0.1-35.2,5.4-52.7,5.8
		c-2.5,0.1-5.1,0-7.6-0.4c-2-0.6-4.1-1.3-5.8-2.3c-13.6-7.6-21-22.6-26.3-37.2c-4.1-11.2-7.3-22.9-13.1-33.4c-2-3.8-3.9-7.4-8-9.1
		C162.9,266,157.4,265.9,152.9,269.1L152.9,269.1z"/>

                        <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="195.4708" y1="881.0357"
                                        x2="232.1634"
                                        y2="798.4628" gradientTransform="matrix(1 0 0 1 -4.89 -496.78)">
                            <stop offset="1.000000e-02" style="stop-color:#000000"/>
                            <stop offset="0.12" style="stop-color:#000000;stop-opacity:0.75"/>
                            <stop offset="1" style="stop-color:#000000;stop-opacity:0"/>
                        </linearGradient>
                        <path class="st7" d="M152.9,269.1c-5,3.5-7.3,9.8-7.4,15.9c-0.1,6.1,6.3,44.4,12.3,55.4c4.7,8.5,14.5,30.5,29.2,36.7
		c4.4,1.8,69.1,1,99.2-2.2c-0.1-7.2-0.6-14.2-1-21.3c0-0.9-0.3-1.9-0.9-2.6c-0.7-0.7-1.9-6-2.9-6c-17.5,0.1-35.2,5.4-52.7,5.8
		c-2.5,0.1-5.1,0-7.6-0.4c-2-0.6-4.1-1.3-5.8-2.3c-13.6-7.6-21-22.6-26.3-37.2c-4.1-11.2-7.3-22.9-13.1-33.4c-2-3.8-3.9-7.4-8-9.1
		C162.9,266,157.4,265.9,152.9,269.1L152.9,269.1z"/>
                        <path class="st5" d="M283.6,343.4c9.1-0.9,19.1,1.2,25,8.2c0.6,0.6,1,1.5,1.2,2.3c0,0.7-0.3,1.6-0.7,2.2c-3.4,5.7-10.8,7-16.9,9.2
		c-3.2,1.2-6.3,2.6-9.2,4.5c-1.6,1.3-3.5,2.2-5.6,2.8c-4.4,0.7-8-3.2-10.1-7.2c-2.3-4.4-5.8-13.4-1.5-17.5
		C269.4,344.8,279.1,343.9,283.6,343.4L283.6,343.4z"/>
                        <path class="st5" d="M359,341.3c1.6,0.9,3.1,2.2,4.1,3.8c1,1.6,1.2,3.7,0.4,5.3c-0.7,1-1.6,1.9-2.8,2.5c-8,4.8-18,5.7-26.1,10.2
		c-1.6,1.2-3.7,2-5.7,2.5c-2.5,0-4.7-1-6.3-2.9c-1.5-1.9-2.6-3.9-3.4-6.3C309.7,331,345.2,332.5,359,341.3L359,341.3z"/>
                        <path class="st8"
                              d="M127.4,330h37.8l0,0v31.1c0,6-5,11-11,11h-15.9c-6,0-11-5-11-11V330L127.4,330z"/>
                        <path class="st9"
                              d="M162.8,337.6h11.4c5.1,0,9.1,4.1,9.1,9.1v3.8c0,5.1-4.1,9.1-9.1,9.1l0,0h-11.4l0,0L162.8,337.6L162.8,337.6z"
                        />
                        <path class="st2" d="M75.6,371.3h512.7c4.5,0,8.2,3.7,8.2,8.2l0,0c0,4.5-3.7,8.2-8.2,8.2H75.6c-4.5,0-8.2-3.7-8.2-8.2l0,0
		C67.4,375,71.1,371.3,75.6,371.3z"/>
                        <path class="st2" d="M204.3,387.9h289.8v100.5H204.3V387.9z"/>
                        <path class="st2" d="M92.4,387.9h113.8v100.5H92.4V387.9z"/>

                        <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="385.7312" y1="802.4872"
                                        x2="322.8338"
                                        y2="1013.8203" gradientTransform="matrix(1 0 0 1 0 -484)">
                            <stop offset="1.000000e-02" style="stop-color:#000000"/>
                            <stop offset="0.12" style="stop-color:#000000;stop-opacity:0.75"/>
                            <stop offset="1" style="stop-color:#000000;stop-opacity:0"/>
                        </linearGradient>
                        <path class="st10" d="M206.2,387.9h287.9v100.5H206.2V387.9z"/>

                        <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="126.1723" y1="812.4846"
                                        x2="187.1124"
                                        y2="1101.4827" gradientTransform="matrix(1 0 0 1 0 -484)">
                            <stop offset="1.000000e-02" style="stop-color:#000000"/>
                            <stop offset="0.12" style="stop-color:#000000;stop-opacity:0.75"/>
                            <stop offset="1" style="stop-color:#000000;stop-opacity:0"/>
                        </linearGradient>
                        <path class="st11" d="M92.4,387.9h113.8v100.5H92.4V387.9z"/>
                        <path class="st1"
                              d="M595.5,38.3v64h-541v-64c0-7.3,5.8-13.1,13.1-13.1h514.9C589.6,25.2,595.5,31,595.5,38.3z"/>
                        <path class="st2" d="M475.5,371.1H288c-5.3,0-9.5-4.2-9.5-9.5l0,0c0-5.3,4.2-9.5,9.5-9.5h187.6c5.3,0,9.5,4.2,9.5,9.5l0,0
		C485,366.8,480.8,371.1,475.5,371.1z"/>

                        <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="386.2446" y1="876.8564"
                                        x2="387.1065"
                                        y2="837.0964" gradientTransform="matrix(1 0 0 1 -4.89 -496.79)">
                            <stop offset="1.000000e-02" style="stop-color:#000000"/>
                            <stop offset="0.12" style="stop-color:#000000;stop-opacity:0.75"/>
                            <stop offset="1" style="stop-color:#000000;stop-opacity:0"/>
                        </linearGradient>
                        <path class="st12" d="M475.5,371.1H288c-5.3,0-9.5-4.2-9.5-9.5l0,0c0-5.3,4.2-9.5,9.5-9.5h187.6c5.3,0,9.5,4.2,9.5,9.5l0,0
		C485,366.8,480.8,371.1,475.5,371.1z"/>
                        <path class="st2" d="M353,371.1h144l38-96.3c1.8-4.4-0.4-9.2-4.8-11c-1-0.4-2-0.6-3.1-0.6H414c-11.2,0-21.2,6.9-25.3,17.2
		L353,371.1z"/>
                        <path class="st2" d="M360.3,371.2H497l36.1-91.4c1.6-4.1-0.4-8.8-4.5-10.4c-0.9-0.4-1.9-0.6-2.9-0.6H418.3
		c-10.7,0-20.2,6.4-24.1,16.4L360.3,371.2z"/>

                        <linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="448.6677" y1="901.4131"
                                        x2="454.5689"
                                        y2="751.9989" gradientTransform="matrix(1 0 0 1 -4.89 -496.78)">
                            <stop offset="1.000000e-02" style="stop-color:#000000"/>
                            <stop offset="0.12" style="stop-color:#000000;stop-opacity:0.75"/>
                            <stop offset="1" style="stop-color:#000000;stop-opacity:0"/>
                        </linearGradient>
                        <path class="st13" d="M360.3,371.2H497l36.1-91.4c1.6-4.1-0.4-8.8-4.5-10.4c-0.9-0.4-1.9-0.6-2.9-0.6H418.3
		c-10.7,0-20.2,6.4-24.1,16.4L360.3,371.2z"/>
                        <g class="code">
                            <path class="st14" d="M312.7,233h202.5v11.4H312.7V233z"/>
                            <path class="st8 one" d="M259.9,50h97.4v10.1h-97.4V50z"/>
                            <path class="st8 two" d="M259.9,67.4h97.4v10.1h-97.4V67.4z"/>
                            <path class="st8 three" d="M368.8,86.4h148.1v10.1H368.8V86.4z"/>
                            <path class="st8" d="M261.2,107.3h97.4v10.1h-97.4V107.3z"/>
                            <path class="st8" d="M369.9,107.3H518v10.1H369.9V107.3z"/>
                            <path class="st8" d="M261.2,124.9h62.7V135h-62.7V124.9L261.2,124.9z"/>
                            <path class="st14" d="M339,125.4h158.5v10.1H339V125.4z"/>
                            <path class="st8" d="M315.4,141.4h97.4v10.1h-97.4V141.4z"/>
                            <path class="st8" d="M424.1,141.4h148.1v10.1H424.1V141.4z"/>
                            <path class="st8" d="M315.4,159h62.7V169h-62.7V159z"/>
                            <path class="st14" d="M393.1,159.4h158.5v10.1H393.1V159.4z"/>
                            <path class="st14" d="M315.4,176.8h31.4v10.1h-31.4V176.8z"/>

                            <path class="st8" d="M358.2,176.8h214.1v10.1H358.2V176.8z"/>
                            <path class="st8" d="M315.4,194.7h97.4v10.1h-97.4V194.7z"/>
                            <path class="st14" d="M431,194.7h141.4v10.1H431V194.7z"/>

                            <path class="st8" d="M312.7,213.6h143.9V225H312.7V213.6z"/>
                            <path class="st8" d="M476.3,213.6h96.4V225h-96.4V213.6z"/>
                        </g>
                    </g>
</svg>


            </div>
        </section>
        <section
                class="section-picto margin-beetwen"
                itemscope
                itemtype="https://schema.org/Project">
            <?php if ($loop->have_posts()): while ($loop->have_posts()): $loop->the_post(); ?>
                <a href="<?= the_permalink() ?>">
                    <div class="div-project-footerHome div-project-firstOne space-project-B margin-space_top_bottom space-project translate"
                    >
                        <section itemscope
                                 itemtype="https://schema.org/Thing"
                                 class="section-project-footerHome module first-picto-home project-back"
                        >
                            <div class="section-home-followingpoints">
                                <?php
                                if (class_exists('Dynamic_Featured_Image')):
                                    global $dynamic_featured_image;
                                    global $post;
                                    $featured_images = $dynamic_featured_image->get_featured_images($post->ID);
                                    if ($featured_images):
                                        ?>
                                        <?php foreach ($featured_images as $images): ?>
                                        <img src="<?php echo $images['full'] ?>" itemprop="logo"
                                             class="picto"
                                             style="width: 20%;" alt="<?php the_title() ?>'s logo'">
                                    <?php endforeach; ?>
                                    <?php
                                    endif;
                                endif;
                                ?>
                                <h3 itemprop="name">
                                    <?php the_title(); ?>
                                </h3>
                            </div>
                            <div>
                                <p itemprop="description">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </section>
                        <div class="image-project right-project image-not-display home-image div-image_project">
                            <?php the_post_thumbnail('post-cover', ['class' => 'gif_project']); ?>
                        </div>
                    </div>
                </a>
            <?php endwhile;endif;
            wp_reset_postdata(); ?>
        </section>
    </main>
<?php
require("footer.php");
?>