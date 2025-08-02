<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import type { Pagination } from '@/types/pagination';
import { router, useForm } from '@inertiajs/vue3';

defineOptions({ layout: AppLayout });

const props = defineProps<{
    users: Pagination<User>;
    filters: { search?: string };
}>();

type User = {
    id: number;
    name: string;
    email: string;
};

const form = useForm({
    search: props.filters.search || '',
});

function submit() {
    form.get(route('users.index'), {
        preserveScroll: true,
        preserveState: true,
    });
}

function go(url: string | null) {
    if (url) {
        router.visit(url);
    }
}
</script>

<template>
    <div>
        <h1 class="mb-4 text-2xl font-bold">Users</h1>

        <input v-model="form.search" @input="submit" type="text" placeholder="Search users..." class="mb-4 rounded border p-2" />

        <ul>
            <li v-for="user in users.data" :key="user.id">{{ user.name }} — {{ user.email }}</li>
        </ul>

        <button v-for="link in users.links" :key="link.label" :disabled="!link.url" @click="go(link.url)" class="mx-1" v-html="link.label" />
    </div>
</template>
