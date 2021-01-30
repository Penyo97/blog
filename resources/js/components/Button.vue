<template>
    <div class="container">

        <button type="button" class="btn btn-primary " @click="click" v-if="disabled" disabled>{{text}}</button>
          <button type="button" class="btn btn-primary " @click="click" v-else >{{text}}</button>
    </div>
</template>

<script>
    export default {
            props:{
                id : ""
            },
            data() {
                return {
                    text: "friend",
                    disabled: false,
                }
           },
           methods: {
               click() {
                   this.text = "unfriend";
                   this.disabled = true;
                    axios.post(`/friend/${this.id}`).then(response => console.log("succes")).catch(function(error) {console.log(error)});
               }
           },
    }
</script>
