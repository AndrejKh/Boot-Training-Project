<x-app-layout >
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
                                href="/"
                                class="bg-primary py-2 px-4 font-medium md:text-base lg:px-6 bg-gray-100 rounded-tr rounded-tl text-zinc-500 border-b-4 border-b-gray-800"
                            >
                                Search for courses
                            </a>
                            <a
                                href="/home-trainers"
                                class="text-body-color py-2 px-4 font-medium md:text-base lg:px-6"
                            >
                                All trainers
                            </a>
                        </div>
                        <div>
                            <div
                                class="text-body-color p-6 text-base leading-relaxed flex justify-center"
                            >
                                <label class="block  flex items-end">
                                    <select name="region" id="region" class="block w-full mt-1">
                                        <option value="">Select region</option>
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
                                        @foreach($courseslist as $list)
                                        <option value="{{$list}}">{{$list}}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <label class="block flex items-end ml-4">
                                    <button class="text-white px-4 sm:px-8 py-2 sm:py-2 bg-gray-800 hover:bg-gray-700">Go</button>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @if($courses && count($courses) > 0)
    @foreach($courses as $course)
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 text-gray-900">
                    <div class="flex justify-end">
                        <img class="w-24 h-24" src="{{asset('storage/'.$course['user']['trainer']['photo'])}}" alt="">
                    </div>
                    <div class="flex justify-start">
                        <h3 class="font-bold">{{$course['level']}} {{$course['name']}}</h3>
                    </div>
                    <div class="flex ">
                        <p class="font-bold mr-2">Regions Covered: </p>
                        <p>{{$course['region']}}</p>
                    </div>
                    <div class="flex ">
                        <p class="font-bold mr-2">Format: </p>
                        <p>{{$sharedFormat[$course['format']]}}</p>
                    </div>
                    <div class="flex justify-end">
                        <a class="px-2 sm:px-2 py-1 sm:py-1 bg-gray-800 hover:bg-gray-700 text-white" href="{{route('viewcourse', ['id' => $course['id']]) }}">View detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="font-medium">No Records</div>
    @endif
    
</x-app-layout>
