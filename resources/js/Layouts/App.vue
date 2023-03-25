<template>

      <div>
            <Navbar />
            <slot name="content"></slot>
      </div>

</template>

<script>

import Navbar from '@/Components/Main/Navbar.vue'

export default {

    components: {

        Navbar

    }

}

</script>

<style lang="scss" scoped>

</style>