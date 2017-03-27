<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <a href='http://localhost:8000/dashboard/posts'>Posts</a>
                    </div>
                    <div class="panel-body">
                        <a href='http://localhost:8000/dashboard/users'>Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        ready() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
</style>

