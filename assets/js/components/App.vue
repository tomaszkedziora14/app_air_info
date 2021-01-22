<template lang="pug">
<p> {{ greeting }} World! </p>
</template>

<script>
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
