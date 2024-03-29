<div class=" w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

    <div class="border-t border-gray-200 dark:border-gray-600">
        <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
             aria-labelledby="stats-tab">
            <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                <div class="flex flex-col items-center justify-center">
                    <dd class="text-gray-500 dark:text-gray-400">Nombres de recherche</dd>
                    <dt class="mb-2 text-4xl font-extrabold">73M+</dt>

                </div>
                <div class="flex flex-col items-center justify-center">
                    <dd class="text-gray-500 dark:text-gray-400">Nombres de hints</dd>
                    <dt class="mb-2 text-4xl font-extrabold">100M+</dt>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dd class="text-gray-500 dark:text-gray-400">Nombres de Pays</dd>
                    <dt class="mb-2 text-4xl font-extrabold">{{$countries}}</dt>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dd class="text-gray-500 dark:text-gray-400">Drapeaux</dd>
                    <dt class="mb-2 text-4xl font-extrabold">{{$flags}}</dt>


                    <div class="flex flex-col items-center justify-center">
                        <dd class="text-gray-500 dark:text-gray-400">Panneaux</dd>
                        <dt class="mb-2 text-4xl font-extrabold">71</dt>

                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dd class="text-gray-500 dark:text-gray-400">LOL</dd>
                        <dt class="mb-2 text-4xl font-extrabold">∞</dt>

                    </div>
                </div>
            </dl>
        </div>
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
             aria-labelledby="about-tab">
            <!-- List -->
            <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
            </ul>
        </div>
        <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
            <div id="accordion-flush" data-accordion="collapse"
                 data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                 data-inactive-classes="text-gray-500 dark:text-gray-400">
            </div>
        </div>
    </div>
</div>

