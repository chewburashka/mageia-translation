<?php

define('HLANG', true);
require '../../../langs.php';
require 'locales.php';

$_t = i18n::get_strings($_t, $locale, $i18n_fallback_rules);

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>">
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="release">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('page_h1')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <?php include '../nav.php'; ?>
                <div class="para">
                <p><?php echo $_t['upgrading_general']; ?></p>
                <ul>
                    <?php foreach ( $_t['upgrading_general_array'] as $anItem ) {
                        echo '<li>'.$anItem.'</li>'; 
                    } ?>
                </ul>
                <p><?php echo $_t['upgrading_ways']; ?></p>
                <ul>
                    <li><?php echo $_t['upgrading_ways_dvd']; ?></li>
                    <li><?php echo $_t['upgrading_ways_inline']; ?></li>
                </ul>
                <hr>
                <h2 id="dvd"><?php echo $_t['h2_dvd']; ?></h2>
                <p><?php echo $_t['dvd_clean_install']; ?></p>
                <p><?php echo $_t['to_upgrade']; ?></p>
                <ul>
                    <?php foreach ( $_t['to_upgrade_array'] as $anItem ) {
                        echo '<li>'.$anItem.'</li>';
                    } ?>
                </ul>
                <p><?php echo $_t['recommended']; ?></p>
                <hr>
                <h2 id="inline"><?php echo $_t['h2_inline']; ?></h2>
                <p><?php echo $_t['inline_1']; ?></p>
                <p><?php echo $_t['inline_2']; ?></p>
                
                <p style="text-align: center;"><a href="../../downloads/get/?q=mgaonline" rel="nofollow" title="Download mgaonline"><img src="/g/images/oxygen/application-x-rpm.png" alt="mgaonline"><br>
                    mgaonline<br>
                    <?php echo $_t['mgaonline_image_title']; ?></a></p>

                <br>
                <p><?php echo $_t['inline_3']; ?></p>
                <p><?php echo $_t['a_or_b']; ?></p>
                <br>
                <h2 id="mgaonline"><?php echo $_t['h2_a']; ?></h2>
                <p><?php echo $_t['popup_window_1']; ?></p>
                <img src="/g/1/mgaonline/mgaonline8.png" alt="mgaonline pop-up" class="screen-copy">

                <p><?php echo $_t['popup_window_2']; ?></p>
                <img src="/g/1/mgaonline/mgaonline2.png" alt="mgaonline pop-up" class="screen-copy">

                <p><?php echo $_t['as_soon_complete']; ?></p>

                <br>
                <h2 id="urpmi"><?php echo $_t['h2_b']; ?></h2>
                <p><?php echo $_t['cli_1']; ?></p>
                <ul>
                    <li><p><?php echo $_t['cli_2']; ?></p>
                        <p><code class="term">$ su<br>
                            # urpmi.removemedia -a</code></p></li>
                    <li><p><?php echo $_t['cli_3']; ?></p>
                    <ul>
                        <li><p><?php echo $_t['cli_4']; ?></p>
                            <p><code class="term">
                            # urpmi.addmedia --distrib --mirrorlist 'http://mirrors.mageia.org/api/mageia.1.$ARCH.list'</code></p>
                            <p>replacing <code>$ARCH</code> by <code>i586</code> or <code>x86_64</code>.</p>
                        </li>
                        <li><p><?php echo $_t['cli_5']; ?></p>
                            <p><code class="term"># urpmi.addmedia --distrib &lt;mirror_url&gt;</code></p>
                        </li>
                    </ul>
                    </li>
                    <li><p><?php echo $_t['cli_6']; ?></p>
                        <p><code class="term"># urpmi --replacefiles --auto-update --auto
                        </code></p>
                    </li>
                </ul>
                <hr>
                <h2><?php echo $_t['h2_thats_it']; ?></h2>
            </div></div>
            <hr>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h3><?php echo $_t['h3_question']; ?></h3>
                    <p><?php echo $_t['join_and_ask']; ?></p>

                </div></div>
                <div class="yui-u"><div class="para">
                    <h3><?php echo $_t['h3_feedback']; ?></h3>
                    <p><?php echo $_t['tweet_it']; ?></p>
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
