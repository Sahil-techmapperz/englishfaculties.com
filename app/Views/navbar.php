<?php
// This example uses PHP with a bit of inline JavaScript to handle state and interactions.
// It uses Tailwind CSS classes, just as in your React code.

// State handling for dropdowns and modal visibility
echo "
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownStates = {
            individual: false,
            enterprise: false,
            school: false,
            college: false
        };
        
        const toggleDropdown = (menu) => {
            dropdownStates[menu] = !dropdownStates[menu];
            const dropdownMenu = document.getElementById(menu + '-dropdown');
            const toggleIcon = document.getElementById(menu + '-icon');
            
            dropdownMenu.classList.toggle('hidden', !dropdownStates[menu]);
            toggleIcon.classList.toggle('fa-chevron-down', !dropdownStates[menu]);
            toggleIcon.classList.toggle('fa-chevron-up', dropdownStates[menu]);
        };
        
        const openModal = () => {
            document.getElementById('modal').classList.remove('hidden');
        };
        
        const closeModal = () => {
            document.getElementById('modal').classList.add('hidden');
        };
        
        window.toggleDropdown = toggleDropdown;
        window.openModal = openModal;
        window.closeModal = closeModal;
    });
</script>
";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('public/styles.css')?>">
   
</head>
<body>


<div class="bg-gray-100 text-gray-800 max-sm:hidden">
    <!-- Top contact and social section -->
    <div class="flex justify-between items-center px-6 py-2 bg-[#0D5EF4]">
        <div class="flex gap-4 text-white">
            <p class="flex items-center gap-2 m-0 text-white">
                <i class="fas fa-phone-alt "></i> +91 6783654256
            </p>
            <p class="flex items-center gap-2 m-0 text-white">
                <i class="fas fa-envelope"></i> info@EnglishFaculites
            </p>
        </div>
        <div class="flex items-center gap-2 text-white">
            <p class="mr-2 font-semibold text-white m-0">Follow Us On:</p>
            <i class="fab fa-twitter cursor-pointer hover:text-blue-300"></i>
            <i class="fab fa-instagram cursor-pointer hover:text-pink-400"></i>
            <i class="fab fa-linkedin cursor-pointer hover:text-blue-500"></i>
            <i class="fab fa-youtube cursor-pointer hover:text-red-600"></i>
        </div>
    </div>

    <!-- Main navigation section -->
    <div class="flex justify-between static top-0 items-center px-6 py-4">
        <div class="text-2xl font-bold">LOGO</div>
        <div class="flex items-center gap-10">
            <ul class="flex gap-6 text-lg mb-0 max-sm:hidden" style="list-style: none;">
                <li class="hover:text-blue-600 cursor-pointer">Home</li>

                <!-- FOR INDIVIDUAL Dropdown -->
                <li class="relative">
                    <button onclick="toggleDropdown('individual')" class="flex items-center gap-1  hover:text-blue-600 cursor-pointer">
                        For Individual <i id="individual-icon" class="fas fa-chevron-down"></i>
                    </button>
                    <ul id="individual-dropdown" style="list-style: none; width:max-content; padding-left:0;" class="hidden absolute z-50 bg-gray-100 shadow-lg py-2 mt-2 w-40 rounded-lg">
                        <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">Group Training</li>
                        <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">Enterprise</li>
                    </ul>
                </li>

                <!-- FOR ENTERPRISE Dropdown -->
                <li class="relative">
                    <button onclick="toggleDropdown('enterprise')" class="flex items-center gap-1 hover:text-blue-600 cursor-pointer">
                        For Enterprise<i id="enterprise-icon" class="fas fa-chevron-down"></i>
                    </button>
                    <ul id="enterprise-dropdown" style="list-style: none; width:max-content; padding-left:0;" class="hidden absolute z-50 bg-gray-100 shadow-lg py-2 mt-2 w-40 rounded-lg">
                        <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">Group Training</li>
                        <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">Enterprise</li>
                    </ul>
                </li>

                <!-- FOR SCHOOL STUDENT Dropdown -->
                <li class="relative">
                    <button onclick="toggleDropdown('school')" class="flex items-center gap-1 hover:text-blue-600 cursor-pointer">
                        For School Student <i id="school-icon" class="fas fa-chevron-down"></i>
                    </button>
                    <ul id="school-dropdown" style="list-style: none; width:max-content; padding-left:0;" class="hidden absolute z-50 bg-gray-100 shadow-lg py-2 mt-2 w-40 rounded-lg">
                        <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">Group Training</li>
                        <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">Enterprise</li>
                    </ul>
                </li>

                <!-- FOR COLLEGE & UNIVERSITIES Dropdown -->
                <li class="relative">
                    <button onclick="toggleDropdown('college')" class="flex items-center gap-1 hover:text-blue-600 cursor-pointer">
                        For College & University <i id="college-icon" class="fas fa-chevron-down"></i>
                    </button>
                    <ul id="college-dropdown" style="list-style: none; width:max-content; padding-left:0;" class="hidden absolute z-50 bg-gray-100 shadow-lg py-2 mt-2 w-40 rounded-lg">
                        <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">Group Training</li>
                        <li class="hover:bg-gray-200 px-4 py-2 cursor-pointer">Enterprise</li>
                    </ul>
                </li>
            </ul>
            <button class="bg-blue-600 flex gap-2 justify-center items-center text-white px-4 py-2 rounded hover:bg-blue-700">
                Register <i class="fas fa-arrow-right text-white"></i>
            </button>

            <!-- Gift Icon for Modal -->
            <i onclick="openModal()" class="fas fa-gift text-yellow-400 text-2xl cursor-pointer hover:scale-110 transition-transform duration-200 ml-2"></i>
        </div>

        <!-- Modal for Discount Offers -->
        <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h2 class="text-xl font-semibold mb-4">Special Course Discount Offers</h2>
                <p class="mb-6">Get exclusive discounts on our top-rated courses. Limited-time offers!</p>
                <button onclick="closeModal()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Close</button>
            </div>
        </div>
    </div>
</div>



  
</body>
</html>