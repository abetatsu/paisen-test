<template>
     <button v-on:click="submitForm()">Trigger Notification</button>
</template>

<script>
    
  export default {
    methods: {
      submitForm(){
          this.$toasted.show('Hello, I am from ItSolutionStuff.com')
      }
    }
  }
</script>
