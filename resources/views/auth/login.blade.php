<x-layout title="Login">
    <div class="flex min-h-screen items-center rounded-2xl justify-center bg-gray-300 p-4">
        <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-xl">
            <h2 class="mb-6 text-center text-3xl font-bold text-gray-800">Login</h2>

            <form action="#" method="POST" class="space-y-4">
                <!-- Email Field -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" placeholder="you@example.com" required
                           class="mt-1 w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500" />
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <a href="#" class="text-xs text-blue-600 hover:underline">Forgot?</a>
                    </div>
                    <input type="password" placeholder="••••••••" required
                           class="mt-1 w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500" />
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="remember" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500" />
                    <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                </div>
                <button type="submit"
                        class="w-full rounded-lg bg-blue-600 py-2.5 font-semibold text-white transition duration-200 hover:bg-blue-700">
                    Sign In
                </button>
            </form>
            <p class="mt-6 text-center text-sm text-gray-600">
                Don't have an account?
                <a href="#" class="font-medium text-blue-600 hover:underline">Sign up</a>
            </p>
        </div>
    </div>

</x-layout>
