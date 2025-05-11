if (document.querySelector(".main-page")) {
    // Run page 1 code




    let slidePage4 = document.querySelector('.slide-page4');
    let Left_btn = document.querySelector('.Left-btn');
    let Right_btn = document.querySelector('.Right-btn');
    let watch_discount_box = document.querySelectorAll(".watch-discount-box");

    let direction = 1;  // 1 for right, -1 for left
    let autoScrollDelay = 5000;  // Delay after manual scroll
    let scrollAmount = 320;  // Pixels to scroll

    // Function to scroll right
    function scrollRight() {
        slidePage4.scrollLeft += scrollAmount;
        resetAutoScroll();
        hide_and_show_btn();
    }

    // Function to scroll left
    function scrollLeft() {
        slidePage4.scrollLeft -= scrollAmount;
        resetAutoScroll();
        hide_and_show_btn();
    }

    // Auto scroll logic
    function scrollSlider() {
        let maxScrollLeft = slidePage4.scrollWidth - slidePage4.clientWidth;

        if (slidePage4.scrollLeft >= maxScrollLeft) {
            direction = -1;  // Change direction to left
        } else if (slidePage4.scrollLeft <= 0) {
            direction = 1;  // Change direction to right
        }

        slidePage4.scrollLeft += direction * scrollAmount;
        hide_and_show_btn();
    }

    // Function to reset auto-scroll timer after manual interaction
    function resetAutoScroll() {
        clearInterval(timer);  // Stop current auto-scroll
        setTimeout(() => {
            timer = setInterval(scrollSlider, 3000);  // Restart auto-scroll after 5 seconds
        }, autoScrollDelay);
    }

    // Function to hide and show the left button
    function hide_and_show_btn() {
        let maxScrollLeft = slidePage4.scrollWidth - slidePage4.clientWidth;

        if (slidePage4.scrollLeft >= maxScrollLeft) {
            Right_btn.classList.add("hide");
        } else {
            Right_btn.classList.remove("hide");
        }

        if (slidePage4.scrollLeft <= 0) {
            Left_btn.classList.add("hide");
        } else {
            Left_btn.classList.remove("hide");
        }
    }

    // Event listeners for manual scrolling
    Left_btn.addEventListener("click", scrollLeft);
    Right_btn.addEventListener("click", scrollRight);

    // Track scrolling to update button visibility
    slidePage4.addEventListener("scroll", hide_and_show_btn);

    // Start auto-scrolling
    let timer = setInterval(scrollSlider, 3000);

    // Initial check for button visibility
    hide_and_show_btn();











    const selected = document.querySelector(".select-selected");
    const items = document.querySelector(".select-items");
    const options = document.querySelectorAll(".select-items div");

    selected.addEventListener("click", () => {
        items.style.display = items.style.display === "block" ? "none" : "block";
    });

    options.forEach(option => {
        option.addEventListener("click", () => {
            selected.innerHTML = option.innerHTML; // Set selected option
            items.style.display = "none";
        });
    });

    document.addEventListener("click", (e) => {
        if (!document.querySelector(".custom-select").contains(e.target)) {
            items.style.display = "none";
        }
    });







    // const darkModeBtn = document.getElementById("darkModeBtn");
    // const body = document.body;

    // darkModeBtn.addEventListener("click", () => {

    //   body.classList.toggle("dark-mode");


    // });

    // let darkModes = document.querySelectorAll(".darkModeBtn")
    // const body = document.body
    // const script2 = document.getElementById("main-page2");

    // darkModes.forEach(element => {

    //     element.addEventListener("click", () => {

    //         body.classList.toggle("dark-mode");
    //         script2.classList.toggle("dark-mode");


    //     });

    // });



    // JavaScript to scroll to the page sections

    // header buttons : 
    let Home = document.querySelector(".Home")
    let Products = document.querySelector(".Products")
    let Discounts = document.querySelector(".Discounts")
    let News = document.querySelector(".News")
    let Reviews = document.querySelector(".Reviews")
    let About = document.querySelector(".About")

    let shopbtn = document.querySelector(".btn")
    // pages : 
    let page1 = document.querySelector(".main-page")
    let page3 = document.querySelector(".page3")
    let page4 = document.querySelector(".page4")
    let page5 = document.querySelector(".page5")
    let page6 = document.querySelector(".page6")
    let page7 = document.querySelector(".page7")

    Home.addEventListener("click", () => {
        page1.scrollIntoView({ behavior: "smooth" });
    });

    Products.addEventListener("click", () => {
        page3.scrollIntoView({ behavior: "smooth" });
    });

    Discounts.addEventListener("click", () => {
        page4.scrollIntoView({ behavior: "smooth" });
    });

    News.addEventListener("click", () => {
        page5.scrollIntoView({ behavior: "smooth" });
    });

    Reviews.addEventListener("click", () => {
        page6.scrollIntoView({ behavior: "smooth" });
    });

    About.addEventListener("click", () => {
        page7.scrollIntoView({ behavior: "smooth" });
    });

    shopbtn.addEventListener("click", () => {
        page3.scrollIntoView({ behavior: "smooth" });
    });



    // let Settings=document.getElementById("Settings")
    // let payment_modes=document.getElementById("payment-modes")
    // let Arabic_button = document.querySelector(".Arabic-button")

    // function arabic_language(){
    //     Settings.textContent="الاعدادات"
    //     payment_modes.textContent="وساىل الدفع"
    // }







    // Arabic_button.addEventListener("click",arabic_language)



    // Store translatable elements
    const translatableElements = {
        //main page
        home: document.querySelector(".Home"),
        Products: document.querySelector(".Products"),
        Discounts: document.querySelector(".Discounts"),
        News: document.querySelector(".News"),
        Reviews: document.querySelector(".Reviews"),
        About: document.querySelector(".About"),
        Discover: document.querySelector(".rest-main-page h1"),
        Shoptheworlds: document.querySelector(".rest-main-page p"),
        Shopbtn: document.querySelector(".btn"),

        //page2
        title_page2: document.querySelector(".title-page2 h1"),
        //page3
        title_page3: document.querySelector(".title-page3 h1"),
        //page4
        title_page4: document.querySelector(".title-page4 h1"),
        //page5
        title_page5: document.querySelector(".title-page5 h1"),
        magazin_h3_0: document.querySelectorAll(".magazin p")[0],
        magazin_h3_1: document.querySelectorAll(".magazin p")[1],
        //page6
        title_page6: document.querySelector(".page6 h1"),
        textareareview0: document.querySelectorAll(".text-area-review p")[0],
        textareareview0: document.querySelectorAll(".text-area-review p")[0],
        textareareview1: document.querySelectorAll(".text-area-review p")[1],
        textareareview2: document.querySelectorAll(".text-area-review p")[2],
        textareareview3: document.querySelectorAll(".text-area-review p")[3],
        textareareview4: document.querySelectorAll(".text-area-review p")[4],
        textareareview5: document.querySelectorAll(".text-area-review p")[5],

        //page7
        about_watch_h_0: document.querySelectorAll(".page7-up-informations-box h2")[0],
        about_watch_h_1: document.querySelectorAll(".page7-up-informations-box h2")[1],
        about_watch_h_2: document.querySelectorAll(".page7-up-informations-box h2")[2],

        about_watch_p01: document.querySelectorAll(".page7-up-informations-box p")[0],
        about_watch_p02: document.querySelectorAll(".page7-up-informations-box p")[1],
        about_watch_p03: document.querySelectorAll(".page7-up-informations-box p")[2],
        about_watch_p04: document.querySelectorAll(".page7-up-informations-box p")[3],

        about_watch_p11: document.querySelectorAll(".page7-up-informations-box p")[4],
        about_watch_p12: document.querySelectorAll(".page7-up-informations-box p")[5],
        about_watch_p13: document.querySelectorAll(".page7-up-informations-box p")[6],
        about_watch_p14: document.querySelectorAll(".page7-up-informations-box p")[7],

        about_watch_p21: document.querySelectorAll(".page7-up-informations-box p")[8],
        about_watch_p22: document.querySelectorAll(".page7-up-informations-box p")[9],
        about_watch_p23: document.querySelectorAll(".page7-up-informations-box p")[10],
        about_watch_p24: document.querySelectorAll(".page7-up-informations-box p")[11],



        Settings: document.getElementById("Settings"),
        payment_modes: document.getElementById("payment-modes"),
        // buy_watch: document.querySelector(".page7-up-informations-box h2"),
        // First box heading
        // about_watch: document.querySelectorAll(".page7-up-informations-box h2")[2], 
        // Third box heading

    };

    // Translation data
    const translations = {
        en: {
            //main page
            home: "Home",
            Products: "Products",
            Discounts: "Discounts",
            News: "News",
            Reviews: "Reviews",
            About: "About",
            Discover: "Discover Luxury Watches",
            Shoptheworlds: "Shop the world's finest men's watches at the best prices",
            Shopbtn: "Shop now",

            //page2
            title_page2: "Popular brands",

            //page3
            title_page3: "Our Most Popular Models",

            //page4
            title_page4: "The Best deals of this mounth",

            //page5
            title_page5: "The latest news",
            magazin_h3_0: " LVMH Watch Week 2025, Zenith isn’t flooding its collections with new dial colors.No, it’s continuing to carefully build out its Defy Skyline range by introducing two variants of a brand new configuration.You can get the brand’s sporty Defy Skyline with a...",
            magazin_h3_1: "  when a watch brand collaborates with a charitable organization,one may assume a position of skepticism for one-time endeavors that keep detailslike total contribution and impact intentionally vague However...",

            //page6
            title_page6: "Customer's Review ",
            textareareview0: " Fantastic shopping experience The watch collection was elegant and diverse  Helpful staff made choosing the perfect timepiec easy Great quality and stylish designs Smooth checkout with excellent service",
            textareareview1: "Got the perfect watch for my husband! The quality and style are outstanding. The staff helped me pick a great one. He absolutely loves it! Highly recommend this store! ",
            textareareview2: "Amazing selection of watches! The designs were sleek and high-quality. Staff was knowledgeable and friendly. Fast and hassle-free purchase. Definitely coming back for another!  ",
            textareareview3: "  A wonderful gift for my husband! So many elegant watches to choose from. The team made my shopping experience easy. Great prices for high-end timepieces. My husband was thrilled with his new watch!",
            textareareview4: " Bought a watch for my husband's birthday! The craftsmanship is excellent. The packaging was elegant and gift-ready. He wears it every day and loves it. Will shop here again for sure!",
            textareareview5: " Best watch store ever! Huge variety and top brands available. Staff helped me find the perfect match. Superb service from start to finish. 100% satisfied with my purchase!  ",

            // page7
            about_watch_h_0: " Buy a watch",
            about_watch_h_1: " Locale",
            about_watch_h_2: " About us",


            about_watch_p01: "Watch Buyer Protection",
            about_watch_p02: "Payment via an escrow accountn",
            about_watch_p03: "Commitment to Authenticity",
            about_watch_p04: "Easy Returns",
            about_watch_p11: "Algeria",
            about_watch_p12: "Egypt",
            about_watch_p13: "Tunisia",
            about_watch_p14: "Morocco",
            about_watch_p21: "About us",
            about_watch_p22: "Jobs",
            about_watch_p23: "Press",
            about_watch_p24: "legal details",



            Settings: "Settings",
            payment_modes: "Payment Methods",
            buy_watch: "Buy on Watch",
            about_watch: "About Watch",

        },
        ar: {
            //main page
            home: "الرئيسية",
            Products: "المنتجات",
            Discounts: "الخصومات",
            News: "الأخبار",
            Reviews: "التقييمات",
            About: "نبذة عنا",
            Settings: "الإعدادات",
            Discover: "اكتشف الساعات الفاخرة",
            Shoptheworlds: "تسوق أفضل الساعات الرجالية في العالم بأفضل الأسعار",
            Shopbtn: "تسوق الآن",

            //page2
            title_page2: "العلامات التجارية الشعبية",

            // page3
            title_page3: "موديلاتنا الأكثر شعبية",

            //page4
            title_page4: "أفضل العروض لهذا الشهر",

            //page5
            title_page5: "أحدث الأخبار",
            magazin_h3_0: "ات LVMH لعام 2025، لا تغمر Zenith مجموعاتها بألوان ميناء جديدة. لا، إنها تواصل بناء مجموعة Defy Skyline بعناية من خلال تقديم نوعين من التكوين الجديد تمامًا. يمكنك الحصول على ساعة Defy Skyline الرياضية من العلامة التجارية مع",
            magazin_h3_1: "في كثير من الأحيان، عندما تتعاون علامة تجارية للساعات مع منظمة خيرية، قد يفترض المرء موقفًا متشككًا بشأن المساعي لمرة واحدة التي تبقي التفاصيل مثل المساهمة الإجمالية والتأثير غامضة عمدًا. ومع ذلك ...",

            //page6
            title_page6: "تجربة العملاء معنا ",
            textareareview0: " تجربة تسوق رائعة، كانت مجموعة الساعات أنيقة ومتنوعة، وموظفو المتجر متعاونون، مما جعل اختيار الساعة المثالية أمرًا سهلاً، وجودة رائعة وتصميمات أنيقة، ودفع سلس مع خدمة ممتازة ",
            textareareview1: " وجدت الساعة المثالية لزوجي! الجودة والتصميم رائعان. ساعدني الموظفون في اختيار ساعة رائعة. لقد أحبها كثيرًا! أنصح بشدة بهذه المتجر! ",
            textareareview2: "  تشكيلة مذهلة من الساعات! التصاميم أنيقة وعالية الجودة. الموظفون كانوا ودودين وذوي خبرة. عملية الشراء كانت سريعة وسهلة. بالتأكيد سأعود لشراء المزيد! ",
            textareareview3: " هدية رائعة لزوجي! الكثير من الساعات الأنيقة للاختيار من بينها. جعل الفريق تجربة التسوق سهلة للغاية. أسعار رائعة مقابل ساعات فاخرة. كان زوجي سعيدًا جدًا بساعته الجديدة! ",
            textareareview4: "  اشتريت ساعة هدية لعيد ميلاد زوجي! الصناعة متقنة للغاية. التغليف كان أنيقًا وجاهزًا للإهداء. يرتديها كل يوم ويحبها كثيرًا. سأعود للشراء مرة أخرى بالتأكيد! ",
            textareareview5: " أفضل متجر ساعات على الإطلاق! تشكيلة ضخمة من أفضل العلامات التجارية. ساعدني الموظفون في العثور على الساعة المثالية. خدمة رائعة من البداية إلى النهاية. راضٍ 100٪ عن شرائي!",

            //page7
            about_watch_h_0: " شراء ساعة",
            about_watch_h_1: " الموقع",
            about_watch_h_2: " عنّا",

            about_watch_p01: " حماية الموقع للمشتري",
            about_watch_p02: "الدفع عبر حساب الضمان",
            about_watch_p03: "الالتزام بالأصالة",
            about_watch_p04: "سهولة الإرجاع",
            about_watch_p11: "الجزائر",
            about_watch_p12: "مصر",
            about_watch_p13: "تونس",
            about_watch_p14: "المغرب",
            about_watch_p21: "نبذة عنا",
            about_watch_p22: "الوظائف",
            about_watch_p23: "الصحافة",
            about_watch_p24: "التفاصيل القانونية",



            payment_modes: "وسائل الدفع",
            buy_watch: "اشترِ ساعة",
            about_watch: "حول الساعة",

        },
        fr: {
            //main page
            home: "Accueil",
            Products: "Produits",
            Discounts: "Réductions",
            News: "nouvelles",
            Reviews: "Avis",
            About: "À propos",
            Settings: "Paramètres",
            Discover: "Découvrez les montres de luxe",
            Shoptheworlds: "Achetez les meilleures montres pour hommes au monde aux meilleurs prix",
            Shopbtn: "Achetez maintenant",

            //page2
            title_page2: "Marques populaires",

            // page3
            title_page3: "Nos modèles les plus populaires",

            //page4
            title_page4: "Les meilleurs bons plans du mois",

            //page5
            title_page5: "Les dernières actualités",
            magazin_h3_0: "Pour la LVMH Watch Week 2025, Zenith n'inonde pas ses collections de nouvelles couleurs de cadran. Non, elle continue de développer soigneusement sa gamme Defy Skyline en introduisant deux variantes d'une toute nouvelle configuration. Vous pouvez obtenir la Defy Skyline sportive de la marque avec un...",
            magazin_h3_1: " lorsqu'une marque de montres « collabore » avec une organisation caritative, on peut adopter une position de scepticisme à l'égard d'efforts ponctuels qui gardent intentionnellement vagues des détails tels que la contribution totale et l'impact.",

            //page6
            title_page6: "Avis clients ",
            textareareview0: " Expérience de magasinage fantastique La collection de montres était élégante et diversifiée Le personnel serviable a facilité le choix de la montre parfaite Excellente qualité et designs élégants Paiement fluide avec un excellent service ",
            textareareview1: " J'ai trouvé la montre parfaite pour mon mari ! La qualité et le design sont superbes. Le personnel m'a aidée à choisir une excellente montre. Il l'a adorée ! Je recommande vivement cette boutique ! ",
            textareareview2: "  Incroyable sélection de montres ! Les designs sont élégants et de haute qualité. Le personnel était amical et compétent. L'achat a été rapide et facile. Je reviendrai certainement pour en acheter d'autres ! ",
            textareareview3: " Un cadeau parfait pour mon mari ! Un large choix de montres élégantes. L'équipe a rendu l'expérience d'achat très simple. Des prix excellents pour des montres de luxe. Mon mari est très content de sa nouvelle montre ! ",
            textareareview4: " J'ai acheté une montre pour l'anniversaire de mon mari ! La fabrication est impeccable. L'emballage était élégant et prêt à offrir. Il la porte tous les jours et l'adore. Je reviendrai certainement acheter encore ! ",
            textareareview5: " Meilleure boutique de montres ! Une grande variété des meilleures marques. Le personnel m'a aidé à trouver la montre idéale. Service excellent du début à la fin. 100 % satisfait de mon achat ! ",

            //page7
            about_watch_h_0: " Acheter une montre",
            about_watch_h_1: "Locale ",
            about_watch_h_2: " de nous Site",



            about_watch_p01: "Engagement d'authenticité",
            about_watch_p02: "Paiement via un compte séquestre",
            about_watch_p03: "Protection des acheteurs de montres",
            about_watch_p04: "Retours faciles",
            about_watch_p11: "Algérie",
            about_watch_p12: "Égypte",
            about_watch_p13: "Tunisie",
            about_watch_p14: "Maroc",
            about_watch_p21: "À propos de nous",
            about_watch_p22: "Emplois",
            about_watch_p23: "Presse",
            about_watch_p24: "Mentions légales",



            payment_modes: "Modes de paiement",
            buy_watch: "Acheter une montre",
            about_watch: "À propos de la montre",
            title_page5: "Derniéres nouvelles"
        }
    };

    // Function to change language dynamically
    function changeLanguage(lang) {
        Object.keys(translatableElements).forEach(key => {
            if (translatableElements[key]) {
                translatableElements[key].textContent = translations[lang][key];
            }
        });

        // Save the selected language in localStorage
        localStorage.setItem("selectedLang", lang);
    }

    // Attach event listeners to language buttons
    document.querySelectorAll(".select-items div").forEach(option => {
        option.addEventListener("click", () => {
            const lang = option.getAttribute("data-value");
            changeLanguage(lang);
        });
    });

    // // Load saved language on page load
    // document.addEventListener("DOMContentLoaded", () => {
    //     const savedLang = localStorage.getItem("selectedLang") || "en";
    //     changeLanguage(savedLang);
    // });


    document.addEventListener("DOMContentLoaded", () => {
        const savedLang = localStorage.getItem("selectedLang") || "en";
        changeLanguage(savedLang);

        // Update the visible selected language in the selector
        const selectedElement = document.querySelector(".select-selected");
        const selectedOption = document.querySelector(`.select-items [data-value="${savedLang}"]`);
        if (selectedElement && selectedOption) {
            selectedElement.innerHTML = selectedOption.innerHTML;
        }
    });





    /* // ------------------------------------------ darkmode-------------------------------------------- */
    // Get the toggle switch element
    const toggleSwitch = document.querySelector(".theme__toggle");
    let whiteimgwatch = document.querySelector(".header-image-white")
    let blackimgwatch = document.querySelector(".header-image-black")

    // Apply the saved dark mode state on page load
    if (localStorage.getItem("dark-mode") === "enabled") {
        document.body.classList.add("dark");
        toggleSwitch.checked = true; // Move the toggle to the right position
    }

    // Toggle event
    toggleSwitch.addEventListener("change", () => {
        if (toggleSwitch.checked) {
            // Enable dark mode
            document.body.classList.add("dark");
            localStorage.setItem("dark-mode", "enabled");

            // whiteimgwatch.classList.remove(".hide")
            // blackimgwatch.classList.add(".hide")
        } else {
            // Disable dark mode
            document.body.classList.remove("dark");
            localStorage.setItem("dark-mode", "disabled");

            // whiteimgwatch.classList.add(".hide")
            // blackimgwatch.classList.remove(".hide")
        }
    });

    /* // ------------------------------------------ link part-------------------------------------------- */
    document.querySelectorAll('.watch-box').forEach(box => {
        box.addEventListener('click', () => {

            window.location.href = "watchscroll.php";
        });
    });

    document.querySelectorAll('.watch-discount-box').forEach(box => {
        box.addEventListener('click', () => {

            window.location.href = "DetailsWatch.php";
        });
    });



    document.querySelector(".login").addEventListener('click', () => {

        window.location.href = "loginpage.html";
    });
}




