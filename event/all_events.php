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
            heading: "Tech Talk",
            time: "10:00 AM",
            location: "Room 101",
            details: "A deep dive into artificial intelligence, featuring discussions on neural networks, deep learning algorithms, and their applications in real-world scenarios like autonomous vehicles.",
            image: placeholderImage,
            link: "/event/"
        },
        {
            heading: "Workshop",
            time: "2:00 PM",
            location: "Room 102",
            details: "Learn advanced techniques in data science, including data visualization, statistical analysis, and machine learning model deployment, guided by experienced data scientists.",
            image: placeholderImage,
            link: "/event/"
        },
        {
            heading: "Seminar",
            time: "4:00 PM",
            location: "Auditorium A",
            details: "Discover the future of blockchain technology, exploring its applications in finance, supply chain management, and decentralized systems, with case studies from leading industries.",
            image: placeholderImage,
            link: "/event/"
        },
        {
            heading: "Panel Discussion",
            time: "6:00 PM",
            location: "Conference Hall",
            details: "A dynamic panel of industry leaders discussing the impact of technology on society, covering topics like privacy, ethics, and the role of AI in shaping future job markets.",
            image: placeholderImage,
            link: "/event/"
        },
        {
            heading: "Networking Event",
            time: "8:00 PM",
            location: "Lobby Area",
            details: "Connect with professionals, entrepreneurs, and innovators in a relaxed setting, with opportunities to exchange ideas, collaborate on projects, and build lasting professional relationships.",
            image: placeholderImage,
            link: "/event/"
        },
        {
            heading: "Networking Event",
            time: "8:00 PM",
            location: "Lobby Area",
            details: "An evening of networking with tech enthusiasts, featuring interactive sessions, startup pitches, and opportunities to connect with mentors and investors in the tech ecosystem.",
            image: placeholderImage,
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