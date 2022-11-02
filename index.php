<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:index.html');
}

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontawesome Icons CDN -->
    <script src="https://kit.fontawesome.com/5c57ccedd7.js" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Tailwind CSS  -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons CDN  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- External JS  -->
    <script src="script.js"></script>

    <!-- External CSS  -->
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Digital Hostel</title>
</head>

<body>
    <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center ">
            <span class="text-2xl font-[Montserrat] cursor-pointer font-bold">
                VGI Hostel
            </span>

            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        <ul id="menu" class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="/" class="text hover:text-[#FF8600] duration-500">HOME</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="./error.php" class="text hover:text-[#FF8600] duration-500">SERVICE</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="./error.php" class="text hover:text-[#FF8600] duration-500">ABOUT</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="./pages/contact.php" class="text hover:text-[#FF8600] duration-500">CONTACT</a>
            </li>

            <button class="bg-[#FF8600D1] text-white font-[Montserrat] duration-500 px-6 py-2 mx-4 hover:bg-[#FF8600] rounded ">
                Get started
            </button>
        </ul>
    </nav>

    <!-- ================ -->
    <!-- BANNER  -->
    <!-- ================ -->

    <section class="relative bg-[url('./images/hostel1.png')] bg-cover bg-center bg-no-repeat" id="MainContent">
        <div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/25">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl text-center sm:text-left">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    VGI Hostel

                    <strong class="block font-extrabold text-rose-700">
                        Forever Home.
                    </strong>
                </h1>

                <p class="mt-4 max-w-lg sm:text-xl sm:leading-relaxed">
                    We understand that most of our students are moving away from home for the first time, so we strive to make the transition as smooth as possible by providing comfortable, safe and homely set-up within the campus
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="#" class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                        Register
                    </a>

                    <a href="./pages/contact.html" class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ -->
    <!-- FACILITIES  -->
    <!-- ================ -->

    <section class="bg-gray-100 text-justify">
        <div class="max-w-screen px-4 py-16 sm:px-6 lg:px-8 items-center">
            <div class="max-w">
                <h2 class="text-3xl font-bold sm:text-4xl">What makes us special</h2>

                <p class="mt-4 text-gray-800">
                    The institute provides magnificent residential facilities offering a comprehensive range of facilities within the institute, separately for boys and girls. All the rooms have been designed to provide adequate moving space and ample air and light.
                    Residential facility is permitted on annual basis for students admitted for regular programmes for the duration of regular academic. The hostel is administered by chief warden and assisted by warden/assistant warden. Each room is provided with furniture needed by a student i.e. bed, table, chair, cupboard, etc. Hostel rooms are allotted on "first come first serve basis".
                </p>
            </div>
            <div class="mt-2">
                <h3 class="text-2xl font-bold sm:text-2xl">FACILITIES</h3>
                <ul class="mt-4 list-decimal list-inside text-md text-gray-800 font-bold">
                    <li class="m-2">
                        Separate residential facility for boys and girls within the campus.
                    </li>
                    <li class="m-2">
                        An easygoing and friendly environment.
                    </li>
                    <li class="m-2">
                        24x7 Wi-Fi connectivity provided in all hostels.
                    </li>
                    <li class="m-2">
                        Mess, canteen, RO water system, hot water supply through geysers in winter.
                    </li>
                    <li class="m-2">
                        Guest room for parents/ guardian/ guest person(s) at reasonable charges.
                    </li>
                    <li class="m-2">
                        24x7 electricity and water supply in all the hostels.
                    </li>
                    <li class="m-2">
                        CCTV cameras at entrances of all hostels and foyer inside the campus.
                    </li>
                    <li class="m-2">
                        Sports (indoor & outdoor) and Gym facility is also available.
                    </li>
                    <li class="m-2">
                        Gymnasium
                    </li>
                    <li class="m-2">
                        Events and Activities
                    </li>
                </ul>
            </div>
            <div class="mt-4">
                <h3 class="text-2xl font-bold sm:text-2xl">
                    Hostel food facility
                </h3>
                <ul class="mt-4 list-decimal list-inside text-md text-gray-800 font-bold">
                    <li class="m-2">
                        Modern Mess to cater to students' needs
                    </li>
                    <li class="m-2">
                        Nutritions, hygienic and delicious vegetarian and non-vegetarian food provided.
                    </li>
                    <li class="m-2">
                        A lot of variety in the Menu.
                    </li>
                    <li class="m-2">
                        Nutritions Menu is well appreciated by the hostel inmates.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================ -->
    <!-- FAQs  -->
    <!-- ================ -->
    <section class="max-w-screen px-4 py-18 sm:px-6 lg:px-8 items-center">
        <div class="space-y-4 w-full">
            <h2 class="max-w-xl text-3xl font-bold sm:text-4xl m-3">
                Frequently Asked Questions
            </h2>
            <details class="group rounded-lg bg-gray-50 p-6" open>
                <summary class="flex cursor-pointer items-center justify-between">
                    <h2 class="font-medium text-gray-900">
                        Lorem ipsum dolor sit amet consectetur adipisicing?
                    </h2>

                    <span class="relative ml-1.5 h-5 w-5 flex-shrink-0">

                        <i class="fa-solid fa-chevron-down absolute inset-0 h-5 w-5 opacity-100 group-open:opacity-0"></i>

                        <i class="fa-solid fa-chevron-up absolute inset-0 h-5 w-5 opacity-0 group-open:opacity-100"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>

            <details class="group rounded-lg bg-gray-50 p-6">
                <summary class="flex cursor-pointer items-center justify-between">
                    <h2 class="font-medium text-gray-900">
                        Lorem ipsum dolor sit amet consectetur adipisicing?
                    </h2>

                    <span class="relative ml-1.5 h-5 w-5 flex-shrink-0">

                        <i class="fa-solid fa-chevron-down absolute inset-0 h-5 w-5 opacity-100 group-open:opacity-0"></i>

                        <i class="fa-solid fa-chevron-up absolute inset-0 h-5 w-5 opacity-0 group-open:opacity-100"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>

            <details class="group rounded-lg bg-gray-50 p-6">
                <summary class="flex cursor-pointer items-center justify-between">
                    <h2 class="font-medium text-gray-900">
                        Lorem ipsum dolor sit amet consectetur adipisicing?
                    </h2>

                    <span class="relative ml-1.5 h-5 w-5 flex-shrink-0">

                        <i class="fa-solid fa-chevron-down absolute inset-0 h-5 w-5 opacity-100 group-open:opacity-0"></i>

                        <i class="fa-solid fa-chevron-up absolute inset-0 h-5 w-5 opacity-0 group-open:opacity-100"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>

            <details class="group rounded-lg bg-gray-50 p-6">
                <summary class="flex cursor-pointer items-center justify-between">
                    <h2 class="font-medium text-gray-900">
                        Lorem ipsum dolor sit amet consectetur adipisicing?
                    </h2>

                    <span class="relative ml-1.5 h-5 w-5 flex-shrink-0">

                        <i class="fa-solid fa-chevron-down absolute inset-0 h-5 w-5 opacity-100 group-open:opacity-0"></i>

                        <i class="fa-solid fa-chevron-up absolute inset-0 h-5 w-5 opacity-0 group-open:opacity-100"></i>
                    </span>
                </summary>

                <p class="mt-4 leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
                    molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
                    voluptate dicta quo officiis explicabo consequuntur distinctio corporis
                    earum similique!
                </p>
            </details>
        </div>
    </section>


    <!-- ================ -->
    <!-- TESTIMONIALS  -->
    <!-- ================ -->

    <section class="bg-gray-100 mt-8">
        <div class="mx-auto max-w-[1340px] px-4 py-18 sm:px-6 sm:py-24 lg:mr-0 lg:pl-8 lg:pr-0">
            <div class="max-w-7xl items-end justify-between sm:flex sm:pr-6 lg:pr-8">
                <h2 class="max-w-xl text-4xl font-bold sm:text-5xl">
                    Read trusted reviews from our Hostlers
                </h2>

                <div class="mt-8 flex lg:mt-0">
                    <button class="prev-button text-pink-600 focus:text-pink-400 focus:outline-none">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="next-button ml-3 text-pink-600 focus:text-pink-400 focus:outline-none">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
                <div class="swiper-container !overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5">
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                    </div>

                                    <div class="mt-4">
                                        <h3 class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Lorem ipsum dolor sit amet.
                                        </h3>

                                        <p class="mt-4 text-lg text-gray-600">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ipsam cumque recusandae dolorum porro, quasi sunt
                                            necessitatibus dolorem ab laudantium vel.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-gray-500">- Pritam Kumar</footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5">
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </span>
                                    </div>

                                    <div class="mt-4">
                                        <h3 class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Lorem ipsum dolor sit amet.
                                        </h3>

                                        <p class="mt-4 text-lg text-gray-600">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ipsam cumque recusandae dolorum porro, quasi sunt
                                            necessitatibus dolorem ab laudantium vel.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-gray-500">- Shujauddin Qadri</footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5">
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-regular fa-star"></i>
                                        </span>
                                    </div>

                                    <div class="mt-4">
                                        <h3 class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Lorem ipsum dolor sit amet.
                                        </h3>

                                        <p class="mt-4 text-lg text-gray-600">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ipsam cumque recusandae dolorum porro, quasi sunt
                                            necessitatibus dolorem ab laudantium vel.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-gray-500">- Gyan Prakash</footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                <div>
                                    <div class="flex gap-0.5">
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <span class=" p-0.5">
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </span>
                                    </div>

                                    <div class="mt-4">
                                        <h3 class="text-2xl font-bold text-pink-600 sm:text-3xl">
                                            Lorem ipsum dolor sit amet.
                                        </h3>

                                        <p class="mt-4 text-lg text-gray-600">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ipsam cumque recusandae dolorum porro, quasi sunt
                                            necessitatibus dolorem ab laudantium vel.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-gray-500">- Ahmad Kamran</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ -->
    <!-- FOOTER  -->
    <!-- ================ -->

    <footer class="bg-gray-100 border-t-[2px]">
        <div class="relative mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 lg:pt-24">
            <div class="absolute top-2 right-4 sm:top-6 sm:right-6 lg:top-8 lg:right-8">
                <a class="inline-block rounded-full bg-teal-600 p-2 text-white shadow transition hover:bg-teal-500 sm:p-3 lg:p-4" href="#MainContent">

                    <i class="fa-solid fa-chevron-up"></i>
                </a>
            </div>

            <div class="lg:flex lg:items-end lg:justify-between">
                <div>
                    <div class="flex justify-center text-teal-600 lg:justify-start">
                        <p class="text-3xl font-extrabold sm:text-5xl">
                            VGI Hostel
                        </p>
                    </div>

                    <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500 lg:text-left">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt
                        consequuntur amet culpa cum itaque neque.
                    </p>
                </div>

                <nav class="mt-12 lg:mt-0">
                    <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:justify-end lg:gap-12">
                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                                Home
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                                About
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                                Services
                            </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-gray-700/75" href="/">
                                Gallery
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <p class="mt-12 text-center text-sm text-gray-500 lg:text-right">
                Copyright &copy; 2022. All rights reserved.
            </p>
        </div>
    </footer>
</body>

</html>