<div class="flex flex-row flex-wrap">
    <div class="mb-6 w-full max-w-full flex-shrink px-4">
        <div class="h-full rounded-lg bg-white px-10 py-6 shadow-lg ">
            <div class="relative">
                <div class="-mx-4 flex flex-row flex-wrap">
                    <div class="w-full max-w-full flex-shrink px-4">
                        <div class="mb-6 md:flex md:justify-between">
                            <a href="#"
                                class="mb-3 inline-block rounded border border-indigo-500 bg-indigo-500 px-4 py-2 text-center leading-5 text-gray-100 hover:border-indigo-600 hover:bg-indigo-600 hover:text-white hover:ring-0 focus:border-indigo-600 focus:bg-indigo-600 focus:outline-none focus:ring-0">Add
                                new <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                    fill="currentColor" class="bi bi-plus-lg inline-block ml-1"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                                    </path>
                                </svg></a>
                            <!-- search -->
                            <div class="group relative mt-6 flex h-full w-full items-center md:mt-0 md:w-64">
                                <svg class="pointer-events-none absolute left-0 z-20 ml-4 block h-4 w-4 fill-current text-gray-500 group-hover:text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                    </path>
                                </svg>
                                <input type="text"
                                    class="block w-full rounded-2xl border border-gray-100 bg-gray-100 py-1.5 pl-10 pr-4 leading-normal focus:border-gray-200 focus:outline-none focus:ring-0    "
                                    placeholder="Search files">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- vertical tabs -->
                <div x-data="{ tabs: 1 }" class="-mx-4 flex flex-row flex-wrap">
                    <div class="mb-6 w-full max-w-full flex-shrink px-4">
                        <div class="-mx-4 flex flex-row flex-wrap">
                            <a href="javascript:;" @click.prevent="tabs = 1"
                                :class="{ 'text-gray-800 ': tabs === 1 }"
                                class="w-full max-w-full flex-shrink px-4 text-gray-800  lg:w-1/3">
                                <div :class="{ 'bg-gray-100  text-gray-800  rounded': tabs ===
                                        1 }"
                                    class="block rounded bg-white p-6 font-semibold text-gray-800 shadow   ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="bi bi-folder2 inline-block text-indigo-500 mr-2"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v7a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-9zM2.5 3a.5.5 0 0 0-.5.5V6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5zM14 7H2v5.5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V7z">
                                        </path>
                                    </svg>My Files
                                    <div class="my-2 h-2 w-full rounded-full bg-indigo-200" title="36%">
                                        <div class="h-full rounded-full bg-indigo-500 text-center text-xs text-white"
                                            style="width:36%"></div>
                                    </div>
                                    <div class="inline-block text-sm text-gray-500 ">
                                        <span class="font-bold text-gray-700 ">11 Gb</span>/30 Gb
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;" @click.prevent="tabs = 2"
                                :class="{ 'text-gray-800 ': tabs === 2 }"
                                class="w-full max-w-full flex-shrink px-4 lg:w-1/3">
                                <div :class="{ 'bg-gray-100  text-gray-800  rounded': tabs ===
                                        2 }"
                                    class="block bg-white p-6 font-semibold shadow ">
                                    <svg viewBox="0 0 87.3 78" class="inline-block h-4 w-4 mr-2"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m6.6 66.85 3.85 6.65c.8 1.4 1.95 2.5 3.3 3.3l13.75-23.8h-27.5c0 1.55.4 3.1 1.2 4.5z"
                                            fill="#0066da"></path>
                                        <path
                                            d="m43.65 25-13.75-23.8c-1.35.8-2.5 1.9-3.3 3.3l-25.4 44a9.06 9.06 0 0 0 -1.2 4.5h27.5z"
                                            fill="#00ac47"></path>
                                        <path
                                            d="m73.55 76.8c1.35-.8 2.5-1.9 3.3-3.3l1.6-2.75 7.65-13.25c.8-1.4 1.2-2.95 1.2-4.5h-27.502l5.852 11.5z"
                                            fill="#ea4335"></path>
                                        <path
                                            d="m43.65 25 13.75-23.8c-1.35-.8-2.9-1.2-4.5-1.2h-18.5c-1.6 0-3.15.45-4.5 1.2z"
                                            fill="#00832d"></path>
                                        <path
                                            d="m59.8 53h-32.3l-13.75 23.8c1.35.8 2.9 1.2 4.5 1.2h50.8c1.6 0 3.15-.45 4.5-1.2z"
                                            fill="#2684fc"></path>
                                        <path
                                            d="m73.4 26.5-12.7-22c-.8-1.4-1.95-2.5-3.3-3.3l-13.75 23.8 16.15 28h27.45c0-1.55-.4-3.1-1.2-4.5z"
                                            fill="#ffba00"></path>
                                    </svg>Google Drive
                                    <div class="my-2 h-2 w-full rounded-full bg-indigo-200" title="66%">
                                        <div class="h-full rounded-full bg-indigo-500 text-center text-xs text-white"
                                            style="width:66%"></div>
                                    </div>
                                    <div class="inline-block text-sm text-gray-500 ">
                                        <span class="font-bold text-gray-700 ">80 Gb</span>/120 Gb
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;" @click.prevent="tabs = 3"
                                :class="{ 'text-gray-800 ': tabs === 3 }"
                                class="w-full max-w-full flex-shrink px-4 lg:w-1/3">
                                <div :class="{ 'bg-gray-100  text-gray-800  rounded': tabs ===
                                        3 }"
                                    class="block bg-white p-6 font-semibold shadow ">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="inline-block text-indigo-500 mr-2" width="1rem"
                                        height="1rem" fill="currentColor" viewBox="0 0 512 512">
                                        <path
                                            d="M256.32,126.24,136.16,204.49l120.16,78.24L136.16,361,16,282.08l120.16-78.24L16,126.24,136.16,48ZM135.52,385.76l120.16-78.25,120.16,78.25L255.68,464Zm120.8-103.68,120.16-78.24-120.16-77.6L375.84,48,496,126.24,375.84,204.49,496,282.73,375.84,361Z">
                                        </path>
                                    </svg>Dropbox
                                    <div class="my-2 h-2 w-full rounded-full bg-indigo-200" title="20%">
                                        <div class="h-full rounded-full bg-indigo-500 text-center text-xs text-white"
                                            style="width:20%"></div>
                                    </div>
                                    <div class="inline-block text-sm text-gray-500 ">
                                        <span class="font-bold text-gray-700 ">50 Gb</span>/256 Gb
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="w-full max-w-full flex-shrink px-4">
                        <div x-data="{ tab: 'all' }" class="relative">
                            <h3 class="mb-3 text-lg font-semibold text-gray-600 ">Quick Access
                            </h3>
                            <!-- filter start -->
                            <div class="mb-6 inline-block">
                                <a href="javascript:;" @click.prevent="tab = 'all'"
                                    :class="{ 'bg-gray-100 ': tab === 'all' }"
                                    class="mb-2 inline-block rounded bg-gray-100 px-4 py-2 text-center shadow hover:bg-gray-100 mr-2  ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="bi bi-file-earmark inline-block text-indigo-500 mr-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z">
                                        </path>
                                    </svg>All
                                </a>
                                <a href="javascript:;" @click.prevent="tab = 'image'"
                                    :class="{ 'bg-gray-100 ': tab === 'image' }"
                                    class="mb-2 inline-block rounded px-4 py-2 text-center shadow hover:bg-gray-100 mr-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="bi bi-file-earmark-image inline-block text-purple-500 mr-1"
                                        viewBox="0 0 16 16">
                                        <path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                        <path
                                            d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5V14zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4z">
                                        </path>
                                    </svg>Image
                                </a>
                                <a href="javascript:;" @click.prevent="tab = 'video'"
                                    :class="{ 'bg-gray-100 ': tab === 'video' }"
                                    class="mb-2 inline-block rounded px-4 py-2 text-center shadow hover:bg-gray-100 mr-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="bi bi-file-play inline-block text-red-500 mr-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6 10.117V5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43z">
                                        </path>
                                        <path
                                            d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z">
                                        </path>
                                    </svg>Video
                                </a>
                                <a href="javascript:;" @click.prevent="tab = 'music'"
                                    :class="{ 'bg-gray-100 ': tab === 'music' }"
                                    class="mb-2 inline-block rounded px-4 py-2 text-center shadow hover:bg-gray-100 mr-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="bi bi-file-earmark-music inline-block text-yellow-600 mr-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M11 6.64a1 1 0 0 0-1.243-.97l-1 .25A1 1 0 0 0 8 6.89v4.306A2.572 2.572 0 0 0 7 11c-.5 0-.974.134-1.338.377-.36.24-.662.628-.662 1.123s.301.883.662 1.123c.364.243.839.377 1.338.377.5 0 .974-.134 1.338-.377.36-.24.662-.628.662-1.123V8.89l2-.5V6.64z">
                                        </path>
                                        <path
                                            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z">
                                        </path>
                                    </svg>Music
                                </a>
                                <a href="javascript:;" @click.prevent="tab = 'zip'"
                                    :class="{ 'bg-gray-100 ': tab === 'zip' }"
                                    class="mb-2 inline-block rounded px-4 py-2 text-center shadow hover:bg-gray-100 mr-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="bi bi-file-zip inline-block text-indigo-500 mr-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 7.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V7.5zm2 0h-1v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 0 1-.03-.243V7.5z">
                                        </path>
                                        <path
                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm5.5-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9v1H8v1h1v1H8v1h1v1H7.5V5h-1V4h1V3h-1V2h1V1z">
                                        </path>
                                    </svg>Zip
                                </a>
                                <a href="javascript:;" @click.prevent="tab = 'others'"
                                    :class="{ 'bg-gray-100 ': tab === 'others' }"
                                    class="mb-2 inline-block rounded px-4 py-2 text-center shadow hover:bg-gray-100 mr-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor"
                                        class="bi bi-file-earmark inline-block text-indigo-500 mr-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z">
                                        </path>
                                    </svg>Others
                                </a>
                            </div>
                            <h3 class="mb-3 flex items-center space-x-1 font-semibold text-gray-600">
                                @foreach ($this->breadcumb as $folderName => $folderPath)
                                    @if (! $loop->first)
                                        <x-heroicon-s-chevron-right class="w-4 h-4 stroke-current stroke-2 text-slate-500 inline-block" />
                                    @else
                                        <x-heroicon-s-folder-open class="w-5 h-5 text-indigo-500 inline-block" />
                                    @endif

                                    {{-- @if($folderPath !== $this->location)
                                        <button
                                            wire:click="$set('location', '{{ $folderPath }}')"
                                            class="hover:text-indigo-500"
                                        >
                                            {{ $folderName }}
                                        </button>
                                    @else
                                        <span>{{ $folderName }}</span>
                                    @endif --}}

                                    <button
                                        @if($folderPath !== $this->location)
                                            wire:click="$set('location', '{{ $folderPath }}')"
                                        @endif
                                        @class([
                                            'hover:text-indigo-500',
                                            'text-indigo-500' => $folderPath === $this->location
                                        ])
                                    >
                                        {{ $folderName }}
                                    </button>
                                @endforeach
                            </h3>
                            <!-- content filter start -->
                            <table class="w-full table-auto text-sm text-left">
                                <thead class="bg-gray-100 ">
                                    <tr>
                                        <th class="px-4 py-3 font-normal">File name</th>
                                        <th class="hidden px-4 py-3 font-normal md:table-cell">Last modified</th>
                                        <th class="px-4 py-3 font-normal">File size</th>
                                        <th class="px-4 py-3 text-center font-normal">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($this->listContents as $content)
                                        <tr x-show="tab === 'others' || tab === 'all'" style="">
                                            <td class="px-4 py-3 font-medium">
                                                <button
                                                    @if($content->type() !== 'file')
                                                        wire:click="$set('location', '{{ $content->path() }}')"
                                                    @endif
                                                    class="flex space-x-2"
                                                >
                                                    @if ($content->type() !== 'file')
                                                        <x-heroicon-s-folder class="w-5 h-5 text-indigo-500 inline-block" />
                                                    @else
                                                        <x-dynamic-component
                                                            :component="\App\Enums\MimeType::tryFrom($content->mimeType())?->icon() ?? 'heroicon-s-document'"
                                                            class="w-5 h-5 text-indigo-500 inline-block"
                                                        />
                                                    @endif
                                                    <span>{{ str($content->path())->afterLast('/') }}</span>
                                                </button>
                                            </td>
                                            <td class="hidden px-4 py-3 font-medium md:table-cell">{{ now()->parse($content->lastModified())->format('M j, Y') }}</td>
                                            <td class="px-4 py-3 font-medium">{{ $content->type() != 'dir' ? $content->fileSize() : '' }}</td>
                                            <td class="px-4 py-3 text-center font-medium">
                                                <a href="javascript:;"
                                                    class="inline-block hover:text-red-500 mr-2"
                                                    title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <a href="javascript:;"
                                                    class="inline-block hover:text-green-500 mr-2"
                                                    title="Rename">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach


                                    <tr x-show="tab === 'video' || tab === 'all'" style="">
                                        <td class="px-4 py-3 font-medium">
                                            <a href="javascript:;">
                                                <span class="mr-1 text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-play-btn-fill inline-block text-red-500"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z">
                                                        </path>
                                                    </svg>
                                                </span>Web Design Tutorial.mp4
                                            </a>
                                        </td>
                                        <td class="hidden px-4 py-3 font-medium md:table-cell">Nov 12, 2022</td>
                                        <td class="px-4 py-3 font-medium">421 Mb</td>
                                        <td class="px-4 py-3 text-center font-medium">
                                            <a href="javascript:;"
                                                class="inline-block hover:text-red-500 mr-2"
                                                title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="javascript:;"
                                                class="inline-block hover:text-green-500 mr-2"
                                                title="Rename">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr x-show="tab === 'music' || tab === 'all'" style="">
                                        <td class="px-4 py-3 font-medium">
                                            <a href="javascript:;">
                                                <span class="mr-1 text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-music-note-beamed inline-block text-yellow-600"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"></path>
                                                        <path
                                                            d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z">
                                                        </path>
                                                    </svg>
                                                </span>Welcome New Normal.mp3
                                            </a>
                                        </td>
                                        <td class="hidden px-4 py-3 font-medium md:table-cell">Nov 12, 2022</td>
                                        <td class="px-4 py-3 font-medium">65 Mb</td>
                                        <td class="px-4 py-3 text-center font-medium">
                                            <a href="javascript:;"
                                                class="inline-block hover:text-red-500 mr-2"
                                                title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="javascript:;"
                                                class="inline-block hover:text-green-500 mr-2"
                                                title="Rename">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr x-show="tab === 'zip' || tab === 'all'" style="">
                                        <td class="px-4 py-3 font-medium">
                                            <a href="javascript:;">
                                                <span class="mr-1 text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-file-zip inline-block" viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.5 7.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V7.5zm2 0h-1v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 0 1-.03-.243V7.5z">
                                                        </path>
                                                        <path
                                                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm5.5-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9v1H8v1h1v1H8v1h1v1H7.5V5h-1V4h1V3h-1V2h1V1z">
                                                        </path>
                                                    </svg>
                                                </span>Project Design.zip
                                            </a>
                                        </td>
                                        <td class="hidden px-4 py-3 font-medium md:table-cell">Nov 12, 2022</td>
                                        <td class="px-4 py-3 font-medium">121 Mb</td>
                                        <td class="px-4 py-3 text-center font-medium">
                                            <a href="javascript:;"
                                                class="inline-block hover:text-red-500 mr-2"
                                                title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="javascript:;"
                                                class="inline-block hover:text-green-500 mr-2"
                                                title="Rename">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr x-show="tab === 'music' || tab === 'all'" style="">
                                        <td class="px-4 py-3 font-medium">
                                            <a href="javascript:;">
                                                <span class="mr-1 text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-music-note-beamed inline-block text-yellow-600"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"></path>
                                                        <path
                                                            d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z">
                                                        </path>
                                                    </svg>
                                                </span>Babby Dragon.mp3
                                            </a>
                                        </td>
                                        <td class="hidden px-4 py-3 font-medium md:table-cell">Nov 12, 2022</td>
                                        <td class="px-4 py-3 font-medium">421 Mb</td>
                                        <td class="px-4 py-3 text-center font-medium">
                                            <a href="javascript:;"
                                                class="inline-block hover:text-red-500 mr-2"
                                                title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="javascript:;"
                                                class="inline-block hover:text-green-500 mr-2"
                                                title="Rename">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr x-show="tab === 'image' || tab === 'all'">
                                        <td class="px-4 py-3 font-medium">
                                            <a href="javascript:;">
                                                <span class="mr-1 text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-image inline-block text-purple-500"
                                                        viewBox="0 0 16 16">
                                                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                        </path>
                                                        <path
                                                            d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z">
                                                        </path>
                                                    </svg>
                                                </span>Home Design.png
                                            </a>
                                        </td>
                                        <td class="hidden px-4 py-3 font-medium md:table-cell">Nov 12, 2022</td>
                                        <td class="px-4 py-3 font-medium">421 Mb</td>
                                        <td class="px-4 py-3 text-center font-medium">
                                            <a href="javascript:;"
                                                class="inline-block hover:text-red-500 mr-2"
                                                title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="javascript:;"
                                                class="inline-block hover:text-green-500 mr-2"
                                                title="Rename">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr x-show="tab === 'image' || tab === 'all'">
                                        <td class="px-4 py-3 font-medium">
                                            <a href="javascript:;">
                                                <span class="mr-1 text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-image inline-block text-purple-500"
                                                        viewBox="0 0 16 16">
                                                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                        </path>
                                                        <path
                                                            d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z">
                                                        </path>
                                                    </svg>
                                                </span>Beach.jpg
                                            </a>
                                        </td>
                                        <td class="hidden px-4 py-3 font-medium md:table-cell">Nov 12, 2022</td>
                                        <td class="px-4 py-3 font-medium">201 Mb</td>
                                        <td class="px-4 py-3 text-center font-medium">
                                            <a href="javascript:;"
                                                class="inline-block hover:text-red-500 mr-2"
                                                title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="javascript:;"
                                                class="inline-block hover:text-green-500 mr-2"
                                                title="Rename">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
