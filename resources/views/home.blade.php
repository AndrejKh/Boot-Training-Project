<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div
                        x-data="
                            {
                            openTab: 1,
                            activeClasses: 'bg-gray-100 rounded-tr rounded-tl text-zinc-500 border-b-4 border-b-gray-800',
                            inactiveClasses: 'text-body-color hover:text-zinc-500',
                            }
                        "
                        class="mb-5 w-full"
                    >
                        <div class="flex flex-wrap border-b border-[#E4E4E4] px-4">
                            <a
                                href="javascript:void(0)"
                                @click="openTab = 1"
                                :class="openTab === 1 ? activeClasses : inactiveClasses"
                                class="bg-primary py-2 px-4 font-medium md:text-base lg:px-6"
                            >
                                Search for courses
                            </a>
                            <a
                                href="javascript:void(0)"
                                @click="openTab = 2"
                                :class="openTab === 2 ? activeClasses : inactiveClasses"
                                class="text-body-color py-2 px-4 font-medium md:text-base lg:px-6"
                            >
                                All trainers
                            </a>
                        </div>
                        <div>
                            <div
                                x-show="openTab === 1"
                                class="text-body-color p-6 text-base leading-relaxed flex justify-center"
                            >
                                <label class="block  flex items-end">
                                    <select name="location" id="location" class="block w-full mt-1">
                                        <option value="">Select location</option>
                                        <option value="London-England">London-England</option>
                                        <option value="East Midlands-England">East Midlands-England</option>
                                        <option value="West Midlands-England">West Midlands-England</option>
                                        <option value="North East-England">North East-England</option>
                                        <option value="North West-England">North West-England</option>
                                        <option value="South West-England">South West-England</option>
                                        <option value="South Eest-England">South Eest-England</option>
                                        <option value="Yorkshire & The Humber-England">Yorkshire & The Humber-England</option>
                                        <option value="Scotland">Scotland</option>
                                        <option value="Wales">Wales</option>
                                        <option value="Northern Ireland">Northern Ireland</option>
                                    </select>
                                </label>
                                <label class="block ml-4">
                                    <span class="text-gray-700">Search for Course</span>
                                    <select name="course" id="course" class="block w-full mt-1">
                                        <option value="">Select course</option>
                                        <option value="First Aid">First Aid</option>
                                        <option value="Moving and Handling">Moving and Handling</option>
                                        <option value="Hygiene">Hygiene</option>
                                        <option value="Medication">Medication</option>
                                        <option value="Level 2 Oral Hygiene">Level 2 Oral Hygiene</option>
                                    </select>
                                </label>
                                <label class="block flex items-end ml-4">
                                    <button class="text-white px-4 sm:px-8 py-2 sm:py-2 bg-gray-800 hover:bg-gray-700">Go</button>
                                </label>
                            </div>
                            <div
                                x-show="openTab === 2"
                                class="text-body-color p-6 text-base leading-relaxed flex justify-center"
                                style="display: none"
                            >
                                <label class="block">
                                    <span class="text-gray-700">Filter by regions covered</span>
                                    <select name="location" id="location" class="block w-full mt-1">
                                        <option value="">Select location</option>
                                        <option value="London-England">London-England</option>
                                        <option value="East Midlands-England">East Midlands-England</option>
                                        <option value="West Midlands-England">West Midlands-England</option>
                                        <option value="North East-England">North East-England</option>
                                        <option value="North West-England">North West-England</option>
                                        <option value="South West-England">South West-England</option>
                                        <option value="South Eest-England">South Eest-England</option>
                                        <option value="Yorkshire & The Humber-England">Yorkshire & The Humber-England</option>
                                        <option value="Scotland">Scotland</option>
                                        <option value="Wales">Wales</option>
                                        <option value="Northern Ireland">Northern Ireland</option>
                                    </select>
                                </label>
                                <label class="block ml-4">
                                    <span class="text-gray-700">Filter by course</span>
                                    <select name="course" id="course" class="block w-full mt-1">
                                        <option value="">Select course</option>
                                        <option value="First Aid">First Aid</option>
                                        <option value="Moving and Handling">Moving and Handling</option>
                                        <option value="Hygiene">Hygiene</option>
                                        <option value="Medication">Medication</option>
                                        <option value="Level 2 Oral Hygiene">Level 2 Oral Hygiene</option>
                                    </select>
                                </label>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between">
                        <h3 class="font-bold">Level1 First Aid,  FirstAid4U</h3>
                        <img src="{{asset('storage/Untitled.png')}}" alt="">
                    </div>
                    <div class="flex ">
                        <p class="font-bold mr-2">Regions Covered: </p>
                        <p>North West England, Yourkshire & The Humber Scotland</p>
                    </div>
                    <div class="flex ">
                        <p class="font-bold mr-2">Fromat: </p>
                        <p>On Site</p>
                    </div>
                    <div>
                        <a href="{{route('viewtrainer', ['id' => 1, 'key'=> 3]) }}">View detail</a>
                    </div>
                    
                </div>
            </div>
        </div>

        
    </div>
    
</x-app-layout>
