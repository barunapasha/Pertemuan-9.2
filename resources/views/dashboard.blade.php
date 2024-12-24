<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-white border-b border-gray-100">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 justify-between items-center">
                    <div class="flex items-center gap-8">
                        <div class="flex-shrink-0">
                            <span class="text-2xl font-semibold text-gray-900">Dashboard</span>
                        </div>
                        <div class="hidden md:flex space-x-8">
                            <a href="#" class="text-gray-900 hover:text-gray-500 px-3 py-2 text-sm font-medium">Home</a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">Analytics</a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">Reports</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <a href="{{ route('profile') }}" class="flex items-center gap-3 hover:opacity-80">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                                <span class="text-sm font-medium text-gray-600">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </span>
                            </div>
                            <span class="hidden md:block text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span>
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="rounded-lg px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mb-8">
                    <h1 class="text-2xl font-semibold text-gray-900">Welcome back, {{ Auth::user()->name }}</h1>
                    <p class="mt-1 text-sm text-gray-600">Here's what's happening with your projects today.</p>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-lg bg-white p-6 shadow-sm">
                        <div class="flex items-center">
                            <div class="flex-1">
                                <h3 class="text-sm font-medium text-gray-500">Total Projects</h3>
                                <p class="mt-1 text-2xl font-semibold text-gray-900">12</p>
                            </div>
                            <div class="w-12 h-12 bg-indigo-50 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-lg bg-white p-6 shadow-sm">
                        <div class="flex items-center">
                            <div class="flex-1">
                                <h3 class="text-sm font-medium text-gray-500">Active Tasks</h3>
                                <p class="mt-1 text-2xl font-semibold text-gray-900">8</p>
                            </div>
                            <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-lg bg-white p-6 shadow-sm">
                        <div class="flex items-center">
                            <div class="flex-1">
                                <h3 class="text-sm font-medium text-gray-500">Team Members</h3>
                                <p class="mt-1 text-2xl font-semibold text-gray-900">24</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-50 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h2 class="text-lg font-medium text-gray-900">Recent Activity</h2>
                    <div class="mt-4 rounded-lg bg-white shadow-sm">
                        <div class="p-6">
                            <div class="space-y-6">
                                <div class="flex items-center space-x-4">
                                    <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">New project "Dashboard UI" created</p>
                                        <p class="text-sm text-gray-500">2 hours ago</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">Meeting scheduled with design team</p>
                                        <p class="text-sm text-gray-500">4 hours ago</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">Project "Analytics App" completed</p>
                                        <p class="text-sm text-gray-500">1 day ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>