// // Get the toggle switch element
// const toggleSwitch = document.querySelector(".theme__toggle");

// // Apply the saved dark mode state on page load
// if (localStorage.getItem("dark-mode") === "enabled") {
//   document.body.classList.add("dark");
//   toggleSwitch.checked = true; // Move the toggle to the right position
// }

// // Toggle event
// toggleSwitch.addEventListener("change", () => {
//   if (toggleSwitch.checked) {
//     // Enable dark mode
//     document.body.classList.add("dark");
//     localStorage.setItem("dark-mode", "enabled");
//   } else {
//     // Disable dark mode
//     document.body.classList.remove("dark");
//     localStorage.setItem("dark-mode", "disabled");
//   }
// });









/* // ------------------------------------------ watchscroll page-------------------------------------------- */

if (document.querySelector(".main-page2")) {

    /* // ------------------------------------------ link part-------------------------------------------- */

    document.querySelectorAll('.watch-discount2-box').forEach(box => {
        box.addEventListener('click', () => {

            window.location.href = "DetailsWatch.php";
        });
    });

    if (document.querySelector(".login")) {
        document.querySelector(".login").addEventListener('click', () => {

            window.location.href = "loginpage.php";
        });
    }



    /* // ------------------------------------------ scroll part-------------------------------------------- */


    let samebrandslide = document.querySelector('.same-brand-slide');
    let Leftbtnsamebrand = document.querySelector('.Left-btn-same-brand');
    let Rightbtnsamebrand = document.querySelector('.Right-btn-same-brand');



    function scrollRight2() {
        samebrandslide.scrollLeft += 1200;
        hide_and_show_btn2();
    }

    // Function to scroll left
    function scrollLeft2() {
        samebrandslide.scrollLeft -= 1200;
        hide_and_show_btn2();
    }

    // Auto scroll logic
    function scrollSlider2() {
        let maxScrollLeft = samebrandslide.scrollWidth - samebrandslide.clientWidth;

        if (samebrandslide.scrollLeft >= maxScrollLeft) {
            direction = -1;  // Change direction to left
        } else if (samebrandslide.scrollLeft <= 0) {
            direction = 1;  // Change direction to right
        }

        samebrandslide.scrollLeft += direction * scrollAmount;
        hide_and_show_btn2();
    }


    // Function to hide and show the left button
    function hide_and_show_btn2() {
        let maxScrollLeft = samebrandslide.scrollWidth - samebrandslide.clientWidth;

        if (samebrandslide.scrollLeft >= maxScrollLeft) {
            Rightbtnsamebrand.classList.add("hide");
        } else {
            Rightbtnsamebrand.classList.remove("hide");
        }

        if (samebrandslide.scrollLeft <= 0) {
            Leftbtnsamebrand.classList.add("hide");
        } else {
            Leftbtnsamebrand.classList.remove("hide");
        }
    }

    // Event listeners for manual scrolling
    Leftbtnsamebrand.addEventListener("click", scrollLeft2);
    Rightbtnsamebrand.addEventListener("click", scrollRight2);

    // Track scrolling to update button visibility
    samebrandslide.addEventListener("scroll", hide_and_show_btn2);



    // Initial check for button visibility
    hide_and_show_btn2();





    /* // ------------------------------------------ dark mode-------------------------------------------- */
    // Get the toggle switch element
    const toggleSwitch = document.querySelector(".theme__toggle");

    // Apply the saved dark mode state on page load
    if (localStorage.getItem("dark-mode") === "enabled") {
        document.body.classList.add("dark");
        toggleSwitch.checked = true; // Move the toggle to the right position
    }

    // Toggle event
    toggleSwitch.addEventListener("change", () => {
        if (toggleSwitch.checked) {
            // Enable dark mode
            document.body.classList.add("dark");
            localStorage.setItem("dark-mode", "enabled");
        } else {
            // Disable dark mode
            document.body.classList.remove("dark");
            localStorage.setItem("dark-mode", "disabled");
        }
    });








}



