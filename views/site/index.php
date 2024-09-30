<?php

/** @var yii\web\View $this */

$this->title = 'Приветствие';

use app\assets\greeting\{AnimateAsset, GreetingAsset};

AnimateAsset::register($this);
GreetingAsset::register($this);

?>

<div class="wrapper">
    <header class="w-full absolute my-8 left-0 top-0">
        <div class="mx-auto container">
            <div class="flex items-end justify-end w-full">
                <div class="text-gray-700 font-normal leading-none text-sm" id="time">00:00</div>
            </div>
        </div>
    </header>


    <main>
        <section class="h-screen home-page">
          <div class="items-center justify-center flex flex-col container gap-20 h-full lg:flex-row m-auto w-full">
            <div class="items-center justify-center flex flex-col">
              <div class="flex flex-col lg:flex-row items-end">
                <h1 id="mainTitle" class="w-full font-medium lg:leading-none lg:text-[15rem] sm:text-9xl text-8xl text-center text-gray-800">
                  ЭФКО
                </h1>
                <div id="yellowSquare" class="h-5 w-5 bg-amber-300 lg:h-10 lg:w-10"></div>
              </div>
              <p id="subtitle" class="text-gray-700 text-2xl font-normal lg:text-5xl text-left">Цифровые решения</p>
              <div id="projectInfo" class="flex container items-end justify-between mt-10 mx-auto">
                <span class="text-gray-700 text-2xl lg:text-3xl">
                  <!-- TODO: 1. Добавить свое имя -->
                  Меня зовут <b>[ваше_имя]</b> <br> Это мой первый проект, на стеке HTML, CSS, JS, PHP, SQL
                </span>
              </div>

            </div>

            <div class="w-full border-l-2 px-4">
              <ul class="flex flex-col gap-12 px-8 relative">
                <li>
                  <div class="items-center justify-center -left-11 absolute bg-white border-2 h-10 hidden lg:flex rounded w-10">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#374151" d="M320 464c8.8 0 16-7.2 16-16V160H256c-17.7 0-32-14.3-32-32V48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H320zM0 64C0 28.7 28.7 0 64 0H229.5c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64z"/></svg>
                  </div>
                  <div id="listItem1">
                    <a href="https://edu-efko.ru/" target="_blank" class="font-semibold text-gray-700 text-xl">Сайт курса</a>
                    <p class="font-semibold text-gray-400 text-sm">Порекомендуй нас друзьям</p>
                  </div>
                </li>

                <li id="listItem2">
                  <div class="items-center justify-center -left-11 absolute bg-white border-2 h-10 hidden lg:flex rounded w-10">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#374151" d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/></svg>
                  </div>
                  <div>
                    <a href="https://t.me/efko_digital" target="_blank" class="font-semibold text-gray-700 text-xl">Telegram</a>
                    <p class="font-semibold text-gray-400 text-sm">Подпишись на группу и будь в курсе всех новостей</p>
                  </div>
                </li>

                <li id="listItem3">
                  <div class="items-center justify-center -left-11 absolute bg-white border-2 h-10 hidden lg:flex rounded w-10">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#374151" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                  </div>
                  <div>
                    <!-- TODO: 2. Добавить ссылку на свой github-аккаунт -->
                    <a target="_blank" href="#" class="font-semibold text-gray-700 text-xl">GitHub</a>
                    <p class="font-semibold text-gray-400 text-sm">Поделись своим проектом с другими</p>
                  </div>
                </li>

                <li id="listItem4">
                  <div class="items-center justify-center -left-11 absolute bg-white border-2 h-10 hidden lg:flex rounded w-10">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px" width="800px" version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#000000;}
                        </style>
                          <g>
                              <path class="st0" d="M511.414,217.728c-1.902-9.034-8.242-16.503-16.852-19.856l-30.197-11.736v31.046l5.718,2.223   c2.58,1.008,4.483,3.25,5.048,5.953c0.565,2.712-0.263,5.538-2.223,7.497L279.14,426.609c-3.834,3.824-9.561,5.03-14.62,3.071   l-43.064-16.748v31.046l30.226,11.755c17.18,6.678,36.678,2.581,49.715-10.454l202.594-202.59   C510.519,236.161,513.317,226.77,511.414,217.728z"/>
                              <path class="st0" d="M30.914,299.684c1.356-18.895,7.423-43.649,28.466-42.481l192.2,74.751   c17.228,6.698,36.782,2.553,49.818-10.558l185.771-186.991c6.5-6.538,9.269-15.919,7.357-24.933   c-1.912-9.023-8.242-16.474-16.832-19.809L286.666,15.374c-17.228-6.698-36.791-2.553-49.818,10.559L21.646,242.538   C4.625,256.545,0,282.664,0,305.863c0,23.2,1.545,51.043,27.844,61.866l-6.198-1.451l57.942,22.532v-20.742   c0-3.372,0.42-6.668,1.107-9.88l-38.94-15.147C29.37,338.35,29.36,321.499,30.914,299.684z"/>
                              <path class="st0" d="M111.048,352.658c-4.088,4.107-6.381,9.645-6.381,15.41v96.076l40.823-8.741l50.888,44.383v-96.048   c0-5.793,2.298-11.331,6.386-15.419l16.272-16.276l-91.706-35.662L111.048,352.658z"/>
                          </g>
                      </svg>
                  </div>
                  <div>
                    <a href="/dictionary" target="_blank" class="font-semibold text-gray-700 text-xl">Справочник</a>
                    <p class="font-semibold text-gray-400 text-sm">Просмотреть и добавить значения</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </main>

    <footer>
    </footer>
</div>