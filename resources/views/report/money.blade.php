<div class="m-8 ">
    @section('title','Report')
    <a href="{{ route('Box') }}" class="rounded px-3 mb-2 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
        گەڕانەوە
    </a>
    <h1 class="text-center text-xl my-4">بەشی ڕاپۆرتی پارە</h1>

    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class="container flex flex-col items-center p-4 mx-auto md:p-8">
            <h1 class="text-3xl font-bold leading-none text-center sm:text-4xl">Help Center</h1>
            <div class="relative mt-6 mb-12">
                <span class="absolute inset-y-0 flex items-center pl-2 mx-auto">
                    <button type="submit" title="Search" class="p-1 focus:outline-none focus:ring">
                        <svg fill="currentColor" viewBox="0 0 512 512" class="w-4 h-4 dark:text-gray-100">
                            <path d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z"></path>
                        </svg>
                    </button>
                </span>
                <input type="search" name="Search" placeholder="Search..." class="w-full py-3 pl-12 text-sm rounded-full sm:w-96 focus:outline-none dark:bg-gray-800 dark:text-gray-100 focus:dark:bg-gray-900">
            </div>
            <div class="flex flex-col w-full divide-y sm:flex-row sm:divide-y-0 sm:divide-x sm:px-8 lg:px-12 xl:px-32 divide-gray-700">
                <div class="flex flex-col w-full divide-y divide-gray-700">
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Billing</a>
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Support</a>
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Account</a>
                </div>
                <div class="flex flex-col w-full divide-y divide-gray-700">
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Features</a>
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Contact us</a>
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">My orders</a>
                </div>
                <div class="hidden w-full divide-y sm:flex-col sm:flex divide-gray-700">
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Enterprise</a>
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Privacy</a>
                    <a rel="noopener noreferrer" href="#" class="flex items-center justify-center p-4 sm:py-8 lg:py-12">Developers</a>
                </div>
            </div>
        </div>
    </section>

</div>
