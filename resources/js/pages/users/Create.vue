<script setup lang="ts">
import { router } from '@inertiajs/vue3';
import { ref } from 'vue';

const name = ref('');
const email = ref('');
const password = ref('');
const errors = ref<Record<string, unknown>>({});

const getError = (key: string): string | null => {
    const err = errors.value[key];
    if (Array.isArray(err) && typeof err[0] === 'string') {
        return err[0];
    }
    return null;
};

const submit = () => {
    router.post(
        '/users',
        {
            name: name.value,
            email: email.value,
            password: password.value,
        },
        {
            onError: (e) => (errors.value = e),
        },
    );
};
</script>

<template>
    <div class="mx-auto max-w-lg px-4 py-8">
        <h1 class="mb-6 text-2xl font-bold text-gray-800 dark:text-white">Создать пользователя</h1>

        <div class="space-y-4">
            <div>
                <label class="mb-1 block text-sm font-medium">Имя</label>
                <input v-model="name" class="w-full rounded border px-3 py-2" />
                <div v-if="getError('name')" class="text-sm text-red-500">{{ getError('name') }}</div>
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium">Email</label>
                <input v-model="email" class="w-full rounded border px-3 py-2" />
                <div v-if="getError('email')" class="text-sm text-red-500">{{ getError('email') }}</div>
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium">Пароль</label>
                <input v-model="password" type="password" class="w-full rounded border px-3 py-2" />
                <div v-if="getError('password')" class="text-sm text-red-500">{{ getError('password') }}</div>
            </div>

            <button @click="submit" class="mt-4 rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Сохранить</button>
        </div>
    </div>
</template>
