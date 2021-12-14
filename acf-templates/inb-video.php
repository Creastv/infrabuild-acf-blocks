<?php

$webm = get_field('video_mp4');
$mp = get_field('video_web');
$poster = get_field("poster");

$uid = $block['id'];

$className = 'inb-video video-simple';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>

<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="full">
        <div class="wraper">
            <video loading="lazy" id="video" poster="<?php echo $poster; ?>">
            <?php if ($mp) { ?>
            <source src="<?php echo $mp; ?>" type="video/mp4">
            <?php } ?>
            <?php if ($webm) { ?>
                <source src="<?php echo $webm; ?>" type="video/webm">
            <?php } ?>
                Your browser does not support HTML5 video.
            </video>
            <div class="bg js"></div>
            <div class="entry-content-video-hero"></div>
            <div class="play-big js">
                <div class="buton-play">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="566" height="566" viewBox="0 0 566 566">
                <defs>
                    <filter id="Shape_9_copy" x="52.002" y="38.005" width="474.99" height="487" filterUnits="userSpaceOnUse">
                    <feOffset input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="64" result="blur"/>
                    <feFlood flood-opacity="0.91"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                    <filter id="Ellipse_1" x="0" y="0" width="566" height="566" filterUnits="userSpaceOnUse">
                    <feOffset input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="64" result="blur-2"/>
                    <feFlood flood-opacity="0.91"/>
                    <feComposite operator="in" in2="blur-2"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Shape_9_copy)">
                    <path id="Shape_9_copy-2" data-name="Shape 9 copy" d="M1006.2,1726.246l-71.492-41.857a9.749,9.749,0,0,0-13.31,3.253,9.52,9.52,0,0,0-1.4,5.052v83.671a9.693,9.693,0,0,0,9.743,9.64,9.812,9.812,0,0,0,4.963-1.346l71.492-41.826a9.59,9.59,0,0,0,3.438-13.206,9.7,9.7,0,0,0-3.438-3.4Z" transform="translate(-676 -1453)" fill="#00aa13"/>
                </g>
                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Ellipse_1)">
                    <g id="Ellipse_1-2" data-name="Ellipse 1" transform="translate(192 192)" fill="none" stroke="#00aa13" stroke-width="9.56">
                    <circle cx="91" cy="91" r="91" stroke="none"/>
                    <circle cx="91" cy="91" r="86.22" fill="none"/>
                    </g>
                </g>
                </svg>
                </div>
            </div>
            <!-- Don't change the order of the controlers -->
            <div class="controls">
                <div class="control play">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.342" height="22.016" viewBox="0 0 19.342 22.016"><path id="Shape_9" data-name="Shape 9" d="M48.327,2110.234l-15.2-8.947a2.066,2.066,0,0,0-2.829.7,2.045,2.045,0,0,0-.3,1.08v17.884a2.073,2.073,0,0,0,3.126,1.773l15.2-8.94a2.057,2.057,0,0,0,0-3.55Z" transform="translate(-30.003 -2100.991)" fill="#fff" /> </svg>
                </div>
                <div class="control pauza">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.62" height="19.795" viewBox="0 0 19.62 19.795"><path id="Shape_10" data-name="Shape 10" d="M71.783,2121.736h-4.2a2.112,2.112,0,0,1-2.1-2.122v-15.552a2.112,2.112,0,0,1,2.1-2.121h4.2a2.112,2.112,0,0,1,2.1,2.121v15.55a2.112,2.112,0,0,1-2.1,2.124Zm13.314-2.124v-15.55a2.112,2.112,0,0,0-2.1-2.121h-4.2a2.112,2.112,0,0,0-2.1,2.121v15.55a2.112,2.112,0,0,0,2.1,2.121h4.2A2.112,2.112,0,0,0,85.1,2119.612Z" transform="translate(-65.476 -2101.94)" fill="#fff" /></svg>
                </div>
                <div class="control mute-on" style="display:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27.095" height="20.441" viewBox="0 0 27.095 20.441"><path id="Shape_11" data-name="Shape 11" d="M111.337,777.224l-4.708,4.734h-5.4a1.274,1.274,0,0,0-1.271,1.277v7.671a1.274,1.274,0,0,0,1.27,1.278h5.4l4.708,4.734a1.265,1.265,0,0,0,1.8,0,1.281,1.281,0,0,0,.372-.9V778.125a1.27,1.27,0,0,0-2.169-.9Zm13.052,9.847,2.415-2.431a.863.863,0,0,0,0-1.212l-1.2-1.212a.851.851,0,0,0-1.2,0l-2.422,2.424-2.415-2.43a.85.85,0,0,0-1.2,0l-1.2,1.212a.864.864,0,0,0,0,1.212l2.409,2.437-2.415,2.43a.864.864,0,0,0,0,1.212l1.2,1.212a.85.85,0,0,0,1.2,0l2.415-2.43,2.415,2.43a.85.85,0,0,0,1.2,0l1.2-1.212a.864.864,0,0,0,0-1.212Z" transform="translate(-99.957 -776.851)" fill="#fff" /></svg>
                </div>
                <div class="control mute" >
                   <svg xmlns="http://www.w3.org/2000/svg" width="13.548" height="20.441" viewBox="0 0 13.548 20.441"><path id="Shape_11" data-name="Shape 11" d="M111.337,777.224l-4.708,4.734h-5.4a1.274,1.274,0,0,0-1.271,1.277v7.671a1.274,1.274,0,0,0,1.27,1.278h5.4l4.708,4.734a1.265,1.265,0,0,0,1.8,0,1.281,1.281,0,0,0,.372-.9V778.125a1.27,1.27,0,0,0-2.169-.9Z" transform="translate(-99.957 -776.851)" fill="#fff" /></svg>
                </div>
            </div>
        </div>
    </div>
</div>
