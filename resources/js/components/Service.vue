<template>
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                    <h3>{{data.service_name}}</h3>
                    <div v-html="data.detailed_description">
                    </div>
                    <div class="d-flex flex-row justify-content-end mb-3">
                        <strong>{{data.service_price}}min/{{data.duration}}min</strong>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <a href="/book-now"><button  class="btn btn-primary">Book Now</button></a>
                    </div>
                    <div class="d-flex flex-row justify-content-end mt-5">
                        <a @click="$router.go(-1)"><button  class="btn btn-primary">Back</button></a>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
   export default {
        data() {
            return {
                data: [],
            };
        },
        mounted() {
            axios.get(this.web_url + 'service/' + this.$route.params.slug)
            .then(response => {
            this.data = response.data;
            // JSON responses are automatically parsed.
            })
            .catch(e => {
                this.errors.push(e)
            });
        },
        
    }
</script>