/* // ------------------------------------------ DetailsWatch-------------------------------------------- */


if (document.querySelector(".big-box3")) {




    /* // ------------------------------------------ link part-------------------------------------------- */


    if (document.querySelector(".login")) {
        document.querySelector(".login").addEventListener('click', () => {

            window.location.href = "loginpage.php";
        });
    }



    /* // ------------------------------------------ images transition-------------------------------------------- */

    let smallImagesBoxes = document.querySelectorAll(".small-images-boxes");

    smallImagesBoxes.forEach(element => {

        let smallImg = element.querySelector("img");


        let largeImg = document.querySelector(".large-image img");

        // element.addEventListener("mouseover",function(){
        //     smallImg.classList.remove("opa")



        // })


        smallImg.addEventListener("click", function () {

            // let tempSrc = largeImg.src;
            largeImg.src = smallImg.src;
            // smallImg.src = tempSrc;

            smallImagesBoxes.forEach(one => {
                if (one.classList.contains("p")) {
                    one.classList.add("opa")

                }
            })

            element.classList.remove("opa")
            element.classList.add("p")



        });



    });


    /* // ------------------------------------------ zoom-------------------------------------------- */


    const zoomToggle = document.querySelector(".zoom-toggle");
    const zoomTarget = document.querySelector(".zoom-target");
    const zoomLens = document.querySelector(".zoom-lens");
    const zoomIcon = zoomToggle.querySelector("i"); // icon inside the button

    let zoomEnabled = false;

    zoomToggle.addEventListener("click", () => {
        zoomEnabled = !zoomEnabled;
        zoomLens.style.display = zoomEnabled ? "block" : "none";

        
        zoomIcon.classList.toggle("bx-zoom-in", !zoomEnabled);
        zoomIcon.classList.toggle("bx-zoom-out", zoomEnabled);

        if (zoomEnabled) {
            zoomLens.style.backgroundImage = `url('${zoomTarget.src}')`;

            
            zoomTarget.onload = () => {
                zoomLens.style.backgroundSize = `${zoomTarget.width * 1.6}px ${zoomTarget.height * 2}px`;
            };

           
            zoomLens.style.backgroundSize = `${zoomTarget.width * 1.6}px ${zoomTarget.height * 2}px`;
        }
    });

    zoomTarget.addEventListener("mousemove", (e) => {
        if (!zoomEnabled) return;

        const rect = zoomTarget.getBoundingClientRect();
        const lensSize = zoomLens.offsetWidth;

        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;

        x = Math.max(0, Math.min(x, rect.width));
        y = Math.max(0, Math.min(y, rect.height));

        // Move lens
        zoomLens.style.left = `${x - lensSize / 2}px`;
        zoomLens.style.top = `${y - lensSize / 2}px`;

        // Move background
        const zoomX = (x / rect.width) * 100;
        const zoomY = (y / rect.height) * 100;
        zoomLens.style.backgroundPosition = `${zoomX}% ${zoomY}%`;
    });

    // ✅ Cancel zoom mode when the mouse leaves the image
    zoomTarget.addEventListener("mouseleave", () => {
        if (zoomEnabled) {
            zoomEnabled = false;
            zoomLens.style.display = "none";

            // Return icon to normal
            zoomIcon.classList.remove("bx-zoom-out");
            zoomIcon.classList.add("bx-zoom-in");
        }
    });



    /* // ------------------------------------------ dark mode-------------------------------------------- */


    // Get the toggle switch element
    const toggleSwitch = document.querySelector(".theme__toggle");

    // Apply the saved dark mode state on page load
    if (localStorage.getItem("dark-mode") === "enabled") {
        document.body.classList.add("dark");
        toggleSwitch.checked = true; // Move the toggle to the right position
    }

    // Toggle event
    toggleSwitch.addEventListener("change", () => {
        if (toggleSwitch.checked) {
            // Enable dark mode
            document.body.classList.add("dark");
            localStorage.setItem("dark-mode", "enabled");
        } else {
            // Disable dark mode
            document.body.classList.remove("dark");
            localStorage.setItem("dark-mode", "disabled");
        }
    });


    /* // ------------------------------------------ change lang-------------------------------------------- */


    const translatableElements = {
        first: document.querySelectorAll(".feature-tooltip")[0],
        second: document.querySelectorAll(".feature-tooltip")[1],
        third: document.querySelectorAll(".feature-tooltip")[2],
        fourth: document.querySelectorAll(".feature-tooltip")[3],
        fifth: document.querySelectorAll(".feature-tooltip")[4],
        buybtn: document.querySelector(".buybtn"),
    }

    const translations = {
        en: {
            first: "Verified legal documentation and business registration",
            second: "Minimum 4.8/5 customer satisfaction rating",
            third: "You can replace your order provided that does not exceed 10 d",
            fourth: "We are here 24x7 for any help you want",
            fifth: "safe and safe delivery to all word's parts ",

            buybtn: "buy",
        },
        ar: {
            first: "وثيق قانوني وتسجيل تجاري مُوثّق",
            second: "تقييم رضا العملاء لا يقل عن ٤.٨/٥ ",
            third: "يمكنك استبدال طلبك بشرط ألا يتجاوز ١٠ أيام",
            fourth: "نحن هنا على مدار الساعة طوال أيام الأسبوع لأي مساعدة تحتاجها",
            fifth: " توصيل آمن وسريع إلى جميع أنحاء العالم",

            buybtn: "شراء",
        },
        fr: {
            first: " Documents juridiques et immatriculation d'entreprise vérifiés",
            second: "Note de satisfaction client minimale de 4,8/5 ",
            third: "Vous pouvez remplacer votre commande à condition que le délai ne dépasse pas 10 jours. ",
            fourth: "Nous sommes disponibles 24hx7j pour toute assistance.",
            fifth: "Livraison sécurisée dans le monde entier.",

            buybtn: "Achetez",
        },
    }


    // Function to change language dynamically
    function changeLanguage(lang) {
        Object.keys(translatableElements).forEach(key => {
            if (translatableElements[key]) {
                translatableElements[key].textContent = translations[lang][key];
            }
        });

        // Save the selected language in localStorage
        localStorage.setItem("selectedLang", lang);
    }

    // Attach event listeners to language buttons
    // document.querySelectorAll(".select-items div").forEach(option => {
    //     option.addEventListener("click", () => {
    //         const lang = option.getAttribute("data-value");
    //         changeLanguage(lang);
    //     });
    // });




    // document.addEventListener("DOMContentLoaded", () => {
    //     const savedLang = localStorage.getItem("selectedLang") || "en";
    //     changeLanguage(savedLang);

    //     // Update the visible selected language in the selector
    //     const selectedElement = document.querySelector(".select-selected");
    //     const selectedOption = document.querySelector(`.select-items [data-value="${savedLang}"]`);
    //     if (selectedElement && selectedOption) {
    //         selectedElement.innerHTML = selectedOption.innerHTML;
    //     }
    // });


}



/* // ------------------------------------------login page-------------------------------------------- */
if (document.querySelector(".container-log")) {


    const card = document.getElementById("flip-card");
    const flipToSignup = document.getElementById("flipToSignup");
    const flipToLogin = document.getElementById("flipToLogin");

    flipToSignup.addEventListener("click", () => {
        card.classList.add("flipped");
    });

    flipToLogin.addEventListener("click", () => {
        card.classList.remove("flipped");
    });




    /* // ------------------------------------------ dark mode-------------------------------------------- */


    // Get the toggle switch element
    const toggleSwitch = document.querySelector(".theme__toggle");

    // Apply the saved dark mode state on page load
    if (localStorage.getItem("dark-mode") === "enabled") {
        document.body.classList.add("dark");
        toggleSwitch.checked = true; // Move the toggle to the right position
    }

    // Toggle event
    toggleSwitch.addEventListener("change", () => {
        if (toggleSwitch.checked) {
            // Enable dark mode
            document.body.classList.add("dark");
            localStorage.setItem("dark-mode", "enabled");
        } else {
            // Disable dark mode
            document.body.classList.remove("dark");
            localStorage.setItem("dark-mode", "disabled");
        }
    });


}