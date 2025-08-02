<script setup lang="ts"></script>

<template>
    <div class="min-h-screen bg-zinc-900 text-white">
        <header class="flex items-center justify-between bg-zinc-800 px-6 py-4 text-white shadow-md">
            <h1 class="text-xl font-bold">My best app</h1>
            <div>
                <span class="mr-4">{{ $page.props.auth.user.name }}</span>
                <a href="/logout" method="post" as="button" class="text-red-400 transition-colors hover:text-red-300"> Logout </a>
            </div>
        </header>

        <main class="p-6">
            <slot />
        </main>
    </div>
</template>
