<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="icon" href="./img/Group 236.svg" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        fontColor: "#1E1E1E",
                        card1: "#FBC0C0",
                        card2: "#F4E87A",
                        card3: "#AEA8F8",
                        card4: "#F4E884",
                        button: "#3E3C3C",
                        profcard: "#F1EFEF",
                        nav: "#808185",
                    },
                    fontFamily: {
                        sans: ["IBM Plex Sans", "sans-serif"],
                    },
                },
            },
        };
    </script>
</head>
<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Interlink</span>
                </div>
            </div>
        </div>
    </nav>

    <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                    <hr class="my-2 border-gray-300 dark:border-gray-600" />
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" 
                            height="24" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            class="lucide lucide-inbox"
                        >
                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/>
                            <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Primary</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" 
                            height="24" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            class="lucide lucide-archive"
                        >
                            <rect width="20" 
                            height="5" 
                            x="2" y="3" 
                            rx="1"/>
                            <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8"/>
                            <path d="M10 12h4"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Archive</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" 
                            height="24" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            class="lucide lucide-trash-2"
                        >
                            <path d="M3 6h18"/>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                            <line x1="10" 
                                x2="10" 
                                y1="11" 
                                y2="17"/>
                            <line x1="14" 
                                x2="14" 
                                y1="11" 
                                y2="17"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Bin</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!--messages-->
    <div class="ml-64 pt-20 px-4">
        <div class="flex flex-col gap-2.5">
            <div class="border border-gray-200 bg-[#FDFDFD] drop-shadow-lg  p-4 rounded-lg hover:bg-gray-100 flex items-center justify-between cursor-pointer" onclick="openModal('Message 1: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus amet omnis facilis sunt veritatis voluptates, incidunt, quae tempore alias ratione mollitia quod veniam deleniti sint soluta suscipit rerum dolor optio.')">
                <img src="" alt="avatar" class="rounded-full mr-3 w-12 h-12" />
                <div class="flex-1 flex items-center justify-between">
                    <span class="text-gray-700 font-semibold">Joe Nyak</span>
                    <span class="text-gray-500">2:50 PM</span>
                </div>
            </div>

            <div class="border border-gray-200 bg-[#FDFDFD] drop-shadow-lg  p-4 rounded-lg hover:bg-gray-100 flex items-center justify-between cursor-pointer" onclick="openModal('Message 2: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus amet omnis facilis sunt veritatis voluptates, incidunt, quae tempore alias ratione mollitia quod veniam deleniti sint soluta suscipit rerum dolor optio.')">
                <img src="" alt="avatar" class="rounded-full mr-3 w-12 h-12" />
                <div class="flex-1 flex items-center justify-between">
                    <span class="text-gray-700 font-semibold">Joe Nyak</span>
                    <span class="text-gray-500">2:50 PM</span>
                </div>
            </div>

            <div class="border border-gray-200 bg-[#FDFDFD] drop-shadow-lg  p-4 rounded-lg hover:bg-gray-100 flex items-center justify-between cursor-pointer" onclick="openModal('Message 3: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus amet omnis facilis sunt veritatis voluptates, incidunt, quae tempore alias ratione mollitia quod veniam deleniti sint soluta suscipit rerum dolor optio.')">
                <img src="" alt="avatar" class="rounded-full mr-3 w-12 h-12" />
                <div class="flex-1 flex items-center justify-between">
                    <span class="text-gray-700 font-semibold">Joe Nyak</span>
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-500">2:50 PM</span>
                    </div>
                </div>
            </div>

            <div id="modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
                <div id="modalContent" class="bg-white p-5 rounded-lg w-[730px] flex flex-col relative transition-all duration-300">
                    <button class="absolute top-3 right-3 p-1 hover:bg-gray-300 transition-colors" onclick="closeModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <h2 id="modalTitle" class="text-lg font-semibold">Nyak</h2>
                    <p id="modalMessage" class="mt-2 text-gray-800 flex-1"></p>

                    <div class="mt-4 flex justify-between">
                        <button class="bg-red-500 text-white px-4 py-2 rounded" onclick="deleteMessage()">Delete</button>
                        <button class="bg-white text-black border border-gray-500 px-4 py-2 rounded hover:bg-gray-100" onclick="toggleReplySection()">Reply</button>
                    </div>

                    <!-- reply section -->
                    <div id="replySection" class="mt-4 hidden p-4 bg-gray-50 rounded-md shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" 
                            height="24" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            class="lucide lucide-reply"
                        >
                            <polyline points="9 17 4 12 9 7"/>
                            <path d="M20 18v-2a4 4 0 0 0-4-4H4"/>
                        </svg> <br>
                        <textarea
                            id="replyText"
                            class="w-full h-24 p-2 border border-gray-300 rounded-md resize-none"
                            placeholder="Type your reply here..."
                        ></textarea>

                        <div class="flex items-center justify-between mt-2">
                            <label class="flex items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                    width="24" 
                                    height="24" 
                                    viewBox="0 0 24 24" 
                                    fill="none" 
                                    stroke="currentColor" 
                                    stroke-width="2" 
                                    stroke-linecap="round"
                                    stroke-linejoin="round" 
                                    class="lucide lucide-file"
                                >
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"/>
                                </svg>
                                Choose File
                                <input
                                    type="file"
                                    class="hidden"
                                    accept="*"
                                    onchange="handleFileChange(event)"
                                />
                            </label>
                            <button class="bg-white text-black border border-gray-500 px-4 py-2 rounded hover:bg-gray-100" onclick="replyMessage()">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Archives Role-->
    <div class="ml-64 pt-20 px-4">
        <div class="max-screen mx-auto mt-8 bg-[#FDFDFD] drop-shadow-lg p-6 rounded-lg">
            <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class=" text-left text-base text-[#808185]">
                    <th class="p-4">Image</th>
                    <th class="p-4">Full Name</th>
                    <th class="p-4">Role</th>
                    <th class="p-4">Deleted at</th>
                    </tr>  
                </thead> 
                <tbody class="text-base text-semibold">
                    <tr class="border-b">
                        <td class="p-4">
                            <img src="" alt="" class="h-10 w-10 rounded-full">
                        </td>
                        <td class="p-4">Rizal</td>
                        <td class="p-4">Role in the deep</td>
                        <td class="p-4">10/10</td>
                        <td class="p-4 flex space-x-2"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function openModal(message) {
            document.getElementById('modal').classList.remove('hidden');
            document.getElementById('modalMessage').textContent = message;
            document.getElementById('modalContent').style.height = 'auto'; 
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
            document.getElementById('replyText').value = ''; 
            document.getElementById('replySection').classList.add('hidden'); 
            document.getElementById('modalContent').style.height = 'auto'; 
        }

        function toggleReplySection() {
            const replySection = document.getElementById('replySection');
            replySection.classList.toggle('hidden');

            const modalContent = document.getElementById('modalContent');
            if (replySection.classList.contains('hidden')) {
                modalContent.style.height = 'auto'; 
            } else {
                modalContent.style.height = 'auto';
            }
        }

        function replyMessage() {
            const replyText = document.getElementById('replyText').value;
            const fileInput = document.querySelector('input[type="file"]');
            const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'No file chosen';

            // idk logic ahsha
            alert(`Reply sent: ${replyText} (Attachment: ${fileName})`);

            // clear reply 
            document.getElementById('replyText').value = '';
            fileInput.value = '';
            toggleReplySection(); 
        }

        function handleFileChange(event) {
            const fileName = event.target.files[0]?.name || 'No file chosen';
            alert(`Selected file: ${fileName}`);
        }

        function deleteMessage() {
            alert("Message deleted!");
            closeModal(); 
        }
    </script>
</body>
</html>
