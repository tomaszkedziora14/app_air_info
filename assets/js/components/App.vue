<template lang="pug">
p {{ greeting }} World!
other-component
</template>

<script>
  import OtherComponent from "./OtherComponent.vue"

  export default {
    components: {
      OtherComponent
    },

    data() {
      return {
        greeting: "Hello"
      }
    }
  }
</script>

<style lang="stylus">
  p
  font-size 2em
             text-align center
</style>
