<!doctype html>
<html lang="en_AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | AJG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=corben:400,700" rel="stylesheet"/>

    <!-- CSS File -->
    <link href="./assets/css/site.css" rel="stylesheet">
    <!-- JS Files -->


</head>
<body>
<div class="bg-gray-900 m-0 p-0 text-gray-200" id="page-top">
    <header class="text-gray-300 body-font container mx-auto flex flex-row p-5 mb-6 justify-between items-center">

        <h1>
            <a class="flex title-font font-medium items-center text-gray-400 mb-4 md:mb-0"
            href=".">
                <span><i class="fa fa-worm text-3xl text-gray-200"></i></span>
                <span class="ml-3 text-xl inline-block font-serif">Quick Site</span>
            </a>
        </h1>


        <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4
            text-zinc-500
            flex flex-wrap items-center text-base justify-left grow">
            <a class="mr-5 py-2
              hover:text-zinc-100
              border-0 border-b-2 border-b-zinc-500 hover:border-zinc-200"
               href="about.php">
                About
            </a>
            <a class="mr-5 py-2
              hover:text-zinc-100
              border-0 border-b-2 border-b-zinc-500 hover:border-zinc-200"
               href="contact.php">
                Contact Us
            </a>
            <a class="mr-5 py-2
              hover:text-zinc-100
              border-0 border-b-2 border-b-zinc-500 hover:border-zinc-200">
                Third Link
            </a>
            <a class="mr-5 py-2
              hover:text-zinc-100
              border-0 border-b-2 border-b-zinc-500 hover:border-b-zinc-200">
                Fourth Link
            </a>
        </nav>


        <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4
            text-gray-500
            flex flex-wrap items-center text-base justify-right">
            <a class="mr-5 py-2
              hover:text-gray-100
              border-0 border-b-2 border-b-gray-500 hover:border-gray-200">
                Login
            </a>
            <a class="mr-5 py-2
              hover:text-gray-100
              border-0 border-b-2 border-b-gray-500 hover:border-gray-200">
                Register
            </a>
        </nav>

    </header>

    <main class="min-h-screen flex flex-col gap-8
             container grow w-full overflow-hidden
             px-6 mx-auto
             bg-white text-gray-700">

        <!-- Page Heading -->
        <header class="-mx-6
                     bg-gray-700 text-gray-200
                       py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl leading-tight font-serif">
                Welcome
            </h2>
        </header>

        <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 dark:bg-gray-900">
            <div class="p-8 md:p-12 lg:px-16 lg:py-24">
                <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                    <h2 class="text-2xl font-thin text-gray-900 md:text-3xl dark:text-white">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit
                    </h2>

                    <p class="hidden text-gray-500 md:mt-4 md:block dark:text-gray-300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam
                        sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat
                        quisque ut interdum tincidunt duis.
                    </p>

                    <div class="mt-4 md:mt-8">
                        <a
                                href="#"
                                class="inline-block rounded-sm bg-emerald-600 px-12 py-3 text-md font-medium text-white transition hover:bg-emerald-700 focus:ring-3 focus:ring-yellow-400 focus:outline-hidden"
                        >
                            Get Started Today
                        </a>
                    </div>
                </div>
            </div>

            <img
                    alt=""
                    src="https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="h-56 w-full object-cover sm:h-full"
            />
        </section>

        <section class="mx-auto w-auto">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                <div>
                    <div class="max-w-lg md:max-w-none">
                        <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
                            Guest Book
                        </h2>

                        <form class="mt-4 text-gray-700 flex flex-col gap-8"
                              method="POST"
                              action="#">

                            <label for="GuestName">
                                <span class="text-md font-medium text-gray-700"> Name </span>

                                <input type="text"
                                       id="GuestName"
                                       class="p-2 mt-0.5
                                              w-full
                                              rounded border border-gray-300
                                              shadow-sm
                                              sm:text-md"
                                />
                            </label>

                            <label for="GuestEmail">
                                <span class="text-md font-medium text-gray-700"> Email </span>

                                <input
                                        type="email"
                                        id="GuestEmail"
                                        class="p-2 mt-0.5 w-full rounded border border-gray-300 shadow-sm sm:text-md"
                                />
                            </label>


                            <label for="GuestComment">
                                <span class="text-md font-medium text-gray-700"> Comment </span>

                                <textarea
                                        name="guest_comment"
                                        id="GuestComment"
                                        class="p-2 mt-0.5
                                               w-full resize-none
                                               rounded border border-gray-300
                                               shadow-sm
                                               sm:text-md"
                                        rows="4"
                                ></textarea>
                            </label>

                            <button class="btn-primary">
                                Save
                            </button>


                        </form>
                    </div>
                </div>

                <div>
                    <img
                            src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="rounded"
                            alt=""
                    />
                </div>
            </div>
        </section>


        <section class="gap-6 flex flex-col">

            <p>This is section content</p>

            <blockquote class="bg-gray-100 border-l-8 border-r-gray-300 mx-6 p-2 pl-6 italic">
                <p class="text-xl text-gray-300">
                    Using a block quote as a "call out".
                </p>
            </blockquote>

            <p>This is section content</p>

        </section>

    </main>

    <footer class="p-8 pb-12 mt-8 mx-auto
            container grow w-full overflow-hidden
            gap-12 flex flex-wrap justify-between">

        <nav>
            <h5 class="text-left font-medium tracking-widest text-neutral-500 uppercase title-font text-xs">
                Terms & Conditions
            </h5>

            <a class="my-1 block" href="privacy.php">
                Privacy Policy
                <span class="text-sky-600 text-xs p-1">TBA</span>
            </a>

            <a class="my-1 block" href="terms.php">
                Terms & Conditions
                <span class="text-sky-600 text-xs p-1">TBA</span>
            </a>

            <p class="mt-4 text-md capitalize text-neutral-400">
                © Copyright 2025 NAME/COMPANY. All rights reserved
            </p>
        </nav>

        <nav>
            <h5 class="text-left font-medium tracking-widest text-neutral-500 uppercase title-font text-xs">
                Support
            </h5>

            <a class="my-1 block" href="https://help.screencraft.net.au">
                Help Center
                <span class="text-sky-600 text-xs p-1">New</span>
            </a>
            <a class="my-1 block" href="https://help.screencraft.net.au/hc/2680392001">
                FAQs
                <span class="text-sky-600 text-xs p-1">New</span>
            </a>

        </nav>


        <nav>
            <h5 class="text-left font-medium tracking-widest text-neutral-500 uppercase title-font text-xs">
                About
            </h5>

            <a class="my-1 block" href="/about">
                Personal and project Information
                <span class="text-sky-600 text-xs p-1"></span>
            </a>

            <a class="my-1 block" href="https://github.com/YOUR_GITHUB_NAME">
                GitHub Profile
                <span class="text-sky-600 text-xs p-1">New</span>
            </a>

            <a class="my-1 block" href="contact.php">
                Contact Us
                <span class="text-sky-600 text-xs p-1">New</span>
            </a>

            <a href="#page-top" class="bock mt-6 text-md text-neutral-400">Jump to Top</a>

        </nav>

    </footer>
</div>

</body>
</html>
