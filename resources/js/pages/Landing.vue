<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="max-w-md w-full text-center space-y-6">
            <h1 class="text-4xl font-bold text-gray-800">Добро пожаловать</h1>
            <p class="text-gray-600">Войдите или зарегистрируйтесь, чтобы продолжить</p>

            <div class="flex justify-center space-x-4">
                <Link
                    href="/login"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
                >
                    Войти
                </Link>
                <Link
                    href="/register"
                    class="px-6 py-2 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition"
                >
                    Регистрация
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
</script>
