<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';

defineOptions({ layout: AppLayout });
</script>

<template>
    <div>
        <h2 class="mb-4 text-2xl font-bold">Welcome, {{ $page.props.auth.user.name }} 👋</h2>
        <p>This is your dashboard.</p>
    </div>
</template>
