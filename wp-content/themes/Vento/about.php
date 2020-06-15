<?php
/*
Template Name: about
*/
require("header.php");
?>
    <main style="flex: 1 0 auto;">
        <section class="section-presentation-home margin-space_top_bottom margin-beetwen">
            <div itemscope itemtype="https://schema.org/Person">
                <h2 itemprop="jobTitle">
                    <?php the_field('titlepage'); ?>
                </h2>
                <div class="margin-text">
                    <?php the_field('descriptioninit'); ?>
                </div>
                <div class="container">
                    <?php
                    $link = get_field('ctaabout');
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
                <svg class="wrapper shrimp -anime" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 499.59 385.54">
                    <defs>
                        <linearGradient id="linear-gradient" x1="251.81" y1="396.9" x2="263.37" y2="280.23"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fff" stop-opacity="0"/>
                            <stop offset="0.76" stop-color="#fff" stop-opacity="0.76"/>
                            <stop offset="0.99" stop-color="#fff"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-2" x1="80.05" y1="326.65" x2="75.15" y2="400.58"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-opacity="0"/>
                            <stop offset="0.99"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-3" x1="266.02" y1="77.83" x2="256.03" y2="178.74"
                                        xlink:href="#linear-gradient-2"/>
                        <linearGradient id="linear-gradient-4" x1="271.81" y1="292.91" x2="286" y2="784.04"
                                        xlink:href="#linear-gradient-2"/>
                        <linearGradient id="linear-gradient-5" x1="222.52" y1="309.21" x2="319.23" y2="165.2"
                                        xlink:href="#linear-gradient-2"/>
                        <linearGradient id="linear-gradient-6" x1="314.71" y1="321.49" x2="291.06" y2="114.15"
                                        xlink:href="#linear-gradient-2"/>
                        <linearGradient id="linear-gradient-7" x1="244.67" y1="135.21" x2="297.73" y2="135.21"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#ecc4d7"/>
                            <stop offset="0.42" stop-color="#efd4d1"/>
                            <stop offset="1" stop-color="#f2eac9"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient-8" x1="267.6" y1="113.69" x2="330.56" y2="226.68"
                                        xlink:href="#linear-gradient-7"/>
                        <linearGradient id="linear-gradient-9" x1="239.55" y1="220.63" x2="356.22" y2="436.63"
                                        xlink:href="#linear-gradient-2"/>
                        <linearGradient id="linear-gradient-10" x1="5190.83" y1="224.15" x2="5448.73" y2="133.1"
                                        gradientTransform="matrix(-1, 0, 0, 1, 5552.02, 0)"
                                        xlink:href="#linear-gradient-2"/>
                        <linearGradient id="linear-gradient-11" x1="197.2" y1="253.48" x2="237.86" y2="253.48"
                                        xlink:href="#linear-gradient-7"/>
                        <linearGradient id="linear-gradient-12" x1="303.64" y1="253.94" x2="346.52" y2="253.94"
                                        xlink:href="#linear-gradient-7"/>
                        <linearGradient id="linear-gradient-13" x1="161.63" y1="336.72" x2="217.2" y2="336.72"
                                        xlink:href="#linear-gradient-7"/>
                        <linearGradient id="linear-gradient-14" x1="321.55" y1="333.08" x2="383.14" y2="333.08"
                                        xlink:href="#linear-gradient-7"/>
                        <linearGradient id="linear-gradient-15" x1="344.6" y1="334.31" x2="386.06" y2="334.31"
                                        xlink:href="#linear-gradient-2"/>
                        <linearGradient id="linear-gradient-16" x1="159.09" y1="336.61" x2="206.64" y2="336.61"
                                        xlink:href="#linear-gradient-2"/>
                        <linearGradient id="linear-gradient-17" x1="253.12" y1="98" x2="290.32" y2="98"
                                        xlink:href="#linear-gradient-7"/>
                        <linearGradient id="linear-gradient-18" x1="174.79" y1="166.39" x2="432.69" y2="75.34"
                                        xlink:href="#linear-gradient-2"/>
                        <linearGradient id="linear-gradient-19" x1="270.67" y1="154.17" x2="350.56" y2="78.49"
                                        xlink:href="#linear-gradient"/>
                        <linearGradient id="linear-gradient-20" x1="266.18" y1="149.63" x2="267.23" y2="125.45"
                                        xlink:href="#linear-gradient"/>
                        <linearGradient id="linear-gradient-21" x1="238.74" y1="237.04" x2="301.89" y2="114.73"
                                        xlink:href="#linear-gradient"/>
                    </defs>
                    <title>Focus Working</title>
                    <path d="M502,375.21a98,98,0,0,1-55,52.11c-16,6-33.3,7.56-50.35,8.86a1684.87,1684.87,0,0,1-196,3.43c-51.33-2.09-87.41-21-133.18-41.6a142.92,142.92,0,0,1-18.38-9.35c-25.74-16.43-38-47.75-40.38-78.45-.18-2.32-.29-4.63-.36-6.94C8.12,294,8.64,284.41,12,275.7c12.51-32.53,59.12-43.32,68.08-77,4.63-17.44-2.52-36.64,3.23-53.73,5.35-15.88,20.52-26.17,35.4-33.85C180.89,79,255.84,72.57,322.6,93.58c43.29,13.61,86.7,43.61,94.47,88.32,4.44,25.56-3.2,53.61,8.59,76.72,12.74,25,44.37,36.51,64.52,54.95,8.23,7.52,14.54,16.2,16.85,27.41C509.4,352.46,506.7,364.46,502,375.21Z"
                          transform="translate(-8.32 -55.46)" fill="#7100cf" opacity="0.18" style="isolation:isolate"/>
                    <path d="M502,375.21a98,98,0,0,1-55,52.11c-16,6-33.3,7.56-50.35,8.86a1684.87,1684.87,0,0,1-196,3.43c-51.33-2.09-87.41-21-133.18-41.6a142.92,142.92,0,0,1-18.38-9.35c-25.74-16.43-38-47.75-40.38-78.45a13.74,13.74,0,0,1,2.92-.66c14.9-2.13,30.09-4.24,45-1.85,9.26,1.51,18.17,4.74,27.4,6.43,26,4.82,52.05-2.79,78.13-1.12,22.05,1.41,43.77,6.14,66.11,6.81,23.52.72,47.07-.1,70.58-1.17,47-2.15,94.33-5.52,141.28-.34,6.51.71,13,1.59,19.56,1,5.26-.49,10.38-1.94,15.54-3.11a148.46,148.46,0,0,1,15-2.62c8.23,7.52,14.54,16.2,16.85,27.41C509.4,352.46,506.7,364.46,502,375.21Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient)"/>


                    <path class="grass"
                          d="M102.24,319.61c.79-1.11,1.61-2.46,1.2-3.76a3.66,3.66,0,0,0-2-2c-4.75-2.33-10.73.07-14.13,4.12s-4.85,9.34-6.2,14.46c.34-13.12.53-26.9-5.59-38.51a15.84,15.84,0,0,0-5.25-6.28c-2.35-1.46-5.55-1.8-7.83-.24s-3,4.34-3,7c0,4.39,2,8.5,3.26,12.69,2.22,7.21,2.55,14.84,3.25,22.36,1.25,13.5,2.68,27.19,6.41,40.23-.14-.48,5.43-4.24,6-5.38,2.22-4.29,2.27-10.42,4.39-15.07C87.65,338.42,95.44,329.23,102.24,319.61Z"
                          transform="translate(-8.32 -55.46)" fill="#7100cf"/>

                    <path class="grass"
                          d="M102.24,319.61c.79-1.11,1.61-2.46,1.2-3.76a3.66,3.66,0,0,0-2-2c-4.75-2.33-10.73.07-14.13,4.12s-4.85,9.34-6.2,14.46c.34-13.12.53-26.9-5.59-38.51a15.84,15.84,0,0,0-5.25-6.28c-2.35-1.46-5.55-1.8-7.83-.24s-3,4.34-3,7c0,4.39,2,8.5,3.26,12.69,2.22,7.21,2.55,14.84,3.25,22.36,1.25,13.5,2.68,27.19,6.41,40.23-.14-.48,5.43-4.24,6-5.38,2.22-4.29,2.27-10.42,4.39-15.07C87.65,338.42,95.44,329.23,102.24,319.61Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-2)"/>

                    <path d="M263.64,56.82c6.7-2.3,14.21-1.52,20.78,1.16a29.54,29.54,0,0,1,13.36,10.29A20.35,20.35,0,0,1,301,84.55c-1,3.73-3.19,7.36-2.5,11.16.6,3.34,3.37,5.86,6.26,7.64s6.11,3.09,8.64,5.36a15.09,15.09,0,0,1,3.9,16.28c-.82,2.11-2.15,4.22-1.78,6.46s2.46,3.91,4.61,4.75,4.49,1.12,6.64,2a13,13,0,0,1,4.07,21.56c-2.93,2.76-6.95,4-10.84,5a137.69,137.69,0,0,1-46.2,3.57c-11.93-1.11-23.88-3.79-35.79-2.41-7.43.86-14.61,3.29-22,4.26s-15.54.26-21.39-4.41a27.39,27.39,0,0,1-6.95-9.13c-2.92-5.75-4.75-12.29-3.68-18.64s5.53-12.38,11.78-14c2.78-.71,5.71-.52,8.58-.67a35.76,35.76,0,0,0,16.1-4.85c1.48-.87,3-2,3.4-3.65.66-2.74-1.93-5-3.31-7.48-2.76-4.92.29-12.07,5.75-13.49,3.2-.83,7.12-.1,9.37-2.52,2.82-3,1.39-7.78,4.43-10.94,2.72-2.82,6.52-3.88,8.7-7.39C253.06,66.09,255,59.8,263.64,56.82Z"
                          transform="translate(-8.32 -55.46)" fill="#3f3d56"/>
                    <path d="M263.64,56.82c6.7-2.3,14.21-1.52,20.78,1.16a29.54,29.54,0,0,1,13.36,10.29A20.35,20.35,0,0,1,301,84.55c-1,3.73-3.19,7.36-2.5,11.16.6,3.34,3.37,5.86,6.26,7.64s6.11,3.09,8.64,5.36a15.09,15.09,0,0,1,3.9,16.28c-.82,2.11-2.15,4.22-1.78,6.46s2.46,3.91,4.61,4.75,4.49,1.12,6.64,2a13,13,0,0,1,4.07,21.56c-2.93,2.76-6.95,4-10.84,5a137.69,137.69,0,0,1-46.2,3.57c-11.93-1.11-23.88-3.79-35.79-2.41-7.43.86-14.61,3.29-22,4.26s-15.54.26-21.39-4.41a27.39,27.39,0,0,1-6.95-9.13c-2.92-5.75-4.75-12.29-3.68-18.64s5.53-12.38,11.78-14c2.78-.71,5.71-.52,8.58-.67a35.76,35.76,0,0,0,16.1-4.85c1.48-.87,3-2,3.4-3.65.66-2.74-1.93-5-3.31-7.48-2.76-4.92.29-12.07,5.75-13.49,3.2-.83,7.12-.1,9.37-2.52,2.82-3,1.39-7.78,4.43-10.94,2.72-2.82,6.52-3.88,8.7-7.39C253.06,66.09,255,59.8,263.64,56.82Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-3)"/>
                    <path d="M64.81,373.44c17.38,23.63,48.36,33.2,77.45,36.93,296.66,38,338.05-34.59,339.4-36.16,4.88-5.65-67.16-69.3-279.19-54.93C187.64,320.28,55.39,360.63,64.81,373.44Z"
                          transform="translate(-8.32 -55.46)" fill="#7100cf"/>
                    <path d="M141.13,336.89a14.15,14.15,0,0,0-5.33,4.24c-1.27,1.91-1.55,4.67-.06,6.41,1.06,1.25,2.75,1.73,4.35,2.13a155.67,155.67,0,0,0,73.18.29c9.74-2.33,19.29-5.61,29.22-6.92,8-1.05,16.15-.8,24.24-.44,29.77,1.32,59.48,4,89.09,7.36,16.8,1.91,33.73,4,50.56,2.43,1.67-.16,3.48-.42,4.63-1.64,2.66-2.81-.57-7.39-4.08-9-5.19-2.41-12.25-3.42-14-8.88a7.26,7.26,0,0,0-1-2.6,4.89,4.89,0,0,0-3.33-1.3,1046.28,1046.28,0,0,0-204.67-3.64C168.05,326.59,155.15,329.29,141.13,336.89Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-4)"/>
                    <path d="M129.48,270.58s12.35-23.57,66.24-5.05,130.8,51.65,130.8,51.65l-6.17,23.58S193.48,325.6,175.51,315.49,126.11,304.27,129.48,270.58Z"
                          transform="translate(-8.32 -55.46)" fill="#7100cf"/>
                    <path d="M129.48,270.58s12.35-23.57,66.24-5.05,130.8,51.65,130.8,51.65l-6.17,23.58S193.48,325.6,175.51,315.49,126.11,304.27,129.48,270.58Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-5)"/>
                    <path d="M218.74,319.42S312.49,274,358,268.9s48.84,5.05,50.53,7.3,18.52,31.43-42.67,45.47-148.76,22.45-148.76,22.45S212.56,338.51,218.74,319.42Z"
                          transform="translate(-8.32 -55.46)" fill="#7100cf"/>
                    <path d="M218.74,319.42S312.49,274,358,268.9s48.84,5.05,50.53,7.3,18.52,31.43-42.67,45.47-148.76,22.45-148.76,22.45S212.56,338.51,218.74,319.42Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-6)"/>
                    <path d="M315.42,58.65l1.29-1.29" transform="translate(-8.32 -55.46)" fill="none" stroke="#3cb6d5"
                          stroke-miterlimit="10" stroke-width="3.43"/>
                    <path d="M257,133.28a61.61,61.61,0,0,1-12.34,5.82,28.75,28.75,0,0,0,9.1,9.26c5.39,3.26,11.89,4.15,18.19,4.21a33.45,33.45,0,0,0,10.55-1.27c4.59-1.48,8.52-4.49,12.19-7.62,1.64-1.42,3.42-3.31,3-5.43a16.56,16.56,0,0,1-16.09-9.78,30.72,30.72,0,0,1-1.34-4.31c-.16-.62-.77-4.54-1.2-5a4.63,4.63,0,0,0-4-1.23c-3.22.58-7.69-.52-10,2.11C262.36,123.05,260.61,131,257,133.28Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-7)"/>
                    <path d="M267.34,130.88a8.81,8.81,0,0,0,5.66,1.39c2-.23,3.56-5,4.52-6.77a12.27,12.27,0,0,0,.72-1.72,21.92,21.92,0,0,0,1.55-6.58c0,.63-4.17,1.29-4.71,1.37-1.74.26-3.51.35-5.26.53-2.43.25-7.29.36-6.21,3.87C264.15,124.76,265.77,129.9,267.34,130.88Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-8)"/>
                    <path d="M244.67,139.1s-13.58,1.52-17.23,9.1-57,76.63-57.26,81.12,25.26,30.32,25.26,30.32l11.79-25.27-3.65-7.85,22.74-31.44-.9,81.2,47.83,19.1L317,278.56l1.62-83.76s19.09,26.94,19.65,33.68-2.24,10.67-2.24,10.67l16.28,23.57s25.26-26.38,23.58-38.73S322,148.76,317,146s-19.32-7.71-19.32-7.71Z"
                          transform="translate(-8.32 -55.46)" fill="#7100cf"/>
                    <path d="M216.92,273.54a85.5,85.5,0,0,0-12.08,2.2c-1.36.35-2.91.91-3.34,2.25-.59,1.82,1.33,3.44,3.08,4.22,10.85,4.83,23.55.82,35.29,2.7,10.06,1.62,18.91,7.48,28.66,10.47a4,4,0,0,0,1.45.26,16.92,16.92,0,0,0,3.27-.26c4.66-1.61,8.58-3.52,13.7-4.1l19.26-2.17c8.05-.91,14.66-4.81,22.67-6,3.41-.51,7-.19,10.17-1.61,1.16-.53,2.34-1.88,1.6-2.91a2.27,2.27,0,0,0-1.2-.71c-3.47-1.13-7.19-1.05-10.83-1C291.45,277.54,253.89,269.54,216.92,273.54Z"
                          transform="translate(-8.32 -55.46)" fill="#7100cf"/>
                    <path d="M216.92,273.54a85.5,85.5,0,0,0-12.08,2.2c-1.36.35-2.91.91-3.34,2.25-.59,1.82,1.33,3.44,3.08,4.22,10.85,4.83,23.55.82,35.29,2.7,10.06,1.62,18.91,7.48,28.66,10.47a4,4,0,0,0,1.45.26,16.92,16.92,0,0,0,3.27-.26c4.66-1.61,8.58-3.52,13.7-4.1l19.26-2.17c8.05-.91,14.66-4.81,22.67-6,3.41-.51,7-.19,10.17-1.61,1.16-.53,2.34-1.88,1.6-2.91a2.27,2.27,0,0,0-1.2-.71c-3.47-1.13-7.19-1.05-10.83-1C291.45,277.54,253.89,269.54,216.92,273.54Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-9)"/>
                    <path d="M318.1,180.63l.94,13.75,17,26.39a16.46,16.46,0,0,1,1.3,15.36l-1.29,3,8.77,7.53,8.73-19.28Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-10)"/>
                    <path d="M227.6,248.2a19.85,19.85,0,0,1,4.87,2.5c3.8,2.91,5.05,8.06,5.36,12.84a5,5,0,0,1-.33,2.6,4,4,0,0,1-3.74,1.79c-3.52,0-6.66-2.38-10.17-2.72-1.8-.18-3.64.18-5.41-.18-4.16-.85-6.48-5.13-9-8.52a29.81,29.81,0,0,0-8.53-7.6c-6.45-3.81-3-11.12,4-9.7C212.39,240.8,220.23,245.21,227.6,248.2Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-11)"/>
                    <path d="M317.19,246.15a14.65,14.65,0,0,0-4.62,1.64c-2.06,1.31-3.33,3.54-5,5.28-1.42,1.43-3.24,2.68-3.75,4.63a5.43,5.43,0,0,0,.43,3.56,8.49,8.49,0,0,0,9.62,4.56c1.54-.42,2.93-1.28,4.46-1.71,4.75-1.35,10.32,1.44,14.55-1.09a16.57,16.57,0,0,0,3.53-3.37,32.93,32.93,0,0,1,7.86-6.39,5.22,5.22,0,0,0,1.9-1.5c1-1.58-.09-3.64-1.29-5.08-3.51-4.2-5.53-5.67-10.82-4.46C328.4,243.5,322.8,244.84,317.19,246.15Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-12)"/>
                    <path d="M206.28,324.61c-9.43.94-18.88-2.55-28.32-1.66a39.32,39.32,0,0,0-9.94,2.4,11.37,11.37,0,0,0-4.2,2.35c-2.1,2.07-2.51,5.36-2,8.26,1,5.66,5.16,10.49,10.3,13.06a19.19,19.19,0,0,0,10.3,2.05,33,33,0,0,0,5-1,49.94,49.94,0,0,0,10.7-3.54c2.16-1.1,4.15-2.5,6.32-3.56,3.08-1.5,6.47-2.27,9.5-3.86a2,2,0,0,0,.63-.43,2.29,2.29,0,0,0,.41-.79,37.72,37.72,0,0,0,2.17-13.23c0-.64.21-2-.45-2.35-.51-.26-2.71.74-3.3.9A44.36,44.36,0,0,1,206.28,324.61Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-13)"/>
                    <path d="M337.69,337.79c4.54,1.15,8.66,3.57,13.16,4.84A44,44,0,0,0,362.69,344c6,0,12.31-.46,17.51-3.51a6.6,6.6,0,0,0,2.15-1.81c1.34-1.91.75-4.55-.14-6.71-1.54-3.79-4.07-7.48-7.88-9-4.5-1.75-9.51,0-14.19,1.13-11.52,2.89-23.63,2.45-35.28,4.75a2.44,2.44,0,0,0-2.48,2.25c-.33,1.4-1.19,3.71-.66,5.15.61,1.68,2.27,1.08,3.73,1A37,37,0,0,1,337.69,337.79Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-14)"/>
                    <path d="M347.15,332.47a15.36,15.36,0,0,1-1.44,2.31,5.84,5.84,0,0,0-1,4.08,6.53,6.53,0,0,0,3.17,4c4.38,2.86,9.85,3.39,15.08,3.57a39.88,39.88,0,0,0,8.39-.37,45.28,45.28,0,0,0,5.84-1.56,15.22,15.22,0,0,0,5.37-2.51,10,10,0,0,0,2.74-4,9.25,9.25,0,0,0,.6-5.58,11.25,11.25,0,0,0-2.1-3.93,36.61,36.61,0,0,0-3.2-3.73,9.26,9.26,0,0,0-3-2.22,10.48,10.48,0,0,0-4.25-.45,153.54,153.54,0,0,0-24.49,2.57,3.72,3.72,0,0,0-1.75.68c-1.05.91,0,2.12.2,3.17A6.58,6.58,0,0,1,347.15,332.47Z"
                          transform="translate(-8.32 -55.46)" fill="#7100cf"/>
                    <path d="M202.2,335.76c.94.65,2,1.1,2.9,1.8a3.49,3.49,0,0,1,1.53,2.9c-.13,1.38-1.42,2.33-2.6,3a65.48,65.48,0,0,1-17.44,7.35,24.43,24.43,0,0,1-8.27,1,23.1,23.1,0,0,1-6.61-1.81c-3.69-1.52-7.27-3.57-9.75-6.69s-3.68-7.47-2.27-11.2c1.19-3.16,4-5.39,6.68-7.42a16.58,16.58,0,0,1,4.57-2.71,16.37,16.37,0,0,1,5-.6c4.43-.07,8.85-.06,13.28-.06,3,0,8.95-.05,9.64,3.86.32,1.79-.44,3.59,0,5.45A8.42,8.42,0,0,0,202.2,335.76Z"
                          transform="translate(-8.32 -55.46)" fill="#7100cf"/>
                    <path d="M347.15,332.47a15.36,15.36,0,0,1-1.44,2.31,5.84,5.84,0,0,0-1,4.08,6.53,6.53,0,0,0,3.17,4c4.38,2.86,9.85,3.39,15.08,3.57a39.88,39.88,0,0,0,8.39-.37,45.28,45.28,0,0,0,5.84-1.56,15.22,15.22,0,0,0,5.37-2.51,10,10,0,0,0,2.74-4,9.25,9.25,0,0,0,.6-5.58,11.25,11.25,0,0,0-2.1-3.93,36.61,36.61,0,0,0-3.2-3.73,9.26,9.26,0,0,0-3-2.22,10.48,10.48,0,0,0-4.25-.45,153.54,153.54,0,0,0-24.49,2.57,3.72,3.72,0,0,0-1.75.68c-1.05.91,0,2.12.2,3.17A6.58,6.58,0,0,1,347.15,332.47Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-15)"/>
                    <path d="M202.2,335.76c.94.65,2,1.1,2.9,1.8a3.49,3.49,0,0,1,1.53,2.9c-.13,1.38-1.42,2.33-2.6,3a65.48,65.48,0,0,1-17.44,7.35,24.43,24.43,0,0,1-8.27,1,23.1,23.1,0,0,1-6.61-1.81c-3.69-1.52-7.27-3.57-9.75-6.69s-3.68-7.47-2.27-11.2c1.19-3.16,4-5.39,6.68-7.42a16.58,16.58,0,0,1,4.57-2.71,16.37,16.37,0,0,1,5-.6c4.43-.07,8.85-.06,13.28-.06,3,0,8.95-.05,9.64,3.86.32,1.79-.44,3.59,0,5.45A8.42,8.42,0,0,0,202.2,335.76Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-16)"/>
                    <path d="M253.26,90.1s-.84,35.37,17.69,33.4S290.32,89,290.32,89s-7.58-19.09-23.58-16.28S253.26,90.1,253.26,90.1Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-17)"/>
                    <path d="M262.55,74.72c2.54,10.62,13.54,18.5,24.41,17.51,1.87-.18,4-.8,4.72-2.53a5.56,5.56,0,0,0,.25-2.47,28.55,28.55,0,0,0-5.13-15.11,19.41,19.41,0,0,0-13.47-8c-7.76-.73-15,4.09-20.27,9.87-3.29,3.63-13.24,20.17-2.39,20.69,3.47.16,6.83-2.36,8.5-5.22C261.81,84.89,259.53,79,262.55,74.72Z"
                          transform="translate(-8.32 -55.46)" fill="#3f3d56"/>
                    <polygon
                            points="218.94 125.87 218 139.62 195.27 171.05 198.91 178.91 196.27 183.75 183.47 172.64 218.94 125.87"
                            fill="url(#linear-gradient-18)"/>
                    <path d="M245.71,142.06c.75,2,3.26,2.56,5.35,3.07,4,1,7.78,3,11.81,4a54,54,0,0,0,12.83,1.22c5.44.09,10.89.18,16.32-.21,7.28-.51,14.57-1.85,21.83-1.12.49-.36-.08-1.09-.61-1.39-3.78-2.14-7.74-3.93-11.65-5.82-3.24-1.58-6-1.39-9.6-1.18-9.85.56-19.72,0-29.58.1A112.47,112.47,0,0,0,245.71,142.06Z"
                          transform="translate(-8.32 -55.46)" fill="url(#linear-gradient-19)"/>
                    <rect x="207.92" y="135.9" width="116.39" height="88.46" fill="#7100cf"/>
                    <rect x="208.44" y="135.9" width="116.39" height="6.19" fill="url(#linear-gradient-20)"/>
                    <rect x="208.44" y="142.21" width="116.39" height="81.59" fill="url(#linear-gradient-21)"/>
                </svg>
            </div>
        </section>
        <section class="section-aboutme" itemscope itemtype="https://schema.org/Person">
            <h2>
                <?php the_field('titlesectionpresentation'); ?>
            </h2>
            <div class="presentation-aboutme">
                <div class="about-me_image">
                    <?php
                    $image = get_field('imagesectionpresentation');
                    if (!empty($image)): ?>
                        <img itemprop="image"
                             src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                </div>
                <div class="presentation-aboutme_title" itemscope itemtype="http://schema.org/PostalAddress">
                    <div>
                        <h3 itemprop="name">
                            <?php the_field('nametitle'); ?>
                        </h3>
                        <?php the_field('textesectionpresentation'); ?>
                        <?php
                        $link = get_field('ctacontact');
                        if ($link): ?>
                            <a itemprop="url" class="link-purple" href="<?= esc_url($link); ?>">Interested&nbsp;? Drop a
                                line</a>
                        <?php endif; ?>
                    </div>
                    <div class="container_information_about_me container_information_about_me_first">
                        <div>
                            <?php
                            $image = get_field('imagebirthday');
                            if (!empty($image)): ?>
                                <img itemprop="logo"
                                     class="picto"
                                     style="width: 30%;" src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                        </div>
                        <?php the_field('textbirthday'); ?>
                    </div>
                    <div class="container_information_about_me">
                        <div>
                            <?php
                            $image = get_field('imagelocation');
                            if (!empty($image)): ?>
                                <img itemprop="logo"
                                     class="picto"
                                     style="width: 30%;" src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                        </div>
                        <span itemprop="addressRegion">
                            <?php the_field('textlocation'); ?>
                        </span>
                    </div>
                    <div class="container_information_about_me">
                        <div>
                            <?php
                            $image = get_field('imagephone');
                            if (!empty($image)): ?>
                                <img itemprop="logo"
                                     class="picto"
                                     style="width: 30%;" src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                        </div>
                        <span class="long-informations_aboutMe">
                            <?php
                            $file = get_field('linkphone');
                            if ($file): ?>
                                <a itemprop="telephone" class="link-purple"
                                   href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="container_information_about_me">
                        <div>
                            <?php
                            $image = get_field('imageemail');
                            if (!empty($image)): ?>
                                <img itemprop="logo"
                                     class="picto"
                                     style="width: 30%;" src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                        </div>
                        <span class="long-informations_aboutMe">
                            <?php
                            $file = get_field('linkmail');
                            if ($file): ?>
                                <a <a itemprop="email" class="link-purple"
                                      href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="container container-aboutme">
                        <?php
                        $file = get_field('linktocv');
                        if ($file): ?>
                            <a target="_blank" class="btn-curriculum btn-push btn-chat purple"
                               href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <section class="section-picto margin-beetwen section_card_aboutMe">
                <h2>
                    <?php the_field('titlesectiondo'); ?>
                </h2>
                <div itemscope itemtype="https://schema.org/Thing"
                     class="section-div-picto margin-space_top_bottom section-card_div_aboutMe">
                    <section class="section-picto_text module first-picto-home card_uneven-aboutMe">
                        <div class="section-home-followingpoints">
                            <?php
                            $image = get_field('imagestepone');
                            if (!empty($image)): ?>
                                <img itemprop="image"
                                     class="picto picto1-home-lightMode"
                                     style="width: 30%;" src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                            <h3 itemprop="name">
                                <?php the_field('titlestepone'); ?>
                            </h3>
                        </div>
                        <span itemprop="description">
                            <?php the_field('textstepone'); ?>
                        </span>
                    </section>
                    <section class="section-picto_text module">
                        <div class="section-home-followingpoints">
                            <?php
                            $image = get_field('imagesteptwo');
                            if (!empty($image)): ?>
                                <img itemprop="image"
                                     class="picto picto1-home-lightMode"
                                     style="width: 30%;" src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                            <h3 itemprop="name">
                                <?php the_field('titlesteptwo'); ?>
                            </h3>
                        </div>
                        <span itemprop="description">
                                <?php the_field('textsteptwo'); ?>
                        </span>
                    </section>
                    <section class="section-picto_text module card_uneven-aboutMe last_card_about_me">
                        <div class="section-home-followingpoints">
                            <?php
                            $image = get_field('imagestepthree');
                            if (!empty($image)): ?>
                                <img itemprop="image"
                                     class="picto picto1-home-lightMode"
                                     style="width: 30%;" src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                            <?php endif; ?>
                            <h3 itemprop="name">
                                <?php the_field('titlestepthree'); ?>
                            </h3>
                        </div>
                        <span itemprop="description">
                            <?php the_field('textstepthree'); ?>
                        </span>
                    </section>
                </div>
            </section>
        </section>
    </main>
<?php
require("second-footer.php");
?>