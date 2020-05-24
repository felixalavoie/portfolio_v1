<!doctype html>
<?php
    include 'texts.php';

    $lang = "fr";

    if (isset($_GET["lang"])) {
        $lang = $_GET["lang"];
    }
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css" />
    <title>Félix-Antoine Lavoie</title>
</head>
<body id="body" data-lang="<?= $lang ?>">
<a href="#content" class="screen-reader-only"><?= $texts[$lang]["gotocontent"] ?></a>
    <?php
    include 'nav.php'
    ?>
<main id="content">
    <section id="about" class="section section1">
        <div class="conteneur">
            <img src="https://via.placeholder.com/350" alt="photo de profil">

            <div class="infos">
                <h1><?= $texts[$lang]["section1"]["name"] ?></h1>
                <span><?= $texts[$lang]["section1"]["short_desc"] ?></span>
                <p>
                    <?= $texts[$lang]["section1"]["long_desc"] ?>
                </p>
            </div>

            <div class="social">
                <a href="" class="linkedin">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="path" d="M8.39251 3.88189C8.39251 6.03397 6.77375 7.75908 4.17123 7.75908H4.12275C1.61719 7.76065 0 6.03241 0 3.88189C0 1.67819 1.6688 1.09129e-06 4.21971 1.09129e-06C6.77375 -0.00156292 8.34559 1.67819 8.39251 3.88189ZM0.437924 33.2744H7.90141V10.8261H0.437924V33.2744ZM26.2192 10.3006C22.2606 10.3006 20.4886 12.4746 19.4923 14.0073V14.0793H19.4438C19.4626 14.0574 19.4798 14.0323 19.4923 14.0073V10.8277H12.0304C12.1274 12.9313 12.0304 33.276 12.0304 33.276H19.4923V20.7389C19.4923 20.0632 19.5377 19.4016 19.7379 18.9183C20.279 17.5827 21.5083 16.186 23.5635 16.186C26.2676 16.186 27.3484 18.2489 27.3484 21.2644V33.276H34.8103V20.4057C34.8119 13.5053 31.127 10.3006 26.2192 10.3006Z" fill="black"/>
                    </svg></a>
            </div>
        </div>
    </section>

    <section id="projects" class="section section2">
        <div class="conteneur">
            <h2><?= $texts[$lang]["section2"]["title"] ?></h2>

            <div class="projets">
                <div class="un_projet">
                    <img src="https://via.placeholder.com/400x500" alt="" class="un_projet-cover">
                    <img src="https://via.placeholder.com/400x250" alt="">
                    <ul class="un_projet-points">
                        <li>
                            Lorem Ipsum is for noobs
                        </li>
                        <li>
                            Lorem Ipsum is for noobs
                        </li>
                        <li>
                            Lorem Ipsum is for noobs
                        </li>
                        <li>
                            Lorem Ipsum is for noobs
                        </li>
                    </ul>
                    <ul class="un_projet-techs">
                        <li>
                            Link
                        </li>
                        <li>
                            Link
                        </li>
                        <li>
                            Link
                        </li>
                        <li>
                            Link
                        </li>
                    </ul>
                    <div class="ext_links">
                        <a href="#projects" class="view">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                            <g>
                                <g>
                                    <path class="lid" d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                        c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                        C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                        c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                        C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                </g>
                            </g>
                                <g>
                                    <g>
                                        <path class="eye" d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
			s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
			s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                                    </g>
                                </g></svg></a>
                        <a href="#projects" class="github">
                            <svg enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path class="catframe" d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z" fill="#212121"/></svg>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="experience" class="section section3">
        <div class="conteneur">
            <h2><?= $texts[$lang]["section3"]["title"] ?></h2>

            <ul class="liste_exp" id="liste_exp">
            <?php $i = 0; foreach ($texts[$lang]["section3"]["exp"] as $exp) {?>
                <li class="un_exp <?php if($i == 0) { echo "selectedli"; }?>" data-exp="<?= $exp["abbr"] ?>"><?= $exp["where"] ?></li>
            <?php $i++; } ?>
            </ul>

            <div class="exp_text" id="exp_div">
                <?php $j = 0; foreach ($texts[$lang]["section3"]["exp"] as $exp) {?>
                    <div id="<?= $exp["abbr"] ?>" class="exp_text_div <?php if($j == 0) { echo "selectedDiv"; }?>">
                        <span class="un_exp--position"><?= $exp["position"] ?></span> <span class="un_exp--where"> @ <?= $exp["where"] ?><?php if(strlen($exp["institution"]) > 0) { echo " - {$exp["institution"]}";}?></span>
                        <span class="un_exp--timeframe"><?= $exp["timeframe"] ?></span>

                        <ul class="un_exp--liste">
                            <?php foreach ($exp["points"] as $point) {?>
                                <li class="un_exp--liste-point"><?= $point ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php $j++; } ?>
            </div>

            <img src="images/techs.png" alt="différents logos de tech" class="techs">
        </div>
    </section>

    <section id="contact" class="section section4">
        <div class="conteneur">
            <h2><?= $texts[$lang]["section4"]["title"] ?></h2>

            <form action="email.php">
                <div class="form__div form__div--nom">
                    <label for="nom" class="form_label">
                        <?= $texts[$lang]["form"]["label_name"] ?>
                    </label>
                    <input type="text" class="form_input" id="nom" name="nom">
                    <p class="message_erreur" aria-atomic="true" aria-live="assertive">
                        <?php if (isset($arrErreurs["nom"])) {
                            echo $arrErreurs["nom"];
                        } ?>
                    </p>
                </div>

                <div class="form__div form__div--sujet">
                    <label for="sujet" class="form_label">
                        <?= $texts[$lang]["form"]["label_subject"] ?>
                    </label>
                    <input type="text" class="form_input" id="sujet" name="sujet">
                    <p class="message_erreur" aria-atomic="true" aria-live="assertive">
                        <?php if (isset($arrErreurs["sujet"])) {
                            echo $arrErreurs["sujet"];
                        } ?>
                    </p>
                </div>

                <div class="form__div form__div--courriel">
                    <label for="courriel" class="form_label">
                        <?= $texts[$lang]["form"]["label_mail"] ?>
                    </label>
                    <input type="text" class="form_input" id="courriel" name="courriel">
                    <p class="message_erreur" aria-atomic="true" aria-live="assertive">
                        <?php if (isset($arrErreurs["courriel"])) {
                            echo $arrErreurs["courriel"];
                        } ?>
                    </p>
                </div>

                <div class="form__div form__div--name">
                    <label for="text" class="form_label">
                        <?= $texts[$lang]["form"]["label_text"] ?>
                    </label>
                    <textarea id="text" name="text"></textarea>
                    <p class="message_erreur" aria-atomic="true" aria-live="assertive">
                        <?php if (isset($arrErreurs["text"])) {
                            echo $arrErreurs["text"];
                        } ?>
                    </p>
                </div>

                <input type="submit" value="Envoyer" name="submit" id="submit">
            </form>

            <div class="social">
                <a href="" class="linkedin">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="path" d="M8.39251 3.88189C8.39251 6.03397 6.77375 7.75908 4.17123 7.75908H4.12275C1.61719 7.76065 0 6.03241 0 3.88189C0 1.67819 1.6688 1.09129e-06 4.21971 1.09129e-06C6.77375 -0.00156292 8.34559 1.67819 8.39251 3.88189ZM0.437924 33.2744H7.90141V10.8261H0.437924V33.2744ZM26.2192 10.3006C22.2606 10.3006 20.4886 12.4746 19.4923 14.0073V14.0793H19.4438C19.4626 14.0574 19.4798 14.0323 19.4923 14.0073V10.8277H12.0304C12.1274 12.9313 12.0304 33.276 12.0304 33.276H19.4923V20.7389C19.4923 20.0632 19.5377 19.4016 19.7379 18.9183C20.279 17.5827 21.5083 16.186 23.5635 16.186C26.2676 16.186 27.3484 18.2489 27.3484 21.2644V33.276H34.8103V20.4057C34.8119 13.5053 31.127 10.3006 26.2192 10.3006Z" fill="black"/>
                    </svg></a>
            </div>
        </div>
    </section>
</main>
<script src="script/validation.js"></script>
<script src="script/list.js"></script>
</body>
</html>