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

    <!-- Upcoming Events Section -->
    <section class="w-[95%] max-w-[1600px] mx-auto mt-20 px-4">
        <div class="flex items-center justify-start gap-4 text-primary">
            <span
                class="font-display text-md sm:text-xl md:text-2xl lg:text-4xl font-semibold uppercase whitespace-nowrap">
                Upcoming Events
            </span>
        </div>

        <div class="container mx-auto p-4">
            <!-- Upcoming Events Grid Container -->
            <div id="upcoming-events-container" class="grid grid-cols-4 gap-6">
                <!-- Event cards or no events message will be inserted here -->
            </div>
        </div>
    </section>

    <!-- Our Events Section -->
    <section class="w-[95%] max-w-[1600px] mx-auto mt-20 px-4">
        <div class="flex items-center justify-start gap-4 text-primary">
            <span
                class="font-display text-md sm:text-xl md:text-2xl lg:text-4xl font-semibold uppercase whitespace-nowrap">
                Our Events
            </span>
        </div>

        <div class="container mx-auto p-4">
            <!-- Our Events Grid Container -->
            <div id="our-events-container" class="grid grid-cols-4 gap-6">
                <!-- Event cards or no events message will be inserted here -->
            </div>
        </div>
    </section>

    <script defer>
    const placeholderImage = "/assets/img/svg/banner.svg";

    const staticUpcomingEvents = [{
            heading: "Tech Talk",
            time: "10:00 AM",
            location: "Room 101",
            details: "Join our expert speakers as they discuss the latest advancements in AI and machine learning technologies, with hands-on demonstrations and Q&A sessions to deepen your understanding of cutting-edge innovations.",
            image: placeholderImage,
            link: "/event/"
        },
        {
            heading: "Workshop",
            time: "2:00 PM",
            location: "Room 102",
            details: "A hands-on workshop focusing on practical skills in web development, covering frameworks like React and Node.js, with real-world project examples and personalized feedback from industry professionals.",
            image: placeholderImage,
            link: "/event/"
        },
        {
            heading: "Seminar",
            time: "4:00 PM",
            location: "Auditorium A",
            details: "Explore emerging trends in cybersecurity, including threat detection, encryption techniques, and best practices for securing digital assets in an increasingly connected world.",
            image: placeholderImage,
            link: "/event/"
        }
    ];

    const staticOurEvents = [{
            heading: "Majlish-e-Ifter",
            time: "March 17, 2025",
            location: "UIU Cafeteria",
            details: "The UIU Robotics Club cordially invites you to Majlish-e-Iftar, a special evening of togetherness, reflection, and celebration of the holy month of Ramadan! 🕌✨",
            image: "https://scontent.fdac11-2.fna.fbcdn.net/v/t39.30808-6/490027735_697422702951439_4002414821349991261_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeFqXUPVyN0AqEtR3CBy1sbF2Ne4Cmso4frY17gKayjh-n6_c_hwPgoaW01JbkhLp1XUuw6eVAU5f9Vx5FPI75RU&_nc_ohc=acWyJljVp0MQ7kNvwF0j57L&_nc_oc=Adme6ovXR1TBFUimlKaxSHIuWyFQVIkwvtbzT6lvedhrVqRKbHfR8wEHlLrklWcS9i0&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-2.fna&_nc_gid=31XN1OvO91nZvlHhGr47KQ&oh=00_AfJhQ1djo6hpR3VxPCbiyQy5znLbYrfpP_29cmPjlunkuw&oe=68364C8A",
            link: "/event/"
        },
        {
            heading: "UIU CSE Fest",
            time: "June 17-18, 2025",
            location: "United International University",
            details: "Join us for the UIU CSE Fest, a two-day celebration of technology and innovation, featuring workshops, competitions, and networking opportunities with industry leaders and fellow tech enthusiasts.",
            image: "https://scontent.fdac11-1.fna.fbcdn.net/v/t39.30808-6/471726729_122110719038647360_4982353136851016130_n.jpg?stp=dst-jpg_s960x960_tt6&_nc_cat=108&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeELKWaNMVNbeG5P6edUQHy5ItpShxwbCq4i2lKHHBsKrhIZJoUNJXITXqeSvz3bYSAMlbCnwMHsuaDnfs_3ga87&_nc_ohc=tPM8gVwgqS8Q7kNvwEIaVMj&_nc_oc=AdnNiFqtn69CHc_qDZKAHAhZn-tqYauSsWqWNHM_KWeqTRy_rHeUAiI4wdssa__5Bt0&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-1.fna&_nc_gid=724xWw4HD4MwC0ichkgZTw&oh=00_AfIsrwQ8u8I2i9GbAozA37nIG3cdoNA58jh8cNUxQ2MEhA&oe=68363D08",
            link: "/event/"
        },
        {
            heading: "Rush Hour",
            time: "December 4, 2024",
            location: "UIU Gallery",
            details: "Join us for Rush Hour, an exciting event filled with tech talks, workshops, and networking opportunities, designed to inspire and empower the next generation of innovators and leaders in technology.",
            image: "https://scontent.fdac11-2.fna.fbcdn.net/v/t39.30808-6/484381367_677849471575429_2882193511448082183_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeGog9IgGSrIF7oXp1xI1K9_6Gb3YOBnNbHoZvdg4Gc1sRlqc_XI4awDzQvEeu0Fg2z7YcXjhDvzOUEr9UZ3pzBw&_nc_ohc=83EiaYVXHDEQ7kNvwE3ezyQ&_nc_oc=AdmyxAZsAkGz46kzXS4ogMRGH-TRk-5YkLoANglk5zUgJ_o5W2yM-PL0vug7PqCpQEY&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-2.fna&_nc_gid=gStIfFzgyPb_Ruyl9h00-g&oh=00_AfIGOPJBrE3p2kZEKq6xFN7HZpfbFB6lr1iqopI7ODuKfg&oe=68362F25",
            link: "/event/"
        },
        {
            heading: "Research 101",
            time: "Oct 9th, 2024",
            location: "Room 126",
            details: "Join us for Research 101, a comprehensive workshop designed to introduce students to the fundamentals of research methodologies, data analysis techniques, and effective presentation skills, empowering them to excel in their academic pursuits.",
            image: "https://scontent.fdac11-1.fna.fbcdn.net/v/t39.30808-6/484729646_677325414961168_8702768972533058128_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeHJKrRBMaIfReqk84C8pOPJguQ4XsOdQheC5Dhew51CF54U1bHqSoSu8RmZVsUFUcHS7KSz2Ao01gEzi_RF9v8i&_nc_ohc=KkK-dZsPvJEQ7kNvwEX3RC3&_nc_oc=AdlWZC4OS1wd1B3E0l-YujASqMk_fgmvCBZT4eXPm3lka85FBJIO5-SaB4TtmA-x0Gk&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-1.fna&_nc_gid=mTF9WK95qAjSFqKK4I97JA&oh=00_AfJR44Ts7-_v2cLhJjMcfWsQaAid4XJ9g8_nlXOI7mNEfg&oe=68363DAC",
            link: "/event/"
        },
        {
            heading: "TechTrove",
            time: "July 6-9, 2024",
            location: "Lobby Area",
            details: "In today's fast-paced world, robotics is revolutionizing industries and shaping our future. Whether it's healthcare, manufacturing, or everyday life, understanding robotics is essential for staying ahead. Robotics equips you with problem-solving skills, creativity, and technical expertise.",
            image: "https://scontent.fdac11-2.fna.fbcdn.net/v/t39.30808-6/482236483_675991651761211_3789288042738428016_n.jpg?stp=dst-jpg_s960x960_tt6&_nc_cat=106&ccb=1-7&_nc_sid=75d36f&_nc_eui2=AeEU77w3PcRPTJgNuoJgcloGrunoFDchk72u6egUNyGTvSPxrzCbyNRfqPSZZOrjQNsjIspjqhP8oSBdPU_kSYiL&_nc_ohc=0Zdb6k1DJjQQ7kNvwGAFs6L&_nc_oc=AdnXq_aUoSl3vlwqUr4EAyb4O7zD4PS7AtgxDoullUmWplsF88Dfg1-Ho9Oj0Fw1mPI&_nc_pt=1&_nc_zt=23&_nc_ht=scontent.fdac11-2.fna&_nc_gid=LnYFo_S_u4ySAYBelu5hbQ&oh=00_AfKcrVdhxZK8wHOGDoPQu2BHnNDiS7EJUf1Za829vV8zOQ&oe=68361B46",
            link: "/event/"
        }
    ];

    function renderUpcomingEvents(events) {
        const eventsContainer = document.getElementById('upcoming-events-container');
        eventsContainer.innerHTML = '';

        if (events.length === 0) {
            const noEventsMessage = document.createElement('div');
            noEventsMessage.className = 'col-span-4 text-center py-10';
            noEventsMessage.innerHTML = `
            <p class="text-2xl text-orange-500">No upcoming events are happening right now</p>
        `;
            eventsContainer.appendChild(noEventsMessage);
        } else {
            events.forEach(event => {
                const eventCard = document.createElement('div');
                eventCard.className =
                    'event-card rounded-xl min-w-[250px] bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-300 shadow-lg';
                eventCard.innerHTML = `
                <img src="${event.image || placeholderImage}" alt="Event" class="w-full h-64 object-cover rounded-t-xl border-b border-blue-200">
                <div class="event-details p-6 flex flex-col gap-4">
                    <h2 class="text-lg sm:text-xl font-extrabold text-gray-900">${event.heading}</h2>
                    <div class="flex items-start gap-4">
                        <button onclick="window.location.href='${event.link}'" class="event-details-button bg-blue-500 text-white rounded-lg p-3 hover:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div>
                            <p class="text-sm sm:text-base text-gray-800"><strong>Time:</strong> ${event.time}</p>
                            <p class="text-sm sm:text-base text-gray-800 mt-1"><strong>Location:</strong> ${event.location}</p>
                        </div>
                    </div>
                    <p class="text-sm sm:text-base text-gray-800 font-semibold line-clamp-3">${event.details}...</p>
                </div>
            `;
                eventsContainer.appendChild(eventCard);
            });
        }
    }

    function renderOurEvents(events) {
        const eventsContainer = document.getElementById('our-events-container');
        eventsContainer.innerHTML = '';

        if (events.length === 0) {
            const noEventsMessage = document.createElement('div');
            noEventsMessage.className = 'col-span-4 text-center py-10';
            noEventsMessage.innerHTML = `
            <p class="text-2xl text-orange-500">No events are happening right now</p>
        `;
            eventsContainer.appendChild(noEventsMessage);
        } else {
            events.forEach(event => {
                const eventCard = document.createElement('div');
                eventCard.className =
                    'event-card rounded-xl min-w-[250px] bg-gray-200 border border-gray-300 shadow-md';
                eventCard.innerHTML = `
                <img src="${event.image || placeholderImage}" alt="Event" class="w-full h-64 object-cover rounded-t-xl border-b border-gray-200">
                <div class="event-details p-5 flex flex-col gap-4">
                    <h2 class="text-base sm:text-lg font-bold text-gray-900">${event.heading}</h2>
                    <div class="flex items-start gap-4">
                        <button onclick="window.location.href='${event.link}'" class="event-details-button bg-red-500 text-white rounded-lg p-3 hover:bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div>
                            <p class="text-sm sm:text-base text-gray-900"><strong>Time:</strong> ${event.time}</p>
                            <p class="text-sm sm:text-base text-gray-900 mt-1"><strong>Location:</strong> ${event.location}</p>
                        </div>
                    </div>
                    <p class="text-sm sm:text-base text-gray-900 font-semibold line-clamp-3">${event.details}...</p>
                </div>
            `;
                eventsContainer.appendChild(eventCard);
            });
        }
    }

    window.onload = () => {
        renderUpcomingEvents(staticUpcomingEvents);
        renderOurEvents(staticOurEvents);
    };
    </script>
    <?php include ABSPATH . '_includes/footer.php'; ?>
</body>

</html>