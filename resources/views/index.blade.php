<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welkom op de Portfolio
        </h2>
    </x-slot>

    <style>
        body {
            margin: 0;
        }

        .main-section-hero {
            min-height: 93vh;
            width: 100%;
            position: relative;
            display: grid;
            grid-template-rows: auto 1fr;
            row-gap: 50px;
        }

        .text-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-rows: 75px auto auto 300px;
        }

        .title {
            font-weight: 900;
            grid-row: 2/3;
            margin: 20px 0;
            color: white;
            font-family: 'Montserrat', sans-serif;
            font-size: calc(65px + 2vw);
            display: inline-block;
            transform: scaleY(2.2);
        }

        .subtext {
            margin-top: 50px;
            margin-bottom: 20px;
            grid-row: 3/4;
            column-count: 3;
            column-gap: 20px;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .subtext-column {
            break-inside: avoid;
        }

        .image-grid {
            width: 100%;
            display: grid;
            justify-items: center;
        }

        .rounded-image-right {
            width: 100%;
            margin-right: 10rem;
            height: 550px;
            background-color: #eee6e2;
            border-top-right-radius: 275px;
            border-bottom-right-radius: 275px;
            position: relative;
            overflow: visible;
        }

        .rounded-image-right::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(to right, #c9c5c0 1px, transparent 1px),
                linear-gradient(to bottom, #c9c5c0 1px, transparent 1px);
            background-size: 60px 60px;
            border-bottom-right-radius: 300px;
            border-top-right-radius: 300px;
            z-index: 1;
        }

        .image-content {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
        }

        .absolute-image {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            position: absolute;
            left: 35%;
            bottom: 0px;
        }

        @media (max-width: 768px) {
            .subtext {
                column-count: 1;
            }

            .title {
                font-size: calc(30px + 4vw);
            }
        }

        .subtext-column-button {
            display: flex;
            justify-content: end;
        }

        .underline-button {
            display: flex;
            align-items: center;
            gap: 20px;
            border-bottom: white 2px solid;
        }
    </style>

    <div class="main-section-hero">
        <div class="text-container">
            <div class="title">
                <!--Design. Code. Create.-->
                Lorem ipsum dolor
            </div>
            <div class="subtext">
                <div class="subtext-column">
                    <!--Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam laboriosam veritatis similique est, perferendis nostrum nesciunt reiciendis repellendus cupiditate, harum voluptate assumenda molestiae aliquam dolores non modi expedita ducimus. Cum?-->
                    "Ik ontwerp digitale ervaringen die zowel mooi als gebruiksvriendelijk zijn. Elk project krijgt aandacht voor detail, typografie en kleurgebruik. Zo ontstaat een vloeiende en aantrekkelijke ervaring voor de gebruiker, waar vorm en functie samenkomen."
                </div>
                <div class="subtext-column">
                    <!--Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam laboriosam veritatis similique est, perferendis nostrum nesciunt reiciendis repellendus cupiditate, harum voluptate assumenda molestiae aliquam dolores non modi expedita ducimus. Cum?-->
                    "Ik bouw websites en applicaties die snel en betrouwbaar zijn. Mijn focus ligt op performance en toegankelijkheid, zodat bezoekers een optimale ervaring hebben. Elk project wordt zorgvuldig ontwikkeld met oog voor detail en toekomstbestendigheid."
                </div>
                <div class="subtext-column-button">
                    <div class="underline-button">
                        <a href="#">Get in Touch </a><i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>

            <style>
                .info-line {
                    grid-row: 4/5;
                    display: flex;
                    justify-content: center;
                    align-items: flex-end;
                    gap: -60px;
                    margin-bottom: 30px;
                    perspective: 1000px;
                }

                .card {
                    background: #eee6e2;
                    border-radius: 12px;
                    padding: 20px 15px;
                    text-align: center;
                    cursor: pointer;
                    transition: transform 0.3s ease;
                }

                .card:nth-child(1) {
                    transform: rotate(-30deg) translateY(10px);
                    --rotate: -30deg;
                    --translate-hover: -50px;
                }

                .card:nth-child(2) {
                    transform: rotate(-20deg) translateY(-40px);
                    --rotate: -20deg;
                    --translate-hover: -80px;
                }

                .card:nth-child(3) {
                    transform: rotate(0deg) translateY(-60px);
                    --rotate: 0deg;
                    --translate-hover: -110px;
                }

                .card:nth-child(4) {
                    transform: rotate(20deg) translateY(-40px);
                    --rotate: 20deg;
                    --translate-hover: -80px;
                }

                .card:nth-child(5) {
                    transform: rotate(30deg) translateY(10px);
                    --rotate: 30deg;
                    --translate-hover: -50px;
                }

                .card:hover {
                    transform: rotate(var(--rotate)) translateY(var(--translate-hover)) scale(1.2);
                    z-index: 10;
                }

                @media (max-width: 768px) {
                    .info-line {
                        flex-wrap: wrap;
                    }

                    .card {
                        transform: rotate(0deg) translateY(0) !important;
                    }
                }
            </style>

            <div class="info-line">
                <div class="card">Categorie 1</div>
                <div class="card">Categorie 2</div>
                <div class="card">Categorie 3</div>
                <div class="card">Categorie 4</div>
                <div class="card">Categorie 5</div>
            </div>

        </div>


        <div class="image-grid">
            <div class="rounded-image-right">
                <div class="image-content">
                    <img src="{{ asset('storage/hero-image-man.png') }}" alt="" class="absolute-image">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>