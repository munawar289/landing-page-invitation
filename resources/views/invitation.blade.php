<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="overflow-y-auto relative min-h-full">
    <section class="cover-section fixed inset-x-0 top-0 z-[1000] transition-all duration-1000 ease-out bg-[var(--color-main)] overflow-hidden w-full trigger-section">
        <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none bg-[var(--color-main)] with-bg has-animate" data-anim="zoom-out" data-load-animation="true">
            <div class="elements-wrapper-absolute absolute top-0 left-0 w-full h-full">
                <div class="background-element relative w-full h-full">
                    <img class="object-cover w-full h-full mix-blend-multiply" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90ZXh0dXJlLnBuZw.webp" alt="texture">
                </div>
            </div>
            <div class="sky absolute top-0 left-1/2 w-[120%] -translate-x-1/2">
                <div class="image-element relative w-full h-auto">
                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid w-full h-auto">
                </div>
            </div>
            <div class="orn-1 absolute bottom-[30%] lg:bottom-10 right-0 w-[65%] lg:w-[50%] translate-x-[40%]">
                <div class="image-element relative w-full h-auto">
                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                </div>
            </div>
            <div class="orn-2 absolute bottom-[30%] lg:bottom-[25%] left-0 w-[65%] lg:w-[50%] -translate-x-[40%]">
                <div class="image-element relative w-full h-auto">
                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTIucG5n.webp" alt="tree-2" class="img-fluid w-full h-auto">
                </div>
            </div>
            <div class="mountain absolute bottom-0 left-[50%] w-full -translate-x-[50%] translate-y-[20%]">
                <div class="image-element relative w-full h-auto">
                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3VudGFpbi5wbmc.webp" alt="mountain" class="img-fluid w-full h-auto">
                </div>
                <div class="land absolute bottom-[-30%] left-0 w-[120%]">
                    <div class="image-element relative w-full h-auto">
                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sYW5kLnBuZw.webp" alt="land" class="img-fluid w-full h-auto">
                    </div>
                </div>
            </div>
            <div class="ornament absolute top-[-0.5rem] w-[14%] lg:w-[8%] left-0 ornament-left">
                <div class="image-element relative w-full h-auto">
                    <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwucG5n.webp" alt="rebung-vertical" class="img-fluid w-full h-auto ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwucG5n.webp">
                    <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwucG5n.webp" alt="rebung-vertical" class="img-fluid w-full h-auto ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwucG5n.webp">
                </div>
            </div>
            <div class="ornament absolute top-[-0.5rem] w-[14%] lg:w-[8%] right-0 transform scale-[-1] ornament-right">
                <div class="image-element relative w-full h-auto">
                    <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwucG5n.webp" alt="rebung-vertical" class="img-fluid w-full h-auto ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwucG5n.webp">
                    <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwucG5n.webp" alt="rebung-vertical" class="img-fluid w-full h-auto ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwucG5n.webp">
                </div>
            </div>
        </div>
        <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none z-30 orn-front cover-ornament-wrapper has-animate" data-anim="zoom-out" data-load-animation="true">
            <div class="rumah absolute bottom-0 left-[50%] w-[60%] translate-x-[-50%] translate-y-[20%]">
                <div class="image-element relative w-full h-auto">
                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9ydW1haC1saW1hcy5wbmc.webp" alt="rumah-limas" class="img-fluid w-full h-auto">
                </div>
            </div>
            <div class="orn-3 absolute bottom-0 left-0 w-[20%] translate-x-[-50%] translate-y-[10%]">
                <div class="image-element relative w-full h-auto">
                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                </div>
                <div class="orn-4 absolute top-[40%] left-[90%] w-full">
                    <div class="image-element relative w-full h-auto">
                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0yLnBuZw.webp" alt="lotus-2" class="img-fluid w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                    </div>
                </div>
                <div class="orn-5 absolute top-[45%] left-[50%] w-full">
                    <div class="image-element relative w-full h-auto">
                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                    </div>
                </div>
            </div>
            <div class="orn-6 absolute bottom-0 right-0 w-[25%] translate-x-[40%] translate-y-[50%]">
                <div class="image-element relative w-full h-auto">
                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                </div>
                <div class="orn-5 absolute top-[10%] right-[70%] w-[80%] scale-x-[-1]">
                    <div class="image-element relative w-full h-auto">
                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                    </div>
                </div>
            </div>
        </div>
        <div class="container w-full mx-auto px-[1.8rem]">
            <div class="cover-wrapper relative pt-[5rem] pb-0 transition-opacity duration-1000 ease-in-out h-screen">
                <div class="cover-content relative w-[95%] md:w-[60%] lg:w-[40%] h-full pt-[5rem] pb-[3rem] mx-auto text-white color-primary">
                    <div class="cover-content-bg absolute inset-0 bg-[var(--color-primary)] rounded-t-[300px] opacity-60 has-animate" data-anim="slide-up" data-load-animation="true"></div>
                    <div class="cover-body my-auto relative z-50 has-animate" data-anim="zoom-out" data-anim-delay="2500" data-load-animation="true">
                        <div class="cover-description relative w-full p-4 text-center">
                            <div class="relative">
                                <p>We invite you to The Wedding of</p>
                            </div>
                            <div class="title py-4 mb-0">
                                <h1 class="cover_style font-baskervville text-5xl notranslate">Vidi &amp; Hening</h1>
                            </div>
                            <div class="elements-widget relative mt-5 w-full">
                                <button class="btn btn-custom color-secondary" id="btn-envelope">
                                    <strong>Open the Invitation <i class="fas fa-envelope-open-text"></i></strong>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="main-layout" class="bg-red-100 flex flex-col w-full">
        <div class="h-screen hidden lg:fixed lg:block lg:inset-0 w-full lg:w-[61%]">
            <div class="relative h-full w-full overflow-hidden">
                <div class="absolute top-[6rem] left-[8rem] w-full text-left z-10 text-light">
                    <h1 class="font-moles text-[50px] mb-3">Felicia <br> <span>&amp;</span> <br> Alexandro</h1>
                </div>
                <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center" style="background-image: url('https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:1020:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2JhY2tncm91bmQvQjFTbTFYcHJGV05NMU1rNklJNHhBYWV4WGFhRUlrYmlPUHF6eFQ4SS5qcGc.webp');">
                </div>
                <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
                    <div class=" w-[12%] left-0 absolute top-neg-0.5">
                        <div class="relative w-full h-auto">
                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwucG5n.webp" alt="rebung-vertical" class="img-fluid w-full max-w-full h-auto">
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-full h-full pointer-events-none z-20">
                    <div class="absolute bottom-0 left-0 w-[30%] transform translate-x-[-50%] translate-y-[5%]">
                        <div class="relative w-full h-auto">
                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full max-w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                        </div>
                        <div class="absolute top-[40%] left-[90%] w-full">
                            <div class="relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0yLnBuZw.webp" alt="lotus-2" class="img-fluid w-full max-w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                        <div class="absolute top-[45%] left-1/2 w-full">
                            <div class="relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full max-w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 w-[35%] transform translate-x-[40%] translate-y-[45%]">
                        <div class="relative w-full h-auto">
                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full max-w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                        </div>
                        <div class="absolute top-10 right-[70%] w-[80%] transform scaleX-[-1]">
                            <div class="relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full max-w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative z-20 overflow-x-hidden overflow-y-hidden lg:ml-auto lg:w-[39%]">
            <!-- Header section -->
            <section class="relative">
                <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-full pointer-events-none bg-main with-bg has-animate" data-anim="zoom-out" data-load-animation="true">
                        <div class="absolute bottom-0 left-0 w-full h-full">
                            <div class="relative h-[100%] w-[100%]">
                                <img class="mix-blend-multiply w-full h-full object-cover" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90ZXh0dXJlLnBuZw.webp" alt="texture">
                            </div>
                        </div>
                        <div class="absolute top-0 left-[50%] w-[110%] transform translate-x-[-50%]">
                            <div class="relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid w-full max-w-full h-auto">
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-1/2 w-[150%] transform -translate-x-1/2 -translate-y-30">
                            <div class="absolute bottom-[80%] left-[50%] w-[75%] transform translate-x-[-65%]">
                                <div class="has-animate relative w-full h-auto" data-anim="slide-up" data-load-animation="true">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9hbXBlcmEucG5n.webp" alt="ampera" class="img-fluid w-full max-w-full h-auto">
                                </div>
                            </div>
                            <div class="absolute bottom-[10%] left-0 w-[65%] transform -translate-x-[45%] opacity-50">
                                <div class="relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full max-w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                                </div>
                            </div>
                            <div class="absolute bottom-1/2 right-0 w-[65%] transform translate-x-[45%] opacity-50">
                                <div class="relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTIucG5n.webp" alt="tree-2" class="img-fluid w-full max-w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                                </div>
                            </div>
                            <div class="absolute top-10 left-0 w-1/2">
                                <div class="relative w-full h-auto has-animate" data-anim="slide-up" data-load-animation="true">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full max-w-full h-auto">
                                </div>
                            </div>
                            <div class="absolute top-[%] right-0 w-1/2 has-animate" data-anim="slide-up" data-load-animation="true">
                                <div class="relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full max-w-full h-auto">
                                </div>
                            </div>
                            <div class="relative w-full h-auto has-animate" data-anim="slide-left" data-load-animation="true">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3VudGFpbi5wbmc.webp" alt="mountain" class="img-fluid w-full max-w-full h-auto">
                            </div>
                            <div class="absolute bottom-neg-[30%] left-0 w-[120%]">
                                <div class="relative w-full h-auto has-animate" data-anim="slide-left" data-load-animation="true">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sYW5kLnBuZw.webp" alt="land" class="img-fluid w-full max-w-full h-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-full h-full pointer-events-none orn-front z-30 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-full pointer-events-none has-animate" data-anim="zoom-out" data-anim-duration="4500ms" style="animation-duration: 4500ms;" data-load-animation="true">
                        <div class="absolute bottom-0 left-[50%] w-[115%] transform translate-x-[-50%] translate-y-[-10%]">
                            <div class="relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9ydW1haC1saW1hcy5wbmc.webp" alt="rumah-limas" class="img-fluid w-full max-w-full h-auto">
                            </div>
                        </div>
                        <div class="absolute top-[-0.5rem] w-[13%] left-0">
                            <div class="relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full max-w-full h-auto">
                            </div>
                        </div>
                        <div class="absolute top-[-0.5rem] w-[13%] right-0 transform scale-x-[-1]">
                            <div class="relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full max-w-full h-auto">
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-[38%] transform -translate-x-1/2 translate-y-[10%]">
                            <div class="relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full max-w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                            </div>
                            <div class="absolute top-[45%] left-[90%] w-[100%]">
                                <div class="relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0yLnBuZw.webp" alt="lotus-2" class="img-fluid w-full max-w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                </div>
                            </div>
                            <div class="absolute top-[50%] left-[50%] w-[100%]">
                                <div class="relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full max-w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 w-[43%] transform translate-x-[40%] translate-y-[50%]">
                            <div class="relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full max-w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                            </div>
                            <div class="absolute top-[10%] right-[65%] w-[85%] transform scaleX-[-1]">
                                <div class="relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full max-w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:pl-4 lg:pr-4">
                    <div class="relative text-center pt-16 pb-0 min-h-[85vh] lg:min-h-[110vh] flex justify-end items-center flex-col">
                        <div class="relative w-[80%] min-h-[calc(100vh-5rem)] text-center text-[var(--color-light)] pt-[3rem] px-[1rem] pb-[13rem] color-primary">
                            <div class=" absolute inset-0 bg-[var(--color-primary)] rounded-t-[300px] opacity-60 has-animate" data-anim="slide-up" data-load-animation="true"></div>
                            <div class="relative">
                                <div class="relative z-30 has-animate" data-anim="zoom-out" data-anim-delay="2500" data-load-animation="true">
                                    <div class="relative rounded-full w-fit mx-auto mb-8 border border-[var(--color-light)] py-[0.5rem] px-[0.75rem]">
                                        <span class="transform translate-x-[-20%] block font-monte text-[48px] text-[var(--color-light)] leading-[1.2] uppercase">A</span>
                                        <span class="mt-[-80%] transform translate-x-[-20%] block font-monte text-[48px] leading-[1.2] text-[var(--color-light)] uppercase">F</span>
                                    </div>
                                    <h1 class="font-moles text-[50px] mb-3 main_style notranslate has-animate" data-anim="fade-up" style="font-family: Moles; font-size: 50px;" data-load-animation="true">Felicia <span>&amp;</span> Alexandro</h1>
                                    <div class="relative has-animate" data-anim="zoom-out" data-load-animation="true">
                                        <p style="text-align: center;"><span>Welcome to the Wedding of</span></p>
                                    </div>
                                    <div class="mt-[1rem]">
                                        <div class="block mx-auto w-[16px] relative has-animate" data-anim="fade-down" data-load-animation="true">
                                            <div>
                                                <span class="block w-4 h-4 transform rotate-45 border-r-2 border-b-2 border-[var(--color-light)] mb-[3px] ml-1 unu"></span>
                                                <span class="block w-4 h-4 transform rotate-45 border-r-2 border-b-2 border-[var(--color-light)] mb-[3px] ml-1 mt-[-6px]"></span>
                                                <span class="block w-4 h-4 transform rotate-45 border-r-2 border-b-2 border-[var(--color-light)] mb-[3px] ml-1 mt-[-6px]"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="story-section color-primary moveable-section relative pb-12 bg-[var(--color-primary)] text-[var(--color-light)]" data-id="2">
                <div class="image-wrapper relative w-[84%] mb-6">
                    <div class="image-element relative w-full h-auto pt-[100%]">
                        <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2JhY2tncm91bmQvaG9vWUw2ekZ5MldadGhHbGxmdFNnUkFxNWtRWFl4UkpOM1l1NWtlNC5wbmc.webp" alt="story-background" class="absolute top-0 left-0 w-full h-full object-cover" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2JhY2tncm91bmQvaG9vWUw2ekZ5MldadGhHbGxmdFNnUkFxNWtRWFl4UkpOM1l1NWtlNC5wbmc.webp">
                    </div>
                </div>
                <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                    <div class="ornament ornament-right absolute top-[-0.5rem] w-[13%] right-0 transform scale-x-[-1]">
                        <div class="image-element relative w-full h-auto">
                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid max-w-full w-full h-auto">
                        </div>
                    </div>
                </div>
                <div class="story-content relative">
                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none">
                        <div class="rumah absolute bottom-0 right-0 w-[200%] transform translate-x-10 translate-y-12 opacity-20">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9ydW1haC1saW1hcy5wbmc.webp" alt="rumah-limas" class="img-fluid max-w-full w-full h-auto">
                            </div>
                        </div>
                    </div>
                    <div class="container pl-7 pr-7 relative">
                        <div class="flex flex-wrap">
                            <div class="col-md-8 col-lg-11 position-relative relative">
                                <div class="story-description relative text-left p-1">
                                    <div class="title-section text-left relative w-full mb-5 has-animate" data-anim="zoom-out" data-load-animation="true">
                                        <h2 class="block font-baskervville w-full mb-0 font-semibold text-2xl antialiased font-kerning-normal">Our Story</h2>
                                    </div>
                                    <div class="relative mr-16 has-animate" data-anim="fade-up" data-load-animation="true">
                                        <p>Lily and James met unexpectedly in a coffee shop and quickly bonded. After several dates and shared adventures, their love grew strong. Two years later, James proposed on a scenic hill. They married in the same spot, surrounded by family and friends. This marked the beginning of their joyful journey together, a testament to their enduring love that started with a simple coffee shop encounter.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="couple-section moveable-section relative bg-[var(--color-primary)] text-[var(--color-light)]">
                <div class="rebung-horizontal relative -ml-2 w-auto h-24">
                    <div class="image-element relative w-auto h-full">
                        <img class="w-auto h-full transform scale-100" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctaG9yaXpvbnRhbC5wbmc.webp" alt="rebung-horizontal">
                    </div>
                </div>
                <div class="couple-wrapper relative pt-12">
                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none">
                        <div class="orn-1 absolute top-12 left-0 w-[35%] transform -translate-x-1/2">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-left">
                            </div>
                            <div class="orn-2 absolute -top-[30%] right-[15%] w-full">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-right">
                                </div>
                            </div>
                        </div>
                        <div class="orn-3 absolute top-0 right-0 w-[35%] transform translate-x-1/2">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-left">
                            </div>
                            <div class="orn-4 absolute top-1/3 left-1/10 w-full transform -rotate-45">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-right" data-anim-duration="4500ms">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container relative pl-7 pr-7">
                        <div class="flex justify-evenly">
                            <div class="relative text-center">
                                <div class="couple-content relative text-center px-8 mb-12">
                                    <div class="title-section relative w-full text-center mb-5 animation-invisible" data-anim="zoom-out">
                                        <h2 class="block font-baskervville w-full mb-0 font-medium text-[38px] antialiased">Bride &amp; Groom</h2>
                                    </div>
                                    <div class="relative animation-invisible" data-anim="fade-up">
                                        <p><span>I will always be there to laugh with you and love you unconditionally through all the adventures of our lives.&nbsp;</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="couple-body relative bg-[var(--color-primary)]">
                        <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                            <div class="elements-wrapper-absolute absolute bottom-0 left-0 w-full h-full">
                                <div class="image-element relative w-[400%] h-auto">
                                    <img alt="motif-flower" class="align-middle" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3RpZi1mbG93ZXIucG5n.webp">
                                    <img alt="motif-flower" class="align-middle" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3RpZi1mbG93ZXIucG5n.webp">
                                    <img alt="motif-flower" class="align-middle" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3RpZi1mbG93ZXIucG5n.webp">
                                </div>
                            </div>
                        </div>
                        <div class="rebung-horizontal mb-6 hidden relative -ml-2 w-auto h-24">
                            <div class="animation-invisible" data-anim="slide-right">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctaG9yaXpvbnRhbC0yLnBuZw.webp" alt="rebung-horizontal-2">
                            </div>
                        </div>
                        <div class="container container-custom w-full mx-auto p-0">
                            <div class="flex flex-col relative justify-center">
                                <div class="couple relative overflow-hidden">
                                    <div class="rebung-horizontal relative -ml-2 w-auto h-24 mb-6">
                                        <div class="w-full h-auto" data-anim="slide-right">
                                            <img class="w-auto h-full" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctaG9yaXpvbnRhbC0yLnBuZw.webp" alt="rebung-horizontal-2">
                                        </div>
                                    </div>
                                    <div class="image-wrap man relative w-[60%] mx-auto">
                                        <div class="" data-anim="zoom-out">
                                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2NvdXBsZS9EUmNjU2N0MDNwekQ0enBDbmkxNnJkd2tOTHdPaUR5aElOMmJlREZsLnBuZw.webp" alt="couple" class="couple-image man relative w-full h-full object-cover rounded-xl">
                                        </div>
                                    </div>
                                    <div class="couple-description relative text-center py-4 px-4 animation-invisible" data-anim="fade-up">
                                        <h3 class="bride_style relative " style="font-family: Cormorant;">Fellicia Mirae</h3>
                                        <div class="couple-parent relative w-full mb-2">
                                            <div class="couple-parent-description ">
                                                <p class="mb-0">Daughter of</p>
                                            </div>

                                            <div class="couple-parent-name">
                                                <p class="mb-0" style="font-family: Cormorant;">Bapak Sarman Mirae</p>
                                                <p class="mb-0" style="font-family: Cormorant;">&amp;</p>
                                                <p class="mb-0" style="font-family: Cormorant;">Ibu Ranti Sanjaya</p>
                                            </div>
                                        </div>
                                        <div class="sosmed-wrap">
                                            <a href="https://instagram.com/viding.co" class="sosmed color-secondary notranslate" target="_blank">
                                                <small><i class="fab fa-instagram"></i></small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="and hidden flex justify-center items-center w-full relative py-8 z-30"><span>&amp;</span></div>
                                <div class="couple">
                                    <div class="rebung-horizontal relative -ml-2 w-auto h-24 mb-6">
                                        <div class="w-full h-auto" data-anim="slide-right">
                                            <img class="w-auto h-full" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctaG9yaXpvbnRhbC0yLnBuZw.webp" alt="rebung-horizontal-2">
                                        </div>
                                    </div>
                                    <div class="image-wrap woman relative w-[60%] mx-auto">
                                        <div class="" data-anim="zoom-out">
                                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2NvdXBsZS9tVURrNEpBemRIaFJ1bHFhaDlSTk9nWU1Cb3FHVHFNNlVDV2prdk5YLnBuZw.webp" alt="couple" class="couple-image women w-full h-full object-cover rounded-md">
                                        </div>
                                    </div>
                                    <div class="couple-description relative text-center py-4 px-4 animation-invisible" data-anim="fade-up">
                                        <h3 class="bride_style relative animation-invisible" data-anim="fade-down" style="font-family: Cormorant;">Alexandro Wongso</h3>
                                        <div class="couple-parent relative w-full mb-2">
                                            <div class="couple-parent-description">
                                                <p style="margin-bottom: 0px;">Son of</p>
                                            </div>

                                            <div class="couple-parent-name">
                                                <p class="notranslate" style="font-family: Cormorant; margin-bottom: 0px;">Bapak  Zevian Wongso</p>
                                                <p style="font-family: Cormorant; margin-bottom: 0px;">&amp;</p>
                                                <p class="notranslate" style="font-family: Cormorant; margin-bottom: 0px;">Ibu Shanti Sandoro</p>
                                            </div>
                                        </div>
                                        <div class="sosmed-wrap">
                                            <a href="https://instagram.com/viding.co" class="sosmed color-secondary notranslate" target="_blank">
                                                <small><i class="fab fa-instagram"></i></small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reminder-wrap relative w-full min-h-[50vh] md:min-h-[60vh] lg:min-h-[80vh] pt-12 bg-[var(--color-main)]">
                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                        <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none bg-[var(--color-main)] animation-invisible" data-anim="zoom-out">
                            <div class="elements-wrapper-absolute absolute bottom-0 left-0 w-full h-full">
                                <div class="background-element relative w-full h-full">
                                    <img class="mix-blend-multiply" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90ZXh0dXJlLnBuZw.webp" alt="texture">
                                </div>
                            </div>
                            <div class="sky absolute top-0 left-1/2 w-[110%] transform -translate-x-1/2">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid max-w-full w-full h-auto">
                                </div>
                            </div>
                            <div class="mountain absolute bottom-0 left-1/2 w-[150%] transform -translate-x-1/2">
                                <div class="ampera absolute bottom-[70%] left-1/2 w-[80%] transform -translate-x-[58%]">
                                    <div class="relative w-full h-auto" data-anim="slide-up">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9hbXBlcmEucG5n.webp" alt="ampera" class="img-fluid max-w-full w-full h-auto">
                                    </div>
                                </div>
                                <div class="orn-1 absolute bottom-[10%] left-0 w-[65%] transform -translate-x-[45%] opacity-50">
                                    <div class="image-element relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-left">
                                    </div>
                                </div>
                                <div class="orn-2 absolute bottom-1/2 right-0 w-[65%] transform translate-x-[45%] opacity-50">
                                    <div class="image-element relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTIucG5n.webp" alt="tree-2" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-left">
                                    </div>
                                </div>
                                <div class="orn-7 absolute top-[10%] left-0 w-1/2">
                                    <div class="relative w-full h-auto" data-anim="slide-up">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid max-w-full w-full h-auto">
                                    </div>
                                </div>
                                <div class="orn-8 absolute top-[15%] right-0 w-1/2">
                                    <div class="relative w-full h-auto" data-anim="slide-up">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid max-w-full w-full h-auto">
                                    </div>
                                </div>
                                <div class="relative w-full h-auto" data-anim="slide-left">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3VudGFpbi5wbmc.webp" alt="mountain" class="img-fluid max-w-full w-full h-auto">
                                </div>
                                <div class="land absolute bottom-0 left-0 w-[120%]">
                                    <div class="relative w-full h-auto" data-anim="slide-left">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sYW5kLnBuZw.webp" alt="land" class="img-fluid max-w-full w-full h-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ornaments-wrapper orn-front absolute top-0 left-0 w-full h-full pointer-events-none z-30 overflow-hidden">
                        <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none animation-invisible" data-anim="zoom-out" data-anim-duration="4500ms">
                            <div class="ornament ornament-left absolute top-[-0.5rem] w-[13%] left-0">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid max-w-full w-full h-auto">
                                </div>
                            </div>
                            <div class="ornament ornament-right absolute top-[-0.5rem] w-[13%] right-0">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid max-w-full w-full h-auto">
                                </div>
                            </div>
                            <div class="orn-3 absolute bottom-0 left-0 w-[38%] transform -translate-x-1/2 translate-y-[10%]">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-left">
                                </div>
                                <div class="orn-4 absolute top-[45%] left-[90%] w-full">
                                    <div class="image-element relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0yLnBuZw.webp" alt="lotus-2" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-left">
                                    </div>
                                </div>
                                <div class="orn-5 absolute top-1/2 left-1/2 w-full transform -translate-x-1/2 -translate-y-1/2">
                                    <div class="image-element relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-left">
                                    </div>
                                </div>
                            </div>
                            <div class="orn-6 absolute bottom-0 right-0 w-[43%] transform translate-x-[40%] translate-y-[50%]">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-left">
                                </div>
                                <div class="orn-5">
                                    <div class="image-element relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid max-w-full w-full h-auto animate-loop animation-invisible" data-anim="rotate-left">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reminder-content absolute top-1/2 left-1/2 w-full transform -translate-x-1/2 -translate-y-1/2 z-50">
                        <div class="countdown color-primary animation-invisible bg-[var(--color-primary)] opacity-70 rounded-2xl flex text-center justify-center relative min-w-[70%] w-fit gap-6 z-30 p-2.5 px-6 py-3.5 text-[var(--color-light)] mx-auto" date="12/31/2024 12:00:00 UTC" data-anim="zoom-out">
                            <div class="days flex flex-col justify-center items-center relative">
                                <p class="angka font-medium text-[36px]">166</p>
                                <p class="huruf text-[14px] font-semibold">Days</p>
                            </div>
                            <div class="hours">
                                <p class="angka font-medium text-[36px]">8</p>
                                <p class="huruf text-[14px] font-semibold">Hours</p>
                            </div>
                            <div class="minutes">
                                <p class="angka font-medium text-[36px]">20</p>
                                <p class="huruf text-[14px] font-semibold">Mins</p>
                            </div>
                            <div class="seconds">
                                <p class="angka font-medium text-[36px]">6</p>
                                <p class="huruf text-[14px] font-semibold">Secs</p>
                            </div>
                        </div>
                        <a href="https://www.google.com/calendar/render?action=TEMPLATE&amp;text=The+Wedding+of+Alexandro+%26+Felicia&amp;details=Visit+the+invitation+here+<a href='https%3A%2F%2Fvidingdemo.viding.co'>https%3A%2F%2Fvidingdemo.viding.co</a>&amp;dates=20241231T190000%2F20241231T210000&amp;ctz=Asia%2FJakarta" target="_blank" class="btn btn-custom color-secondary btn-reminder bg-[var(--color-secondary)] py-2 px-8 text-[var(--text-button)] cursor-pointer font-medium leading-3 text-center border w-fit rounded-full z-30 relative flex items-center gap-2 transition-all duration-200 ease-in-out no-underline my-6 mx-auto animation-invisible" data-anim="fade-up">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2411_134)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 0.625C5 0.45924 4.93415 0.300269 4.81694 0.183058C4.69973 0.065848 4.54076 0 4.375 0C4.20924 0 4.05027 0.065848 3.93306 0.183058C3.81585 0.300269 3.75 0.45924 3.75 0.625V1.25H2.5C1.83696 1.25 1.20107 1.51339 0.732233 1.98223C0.263392 2.45107 0 3.08696 0 3.75L0 17.5C0 18.163 0.263392 18.7989 0.732233 19.2678C1.20107 19.7366 1.83696 20 2.5 20H17.5C18.163 20 18.7989 19.7366 19.2678 19.2678C19.7366 18.7989 20 18.163 20 17.5V3.75C20 3.08696 19.7366 2.45107 19.2678 1.98223C18.7989 1.51339 18.163 1.25 17.5 1.25H16.25V0.625C16.25 0.45924 16.1842 0.300269 16.0669 0.183058C15.9497 0.065848 15.7908 0 15.625 0C15.4592 0 15.3003 0.065848 15.1831 0.183058C15.0658 0.300269 15 0.45924 15 0.625V1.25H5V0.625ZM1.25 17.5V5H18.75V17.5C18.75 17.8315 18.6183 18.1495 18.3839 18.3839C18.1495 18.6183 17.8315 18.75 17.5 18.75H2.5C2.16848 18.75 1.85054 18.6183 1.61612 18.3839C1.3817 18.1495 1.25 17.8315 1.25 17.5ZM10 9.36625C12.08 7.2275 17.2812 10.97 10 15.7812C2.71875 10.9688 7.92 7.2275 10 9.36625Z" fill="#F9FDF9"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2411_134">
                                        <rect width="20" height="20" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            Save the Date
                        </a>
                    </div>
                </div>
            </section>
            <section class="gallery-section moveable-section relative bg-[var(--color-primary)]">
                <div class="mx-3 py-3">
                    <div id="default-carousel" class="relative" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="overflow-hidden relative h-[70vh] lg:h-[82vh]">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:720:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvYTRsTUNIaWJsTzBxMEd2RTBWNHNsREdTWDVJZnUwNEFpanV2TEZrWS5wbmc.webp" alt="Gallery Image 1" class="w-full  object-cover">
                                    </div>
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvQzBzSTRJM0N5RDZTbGhUeUNoZ09ET1p0b2FLZ3huUXZKT3RzZjJ4Zy5wbmc.webp" alt="Gallery Image 2" class="w-full  object-cover">
                                    </div>
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvQzBzSTRJM0N5RDZTbGhUeUNoZ09ET1p0b2FLZ3huUXZKT3RzZjJ4Zy5wbmc.webp" alt="Gallery Image 2" class="w-full  object-cover">
                                    </div>
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvQzBzSTRJM0N5RDZTbGhUeUNoZ09ET1p0b2FLZ3huUXZKT3RzZjJ4Zy5wbmc.webp" alt="Gallery Image 2" class="w-full  object-cover">
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:720:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvYTRsTUNIaWJsTzBxMEd2RTBWNHNsREdTWDVJZnUwNEFpanV2TEZrWS5wbmc.webp" alt="Gallery Image 1" class="w-full  object-cover">
                                    </div>
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvQzBzSTRJM0N5RDZTbGhUeUNoZ09ET1p0b2FLZ3huUXZKT3RzZjJ4Zy5wbmc.webp" alt="Gallery Image 2" class="w-full  object-cover">
                                    </div>
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvQzBzSTRJM0N5RDZTbGhUeUNoZ09ET1p0b2FLZ3huUXZKT3RzZjJ4Zy5wbmc.webp" alt="Gallery Image 2" class="w-full  object-cover">
                                    </div>
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvQzBzSTRJM0N5RDZTbGhUeUNoZ09ET1p0b2FLZ3huUXZKT3RzZjJ4Zy5wbmc.webp" alt="Gallery Image 2" class="w-full  object-cover">
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:720:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvYTRsTUNIaWJsTzBxMEd2RTBWNHNsREdTWDVJZnUwNEFpanV2TEZrWS5wbmc.webp" alt="Gallery Image 1" class="w-full  object-cover">
                                    </div>
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvQzBzSTRJM0N5RDZTbGhUeUNoZ09ET1p0b2FLZ3huUXZKT3RzZjJ4Zy5wbmc.webp" alt="Gallery Image 2" class="w-full  object-cover">
                                    </div>
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvb2NSU1F3ckp1aHliSjZIVUluNUdtMlkySWtvQXlRUURYQlphd3RYMS5wbmc.webp" alt="Gallery Image 2" class="w-full  object-cover">
                                    </div>
                                    <div class="bg-gray-200 overflow-hidden shadow-md">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dhbGxlcnkvb2NSU1F3ckp1aHliSjZIVUluNUdtMlkySWtvQXlRUURYQlphd3RYMS5wbmc.webp" alt="Gallery Image 2" class="w-full  object-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex justify-center items-center w-14 h-14 rounded-full bg-[var(--color-secondary)] group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex justify-center items-center w-14 h-14 rounded-full bg-[var(--color-secondary)] group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>
                    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                </div>
                <div class="relative mt-3 pb-5">
                    <div class="pl-7 pr-7 relative">
                        <div class="flex justify-center">
                            <div class="h-auto w-full ratio-16x9 animation-invisible" data-anim="fade-down">
                                <iframe class="w-full h-auto min-h-60 lg:min-h-80" id="gallery_player" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="WHAT IS VIDING?" src="https://www.youtube.com/embed/SzPrFMFqFwM?enablejsapi=1&amp;origin=https%3A%2F%2Fvidingdemo.viding.co&amp;widgetid=1"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="moveable-section bg-[var(--color-main)] overflow-hidden">
                <!-- Vanue & Event section -->
                <section class="venue-section relative py-12">
                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none">
                        <div class="sky absolute top-0 left-1/2 w-[180%] transform -translate-x-1/2 -translate-y-[12%]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                        <div class="orn-1 absolute top-0 left-0 w-1/2 -translate-x-[55%]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                        <div class="orn-2 absolute top-0 right-0 w-1/2 translate-x-[55%]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                    </div>
                    <div class="venue-wrapper relative">
                        <div class="container pl-[1.8rem] pr-[1.8rem] relative">
                            <div class="flex justify-center">
                                <div class="relative">
                                    <div class="venue-description relative text-center p-7 mb-[3rem] bg-[--color-primary] rounded-2xl opacity-70">
                                        <div class="title-section z-30 relative w-full text-center mb-[1.25rem] has-animate" data-anim="zoom-out" data-load-animation="true">
                                            <h2 class="block text-[var(--color-light)] w-full mb-0 font-medium text-[38px]">Lokasi</h2>
                                        </div>
                                        <div class="relative text-[var(--color-light)] has-animate" data-anim="fade-up" data-load-animation="true">
                                            <p>Dengan penuh rasa hormat kami mengharapkan kehadiran Bapak/Ibu/Saudara sekalian pada Acara Pernikahan kami yang akan kami laksanakan pada :</p>
                                            <h5><strong>Minggu, 5 Mei 2025</strong></h5>
                                            <p>Besar harapan kami akan kehadiran Bapak/Ibu/Saudara sekalian tentunya dengan memperhatikan anjuran dari Pemerintah. Untuk itu kami memberlakukan protokol kesehatan sebagaimana instruksi dibawah ini</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="venue-content relative">
                            <div class="container px-[1.8rem]">
                                <div class="flex flex-col justify-center row-venue">
                                    <div class="relative w-full flex-auto">
                                        <div class="card rounded-2xl bg-[var(--color-primary)] text-[var(--color-light)] border-none text-left overflow-hidden">
                                            <div class="rebung-horizontal relative -ml-[0.5rem] w-auto h-full">
                                                <div class="image-element relative w-[160%] h-auto">
                                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctaG9yaXpvbnRhbC5wbmc.webp" alt="rebung-horizontal">
                                                </div>
                                            </div>
                                            <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden rounded-2xl">
                                                <div class="orn-10 absolute bottom-0 left-0 w-[80%] transform -translate-x-[45%] translate-y-[80%]">
                                                    <div class="image-element relative w-full h-auto has-animate" data-anim="fade-up" data-load-animation="true">
                                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                                    </div>
                                                </div>
                                                <div class="orn-11 absolute bottom-0 right-0 w-[80%] transform translate-x-[20%] translate-y-[85%]">
                                                    <div class="image-element relative w-full h-auto has-animate" data-anim="fade-up" data-load-animation="true">
                                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 flex-1">
                                                <div class="event-name relative w-full mb-4 rounded-b-lg text-center overflow-hidden">
                                                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none has-animate" data-anim="zoom-out" data-load-animation="true">
                                                        <div class="sky absolute top-0 left-1/2 w-[180%] -translate-x-1/2 -translate-y-12">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                        <div class="ampera absolute bottom-0 left-1/2 w-[150%] -translate-x-[60%]">
                                                            <div class="image-element relative w-full h-auto has-animate" data-anim="slide-up" data-load-animation="true">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9hbXBlcmEucG5n.webp" alt="ampera" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                        <div class="orn-3 absolute bottom-0 left-0 w-1/2 -translate-x-[55%] translate-y-[50%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                        <div class="orn-4 absolute bottom-0 right-0 w-1/2 translate-x-[55%] translate-y-[50%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                        <div class="orn-5 absolute bottom-0 left-0 w-1/2 translate-x-[-5%] translate-y-[75%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                        <div class="orn-6 absolute bottom-0 right-0 w-1/2 translate-x-[5%] translate-y-[75%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                        <div class="orn-7 absolute bottom-0 left-0 w-2/5 -translate-x-[40%] translate-y-[50%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                        <div class="orn-8 absolute bottom-0 right-0 w-[45%] translate-x-[25%] translate-y-[55%]">
                                                            <div class="image-element">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                        <div class="orn-9 absolute bottom-0 left-1/2 w-[42%] -translate-x-1/2 translate-y-[72%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-name-body relative py-12 px-4 pb-20 z-50 has-animate" data-anim="zoom-out" data-anim-delay="2000" data-load-animation="true">
                                                        <h4 class="text-[32px] font-baskervville">Acara Pernikahan</h4>
                                                        <span class="mb-0 text-base font-semibold">Monday,</span>
                                                        <div class="date relative p-2 w-full">
                                                            <h5 class="font-baskervville mb-0 text-8xl">05</h5>
                                                            <div class="line color__button__trans w-[45px] h-[1px] bg-white my-[0.2rem] mx-auto mb-[0.5rem]"></div>
                                                        </div>
                                                        <span class="mb-0 text-[16px] font-semibold">May 2025</span>
                                                        <p class="mb-0 text-[16px] font-semibold">08:00
                                                            -
                                                            10:00
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="event-place rounded-lg relative">
                                                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                                                        <div class="ornament ornament-right absolute top-[-0.5rem] w-[13%] right-0 transform scale-x-[-1]">
                                                            <div class="image-element relative w-full h-auto has-animate" data-anim="fade-right" data-load-animation="true">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-place-body relative py-0 px-[4rem] pb-[2rem] pl-[1.5rem] has-animate" data-anim="fade-right" data-load-animation="true">
                                                        <div class="event-description relative mb-8">
                                                            <p><em><strong>Dress Code :</strong></em><br>We kindly ask that you wear these colors to our special day</p>
                                                            <p><img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL3VwbG9hZHMvQ3Y1T3FSSjRZWEYyV052ejhFbXJ6U3dZTTJ0R0x4elpPcEkyVDZTYy5wbmc.png" alt="" width="150" height="150"></p>
                                                            <p>Any kind of <strong>pastel</strong></p>
                                                        </div>
                                                        <div class="ribbon-venue relative mb-4" data-animationloop="keyframe">
                                                            <div data-anim="zoom-out" class="" data-load-animation="true">
                                                                <svg class="w-[40px] h-auto text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 560 560" style="enable-background:new 0 0 560 560;overflow: visible;" xml:space="preserve">
                                                                    <g id="Layer_1">
                                                                    </g>
                                                                    <g id="Layer_3">
                                                                        <g>
                                                                            <g>
                                                                                <path class="st0" d="M273.3,48.3c34.1,0,66.1,13.3,90.3,37.4c24.1,24.1,37.4,56.2,37.4,90.3c0,93.4-63.7,165.3-105.8,212.8c-4.4,4.9-8.5,9.6-12.3,14c-2.9,3.4-6.3,5.2-9.5,5.2c-4.1,0-7.4-2.8-9.4-5.2c-4.6-5.3-9.4-10.7-14.5-16.5c-20.4-23-43.5-49.1-63-80c-22.1-35-34.9-69.1-39.2-104.3c-4.8-39.7,6.8-79.6,31.9-109.4c22.5-26.7,53.5-42.4,87.3-44.2C268.7,48.4,271.1,48.3,273.3,48.3 M273.3,29.3c-2.6,0-5.2,0.1-7.8,0.2c-87.5,4.6-147.7,87.9-137.1,174.9c11.7,96.3,80.1,163.3,121.1,210.8c6.8,7.8,15.3,11.8,23.8,11.8c8.6,0,17.1-3.9,23.9-11.8C338.4,367.6,420,286.7,420,176C420,95,354.3,29.3,273.3,29.3L273.3,29.3z"></path>
                                                                            </g>
                                                                            <g>
                                                                                <path class="st0" d="M275.1,118c30.6,0,55.5,24.9,55.5,55.5S305.7,229,275.1,229s-55.5-24.9-55.5-55.5S244.5,118,275.1,118 M275.1,99c-41.1,0-74.5,33.3-74.5,74.5S234,248,275.1,248s74.5-33.3,74.5-74.5S316.2,99,275.1,99L275.1,99z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Layer_2">

                                                                        <ellipse class="st1" cx="272.8" cy="437.9" rx="146.4" ry="40.9"></ellipse>
                                                                        <ellipse class="st0 dot" cx="273.6" cy="437.9" rx="63.1" ry="17"></ellipse>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <h4 class="text-2xl p-1">Hotel Shangri-La</h4>
                                                        <span class="">Jl. Jend. Sudirman No.Kav. 1, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10220</span>
                                                        <div class="widget-elements mt-4">
                                                            <a class="btn border bg-[var(--color-secondary)] py-2 px-8 transition-all duration-300 ease-in-out text-button rounded-full mx-auto color-[var(--color-secondary)]" aria-label="button maps" href="#" data-bs-toggle="modal" data-bs-target="#event2416">Location</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative w-full flex-auto mt-6">
                                        <div class="card rounded-2xl bg-[var(--color-primary)] text-[var(--color-light)] border-none text-left overflow-hidden">
                                            <div class="rebung-horizontal relative -ml-[0.5rem] w-auto h-full">
                                                <div class="image-element relative w-[160%] h-auto">
                                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctaG9yaXpvbnRhbC5wbmc.webp" alt="rebung-horizontal">
                                                </div>
                                            </div>
                                            <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden rounded-2xl">
                                                <div class="orn-10 absolute bottom-0 left-0 w-[80%] transform -translate-x-[45%] translate-y-[80%]">
                                                    <div class="image-element relative w-full h-auto has-animate" data-anim="fade-up" data-load-animation="true">
                                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                                    </div>
                                                </div>
                                                <div class="orn-11 absolute bottom-0 right-0 w-[80%] transform translate-x-[20%] translate-y-[85%]">
                                                    <div class="image-element relative w-full h-auto has-animate" data-anim="fade-up" data-load-animation="true">
                                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 flex-1">
                                                <div class="event-name relative w-full mb-4 rounded-b-lg text-center overflow-hidden">
                                                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none has-animate" data-anim="zoom-out" data-load-animation="true">
                                                        <div class="sky absolute top-0 left-1/2 w-[180%] -translate-x-1/2 -translate-y-12">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                        <div class="ampera absolute bottom-0 left-1/2 w-[150%] -translate-x-[60%]">
                                                            <div class="image-element relative w-full h-auto has-animate" data-anim="slide-up" data-load-animation="true">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9hbXBlcmEucG5n.webp" alt="ampera" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                        <div class="orn-3 absolute bottom-0 left-0 w-1/2 -translate-x-[55%] translate-y-[50%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                        <div class="orn-4 absolute bottom-0 right-0 w-1/2 translate-x-[55%] translate-y-[50%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                        <div class="orn-5 absolute bottom-0 left-0 w-1/2 translate-x-[-5%] translate-y-[75%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                        <div class="orn-6 absolute bottom-0 right-0 w-1/2 translate-x-[5%] translate-y-[75%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                        <div class="orn-7 absolute bottom-0 left-0 w-2/5 -translate-x-[40%] translate-y-[50%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                        <div class="orn-8 absolute bottom-0 right-0 w-[45%] translate-x-[25%] translate-y-[55%]">
                                                            <div class="image-element">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                        <div class="orn-9 absolute bottom-0 left-1/2 w-[42%] -translate-x-1/2 translate-y-[72%]">
                                                            <div class="image-element relative w-full h-auto">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-name-body relative py-12 px-4 pb-20 z-50 has-animate" data-anim="zoom-out" data-anim-delay="2000" data-load-animation="true">
                                                        <h4 class="text-[32px] font-baskervville">Resepsi</h4>
                                                        <span class="mb-0 text-base font-semibold">Monday,</span>
                                                        <div class="date relative p-2 w-full">
                                                            <h5 class="font-baskervville mb-0 text-8xl">05</h5>
                                                            <div class="line color__button__trans w-[45px] h-[1px] bg-white my-[0.2rem] mx-auto mb-[0.5rem]"></div>
                                                        </div>
                                                        <span class="mb-0 text-[16px] font-semibold">May 2025</span>
                                                        <p class="mb-0 text-[16px] font-semibold">15:00
                                                            -
                                                            17:00
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="event-place rounded-lg relative">
                                                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                                                        <div class="ornament ornament-right absolute top-[-0.5rem] w-[13%] right-0 transform scale-x-[-1]">
                                                            <div class="image-element relative w-full h-auto has-animate" data-anim="fade-right" data-load-animation="true">
                                                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full h-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-place-body relative py-0 px-[4rem] pb-[2rem] pl-[1.5rem] has-animate" data-anim="fade-right" data-load-animation="true">
                                                        <div class="event-description relative mb-8">
                                                            <p><em><strong>Dress Code :</strong></em><br>We kindly ask that you wear these colors to our special day</p>
                                                            <p><img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL3VwbG9hZHMvQ3Y1T3FSSjRZWEYyV052ejhFbXJ6U3dZTTJ0R0x4elpPcEkyVDZTYy5wbmc.png" alt="" width="150" height="150"></p>
                                                            <p>Any kind of <strong>pastel</strong></p>
                                                        </div>
                                                        <div class="ribbon-venue relative mb-4" data-animationloop="keyframe">
                                                            <div data-anim="zoom-out" class="" data-load-animation="true">
                                                                <svg class="w-[40px] h-auto text-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 560 560" style="enable-background:new 0 0 560 560;overflow: visible;" xml:space="preserve">
                                                                    <g id="Layer_1">
                                                                    </g>
                                                                    <g id="Layer_3">
                                                                        <g>
                                                                            <g>
                                                                                <path class="st0" d="M273.3,48.3c34.1,0,66.1,13.3,90.3,37.4c24.1,24.1,37.4,56.2,37.4,90.3c0,93.4-63.7,165.3-105.8,212.8c-4.4,4.9-8.5,9.6-12.3,14c-2.9,3.4-6.3,5.2-9.5,5.2c-4.1,0-7.4-2.8-9.4-5.2c-4.6-5.3-9.4-10.7-14.5-16.5c-20.4-23-43.5-49.1-63-80c-22.1-35-34.9-69.1-39.2-104.3c-4.8-39.7,6.8-79.6,31.9-109.4c22.5-26.7,53.5-42.4,87.3-44.2C268.7,48.4,271.1,48.3,273.3,48.3 M273.3,29.3c-2.6,0-5.2,0.1-7.8,0.2c-87.5,4.6-147.7,87.9-137.1,174.9c11.7,96.3,80.1,163.3,121.1,210.8c6.8,7.8,15.3,11.8,23.8,11.8c8.6,0,17.1-3.9,23.9-11.8C338.4,367.6,420,286.7,420,176C420,95,354.3,29.3,273.3,29.3L273.3,29.3z"></path>
                                                                            </g>
                                                                            <g>
                                                                                <path class="st0" d="M275.1,118c30.6,0,55.5,24.9,55.5,55.5S305.7,229,275.1,229s-55.5-24.9-55.5-55.5S244.5,118,275.1,118 M275.1,99c-41.1,0-74.5,33.3-74.5,74.5S234,248,275.1,248s74.5-33.3,74.5-74.5S316.2,99,275.1,99L275.1,99z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g id="Layer_2">

                                                                        <ellipse class="st1" cx="272.8" cy="437.9" rx="146.4" ry="40.9"></ellipse>
                                                                        <ellipse class="st0 dot" cx="273.6" cy="437.9" rx="63.1" ry="17"></ellipse>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <h4 class="text-2xl p-1">Hotel Shangri-La</h4>
                                                        <span class="">Jl. Jend. Sudirman No.Kav. 1, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10220</span>
                                                        <div class="widget-elements mt-4">
                                                            <a class="btn border bg-[var(--color-secondary)] py-2 px-8 transition-all duration-300 ease-in-out text-button rounded-full mx-auto color-[var(--color-secondary)]" aria-label="button maps" href="#" data-bs-toggle="modal" data-bs-target="#event2416">Location</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @livewire('r-s-v-p.index')
            </section>
            <section class="wishes-section moveable-section">
                <div class="wishes-wrapper-form relative pt-12 bg-[var(--color-main)] text-light color-[var(--color-primary)] overflow-hidden">
                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                        <div class="sky absolute top-0 left-1/2 w-[150%] transform -translate-x-1/2 -translate-y-[15%]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                        <div class="ampera absolute bottom-0 left-1/2 w-[140%] transform -translate-x-[60%]">
                            <div class="image-element relative w-full h-auto has-animate" data-anim="slide-up" data-load-animation="true">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9hbXBlcmEucG5n.webp" alt="ampera" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                        <div class="orn-1 absolute top-0 left-0 w-[80%] transform -translate-x-[75%] -translate-y-[10%]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                        <div class="orn-2 absolute top-0 right-0 w-[95%] transform translate-x-[75%] -translate-y-[5%]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTIucG5n.webp" alt="tree-2" class="img-fluid w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                        <div class="orn-3 absolute bottom-0 left-0 w-full transform -translate-x-[65%] translate-y-[75%] scale-x-[-1]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTIucG5n.webp" alt="tree-2" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                        <div class="orn-4 absolute bottom-0 right-0 w-full transform translate-x-[60%] translate-y-[80%]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTIucG5n.webp" alt="tree-2" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                        <div class="orn-5 absolute bottom-0 left-0 w-[35%] transform translate-x-[-50%] translate-y-[5%]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                        <div class="orn-6 absolute bottom-0 right-0 w-[38%] transform translate-x-[60%] translate-y-[5%] scale-x-[-1]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                    </div>
                    <div class="container px-[1.8rem] relative">
                        <div class="flex justify-center">
                            <div class="relative">
                                <div class="card card-form relative flex flex-col min-w-0 break-words bg-transparent bg-clip-border border-none rounded-md">
                                    <div class="card-body pt-0 px-8 pb-8">
                                        <div class="title-section relative w-full text-center mb-5 has-animate" data-anim="zoom-out" data-load-animation="true">
                                            <h2 class="block w-full mb-0 font-medium text-[38px] antialiased tracking-tight">Wedding Wishes</h2>
                                        </div>
                                        <div class="widget-wrapper has-animate" data-anim="zoom-out-up" data-load-animation="true">
                                            <div class="guestbook_form_wrapper">
                                                <form class="relative color__button__trans" action="https://viding.co/bookstore" method="post" id="guestbook_form" novalidate="novalidate">
                                                    <input type="hidden" name="_token" value="XRXLjJ1iCuFhS6zJyciLBfSqDUfPLqtElNgDvA1S">                                                                <input type="hidden" name="domain" value="dummyaccount.viding.co">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label mb-0">Name</label>
                                                        <input type="text" name="name" value="" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="alamat" class="form-label mb-0">Address</label>
                                                        <input type="text" name="alamat" value="" class="form-control">
                                                    </div>
                                                    <input type="text" name="robot_field" class="hidden" placeholder="Enter your message"><input type="text" name="guest_type" class="hidden" value=""><input type="number" id="comment_length" name="comment_length" class="hidden" value="0"><div class="textarea-wrapper">
                                                        <label for="comment" class="form-label">Write your wishes</label>
                                                        <textarea required="" name="comment" cols="30" rows="5" class="form-control" maxlength="300"></textarea>
                                                    </div>
                                                    <div id="charCountContainer" style="margin-bottom: 3px;"><div id="charCount" style="text-align: left;">Characters left: 300</div>
                                                    </div>
                                                    <button type="submit" class="btn btn-custom color-secondary m-auto w-full" id="guestbook_submit_btn">Send</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wishes-preview bg-[var(--color-primary)] relative">
                    <div class="ornaments-wrapper ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                        <div class="elements-wrapper-absolute absolute bottom-0 left-0 w-full h-full">
                            <div class="background-element relative w-[190%] h-auto">
                                <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3RpZi1mbG93ZXIucG5n.webp" alt="motif-flower" class=" ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3RpZi1mbG93ZXIucG5n.webp">
                            </div>
                        </div>
                        <div class="ornament absolute top-[-0.5rem] w-[13%] left-0 ornament-left">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                        <div class="ornament absolute top-[-0.5rem] w-[13%] right-0 transform scale-x-[-1] ornament-right">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                    </div>
                    <div class="container px-[1.8rem] relative">
                        <div class="flex justify-center">
                            <div class="mt-3">
                                <div class="card relative flex flex-col min-w-0 break-words bg-transparent bg-clip-border border-none rounded-md">
                                    <div class="card-body overflow-hidden py-[2rem] px-0 text-left color__button__trans">
                                        <div id="wishes_wrapper" data-url="https://viding.co/booksfour/dummyaccount.viding.co"><div class="wishes has-animate" data-anim="zoom-in-up" id="wishes-container" data-load-animation="true">
                                                <div class="wish mb-6 grid grid-cols-[auto_1fr] w-96 gap-4">
                                                    <div class="wish-badge bg-[#f0f0f0] w-[35px] aspect-square flex justify-center items-center rounded-full">
                                                        <h6>V</h6>
                                                    </div>
                                                    <div class="wish-description p-4 bg-white/80 rounded-md relative">
                                                        <h6 class="text-[1.17rem] font-bold">Viding</h6>
                                                        <p>
                                                            Happy Wedding
                                                        </p>
                                                        <small class="text-muted">4 months ago
                                                            at 13:27</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="egift-section bg-[var(--color-main)] relative py-12 moveable-section" data-id="5">
                <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                    <div class="ornament ornament-right absolute top-[-0.5rem] w-[13%] right-0 transform scale-x-[-1] ornament-right">
                        <div class="image-element relative w-full h-auto">
                            <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full h-auto ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp">
                            <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full h-auto ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp">
                        </div>
                    </div>
                    <div class="orn-1 absolute top-0 right-0 w-[85%] transform translate-x-[60%] -translate-y-[32%]">
                        <div class="image-element relative w-full h-auto">
                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                        </div>
                    </div>
                    <div class="orn-2 absolute top-4 right-0 w-[35%] transform translate-x-[40%] rotate-[-20deg] scale-x-[-1]">
                        <div class="image-element relative w-full h-auto">
                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0yLnBuZw.webp" alt="lotus-2" class="img-fluid w-full h-auto animate-loop has-animate" data-anim="rotate-left" data-load-animation="true">
                        </div>
                    </div>
                </div>
                <div class="container px-[1.8rem] relative">
                    <div class="flex">
                        <div class="text-center relative">
                            <div class="gift-wrap relative text-left pr-4 mb-8">
                                <div class="title-section text-left text-white has-animate" data-anim="zoom-out" data-load-animation="true">
                                    <h2 class="block w-full mb-4 font-baskervville font-medium text-[38px]">E-Angpao</h2>
                                </div>
                                <div class="tabs-gift relative flex items-center bg-white bg-opacity-20 justify-center w-fit p-0.5 lg:p-1 rounded-3xl gap-2 inherit ">
                                    <button class="btn btn-custom flex items-center text-white justify-center color__button__trans color-secondary" data-tab=".angpao">
                                        <div class="glider"></div>
                                        <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.668 8.75H8.33464C7.56244 8.75438 6.82311 9.06307 6.27708 9.60911C5.73104 10.1551 5.42234 10.8945 5.41797 11.6667V28.3333C5.42234 29.1055 5.73104 29.8449 6.27708 30.3909C6.82311 30.9369 7.56244 31.2456 8.33464 31.25H31.668C32.4402 31.2456 33.1795 30.9369 33.7255 30.3909C34.2716 29.8449 34.5803 29.1055 34.5846 28.3333V11.6667C34.5803 10.8945 34.2716 10.1551 33.7255 9.60911C33.1795 9.06307 32.4402 8.75438 31.668 8.75ZM32.0846 11.6667V14.45H31.7346C31.5354 14.4749 31.3339 14.4749 31.1346 14.45H30.918C30.7297 14.4122 30.5455 14.3564 30.368 14.2833H30.168C29.93 14.1681 29.7152 14.0099 29.5346 13.8167C29.2874 13.5726 29.0909 13.282 28.9564 12.9616C28.822 12.6412 28.7523 12.2974 28.7513 11.95C28.7518 11.7186 28.7854 11.4885 28.8513 11.2667H31.668C31.7756 11.2666 31.8792 11.3082 31.9569 11.3828C32.0345 11.4573 32.0803 11.5591 32.0846 11.6667ZM8.33464 11.25H11.1513C11.2172 11.4718 11.2509 11.7019 11.2513 11.9333C11.2503 12.2808 11.1806 12.6246 11.0462 12.9449C10.9117 13.2653 10.7152 13.5559 10.468 13.8C10.283 13.9882 10.0692 14.1458 9.83464 14.2667H9.61797C9.45479 14.3471 9.28073 14.4033 9.1013 14.4333H8.86797C8.66875 14.4583 8.46719 14.4583 8.26797 14.4333H7.91797V11.6667C7.91797 11.5562 7.96187 11.4502 8.04001 11.372C8.11815 11.2939 8.22413 11.25 8.33464 11.25ZM7.91797 28.3333V25.55H8.26797C8.46719 25.5251 8.66875 25.5251 8.86797 25.55H9.08464C9.27474 25.5801 9.45981 25.6362 9.63464 25.7167H9.83464C10.0692 25.8376 10.283 25.9951 10.468 26.1833C10.7152 26.4274 10.9117 26.718 11.0462 27.0384C11.1806 27.3588 11.2503 27.7026 11.2513 28.05C11.2509 28.2814 11.2172 28.5115 11.1513 28.7333H8.33464C8.22696 28.7334 8.12343 28.6918 8.04575 28.6172C7.96807 28.5427 7.92228 28.4409 7.91797 28.3333ZM13.7013 28.75C13.7184 28.5225 13.7184 28.2941 13.7013 28.0667C13.7076 27.3899 13.5763 26.719 13.3156 26.0944C13.0549 25.4699 12.6702 24.9048 12.1846 24.4333C11.9393 24.1849 11.6651 23.9667 11.368 23.7833L11.0846 23.6C10.89 23.4996 10.6896 23.4105 10.4846 23.3333L10.1513 23.2C9.86232 23.115 9.5669 23.0537 9.26797 23.0167C9.09617 22.9995 8.9231 22.9995 8.7513 23.0167H7.91797V17.0333H9.33464C9.56077 16.9948 9.78363 16.9391 10.0013 16.8667L10.368 16.75C10.6227 16.663 10.8683 16.5514 11.1013 16.4167L11.368 16.2667C11.679 16.0622 11.9693 15.8277 12.2346 15.5667C12.7202 15.0952 13.1049 14.5301 13.3656 13.9056C13.6263 13.281 13.7575 12.6101 13.7513 11.9333C13.7684 11.7059 13.7684 11.4775 13.7513 11.25H26.3513C26.3342 11.4775 26.3342 11.7059 26.3513 11.9333C26.3451 12.6101 26.4763 13.281 26.737 13.9056C26.9977 14.5301 27.3824 15.0952 27.868 15.5667C28.1289 15.8326 28.4197 16.0675 28.7346 16.2667L29.0013 16.4167C29.2343 16.5514 29.4799 16.663 29.7346 16.75L30.1013 16.8667C30.3249 16.9343 30.5533 16.9844 30.7846 17.0167H32.1846V22.95H31.3513C31.1795 22.9335 31.0065 22.9335 30.8346 22.95C30.5357 22.987 30.2403 23.0484 29.9513 23.1333L29.618 23.2667C29.3952 23.3528 29.1781 23.453 28.968 23.5667L28.6846 23.75C28.3875 23.9334 28.1133 24.1516 27.868 24.4C27.3824 24.8715 26.9977 25.4366 26.737 26.0611C26.4763 26.6856 26.3451 27.3566 26.3513 28.0333C26.3342 28.2608 26.3342 28.4892 26.3513 28.7167L13.7013 28.75ZM31.668 28.75H28.8513C28.7854 28.5282 28.7518 28.2981 28.7513 28.0667C28.7523 27.7192 28.822 27.3754 28.9564 27.0551C29.0909 26.7347 29.2874 26.4441 29.5346 26.2C29.7152 26.0068 29.93 25.8486 30.168 25.7333H30.368C30.5463 25.6626 30.7303 25.6068 30.918 25.5667H31.1346C31.3339 25.5417 31.5354 25.5417 31.7346 25.5667H32.0846V28.3333C32.0846 28.4438 32.0407 28.5498 31.9626 28.628C31.8845 28.7061 31.7785 28.75 31.668 28.75Z" fill="#353A40"></path>
                                            <path d="M20.0013 14.167C18.8476 14.167 17.7198 14.5091 16.7605 15.1501C15.8012 15.7911 15.0535 16.7021 14.612 17.768C14.1705 18.8339 14.055 20.0068 14.2801 21.1384C14.5051 22.2699 15.0607 23.3093 15.8765 24.1251C16.6923 24.9409 17.7317 25.4965 18.8633 25.7216C19.9948 25.9467 21.1677 25.8311 22.2336 25.3896C23.2995 24.9481 24.2106 24.2004 24.8515 23.2412C25.4925 22.2819 25.8346 21.154 25.8346 20.0003C25.8346 18.4532 25.2201 16.9695 24.1261 15.8755C23.0321 14.7816 21.5484 14.167 20.0013 14.167ZM20.0013 23.3337C19.342 23.3337 18.6976 23.1382 18.1494 22.7719C17.6012 22.4056 17.174 21.885 16.9217 21.2759C16.6694 20.6668 16.6034 19.9966 16.732 19.35C16.8606 18.7034 17.1781 18.1095 17.6443 17.6433C18.1105 17.1771 18.7044 16.8597 19.351 16.731C19.9976 16.6024 20.6678 16.6684 21.2769 16.9207C21.886 17.173 22.4066 17.6003 22.7729 18.1484C23.1391 18.6966 23.3346 19.3411 23.3346 20.0003C23.3346 20.8844 22.9834 21.7322 22.3583 22.3573C21.7332 22.9825 20.8854 23.3337 20.0013 23.3337Z" fill="#353A40"></path>
                                        </svg>
                                        E-Angpao
                                    </button>
                                    <button class="btn btn-custom flex items-center justify-center color__button__trans color-secondary tab " data-tab=".gift">
                                        <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.625 12.1094L11.3906 12.1094C10.8594 11.2734 10.5469 10.2813 10.5469 9.21875C10.5469 6.2461 12.9648 3.82813 15.9375 3.82813C17.5547 3.82813 19.0117 4.54688 20 5.67969C20.9883 4.54688 22.4453 3.82813 24.0625 3.82813C27.0352 3.82813 29.4531 6.24609 29.4531 9.21875C29.4531 10.2813 29.1445 11.2734 28.6094 12.1094L34.375 12.1094C35.0664 12.1094 35.625 12.668 35.625 13.3594L35.625 21.1719C35.625 21.3438 35.4844 21.4844 35.3125 21.4844L33.75 21.4844L33.75 34.9219C33.75 35.6133 33.1914 36.1719 32.5 36.1719L7.5 36.1719C6.8086 36.1719 6.25 35.6133 6.25 34.9219L6.25 21.4844L4.6875 21.4844C4.51563 21.4844 4.375 21.3438 4.375 21.1719L4.375 13.3594C4.375 12.668 4.93359 12.1094 5.625 12.1094ZM18.6719 9.21875C18.6719 7.71094 17.4453 6.48438 15.9375 6.48438C14.4297 6.48438 13.2031 7.71094 13.2031 9.21875C13.2031 10.7266 14.4297 11.9531 15.9375 11.9531L18.6719 11.9531L18.6719 9.21875ZM24.0625 6.48438C22.5547 6.48438 21.3281 7.71094 21.3281 9.21875L21.3281 11.9531L24.0625 11.9531C25.5703 11.9531 26.7969 10.7266 26.7969 9.21875C26.7969 7.71094 25.5703 6.48438 24.0625 6.48438ZM32.9688 18.8281L32.9688 14.7656L21.3281 14.7656L21.3281 18.8281L32.9688 18.8281ZM31.0938 21.4844L21.3281 21.4844L21.3281 33.5156L31.0938 33.5156L31.0938 21.4844ZM8.90625 33.5156L18.6719 33.5156L18.6719 21.4844L8.90625 21.4844L8.90625 33.5156ZM7.03125 18.8281L18.6719 18.8281L18.6719 14.7656L7.03125 14.7656L7.03125 18.8281Z" fill="#F9FDF9"></path>
                                        </svg>
                                        <span class="text-nowrap"> Gift Registry</span>
                                    </button>
                                </div>
                                <div class="angpao my-3 show">
                                    <div data-anim="fade-up" class="has-animate" data-load-animation="true">
                                        <p class="text-white">Bapak/Ibu/Saudara sekalian dapat memberikan hadiah digital kepada kami melalui form dibawah. Bagi yang telah mengisi dan memberikan hadiah kepada kami, kami mengucapkan banyak terimakasih. Semoga hadiah dari Bapak/Ibu/Saudara dapat bermanfaat bagi kami dalam mengarungi bahtera rumah tangga</p>
                                    </div>
                                    <div class="widget-element has-animate" data-anim="fade-up" data-load-animation="true">
                                        <button id="openAngpao" class="btn w-50 btn-custom color-secondary my-3">Send Gift</button>
                                    </div>
                                </div>
                                <div class="gift my-3 hidden has-animate" data-anim="fade-up" style="" data-load-animation="true">
                                    <p class="text-white">Anda bisa memberikan hadiah melalui website ini. <br>Klik Hadiahkan, setelah itu akan muncul pop up form, isi form data pengirim dan anda akan di email oleh sistem untuk detailnya. Biaya pengiriman akan dibebankan kepada tamu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gift-content">
                    <div class="container px-[1.8rem]">
                        <div class="flex justify-center">
                            <div class="angpao show">
                                <form  id="formGift" action="https://viding.co/payment/eyJpdiI6IlRURDBEclFldDhvU0poVDc2ZlhIZ3c9PSIsInZhbHVlIjoiNy9qeFBTOG1pTktYbVF4amZZQjNHQT09IiwibWFjIjoiY2EyNjNkY2M4YTcwZmZhMGI0MTcyM2Q3ZjZiMmY5MGI3NjdiOTExYzk2ODY1MzRhMDNjNzBiMDBjNThmNTY1NCIsInRhZyI6IiJ9/method" method="post" target="_top" novalidate="novalidate">
                                    <input type="hidden" name="domain">
                                    <div class="grid justify-center px-5 lg:px-10 grid-cols-1 md:grid-cols-2 gap-2">
                                        <div class="mb-3 angpao-field-hideable has-animate" data-anim="fade-down" data-load-animation="true">
                                            <input type="text" required="" value="" class="form-control" placeholder="Name" name="name">
                                        </div>
                                        <div class="mb-3 angpao-field-hideable has-animate" data-anim="fade-down" data-load-animation="true">
                                            <input type="email" required="" class="form-control text-black" placeholder="Email" name="email">
                                        </div>
                                        <div class="angpao-field-hideable has-animate" data-anim="fade-down" data-anim-delay="100" data-load-animation="true">
                                            <input type="number" required="" class="form-control" placeholder="Mobile Phone" name="no_hp">
                                        </div>
                                        <div class="angpao-field-hideable has-animate" data-anim="fade-down" data-anim-delay="100" data-load-animation="true">
                                            <input type="text" required="" class="form-control" placeholder="Address" name="alamat">
                                        </div>
                                    </div>
                                    <div class="flex justify-center items-center pl-10 pr-16 mt-4 flex-col">
                                        <div class="has-animate w-1/2" data-anim="fade-down" data-anim-delay="200" data-load-animation="true">
                                            <div class="input-group relative flex items-stretch w-full">
                                                <span class="input-group-text flex items-center p-[0.375rem] px-[0.75rem] text-[1rem] font-[400] leading-[1.5] text-center whitespace-nowrap bg-[var(--color-secondary)] rounded-l-[8px] text-white color-secondary" id="basic-addon1">Rp</span>
                                                <input type="number" required="" class="form-control rounded-l-none" placeholder="Amount" name="payment" min="10000">
                                            </div>
                                        </div>
                                        <input type="text" name="guest_type" class="hidden" value="">
                                        <div class="my-3">
                                            <div class="form-check mt-10 form-group text-start has-animate" style="width: fit-content; margin:auto" data-anim="fade-down" data-anim-delay="200" data-load-animation="true">
                                                <input type="checkbox" value="1" name="anonymous" class="form-check-input w-[1em] h-[1em] mt-[0.25em] align-top bg-[#fff] bg-no-repeat bg-center bg-contain border border-[#00000040] appearance-none rounded-md" id="anonymous_angpao">
                                                <label class="form-check-label text-white ml-1" for="anonymous_angpao">Show as Anonymous</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 has-animate" data-anim="fade-down" data-anim-delay="300" data-load-animation="true">
                                            <button class="btn btn-custom color-secondary w-100" type="submit">Send Gift</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12 gift hidden">php
                                <div class="col-md-12 gift">
                                    <div class="row m-auto">
                                        <div class="col-md-12">
                                            <div id="gift-registry-carousel-small" class="owl-carousel owl-theme gift-item owl-loaded owl-drag" style="text-align: center;">








                                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><div class="d-flex align-items-stretch item mb-3">
                                                                <div class="gift-item-wrapper">
                                                                    <div class="img-hover active">
                                                                        <img class="image img-fluid" style="object-fit: cover; object-position: center" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:480:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dpZnQvYWM5ZG1JQWFzRnhlbzN0dWlVano1WVk3WGVFSjllWHJEQUVVWjJNTC5qcGc.webp">
                                                                        <div class="middle">
                                                                            <i class="fa-solid fa-circle-check"></i>
                                                                            <p>Terbeli</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-gift">
                                                                        <div class="d-flex align-items-start flex-column">
                                                                            <div class="d-flex justify-content-start mt-2 mb-5" style="min-height: 100px; text-align: left">
                                                                                Water Heater
                                                                            </div>
                                                                            <div class="d-flex justify-content-start mt-2">
                                                                                <b>Rp. 3.725.000</b>
                                                                            </div>
                                                                            <button class="btn mt-3 btn-hadiahkan" onclick="detailData(262)" disabled="" id="gift_262">Hadiahkan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="owl-item"><div class="d-flex align-items-stretch item mb-3">
                                                                <div class="gift-item-wrapper">
                                                                    <div class="img-hover active">
                                                                        <img class="image img-fluid" style="object-fit: cover; object-position: center" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:480:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dpZnQvTHR5a3JIeTdBQmZRRFJIN0pGbWx0OFZDZ0ZNV202Z0F0Y285cEJYMS5qcGc.webp">
                                                                        <div class="middle">
                                                                            <i class="fa-solid fa-circle-check"></i>
                                                                            <p>Terbeli</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-gift">
                                                                        <div class="d-flex align-items-start flex-column">
                                                                            <div class="d-flex justify-content-start mt-2 mb-5" style="min-height: 100px; text-align: left">
                                                                                Cooker Hood
                                                                            </div>
                                                                            <div class="d-flex justify-content-start mt-2">
                                                                                <b>Rp. 5.358.111</b>
                                                                            </div>
                                                                            <button class="btn mt-3 btn-hadiahkan" onclick="detailData(263)" disabled="" id="gift_263">Hadiahkan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="owl-item"><div class="d-flex align-items-stretch item mb-3">
                                                                <div class="gift-item-wrapper">
                                                                    <div class="img-hover active">
                                                                        <img class="image img-fluid" style="object-fit: cover; object-position: center" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:480:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dpZnQvM0FsN3NWdHZQVVFEVFJIUFRUaE1KTnZGOVdBSjAzR29OdkRJVUpMWS5qcGc.webp">
                                                                        <div class="middle">
                                                                            <i class="fa-solid fa-circle-check"></i>
                                                                            <p>Terbeli</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-gift">
                                                                        <div class="d-flex align-items-start flex-column">
                                                                            <div class="d-flex justify-content-start mt-2 mb-5" style="min-height: 100px; text-align: left">
                                                                                Coffee Maker
                                                                            </div>
                                                                            <div class="d-flex justify-content-start mt-2">
                                                                                <b>Rp. 799.000</b>
                                                                            </div>
                                                                            <button class="btn mt-3 btn-hadiahkan" onclick="detailData(264)" disabled="" id="gift_264">Hadiahkan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="owl-item"><div class="d-flex align-items-stretch item mb-3">
                                                                <div class="gift-item-wrapper">
                                                                    <div class="img-hover active">
                                                                        <img class="image img-fluid" style="object-fit: cover; object-position: center" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:480:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dpZnQvTEE5SDJoMkZlSlRXVERXdmd5VEtRMEcxaVNuZW1iNVRJMkpGc3dpdy5qcGc.webp">
                                                                        <div class="middle">
                                                                            <i class="fa-solid fa-circle-check"></i>
                                                                            <p>Terbeli</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-gift">
                                                                        <div class="d-flex align-items-start flex-column">
                                                                            <div class="d-flex justify-content-start mt-2 mb-5" style="min-height: 100px; text-align: left">
                                                                                Hotel Honeymoon
                                                                            </div>
                                                                            <div class="d-flex justify-content-start mt-2">
                                                                                <b>Rp. 704.000</b>
                                                                            </div>
                                                                            <button class="btn mt-3 btn-hadiahkan" onclick="detailData(265)" disabled="" id="gift_265">Hadiahkan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="owl-item"><div class="d-flex align-items-stretch item mb-3">
                                                                <div class="gift-item-wrapper">
                                                                    <div class="img-hover ">
                                                                        <img class="image img-fluid" style="object-fit: cover; object-position: center" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:480:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dpZnQvV09VNUswUk96eU5rZ1lLNmxtbnA4bzQ4bjFDd09HWjh2aEN3VHkzZC5qcGc.webp">
                                                                        <div class="middle">
                                                                            <i class="fa-solid fa-circle-check"></i>
                                                                            <p>Terbeli</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-gift">
                                                                        <div class="d-flex align-items-start flex-column">
                                                                            <div class="d-flex justify-content-start mt-2 mb-5" style="min-height: 100px; text-align: left">
                                                                                10 X
                                                                                Donasi Bibit untuk Petani Cimenyan Bandung
                                                                            </div>
                                                                            <div class="d-flex justify-content-start mt-2">
                                                                                <b>Rp. 100.000</b>
                                                                            </div>
                                                                            <button class="btn mt-3 btn-hadiahkan" onclick="detailData(266)" id="gift_266">Hadiahkan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="owl-item"><div class="d-flex align-items-stretch item mb-3">
                                                                <div class="gift-item-wrapper">
                                                                    <div class="img-hover ">
                                                                        <img class="image img-fluid" style="object-fit: cover; object-position: center" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:480:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dpZnQvcm1xcmxCZjc3bVVPdHFKQ0UzMDVJZjlGSFQyb1dmc2IxaWtMVDBIeC5wbmc.webp">
                                                                        <div class="middle">
                                                                            <i class="fa-solid fa-circle-check"></i>
                                                                            <p>Terbeli</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-gift">
                                                                        <div class="d-flex align-items-start flex-column">
                                                                            <div class="d-flex justify-content-start mt-2 mb-5" style="min-height: 100px; text-align: left">
                                                                                10 X
                                                                                Spring Bed
                                                                            </div>
                                                                            <div class="d-flex justify-content-start mt-2">
                                                                                <b>Rp. 3.000.000</b>
                                                                            </div>
                                                                            <button class="btn mt-3 btn-hadiahkan" onclick="detailData(267)" id="gift_267">Hadiahkan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="owl-item"><div class="d-flex align-items-stretch item mb-3">
                                                                <div class="gift-item-wrapper">
                                                                    <div class="img-hover ">
                                                                        <img class="image img-fluid" style="object-fit: cover; object-position: center" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:480:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dpZnQvMVRUb3RGNWRSS1d0eUw2a0dTSmNGcEtvTE9rUXVmWk9zc052QmhSOS5qcGc.webp">
                                                                        <div class="middle">
                                                                            <i class="fa-solid fa-circle-check"></i>
                                                                            <p>Terbeli</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-gift">
                                                                        <div class="d-flex align-items-start flex-column">
                                                                            <div class="d-flex justify-content-start mt-2 mb-5" style="min-height: 100px; text-align: left">
                                                                                6 X
                                                                                Dining Chair
                                                                            </div>
                                                                            <div class="d-flex justify-content-start mt-2">
                                                                                <b>Rp. 298.999</b>
                                                                            </div>
                                                                            <button class="btn mt-3 btn-hadiahkan" onclick="detailData(268)" id="gift_268">Hadiahkan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div><div class="owl-item"><div class="d-flex align-items-stretch item mb-3">
                                                                <div class="gift-item-wrapper">
                                                                    <div class="img-hover ">
                                                                        <img class="image img-fluid" style="object-fit: cover; object-position: center" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:480:0:1/g:no/aHR0cHM6Ly92aWRpbmcuc2dwMS5kaWdpdGFsb2NlYW5zcGFjZXMuY29tL2dpZnQvYmJ5S3BYNzN1cUMweU9xaFoyZVBTbWN4a202OVplakRwQVFWRWJGTi5qcGc.webp">
                                                                        <div class="middle">
                                                                            <i class="fa-solid fa-circle-check"></i>
                                                                            <p>Terbeli</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content-gift">
                                                                        <div class="d-flex align-items-start flex-column">
                                                                            <div class="d-flex justify-content-start mt-2 mb-5" style="min-height: 100px; text-align: left">
                                                                                6 X
                                                                                Vacum Cleaner
                                                                            </div>
                                                                            <div class="d-flex justify-content-start mt-2">
                                                                                <b>Rp. 251.900</b>
                                                                            </div>
                                                                            <button class="btn mt-3 btn-hadiahkan" onclick="detailData(269)" id="gift_269">Hadiahkan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                            <div class="carousel-control-block pb-5">
                                                <div class="carousel-btn-block banner-carousel-btn" style="display: inline-flex;">
                                                    <span class="carousel-btn left-btn"><i class="fa fa-arrow-left"></i></span> &nbsp;
                                                    <div class="carousel-number-count" style="padding-top: 3px;"><span class="current-number">NaN</span><span class="sep">/</span><span class="counted-number">0</span></div> &nbsp;
                                                    <span class="carousel-btn right-btn"><i class="fa fa-arrow-right"></i></span>
                                                </div>
                                            </div><!-- /.carousel-control-block -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="apology-section bg-[var(--color-primary)] relative moveable-section">
                <div class="rebung-horizontal relative -ml-2 w-auto h-20">
                    <div class="image-element relative w-[150%] h-auto">
                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctaG9yaXpvbnRhbC5wbmc.webp" alt="rebung-horizontal">
                    </div>
                </div>
                <div class="appology-wrap relative text-white py-12 color-primary">
                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                        <div class="sky absolute top-0 left-1/2 w-[180%] -translate-x-1/2 -translate-y-[15%] opacity-50">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                        <div class="mountain absolute bottom-0 left-1/2 w-[300%] -translate-x-1/2 translate-y-[45%] opacity-20">
                            <div class="image-element relative w-full h-auto has-animate" data-anim="slide-left" data-load-animation="true">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3VudGFpbi5wbmc.webp" alt="mountain" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                    </div>
                    <div class="container position-relative">
                        <div class="flex justify-center px-10">
                            <div class="text-center relative">
                                <div class="title-section has-animate" data-anim="zoom-out" data-load-animation="true">
                                    <h2 class="block w-full mb-0 font-medium text-[38px] leading-[1.2] tracking-tight font-baskervville">Apology</h2>
                                </div>
                                <div class="mt-5 has-animate" data-anim="fade-up" data-load-animation="true">
                                    <div class="mb-0"><p>Tanpa mengurangi rasa hormat, Izinkan kami mengharapkan kehadiran Bapak/lbu/Saudara/i melalui undangan digital ini, serta dapat memberikan doa restu kepada kami.</p>
                                        <p class="mt-2">Terima kasih.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rebung-horizontal">
                    <div class="image-element relative w-[150%] h-auto">
                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctaG9yaXpvbnRhbC5wbmc.webp" alt="rebung-horizontal">
                    </div>
                </div>
            </section>
            <section class="stream-section relative bg-[var(--color-primary)] text-white color-primary moveable-section" data-id="8">
                <div class="image-wrapper relative w-full">
                    <div class="image-element relative w-full h-auto">
                        <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9iYWNrZ3JvdW5kLTEud2VicA.webp" alt="stream-background" class=" ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9iYWNrZ3JvdW5kLTEud2VicA.webp">
                    </div>
                </div>
                <div class="stream-wrapper relative py-12">
                    <div class="ornaments-wrapper absolute inset-0 pointer-events-none overflow-hidden">
                        <div class="sky absolute top-0 left-1/2 w-[140%] transform -translate-x-1/2">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                        <div class="element-wrapper-absolute">
                            <div class="background-element relative w-[350%] h-auto">
                                <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3RpZi1mbG93ZXIucG5n.webp" alt="motif-flower" class=" ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3RpZi1mbG93ZXIucG5n.webp">
                                <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3RpZi1mbG93ZXIucG5n.webp" alt="motif-flower" class=" ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3RpZi1mbG93ZXIucG5n.webp">
                            </div>
                        </div>
                        <div class="orn-1 absolute top-0 left-0 w-[80%] transform -translate-x-[70%] translate-y-[1.5rem]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                        <div class="orn-2 absolute top-0 right-0 w-[80%] translate-x-[70%] translate-y-[1.5rem]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                        <div class="orn-3 absolute top-0 left-0 w-[30%] -translate-x-1/2">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                        <div class="orn-4 absolute top-0 right-0 w-[30%] translate-x-[35%] scale-x-[-1]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                            </div>
                        </div>
                    </div>
                    <div class="container relative px-[1.8rem]">
                        <div class="flex justify-center">
                            <div class="w-full">
                                <div class="title-section relative w-full text-center mb-5">
                                    <h2 class="block w-full mb-0 font-medium text-[38px] tracking-tight font-baskervville">Live Streaming</h2>
                                </div>
                                <div class="stream-content relative bg-[var(--color-main)] text-white rounded-[300px_300px_20px_20px] p-[8rem_1.5rem_1.5rem] text-center overflow-hidden color-main">
                                    <div class="stream-description relative">
                                        <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none">
                                            <div class="orn-5 absolute top-[-5rem] left-[-2.5rem] w-[35%] transform -translate-x-[55%] rotate-[20deg]">
                                                <div class="image-element relative w-full h-auto has-animate" data-anim="fade-right" data-load-animation="true">
                                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                </div>
                                            </div>
                                            <div class="orn-6 absolute top-[-5rem] right-[-2.5rem] w-[35%] transform translate-x-[55%] rotate-[-20deg] scale-x-[-1]">
                                                <div class="image-element relative w-full h-auto has-animate" data-anim="fade-right" data-load-animation="true">
                                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                                </div>
                                            </div>
                                            <div class="rumah absolute bottom-0 left-1/2 w-[250%] transform -translate-x-1/2 translate-y-[15%] opacity-20">
                                                <div class="image-element relative w-full h-auto">
                                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9ydW1haC1saW1hcy5wbmc.webp" alt="rumah-limas" class="img-fluid w-full h-auto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="yt-description px-10 has-animate" data-anim="fade-up" data-load-animation="true">
                                            <div class="mb-3">
                                                <h1 class="text-center text-3xl mb-2 font-baskervville">Susunan Acara Live Wedding</h1>
                                                <p class="text-center text-lg mb-3">10.00 - Acara Pernikahan</p>
                                                <h3 class="text-center text-3xl mb-2 font-baskervville">Live Wedding</h3>
                                                <p class="text-center text-lg">Silahkan menonton melalui YouTube Live mempelai untuk menyaksikan serangkaian acara pernikahan secara Live.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative mt-4">
                                        <div class="ratio relative w-full mb-4 h-auto ratio-16x9">
                                            <iframe class="w-full h-72 min-h-72" id="livestream_player" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="WHAT IS VIDING?" src="https://www.youtube.com/embed/SzPrFMFqFwM?widget_referrer=https%3A%2F%2Fviding.co%2Ftemplate-design&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fviding.co&amp;widgetid=2"></iframe>
                                        </div>
                                        <a href="https://www.youtube.com/watch/SzPrFMFqFwM" target="_blank" class="btn btn-custom color-secondary">Join Youtube</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="thank-section relative bg-[var(--color-primary)] text-center moveable-section" data-id="9">
                <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                    <div class="elements-wrapper-absolute absolute bottom-0 left-0 w-full h-full">
                        <div class="background-element relative w-full h-full">
                            <img class="mix-blend-multiply w-full h-full object-cover" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90ZXh0dXJlLnBuZw.webp" alt="texture">
                        </div>
                    </div>
                    <div class="sky absolute top-0 left-1/2 w-[110%] translate-x-[-50%]">
                        <div class="image-element relative w-full h-auto">
                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9za3kucG5n.webp" alt="sky" class="img-fluid w-full h-auto">
                        </div>
                    </div>
                    <div class="mountain absolute bottom-0 left-1/2 w-[150%] translate-x-[-50%] -translate-y-[30%]">
                        <div class="image-element relative w-full h-auto">
                            <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3VudGFpbi5wbmc.webp" alt="mountain" class="img-fluid w-full h-auto">
                        </div>
                        <div class="land absolute bottom-[-30%] left-0 w-[120%]">
                            <div class="image-element relative w-full h-auto">
                                <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sYW5kLnBuZw.webp" alt="land" class="img-fluid w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rebung-horizontal relative ml-[-0.5rem] w-[150%] h-auto">
                    <div class="image-element relative w-full h-auto has-animate" data-anim="slide-right" data-load-animation="true">
                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctaG9yaXpvbnRhbC5wbmc.webp" alt="rebung-horizontal" class=" ls-is-cached lazyloaded">
                    </div>
                </div>
                <div class="ampera relative w-[150%] translate-x-[-25%]">
                    <div class="image-element relative w-full h-auto has-animate" data-anim="slide-up" data-load-animation="true">
                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9hbXBlcmEucG5n.webp" alt="ampera" class="img-fluid w-full h-auto">
                    </div>
                </div>
                <div class="thank-wrapper relative">
                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
                        <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none has-animate" data-anim="zoom-out" data-load-animation="true">
                            <div class="elements-wrapper-absolute absolute bottom-0 left-0 w-full h-full">
                                <div class="background-element relative w-full h-full">
                                    <img class="mix-blend-multiply w-full h-full object-cover" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90ZXh0dXJlLnBuZw.webp" alt="texture">
                                </div>
                            </div>
                            <div class="mountain absolute bottom-0 left-[50%] w-[150%] -translate-x-1/2 -translate-y-[30%]">
                                <div class="orn-1 absolute bottom-[10%] left-0 w-[65%] -translate-x-[45%] opacity-50">
                                    <div class="image-element relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                    </div>
                                </div>
                                <div class="orn-2 absolute bottom-[50%] right-0 w-[65%] translate-x-[45%] opacity-50">
                                    <div class="image-element relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTIucG5n.webp" alt="tree-2" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                    </div>
                                </div>
                                <div class="orn-7 absolute top-[10%] left-0 w-[50%]">
                                    <div class="image-element relative w-full h-auto has-animate" data-anim="slide-up" data-load-animation="true">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                    </div>
                                </div>
                                <div class="orn-8 absolute top-[15%] right-0 w-[50%]">
                                    <div class="image-element relative w-full h-auto has-animate" data-anim="slide-up" data-load-animation="true">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy90cmVlLTEucG5n.webp" alt="tree-1" class="img-fluid w-full h-auto">
                                    </div>
                                </div>
                                <div class="image-element relative w-full h-auto has-animate" data-anim="slide-left" data-load-animation="true">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9tb3VudGFpbi5wbmc.webp" alt="mountain" class="img-fluid w-full h-auto">
                                </div>
                                <div class="land absolute bottom-[-30%] left-0 w-[120%]">
                                    <div class="image-element relative w-full h-auto has-animate" data-anim="slide-left" data-load-animation="true">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sYW5kLnBuZw.webp" alt="land" class="img-fluid w-full h-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none z-30 orn-front overflow-hidden">
                        <div class="ornaments-wrapper absolute top-0 left-0 w-full h-full pointer-events-none has-animate" data-anim="zoom-out" data-anim-duration="4500ms" style="animation-duration: 4500ms;" data-load-animation="true">
                            <div class="rumah absolute bottom-0 left-[50%] w-[115%] -translate-x-[50%] -translate-y-[10%]">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9ydW1haC1saW1hcy5wbmc.webp" alt="rumah-limas" class="img-fluid w-full h-auto">
                                </div>
                            </div>
                            <div class="ornament absolute top-[-0.5rem] w-[13%] left-0 ornament-left">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full h-auto">
                                </div>
                            </div>
                            <div class="ornament absolute top-[-0.5rem] w-[13%] right-0 transform scale-x-[-1] ornament-right">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yZWJ1bmctdmVydGljYWwtMi5wbmc.webp" alt="rebung-vertical-2" class="img-fluid w-full h-auto">
                                </div>
                            </div>
                            <div class="orn-3 absolute bottom-0 left-0 w-[38%] translate-x-[-50%] translate-y-[10%]">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                </div>
                                <div class="orn-4 absolute top-[45%] left-[90%] w-full">
                                    <div class="image-element relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0yLnBuZw.webp" alt="lotus-2" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                    </div>
                                </div>
                                <div class="orn-5 absolute top-1/2 left-1/2 w-full transform -translate-x-1/2 -translate-y-1/2">
                                    <div class="image-element relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                    </div>
                                </div>
                            </div>
                            <div class="orn-6 absolute bottom-0 right-0 w-[43%] translate-x-[40%] translate-y-[50%]">
                                <div class="image-element relative w-full h-auto">
                                    <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9yb3NlLnBuZw.webp" alt="rose" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                </div>
                                <div class="orn-5 absolute top-[10%] right-[65%] w-[85%] scale-x-[-1]">
                                    <div class="image-element pt-[120%] relative w-full h-auto">
                                        <img src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9sb3R1cy0xLnBuZw.webp" alt="lotus-1" class="img-fluid w-full h-auto animate-loop has-animate animate-paused" data-anim="rotate-left" data-load-animation="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container px-[1.8rem] relative">
                        <div class="flex justify-center">
                            <div class="relative w-11/12">
                                <div class="thank relative text-white bg-red-950/50 mb-[10rem] color-primary">
                                    <div class="image-wrapper relative w-full z-50">
                                        <div class="image-element relative w-full h-auto">
                                            <img data-src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9iYWNrZ3JvdW5kLTMud2VicA.webp" alt="thank-background" class="thank-background w-full h-full object-cover rounded-3xl ls-is-cached lazyloaded" src="https://media.viding.co/dmlkaW5nIGNvIGltYWdlIHByb3h5IGJ5IGZseS5pbw/rs:auto:0:0:1/g:no/aHR0cHM6Ly92aWRpbmcuY28vaW52aXRhdGlvbi90aGVtZV8xNDkvYXNzZXRzL2ltYWdlcy9iYWNrZ3JvdW5kLTMud2VicA.webp">
                                        </div>
                                    </div>
                                    <div class="thank-body relative py-[3rem] px-[1.8rem] pb-[10rem] z-50">
                                        <div class="title-section relative w-full text-center mb-[1.25rem] has-animate" data-anim="zoom-out" data-load-animation="true">
                                            <h2 class="block w-full mb-0 font-medium text-[38px] leading-tight font-baskervville">Thank You</h2>
                                        </div>
                                        <div class="relative has-animate" data-anim="zoom-out" data-load-animation="true">
                                            <p>Kami mengucapkan terimakasih kepada Bapak/Ibu/Saudara yang telah menghadiri seluruh rangkaian acara pernikahan kami. Semoga waktu yang diberikan oleh Bapak/Ibu/Saudara sekalian menjadi berkah dan manfaat yang kelak dibalas oleh Tuhan Yang Maha Esa. Terima kasih atas seluruh ucapan yang diberikan. Semoga kami menjadi pasangan yang berbahagia dunia dan akhirat :)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        let triggerOpenCover = document.getElementById('btn-envelope');
        triggerOpenCover.addEventListener('click', function (){
            let coverSectionElement = document.querySelector('.cover-section')
            coverSectionElement.classList.add('translate-y-[-100%]')
        })
    </script>
</body>
</html>