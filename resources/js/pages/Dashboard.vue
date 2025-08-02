<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';

defineOptions({ layout: AppLayout });
</script>

<template>
    <div>
        <h2 class="mb-4 text-2xl font-bold">Добро пожаловать, {{ $page.props.auth.user.name }} 👋</h2>
        <p>Это ваш дашборд.</p>
        <Link
            href="/users"
            class="inline-block mt-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
        >
            Перейти к пользователям
        </Link>
    </div>
</template>
