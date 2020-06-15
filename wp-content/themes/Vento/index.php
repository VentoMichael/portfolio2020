<?php
/*
    Template Name: index
*/
require("header.php");
$loop = new WP_Query([
    'post_type' => 'projects',
    'posts_per_page' => -1
]);
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
                $link = get_field('ctaabout');
                if ($link): ?>
                    <a itemprop="url" class="btn-push btn-chat purple" href="<?= esc_url($link); ?>">See my
                        informations</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="first-svg first-svg-other-page">
            <svg class="wrapper shrimp -anime" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 594.4 489.2">
                <defs>
                    <style>
                        .a, .c {
                            fill: #8e04f2;
                        }

                        .a {
                            opacity: 0.18;
                        }

                        .a, .h, .i, .m, .x {
                            isolation: isolate;
                        }

                        .b {
                            fill: #3f3d56;
                        }

                        .d {
                            fill: #25233a;
                        }

                        .e {
                            fill: url(#a);
                        }

                        .f {
                            fill: url(#b);
                        }

                        .g {
                            fill: url(#c);
                        }

                        .h, .i {
                            opacity: 0.31;
                        }

                        .h {
                            fill: url(#d);
                        }

                        .i {
                            fill: url(#e);
                        }

                        .j {
                            fill: url(#f);
                        }

                        .k {
                            fill: url(#g);
                        }

                        .l {
                            fill: url(#h);
                        }

                        .m {
                            opacity: 0.19;
                            fill: url(#i);
                        }

                        .n {
                            fill: url(#j);
                        }

                        .o {
                            fill: url(#k);
                        }

                        .p {
                            fill: url(#l);
                        }

                        .q {
                            fill: url(#m);
                        }

                        .r {
                            fill: url(#n);
                        }

                        .s {
                            fill: url(#o);
                        }

                        .t {
                            fill: url(#p);
                        }

                        .u {
                            fill: url(#q);
                        }

                        .v {
                            fill: url(#r);
                        }

                        .w {
                            fill: url(#s);
                        }

                        .x {
                            fill: #fff;
                            opacity: 0.25;
                        }

                        .y {
                            fill: url(#t);
                        }

                        .z {
                            fill: url(#u);
                        }

                        .aa {
                            fill: url(#v);
                        }

                        .ab {
                            fill: url(#w);
                        }

                        .ac {
                            fill: url(#x);
                        }
                    </style>
                    <linearGradient id="a" x1="253.55" y1="72.69" x2="267.25" y2="72.69"
                                    gradientTransform="matrix(1, 0, 0, -1, 0, 499.89)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#183866"/>
                        <stop offset="1" stop-color="#1a7fc1"/>
                    </linearGradient>
                    <linearGradient id="b" x1="286.7" y1="70.92" x2="292.99" y2="70.92"
                                    gradientTransform="matrix(1, 0, 0, -1, 0, 499.89)" gradientUnits="userSpaceOnUse">
                        <stop offset="0"/>
                        <stop offset="0.99" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="c" x1="300.74" y1="81.37" x2="338.16" y2="98.08" xlink:href="#b"/>
                    <linearGradient id="d" x1="300.14" y1="130" x2="254.66" y2="114.75" xlink:href="#b"/>
                    <linearGradient id="e" x1="325.35" y1="80.7" x2="208.78" y2="41.6" xlink:href="#b"/>
                    <linearGradient id="f" x1="329.34" y1="68.74" x2="325.3" y2="67.38" xlink:href="#b"/>
                    <linearGradient id="g" x1="284.72" y1="80.4" x2="249.3" y2="90.02" xlink:href="#b"/>
                    <linearGradient id="h" x1="572.92" y1="125.63" x2="-60.95" y2="95.15" xlink:href="#b"/>
                    <linearGradient id="i" x1="218.82" y1="224.24" x2="541.78" y2="224.24" xlink:href="#a"/>
                    <linearGradient id="j" x1="376.57" y1="565.23" x2="410.65" y2="701.85"
                                    gradientTransform="translate(0 -340)"
                                    xlink:href="#b"/>
                    <linearGradient id="k" x1="320.64" y1="586.91" x2="435.16" y2="625.29"
                                    gradientTransform="translate(0 -340)"
                                    xlink:href="#b"/>
                    <linearGradient id="l" x1="320.31" y1="615.56" x2="317.31" y2="637.33"
                                    gradientTransform="translate(0 -340)"
                                    xlink:href="#b"/>
                    <linearGradient id="m" x1="112.25" y1="23.06" x2="56.96" y2="20.95" xlink:href="#b"/>
                    <linearGradient id="n" x1="120.65" y1="48.46" x2="74.84" y2="46.89" xlink:href="#b"/>
                    <linearGradient id="o" x1="76.81" y1="87.44" x2="53.64" y2="-24.18"
                                    gradientTransform="matrix(1, 0, 0, -1, -2.93, 494)" xlink:href="#b"/>
                    <linearGradient id="p" x1="66.4" y1="61.45" x2="19.8" y2="273.99" xlink:href="#b"/>
                    <linearGradient id="q" x1="68.95" y1="57.1" x2="63.5" y2="81.96" xlink:href="#b"/>
                    <linearGradient id="r" x1="66.58" y1="439.65" x2="126.95" y2="232.99"
                                    gradientTransform="matrix(1, 0, 0, 1, 0, 0)" xlink:href="#b"/>
                    <linearGradient id="s" x1="277.79" y1="396.65" x2="327.44" y2="396.65"
                                    gradientTransform="matrix(1, 0, 0, -1, 0, 499.89)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#ecc4d7"/>
                        <stop offset="0.42" stop-color="#efd4d1"/>
                        <stop offset="1" stop-color="#f2eac9"/>
                    </linearGradient>
                    <linearGradient id="t" x1="287.89" y1="224.3" x2="334.1" y2="224.3" xlink:href="#s"/>
                    <linearGradient id="u" x1="355.54" y1="239.14" x2="392.35" y2="239.14" xlink:href="#s"/>
                    <linearGradient id="v" x1="600.62" y1="277.44" x2="396.36" y2="412.66" xlink:href="#b"/>
                    <linearGradient id="w" x1="565.64" y1="204.58" x2="423.65" y2="336.98" xlink:href="#b"/>
                    <linearGradient id="x" x1="327.09" y1="66.96" x2="325.72" y2="66.5" xlink:href="#b"/>
                </defs>
                <title>working_with_computer</title>
                <path class="a"
                      d="M442.8,90.9c-18.1-20.6-32.2-45.3-53.9-62.1C354.9,2.3,305.8-.3,266,16.3s-70.8,50.2-91.3,88.2c-10.8,20-19.2,41.8-35,58.1-13.3,13.8-30.8,22.6-47.4,32.2-26.8,15.4-52.5,34.1-69.9,59.6s-25.1,59.2-14,88c7.5,19.4,22.5,34.9,37.9,48.9,18.1,16.5,37.6,31.9,60.1,41.7,28.2,12.2,59.4,14.8,90.1,16.1a1150.9,1150.9,0,0,0,162.9-4.9c44.3-4.5,90-12.1,127-36.8,51.9-34.6,78.7-97.9,84.7-159.9,2.5-24.8,1.8-50.6-7.8-73.7-22.8-54.9-84.6-42.1-120.5-82.9Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="b" d="M222.9,201.5s-20.6-3.6-26.3,10.6,0,63.4,0,63.4l76.7,54.3Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c"
                      d="M319.5,420.6l-29.7,8.8a8.1,8.1,0,1,1-4.6-15.6l29.7-8.8a8.1,8.1,0,0,1,10.1,5.5A8.2,8.2,0,0,1,319.5,420.6Z"
                      transform="translate(-2.9 -5.9)"/>
                <circle class="d" cx="314.9" cy="433.6" r="13.7"/>
                <circle class="b" cx="312.4" cy="434.8" r="6.9"/>
                <circle class="d" cx="260" cy="420" r="13.7"/>
                <path class="e" d="M267.3,427.2a6.9,6.9,0,1,1-6.9-6.9A6.9,6.9,0,0,1,267.3,427.2Z"
                      transform="translate(-2.9 -5.9)"/>
                <circle class="d" cx="256" cy="438.8" r="13.7"/>
                <path class="b" d="M269.7,445.1a6.9,6.9,0,1,1-6.9-6.9A6.9,6.9,0,0,1,269.7,445.1Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c" d="M320.6,434.1l-62.7-12.7a8.2,8.2,0,0,1,3.2-16L323.8,418a8.2,8.2,0,0,1-3.2,16.1Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c" d="M281.9,335.6H299v72.1a8.6,8.6,0,0,1-17.2,0Z" transform="translate(-2.9 -5.9)"/>
                <path class="c"
                      d="M288.1,429.4l-29.7,8.8a8.1,8.1,0,1,1-4.6-15.6l29.7-8.8a8.1,8.1,0,0,1,10.1,5.5A8.3,8.3,0,0,1,288.1,429.4Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="f" d="M293,428.5l-3.3,1a7.7,7.7,0,0,1-3,.3l1.4-.4a7.9,7.9,0,0,0,2.6-1.3Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="g"
                      d="M325.3,412.8a8.8,8.8,0,0,1-1.8,5.2l-26-5.3a8.3,8.3,0,0,0,1.4-3l16-4.7a8.1,8.1,0,0,1,10.1,5.6,8.3,8.3,0,0,1,.3,2.2Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="h"
                      d="M282.1,409.6a12.3,12.3,0,0,1-.2-1.9V335.6h5.9v77.7a2,2,0,0,0,.1,1.1,7.1,7.1,0,0,0-2.8-.6h-1.7c.3-.1-.9-2.6-1.3-4.1Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="i"
                      d="M326.1,433.2a7.6,7.6,0,0,1-3.9,1l-1.6-.2L293,428.4l-2.3-.5a7.1,7.1,0,0,1-2.6,1.3l-1.4.4L258.4,438a8.1,8.1,0,0,1-10.1-5.5,7,7,0,0,0,8.9.5c3.5-2.4,17.2-6,25-7.9a9.7,9.7,0,0,0,7.2-7.6c0-.2.1-.4.1-.7,1.3,1.4,3.7,3,8,4.3,10.6,3.3,27.9,5.4,27.9,5.4s3,3.4.7,6.7Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="j" d="M329,430.5a8.3,8.3,0,0,1-2,2.2Z" transform="translate(-2.9 -5.9)"/>
                <path class="k" d="M282.1,409.6a7.5,7.5,0,0,0,2.1,3.9l-.8.2-25.8,7.6a8.2,8.2,0,0,1,1.8-16.1l1.6.2Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="b"
                      d="M321.9,62.4s-.3-25.4-20.7-23.2-18.8-6.2-27.5-5.3S254.9,43.4,257.8,54s-7.7,13-14.6,21,1.6,14.6,13.3,22.5-.7,5.8,6.2,18.3,30.4-3.5,30.4-3.5Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c"
                      d="M155.7,487.7l14.5.5V372.8s.7-29.8,28.9-32.8,283.6-40,283.6-40,10.1-1.1,16,18.3,11.5,95.8,11.5,95.8l78.4,10.6s2.1-134.9-26.2-142.3-398.6,30.5-398.6,30.5S136.2,456,155.7,487.7Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="l"
                      d="M155.7,487.7l14.5.5V372.8s.7-29.8,28.9-32.8,283.6-40,283.6-40,10.1-1.1,16,18.3,11.5,95.8,11.5,95.8l78.4,10.6s2.1-134.9-26.2-142.3-398.6,30.5-398.6,30.5S136.2,456,155.7,487.7Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c"
                      d="M79.4,327s7.1-39.2,56.9-49.5L488,237.2s34.5-1.4,50.3,8.1,38.3,17.5,47.6,60.7,11.4,117.2,11.4,117.2l-8.7,1.4s-12.8-133.8-26.3-142.3-379,43.5-379,43.5-25.4,5-27.6,42.6,0,119.2,0,119.2L79.4,456.8Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="m"
                      d="M441.2,252.3c-18.2-2.4-36.5-4.1-54.9-3.4-13.8.5-27.5,2.5-41.1,4.4L224.7,270.2c-2,.3-4.4.8-5.4,2.6-2,3.4,2.6,6.8,6.4,8.1,40.1,14.1,82.9,28.3,124.1,18.3,18.9-4.6,36.4-14.1,55.5-17.4s38.8-.3,57.9-3.4,35-11.2,53.2-11.3c5.6,0,11.3.7,16.6-1s10-7.2,8.5-12.5c-17.1-.6-36.2-3.8-53-.3s-30.7-1-47.3-1Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c" d="M332.2,272.8l.7,2.7s20.8,12.9,20.7,13.4S440,268.2,440,268.2l2-6.1Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="n" d="M332.2,272.8l.7,2.7s20.8,12.9,20.7,13.4S440,268.2,440,268.2l2-6.1Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c" d="M334.2,272.8l76-17.1,31.8,6.5-86.5,21.7Z" transform="translate(-2.9 -5.9)"/>
                <path class="o" d="M334.2,272.8l76-17.1,31.8,6.5-86.5,21.7Z" transform="translate(-2.9 -5.9)"/>
                <path class="c" d="M310.2,286.4l18.1.6s4.6.3,5.8-3.2-7.4-10.8-8.3-11-24.7,6.2-21.3,12.5Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="p" d="M310.2,286.4l18.1.6s4.6.3,5.8-3.2-7.4-10.8-8.3-11-24.7,6.2-21.3,12.5Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c"
                      d="M101.4,464.4,92.6,491a70.6,70.6,0,0,1-47.2,0l-6.3-28C39.1,463.1,70.9,473.6,101.4,464.4Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="q"
                      d="M101.4,464.4,92.6,491a70.6,70.6,0,0,1-47.2,0l-6.3-28C39.1,463.1,70.9,473.6,101.4,464.4Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c" d="M111.3,439.5l-2.8,21.1-7.1,3.7C71,473.5,39.1,463,39.1,463l-5.5-4.1L31,439.4h80.3Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="r" d="M111.3,439.5l-2.8,21.1-7.1,3.7C71,473.5,39.1,463,39.1,463l-5.5-4.1L31,439.4h80.3Z"
                      transform="translate(-2.9 -5.9)"/>
                <ellipse class="c" cx="68.3" cy="433.6" rx="40.1" ry="7.2"/>
                <ellipse class="s" cx="68.3" cy="433.6" rx="40.1" ry="7.2"/>

                <path class="c handL"
                      d="M52.1,278.4c-3.9-1.9-8.2-3.3-11.6-6-6.9-5.5-8.6-15.1-10.8-23.6s-6.3-18-14.8-20.4c-3.2-.9-6.9-.5-9.3,1.7s-3.1,6.3-2.4,9.7,2.4,6.5,3.7,9.8a44.7,44.7,0,0,1,2.7,24c-1.1,6.6-3.6,13.4-2,19.9,2.8,11,16.7,17.5,17.1,28.9.3,7.7-6.1,14.8-4.6,22.3,1.1,5.6,6.2,9.9,6.5,15.6s-5.8,11.9-5.5,18.3,6.7,10.7,10.9,15.8a26.8,26.8,0,0,1,6,15c.2,3.4-.2,7,.9,10.2s2.5,4.4,3.7,6.5,2.5,4.8,4.1,7a16.9,16.9,0,0,0,18.2,5.7c1.3-8.6.2-17.3.5-25.9.7-16.7,7-33.6,3-49.9-1.5-6-4.4-11.6-4.9-17.7s1-10.9,2-16.3c2.1-11.1,2.1-22.6,1.2-33.9-.5-8.9-6.8-13-14.6-16.7Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c handL"
                      d="M77.2,322.2c-.1,7.5,1.6,15.2-.8,22.3-1.8,5.4-5.8,9.8-7.8,15.1-4.7,12.2,1.6,25.9.3,38.9-.5,5.4-2.4,10.5-3.5,15.8a62.9,62.9,0,0,0-1,20.3,5,5,0,0,0,4.1,5.3,66.7,66.7,0,0,0,12.4,3.3,33.4,33.4,0,0,1,4.2-22.9c6.5-10.6,19.1-17.8,21.4-30,1.6-8.3-2.1-16.7-1.8-25.1a27.3,27.3,0,0,1,5.5-15.5c3.1-4,7.2-7,10-11.2,6.8-9.9,4.7-23.2,2.7-35.1s-3.2-25.6,4.8-34.6c2.5-2.8,5.8-5,8.1-8,5.1-6.8,3.8-17.2-2.1-23.3s-15.5-7.7-23.6-5.1a17.2,17.2,0,0,0-8.6,5.9c-4.1,5.8-2.5,13.7-.7,20.6s2.7,12.9.7,19c-1.5,4.5-5.5,6.9-8.8,10.1a47.9,47.9,0,0,0-15.5,34.2Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="t handL"
                      d="M68.7,388.4c-1.2,8.1-2.8,16.3-3.2,24.4v.8c0,.2-.1.4-.1.6a63,63,0,0,0-1.1,20.3,7.2,7.2,0,0,0,.8,3.2c0,.3-.1.7-.1,1A17,17,0,0,1,46.8,433a67.7,67.7,0,0,1-4.1-7c-1.3-2.2-2.9-4.2-3.7-6.5s-.7-6.8-.9-10.2a26.5,26.5,0,0,0-6-15c-4.2-5-10.6-9.2-10.9-15.8s5.8-11.9,5.5-18.3-5.4-10-6.5-15.6c-1.4-7.5,4.9-14.6,4.6-22.3-.4-11.4-14.3-17.8-17.1-28.9-1.6-6.5.9-13.2,2-19.9A44.3,44.3,0,0,0,7,249.6c-1.3-3.3-3-6.4-3.7-9.8s-.2-7.4,2.4-9.7,6.1-2.6,9.3-1.7c8.5,2.5,12.6,11.9,14.8,20.4s3.9,18.1,10.8,23.6c3.4,2.7,7.6,4.1,11.6,6,7.9,3.7,14.1,7.8,14.8,16.7.8,11.3.9,22.8-1.2,33.9-1,5.4-2.5,10.8-2,16.3s2.8,10.6,4.4,15.9c.2.6.3,1.2.5,1.8,1.9,8.3,1.2,16.8,0,25.4Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="u handL"
                      d="M65.2,437.7a8.5,8.5,0,0,1-.9-3.1,63,63,0,0,1,1.1-20.3c0-.2.1-.4.1-.6C65.3,421.7,66.2,429.8,65.2,437.7Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="v handL"
                      d="M135.7,260.9c-2.3,3-5.6,5.2-8.1,8-8,9-6.8,22.7-4.8,34.6s4.2,25.2-2.7,35.1c-2.8,4.1-7,7.2-10,11.2a27.3,27.3,0,0,0-5.5,15.5c-.3,8.4,3.4,16.8,1.8,25.1-2.3,12.2-15,19.4-21.4,30a33.4,33.4,0,0,0-4.2,22.9A66.7,66.7,0,0,1,68.4,440a6.6,6.6,0,0,1-2.9-1.7l-.3-.4a8.5,8.5,0,0,1-.9-3.1,63,63,0,0,1,1.1-20.3c0-.2.1-.4.1-.6,1.2-5.1,2.9-10,3.4-15.2a48.7,48.7,0,0,0-.2-10.1c1.2-8.6,1.9-17.1-.2-25.5a12.1,12.1,0,0,0-.5-1.8c.2-.5.3-1,.5-1.6,2.1-5.3,6-9.7,7.8-15.1,2.4-7.1.7-14.8.8-22.3a47.9,47.9,0,0,1,15.3-34.2c3.3-3.1,7.2-5.6,8.8-10.1s.8-13-.7-19-3.4-14.8.7-20.6a16.7,16.7,0,0,1,8.6-5.9c8.1-2.7,17.7-1,23.6,5.1s7.4,16.6,2.3,23.3Z"
                      transform="translate(-2.9 -5.9)"/>

                <path class="c"
                      d="M280.6,132.6s-34.4,5.3-50.3,42.8-7.6,84-7.4,88.1,48.8,21.8,62.6,21.8,16.7-13.7,16.7-13.7l-24.5-10.3,74.4-8.5h13.4l-7.4,12.3s14.5,1.5,24.2,1.8,16.3-18.6,17.4-28.1-42.9-92.3-49.4-97.2-24.3-16.9-69.7-9Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="w"
                      d="M321.9,62.4s6.1,3.5,5.5,14.7-4,28.2-7.5,32.6-15.6,6.1-15.6,6.1,6.6,15.9,11.5,20.1-4.9,19.3-14.5,14.3-20.7-17.5-20.7-17.5,8-15,5.3-23-13-35.7-5.3-43.3,24.5-18.5,41.3-4Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="x" d="M266.7,186.6l-5.4,66.2,16.5,8.5,13.4-2.3-16.7-20.2Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="x" d="M353.6,183.3s21.6,51.3,12,69.5l-7.4-1.4Z" transform="translate(-2.9 -5.9)"/>
                <path class="y"
                      d="M293.4,269.2s-8.2,7.4-4.6,13.1,8.1,5.6,11.7,3,10.8-8.6,19.4-5.8,10.6,4.6,10.6,4.6,4.5-3,3.3-5.9-10.1-12.6-12.7-13.8-13.4,2.6-13.4,2.6-7.8-2.4-14.3,2.2Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="z"
                      d="M368,255.4s-7.8.9-9.8,5.9-2.7,5.6-2.7,5.6,4.4.8,6.3-1.5,3.8-1.3,3.8-1.3l-.5,3s12,1.8,17.5-.1,7.8-4.1,7.8-4.1l2.1-5s-5.1-3.6-9-4.1-15.5,1.6-15.5,1.6Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="d"
                      d="M407.8,310.7s26.7,20.3,24.3,47.8-5.9,68.3-5.9,68.3-10.8,4.5-17.9,0-11.4-66.5-15-72.5-24.8-32.6-47.5-34.9Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="b"
                      d="M273.2,329.9S286.1,342.2,309,346s33.6,7.1,40.6,26.8,13.7,62.2,15.9,66.9,11.6,2.3,11.6,2.3,5.3-6.1,5.3-39.8c0-47,3.3-56.7-8.5-68.5s-22.5-15-22.5-15Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="d" d="M365.6,439.7l2.2,17.2h4.1s26.3,1.4,27.2.8-1.3-13.6-11.2-13.3-10.6-2.5-10.6-2.5Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="d" d="M411.6,428.2l4.3,16.9,46.5-6.4s1.6-11.1-13.1-10c-3.9.3-6.8,3-11.4,3s-9.1-1.9-11.5-5Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c"
                      d="M573.6,215l-175.9,9.4a7.7,7.7,0,0,1-8.1-7.3V92.1a9.3,9.3,0,0,1,9.1-9.3l175.2-3.6a8.4,8.4,0,0,1,8.6,8.3V205.6a9.4,9.4,0,0,1-8.9,9.4Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c"
                      d="M581.7,215l-175.9,9.4a7.7,7.7,0,0,1-8.1-7.3V92.1a9.3,9.3,0,0,1,9.1-9.3L582,79.2a8.4,8.4,0,0,1,8.6,8.3V205.6a9.4,9.4,0,0,1-8.9,9.4Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="aa"
                      d="M581.7,215l-175.9,9.4a7.7,7.7,0,0,1-8.1-7.3V92.1a9.3,9.3,0,0,1,9.1-9.3L582,79.2a8.4,8.4,0,0,1,8.6,8.3V205.6a9.4,9.4,0,0,1-8.9,9.4Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c"
                      d="M530.5,262.1l-44.7,4.8s-13.6-2.7-12.9-4.8,15-4,15-4V177c-.1-.2-2-2.6-7.1-4.1l-3-.7a7.3,7.3,0,0,1-2.5-.8c-3.1-1.6.3-4.3,5.1-4.4h36.5s13,3.7,13.6,22S530.5,262.1,530.5,262.1Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="c"
                      d="M494.2,262.3l-8.3,4.6s-13.6-2.7-12.9-4.8,15-4,15-4V177a20.1,20.1,0,0,0-7.1-4.1,51.2,51.2,0,0,0-5.6-1.5c-3.1-1.6.3-4.3,5.1-4.4s12,5,12.5,7.5S494.2,262.3,494.2,262.3Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="ab"
                      d="M494.2,262.3l-8.3,4.6s-13.6-2.7-12.9-4.8,15-4,15-4V177a20.1,20.1,0,0,0-7.1-4.1,51.2,51.2,0,0,0-5.6-1.5c-3.1-1.6.3-4.3,5.1-4.4s12,5,12.5,7.5S494.2,262.3,494.2,262.3Z"
                      transform="translate(-2.9 -5.9)"/>
                <path class="ac" d="M327,432.6c-1,1.1-1.5,1.5-.9.6Z" transform="translate(-2.9 -5.9)"/>
            </svg>
        </div>
    </section>
    <section
            class="section-picto container_index_project margin-beetwen"
            itemscope
            itemtype="https://schema.org/Project">
        <div class="section-picto margin-beetwen">
            <h2>
                <?php the_field('titlesectionproject'); ?>
            </h2>
        </div>
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
    <section>
        <div class="section-h2-projects">
            <h2>
                <?php the_field('titleservices'); ?>
            </h2>
        </div>
        <div itemscope
             itemtype="https://schema.org/Thing"
             class="section-div-picto margin-space_top_bottom margin-beetwen">
            <section class="section-picto_text module first-picto-home">
                <div class="section-home-followingpoints">
                    <?php
                    $image = get_field('imgoneservice');
                    if (!empty($image)): ?>
                        <img itemprop="image"
                             class="picto picto1-home-lightMode" src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                    <h3 itemprop="name">
                        <?php the_field('titleoneservice'); ?>
                    </h3>
                </div>
                <p itemprop="description">
                    <?php the_field('texteOneService'); ?>
                </p>
            </section>
            <section class="section-picto_text module">
                <div class="section-home-followingpoints">
                    <?php
                    $image = get_field('imgtwoservice');
                    if (!empty($image)): ?>
                        <img itemprop="image"
                             class="picto picto1-home-lightMode" src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                    <h3 itemprop="name">
                        <?php the_field('titletwoservice'); ?>
                    </h3>
                </div>
                <p itemprop="description">
                    <?php the_field('textetwoservice'); ?>
                </p>
            </section>
            <section class="section-picto_text module">
                <div class="section-home-followingpoints">
                    <?php
                    $image = get_field('imgthreeservice');
                    if (!empty($image)): ?>
                        <img itemprop="image"
                             class="picto picto1-home-lightMode" src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                    <h3 itemprop="name">
                        <?php the_field('titlethreeservice'); ?>
                    </h3>
                </div>
                <p itemprop="description">
                    <?php the_field('textethreeservice'); ?>
                </p>
            </section>
            <section class="section-picto_text module">
                <div class="section-home-followingpoints">
                    <?php
                    $image = get_field('imgfourthservice');
                    if (!empty($image)): ?>
                        <img itemprop="image"
                             class="picto picto1-home-lightMode" src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                    <h3 itemprop="name">
                        <?php the_field('titlefourthservice'); ?>
                    </h3>
                </div>
                <p itemprop="description">
                    <?php the_field('textefourthservice'); ?>
                </p>
            </section>

            <section class="section-picto_text module">
                <div class="section-home-followingpoints">
                    <?php
                    $image = get_field('imgfivethservice');
                    if (!empty($image)): ?>
                        <img itemprop="image"
                             class="picto picto1-home-lightMode" src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                    <h3 itemprop="name">
                        <?php the_field('titlefivethservice'); ?>
                    </h3>
                </div>
                <p itemprop="description">
                    <?php the_field('textefivethservice'); ?>
                </p>
            </section>
            <section class="section-picto_text module lastModule">
                <div class="section-home-followingpoints">
                    <?php
                    $image = get_field('imgsixthservice');
                    if (!empty($image)): ?>
                        <img itemprop="image"
                             class="picto picto1-home-lightMode" src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
                    <h3 itemprop="name">
                        <?php the_field('titlesixthservice'); ?>
                    </h3>
                </div>
                <p itemprop="description">
                    <?php the_field('textesixthservice'); ?>
                </p>
            </section>
        </div>
    </section>
</main>
<?php
require("footer.php");
?>