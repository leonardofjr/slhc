<template>
        <div id="home" class=" row">
                <div class="col-md-12">
                    <h2>All Treatments</h2>
                    <div v-for="item in data" :key="item">
                        <h3><router-link :to="'/treatments/' + item.slug">{{item.service_name}}</router-link></h3>
                        <p>{{item.detailed_description}}</p>
                        <div class="d-flex flex-row justify-content-end mb-3">
                            <strong>${{item.service_price.toFixed(2)}}/{{item.duration}}min</strong>
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
        
    }
</script>
