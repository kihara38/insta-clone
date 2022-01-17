<template>
    <div class="container">
        <button
            class="btn btn-primary"
            style="margin-left: 1.5rem"
            @click="followUser"
        >
            Follow me now
        </button>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    methods: {
        followUser() {
            alert("inside");
        },
    },
};
</script>
