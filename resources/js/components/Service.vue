<template>
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                    <h3>{{data.service_name}}</h3>
                    <div v-html="data.detailed_description">
                    </div>
                    <div class="d-flex flex-row justify-content-end my-3">
                        <div class="d-flex flex-column text-right">
                            <span>
                                <strong>Price: </strong><span class="service-price">${{data.service_price}}</span>
                            </span>
                            <span>
                                <strong>Duration: </strong><span class="service-duration">{{secondsToHms(data.duration)}}</span>
                            </span>
                        </div>
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

        methods: {
            secondsToHms(d) {
                d = Number(d);

                var h = Math.floor(d / 3600);
                var m = Math.floor(d % 3600 / 60);
                var s = Math.floor(d % 3600 % 60);

                return ('0' + h).slice(-2) + ":" + ('0' + m).slice(-2) + ":" + ('0' + s).slice(-2);
            }
        },
        
    }
</script>
