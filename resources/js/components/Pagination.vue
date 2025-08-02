<script setup lang="ts">
import { router } from '@inertiajs/vue3';

defineProps<{
    links: Array<{ url: string | null; label: string; active: boolean }>;
}>();
</script>

<template>
    <div class="mt-4 flex flex-wrap gap-2">
        <template v-for="link in links" :key="link.label">
            <button
                v-if="link.url"
                @click="router.visit(link.url)"
                class="rounded bg-gray-200 px-3 py-1 dark:bg-gray-700"
                :class="{ 'font-bold underline': link.active }"
                v-html="link.label"
            />
        </template>
    </div>
</template>
