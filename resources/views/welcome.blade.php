<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentalCare</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans">
    <header class="bg-blue-500 text-white py-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">DentalCare</h1>
            <div class="flex items-center space-x-4">
                <a href="/signup" class="px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">Signup</a>
                <a href="/login" class="px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">Login</a>
            </div>
        </div>
    </header>

    <main>
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold mb-4 text-blue-500">Welcome to DentalCare</h2>
                <p class="text-gray-700 mb-8">We're dedicated to giving you the best dental care experience. From routine cleanings to advanced treatments, our expert team ensures your smile stays healthy and radiant.</p>
                <p class="text-gray-700">Booking an appointment has never been easier—get started today and take the first step toward a brighter smile!</p>
                <a href="/login" class="mt-8 inline-block bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 transition-colors">Book Appointment</a>
            </div>
        </section>

        <section class="py-20">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold mb-8 text-blue-500">Our Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-gray-100 p-6 rounded-md shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-bold mb-2">Preventive Care</h3>
                        <ul class="space-y-2">
                            <li>Dental check-up - ₱1500.00</li>
                            <li>Fits and Fissure Sealant (per tooth) - ₱1000.00</li>
                            <li>Oral Prophylaxis (cleaning of upper and lower teeth) - ₱2000.00</li>
                            <li>Teeth Whitening (with home whitening kit, includes free cleaning of teeth) - ₱14,000.00</li>
                        </ul>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-md shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-bold mb-2">Dental Bonding and Filling</h3>
                        <ul class="space-y-2">
                            <li>Composite Resin Fillings (per surface) - ₱2,000.00</li>
                            <li>Root Canal therapy (per canal) - ₱5,000.00</li>
                        </ul>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-md shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-bold mb-2">Periodontics</h3>
                        <ul class="space-y-2">
                            <li>Periodontal Surgery (upper or lower) - ₱15,000.00</li>
                        </ul>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-md shadow-md hover:shadow-lg transition-shadow">
                        <h3 class="text-xl font-bold mb-2">Dental Surgery</h3>
                        <ul class="space-y-2">
                            <li>Simple extraction (per tooth) - ₱1200.00</li>
                            <li>Impaction extraction (per tooth) - ₱13,000.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-100">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold mb-8 text-blue-500">Contact Us</h2>
                <div class="bg-white p-8 rounded-md shadow-md">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Clinic Address</h3>
                            <p class="mb-2">Dr. Alex Garcia Dental Care Clinic</p>
                            <p class="mb-2">397 Betag, La Trinidad, Benguet 2601 Philippines</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Contact Information</h3>
                            <p class="mb-2">Email: dentalcare101@gmail.com</p>
                            <p>Phone Number: 0912-634-9302</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-500 text-white py-4 shadow-inner">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 DentalCare. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>