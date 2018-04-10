<template>
    <div class="container">
        <b-table striped hover :items="items" :fields="fields"></b-table>
    </div>
</template>

<script>
    export default {
        props: ['items', 'fields'],
        data(){
            return {

            }
        }
    }
</script>