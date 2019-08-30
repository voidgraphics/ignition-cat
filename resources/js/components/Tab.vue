<template>
    <div class="tab-content">
        <div class="layout-col ignition-cat">
            <img :src="url" alt="A cute cat" class="ignition-cat__image">

            <p class="ignition-cat__credits">Gif courtesy of <a href="https://cataas.com">cataas.com</a></p>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                url: 'https://cataas.com/cat/gif?' + performance.now()
            };
        }
    }
</script>

<style>
    .ignition-cat {
        padding-top: 40px;
    }

    .ignition-cat__image {
        display: block;
        border-radius: 4px;
        margin: 0 auto;
    }

    .ignition-cat__credits {
        text-align: center;
        margin-top: 25px;
    }
</style>
