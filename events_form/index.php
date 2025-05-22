<?php
include_once '../_settings/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ABSPATH . '_includes/head.php'; ?>
</head>

<body>
    <?php include ABSPATH . '_includes/header.php'; ?>

    <section class="w-[85%] max-w-[1440px] mx-auto mt-20 flex flex-col sm:flex-row gap-8">
        <div class="w-full sm:w-1/2">
            <svg viewBox="0 0 629 372" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="#special_placeholder" />
            </svg>

        </div>
        <div class="w-full sm:w-1/2 flex flex-col">
            <div class="my-6">
                <h1 class="text-2xl lg:text-4xl xl:text-[3.25rem] text-primary font-semibold">Event Name</h1>
                <p class="text-sm lg:text-lg xl:text-2xl">Event Details: Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Nisi, excepturi.</p>
            </div>
            <div class="mt-2 flex flex-row items-center gap-1">
                <svg fill="var(--color-primary)" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem"
                    viewBox="0 0 48 48">
                    <use xlink:href="#location"></use>
                </svg>
                <p class="text-sm lg:text-lg xl:text-2xl">
                    Event Location
                </p>
            </div>
            <div class="mt-2 flex flex-row items-center gap-1">
                <svg fill="var(--color-primary)" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem"
                    viewBox="0 0 24 24">
                    <use xlink:href="#clock"></use>
                </svg>
                <p class="text-sm lg:text-lg xl:text-2xl">
                    Event Time
                </p>
            </div>
        </div>
    </section>

    <section class="w-[85%] max-w-3xl mx-auto mt-20 flex flex-col sm:flex-row gap-8">
        <div class="nut_box_4 w-full sm:w-2/3">
            <div class="content">
                <form>
                    <div
                        class="relative w-full rounded-[7px] w-[310px] h-[75px] sm:bg-transparent lg:bg-transparent bg-[#ECECEC] my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="75" fill="none" viewBox="0 0 350 75"
                            class="absolute top-0 left-0 hidden lg:block sm:block">
                            <path fill="#ECECEC"
                                d="M0 6a6 6 0 016-6h338a6 6 0 016 6v39.863a6 6 0 01-5.626 5.989l-7.098.443a5.999 5.999 0 00-4.87 3.075l-9.191 16.544A6.001 6.001 0 01317.97 75H6a6 6 0 01-6-6V6z">
                            </path>
                        </svg>
                        <div
                            class="absolute top-[13px] left-[20px] font-display text-[14px] text-[#343434] opacity-100">
                            Full Name<span style="color:crimson;font-weight:500">
                                <!-- -->*
                            </span>
                        </div>
                        <input type="text" placeholder="Enter Full Name"
                            class="absolute top-[35px] left-[20px]  w-full sm:w-[300px] lg:w-[300px] bg-transparent border-none outline-none font-sans font-medium text-[18px] text-[#343434]"
                            value="">
                    </div>
                    <div
                        class="relative w-full rounded-[7px] w-[310px] h-[75px] sm:bg-transparent lg:bg-transparent bg-[#ECECEC] my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="75" fill="none" viewBox="0 0 350 75"
                            class="absolute top-0 left-0 hidden lg:block sm:block">
                            <path fill="#ECECEC"
                                d="M0 6a6 6 0 016-6h338a6 6 0 016 6v39.863a6 6 0 01-5.626 5.989l-7.098.443a5.999 5.999 0 00-4.87 3.075l-9.191 16.544A6.001 6.001 0 01317.97 75H6a6 6 0 01-6-6V6z">
                            </path>
                        </svg>
                        <div
                            class="absolute top-[13px] left-[20px] font-display text-[14px] text-[#343434] opacity-100">
                            Institution<span style="color:crimson;font-weight:500">
                                <!-- -->*
                            </span>
                        </div>
                        <input type="text" placeholder="Institution name"
                            class="absolute top-[35px] left-[20px]  w-full sm:w-[300px] lg:w-[300px] bg-transparent border-none outline-none font-sans font-medium text-[18px] text-[#343434]"
                            value="">
                    </div>
                    <div
                        class="relative w-full rounded-[7px] w-[310px] h-[75px] sm:bg-transparent lg:bg-transparent bg-[#ECECEC] my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="75" fill="none" viewBox="0 0 350 75"
                            class="absolute top-0 left-0 hidden lg:block sm:block">
                            <path fill="#ECECEC"
                                d="M0 6a6 6 0 016-6h338a6 6 0 016 6v39.863a6 6 0 01-5.626 5.989l-7.098.443a5.999 5.999 0 00-4.87 3.075l-9.191 16.544A6.001 6.001 0 01317.97 75H6a6 6 0 01-6-6V6z">
                            </path>
                        </svg>
                        <div
                            class="absolute top-[13px] left-[20px] font-display text-[14px] text-[#343434] opacity-100">
                            Category<span style="color:crimson;font-weight:500">
                                <!-- -->*
                            </span>
                        </div>
                        <input type="text" placeholder="Category name"
                            class="absolute top-[35px] left-[20px]  w-full sm:w-[300px] lg:w-[300px] bg-transparent border-none outline-none font-sans font-medium text-[18px] text-[#343434]"
                            value="">
                    </div>
                    <div
                        class="relative w-full rounded-[7px] w-[350px] h-[75px] sm:bg-transparent lg:bg-transparent bg-[#ECECEC] my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="75" fill="none" viewBox="0 0 350 75"
                            class="absolute top-0 left-0 hidden lg:block sm:block">
                            <path fill="#ECECEC"
                                d="M0 6a6 6 0 016-6h338a6 6 0 016 6v39.863a6 6 0 01-5.626 5.989l-7.098.443a5.999 5.999 0 00-4.87 3.075l-9.191 16.544A6.001 6.001 0 01317.97 75H6a6 6 0 01-6-6V6z">
                            </path>
                        </svg>
                        <div
                            class="absolute top-[13px] left-[20px] font-display text-[14px] text-[#343434] opacity-100">
                            Bkash Ref. No<span style="color:crimson;font-weight:500">
                                <!-- -->*
                            </span>
                        </div>
                        <input type="text" placeholder="1234567890"
                            class="absolute top-[35px] left-[20px]  w-full sm:w-[300px] lg:w-[300px] bg-transparent border-none outline-none font-sans font-medium text-[18px] text-[#343434]"
                            value="">
                    </div>

                    <div class="w-full sm:w-4/4 flex flex-row items-center justify-end mt-4">
                        <button type="submit" value="Submit"
                            class="flex justify-center items-center rounded-full bg-primary text-white font-bold text-[18px] w-[2rem] h-[2rem] cursor-pointer hover:bg-[#0E1E2D] transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                <path fill="currentColor"
                                    d="M8.293 2.293a1 1 0 0 1 1.414 0l4.5 4.5a1 1 0 0 1 0 1.414l-4.5 4.5a1 1 0 0 1-1.414-1.414L11 8.5H1.5a1 1 0 0 1 0-2H11L8.293 3.707a1 1 0 0 1 0-1.414" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex flex-col gap-8 w-full sm:w-1/3">
            <div class="nut_box_4 w-full">
                <div class="content flex flex-col items-center justify-center">
                    <h3 class="text-xl text-primary font-semibold">Emergency Helpline</h3>
                    <a href="tel:01512345678" class="text-md">01512345678</a>
                    <a href="mailto:contact@example.com" class="text-md">contact@example.com</a>
                </div>
            </div>
            <div class="nut_box_4 w-full">
                <div class="content">
                    <h3 class="text-xl font-semibold">
                        Explore Other Upcoming Events
                    </h3>
                    <div class="w-full sm:w-3/4 flex flex-row items-center justify-end mt-4">
                        <button type="submit" value="Submit"
                            class="flex justify-center items-center rounded-full bg-primary text-white font-bold text-[18px] w-[2rem] h-[2rem] cursor-pointer hover:bg-[#0E1E2D] transition duration-300 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                <path fill="currentColor"
                                    d="M8.293 2.293a1 1 0 0 1 1.414 0l4.5 4.5a1 1 0 0 1 0 1.414l-4.5 4.5a1 1 0 0 1-1.414-1.414L11 8.5H1.5a1 1 0 0 1 0-2H11L8.293 3.707a1 1 0 0 1 0-1.414" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>