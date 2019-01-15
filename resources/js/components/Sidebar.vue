<template>
    <aside class="fixed pin-t flex-no-shrink bg-x-gradient-moon-grey-proton-grey-80 leading-tight lg:w-376 lg:flex lg:flex-col z-30 h-screen w-full hidden"
           data-main-sidebar="">
        <div class="lg:block h-18 flex-no-grow flex-no-shrink hidden"></div>

        <div class="flex-grow w-inherit overflow-y-auto h-full">
            <div class="h-full"
                 data-sidebar-scroll="">
                <ul class="list-reset px-10 pt-12 pb-6">
                    <li class="mb-6">
                        <a href="/doc"
                           class="text-nebula-blue flex items-center no-underline hover:text-nebula-blue text-sm"
                           data-sidebar-active="true">
                            <span class="flex w-4 h-4 mr-6 items-center justify-center fill-current">
                                <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 17">
                                    <path d="M14.81,5.71l-7-5.6a.48.48,0,0,0-.62,0l-7,5.6A.49.49,0,0,0,0,6.1v8.8A2.08,2.08,0,0,0,2.06,17H12.94A2.08,2.08,0,0,0,15,14.9V6.1A.49.49,0,0,0,14.81,5.71ZM9.33,16H5.67V9H9.33ZM14,14.9A1.08,1.08,0,0,1,12.94,16H10.33V8.5a.5.5,0,0,0-.5-.5H5.17a.5.5,0,0,0-.5.5V16H2.06A1.08,1.08,0,0,1,1,14.9V6.34l6.5-5.2L14,6.34Z"></path>
                                </svg>
                            </span>
                            Home
                        </a>
                    </li>

                    <li class="cursor-pointer mb-6 text-cosmos-black lg:hidden">
                        <span class="flex items-center capitalize text-sm" data-toggle-item="true">
                            <span class="flex w-4 h-4 mr-6 items-center justify-center fill-current">
                                <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 13">
                                    <path d="M14.85.15a.48.48,0,0,0-.7,0,.48.48,0,0,0,0,.7L19.79,6.5l-5.64,5.65a.48.48,0,0,0,0,.7.5.5,0,0,0,.7,0l6-6a.48.48,0,0,0,0-.7Z"></path>
                                    <path d="M6.5,0a.47.47,0,0,0-.35.15l-6,6a.48.48,0,0,0,0,.7l6,6a.5.5,0,0,0,.7,0,.48.48,0,0,0,0-.7L1.21,6.5,6.85.85a.48.48,0,0,0,0-.7A.47.47,0,0,0,6.5,0Z"></path>
                                </svg>
                            </span>
                            API Reference
                        </span>

                        <ul class="hidden list-reset ml-10" data-sub-menu="">
                            <li class="mb-4 mt-6 uppercase text-xs text-cosmos-black-opacity-80 tracking-wide font-semibold">
                                API Clients
                            </li>

                            <ul class="list-reset md:column-1 column-2 -mx-4">
                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        PHP
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Ruby
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        JavaScript
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Python
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        iOS
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Android
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        .NET
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Java
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Go
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Scala
                                    </a>
                                </li>
                            </ul>

                            <li class="mb-4 mt-2 uppercase text-xs text-cosmos-black-opacity-80 tracking-wide font-semibold">
                                Framework Integrations
                            </li>

                            <ul class="list-reset md:column-1 column-2 -mx-16">
                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Rails
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Symfony
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Django
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Laravel
                                    </a>
                                </li>
                            </ul>

                            <li class="mb-4 mt-2 uppercase text-xs text-cosmos-black-opacity-80 tracking-wide font-semibold">
                                InstantSearch Widgets
                            </li>

                            <ul class="list-reset md:column-1 column-2 -mx-16">
                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        InstantSearch.js
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        React InstantSearch
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Vue InstantSearch
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        iOS InstantSearch
                                    </a>
                                </li>

                                <li class="mb-4 mx-4">
                                    <a href="#" class="hover:text-nebula-blue no-underline text-nova-grey">
                                        Android InstantSearch
                                    </a>
                                </li>
                            </ul>

                            <li class="mb-4 mt-2">
                                <a href="#"
                                   class="text-nova-grey hover:text-nebula-blue no-underline capitalize"
                                   data-sidebar-active="false">
                                    API Methods
                                </a>
                            </li>

                            <li class="mb-4 mt-2">
                                <a href="#"
                                   class="text-nova-grey hover:text-nebula-blue no-underline capitalize"
                                   data-sidebar-active="false">
                                    API Parameters
                                </a>
                            </li>

                            <li class="mb-4 mt-4">
                                <a href="#"
                                   class="text-nova-grey hover:text-nebula-blue no-underline capitalize"
                                   data-sidebar-active="false">
                                    REST API
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="cursor-pointer mb-6 text-cosmos-black lg:hidden">
                                        <span class="flex hover:text-nebula-blue items-center no-underline text-cosmos-black"
                                              data-close-dropdown=""
                                              data-search-query="faq "
                                              data-sidebar-active="false"
                                              data-start-search-on-click=""
                                              data-toggle-sidebar="">
                                            <span class="flex w-4 h-4 mr-6 items-center justify-center fill-current">
                                                <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21">
                                                    <path d="M10.5,0A10.5,10.5,0,1,0,21,10.5,10.51,10.51,0,0,0,10.5,0Zm0,20A9.5,9.5,0,1,1,20,10.5,9.51,9.51,0,0,1,10.5,20Z"></path>
                                                    <path d="M11.58,5.19A3.51,3.51,0,0,0,7.12,7.33a.48.48,0,0,0,0,.39A.49.49,0,0,0,7.42,8a.48.48,0,0,0,.39,0,.49.49,0,0,0,.25-.28A2.5,2.5,0,0,1,10.42,6a2.37,2.37,0,0,1,.83.14A2.5,2.5,0,0,1,12.92,8.5c0,1.61-2.63,2.52-2.66,2.52a.51.51,0,0,0-.31.64.5.5,0,0,0,.63.31c.34-.11,3.34-1.17,3.34-3.47A3.53,3.53,0,0,0,11.58,5.19Z"></path>
                                                    <path d="M10.84,15.12a.57.57,0,0,0-.7,0,.51.51,0,0,0-.09.16.42.42,0,0,0-.05.2.52.52,0,0,0,.14.36.55.55,0,0,0,.72,0,1.28,1.28,0,0,0,.1-.17.47.47,0,0,0,0-.38A.76.76,0,0,0,10.84,15.12Z"></path>
                                                </svg>
                                            </span>

                                            FAQ
                                        </span>
                    </li>

                    <li class="cursor-pointer mb-6 text-cosmos-black"
                        data-sidebar-active="">
                        <span class="flex items-center capitalize text-sm"
                              data-toggle-item="true"
                              @click="toggleMessages">
                            <span class="flex w-4 h-4 mr-6 items-center justify-center fill-current">
                                <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.2 18.2">
                                    <path d="M8.88,7.93,5.61,6.79,6.45.54A.47.47,0,0,0,6.13,0a.46.46,0,0,0-.57.21L.06,9.58l0,.08a.48.48,0,0,0,.29.61l3.27,1.14-.84,6.25a.47.47,0,0,0,.32.51.41.41,0,0,0,.16,0A.47.47,0,0,0,3.64,18L9.13,8.62a.59.59,0,0,0,0-.08A.48.48,0,0,0,8.88,7.93Zm-4.33,3.2a.49.49,0,0,0-.32-.51L1.13,9.54l4.19-7L4.65,7.07A.49.49,0,0,0,5,7.58l3.1,1.08-4.19,7Z"></path>
                                </svg>
                            </span>

                            Getting started
                        </span>

                        <ul class="list-reset text-sm ml-10"
                            data-sub-menu=""
                            :class="{ 'hidden' : message }">
                            <li class="mb-4 mt-4">
                                <a href="#"
                                   class="hover:text-nebula-blue no-underline text-nova-grey"
                                   data-sidebar-active="false">
                                    How algolia works
                                </a>
                            </li>

                            <li class="mb-4">
                                <a href="#"
                                   class="hover:text-nebula-blue no-underline text-nova-grey"
                                   data-sidebar-active="false">
                                    Quick start
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="cursor-pointer mb-6 text-cosmos-black"
                        data-sidebar-active="">
                        <span class="flex items-center capitalize text-sm"
                              data-toggle-item="true"
                              @click="toggleItems">
                            <span class="flex w-4 h-4 mr-6 items-center justify-center fill-current">
                                <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17">
                                    <path d="M14.72,17H2.28A2.28,2.28,0,0,1,0,14.72V11.17a.5.5,0,0,1,.5-.5.5.5,0,0,1,.5.5v3.55A1.28,1.28,0,0,0,2.28,16H14.72A1.28,1.28,0,0,0,16,14.72V11.17a.5.5,0,0,1,1,0v3.55A2.28,2.28,0,0,1,14.72,17ZM8.5,11.67a.5.5,0,0,1-.5-.5V1.71L4.41,5.3a.5.5,0,1,1-.71-.71L8.15.15h0A.31.31,0,0,1,8.31,0a.48.48,0,0,1,.18,0h0a.58.58,0,0,1,.18,0,.36.36,0,0,1,.15.1h0L13.3,4.59a.5.5,0,1,1-.71.71L9,1.71v9.46A.5.5,0,0,1,8.5,11.67Z"></path>
                                </svg>
                            </span>

                            Sending and managing data
                        </span>

                        <ul class="list-reset ml-10"
                            :class="{ 'hidden' : item }">
                            <li class="mb-4 mt-4">
                                <a href="#"
                                   class="hover:text-nebula-blue no-underline text-nova-grey"
                                   data-sidebar-active="false">
                                    Prepare your data
                                </a>
                            </li>

                            <li class="mb-4">
                                <a href="#"
                                   class="hover:text-nebula-blue no-underline text-nova-grey"
                                   data-sidebar-active="false">
                                    Send and update your data
                                </a>
                            </li>

                            <li class="mb-4">
                                <a href="#"
                                   class="hover:text-nebula-blue no-underline text-nova-grey"
                                   data-sidebar-active="false">
                                    Manage your indices
                                </a>
                            </li>

                            <li class="mb-4">
                                <a href="#"
                                   class="hover:text-nebula-blue no-underline text-nova-grey"
                                   data-sidebar-active="false">
                                    Managing environments
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="cursor-pointer mb-6 text-cosmos-black" data-sidebar-active="">
                        <span class="flex items-center capitalize text-sm"
                              data-toggle-item="true">
                            <span class="flex w-4 h-4 mr-6 items-center justify-center fill-current">
                                <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17">
                                    <path d="M16.5,17H10.28a.5.5,0,0,1-.5-.5V10.28a.5.5,0,0,1,.5-.5H16.5a.5.5,0,0,1,.5.5V16.5A.5.5,0,0,1,16.5,17Zm-5.72-1H16V10.78H10.78ZM6.72,17H.5a.5.5,0,0,1-.5-.5V10.28a.5.5,0,0,1,.5-.5H6.72a.5.5,0,0,1,.5.5V16.5A.5.5,0,0,1,6.72,17ZM1,16H6.22V10.78H1ZM16.5,7.22H10.28a.5.5,0,0,1-.5-.5V.5a.5.5,0,0,1,.5-.5H16.5a.5.5,0,0,1,.5.5V6.72A.5.5,0,0,1,16.5,7.22Zm-5.72-1H16V1H10.78Zm-4.06,1H.5a.5.5,0,0,1-.5-.5V.5A.5.5,0,0,1,.5,0H6.72a.5.5,0,0,1,.5.5V6.72A.5.5,0,0,1,6.72,7.22ZM1,6.22H6.22V1H1Z"></path>
                                </svg>
                            </span>

                            Managing results
                        </span>

                        <ul class="hidden list-reset ml-40">
                            <li class="mb-4 mt-4">
                                <a href="#"
                                   class="hover:text-nebula-blue no-underline text-nova-grey"
                                   data-sidebar-active="false">
                                    Relevance overview
                                </a>
                            </li>

                            <li class="font-semibold mb-16 mt-24 text-cosmos-black-opacity-80 text-xs tracking-wide uppercase">
                                Must do
                            </li>

                            <ul class="list-reset">
                                <li class="mb-4 mt-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Searchable attributes
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Custom ranking
                                    </a>
                                </li>
                            </ul>

                            <li class="font-semibold mb-16 mt-24 text-cosmos-black-opacity-80 text-xs tracking-wide uppercase">
                                Refine results
                            </li>

                            <ul class="list-reset">
                                <li class="mb-4 mt-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Sorting
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Filtering
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Grouping
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Merchandising and promoting
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Personalizing
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Geolocation
                                    </a>
                                </li>
                            </ul>

                            <li class="font-semibold mb-16 mt-24 text-cosmos-black-opacity-80 text-xs tracking-wide uppercase">
                                Optimize search results
                            </li>

                            <ul class="list-reset">
                                <li class="mb-4 mt-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Adding synonyms
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Detecting intent
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Typo tolerance
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Handling Natural Languages (NLP)
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Empty or insufficient results
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Improve relevance with analytics
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Override search engine defaults
                                    </a>
                                </li>

                                <li class="mb-4">
                                    <a href="#"
                                       class="hover:text-nebula-blue no-underline text-nova-grey"
                                       data-sidebar-active="false">
                                        Troubleshooting relevance
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>

                    <li class="cursor-pointer mb-6 text-cosmos-black"
                        data-sidebar-active="">
                        <span class="flex items-center capitalize text-sm"
                              data-toggle-item="true">
                            <span class="flex w-4 h-4 mr-6 items-center justify-center fill-current">
                                <svg class="h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17">
                                    <path d="M14.72,0H2.28A2.28,2.28,0,0,0,0,2.28V14.72A2.28,2.28,0,0,0,2.28,17H14.72A2.28,2.28,0,0,0,17,14.72V2.28A2.28,2.28,0,0,0,14.72,0ZM2.28,1H14.72A1.28,1.28,0,0,1,16,2.28V5.33H1V2.28A1.28,1.28,0,0,1,2.28,1ZM1,14.72V6.33H5.33V16H2.28A1.28,1.28,0,0,1,1,14.72ZM14.72,16H6.33V6.33H16v8.39A1.28,1.28,0,0,1,14.72,16Z"></path>
                                </svg>
                            </span>

                            Building Search UI
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="px-10">
            <div class="flex flex-wrap items-center lg:justify-between -mx-4 py-4 border-proton-grey-opacity-60 border-solid border-t">
                <a class="block mx-4 py-2 text-xs text-telluric-blue hover:text-solstice-blue no-underline transition-fast-out"
                   href="#"
                   target="_blank">
                    Algolia.com
                </a>

                <a class="block mx-4 py-2 text-xs text-telluric-blue hover:text-solstice-blue no-underline transition-fast-out"
                   href="#"
                   target="_blank">
                    Dashboard
                </a>

                <a class="block mx-4 py-2 text-xs text-telluric-blue hover:text-solstice-blue no-underline transition-fast-out"
                   href="#"
                   rel="nofollow"
                   target="_blank">
                    Old Algolia Docs
                </a>
            </div>
        </div>

        <button class="flex lg:hidden absolute items-center pin-t pin-r mt-12 mr-10 text-telluric-blue-opacity-80 hover:text-telluric-blue fill-current transition-fast-out focus:outline-none focus:shadow-outline"
                data-toggle-sidebar="">
                            <span class="flex items-center h-4 w-4 mr-4 flex-no-grow flex-no-shrink">
                                <svg class="block h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                    <path d="M8.41,7l5.3-5.29A1,1,0,1,0,12.29.29L7,5.59,1.71.29A1,1,0,0,0,.29,1.71L5.59,7,.29,12.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L7,8.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path>
                                </svg>
                            </span>

            <span class="block flex-no-grow flex-no-shrink mt-2 font-sans-alt text-base leading-none"> Close </span>
        </button>
    </aside>
</template>

<script>
    export default {
        data() {
            return {
                message: true,
                item: true,
            };
        },

        methods: {
            toggleMessages() {

                if(this.message === true)
                    return this.message = false;
                else
                    return this.message = true;
            },


            toggleItems() {

                if(this.item === true)
                    return this.item = false;
                else
                    return this.item = true;
            }
        }
    }
</script>
