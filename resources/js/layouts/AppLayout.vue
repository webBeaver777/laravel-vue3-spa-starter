<script setup lang="ts">
</script>

<template>
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">MyApp</h1>
            <div>
                <span class="mr-4">{{ $page.props.auth.user.name }}</span>
                <a href="/logout" method="post" as="button" class="text-red-500">Logout</a>
            </div>
        </header>

        <main class="p-6">
            <slot />
        </main>
    </div>
</template>
