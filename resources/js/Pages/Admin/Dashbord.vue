<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayout from './components/AdminLayout.vue'
import { Chart } from 'chart.js/auto'

// Initialize Flowbite components
onMounted(() => {
    initFlowbite();

    // Create the chart after the DOM is ready
    const ctx = document.getElementById('userGrowthChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'User Growth',
                data: [10, 50, 100, 200, 300, 400],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})
</script>

<template>
    <AdminLayout>
        <main class="p-4 md:ml-64 h-auto pt-20">
            <!-- Overview Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                <div class="flex items-center p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-3 mr-4 bg-blue-500 rounded-full dark:bg-blue-900">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Users</p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">1,234</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-3 mr-4 bg-green-500 rounded-full dark:bg-green-900">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Active Users</p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">567</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-3 mr-4 bg-yellow-500 rounded-full dark:bg-yellow-900">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L2 12h10V2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Pending Requests</p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">45</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-3 mr-4 bg-red-500 rounded-full dark:bg-red-900">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20v-8m-4 4h8"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Alerts</p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">12</p>
                    </div>
                </div>
            </div>

            <!-- Large Chart -->
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4 p-4 bg-white dark:bg-gray-800">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">User Growth</h2>
                <canvas id="userGrowthChart"></canvas>
            </div>

            <!-- Recent Activity and Other Data -->
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72 p-4 bg-white dark:bg-gray-800">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Recent Activity</h2>
                    <ul class="space-y-2">
                        <li class="text-gray-700 dark:text-gray-200">User1 logged in</li>
                        <li class="text-gray-700 dark:text-gray-200">User2 updated profile</li>
                        <li class="text-gray-700 dark:text-gray-200">User3 posted a comment</li>
                    </ul>
                </div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72 p-4 bg-white dark:bg-gray-800">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">System Status</h2>
                    <p class="text-gray-700 dark:text-gray-200">All systems operational</p>
                </div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72 p-4 bg-white dark:bg-gray-800">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Top Performers</h2>
                    <ul class="space-y-2">
                        <li class="text-gray-700 dark:text-gray-200">User1 - 123 points</li>
                        <li class="text-gray-700 dark:text-gray-200">User2 - 110 points</li>
                        <li class="text-gray-700 dark:text-gray-200">User3 - 98 points</li>
                    </ul>
                </div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72 p-4 bg-white dark:bg-gray-800">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Pending Tasks</h2>
                    <ul class="space-y-2">
                        <li class="text-gray-700 dark:text-gray-200">Review new requests</li>
                        <li class="text-gray-700 dark:text-gray-200">Update user roles</li>
                        <li class="text-gray-700 dark:text-gray-200">Deploy updates</li>
                    </ul>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4 p-4 bg-white dark:bg-gray-800">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Upcoming Events</h2>
                <ul class="space-y-2">
                    <li class="text-gray-700 dark:text-gray-200">August 15: System Maintenance</li>
                    <li class="text-gray-700 dark:text-gray-200">September 5: New Feature Release</li>
                    <li class="text-gray-700 dark:text-gray-200">October 1: User Conference</li>
                </ul>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72 p-4 bg-white dark:bg-gray-800">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Notifications</h2>
                    <ul class="space-y-2">
                        <li class="text-gray-700 dark:text-gray-200">New user sign-up</li>
                        <li class="text-gray-700 dark:text-gray-200">Security alert</li>
                        <li class="text-gray-700 dark:text-gray-200">System update available</li>
                    </ul>
                </div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72 p-4 bg-white dark:bg-gray-800">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Messages</h2>
                    <ul class="space-y-2">
                        <li class="text-gray-700 dark:text-gray-200">Message from User1</li>
                        <li class="text-gray-700 dark:text-gray-200">Message from Admin</li>
                        <li class="text-gray-700 dark:text-gray-200">System notification</li>
                    </ul>
                </div>
            </div>
        </main>
    </AdminLayout>
</template>
