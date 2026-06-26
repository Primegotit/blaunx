<?php

    $service_card = [
        [
            'title' => 'Music production',
            'description' => 'Music Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                            dolores, pocxcbssimus pariatur animi temporibus nesciunt praesentium ',
            'url' => '#'
        ],
        [
            'title' => 'Web development',
            'description' => 'Web Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                            dolores, possadfdssimus pariatur animi temporibus nesciunt praesentium ',
            'url' => '#'
        ],
        [
            'title' => '3D Modelling',
            'description' => 'Modelling Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                            dolores, possimus pariatur animi temporibus nesciunt praesentium ',
            'url' => '#'
        ],
        [
            'title' => 'Graphic Design',
            'description' => 'Graphic Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                            dolores, possimus pariatur animi temporibus nesciunt praesentium ',
            'url' => '#'
        ],
        [
            'title' => 'Ethical Hacking',
            'description' => 'Ethical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                            dolores, possimus pariatur animi temporibus nesciunt praesentium ',
            'url' => '#'
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blaunx</title>
    <link rel="stylesheet" href="../global.css ">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="addservice.css">

</head>
<body>
    <video autoplay muted loop id="bg-video">
        <source src="../images/embers-in-the-dark-1920x1080.mp4" type="video/mp4">

    </video>
    <div id="page2-admin">
        <div id="page2-admin-container">
            <nav>
                <a href="#">Services</a>
            </nav>

            <div class="form-container">
                <div class="form-top-banner">
                    <h3>Enter or edit a service</h3>
                </div>

                <form action="" method="POST" class="card service-form" enctype="multipart/form-data">
                    
                    <div class="input-container">
                        <label for="">Service name</label>
                        <input type="text" name="service_name">
                    </div>

                    <div class="input-container">
                        <label for="">Description</label>
                        <textarea name="service_desc" id="" rows="4"></textarea>
                    </div>
                    
                    <div class="input-container">
                        <label for="">URL</label>
                        <input type="text" name="service_url">
                    </div>

                    <div class="input-container">
                        <label for="">Image</label>
                        <input type="file" name="service_img" accept="image/*">
                    </div>
                    
                    <div class="social-btn-con">
                        <a class="action" name="btn_add" href="#">Add<span aria-hidden="true">→</span></a>
                        <a class="action" name="btn_edit" href="#">Edit<span aria-hidden="true">→</span></a>
                        <a class="action" name="btn_delete" href="#">Delete<span aria-hidden="true">→</span></a>
                    </div>
                </form>

            </div>

            <?php

                if($_SERVER['REQUEST_METHOD'] === 'POST'){

                    $service_name = htmlspecialchars($_POST['service_name']);
                    $service_desc = htmlspecialchars($_POST['service_desc']);
                    $service_url = htmlspecialchars($_POST['service_url']);
                    $service_img = $_POST['service_img'];
                    $btn_add = $_POST['btn_add'];
                    $btn_edit = $_POST['btn_edit'];
                    $btn_delete = $_POST['btn_delete'];

   
                    
                    if(isset($btn_add)){

                        $service_card[] =  [
                            'title' => $service_name,
                            'description' => $service_desc,
                            'url' => $service_url
                        ];
                    }
                }

            ?>
            <div id="services-box">

                <div class="skill-container">
                    <div class="skill-top-banner">
                        <h3>Web development</h3>
                    </div>

                    <div class="skill-con">
                        <?php foreach($service_card as $card):?>
                        
                            <div class="card">
                                <!-- <div class="image image1"></div> -->

                                <div class="content">
                                    <a href="#" class="full-title">
                                        <span class="title">
                                            <?php echo $card['title'] ?>

                                        </span>
                                    </a>

                                    <p class="desc">
                                        <?php echo $card['description'] ?>
                                    </p>

                                    <div class="social-btn-con">
                                        <a class="action" href="<?php echo $card['url'] ?>">Edit<span aria-hidden="true">→</span></a>
                                        <a class="action" href="<?php echo $card['url'] ?>">Delete<span aria-hidden="true">→</span></a>

                                    </div>
                                    
                                </div>

                                <div class="service-img">
                                    <img src="../images/703194929342567440.jpg" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                
                    </div>
                </div>
                <!-- axdsfafsdafs -->


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
    "Ж","Щ","Ю","Я","Ф","Ц","Ч","Ш",
    "Ы","Э","Б","Г","Д","З","И","Й",
    "Ӝ","Ӟ","Ӣ","Ӧ","Ѫ","Ҩ"
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

