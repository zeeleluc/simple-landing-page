<?php
$keywords = [
    'Sound meditatie',
    'I-tjing workshop',
    'Yin yoga',
    'Yoga Nidra',
    'Inclusief drinken en snacks',
];

$activities = [
    [
        'image' => 'images/image2.png',
        'title' => 'Sound Meditatie met Vereen',
        'description' => 'De dag start met het ervaren van een Sound meditatie door Vereen om het proces van de innerlijke reis naar binnen te initiëren. Met een korte bodyscan komt je lichaam geheel tot rust met als doel vanuit je hoofd aan te komen en aanwezig te zijn in het moment, in een ontspannen lichaam. Tijdens het sound gedeelte zal vanuit deze volledige lichamelijke, mentale en geestelijke ontspanning contact gemaakt worden met de diepere lagen in jezelf.',
    ],
    [
        'image' => 'images/image1.png',
        'title' => 'I-tjing workshop met Elwin',
        'description' => 'Dit is het startpunt voor de I-tjing workshop met Elwin. Met een belangrijke intentie of vraag ga je aan de slag om antwoorden en inzichten te verkrijgen vanuit de I-tjing, het Chinese boek der veranderingen. Dit boek rust op het concept dat voortdurende verandering een constante is en dat het nooit onveranderlijk blijft, zoals gereflecteerd in de Yin- en Yang filosofie. In de workshop leer je intuïtief hoe je met munten het boek kan gebruiken als orakel en zo inzicht te krijgen in jouw intentie, vraag of situatie.',
    ],
    [
        'image' => 'images/image3.png',
        'title' => 'Yin yoga en yoga Nidra met Diana',
        'description' => 'Vanuit de I-tjing workshop neem je dat, waar je intuïtief ruimte voor hebt gemaakt mee in de yin yoga en midra sessie met Diana. Door het uitvoeren van de rustige, meditatieve en fysieke bewegingen tijdens de les, krijg je de gelegenheid om alles de ruimte te geven en te laten inzinken op fysiek, geestelijk, emotioneel en ziels niveau. Waardoor je intuïtief helderder gaat voelen, horen, weten, ervaren en dat zal aantrekken wat goed is voor jou.',
    ],
];
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/dist/tailwind.css" rel="stylesheet">
    </head>
    <body>
        <div class="bg-white">
            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#EE7170] to-[#EE7270] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
                <div class="flex justify-center items-center">
                    <a href="https://kasshenbinti.com/">
                        <img class="w-48 sm:w-64" src="images/kas-shen-binti.png"  alt="Kas Shen Binti"/>
                    </a>
                </div>
                <div class="flex justify-center items-center">
                    <a href="https://kasshenbinti.com/">
                        <img class="w-48 sm:w-64" src="images/satori.png"  alt="Satori"/>
                    </a>
                </div>
                <div class="flex justify-center items-center">
                    <h2 class="my-4 block font-sans text-center text-xl md:text-2xl font-semibold uppercase leading-relaxed tracking-normal text-[#EE7270] antialiased">
                        Consciousness exploration workshops
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-8 my-6">
                    <div class="col-span-2 sm:col-span-1 md:col-span-1 lg:col-span-2"></div>
                    <div class="col-span-2 md:col-span-3 lg:col-span-2">
                        <div class="items-center justify-center flex w-full flex-col rounded-xl bg-gradient-to-tr from-[#EE7170] to-[#EE7170] bg-clip-border p-8 text-white shadow-md shadow-pink-500/40">
                            <div class="relative m-0 mb-8 overflow-hidden rounded-none border-b border-white/10 bg-transparent bg-clip-border pb-8 text-center text-gray-700 shadow-none">
                                <p class="block font-sans text-sm font-normal uppercase leading-normal text-white antialiased">
                                    zondag 22 oktober 2023
                                    <br />
                                    9:00 - 15:00 uur
                                </p>
                                <h1 class="mt-6 flex justify-center gap-1 font-sans text-7xl font-normal tracking-normal text-white antialiased">
                                    <span class="mt-2 text-4xl">NAƒ</span>180
                                    <span class="self-end text-4xl">,-</span>
                                </h1>
                            </div>
                            <div class="p-0">
                                <ul class="flex flex-col gap-4">
                                    <?php foreach ($keywords as $keyword): ?>
                                        <li class="flex items-center gap-4">
                                        <span class="rounded-full border border-white/20 bg-white/20 p-1">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="2"
                                                stroke="currentColor"
                                                aria-hidden="true"
                                                class="h-3 w-3"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M4.5 12.75l6 6 9-13.5"
                                                ></path>
                                            </svg>
                                        </span>
                                            <p class="block font-sans text-base font-normal leading-relaxed text-inherit antialiased">
                                                <?=$keyword; ?>
                                            </p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="mt-12 p-0">
                                <a
                                    href="https://kasshenbinti.com/book-a-class?lesson=9a5b2471-7cc1-473b-9e04-877468b9aadd"
                                    class="block w-full select-none rounded-lg bg-white py-3.5 px-7 text-center align-middle font-sans text-sm font-bold uppercase text-[#EE7270] shadow-md shadow-blue-gray-500/10 transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-blue-gray-500/20 focus:scale-[1.02] focus:opacity-[0.85] focus:shadow-none active:scale-100 active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    type="button"
                                    data-ripple-dark="true"
                                >
                                    Nu Boeken
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 md:col-span-3 lg:col-span-2">
                        <div class="relative flex w-full max-w-[40rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md ml-0 md:ml-5 mt-10 md:mt-0">
                            <div class="p-6">
                                <h2 class="mb-4 block font-sans text-lg font-semibold uppercase leading-relaxed tracking-normal text-[#EE7270] antialiased">
                                    Een dag voor jezelf
                                </h2>
                                <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
                                    Op 22 oktober organiseren Vereen, Elwin en Diana een bijzondere dag met een Sound Meditatie, I-tjing workshop, afsluitend met een yin yogales gevolgd door een yoga nidra met als doel contact te maken met je onderbewustzijn en de diepere lagen in jezelf. In de workshops en lessen creëren we de ontspanning om zo alles te kunnen loslaten wat niet meer dient en de ruimte te maken voor wat jij nodig hebt. Het is een dag van algehele ontspanning met volop de ruimte om contact te maken met jezelf. Het is een dag waarin je de aandacht en rust helemaal voor jezelf zult hebben, waarin je vooral veel zult ervaren en voelen tijdens een innerlijke reis die een heling op zich zal zijn voor jezelf.
                                </p>
                                <h2 class="mb-4 block font-sans text-lg font-semibold uppercase leading-relaxed tracking-normal text-[#EE7270] antialiased">
                                    Inbegrepen
                                </h2>
                                <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
                                    Tussen de lessen en workshop door bieden we momenten van stilte aan om rustig thee te drinken en te genieten van een buffet met kleine gezonde hapjes en drankjes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php foreach ($activities as $activity): ?>
                <div class="flex justify-center items-center my-20 mx-3 sm:mx-5 lg:mx-20 md:hidden show">
                    <div class="relative flex max-w-[90rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" src="<?=$activity['image']; ?>" alt="<?=$activity['title']; ?>">
                            <div class="px-6 py-6">
                                <h6 class="mb-4 block font-sans text-base font-semibold uppercase leading-relaxed tracking-normal text-[#EE7270] antialiased">
                                    <?=$activity['title']; ?>
                                </h6>
                                <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
                                    <?=$activity['description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center my-20 mx-3 sm:mx-5 lg:mx-20 md:show md:flex hidden">
                    <div class="relative flex w-full max-w-[70rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                        <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-white bg-clip-border text-gray-700">
                            <img src="<?=$activity['image']; ?>" alt="<?=$activity['title']; ?>" class="h-full w-full object-cover" />
                        </div>
                        <div class="p-6">
                            <h6 class="mb-4 block font-sans text-base font-semibold uppercase leading-relaxed tracking-normal text-[#EE7270] antialiased">
                                <?=$activity['title']; ?>
                            </h6>
                            <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
                                <?=$activity['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="max-w-2xl mx-auto">
                <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-800 my-6">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <a href="#" target="_blank" class="flex items-center mb-4 sm:mb-0">
                            <img class="h-8" src="images/satori.png"  alt="Satori"/>
                        </a>
                        <ul class="flex flex-wrap items-center mb-6 sm:mb-0">
                            <li>
                                <a href="https://kasshenbinti.com/book-a-class?lesson=9a5b2471-7cc1-473b-9e04-877468b9aadd" class="text-sm text-gray-500 hover:underline dark:text-gray-400">
                                    Nu Boeken
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
                        © 2023 Zeelebosch B.V. ~ Made with Love.
                    </span>
                </footer>
            </div>
        </div>

    </body>
</html>
