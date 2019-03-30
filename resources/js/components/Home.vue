<template>
        <div id="home" class=" row">
                <div class="col-md-12">
                    <div v-for="(item, i ) in data" :key="item + '-' + i">
                        <h3><router-link :to="'/treatments/' + item.slug">{{item.service_name}}</router-link></h3>
                        <div v-html="item.short_description"></div>
                        <div class="d-flex flex-row justify-content-end my-3">
                            <div class="d-flex flex-column text-right">
                                <span>
                                    <strong>Price: </strong><span class="service-price">${{item.service_price}}</span>
                                </span>
                                <span>
                                    <strong>Duration: </strong><span class="service-duration">{{secondsToHms(item.duration)}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-end">
                            <a href="/book-now"><button  class="btn btn-primary">Book Now</button></a>
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
            console.log('Component mounted.')
            axios.get(this.web_url + 'services')
            .then(response => {
                console.log(response);
                this.data = response.data;
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
