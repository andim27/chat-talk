<template>
    <div class="col-md-8">
        <div class="form-inline">
            <input id="msg" type="text" class="form-control" name="msg" placeholder="Say something">
            <button type="button" class="btn btn-success">Send</button>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Send Component mounted.');

        }
    }
</script>