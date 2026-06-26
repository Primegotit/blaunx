<?php
    include 'config/database.php';
?>


<?php

    $image_card = [
        [
            'id' => '1',
            'title' => 'Christ is the author of our profession',
            'release_date' => 'November 2025',
            'type' => 'JPG',
            'tools' => 'Blender, Adobe Photoshop, Adobe Illustrator'

        ],
        [
            'id' => '2',
            'title' => "I am what they don't see",
            'release_date' => 'September 2025',
            'type' => 'PNG',
            'tools' => 'Blender, Adobe Photoshop, Adobe Illustrator'

        ],
        [
            'id' => '3',
            'title' => "Loneliness of expertise",
            'release_date' => 'February 2026',
            'type' => 'PNG',
            'tools' => 'Adobe Photoshop, Blender, Adobe Illustrator'

        ]
    ];


    $web_card = [
        [
            'id' => '1',
            'title' => 'Primegotit',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur animi temporibus nesciunt praesentium',
            'release_date' => 'November 2025',
            'languages' => 'HTML, CSS, PHP, JS',
            'url' => 'https://primegotit.vercel.app/'
        ],
        [
            'id' => '2',
            'title' => 'Kostic',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur animi temporibus nesciunt praesentium',
            'release_date' => 'November 2025',
            'languages' => 'React, Tailwind CSS',
            'url' => 'https://kostic.vercel.app/'

        ],
        [
            'id' => '3',
            'title' => 'Trackway',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur animi temporibus nesciunt praesentium',
            'release_date' => 'November 2025',
            'languages' => 'HTML, CSS, PHP, JS, Bootstrap',
            'url' => 'https://trackwayapp.vercel.app/'
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blaunx</title>
    <link rel="stylesheet" href="global.css ">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="products.css">


</head>

<body>
    <video autoplay muted loop id="bg-video">
        <source src="images/embers-in-the-dark-1920x1080.mp4" type="video/mp4">

    </video>
    <div id="page3">
        <div id="page1-container">
            <nav>
                <a href="services.php">Services</a>
                <a href="#">Products</a>

            </nav>
            <div id="services-box">


                <!-- WEB DEVELOPMENT SECTION -->

                <div class="skill-container">
                    <div class="skill-top-banner">
                        <h3>Web development</h3>
                    </div>
                    <div class="skill-con">
                    <?php foreach($web_card as $card):?>

                        <div class="card">
                            <div class="image code1"></div>

                            <div class="content">
                                <a href="#" class="full-title">
                                    <span class="title">
                                       <?php echo $card['title'] ?>
                                    </span>
                                </a>

                                <p class="desc">
                                    <?php echo $card['description'] ?>
                                </p>
                                <p class="desc">
                                    <?php echo $card['release_date'] ?>
                                </p>
                                <p class="desc">
                                    Languages used - <?php echo $card['languages'] ?>
                                </p>
                                <div class="social-btn-con">
                                    <a class="action" href="<?php echo $card['url'] ?>">View website<span aria-hidden="true">→</span></a>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                    </div>

                </div>
                <!-- End of WEB DEVELOPMENT SECTION -->

                <!--  GRAPHIC DESIGN SECTION -->

                <div class="skill-container">
                    <div class="skill-top-banner">
                        <h3>Graphic Design</h3>
                    </div>
                    <div class="skill-con">

                    <?php foreach($image_card as $card):?>
                        <div class="card">
                            <div class="image graphic1"></div>

                            <div class="content">
                                <a href="#" class="full-title">
                                    <span class="title">
                                        <?php echo $card['title'] ?>
                                    </span>
                                </a>
                                <ul>
                                    <li class="desc">Release Date - <?php echo $card['release_date'] ?></li>
                                    <li class="desc">Type - <?php echo $card['type'] ?></li>
                                    <li class="desc">Tools used - <?php echo $card['tools'] ?></li>
                                </ul>
                                <div class="social-btn-con">
                                    <a class="action" href="#">YouTube<span aria-hidden="true">→</span></a>
                                    <a class="action" href="#">Instagram<span aria-hidden="true">→</span></a>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <!-- End of GRAPHIC DESIGN SECTION-->


            </div>

        </div>

        <div id="bottom-container">
            <ul>
                <li>Ӝӣ</li>
                <li>ӯӔ</li>
                <li>Ӗӂ</li>
                <li>Ӑӛ</li>
                <li>Ӑӛ</li>
                <li>Ӗӂ</li>
                <li>Ӝӣ</li>
                <li>Ӝӣ</li>
                <li>ӯӔ</li>
                <li>Ӗӂ</li>
                <li>Ӑӛ</li>
                <li>Ӑӛ</li>
                <li>Ӗӂ</li>
                <li>Ӝӣ</li>
                <li>Ӝӣ</li>
                <li>ӯӔ</li>
                <li>Ӗӂ</li>
                <li>Ӑӛ</li>
                <li>Ӑӛ</li>
                <li>Ӗӂ</li>
                <li>Ӝӣ</li>
                <li>ӯӔ</li>
                <li>Ӗӂ</li>
                <li>Ӑӛ</li>
                <li>Ӑӛ</li>
                <li>Ӗӂ</li>
                <li>Ӝӣ</li>
                <li>Ӝӣ</li>
                <li>ӯӔ</li>
                <li>Ӗӂ</li>



            </ul>
        </div>
    </div>
    <script>
        const symbols = [
            "Ж", "Щ", "Ю", "Я", "Б", "Г", "Д", "Ё",
            "З", "И", "Й", "Л", "П", "Ф", "Ц", "Ч",
            "Ш", "Ъ", "Ы", "Ь", "Э", "Җ", "Ҕ", "Ҝ",
            "Ӂ", "Ӝ", "Ӟ", "Ӡ", "Ӣ", "Ӥ", "Ӧ", "Ӫ",
            "Ѡ", "Ѫ", "Ѭ", "Ҩ", "Ҧ", "Ҏ", "҂", "҈"
        ];

        document.querySelectorAll("#bottom-container li").forEach(item => {
            setInterval(() => {
                item.textContent =
                    symbols[Math.floor(Math.random() * symbols.length)];
            }, Math.random() * 3000 + 1000); // changes every 1-4 seconds
        });



        //for the blaunx logo animation

        const logo = document.getElementById("logo");

        const originalText = "BLAUNX";

        const russianChars = [
            "Ж", "Щ", "Ю", "Я", "Ф", "Ц", "Ч", "Ш",
            "Ы", "Э", "Б", "Г", "Д", "З", "И", "Й",
            "Ӝ", "Ӟ", "Ӣ", "Ӧ", "Ѫ", "Ҩ"
        ];

        // build spans
        function build() {
            logo.innerHTML = originalText
                .split("")
                .map(l => `<span>${l}</span>`)
                .join("");
            return [...document.querySelectorAll("#logo span")];
        }

        let spans = build();

        function glitchCycle() {
            let order = [...spans].reverse(); // RIGHT → LEFT

            order.forEach((span, i) => {

                setTimeout(() => {

                    const original = span.textContent;

                    // STEP 1: glitch in
                    span.style.opacity = "0";
                    span.style.transform = "translateY(10px)";
                    span.style.filter = "blur(6px)";

                    setTimeout(() => {

                        span.textContent =
                            russianChars[Math.floor(Math.random() * russianChars.length)];

                        span.style.opacity = "1";
                        span.style.transform = "translateY(0)";
                        span.style.filter = "blur(0px)";

                        // STEP 2: return to original after short delay
                        setTimeout(() => {
                            span.style.opacity = "0";
                            span.style.transform = "translateY(-5px)";
                            span.style.filter = "blur(6px)";

                            setTimeout(() => {
                                span.textContent = original;

                                span.style.opacity = "1";
                                span.style.transform = "translateY(0)";
                                span.style.filter = "blur(0px)";
                            }, 200);

                        }, 300);

                    }, 200);

                }, i * 300); // speed of right → left
            });

            // after full cycle → pause on clean text
            setTimeout(() => {
                resetPause();
            }, order.length * 300 + 1200);
        }

        function resetPause() {
            spans.forEach(span => {
                span.textContent = span.textContent; // keep clean BLAUNX
                span.style.opacity = "1";
                span.style.filter = "none";
                span.style.transform = "none";
            });

            setTimeout(glitchCycle, 2500); // pause before next cycle
        }

        glitchCycle();
    </script>
</body>

</html>