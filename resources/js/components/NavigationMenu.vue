<template>
    <div class="w-full relative bg-red">
        <button class="bg-black w-full">icon Categories v-line</button>
        <div class="absolute top-0 left-full w-56 py-4 bg-gray" v-if="hasSubmenu">Submenu</div>
    </div>
</template>

<script>
export default {
    props: {
        hasSubmenu: {
            type: Boolean,
            default: false,
        }
    },
    data() {
        return {
            active: false,
        };
    },
};
</script>